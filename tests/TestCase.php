<?php
namespace Dsinn\SrcomApi\Tests;

use Dsinn\SrcomApi\Client;
use PHPUnit\Framework\MockObject\MockObject;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function getClient(string $response): Client
    {
        /** @var \GuzzleHttp\Client|MockObject $mockHttpClient */
        $mockHttpClient = $this->createMock(\GuzzleHttp\Client::class);
        $mockHttpClient->method('request')->willReturn(json_decode($response, true));
        return new Client($mockHttpClient);
    }
}
