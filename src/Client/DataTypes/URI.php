<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class URI extends BaseData
{
    /** @var string */
    private $rel;
    /** @var string */
    private $uri;

    public function getRel(): string
    {
        return $this->rel;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function setRel(string $rel): self
    {
        $this->rel = $rel;
        return $this;
    }

    public function setUri(string $uri): self
    {
        $this->uri = $uri;
        return $this;
    }

    protected static function getRequiredFields(): array
    {
        return [
            'uri',
        ];
    }
}
