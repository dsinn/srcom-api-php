<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Links implements \ArrayAccess
{
    /** @var string[] */
    private $uris = [];

    public function __construct(array $data)
    {
        foreach ($data as $link)
        {
            $this->uris[$link['rel']] = $link['uri'];
        }
    }

    public function getAll(): array
    {
        return $this->uris;
    }

    public function offsetExists($offset): bool
    {
        return isset($this->uris[$offset]);
    }

    public function offsetGet($offset): string
    {
        return $this->uris[$offset];
    }

    public function offsetSet($offset, $value): void
    {
        throw new \BadMethodCallException();
    }

    public function offsetUnset($offset): void
    {
        throw new \BadMethodCallException();
    }
}
