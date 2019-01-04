<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Asset extends BaseData
{
    /** @var int */
    private $height;
    /** @var string */
    private $uri;
    /** @var int */
    private $width;

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;
        return $this;
    }

    public function setUri(string $uri): self
    {
        $this->uri = $uri;
        return $this;
    }

    public function setWidth(int $width): self
    {
        $this->width = $width;
        return $this;
    }

    protected static function getRequiredFields(): array
    {
        return [
            'uri',
            'width',
            'height',
        ];
    }
}
