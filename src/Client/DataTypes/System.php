<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class System extends BaseData
{
    /** @var bool */
    private $emulated;
    /** @var string */
    private $platform;
    /** @var string */
    private $region;

    public function isEmulated(): bool
    {
        return $this->emulated;
    }

    public function getPlatform(): string
    {
        return $this->platform;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setEmulated(bool $emulated): self
    {
        $this->emulated = $emulated;
        return $this;
    }

    public function setPlatform(string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;
        return $this;
    }

    protected static function getRequiredFields(): array
    {
        return [
            'platform',
            'emulated',
            'region',
        ];
    }
}
