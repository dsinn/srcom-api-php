<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Level extends BaseData
{
    /** @var string */
    private $id;
    /** @var Links */
    private $links;
    /** @var string */
    private $name;
    /** @var string */
    private $rules;
    /** @var string */
    private $weblink;

    public function getId(): string
    {
        return $this->id;
    }

    public function getLinks(): Links
    {
        return $this->links;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRules(): ?string
    {
        return $this->rules;
    }

    public function getWeblink(): string
    {
        return $this->weblink;
    }

    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setLinks(Links $links): self
    {
        $this->links = $links;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setRules(?string $rules): self
    {
        $this->rules = $rules;
        return $this;
    }

    public function setWeblink(string $weblink): self
    {
        $this->weblink = $weblink;
        return $this;
    }

    protected static function getClassMapping(): array
    {
        return [
            'links' => Links::class,
        ];
    }

    protected static function getRequiredFields(): array
    {
        return [
            'id',
            'name',
            'weblink',
            'rules',
            'links',
        ];
    }
}
