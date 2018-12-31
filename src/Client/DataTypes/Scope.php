<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Scope extends BaseData
{
    const TYPE_GLOBAL = 'global';
    const TYPE_FULL_GAME = 'full-game';
    const TYPE_ALL_LEVELS = 'all-levels';
    const TYPE_SINGLE_LEVEL = 'single-level';

    /** @var int */
    private $type;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    protected static function getRequiredFields(): array
    {
        return [
            'type',
        ];
    }
}
