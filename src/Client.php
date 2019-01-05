<?php
namespace Dsinn\SrcomApi;

use Dsinn\SrcomApi\Client\Getters\Categories;
use Dsinn\SrcomApi\Client\Getters\Leaderboards;
use Dsinn\SrcomApi\Client\Getters\Series;
use Dsinn\SrcomApi\Client\Getters\Variables;
use GuzzleHttp\ClientInterface;

class Client
{
    const DEFAULT_BASE_URI = 'https://www.speedrun.com/api/v1/';

    /** @var ClientInterface  */
    private $httpClient;
    private $objectCache;

    public function __construct(ClientInterface $guzzleClient)
    {
        $this->httpClient = $guzzleClient;
        $this->objectCache = [];
    }

    public function categories(): Categories
    {
        return $this->getObject('categories', Categories::class);
    }

    public function leaderboards(): Leaderboards
    {
        return $this->getObject('leaderboards', Leaderboards::class);
    }

    public function series(): Series
    {
        return $this->getObject('series', Series::class);
    }

    public function variables(): Variables
    {
        return $this->getObject('variables', Variables::class);
    }

    private function getObject(string $key, string $class)
    {
        return $objectCache[$key] ?? ($objectCache[$key] = new $class($this->httpClient));
    }
}
