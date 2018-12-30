<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class VariableValue extends BaseData
{
    /** @var VariableValueFlags */
    private $flags;
    /** @var string */
    private $label;
    /** @var string */
    private $rules;

    public function getFlags(): VariableValueFlags
    {
        return $this->flags;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getRules(): string
    {
        return $this->rules;
    }

    public function setFlags(array $flagData): self
    {
        $this->flags = new VariableValueFlags($flagData);
        return $this;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function setRules(string $rules): self
    {
        $this->rules = $rules;
        return $this;
    }

    protected function getRequiredFields(): array
    {
        return [
            'label',
        ];
    }
}
