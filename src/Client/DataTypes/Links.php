<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Links implements \ArrayAccess, \Iterator
{
    const REL_BASE_GAME = 'base-game';
    const REL_CATEGORIES = 'categories';
    const REL_DERIVED_GAMES = 'derived-games';
    const REL_GAME = 'game';
    const REL_LEADERBOARD = 'leaderboard';
    const REL_LEVELS = 'levels';
    const REL_RECORDS = 'records';
    const REL_ROMHACKS = 'romhacks';
    const REL_RUNS = 'runs';
    const REL_SELF = 'self';
    const REL_SERIES = 'series';
    const REL_VARIABLES = 'variables';

    /** @var URI[] */
    private $uris = [];

    public function __construct(array $data)
    {
        $i = 0;
        foreach ($data as $link)
        {
            $this->uris[isset($link['rel']) ? $link['rel'] : $i++] = new URI($link);
        }
    }

    public function current()
    {
        return current($this->uris);
    }

    public function getAll(): array
    {
        return $this->uris;
    }

    public function key()
    {
        return key($this->uris);
    }

    public function next()
    {
        return next($this->uris);
    }

    public function offsetExists($offset): bool
    {
        return isset($this->uris[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->uris[$offset] ?? null;
    }

    public function offsetSet($offset, $value): void
    {
        throw new \BadMethodCallException();
    }

    public function offsetUnset($offset): void
    {
        throw new \BadMethodCallException();
    }

    public function rewind()
    {
        return prev($this->uris);
    }

    public function valid()
    {
        return array_key_exists(key($this->uris), $this->uris);
    }
}
