<?php
namespace Dsinn\SrcomApi\Tests;

class ClientTest extends \PHPUnit\Framework\TestCase
{
    public function testInstantiation()
    {
        self::assertIsObject(new \Dsinn\SrcomApi\Client(new \GuzzleHttp\Client()));
    }
}
