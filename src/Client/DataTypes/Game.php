<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Game extends BaseData
{
    /** @var string */
    private $abbreviation;
    /** @var \DateTime */
    private $created;
    /** @var string[] */
    private $developers;
    /** @var string[] */
    private $engines;
    /** @var string[] */
    private $gametypes;
    /** @var string[] */
    private $genres;
    /** @var string */
    private $id;
    /** @var string[] */
    private $moderators;
    /** @var Names */
    private $names;
    /** @var string[] */
    private $platforms;
    /** @var string[] */
    private $publishers;
    // @TODO private $regions;
    /** @var int */
    private $released;
    /** @var \DateTime */
    private $releaseDate;
    /** @var bool */
    private $romhack;
    /** @var Ruleset */
    private $ruleset;
    /** @var string */
    private $weblink;

    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }

    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }

    public function getDevelopers(): array
    {
        return $this->developers;
    }

    public static function getEmbeds(): array
    {
        return [
            'levels',
            'categories',
            'moderators',
            'gametypes',
            'platforms',
            'regions',
            'genres',
            'engines',
            'developers',
            'publishers',
            'variables',
        ];
    }

    public function getEngines(): array
    {
        return $this->engines;
    }

    public function getGametypes(): array
    {
        return $this->gametypes;
    }

    public function getGenres(): array
    {
        return $this->genres;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getModerators(): array
    {
        return $this->moderators;
    }

    public function getNames(): Names
    {
        return $this->names;
    }

    public function getPlatforms(): array
    {
        return $this->platforms;
    }

    public function getPublishers(): array
    {
        return $this->publishers;
    }

    public function getReleased(): int
    {
        return $this->released;
    }

    public function getReleaseDate(): ?\DateTime
    {
        return $this->releaseDate;
    }

    public function isRomhack(): bool
    {
        return $this->romhack;
    }

    public function getRuleset(): Ruleset
    {
        return $this->ruleset;
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

    public function setCreated(?\DateTime $created): self
    {
        $this->created = $created;
        return $this;
    }

    public function setDevelopers(array $developers): self
    {
        $this->developers = $developers;
        return $this;
    }

    public function setEngines(array $engines): self
    {
        $this->engines = $engines;
        return $this;
    }

    public function setGametypes(array $gametypes): self
    {
        $this->gametypes = $gametypes;
        return $this;
    }

    public function setGenres(array $genres): self
    {
        $this->genres = $genres;
        return $this;
    }

    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

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

    public function setPlatforms(array $platforms): self
    {
        $this->platforms = $platforms;
        return $this;
    }

    public function setPublishers(array $publishers): self
    {
        $this->publishers = $publishers;
        return $this;
    }

    public function setReleased(int $released): self
    {
        $this->released = $released;
        return $this;
    }

    public function setReleaseDate(?\DateTime $releaseDate): self
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    public function setRomhack(bool $romhack): self
    {
        $this->romhack = $romhack;
        return $this;
    }

    public function setRuleset(Ruleset $ruleset): self
    {
        $this->ruleset = $ruleset;
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
            'created' => \DateTime::class,
            'names' => Names::class,
            'release-date' => \DateTime::class,
            'ruleset' => Ruleset::class,
        ];
    }

    protected static function getRequiredFields(): array
    {
        return [
            'id',
            'names',
            'abbreviation',
            'weblink',
            'released',
            'release-date',
            'ruleset',
            'romhack',
            'gametypes',
            'platforms',
            // @TODO 'regions',
            'genres',
            'engines',
            'developers',
            'publishers',
            'moderators',
            'created',
            'assets',
            'links',
        ];
    }
}
