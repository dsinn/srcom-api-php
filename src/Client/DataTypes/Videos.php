<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Videos extends BaseData
{
    /** @var Links */
    private $links;
    /** @var string */
    private $text;

    public function getLinks(): Links
    {
        return $this->links;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setLinks(Links $links): self
    {
        $this->links = $links;
        return $this;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }

    protected static function getClassMapping(): array
    {
        return [
            'links' => Links::class,
        ];
    }
}
