<?php
namespace Dsinn\SrcomApi;

use Dsinn\SrcomApi\Client\Getter\Categories;
use GuzzleHttp\ClientInterface;

class Client
{
    /** @var ClientInterface  */
    private $httpClient;
    private $objectCache;

    public function __construct(ClientInterface $guzzleClient)
    {
        $this->httpClient = $guzzleClient;
        $this->objectCache = [];
    }

    public function categories()
    {
        return $objectCache['categories'] ?? ($objectCache['categories'] = new Categories($this->httpClient));
    }
}
