<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class PlayerCount extends BaseData
{
    const TYPE_EXACTLY = 'exactly';
    const TYPE_UP_TO = 'up-to';

    /** @var string */
    private $type;
    /** @var int */
    private $value;

    public function getType(): string
    {
        return $this->type;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;
        return $this;
    }

    protected static function getRequiredFields(): array
    {
        return ['type', 'value'];
    }
}
