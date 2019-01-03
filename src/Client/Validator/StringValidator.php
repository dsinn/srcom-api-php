<?php
namespace Dsinn\SrcomApi\Client\Validator;

class StringValidator implements ValidatorInterface
{
    public function getErrorMessage(string $key, $value): string
    {
        return "\"{$key}\" must be of type string, but got " . gettype($value) . '.';
    }

    public function validate(string $key, $value): bool
    {
        return is_string($value);
    }
}
