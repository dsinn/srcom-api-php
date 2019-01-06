<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Category extends BaseData
{
    const TYPE_PER_GAME = 'per-game';
    const TYPE_PER_LEVEL = 'per-level';

    /** @var Game */
    private $game;
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
    /** @var string */
    private $type;
    /** @var VariableValueSet[] */
    private $variables;
    /** @var string */
    private $weblink;

    public static function getEmbeds(): array
    {
        return [
            'game',
            'variables',
        ];
    }

    public function getGame(): Game
    {
        return $this->game;
    }

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

    public function getRules(): ?string
    {
        return $this->rules;
    }

    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return VariableValueSet[]
     */
    public function getVariables(): array
    {
        return $this->variables;
    }

    public function getWeblink(): string
    {
        return $this->weblink;
    }

    public function setGame(Game $game): self
    {
        $this->game = $game;
        return $this;
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

    public function setPlayers(PlayerCount $players): self
    {
        $this->players = $players;
        return $this;
    }

    public function setRules(?string $rules): self
    {
        $this->rules = $rules;
        return $this;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param VariableValueSet[] $variables
     * @return $this
     */
    public function setVariables(array $variables): self
    {
        $this->variables = $variables;
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
            'game' => Game::class,
            'links' => Links::class,
            'players' => PlayerCount::class,
            'variables' => [VariableValueSet::class],
        ];
    }

    protected static function getRequiredFields(): array
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
