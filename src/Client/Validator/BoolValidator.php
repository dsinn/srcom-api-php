<?php
namespace Dsinn\SrcomApi\Client\Validator;

class BoolValidator implements ValidatorInterface
{
    public function getErrorMessage(string $key, $value): string
    {
        return "\"{$key}\" must be of type boolean, but got " . gettype($value) . '.';
    }

    public function validate(string $key, $value): bool
    {
        return is_bool($value);
    }
}
