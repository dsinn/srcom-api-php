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

    public function getText(): string
    {
        return $this->text;
    }

    public function setLinks(array $linkData): self
    {
        $this->links = new Links($linkData);
        return $this;
    }

    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }

    protected static function getRequiredFields(): array
    {
        return [
            'links',
            'text',
        ];
    }
}
