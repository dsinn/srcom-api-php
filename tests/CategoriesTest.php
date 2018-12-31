<?php
namespace Dsinn\SrcomApi\Tests;

use Dsinn\SrcomApi\Client\DataTypes\Category;
use Dsinn\SrcomApi\Client\DataTypes\PlayerCount;

class CategoriesTest extends TestCase
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function testGet()
    {
        $client = $this->getClient(<<<JSON
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
        );
        $category = $client->categories()->get('foo');

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
        ], $category->getLinks()->getAll());
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function testGetVariables()
    {
        $client = $this->getClient(<<<JSON
{
  "data":[
    {
      "id":"ylpm6vlg",
      "name":"cc",
      "category":null,
      "scope":{
        "type":"full-game"
      },
      "mandatory":true,
      "user-defined":false,
      "obsoletes":true,
      "values":{
        "_note":"`choices` is deprecated, please use `values` instead",
        "choices":{
          "p12z6d1x":"150cc",
          "z19rjy14":"200cc"
        },
        "values":{
          "p12z6d1x":{
            "label":"150cc",
            "rules":null,
            "flags":{
              "miscellaneous":null
            }
          },
          "z19rjy14":{
            "label":"200cc",
            "rules":null,
            "flags":{
              "miscellaneous":null
            }
          }
        },
        "default":"p12z6d1x"
      },
      "is-subcategory":true,
      "links":[
        {
          "rel":"self",
          "uri":"https://www.speedrun.com/api/v1/variables/ylpm6vlg"
        },
        {
          "rel":"game",
          "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde"
        }
      ]
    },
    {
      "id":"p85033ng",
      "name":"Version",
      "category":null,
      "scope":{
        "type":"global"
      },
      "mandatory":true,
      "user-defined":false,
      "obsoletes":true,
      "values":{
        "_note":"`choices` is deprecated, please use `values` instead",
        "choices":{
          "21gn27ol":"Disc (NTSC)",
          "jqznxdkq":"Disc (PAL)",
          "klr3ymwl":"Digital (Internal)",
          "21dk3wgl":"Digital (SSD)"
        },
        "values":{
          "21gn27ol":{
            "label":"Disc (NTSC)"
          },
          "jqznxdkq":{
            "label":"Disc (PAL)"
          },
          "klr3ymwl":{
            "label":"Digital (Internal)"
          },
          "21dk3wgl":{
            "label":"Digital (SSD)"
          }
        },
        "default":null
      },
      "is-subcategory":false,
      "links":[
        {
          "rel":"self",
          "uri":"https://www.speedrun.com/api/v1/variables/p85033ng"
        },
        {
          "rel":"game",
          "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde"
        }
      ]
    }
  ]
}
JSON
);
        $variables = $client->categories()->getVariables('foo');

        self::assertSame('ylpm6vlg', $variables[0]->getId());
        self::assertSame('cc', $variables[0]->getName());
        self::assertSame('p85033ng', $variables[1]->getId());
        self::assertSame('Version', $variables[1]->getName());
    }
}
