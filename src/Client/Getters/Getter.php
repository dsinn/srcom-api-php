<?php
namespace Dsinn\SrcomApi\Client\Getters;

use Dsinn\SrcomApi\Client\Pagination;
use GuzzleHttp\ClientInterface;

abstract class Getter
{
    /** @var ClientInterface */
    protected $httpClient;

    public function __construct(ClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @param string $dataClass
     * @param string $uri
     * @param array $queryParams
     * @param Pagination $pagination
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function getPaginatedResponse(
        string $dataClass,
        string $uri,
        array $queryParams = [],
        Pagination &$pagination = null
    ): array
    {
        if (!$pagination) {
            $pagination = new Pagination();
        }
        $pagination->setDataClass($dataClass);
        $response = $this->httpClient->request('GET', $uri, $queryParams + $pagination->getQueryParams());
        $pagination->updateState($response['pagination']);
        $pagination->setHttpClient($this->httpClient);

        return array_map(function (array $objectData) use ($dataClass) {
            return new $dataClass($objectData);
        }, $response['data']);
    }
}
