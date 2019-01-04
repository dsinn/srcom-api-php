<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Series extends BaseData
{
    /** @var string */
    private $abbreviation;
    /** @var Assets */
    private $assets;
    /** @var \DateTime */
    private $created;
    /** @var string */
    private $id;
    /** @var Links */
    private $links;
    /** @var User[] */
    private $moderators;
    /** @var Names */
    private $names;
    /** @var string */
    private $weblink;

    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }

    public function getAssets(): Assets
    {
        return $this->assets;
    }

    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getLinks(): Links
    {
        return $this->links;
    }

    public function getModerators(): array
    {
        return $this->moderators;
    }

    public function getNames(): Names
    {
        return $this->names;
    }

    public function getWeblink(): string
    {
        return $this->weblink;
    }

    public function setAbbreviation(string $abbreviation): self
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    public function setAssets(Assets $assets): self
    {
        $this->assets = $assets;
        return $this;
    }

    public function setCreated(?\DateTime $created): self
    {
        $this->created = $created;
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

    /**
     * @param User[] $moderators
     * @return Series
     */
    public function setModerators(array $moderators): self
    {
        $this->moderators = $moderators;
        return $this;
    }

    public function setNames(Names $names): self
    {
        $this->names = $names;
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
            'assets' => Assets::class,
            'created' => \DateTime::class,
            'links' => Links::class,
            'moderators' => [User::class],
            'names' => Names::class,
        ];
    }

    protected static function getEmbeds(): array
    {
        return [
            'moderators',
        ];
    }

    protected static function getRequiredFields(): array
    {
        return [
            'id',
            'names',
            'abbreviation',
            'weblink',
            'moderators',
            'created',
            'assets',
            'links',
        ];
    }
}
