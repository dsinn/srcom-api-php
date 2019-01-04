<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class NameStyle extends BaseData
{
    /** @var Color */
    private $color;
    /** @var Color */
    private $colorFrom;
    /** @var Color */
    private $colorTo;
    /** @var string */
    private $style;

    public function getColor(): Color
    {
        return $this->color;
    }

    public function getColorFrom(): Color
    {
        return $this->colorFrom;
    }

    public function getColorTo(): Color
    {
        return $this->colorTo;
    }

    public function getStyle(): string
    {
        return $this->style;
    }

    public function setColor(Color $color): self
    {
        $this->color = $color;
        return $this;
    }

    public function setColorFrom(Color $colorFrom): self
    {
        $this->colorFrom = $colorFrom;
        return $this;
    }

    public function setColorTo(Color $colorTo): self
    {
        $this->colorTo = $colorTo;
        return $this;
    }

    public function setStyle(string $style): self
    {
        $this->style = $style;
        return $this;
    }

    protected static function getClassMapping(): array
    {
        return [
            'color' => Color::class,
            'color-from' => Color::class,
            'color-to' => Color::class,
        ];
    }

    protected static function getRequiredFields(): array
    {
        return [
            'style',
        ];
    }
}
