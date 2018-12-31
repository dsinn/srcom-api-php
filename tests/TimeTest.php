<?php
namespace Dsinn\SrcomApi\Tests;

use Dsinn\SrcomApi\Client\DataTypes\Time;

class TimeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider stringProvider
     * @param float $secondsElapsed
     * @param string $expectedString
     */
    public function testString(float $secondsElapsed, string $expectedString)
    {
        $time = new Time($secondsElapsed);
        self::assertSame($expectedString, $time->getString());
    }

    public function stringProvider()
    {
        return [
            [0, '0m 00s'],
            [6, '0m 06s'],
            [42, '0m 42s'],
            [0.006, '0m 00s 006ms'],
            [0.69, '0m 00s 690ms'],
            [69, '1m 09s'],
            [69.69, '1m 09s 690ms'],
            [3600, '1h 00m 00s'],
            [3600.69, '1h 00m 00s 690ms'],
        ];
    }
}
