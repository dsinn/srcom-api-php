<?php
namespace Dsinn\SrcomApi\Client\Validator;

class SetOfValuesValidator implements ValidatorInterface
{
    /** @var bool */
    private $strict;
    /** @var array */
    private $validValues;

    public function __construct(array $validValues, bool $strict = true)
    {
        $this->strict = $strict;
        $this->validValues = $validValues;
    }

    public function getErrorMessage(string $key, $value): string
    {
        return sprintf(
            'Valid values for the option "%s" are [%s]%s, but found "%s".',
            $key,
            implode(', ', $this->validValues),
            $this->strict ? ' (strict)' : '',
            $value
        );
    }

    public function validate(string $key, $value): bool
    {
        return in_array($value, $this->validValues, $this->strict);
    }
}
