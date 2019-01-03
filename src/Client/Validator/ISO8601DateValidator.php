<?php
namespace Dsinn\SrcomApi\Client\Validator;

class ISO8601DateValidator implements ValidatorInterface
{
    public function getErrorMessage(string $key, $value): string
    {
        return "\"{$key}\" must be a date in the ISO 8601 format.";
    }

    public function validate(string $key, $value): bool
    {
        return !empty(\DateTime::createFromFormat(\DateTime::ISO8601, $value));
    }
}
