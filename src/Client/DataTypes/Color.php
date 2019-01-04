<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Color extends BaseData
{
    /** @var string */
    private $dark;
    /** @var string */
    private $light;

    public function getDark(): string
    {
        return $this->dark;
    }

    public function getLight(): string
    {
        return $this->light;
    }

    public function setDark(string $dark): self
    {
        $this->dark = $dark;
        return $this;
    }

    public function setLight(string $light): self
    {
        $this->light = $light;
        return $this;
    }

    protected static function getRequiredFields(): array
    {
        return [
            'light',
            'dark',
        ];
    }
}
