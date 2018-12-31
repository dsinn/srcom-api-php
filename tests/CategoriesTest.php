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

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function testGetRecords()
    {
        $client = $this->getClient(<<<JSON
{
  "data":[
    {
      "weblink":"https://www.speedrun.com/smw#0_Exit",
      "game":"pd0wq31e",
      "category":"wkpjpzjk",
      "level":null,
      "platform":null,
      "region":null,
      "emulators":null,
      "video-only":false,
      "timing":null,
      "values":{

      },
      "runs":[
        {
          "place":1,
          "run":{
            "id":"zp0q5rvm",
            "weblink":"https://www.speedrun.com/smw/run/zp0q5rvm",
            "game":"pd0wq31e",
            "level":null,
            "category":"wkpjpzjk",
            "videos":{
              "links":[
                {
                  "uri":"https://www.twitch.tv/videos/275316068"
                }
              ]
            },
            "comment":"We did it, boys! I finally got this! PogChamp",
            "status":{
              "status":"verified",
              "examiner":"zxzree8q",
              "verify-date":"2018-06-20T13:57:41Z"
            },
            "players":[
              {
                "rel":"user",
                "id":"v81vd58p",
                "uri":"https://www.speedrun.com/api/v1/users/v81vd58p"
              }
            ],
            "date":"2018-06-19",
            "submitted":"2018-06-20T04:08:25Z",
            "times":{
              "primary":"PT41.866S",
              "primary_t":41.866,
              "realtime":"PT41.866S",
              "realtime_t":41.866,
              "realtime_noloads":null,
              "realtime_noloads_t":0,
              "ingame":null,
              "ingame_t":0
            },
            "system":{
              "platform":"83exk6l5",
              "emulated":false,
              "region":"o316x197"
            },
            "splits":null,
            "values":{

            }
          }
        },
        {
          "place":2,
          "run":{
            "id":"z0ekvoem",
            "weblink":"https://www.speedrun.com/smw/run/z0ekvoem",
            "game":"pd0wq31e",
            "level":null,
            "category":"wkpjpzjk",
            "videos":{
              "links":[
                {
                  "uri":"https://www.twitch.tv/videos/240308722"
                }
              ]
            },
            "comment":"Uses a new strat pioneered by Furious",
            "status":{
              "status":"verified",
              "examiner":"zxzree8q",
              "verify-date":"2018-03-19T09:26:15Z"
            },
            "players":[
              {
                "rel":"user",
                "id":"qjn74w8m",
                "uri":"https://www.speedrun.com/api/v1/users/qjn74w8m"
              }
            ],
            "date":"2018-03-19",
            "submitted":"2018-03-19T00:05:55Z",
            "times":{
              "primary":"PT42.200S",
              "primary_t":42.2,
              "realtime":"PT42.200S",
              "realtime_t":42.2,
              "realtime_noloads":null,
              "realtime_noloads_t":0,
              "ingame":null,
              "ingame_t":0
            },
            "system":{
              "platform":"83exk6l5",
              "emulated":false,
              "region":"o316x197"
            },
            "splits":null,
            "values":{

            }
          }
        },
        {
          "place":3,
          "run":{
            "id":"mekn9r2m",
            "weblink":"https://www.speedrun.com/smw/run/mekn9r2m",
            "game":"pd0wq31e",
            "level":null,
            "category":"wkpjpzjk",
            "videos":{
              "links":[
                {
                  "uri":"https://www.twitch.tv/videos/227521094"
                }
              ]
            },
            "comment":null,
            "status":{
              "status":"verified",
              "examiner":"18v6n5xl",
              "verify-date":"2018-02-10T19:59:10Z"
            },
            "players":[
              {
                "rel":"user",
                "id":"18v6n5xl",
                "uri":"https://www.speedrun.com/api/v1/users/18v6n5xl"
              }
            ],
            "date":"2018-02-08",
            "submitted":"2018-02-10T19:59:10Z",
            "times":{
              "primary":"PT46.683S",
              "primary_t":46.683,
              "realtime":"PT46.683S",
              "realtime_t":46.683,
              "realtime_noloads":null,
              "realtime_noloads_t":0,
              "ingame":null,
              "ingame_t":0
            },
            "system":{
              "platform":"83exk6l5",
              "emulated":false,
              "region":"o316x197"
            },
            "splits":null,
            "values":{

            }
          }
        }
      ],
      "links":[
        {
          "rel":"game",
          "uri":"https://www.speedrun.com/api/v1/games/pd0wq31e"
        },
        {
          "rel":"category",
          "uri":"https://www.speedrun.com/api/v1/categories/wkpjpzjk"
        }
      ]
    }
  ],
  "pagination":{
    "offset":0,
    "max":20,
    "size":1,
    "links":[

    ]
  }
}
JSON
        );
        $records = $client->categories()->getRecords('foo');

        self::assertSame('zp0q5rvm', $records[0]->getRuns()[0]->getRun()->getId());
    }
}
