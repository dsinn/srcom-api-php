<?php
namespace Dsinn\SrcomApi\Tests;

use Dsinn\SrcomApi\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Stream;
use PHPUnit\Framework\MockObject\MockObject;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function getClient(string $bodyContent): Client
    {
        /** @var Stream|MockObject $mockBody */
        $mockBody = $this->createMock(Stream::class);
        $mockBody->method('getContents')->willReturn($bodyContent);
        /** @var Response|MockObject $mockResponse */
        $mockResponse = $this->createMock(Response::class);
        $mockResponse->method('getBody')->willReturn($mockBody);
        /** @var \GuzzleHttp\Client|MockObject $mockHttpClient */
        $mockHttpClient = $this->createMock(\GuzzleHttp\Client::class);
        $mockHttpClient->method('request')->willReturn($mockResponse);
        return new Client($mockHttpClient);
    }
}
