<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Category extends BaseData
{
    const TYPE_PER_GAME = 0;
    const TYPE_PER_LEVEL = 1;

    /** @var string */
    private $id;
    /** @var Links */
    private $links = [];
    /** @var bool */
    private $miscellaneous;
    /** @var string */
    private $name;
    /** @var PlayerCount */
    private $players;
    /** @var string */
    private $rules;
    /** @var int */
    private $type;
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

    public function getMiscellaneous(): bool
    {
        return $this->miscellaneous;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPlayers(): PlayerCount
    {
        return $this->players;
    }

    public function getRules(): string
    {
        return $this->rules;
    }

    public function getType(): int
    {
        return $this->type;
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

    public function setLinks(array $linkData): self
    {
        $this->links = new Links($linkData);
        return $this;
    }

    public function setMiscellaneous(bool $miscellaneous): self
    {
        $this->miscellaneous = $miscellaneous;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setPlayers(array $playerCountData): self
    {
        $this->players = new PlayerCount($playerCountData);
        return $this;
    }

    public function setRules(string $rules): self
    {
        $this->rules = $rules;
        return $this;
    }

    public function setType(string $typeString): self
    {
        $this->type = $this->getStringMappingResult($typeString, [
            'per-game' => self::TYPE_PER_GAME,
            'per-level' => self::TYPE_PER_LEVEL,
        ]);
        return $this;
    }

    public function setWeblink(string $weblink): self
    {
        $this->weblink = $weblink;
        return $this;
    }

    protected function getRequiredFields(): array
    {
        return [
            'id',
            'name',
            'weblink',
            'type',
            'rules',
            'players',
            'miscellaneous',
            'links'
        ];
    }
}
