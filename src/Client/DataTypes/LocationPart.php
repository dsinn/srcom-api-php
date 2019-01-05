<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class LocationPart extends BaseData
{
    /** @var string */
    private $code;
    /** @var Names */
    private $names;

    public function getCode(): string
    {
        return $this->code;
    }

    public function getNames(): Names
    {
        return $this->names;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function setNames(Names $names): self
    {
        $this->names = $names;
        return $this;
    }

    protected static function getClassMapping(): array
    {
        return [
            'names' => Names::class,
        ];
    }

    protected static function getRequiredFields(): array
    {
        return [
            'code',
            'names',
        ];
    }
}
