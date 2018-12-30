<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class VariableValueSet extends BaseData
{
    /** @var string */
    private $defaultKey;

    /** @var VariableValue[] */
    private $values = [];

    public function getDefaultKey(): string
    {
        return $this->defaultKey;
    }

    public function getDefaultValue(): VariableValue
    {
        return $this->getValue($this->defaultKey);
    }

    public function getValue(string $key): VariableValue
    {
        assert(
            array_key_exists($key, $this->values),
            new \UnexpectedValueException("Value with key \"{$key}\" not found.")
        );
        return $this->values[$key];
    }

    public function getValues(): array
    {
        return $this->values;
    }

    public function setDefault($defaultKey): self
    {
        $this->defaultKey = $defaultKey;
        return $this;
    }

    public function setValues(array $valueSets): self
    {
        foreach ($valueSets as $key => $valueSet) {
            $this->values[$key] = new VariableValue($valueSet);
        }
        return $this;
    }

    protected function getRequiredFields(): array
    {
        return [
            'values',
            'default',
        ];
    }
}
