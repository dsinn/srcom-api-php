<?php
namespace Dsinn\SrcomApi\Tests;

use Dsinn\SrcomApi\Client\DataTypes\Category;
use Dsinn\SrcomApi\Client\DataTypes\PlayerCount;
use PHPUnit\Framework\MockObject\MockObject;

class CategoriesTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function testGet()
    {
        /** @var \GuzzleHttp\Client|MockObject $mockHttpClient */
        $mockHttpClient = $this->createMock(\GuzzleHttp\Client::class);
        $mockHttpClient->method('request')->willReturn(json_decode(<<<JSON
{
  "data": {
    "id": "jkh473tf",
    "name": "Any%",
    "weblink": "https://www.speedrun.com/tww#Anypc",
    "type": "per-game",
    "rules": "Yada Yada Yada",
    "players": {
      "type": "exactly",
      "value": 2
    },
    "miscellaneous": false,
    "links": [{
      "rel": "self",
      "uri": "https://www.speedrun.com/api/v1/categories/jkh473tf"
    }, {
      "rel": "game",
      "uri": "https://www.speedrun.com/api/v1/games/i2grf78a"
    }, {
      "rel": "variables",
      "uri": "https://www.speedrun.com/api/v1/games/i2grf78a/variables"
    }, {
      "rel": "runs",
      "uri": "https://www.speedrun.com/api/v1/runs?category=jkh473tf"
    }]
  }
}
JSON
, true));
        $apiClient = new \Dsinn\SrcomApi\Client($mockHttpClient);
        $category = $apiClient->categories()->get('foo');
        self::assertSame('jkh473tf', $category->getId());
        self::assertSame('Any%', $category->getName());
        self::assertSame(Category::TYPE_PER_GAME, $category->getType());
        self::assertSame('Yada Yada Yada', $category->getRules());
        self::assertSame(PlayerCount::TYPE_EXACTLY, $category->getPlayers()->getType());
        self::assertSame(2, $category->getPlayers()->getValue());
        self::assertSame(false, $category->getMiscellaneous());
        self::assertSame([
            'self' => 'https://www.speedrun.com/api/v1/categories/jkh473tf',
            'game' => 'https://www.speedrun.com/api/v1/games/i2grf78a',
            'variables' => 'https://www.speedrun.com/api/v1/games/i2grf78a/variables',
            'runs' => 'https://www.speedrun.com/api/v1/runs?category=jkh473tf',
        ], $category->getLinks());
    }
}
