<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Player extends BaseData
{
    const REL_USER = 'user';
    const REL_GUEST = 'guest';

    /** @var string */
    private $id;
    /** @var string */
    private $name;
    /** @var string */
    private $rel;
    /** @var string */
    private $uri;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getRel(): string
    {
        return $this->rel;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
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
            'rel',
            'uri',
        ];
    }
}
