<?php
namespace Dsinn\SrcomApi\Client\Validator;

class PositiveIntValidator implements ValidatorInterface
{
    public function getErrorMessage(string $key, $value): string
    {
        return "\"{$key}\" must be a positive integer, which \"{$value}\" is not.";
    }

    public function validate(string $key, $value): bool
    {
        return (is_int($value) || ctype_digit($value)) && $value > 0;
    }
}
