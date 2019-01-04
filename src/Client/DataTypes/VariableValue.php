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

    public function getFlags(): ?VariableValueFlags
    {
        return $this->flags;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getRules(): ?string
    {
        return $this->rules;
    }

    public function setFlags(?VariableValueFlags $flags): self
    {
        $this->flags = $flags;
        return $this;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function setRules(?string $rules): self
    {
        $this->rules = $rules;
        return $this;
    }

    protected static function getClassMapping(): array
    {
        return [
            'flags' => VariableValueFlags::class,
        ];
    }

    protected static function getRequiredFields(): array
    {
        return [
            'label',
        ];
    }
}
