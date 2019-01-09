<?php
namespace Dsinn\SrcomApi\Tests;

use Dsinn\SrcomApi\Client\Validator\BoolValidator;
use Dsinn\SrcomApi\Client\Validator\ISO8601DateValidator;
use Dsinn\SrcomApi\Client\Validator\PositiveIntValidator;
use Dsinn\SrcomApi\Client\Validator\SetOfValuesValidator;
use Dsinn\SrcomApi\Client\Validator\StringValidator;

class ValidatorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider boolValidatorProvider
     * @param $input
     * @param bool $expected
     */
    public function testBoolValidator($input, bool $expected): void
    {
        $validator = new BoolValidator();
        self::assertSame($expected, $validator->validate('', $input));
    }

    public function boolValidatorProvider(): array
    {
        return [
            ['1', true],
            ['yes', true],
            ['true', true],
            [1, true],
            [true, true],
            ['0', true],
            ['no', true],
            ['false', true],
            [0, true],
            [false, true],
            ['foo', false],
            [-1, false],
            [2, false],
        ];
    }

    /**
     * @dataProvider ISO8601DateValidatorProvider
     * @param $input
     * @param bool $expected
     */
    public function testISO8601DateValidator($input, bool $expected): void
    {
        $validator = new ISO8601DateValidator();
        self::assertSame($expected, $validator->validate('', $input));
    }

    public function ISO8601DateValidatorProvider(): array
    {
        return [
            ['2019-01-01', true],
            ['20190101', true],
            [20190101, true],

            ['2019-13-01', false],
            ['20191301', false],
            [20191301, false],

            ['2019-13-01', false],
            ['20191301', false],
            [20191301, false],

            ['2019-01-32', false],
            ['20190132', false],
            [20190132, false],

            ['10000-01-01', true],
            ['100000101', true],
            [100000101, true],

            [true, false],
            [false, false],
        ];
    }

    /**
     * @dataProvider positiveIntValidatorProvider
     * @param $input
     * @param bool $expected
     */
    public function testPositiveIntValidator($input, bool $expected): void
    {
        $validator = new PositiveIntValidator();
        self::assertSame($expected, $validator->validate('', $input));
    }

    public function positiveIntValidatorProvider(): array
    {
        return [
            [-1, false],
            ['-1', false],

            [0, false],
            ['0', false],

            [1, true],
            ['1', true],

            [PHP_INT_MAX, true],
            [PHP_INT_MIN, false],
            [true, false],
            [false, false],
        ];
    }

    /**
     * @dataProvider setOfValuesValidatorProvider
     * @param array $constructorArgs
     * @param $input
     * @param bool $expected
     */
    public function testSetOfValuesValidator(array $constructorArgs, $input, bool $expected): void
    {
        $validator = new SetOfValuesValidator(...$constructorArgs);
        self::assertSame($expected, $validator->validate('', $input));
    }

    public function setOfValuesValidatorProvider(): array
    {
        return [
            [[['foo']], 'foo', true],
            [[['bar']], 'foo', false],

            [[[1], false], '1', true],
            [[[1], true], '1', false],
        ];
    }

    /**
     * @dataProvider stringValidatorProvider
     * @param $input
     * @param bool $expected
     */
    public function testStringValidator($input, bool $expected): void
    {
        $validator = new StringValidator();
        self::assertSame($expected, $validator->validate('', $input));
    }

    public function stringValidatorProvider(): array
    {
        return [
            ['foo', true],
            ['0', true],
            [0, false],
            [true, false],
            [false, false],
        ];
    }
}
