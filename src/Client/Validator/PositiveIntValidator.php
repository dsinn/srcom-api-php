<?php
namespace Dsinn\SrcomApi\Client\Validator;

class PositiveIntValidator implements ValidatorInterface
{
    public function getErrorMessage(string $key, $value): string
    {
        return "\"{$key}\" must be a positive integer, but {$value} is not positive.";
    }

    public function validate(string $key, $value): bool
    {
        return $value > 0;
    }
}
