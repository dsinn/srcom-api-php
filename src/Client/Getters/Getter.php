<?php
namespace Dsinn\SrcomApi\Client\Getters;

use Dsinn\SrcomApi\Client\Pagination;
use Dsinn\SrcomApi\Client\Validator\ValidatorInterface;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;

abstract class Getter
{
    /** @var ClientInterface */
    protected $httpClient;

    public function __construct(ClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @param string[] $embeds
     * @return string[][]
     */
    protected function getEmbedOptions(array $embeds)
    {
        return ['query' => ['embed' => implode(',', array_unique($embeds))]];
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

    protected function getResponseBody(ResponseInterface $response): array
    {
        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param string[] $userOptions
     * @param ValidatorInterface[] $validOptions
     */
    protected function validateOptions(array $userOptions, array $validOptions): void
    {
        /** @var ValidatorInterface[] $regexValidOptions */
        $regexValidOptions = array_combine(
            array_map([$this, 'globToRegex'], array_keys($validOptions)),
            array_values($validOptions)
        );

        $unexpectedKeys = [];

        foreach ($userOptions as $key => $value) {
            foreach ($regexValidOptions as $regex => $validator) {
                if (preg_match($regex, $key)) {
                    if (!$validator->validate($key, $value)) {
                        trigger_error($validator->getErrorMessage($key, $value), E_USER_WARNING);
                    }
                    continue 2;
                }
            }
            $unexpectedKeys[] = $key;
        }

        if ($unexpectedKeys) {
            trigger_error(sprintf(
                'Valid options are [%s], but found [%s].',
                implode(', ', array_keys($validOptions)),
                implode(', ', $unexpectedKeys)
            ), E_USER_WARNING);
        }
    }

    private function globToRegex(string $glob): string
    {
        return '/^' . str_replace('*', '.*', $glob) . '$/';
    }
}
