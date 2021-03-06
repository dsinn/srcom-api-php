<?php
namespace Dsinn\SrcomApi\Tests;

use Dsinn\SrcomApi\Client\DataTypes\Category;
use Dsinn\SrcomApi\Client\DataTypes\Links;
use Dsinn\SrcomApi\Client\DataTypes\PlayerCount;

class CategoriesTest extends TestCase
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function testGet()
    {
        $client = $this->getClient(<<<'JSON'
{
  "data":{
    "id":"nxd1rk8q",
    "name":"Any% (No SSU)",
    "weblink":"https://www.speedrun.com/gtavc#Any_No_SSU",
    "type":"per-game",
    "rules":"__**TIMING**__\r\nTiming starts when the splash screen after starting a new game is gone, and ends when control is lost over Tommy Vercetti after killing Sonny on \u0027Keep Your Friends Close...\u0027\r\n\r\nRuns are timed using the real time that has passed from start to finish. However, it\u0027s recommended that the load removal tool for LiveSplit additionally be used to display time without loads as \u0022game time\u0022, which is activated through the splits editor when the game is set properly.\r\n\r\n__**RESTRICTIONS**__\r\n[Script Stack Underflow](https://www.reddit.com/r/speedrun/comments/4vp5ui/wr_new_skip_found_in_vice_city_shaves_20_minutes/d60ugoe/) is banned from use in this category.\r\n\r\nThe Frame Limiter needs to be set to ON in the game options.\r\n\r\nAny and all instances of NG+ are banned.\r\n\r\nFiles belonging to different versions of the game may not be mixed (International gta-vc.exe on Green Pepper version, for instance).\r\n\r\nAlt-Tabbing to affect the game in an unintended way (skipping KYFC final cutscene, for instance) is not permitted.\r\n\r\nAll modifications/tools besides the ones listed [here](https://www.speedrun.com/gtavc/thread/xjrgi)  are banned.",
    "players":{
      "type":"exactly",
      "value":1
    },
    "miscellaneous":false,
    "links":[
      {
        "rel":"self",
        "uri":"https://www.speedrun.com/api/v1/categories/nxd1rk8q"
      },
      {
        "rel":"game",
        "uri":"https://www.speedrun.com/api/v1/games/29d30dlp"
      },
      {
        "rel":"variables",
        "uri":"https://www.speedrun.com/api/v1/categories/nxd1rk8q/variables"
      },
      {
        "rel":"records",
        "uri":"https://www.speedrun.com/api/v1/categories/nxd1rk8q/records"
      },
      {
        "rel":"runs",
        "uri":"https://www.speedrun.com/api/v1/runs?category=nxd1rk8q"
      },
      {
        "rel":"leaderboard",
        "uri":"https://www.speedrun.com/api/v1/leaderboards/29d30dlp/category/nxd1rk8q"
      }
    ],
    "game":{
      "data":{
        "id":"29d30dlp",
        "names":{
          "international":"Grand Theft Auto: Vice City",
          "japanese":"\u30b0\u30e9\u30f3\u30c9\u30bb\u30d5\u30c8\u30aa\u30fc\u30c8 \u30d0\u30a4\u30b9\u30b7\u30c6\u30a3",
          "twitch":"Grand Theft Auto: Vice City"
        },
        "abbreviation":"gtavc",
        "weblink":"https://www.speedrun.com/gtavc",
        "released":2002,
        "release-date":"2002-10-27",
        "ruleset":{
          "show-milliseconds":true,
          "require-verification":true,
          "require-video":true,
          "run-times":[
            "realtime",
            "realtime_noloads"
          ],
          "default-time":"realtime",
          "emulators-allowed":true
        },
        "romhack":false,
        "gametypes":[

        ],
        "platforms":[
          "n5e17e27",
          "jm95zz9o",
          "nzelkr6q",
          "8gej2n93",
          "lq60nl94",
          "gde3xgek",
          "mx6ppw63"
        ],
        "regions":[
          "pr184lqn",
          "o316x197"
        ],
        "genres":[
          "61n9q2m0"
        ],
        "engines":[
          "8z54m5nw"
        ],
        "developers":[
          "l4epp3er"
        ],
        "publishers":[
          "w4np8drl",
          "k564wnw1"
        ],
        "moderators":{
          "dx359qjl":"super-moderator",
          "1xyr66mj":"super-moderator",
          "o863pyq8":"super-moderator",
          "y8d032mx":"moderator"
        },
        "created":null,
        "assets":{
          "logo":{
            "uri":"https://www.speedrun.com/themes/gtavc/logo.png",
            "width":180,
            "height":32
          },
          "cover-tiny":{
            "uri":"https://www.speedrun.com/themes/gtavc/cover-32.png",
            "width":32,
            "height":45
          },
          "cover-small":{
            "uri":"https://www.speedrun.com/themes/gtavc/cover-64.png",
            "width":64,
            "height":90
          },
          "cover-medium":{
            "uri":"https://www.speedrun.com/themes/gtavc/cover-128.png",
            "width":128,
            "height":180
          },
          "cover-large":{
            "uri":"https://www.speedrun.com/themes/gtavc/cover-256.png",
            "width":256,
            "height":360
          },
          "icon":{
            "uri":"https://www.speedrun.com/themes/gtavc/favicon.png",
            "width":51,
            "height":55
          },
          "trophy-1st":{
            "uri":"https://www.speedrun.com/themes/Default/1st.png",
            "width":64,
            "height":64
          },
          "trophy-2nd":{
            "uri":"https://www.speedrun.com/themes/Default/2nd.png",
            "width":64,
            "height":64
          },
          "trophy-3rd":{
            "uri":"https://www.speedrun.com/themes/Default/3rd.png",
            "width":64,
            "height":64
          },
          "trophy-4th":null,
          "background":{
            "uri":"https://www.speedrun.com/themes/gtavc/background.png",
            "width":1920,
            "height":1080
          },
          "foreground":null
        },
        "links":[
          {
            "rel":"self",
            "uri":"https://www.speedrun.com/api/v1/games/29d30dlp"
          },
          {
            "rel":"runs",
            "uri":"https://www.speedrun.com/api/v1/runs?game=29d30dlp"
          },
          {
            "rel":"levels",
            "uri":"https://www.speedrun.com/api/v1/games/29d30dlp/levels"
          },
          {
            "rel":"categories",
            "uri":"https://www.speedrun.com/api/v1/games/29d30dlp/categories"
          },
          {
            "rel":"variables",
            "uri":"https://www.speedrun.com/api/v1/games/29d30dlp/variables"
          },
          {
            "rel":"records",
            "uri":"https://www.speedrun.com/api/v1/games/29d30dlp/records"
          },
          {
            "rel":"series",
            "uri":"https://www.speedrun.com/api/v1/series/9v7og6n0"
          },
          {
            "rel":"derived-games",
            "uri":"https://www.speedrun.com/api/v1/games/29d30dlp/derived-games"
          },
          {
            "rel":"romhacks",
            "uri":"https://www.speedrun.com/api/v1/games/29d30dlp/derived-games"
          },
          {
            "rel":"leaderboard",
            "uri":"https://www.speedrun.com/api/v1/leaderboards/29d30dlp/category/rkle7mw2"
          }
        ]
      }
    },
    "variables":{
      "data":[

      ]
    }
  }
}
JSON
        );
        $category = $client->categories()->get('foo');

        self::assertSame('nxd1rk8q', $category->getId());
        self::assertSame('Any% (No SSU)', $category->getName());
        self::assertSame(Category::TYPE_PER_GAME, $category->getType());
        self::assertStringStartsWith("__**TIMING**__\r\nTiming starts", $category->getRules());
        self::assertSame(PlayerCount::TYPE_EXACTLY, $category->getPlayers()->getType());
        self::assertSame(1, $category->getPlayers()->getValue());
        self::assertSame(false, $category->getMiscellaneous());
        self::assertSame(
            'https://www.speedrun.com/api/v1/categories/nxd1rk8q',
            $category->getLinks()[Links::REL_SELF]->getUri()
        );
        self::assertSame(
            'https://www.speedrun.com/api/v1/games/29d30dlp',
            $category->getLinks()[Links::REL_GAME]->getUri()
        );
        self::assertSame(
            'https://www.speedrun.com/api/v1/categories/nxd1rk8q/records',
            $category->getLinks()[Links::REL_RECORDS]->getUri()
        );
        self::assertSame(
            'https://www.speedrun.com/api/v1/runs?category=nxd1rk8q',
            $category->getLinks()[Links::REL_RUNS]->getUri()
        );
        self::assertSame(
            'https://www.speedrun.com/api/v1/leaderboards/29d30dlp/category/nxd1rk8q',
            $category->getLinks()[Links::REL_LEADERBOARD]->getUri()
        );
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function testGetVariables()
    {
        $client = $this->getClient(<<<'JSON'
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
      ],
      "game":{
        "data":{
          "id":"kyd4pxde",
          "names":{
            "international":"Mario Kart 8",
            "japanese":"\u30de\u30ea\u30aa\u30ab\u30fc\u30c88",
            "twitch":"Mario Kart 8"
          },
          "abbreviation":"mk8",
          "weblink":"https://www.speedrun.com/mk8",
          "released":2014,
          "release-date":"2014-05-29",
          "ruleset":{
            "show-milliseconds":false,
            "require-verification":true,
            "require-video":false,
            "run-times":[
              "realtime"
            ],
            "default-time":"realtime",
            "emulators-allowed":true
          },
          "romhack":false,
          "gametypes":[

          ],
          "platforms":[
            "8gejn93d"
          ],
          "regions":[

          ],
          "genres":[

          ],
          "engines":[

          ],
          "developers":[

          ],
          "publishers":[

          ],
          "moderators":{
            "7j426mx1":"super-moderator",
            "48gz7yjp":"moderator",
            "zx7970j7":"moderator"
          },
          "created":null,
          "assets":{
            "logo":{
              "uri":"https://www.speedrun.com/themes/Default/logo.png",
              "width":640,
              "height":78
            },
            "cover-tiny":{
              "uri":"https://www.speedrun.com/themes/mk8/cover-32.png",
              "width":32,
              "height":45
            },
            "cover-small":{
              "uri":"https://www.speedrun.com/themes/mk8/cover-64.png",
              "width":64,
              "height":90
            },
            "cover-medium":{
              "uri":"https://www.speedrun.com/themes/mk8/cover-128.png",
              "width":128,
              "height":180
            },
            "cover-large":{
              "uri":"https://www.speedrun.com/themes/mk8/cover-256.png",
              "width":256,
              "height":360
            },
            "icon":{
              "uri":"https://www.speedrun.com/themes/mk8/favicon.png",
              "width":64,
              "height":59
            },
            "trophy-1st":{
              "uri":"https://www.speedrun.com/themes/mk8/1st.png",
              "width":64,
              "height":60
            },
            "trophy-2nd":{
              "uri":"https://www.speedrun.com/themes/mk8/2nd.png",
              "width":64,
              "height":60
            },
            "trophy-3rd":{
              "uri":"https://www.speedrun.com/themes/mk8/3rd.png",
              "width":64,
              "height":60
            },
            "trophy-4th":null,
            "background":{
              "uri":"https://www.speedrun.com/themes/mk8/background.png",
              "width":1920,
              "height":1080
            },
            "foreground":null
          },
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?game=kyd4pxde"
            },
            {
              "rel":"levels",
              "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde/levels"
            },
            {
              "rel":"categories",
              "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde/categories"
            },
            {
              "rel":"variables",
              "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde/variables"
            },
            {
              "rel":"records",
              "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde/records"
            },
            {
              "rel":"series",
              "uri":"https://www.speedrun.com/api/v1/series/2qnlpe45"
            },
            {
              "rel":"derived-games",
              "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde/derived-games"
            },
            {
              "rel":"romhacks",
              "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde/derived-games"
            },
            {
              "rel":"leaderboard",
              "uri":"https://www.speedrun.com/api/v1/leaderboards/kyd4pxde/category/xd1m7rd8"
            }
          ]
        }
      }
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
      ],
      "game":{
        "data":{
          "id":"kyd4pxde",
          "names":{
            "international":"Mario Kart 8",
            "japanese":"\u30de\u30ea\u30aa\u30ab\u30fc\u30c88",
            "twitch":"Mario Kart 8"
          },
          "abbreviation":"mk8",
          "weblink":"https://www.speedrun.com/mk8",
          "released":2014,
          "release-date":"2014-05-29",
          "ruleset":{
            "show-milliseconds":false,
            "require-verification":true,
            "require-video":false,
            "run-times":[
              "realtime"
            ],
            "default-time":"realtime",
            "emulators-allowed":true
          },
          "romhack":false,
          "gametypes":[

          ],
          "platforms":[
            "8gejn93d"
          ],
          "regions":[

          ],
          "genres":[

          ],
          "engines":[

          ],
          "developers":[

          ],
          "publishers":[

          ],
          "moderators":{
            "7j426mx1":"super-moderator",
            "48gz7yjp":"moderator",
            "zx7970j7":"moderator"
          },
          "created":null,
          "assets":{
            "logo":{
              "uri":"https://www.speedrun.com/themes/Default/logo.png",
              "width":640,
              "height":78
            },
            "cover-tiny":{
              "uri":"https://www.speedrun.com/themes/mk8/cover-32.png",
              "width":32,
              "height":45
            },
            "cover-small":{
              "uri":"https://www.speedrun.com/themes/mk8/cover-64.png",
              "width":64,
              "height":90
            },
            "cover-medium":{
              "uri":"https://www.speedrun.com/themes/mk8/cover-128.png",
              "width":128,
              "height":180
            },
            "cover-large":{
              "uri":"https://www.speedrun.com/themes/mk8/cover-256.png",
              "width":256,
              "height":360
            },
            "icon":{
              "uri":"https://www.speedrun.com/themes/mk8/favicon.png",
              "width":64,
              "height":59
            },
            "trophy-1st":{
              "uri":"https://www.speedrun.com/themes/mk8/1st.png",
              "width":64,
              "height":60
            },
            "trophy-2nd":{
              "uri":"https://www.speedrun.com/themes/mk8/2nd.png",
              "width":64,
              "height":60
            },
            "trophy-3rd":{
              "uri":"https://www.speedrun.com/themes/mk8/3rd.png",
              "width":64,
              "height":60
            },
            "trophy-4th":null,
            "background":{
              "uri":"https://www.speedrun.com/themes/mk8/background.png",
              "width":1920,
              "height":1080
            },
            "foreground":null
          },
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?game=kyd4pxde"
            },
            {
              "rel":"levels",
              "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde/levels"
            },
            {
              "rel":"categories",
              "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde/categories"
            },
            {
              "rel":"variables",
              "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde/variables"
            },
            {
              "rel":"records",
              "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde/records"
            },
            {
              "rel":"series",
              "uri":"https://www.speedrun.com/api/v1/series/2qnlpe45"
            },
            {
              "rel":"derived-games",
              "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde/derived-games"
            },
            {
              "rel":"romhacks",
              "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde/derived-games"
            },
            {
              "rel":"leaderboard",
              "uri":"https://www.speedrun.com/api/v1/leaderboards/kyd4pxde/category/xd1m7rd8"
            }
          ]
        }
      }
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
        $client = $this->getClient(<<<'JSON'
{
  "data":[
    {
      "weblink":"https://www.speedrun.com/smw#0_Exit",
      "game":{
        "data":{
          "id":"pd0wq31e",
          "names":{
            "international":"Super Mario World",
            "japanese":"\u30b9\u30fc\u30d1\u30fc\u30de\u30ea\u30aa\u308f\u30fc\u30eb\u30c9",
            "twitch":"Super Mario World"
          },
          "abbreviation":"smw",
          "weblink":"https://www.speedrun.com/smw",
          "released":1990,
          "release-date":"1990-11-21",
          "ruleset":{
            "show-milliseconds":true,
            "require-verification":true,
            "require-video":false,
            "run-times":[
              "realtime"
            ],
            "default-time":"realtime",
            "emulators-allowed":true
          },
          "romhack":false,
          "gametypes":[

          ],
          "platforms":[
            "83exk6l5",
            "nzelreqp",
            "7g6mx89r",
            "v06dr394",
            "83exovel"
          ],
          "regions":[
            "pr184lqn",
            "e6lxy1dz",
            "o316x197"
          ],
          "genres":[
            "qdnqkn8k",
            "pm21dr24"
          ],
          "engines":[

          ],
          "developers":[
            "xv6dvx62"
          ],
          "publishers":[
            "m0rvylrx"
          ],
          "moderators":{
            "y8dwqmj6":"moderator",
            "kj96nwj4":"super-moderator",
            "7j425vx1":"moderator",
            "zx723r87":"super-moderator",
            "7j424wx1":"moderator",
            "18v6n5xl":"moderator",
            "98rl5381":"moderator",
            "v8lrgl8m":"moderator",
            "v8l66r8m":"moderator",
            "zxzree8q":"moderator"
          },
          "created":null,
          "assets":{
            "logo":{
              "uri":"https://www.speedrun.com/themes/smw/logo.png",
              "width":180,
              "height":32
            },
            "cover-tiny":{
              "uri":"https://www.speedrun.com/themes/smw/cover-32.png",
              "width":32,
              "height":45
            },
            "cover-small":{
              "uri":"https://www.speedrun.com/themes/smw/cover-64.png",
              "width":64,
              "height":90
            },
            "cover-medium":{
              "uri":"https://www.speedrun.com/themes/smw/cover-128.png",
              "width":128,
              "height":180
            },
            "cover-large":{
              "uri":"https://www.speedrun.com/themes/smw/cover-256.png",
              "width":256,
              "height":360
            },
            "icon":{
              "uri":"https://www.speedrun.com/themes/smw/favicon.png",
              "width":16,
              "height":16
            },
            "trophy-1st":{
              "uri":"https://www.speedrun.com/themes/smw/1st.png",
              "width":64,
              "height":64
            },
            "trophy-2nd":{
              "uri":"https://www.speedrun.com/themes/smw/2nd.png",
              "width":64,
              "height":64
            },
            "trophy-3rd":{
              "uri":"https://www.speedrun.com/themes/smw/3rd.png",
              "width":64,
              "height":64
            },
            "trophy-4th":null,
            "background":{
              "uri":"https://www.speedrun.com/themes/smw/background.png",
              "width":1920,
              "height":1080
            },
            "foreground":null
          },
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/games/pd0wq31e"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?game=pd0wq31e"
            },
            {
              "rel":"levels",
              "uri":"https://www.speedrun.com/api/v1/games/pd0wq31e/levels"
            },
            {
              "rel":"categories",
              "uri":"https://www.speedrun.com/api/v1/games/pd0wq31e/categories"
            },
            {
              "rel":"variables",
              "uri":"https://www.speedrun.com/api/v1/games/pd0wq31e/variables"
            },
            {
              "rel":"records",
              "uri":"https://www.speedrun.com/api/v1/games/pd0wq31e/records"
            },
            {
              "rel":"series",
              "uri":"https://www.speedrun.com/api/v1/series/rv7emz49"
            },
            {
              "rel":"derived-games",
              "uri":"https://www.speedrun.com/api/v1/games/pd0wq31e/derived-games"
            },
            {
              "rel":"romhacks",
              "uri":"https://www.speedrun.com/api/v1/games/pd0wq31e/derived-games"
            },
            {
              "rel":"leaderboard",
              "uri":"https://www.speedrun.com/api/v1/leaderboards/pd0wq31e/category/7kjrn323"
            }
          ]
        }
      },
      "category":{
        "data":{
          "id":"wkpjpzjk",
          "name":"0 Exit",
          "weblink":"https://www.speedrun.com/smw#0_Exit",
          "type":"per-game",
          "rules":"Time begins the frame Mario appears in the opening cutscene. This is 2.2 seconds after selecting 1 player game.\r\nTime ends when player loses control for credits warp. This is the first duplicate frame after performing the item swap (the frame before the screen starts to get darker).\r\n\r\n- All glitches allowed\r\n\r\nVideo is required.\r\n\r\n(Also known as Credits Warp)",
          "players":{
            "type":"exactly",
            "value":1
          },
          "miscellaneous":false,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/categories/wkpjpzjk"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/pd0wq31e"
            },
            {
              "rel":"variables",
              "uri":"https://www.speedrun.com/api/v1/categories/wkpjpzjk/variables"
            },
            {
              "rel":"records",
              "uri":"https://www.speedrun.com/api/v1/categories/wkpjpzjk/records"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?category=wkpjpzjk"
            },
            {
              "rel":"leaderboard",
              "uri":"https://www.speedrun.com/api/v1/leaderboards/pd0wq31e/category/wkpjpzjk"
            }
          ]
        }
      },
      "level":{
        "data":[

        ]
      },
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
      ],
      "players":{
        "data":[
          {
            "rel":"user",
            "id":"v81vd58p",
            "names":{
              "international":"FURiOUS",
              "japanese":null
            },
            "weblink":"https://www.speedrun.com/user/FURiOUS",
            "name-style":{
              "style":"gradient",
              "color-from":{
                "light":"#249BCE",
                "dark":"#44BBEE"
              },
              "color-to":{
                "light":"#249BCE",
                "dark":"#44BBEE"
              }
            },
            "role":"user",
            "signup":"2015-02-06T13:21:16Z",
            "location":{
              "country":{
                "code":"br",
                "names":{
                  "international":"Brazil",
                  "japanese":null
                }
              },
              "region":{
                "code":"br/sc",
                "names":{
                  "international":"Santa Catarina, Brazil",
                  "japanese":null
                }
              }
            },
            "twitch":{
              "uri":"https://www.twitch.tv/furious"
            },
            "hitbox":null,
            "youtube":{
              "uri":"https://www.youtube.com/user/furiouscc"
            },
            "twitter":{
              "uri":"https://www.twitter.com/furious_"
            },
            "speedrunslive":{
              "uri":"http://www.speedrunslive.com/profiles/#!/furious"
            },
            "links":[
              {
                "rel":"self",
                "uri":"https://www.speedrun.com/api/v1/users/v81vd58p"
              },
              {
                "rel":"runs",
                "uri":"https://www.speedrun.com/api/v1/runs?user=v81vd58p"
              },
              {
                "rel":"games",
                "uri":"https://www.speedrun.com/api/v1/games?moderator=v81vd58p"
              },
              {
                "rel":"personal-bests",
                "uri":"https://www.speedrun.com/api/v1/users/v81vd58p/personal-bests"
              }
            ]
          },
          {
            "rel":"user",
            "id":"qjn74w8m",
            "names":{
              "international":"SethBling",
              "japanese":null
            },
            "weblink":"https://www.speedrun.com/user/SethBling",
            "name-style":{
              "style":"solid",
              "color":{
                "light":"#4646CE",
                "dark":"#6666EE"
              }
            },
            "role":"user",
            "signup":"2015-02-18T21:21:50Z",
            "location":{
              "country":{
                "code":"us",
                "names":{
                  "international":"United States",
                  "japanese":null
                }
              },
              "region":{
                "code":"us/wa",
                "names":{
                  "international":"Washington, USA",
                  "japanese":null
                }
              }
            },
            "twitch":{
              "uri":"https://www.twitch.tv/SethBling"
            },
            "hitbox":null,
            "youtube":{
              "uri":"https://www.youtube.com/user/SethBling"
            },
            "twitter":{
              "uri":"https://www.twitter.com/SethBling"
            },
            "speedrunslive":{
              "uri":"http://www.speedrunslive.com/profiles/#!/SethBling"
            },
            "links":[
              {
                "rel":"self",
                "uri":"https://www.speedrun.com/api/v1/users/qjn74w8m"
              },
              {
                "rel":"runs",
                "uri":"https://www.speedrun.com/api/v1/runs?user=qjn74w8m"
              },
              {
                "rel":"games",
                "uri":"https://www.speedrun.com/api/v1/games?moderator=qjn74w8m"
              },
              {
                "rel":"personal-bests",
                "uri":"https://www.speedrun.com/api/v1/users/qjn74w8m/personal-bests"
              }
            ]
          },
          {
            "rel":"user",
            "id":"18v6n5xl",
            "names":{
              "international":"Area51",
              "japanese":null
            },
            "weblink":"https://www.speedrun.com/user/Area51",
            "name-style":{
              "style":"gradient",
              "color-from":{
                "light":"#4646CE",
                "dark":"#6666EE"
              },
              "color-to":{
                "light":"#4646CE",
                "dark":"#6666EE"
              }
            },
            "role":"user",
            "signup":"2014-12-11T21:07:10Z",
            "location":{
              "country":{
                "code":"us",
                "names":{
                  "international":"United States",
                  "japanese":null
                }
              },
              "region":{
                "code":"us/mn",
                "names":{
                  "international":"Minnesota, USA",
                  "japanese":null
                }
              }
            },
            "twitch":{
              "uri":"https://www.twitch.tv/xsvarea51"
            },
            "hitbox":null,
            "youtube":{
              "uri":"https://www.youtube.com/user/xsvarea51"
            },
            "twitter":{
              "uri":"https://www.twitter.com/aaronsmw"
            },
            "speedrunslive":{
              "uri":"http://www.speedrunslive.com/profiles/#!/area51"
            },
            "links":[
              {
                "rel":"self",
                "uri":"https://www.speedrun.com/api/v1/users/18v6n5xl"
              },
              {
                "rel":"runs",
                "uri":"https://www.speedrun.com/api/v1/runs?user=18v6n5xl"
              },
              {
                "rel":"games",
                "uri":"https://www.speedrun.com/api/v1/games?moderator=18v6n5xl"
              },
              {
                "rel":"personal-bests",
                "uri":"https://www.speedrun.com/api/v1/users/18v6n5xl/personal-bests"
              }
            ]
          }
        ]
      },
      "regions":{
        "data":[
          {
            "id":"o316x197",
            "name":"JPN / NTSC",
            "links":[
              {
                "rel":"self",
                "uri":"https://www.speedrun.com/api/v1/regions/o316x197"
              },
              {
                "rel":"games",
                "uri":"https://www.speedrun.com/api/v1/games?region=o316x197"
              },
              {
                "rel":"runs",
                "uri":"https://www.speedrun.com/api/v1/runs?region=o316x197"
              }
            ]
          }
        ]
      },
      "platforms":{
        "data":[
          {
            "id":"83exk6l5",
            "name":"Super Nintendo",
            "released":1990,
            "links":[
              {
                "rel":"self",
                "uri":"https://www.speedrun.com/api/v1/platforms/83exk6l5"
              },
              {
                "rel":"games",
                "uri":"https://www.speedrun.com/api/v1/games?platform=83exk6l5"
              },
              {
                "rel":"runs",
                "uri":"https://www.speedrun.com/api/v1/runs?platform=83exk6l5"
              }
            ]
          }
        ]
      },
      "variables":{
        "data":[

        ]
      }
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
