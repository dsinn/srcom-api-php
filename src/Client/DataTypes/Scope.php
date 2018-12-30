<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Scope extends BaseData
{
    const TYPE_GLOBAL = 0;
    const TYPE_FULL_GAME = 1;
    const TYPE_ALL_LEVELS = 2;
    const TYPE_SINGLE_LEVEL = 3;

    /** @var int */
    private $type;

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(string $typeString): self
    {
        $this->type = $this->getStringMappingResult($typeString, [
            'global' => self::TYPE_ALL_LEVELS,
            'full-game' => self::TYPE_FULL_GAME,
            'all-levels' => self::TYPE_FULL_GAME,
            'single-level' => self::TYPE_SINGLE_LEVEL,
        ]);
        return $this;
    }

    protected static function getRequiredFields(): array
    {
        return [
            'type',
        ];
    }
}
