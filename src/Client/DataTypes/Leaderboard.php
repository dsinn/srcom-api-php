<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Leaderboard extends BaseData
{
    const TIMING_RTA = 'realtime';
    const TIMING_RTA_LOADLESS = 'realtime_noloads';
    const TIMING_IGT = 'ingame';

    /** @var Category */
    private $category;
    /** @var string */
    private $emulators;
    /** @var Game */
    private $game;
    /** @var Level */
    private $level;
    /** @var string */
    private $platform;
    /** @var string */
    private $region;
    /** @var RunPlacement[] */
    private $runs;
    /** @var string */
    private $timing;
    /** @var string[] */
    private $values;
    /** @var bool */
    private $videoOnly;
    /** @var string */
    private $weblink;

    public function getCategory(): Category
    {
        return $this->category;
    }

    public static function getEmbeds(): array
    {
        return [
            'game',
            'category',
            'level',
            'players',
            'regions',
            'platforms',
            'variables',
        ];
    }

    public function getEmulators(): string
    {
        return $this->emulators;
    }

    public function getGame(): Game
    {
        return $this->game;
    }

    public function getLevel(): ?Level
    {
        return $this->level;
    }

    public function getPlatform(): string
    {
        return $this->platform;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * @return RunPlacement[]
     */
    public function getRuns(): array
    {
        return $this->runs;
    }

    public function getTiming(): ?string
    {
        return $this->timing;
    }

    public static function getTimingTypes(): array
    {
        return [
            self::TIMING_RTA,
            self::TIMING_RTA_LOADLESS,
            self::TIMING_IGT,
        ];
    }

    /**
     * @return string[]
     */
    public function getValues(): array
    {
        return $this->values;
    }

    public function getVideoOnly(): bool
    {
        return $this->videoOnly;
    }

    public function getWeblink(): string
    {
        return $this->weblink;
    }

    public function setCategory(Category $category): self
    {
        $this->category = $category;
        return $this;
    }

    public function setEmulators(?bool $emulators): self
    {
        $this->emulators = $emulators;
        return $this;
    }

    public function setGame(Game $game): self
    {
        $this->game = $game;
        return $this;
    }

    public function setLevel(?Level $level): self
    {
        $this->level = $level;
        return $this;
    }

    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @param RunPlacement[] $runs
     * @return $this
     */
    public function setRuns(array $runs): self
    {
        $this->runs = $runs;
        return $this;
    }

    public function setTiming(?string $timing): self
    {
        $this->timing = $timing;
        return $this;
    }

    public function setValues(array $values): self
    {
        $this->values = $values;
        return $this;
    }

    public function setVideoOnly(bool $videoOnly): self
    {
        $this->videoOnly = $videoOnly;
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
            'category' => Category::class,
            'level' => Level::class,
            'game' => Game::class,
            'runs' => [RunPlacement::class],
        ];
    }

    protected static function getRequiredFields(): array
    {
        return [
            'weblink',
            'game',
            'category',
            'platform',
            'region',
            'emulators',
            'video-only',
            'timing',
            'values',
            'runs',
            'links',
        ];
    }
}
