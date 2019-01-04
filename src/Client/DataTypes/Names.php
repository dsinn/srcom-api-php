<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Names extends BaseData
{
    /** @var string */
    private $international;
    /** @var string */
    private $japanese;

    public function getInternational(): string
    {
        return $this->international;
    }

    public function getJapanese(): ?string
    {
        return $this->japanese;
    }

    public function setInternational(string $international): self
    {
        $this->international = $international;
        return $this;
    }

    public function setJapanese(?string $japanese): self
    {
        $this->japanese = $japanese;
        return $this;
    }

    protected static function getRequiredFields(): array
    {
        return [
            'international',
            'japanese',
        ];
    }
}
