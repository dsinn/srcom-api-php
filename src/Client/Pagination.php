<?php
namespace Dsinn\SrcomApi\Client;

use Dsinn\SrcomApi\Client\DataTypes\Links;
use GuzzleHttp\ClientInterface;

class Pagination
{
    const DEFAULT_MAX = 20;
    const MAX_LIMIT = 200;

    /** @var string */
    private $dataClass;
    /** @var ClientInterface */
    private $httpClient;
    /** @var Links */
    private $links;
    /** @var int */
    private $offset;
    /** @var int */
    private $max;
    /** @var int */
    private $size;

    public function __construct(int $offset = 0, int $max = self::DEFAULT_MAX)
    {
        assert($offset >= 0, new \UnexpectedValueException('Pagination offset cannot be negative.'));
        assert($max > 0, new \UnexpectedValueException('Pagination max must be positive.'));
        if ($max > self::MAX_LIMIT) {
            trigger_error(
                'The pagination max is capped at ' . self::MAX_LIMIT . ", but it was set to {$max}."
            );
        }
    }

    /**
     * @return \stdClass[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getNextPage(): array
    {
        assert(!empty($this->links['next']), new \BadMethodCallException('"Next" link not found.'));
        $this->request($this->links['next']);
    }

    public function getMax(): int
    {
        return $this->max;
    }

    public function getOffset(): int
    {
        return $this->getOffset();
    }

    /**
     * @return \stdClass[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getPrevPage(): array
    {
        assert(!empty($this->links['prev']), new \BadMethodCallException('"Prev" link not found.'));
        $this->request($this->links['prev']);
    }

    public function getQueryParams(): array
    {
        return ['offset' => $this->offset, 'max' => $this->max];
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function hasNextPage(): bool
    {
        return !empty($this->links['next']);
    }

    public function hasPrevPage(): bool
    {
        return !empty($this->links['prev']);
    }

    public function setDataClass(string $dataClass): self
    {
        $this->dataClass = $dataClass;
        return $this;
    }

    public function setHttpClient(ClientInterface $httpClient): self
    {
        $this->httpClient = $httpClient;
        return $this;
    }

    public function updateState(array $paginationObject): void
    {
        $this->offset = $paginationObject['offset'];
        $this->max = $paginationObject['max'];
        $this->size = $paginationObject['size'];
        $this->links = new Links($paginationObject['links']);
    }

    /**
     * @param string $uri
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function request(string $uri)
    {
        assert(empty($this->httpClient), new \BadMethodCallException('HTTP client not provided.'));
        $response = $this->httpClient->request('GET', $uri);
        $this->updateState($response['pagination']);
    }
}
