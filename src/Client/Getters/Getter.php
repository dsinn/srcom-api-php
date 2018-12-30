<?php
namespace Dsinn\SrcomApi\Client\Getters;

use GuzzleHttp\ClientInterface;

abstract class Getter
{
    /** @var ClientInterface */
    protected $httpClient;

    public function __construct(ClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }
}
