<?php
namespace Dsinn\SrcomApi\Client\Validator;

interface ValidatorInterface
{
    public function getErrorMessage(string $key, $value): string;

    public function validate(string $key, $value): bool;
}
