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
    /** @var string */
    private $game;
    /** @var string */
    private $id;
    /** @var Links */
    private $links;
    /** @var string */
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

    public function getGame(): string
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

    public function getLevel(): ?string
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

    public function setDate(?string $dateString): self
    {
        $this->date = $dateString ? $this->parseDate($dateString) : null;
        return $this;
    }

    public function setGame(string $game): self
    {
        $this->game = $game;
        return $this;
    }

    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setLevel(?string $level): self
    {
        $this->level = $level;
        return $this;
    }

    public function setLinks(array $linkData): self
    {
        $this->links = new Links($linkData);
        return $this;
    }

    public function setPlayers(array $playersData): self
    {
        $this->players = array_map(function (array $playerData) {
            return new Player($playerData);
        }, $playersData);
        return $this;
    }

    public function setSplits(?array $splitsData): self
    {
        $this->splits = $splitsData ? new Splits($splitsData) : null;
        return $this;
    }

    public function setStatus(array $statusData): self
    {
        $this->status = new Status($statusData);
        return $this;
    }

    public function setSubmitted(?string $submittedString): self
    {
        $this->submitted = $submittedString ? $this->parseDateTime($submittedString) : null;
        return $this;
    }

    public function setSystem(array $systemData): self
    {
        $this->system = new System($systemData);
        return $this;
    }

    public function setTimes(array $timesData): self
    {
        $this->times = new Times($timesData);
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

    public function setVideos(array $videoData): self
    {
        $this->videos = new Videos($videoData);
        return $this;
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
            'links',
        ];
    }
}
