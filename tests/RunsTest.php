<?php
namespace Dsinn\SrcomApi\Tests;

class RunsTest extends TestCase
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function testGetList()
    {
        $client = $this->getClient(<<<'JSON'
{
  "data":[
    {
      "id":"1wzpqgyq",
      "weblink":"https://www.speedrun.com/ge/run/1wzpqgyq",
      "game":{
        "data":{
          "id":"nj1ne1p4",
          "names":{
            "international":"GoldenEye 007",
            "japanese":"\u30b4\u30fc\u30eb\u30c7\u30f3\u30a2\u30a4 007",
            "twitch":"GoldenEye 007"
          },
          "abbreviation":"ge",
          "weblink":"https://www.speedrun.com/ge",
          "released":1997,
          "release-date":"1997-08-25",
          "ruleset":{
            "show-milliseconds":false,
            "require-verification":true,
            "require-video":true,
            "run-times":[
              "realtime"
            ],
            "default-time":"realtime",
            "emulators-allowed":false
          },
          "romhack":false,
          "gametypes":[

          ],
          "platforms":[
            "w89rwelk"
          ],
          "regions":[
            "pr184lqn",
            "e6lxy1dz",
            "o316x197"
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
            "p7j4dj10":"super-moderator",
            "61xyew8r":"super-moderator",
            "0jml7y81":"super-moderator"
          },
          "created":null,
          "assets":{
            "logo":{
              "uri":"https://www.speedrun.com/themes/Default/logo.png",
              "width":640,
              "height":78
            },
            "cover-tiny":{
              "uri":"https://www.speedrun.com/themes/ge/cover-32.png",
              "width":45,
              "height":32
            },
            "cover-small":{
              "uri":"https://www.speedrun.com/themes/ge/cover-64.png",
              "width":90,
              "height":64
            },
            "cover-medium":{
              "uri":"https://www.speedrun.com/themes/ge/cover-128.png",
              "width":180,
              "height":128
            },
            "cover-large":{
              "uri":"https://www.speedrun.com/themes/ge/cover-256.png",
              "width":360,
              "height":256
            },
            "icon":{
              "uri":"https://www.speedrun.com/themes/Default/favicon.png",
              "width":64,
              "height":64
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
              "uri":"https://www.speedrun.com/themes/ge/background.png",
              "width":1025,
              "height":717
            },
            "foreground":null
          },
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?game=nj1ne1p4"
            },
            {
              "rel":"levels",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/levels"
            },
            {
              "rel":"categories",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/categories"
            },
            {
              "rel":"variables",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/variables"
            },
            {
              "rel":"records",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/records"
            },
            {
              "rel":"series",
              "uri":"https://www.speedrun.com/api/v1/series/049rqr4v"
            },
            {
              "rel":"derived-games",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/derived-games"
            },
            {
              "rel":"romhacks",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/derived-games"
            }
          ]
        }
      },
      "level":{
        "data":[

        ]
      },
      "category":{
        "data":{
          "id":"prklq2n9",
          "name":"Any% (Agent)",
          "weblink":"https://www.speedrun.com/ge/full_game#Any_Agent",
          "type":"per-game",
          "rules":"Go to http://rankings.the-elite.net/ for updated Individual Level rankings and leaderboards.\r\nThe speedrun.com leaderboard\u0027s purpose is to redirect new players to The-Elite Rankings website. The records listed here are mirrored from the rankings page and not necessarily up to date.\r\n\r\nBeat the game on Agent from Dam to Cradle.",
          "players":{
            "type":"exactly",
            "value":1
          },
          "miscellaneous":false,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/categories/prklq2n9"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4"
            },
            {
              "rel":"variables",
              "uri":"https://www.speedrun.com/api/v1/categories/prklq2n9/variables"
            },
            {
              "rel":"records",
              "uri":"https://www.speedrun.com/api/v1/categories/prklq2n9/records"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?category=prklq2n9"
            },
            {
              "rel":"leaderboard",
              "uri":"https://www.speedrun.com/api/v1/leaderboards/nj1ne1p4/category/prklq2n9"
            }
          ]
        }
      },
      "videos":{
        "links":[
          {
            "uri":"https://www.youtube.com/watch?v=KKjPMD0aHaY"
          }
        ]
      },
      "comment":"bad RNG on frigate otherwise pretty solid",
      "status":{
        "status":"verified",
        "examiner":null,
        "verify-date":null
      },
      "players":{
        "data":[
          {
            "rel":"user",
            "id":"v48grxpr",
            "names":{
              "international":"Ace",
              "japanese":null
            },
            "weblink":"https://www.speedrun.com/user/Ace",
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
            "signup":"2014-01-06T14:34:01Z",
            "location":null,
            "twitch":{
              "uri":"https://www.twitch.tv/perfectace"
            },
            "hitbox":null,
            "youtube":{
              "uri":"https://www.youtube.com/user/RayanIsran"
            },
            "twitter":{
              "uri":"https://www.twitter.com/perfectace05"
            },
            "speedrunslive":null,
            "links":[
              {
                "rel":"self",
                "uri":"https://www.speedrun.com/api/v1/users/v48grxpr"
              },
              {
                "rel":"runs",
                "uri":"https://www.speedrun.com/api/v1/runs?user=v48grxpr"
              },
              {
                "rel":"games",
                "uri":"https://www.speedrun.com/api/v1/games?moderator=v48grxpr"
              },
              {
                "rel":"personal-bests",
                "uri":"https://www.speedrun.com/api/v1/users/v48grxpr/personal-bests"
              }
            ]
          }
        ]
      },
      "date":"2013-06-10",
      "submitted":null,
      "times":{
        "primary":"PT21M52S",
        "primary_t":1312,
        "realtime":"PT21M52S",
        "realtime_t":1312,
        "realtime_noloads":null,
        "realtime_noloads_t":0,
        "ingame":null,
        "ingame_t":0
      },
      "system":{
        "platform":"w89rwelk",
        "emulated":false,
        "region":"pr184lqn"
      },
      "splits":null,
      "values":{

      },
      "links":[
        {
          "rel":"self",
          "uri":"https://www.speedrun.com/api/v1/runs/1wzpqgyq"
        },
        {
          "rel":"game",
          "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4"
        },
        {
          "rel":"category",
          "uri":"https://www.speedrun.com/api/v1/categories/prklq2n9"
        },
        {
          "rel":"platform",
          "uri":"https://www.speedrun.com/api/v1/platforms/w89rwelk"
        },
        {
          "rel":"region",
          "uri":"https://www.speedrun.com/api/v1/regions/pr184lqn"
        }
      ],
      "region":{
        "data":{
          "id":"pr184lqn",
          "name":"USA / NTSC",
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/regions/pr184lqn"
            },
            {
              "rel":"games",
              "uri":"https://www.speedrun.com/api/v1/games?region=pr184lqn"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?region=pr184lqn"
            }
          ]
        }
      },
      "platform":{
        "data":{
          "id":"w89rwelk",
          "name":"Nintendo 64",
          "released":1996,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/platforms/w89rwelk"
            },
            {
              "rel":"games",
              "uri":"https://www.speedrun.com/api/v1/games?platform=w89rwelk"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?platform=w89rwelk"
            }
          ]
        }
      }
    },
    {
      "id":"1wzp0gmq",
      "weblink":"https://www.speedrun.com/ge/run/1wzp0gmq",
      "game":{
        "data":{
          "id":"nj1ne1p4",
          "names":{
            "international":"GoldenEye 007",
            "japanese":"\u30b4\u30fc\u30eb\u30c7\u30f3\u30a2\u30a4 007",
            "twitch":"GoldenEye 007"
          },
          "abbreviation":"ge",
          "weblink":"https://www.speedrun.com/ge",
          "released":1997,
          "release-date":"1997-08-25",
          "ruleset":{
            "show-milliseconds":false,
            "require-verification":true,
            "require-video":true,
            "run-times":[
              "realtime"
            ],
            "default-time":"realtime",
            "emulators-allowed":false
          },
          "romhack":false,
          "gametypes":[

          ],
          "platforms":[
            "w89rwelk"
          ],
          "regions":[
            "pr184lqn",
            "e6lxy1dz",
            "o316x197"
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
            "p7j4dj10":"super-moderator",
            "61xyew8r":"super-moderator",
            "0jml7y81":"super-moderator"
          },
          "created":null,
          "assets":{
            "logo":{
              "uri":"https://www.speedrun.com/themes/Default/logo.png",
              "width":640,
              "height":78
            },
            "cover-tiny":{
              "uri":"https://www.speedrun.com/themes/ge/cover-32.png",
              "width":45,
              "height":32
            },
            "cover-small":{
              "uri":"https://www.speedrun.com/themes/ge/cover-64.png",
              "width":90,
              "height":64
            },
            "cover-medium":{
              "uri":"https://www.speedrun.com/themes/ge/cover-128.png",
              "width":180,
              "height":128
            },
            "cover-large":{
              "uri":"https://www.speedrun.com/themes/ge/cover-256.png",
              "width":360,
              "height":256
            },
            "icon":{
              "uri":"https://www.speedrun.com/themes/Default/favicon.png",
              "width":64,
              "height":64
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
              "uri":"https://www.speedrun.com/themes/ge/background.png",
              "width":1025,
              "height":717
            },
            "foreground":null
          },
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?game=nj1ne1p4"
            },
            {
              "rel":"levels",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/levels"
            },
            {
              "rel":"categories",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/categories"
            },
            {
              "rel":"variables",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/variables"
            },
            {
              "rel":"records",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/records"
            },
            {
              "rel":"series",
              "uri":"https://www.speedrun.com/api/v1/series/049rqr4v"
            },
            {
              "rel":"derived-games",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/derived-games"
            },
            {
              "rel":"romhacks",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/derived-games"
            }
          ]
        }
      },
      "level":{
        "data":[

        ]
      },
      "category":{
        "data":{
          "id":"prklq2n9",
          "name":"Any% (Agent)",
          "weblink":"https://www.speedrun.com/ge/full_game#Any_Agent",
          "type":"per-game",
          "rules":"Go to http://rankings.the-elite.net/ for updated Individual Level rankings and leaderboards.\r\nThe speedrun.com leaderboard\u0027s purpose is to redirect new players to The-Elite Rankings website. The records listed here are mirrored from the rankings page and not necessarily up to date.\r\n\r\nBeat the game on Agent from Dam to Cradle.",
          "players":{
            "type":"exactly",
            "value":1
          },
          "miscellaneous":false,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/categories/prklq2n9"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4"
            },
            {
              "rel":"variables",
              "uri":"https://www.speedrun.com/api/v1/categories/prklq2n9/variables"
            },
            {
              "rel":"records",
              "uri":"https://www.speedrun.com/api/v1/categories/prklq2n9/records"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?category=prklq2n9"
            },
            {
              "rel":"leaderboard",
              "uri":"https://www.speedrun.com/api/v1/leaderboards/nj1ne1p4/category/prklq2n9"
            }
          ]
        }
      },
      "videos":null,
      "comment":"Goofy Control, had to get Body Armor. Tied Flicker!",
      "status":{
        "status":"verified",
        "examiner":null,
        "verify-date":null
      },
      "players":{
        "data":[
          {
            "rel":"user",
            "id":"kjprmv28",
            "names":{
              "international":"Thiradell",
              "japanese":null
            },
            "weblink":"https://www.speedrun.com/user/Thiradell",
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
            "signup":"2015-08-18T20:04:04Z",
            "location":{
              "country":{
                "code":"us",
                "names":{
                  "international":"United States",
                  "japanese":null
                }
              },
              "region":{
                "code":"us/co",
                "names":{
                  "international":"Colorado, USA",
                  "japanese":null
                }
              }
            },
            "twitch":null,
            "hitbox":null,
            "youtube":null,
            "twitter":null,
            "speedrunslive":null,
            "links":[
              {
                "rel":"self",
                "uri":"https://www.speedrun.com/api/v1/users/kjprmv28"
              },
              {
                "rel":"runs",
                "uri":"https://www.speedrun.com/api/v1/runs?user=kjprmv28"
              },
              {
                "rel":"games",
                "uri":"https://www.speedrun.com/api/v1/games?moderator=kjprmv28"
              },
              {
                "rel":"personal-bests",
                "uri":"https://www.speedrun.com/api/v1/users/kjprmv28/personal-bests"
              }
            ]
          }
        ]
      },
      "date":"2013-12-10",
      "submitted":null,
      "times":{
        "primary":"PT25M49S",
        "primary_t":1549,
        "realtime":"PT25M49S",
        "realtime_t":1549,
        "realtime_noloads":null,
        "realtime_noloads_t":0,
        "ingame":null,
        "ingame_t":0
      },
      "system":{
        "platform":"w89rwelk",
        "emulated":false,
        "region":null
      },
      "splits":null,
      "values":{

      },
      "links":[
        {
          "rel":"self",
          "uri":"https://www.speedrun.com/api/v1/runs/1wzp0gmq"
        },
        {
          "rel":"game",
          "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4"
        },
        {
          "rel":"category",
          "uri":"https://www.speedrun.com/api/v1/categories/prklq2n9"
        },
        {
          "rel":"platform",
          "uri":"https://www.speedrun.com/api/v1/platforms/w89rwelk"
        }
      ],
      "region":{
        "data":[

        ]
      },
      "platform":{
        "data":{
          "id":"w89rwelk",
          "name":"Nintendo 64",
          "released":1996,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/platforms/w89rwelk"
            },
            {
              "rel":"games",
              "uri":"https://www.speedrun.com/api/v1/games?platform=w89rwelk"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?platform=w89rwelk"
            }
          ]
        }
      }
    },
    {
      "id":"opyd3jzn",
      "weblink":"https://www.speedrun.com/ge/run/opyd3jzn",
      "game":{
        "data":{
          "id":"nj1ne1p4",
          "names":{
            "international":"GoldenEye 007",
            "japanese":"\u30b4\u30fc\u30eb\u30c7\u30f3\u30a2\u30a4 007",
            "twitch":"GoldenEye 007"
          },
          "abbreviation":"ge",
          "weblink":"https://www.speedrun.com/ge",
          "released":1997,
          "release-date":"1997-08-25",
          "ruleset":{
            "show-milliseconds":false,
            "require-verification":true,
            "require-video":true,
            "run-times":[
              "realtime"
            ],
            "default-time":"realtime",
            "emulators-allowed":false
          },
          "romhack":false,
          "gametypes":[

          ],
          "platforms":[
            "w89rwelk"
          ],
          "regions":[
            "pr184lqn",
            "e6lxy1dz",
            "o316x197"
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
            "p7j4dj10":"super-moderator",
            "61xyew8r":"super-moderator",
            "0jml7y81":"super-moderator"
          },
          "created":null,
          "assets":{
            "logo":{
              "uri":"https://www.speedrun.com/themes/Default/logo.png",
              "width":640,
              "height":78
            },
            "cover-tiny":{
              "uri":"https://www.speedrun.com/themes/ge/cover-32.png",
              "width":45,
              "height":32
            },
            "cover-small":{
              "uri":"https://www.speedrun.com/themes/ge/cover-64.png",
              "width":90,
              "height":64
            },
            "cover-medium":{
              "uri":"https://www.speedrun.com/themes/ge/cover-128.png",
              "width":180,
              "height":128
            },
            "cover-large":{
              "uri":"https://www.speedrun.com/themes/ge/cover-256.png",
              "width":360,
              "height":256
            },
            "icon":{
              "uri":"https://www.speedrun.com/themes/Default/favicon.png",
              "width":64,
              "height":64
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
              "uri":"https://www.speedrun.com/themes/ge/background.png",
              "width":1025,
              "height":717
            },
            "foreground":null
          },
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?game=nj1ne1p4"
            },
            {
              "rel":"levels",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/levels"
            },
            {
              "rel":"categories",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/categories"
            },
            {
              "rel":"variables",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/variables"
            },
            {
              "rel":"records",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/records"
            },
            {
              "rel":"series",
              "uri":"https://www.speedrun.com/api/v1/series/049rqr4v"
            },
            {
              "rel":"derived-games",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/derived-games"
            },
            {
              "rel":"romhacks",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4/derived-games"
            }
          ]
        }
      },
      "level":{
        "data":[

        ]
      },
      "category":{
        "data":{
          "id":"prklq2n9",
          "name":"Any% (Agent)",
          "weblink":"https://www.speedrun.com/ge/full_game#Any_Agent",
          "type":"per-game",
          "rules":"Go to http://rankings.the-elite.net/ for updated Individual Level rankings and leaderboards.\r\nThe speedrun.com leaderboard\u0027s purpose is to redirect new players to The-Elite Rankings website. The records listed here are mirrored from the rankings page and not necessarily up to date.\r\n\r\nBeat the game on Agent from Dam to Cradle.",
          "players":{
            "type":"exactly",
            "value":1
          },
          "miscellaneous":false,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/categories/prklq2n9"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4"
            },
            {
              "rel":"variables",
              "uri":"https://www.speedrun.com/api/v1/categories/prklq2n9/variables"
            },
            {
              "rel":"records",
              "uri":"https://www.speedrun.com/api/v1/categories/prklq2n9/records"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?category=prklq2n9"
            },
            {
              "rel":"leaderboard",
              "uri":"https://www.speedrun.com/api/v1/leaderboards/nj1ne1p4/category/prklq2n9"
            }
          ]
        }
      },
      "videos":null,
      "comment":"\r",
      "status":{
        "status":"verified",
        "examiner":null,
        "verify-date":null
      },
      "players":{
        "data":[
          {
            "rel":"guest",
            "name":"ajbownes",
            "links":[
              {
                "rel":"self",
                "uri":"https://www.speedrun.com/api/v1/guests/ajbownes"
              },
              {
                "rel":"runs",
                "uri":"https://www.speedrun.com/api/v1/runs?guest=ajbownes"
              }
            ]
          }
        ]
      },
      "date":"2007-05-20",
      "submitted":null,
      "times":{
        "primary":"PT26M16S",
        "primary_t":1576,
        "realtime":"PT26M16S",
        "realtime_t":1576,
        "realtime_noloads":null,
        "realtime_noloads_t":0,
        "ingame":null,
        "ingame_t":0
      },
      "system":{
        "platform":"w89rwelk",
        "emulated":false,
        "region":null
      },
      "splits":null,
      "values":{

      },
      "links":[
        {
          "rel":"self",
          "uri":"https://www.speedrun.com/api/v1/runs/opyd3jzn"
        },
        {
          "rel":"game",
          "uri":"https://www.speedrun.com/api/v1/games/nj1ne1p4"
        },
        {
          "rel":"category",
          "uri":"https://www.speedrun.com/api/v1/categories/prklq2n9"
        },
        {
          "rel":"platform",
          "uri":"https://www.speedrun.com/api/v1/platforms/w89rwelk"
        }
      ],
      "region":{
        "data":[

        ]
      },
      "platform":{
        "data":{
          "id":"w89rwelk",
          "name":"Nintendo 64",
          "released":1996,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/platforms/w89rwelk"
            },
            {
              "rel":"games",
              "uri":"https://www.speedrun.com/api/v1/games?platform=w89rwelk"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?platform=w89rwelk"
            }
          ]
        }
      }
    }
  ],
  "pagination":{
    "offset":0,
    "max":20,
    "size":2,
    "links":[

    ]
  }
}
JSON
        );
        $runs = $client->runs()->getList();

        self::assertSame('1wzpqgyq', $runs[0]->getId());
        self::assertSame('1wzp0gmq', $runs[1]->getId());
    }
}
