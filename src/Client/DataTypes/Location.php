<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Location extends BaseData
{
    /** @var LocationPart */
    private $country;
    /** @var LocationPart */
    private $region;

    public function getCountry(): LocationPart
    {
        return $this->country;
    }

    public function getRegion(): LocationPart
    {
        return $this->region;
    }

    public function setCountry(?LocationPart $country): self
    {
        $this->country = $country;
        return $this;
    }

    public function setRegion(?LocationPart $region): self
    {
        $this->region = $region;
        return $this;
    }

    protected static function getClassMapping(): array
    {
        return [
            'country' => LocationPart::class,
            'region' => LocationPart::class,
        ];
    }

    protected static function getRequiredFields(): array
    {
        return [
            'country',
        ];
    }
}
