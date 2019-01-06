<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class User extends BaseData
{
    const ROLE_BANNED = 'banned';
    const ROLE_USER = 'user';
    const ROLE_TRUSTED = 'trusted';
    const ROLE_MODERATOR = 'moderator';
    const ROLE_ADMIN = 'admin';
    const ROLE_PROGRAMMER = 'programmer';

    /** @var string */
    private $id;
    /** @var URI */
    private $hitbox;
    /** @var Links */
    private $links;
    /** @var Location */
    private $location;
    /** @var string */
    private $name;
    /** @var Names */
    private $names;
    /** @var NameStyle */
    private $nameStyle;
    /** @var string */
    private $role;
    /** @var \DateTime */
    private $signup;
    /** @var URI */
    private $speedrunslive;
    /** @var URI */
    private $twitch;
    /** @var URI */
    private $twitter;
    /** @var string */
    private $weblink;
    /** @var URI */
    private $youtube;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getHitbox(): URI
    {
        return $this->hitbox;
    }

    public function getLinks(): Links
    {
        return $this->links;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNames(): Names
    {
        return $this->names;
    }

    public function getNameStyle(): ?NameStyle
    {
        return $this->nameStyle;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getSignup(): ?\DateTime
    {
        return $this->signup;
    }

    public function getSpeedrunslive(): URI
    {
        return $this->speedrunslive;
    }

    public function getTwitch(): URI
    {
        return $this->twitch;
    }

    public function getTwitter(): URI
    {
        return $this->twitter;
    }

    public function getWeblink(): string
    {
        return $this->weblink;
    }

    public function getYoutube(): URI
    {
        return $this->youtube;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setHitbox(?URI $hitbox): self
    {
        $this->hitbox = $hitbox;
        return $this;
    }

    public function setLinks(Links $links): self
    {
        $this->links = $links;
        return $this;
    }

    public function setLocation(?Location $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setNames(Names $names): self
    {
        $this->names = $names;
        return $this;
    }

    public function setNameStyle(?NameStyle $nameStyle): self
    {
        $this->nameStyle = $nameStyle;
        return $this;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;
        return $this;
    }

    public function setSignup(?\DateTime $signup): self
    {
        $this->signup = $signup;
        return $this;
    }

    public function setSpeedrunslive(?URI $speedrunslive): self
    {
        $this->speedrunslive = $speedrunslive;
        return $this;
    }

    public function setTwitch(?URI $twitch): self
    {
        $this->twitch = $twitch;
        return $this;
    }

    public function setTwitter(?URI $twitter): self
    {
        $this->twitter = $twitter;
        return $this;
    }

    public function setWeblink(string $weblink): self
    {
        $this->weblink = $weblink;
        return $this;
    }

    public function setYoutube(?URI $youtube): self
    {
        $this->youtube = $youtube;
        return $this;
    }

    protected static function getClassMapping(): array
    {
        return [
            'hitbox' => URI::class,
            'location' => Location::class,
            'links' => Links::class,
            'names' => Names::class,
            'name-style' => NameStyle::class,
            'signup' => \DateTime::class,
            'speedrunslive' => URI::class,
            'twitch' => URI::class,
            'twitter' => URI::class,
            'youtube' => URI::class,
        ];
    }
}
