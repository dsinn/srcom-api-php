<?php
namespace Dsinn\SrcomApi\Client\Validator;

class ISO8601DateValidator implements ValidatorInterface
{
    public function getErrorMessage(string $key, $value): string
    {
        return "\"{$key}\" must be a date string in the ISO 8601 format.";
    }

    public function validate(string $key, $value): bool
    {
        return (preg_match('/(\d+)-(\d\d)-(\d\d)/', $value, $matches)
                || preg_match('/(\d+)(\d\d)(\d\d)/', $value, $matches))
                && checkdate($matches[2], $matches[3], $matches[1]);
    }
}
