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

    public function getDarkHTML(string $text): string
    {
        return $this->getHTML($text, 'getDark');
    }

    public function getLightHTML(string $text): string
    {
        return $this->getHTML($text, 'getLight');
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

    private function getGradientHTML(string $text, string $fromString, string $toString)
    {
        return sprintf(
            '<span style="%s">%s</span>',
            "background-image: -webkit-linear-gradient(left, {$fromString}, {$toString});"
                    . ' -webkit-background-clip: text; -webkit-text-fill-color: transparent;',
            htmlspecialchars($text)
        );
    }

    private function getHTML(string $text, string $colorStringFunc)
    {
        if ($this->color) {
            return $this->getSolidHTML($text, call_user_func([$this->color, $colorStringFunc]));
        }

        $fromString = call_user_func([$this->colorFrom, $colorStringFunc]);
        $toString = call_user_func([$this->colorTo, $colorStringFunc]);

        if ($fromString === $toString) {
            return $this->getSolidHTML($text, $fromString);
        }

        return $this->getGradientHTML($text, $fromString, $toString);
    }

    private function getSolidHTML(string $text, string $colorString)
    {
        return "<span style=\"color: {$colorString}\">" . htmlspecialchars($text) . '</span>';
    }
}
