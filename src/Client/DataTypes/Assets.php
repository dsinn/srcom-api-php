<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Assets extends BaseData
{
    /** @var Asset */
    private $background;
    /** @var Asset */
    private $coverLarge;
    /** @var Asset */
    private $coverMedium;
    /** @var Asset */
    private $coverSmall;
    /** @var Asset */
    private $coverTiny;
    /** @var Asset */
    private $foreground;
    /** @var Asset */
    private $icon;
    /** @var Asset */
    private $logo;
    /** @var Asset */
    private $trophy1st;
    /** @var Asset */
    private $trophy2nd;
    /** @var Asset */
    private $trophy3rd;
    /** @var Asset */
    private $trophy4th;

    public function getBackground(): ?Asset
    {
        return $this->background;
    }

    public function getCoverLarge(): Asset
    {
        return $this->coverLarge;
    }

    public function getCoverMedium(): Asset
    {
        return $this->coverMedium;
    }

    public function getCoverSmall(): Asset
    {
        return $this->coverSmall;
    }

    public function getCoverTiny(): Asset
    {
        return $this->coverTiny;
    }

    public function getForeground(): ?Asset
    {
        return $this->foreground;
    }

    public function getIcon(): Asset
    {
        return $this->icon;
    }

    public function getLogo(): Asset
    {
        return $this->logo;
    }

    public function getTrophy1st(): Asset
    {
        return $this->trophy1st;
    }

    public function getTrophy2nd(): Asset
    {
        return $this->trophy2nd;
    }

    public function getTrophy3rd(): Asset
    {
        return $this->trophy3rd;
    }

    public function getTrophy4th(): ?Asset
    {
        return $this->trophy4th;
    }

    public function setBackground(?Asset $background): self
    {
        $this->background = $background;
        return $this;
    }

    public function setCoverLarge(Asset $coverLarge): self
    {
        $this->coverLarge = $coverLarge;
        return $this;
    }

    public function setCoverMedium(Asset $coverMedium): self
    {
        $this->coverMedium = $coverMedium;
        return $this;
    }

    public function setCoverSmall(Asset $coverSmall): self
    {
        $this->coverSmall = $coverSmall;
        return $this;
    }

    public function setCoverTiny(Asset $coverTiny): self
    {
        $this->coverTiny = $coverTiny;
        return $this;
    }

    public function setForeground(?Asset $foreground): self
    {
        $this->foreground = $foreground;
        return $this;
    }

    public function setIcon(Asset $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    public function setLogo(Asset $logo): self
    {
        $this->logo = $logo;
        return $this;
    }

    public function setTrophy1st(Asset $trophy1st): self
    {
        $this->trophy1st = $trophy1st;
        return $this;
    }

    public function setTrophy2nd(Asset $trophy2nd): self
    {
        $this->trophy2nd = $trophy2nd;
        return $this;
    }

    public function setTrophy3rd(Asset $trophy3rd): self
    {
        $this->trophy3rd = $trophy3rd;
        return $this;
    }

    public function setTrophy4th(?Asset $trophy4th): self
    {
        $this->trophy4th = $trophy4th;
        return $this;
    }

    protected static function getClassMapping(): array
    {
        return [
            'logo' => Asset::class,
            'cover-tiny' => Asset::class,
            'cover-small' => Asset::class,
            'cover-medium' => Asset::class,
            'cover-large' => Asset::class,
            'icon' => Asset::class,
            'trophy-1st' => Asset::class,
            'trophy-2nd' => Asset::class,
            'trophy-3rd' => Asset::class,
            'trophy-4th' => Asset::class,
            'background' => Asset::class,
            'foreground' => Asset::class,
        ];
    }

    protected static function getRequiredFields(): array
    {
        return [
            'logo',
            'cover-tiny',
            'cover-small',
            'cover-medium',
            'cover-large',
            'icon',
            'trophy-1st',
            'trophy-2nd',
            'trophy-3rd',
            'trophy-4th',
            'background',
            'foreground',
        ];
    }
}
