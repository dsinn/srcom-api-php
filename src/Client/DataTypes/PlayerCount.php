<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class PlayerCount extends BaseData
{
    const TYPE_EXACTLY = 0;
    const TYPE_UP_TO = 1;

    /** @var int */
    private $type;
    /** @var int */
    private $value;

    public function getType(): int
    {
        return $this->type;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setType(string $type): self
    {
        $this->type = $this->getStringMappingResult($type, [
            'exactly' => self::TYPE_EXACTLY,
            'up-to' => self::TYPE_UP_TO,
        ]);

        return $this;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;
        return $this;
    }

    protected function getRequiredFields(): array
    {
        return ['type', 'value'];
    }
}
