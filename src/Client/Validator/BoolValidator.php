<?php
namespace Dsinn\SrcomApi\Client\Validator;

class BoolValidator implements ValidatorInterface
{
    const VALID_STRINGS = ['1', 'yes', 'true', '0', 'no', 'false'];

    public function getErrorMessage(string $key, $value): string
    {
        return sprintf(
            '"%s" must be one of [%s], but got "%s".',
            $key,
            implode(', ', self::VALID_STRINGS),
            $value
        );
    }

    public function validate(string $key, $value): bool
    {
        return in_array($value, array_merge(self::VALID_STRINGS, [1, 0, true, false]), true);
    }
}
