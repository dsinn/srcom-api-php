<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Run extends BaseData
{
    /** @var string */
    private $category;
    /** @var string */
    private $comment;
    /** @var \DateTime */
    private $date;
    /** @var Game */
    private $game;
    /** @var string */
    private $id;
    /** @var Links */
    private $links;
    /** @var Level */
    private $level;
    /** @var Player[] */
    private $players;
    /** @var Splits */
    private $splits;
    /** @var Status */
    private $status;
    /** @var \DateTime */
    private $submitted;
    /** @var System */
    private $system;
    /** @var Times */
    private $times;
    /** @var string[] */
    private $values;
    /** @var Videos */
    private $videos;
    /** @var string */
    private $weblink;

    public function getCategory(): string
    {
        return $this->category;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function getGame(): Game
    {
        return $this->game;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getLinks(): ?Links
    {
        return $this->links;
    }

    public function getLevel(): ?Level
    {
        return $this->level;
    }

    public function getPlayers(): array
    {
        return $this->players;
    }

    public function getSplits(): ?Splits
    {
        return $this->splits;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }

    public function getSubmitted(): ?\DateTime
    {
        return $this->submitted;
    }

    public function getSystem(): System
    {
        return $this->system;
    }

    public function getTimes(): Times
    {
        return $this->times;
    }

    /**
     * @return string[]
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * @return Videos
     */
    public function getVideos(): Videos
    {
        return $this->videos;
    }

    /**
     * @return string
     */
    public function getWeblink(): string
    {
        return $this->weblink;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;
        return $this;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    public function setDate(?\DateTime $date): self
    {
        $this->date = $date;
        return $this;
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

    public function setLevel(?Level $level): self
    {
        $this->level = $level;
        return $this;
    }

    public function setLinks(?Links $links): self
    {
        $this->links = $links;
        return $this;
    }

    /**
     * @param Player[] $players
     * @return $this
     */
    public function setPlayers(array $players): self
    {
        $this->players = $players;
        return $this;
    }

    public function setSplits(?Splits $splits): self
    {
        $this->splits = $splits;
        return $this;
    }

    public function setStatus(Status $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function setSubmitted(?\DateTime $submitted): self
    {
        $this->submitted = $submitted;
        return $this;
    }

    public function setSystem(System $system): self
    {
        $this->system = $system;
        return $this;
    }

    public function setTimes(Times $times): self
    {
        $this->times = $times;
        return $this;
    }

    public function setWeblink(string $weblink): self
    {
        $this->weblink = $weblink;
        return $this;
    }

    public function setValues(array $values): self
    {
        $this->values = $values;
        return $this;
    }

    public function setVideos(Videos $videos): self
    {
        $this->videos = $videos;
        return $this;
    }

    protected static function getClassMapping(): array
    {
        return [
            'date' => \DateTime::class,
            'game' => Game::class,
            'level' => Level::class,
            'links' => Links::class,
            'players' => [Player::class],
            'splits' => Splits::class,
            'status' => Status::class,
            'submitted' => \DateTime::class,
            'system' => System::class,
            'times' => Times::class,
            'videos' => Videos::class,
        ];
    }

    protected static function getRequiredFields(): array
    {
        return [
            'id',
            'weblink',
            'game',
            'level',
            'category',
            'videos',
            'comment',
            'status',
            'players',
            'date',
            'submitted',
            'times',
            'system',
            'splits',
            'values',
        ];
    }
}
