<?php
namespace Dsinn\SrcomApi\Tests;

class GamesTest extends TestCase
{
    public function testGetById(): void
    {
        $client = $this->getClient(<<<'JSON'
{
  "data":{
    "id":"v1pxjz68",
    "names":{
      "international":"Super Mario Sunshine",
      "japanese":"\u30b9\u30fc\u30d1\u30fc\u30de\u30ea\u30aa\u30b5\u30f3\u30b7\u30e3\u30a4\u30f3",
      "twitch":"Super Mario Sunshine"
    },
    "abbreviation":"sms",
    "weblink":"https://www.speedrun.com/sms",
    "released":2002,
    "release-date":"2002-07-19",
    "ruleset":{
      "show-milliseconds":true,
      "require-verification":true,
      "require-video":false,
      "run-times":[
        "realtime",
        "ingame"
      ],
      "default-time":"realtime",
      "emulators-allowed":true
    },
    "romhack":false,
    "gametypes":{
      "data":[

      ]
    },
    "platforms":{
      "data":[
        {
          "id":"4p9z06rn",
          "name":"GameCube",
          "released":2001,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/platforms/4p9z06rn"
            },
            {
              "rel":"games",
              "uri":"https://www.speedrun.com/api/v1/games?platform=4p9z06rn"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?platform=4p9z06rn"
            }
          ]
        },
        {
          "id":"v06dk3e4",
          "name":"Wii",
          "released":2006,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/platforms/v06dk3e4"
            },
            {
              "rel":"games",
              "uri":"https://www.speedrun.com/api/v1/games?platform=v06dk3e4"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?platform=v06dk3e4"
            }
          ]
        }
      ]
    },
    "regions":{
      "data":[
        {
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
        },
        {
          "id":"e6lxy1dz",
          "name":"EUR / PAL",
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/regions/e6lxy1dz"
            },
            {
              "rel":"games",
              "uri":"https://www.speedrun.com/api/v1/games?region=e6lxy1dz"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?region=e6lxy1dz"
            }
          ]
        }
      ]
    },
    "genres":{
      "data":[
        {
          "id":"qdnqkn8k",
          "name":"Platformer",
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/genres/qdnqkn8k"
            },
            {
              "rel":"games",
              "uri":"https://www.speedrun.com/api/v1/games?genre=qdnqkn8k"
            }
          ]
        },
        {
          "id":"jp23ox26",
          "name":"3D Platformer",
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/genres/jp23ox26"
            },
            {
              "rel":"games",
              "uri":"https://www.speedrun.com/api/v1/games?genre=jp23ox26"
            }
          ]
        }
      ]
    },
    "engines":{
      "data":[

      ]
    },
    "developers":{
      "data":[
        {
          "id":"xv6dvx62",
          "name":"Nintendo",
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/developers/xv6dvx62"
            },
            {
              "rel":"games",
              "uri":"https://www.speedrun.com/api/v1/games?developer=xv6dvx62"
            }
          ]
        }
      ]
    },
    "publishers":{
      "data":[
        {
          "id":"m0rvylrx",
          "name":"Nintendo",
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/publishers/m0rvylrx"
            },
            {
              "rel":"games",
              "uri":"https://www.speedrun.com/api/v1/games?publisher=m0rvylrx"
            }
          ]
        }
      ]
    },
    "moderators":{
      "data":[
        {
          "id":"dkjplk8q",
          "names":{
            "international":"Samura1man",
            "japanese":null
          },
          "weblink":"https://www.speedrun.com/user/Samura1man",
          "name-style":{
            "style":"gradient",
            "color-from":{
              "light":"#900090",
              "dark":"#A010A0"
            },
            "color-to":{
              "light":"#900090",
              "dark":"#A010A0"
            }
          },
          "role":"user",
          "signup":"2014-07-06T19:17:16Z",
          "location":{
            "country":{
              "code":"fi",
              "names":{
                "international":"Finland",
                "japanese":null
              }
            },
            "region":{
              "code":"fi/18",
              "names":{
                "international":"Uusimaa, Finland",
                "japanese":null
              }
            }
          },
          "twitch":{
            "uri":"https://www.twitch.tv/Samura1man"
          },
          "hitbox":null,
          "youtube":{
            "uri":"https://www.youtube.com/user/Samura1man"
          },
          "twitter":{
            "uri":"https://www.twitter.com/Samura1man"
          },
          "speedrunslive":{
            "uri":"http://www.speedrunslive.com/profiles/#!/Samura1man"
          },
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/users/dkjplk8q"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?user=dkjplk8q"
            },
            {
              "rel":"games",
              "uri":"https://www.speedrun.com/api/v1/games?moderator=dkjplk8q"
            },
            {
              "rel":"personal-bests",
              "uri":"https://www.speedrun.com/api/v1/users/dkjplk8q/personal-bests"
            }
          ]
        },
        {
          "id":"qj2w9ojk",
          "names":{
            "international":"Milk",
            "japanese":null
          },
          "weblink":"https://www.speedrun.com/user/Milk",
          "name-style":{
            "style":"gradient",
            "color-from":{
              "light":"#000000",
              "dark":"#FFFFFF"
            },
            "color-to":{
              "light":"#E77471",
              "dark":"#E77471"
            }
          },
          "role":"user",
          "signup":"2014-11-13T13:08:31Z",
          "location":null,
          "twitch":{
            "uri":"https://www.twitch.tv/milk_"
          },
          "hitbox":null,
          "youtube":{
            "uri":"https://www.youtube.com/user/xpowderedmilkx"
          },
          "twitter":{
            "uri":"https://www.twitter.com/srlmilk"
          },
          "speedrunslive":{
            "uri":"http://www.speedrunslive.com/profiles/#!/Milk"
          },
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/users/qj2w9ojk"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?user=qj2w9ojk"
            },
            {
              "rel":"games",
              "uri":"https://www.speedrun.com/api/v1/games?moderator=qj2w9ojk"
            },
            {
              "rel":"personal-bests",
              "uri":"https://www.speedrun.com/api/v1/users/qj2w9ojk/personal-bests"
            }
          ]
        }
      ]
    },
    "created":"2014-12-07T12:50:20Z",
    "assets":{
      "logo":{
        "uri":"https://www.speedrun.com/themes/sms/logo.png",
        "width":180,
        "height":32
      },
      "cover-tiny":{
        "uri":"https://www.speedrun.com/themes/sms/cover-32.png",
        "width":32,
        "height":45
      },
      "cover-small":{
        "uri":"https://www.speedrun.com/themes/sms/cover-64.png",
        "width":64,
        "height":90
      },
      "cover-medium":{
        "uri":"https://www.speedrun.com/themes/sms/cover-128.png",
        "width":128,
        "height":180
      },
      "cover-large":{
        "uri":"https://www.speedrun.com/themes/sms/cover-256.png",
        "width":256,
        "height":360
      },
      "icon":{
        "uri":"https://www.speedrun.com/themes/sms/favicon.png",
        "width":282,
        "height":325
      },
      "trophy-1st":{
        "uri":"https://www.speedrun.com/themes/sms/1st.png",
        "width":18,
        "height":18
      },
      "trophy-2nd":{
        "uri":"https://www.speedrun.com/themes/sms/2nd.png",
        "width":18,
        "height":18
      },
      "trophy-3rd":{
        "uri":"https://www.speedrun.com/themes/sms/3rd.png",
        "width":18,
        "height":18
      },
      "trophy-4th":null,
      "background":{
        "uri":"https://www.speedrun.com/themes/sms/background.png",
        "width":1920,
        "height":1080
      },
      "foreground":null
    },
    "links":[
      {
        "rel":"self",
        "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
      },
      {
        "rel":"runs",
        "uri":"https://www.speedrun.com/api/v1/runs?game=v1pxjz68"
      },
      {
        "rel":"levels",
        "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/levels"
      },
      {
        "rel":"categories",
        "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/categories"
      },
      {
        "rel":"variables",
        "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/variables"
      },
      {
        "rel":"records",
        "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/records"
      },
      {
        "rel":"series",
        "uri":"https://www.speedrun.com/api/v1/series/rv7emz49"
      },
      {
        "rel":"derived-games",
        "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/derived-games"
      },
      {
        "rel":"romhacks",
        "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/derived-games"
      },
      {
        "rel":"leaderboard",
        "uri":"https://www.speedrun.com/api/v1/leaderboards/v1pxjz68/category/n2y3r8do"
      }
    ],
    "levels":{
      "data":[
        {
          "id":"xd4e80wm",
          "name":"Bianco Hills",
          "weblink":"https://www.speedrun.com/sms/Bianco_Hills",
          "rules":null,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/levels/xd4e80wm"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"categories",
              "uri":"https://www.speedrun.com/api/v1/levels/xd4e80wm/categories"
            },
            {
              "rel":"variables",
              "uri":"https://www.speedrun.com/api/v1/levels/xd4e80wm/variables"
            },
            {
              "rel":"records",
              "uri":"https://www.speedrun.com/api/v1/levels/xd4e80wm/records"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?level=xd4e80wm"
            },
            {
              "rel":"leaderboard",
              "uri":"https://www.speedrun.com/api/v1/leaderboards/v1pxjz68/level/xd4e80wm/9d8p1llk"
            }
          ]
        },
        {
          "id":"nwlzepdv",
          "name":"Bianco Hills Hoverless",
          "weblink":"https://www.speedrun.com/sms/Bianco_Hills_Hoverless",
          "rules":"- Hover Nozzle is banned.",
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/levels/nwlzepdv"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"categories",
              "uri":"https://www.speedrun.com/api/v1/levels/nwlzepdv/categories"
            },
            {
              "rel":"variables",
              "uri":"https://www.speedrun.com/api/v1/levels/nwlzepdv/variables"
            },
            {
              "rel":"records",
              "uri":"https://www.speedrun.com/api/v1/levels/nwlzepdv/records"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?level=nwlzepdv"
            },
            {
              "rel":"leaderboard",
              "uri":"https://www.speedrun.com/api/v1/leaderboards/v1pxjz68/level/nwlzepdv/9d8p1llk"
            }
          ]
        }
      ]
    },
    "categories":{
      "data":[
        {
          "id":"n2y3r8do",
          "name":"Any%",
          "weblink":"https://www.speedrun.com/sms#Any",
          "type":"per-game",
          "rules":"**Goal**\r\nBeat the game (Defeat Bowser in Corona Mountain).\r\n\r\n**Timing**\r\nTime starts when pressing A to select \u0027Yes\u0027 to create a new file. Time ends when you land the final ground pound on the Bowser fight.\r\n\r\n**Requirements**\r\n* Runs must be real-time (No pausing the timer).\r\n* When playing on console, you must play using an official game disc. USB/SD loading or unofficial (copied) discs are not allowed.\r\n* Using Nintendont to play discs from other regions is NOT allowed.\r\n* Emulator is not allowed for runs under 1 hour 35 minutes.\r\n* Video proof is required for runs under 1 hour 25 minutes.\r\n* Videos are required to show the game clearly, and contain game audio.\r\n\r\n**Recommendations**\r\n* Submit your runs with video if you have the ability to do so, regardless of the requirements.\r\n* Upload your splits to splits.io and add them to your submission, especially if you don\u0027t have a video.\r\n* [Gecko OS](http://wiibrew.org/wiki/Gecko_OS) is the preferred app for playing discs from other regions. Priiloader and AnyRegion Changer are also fine. If you want to use a different method, please contact a moderator first.\r\n* If you have any questions, contact a moderator. The best place to do this is in the [community Discord](https://discord.gg/0SoktBcRDw8B1NJB).",
          "players":{
            "type":"exactly",
            "value":1
          },
          "miscellaneous":false,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/categories/n2y3r8do"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"variables",
              "uri":"https://www.speedrun.com/api/v1/categories/n2y3r8do/variables"
            },
            {
              "rel":"records",
              "uri":"https://www.speedrun.com/api/v1/categories/n2y3r8do/records"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?category=n2y3r8do"
            },
            {
              "rel":"leaderboard",
              "uri":"https://www.speedrun.com/api/v1/leaderboards/v1pxjz68/category/n2y3r8do"
            }
          ]
        },
        {
          "id":"wkpmjjkr",
          "name":"All Episodes",
          "weblink":"https://www.speedrun.com/sms#All_Episodes",
          "type":"per-game",
          "rules":"**Goal**\r\nCollect every Shine Sprite obtained from completing episodes in the game worlds (8 per world), and beat the game (Defeat Bowser in Corona Mountain), for a grand total of 58 Shine Sprites.\r\n\r\n**Timing**\r\nTime starts when pressing A to select \u0027Yes\u0027 to create a new file. Time ends when you land the final ground pound on the Bowser fight.\r\n\r\n**Requirements**\r\n* Runs must be real-time (No pausing the timer).\r\n* When playing on console, you must play using an official game disc. USB/SD loading or unofficial (copied) discs are not allowed.\r\n* Using Nintendont to play discs from other regions is NOT allowed.\r\n* Emulator is not allowed for runs under 1 hour 50 minutes.\r\n* Video proof is required for runs under 1 hour 50 minutes.\r\n* Videos are required to show the game clearly, and contain game audio.\r\n\r\n**Recommendations**\r\n* Submit your runs with video if you have the ability to do so, regardless of the requirements.\r\n* Upload your splits to splits.io and add them to your submission, especially if you don\u0027t have a video.\r\n* [Gecko OS](http://wiibrew.org/wiki/Gecko_OS) is the preferred app for playing discs from other regions. Priiloader and AnyRegion Changer are also fine. If you want to use a different method, please contact a moderator first.\r\n* If you have any questions, contact a moderator. The best place to do this is in the [community Discord](https://discord.gg/0SoktBcRDw8B1NJB).",
          "players":{
            "type":"exactly",
            "value":1
          },
          "miscellaneous":false,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/categories/wkpmjjkr"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"variables",
              "uri":"https://www.speedrun.com/api/v1/categories/wkpmjjkr/variables"
            },
            {
              "rel":"records",
              "uri":"https://www.speedrun.com/api/v1/categories/wkpmjjkr/records"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?category=wkpmjjkr"
            },
            {
              "rel":"leaderboard",
              "uri":"https://www.speedrun.com/api/v1/leaderboards/v1pxjz68/category/wkpmjjkr"
            }
          ]
        }
      ]
    },
    "variables":{
      "data":[
        {
          "id":"kn0m2zl3",
          "name":"Normal/Hoverless",
          "category":"n2y3r8do",
          "scope":{
            "type":"full-game"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "jq6m9o1m":"Normal",
              "5lmyr0lv":"Hoverless"
            },
            "values":{
              "jq6m9o1m":{
                "label":"Normal",
                "rules":null,
                "flags":{
                  "miscellaneous":false
                }
              },
              "5lmyr0lv":{
                "label":"Hoverless",
                "rules":"Hover-Nozzle is banned.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"jq6m9o1m"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/kn0m2zl3"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/n2y3r8do"
            }
          ]
        },
        {
          "id":"ql612789",
          "name":"Normal/Hoverless",
          "category":"7kjqlxd3",
          "scope":{
            "type":"full-game"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "81wgv6q4":"Normal",
              "p12nv21x":"Hoverless"
            },
            "values":{
              "81wgv6q4":{
                "label":"Normal",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "p12nv21x":{
                "label":"Hoverless",
                "rules":"Hover-Nozzle is banned.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"81wgv6q4"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/ql612789"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/7kjqlxd3"
            }
          ]
        },
        {
          "id":"onv7w7nm",
          "name":"Normal/Hoverless",
          "category":"xk9n9y20",
          "scope":{
            "type":"full-game"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "zqo084qy":"Normal",
              "0q56vv1p":"Hoverless"
            },
            "values":{
              "zqo084qy":{
                "label":"Normal",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "0q56vv1p":{
                "label":"Hoverless",
                "rules":"Hover-Nozzle is banned.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"zqo084qy"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/onv7w7nm"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/xk9n9y20"
            }
          ]
        },
        {
          "id":"ylp726lg",
          "name":"Normal/Hoverless",
          "category":"z27o9gd0",
          "scope":{
            "type":"global"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "0130oy15":"Normal",
              "4lxz5g12":"Hoverless"
            },
            "values":{
              "0130oy15":{
                "label":"Normal",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "4lxz5g12":{
                "label":"Hoverless",
                "rules":"Hover-Nozzle is banned.\r\n\r\nThis excludes the 4 blue coins in the underwater section of Noki Bay.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"0130oy15"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/ylp726lg"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/z27o9gd0"
            }
          ]
        },
        {
          "id":"0nw7908q",
          "name":"Normal/Hoverless",
          "category":"wkpmjjkr",
          "scope":{
            "type":"full-game"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "rqv7kyq6":"Normal",
              "814jok1d":"Hoverless"
            },
            "values":{
              "rqv7kyq6":{
                "label":"Normal",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "814jok1d":{
                "label":"Hoverless",
                "rules":"Hover-Nozzle is banned.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"rqv7kyq6"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/0nw7908q"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/wkpmjjkr"
            }
          ]
        },
        {
          "id":"0nw0oxlq",
          "name":"Level",
          "category":"9d8p1llk",
          "scope":{
            "type":"single-level",
            "level":"xd4e80wm"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "zqo67pqy":"Shine 1",
              "013nydq5":"Shine 2",
              "rqv5n716":"Shine 3",
              "5le7w51o":"Shine 4",
              "0q5j0mlp":"Shine 5",
              "4lx7j2q2":"Shine 6",
              "8140n0qd":"Shine 7",
              "z19ow014":"Shine 8",
              "p12y87qx":"3 Reds",
              "81pmgg17":"6 Reds",
              "xqkyxnl9":"100 Coins"
            },
            "values":{
              "zqo67pqy":{
                "label":"Shine 1",
                "rules":null,
                "flags":{
                  "miscellaneous":false
                }
              },
              "013nydq5":{
                "label":"Shine 2",
                "rules":null,
                "flags":{
                  "miscellaneous":false
                }
              },
              "rqv5n716":{
                "label":"Shine 3",
                "rules":null,
                "flags":{
                  "miscellaneous":false
                }
              },
              "5le7w51o":{
                "label":"Shine 4",
                "rules":null,
                "flags":{
                  "miscellaneous":false
                }
              },
              "0q5j0mlp":{
                "label":"Shine 5",
                "rules":null,
                "flags":{
                  "miscellaneous":false
                }
              },
              "4lx7j2q2":{
                "label":"Shine 6",
                "rules":null,
                "flags":{
                  "miscellaneous":false
                }
              },
              "8140n0qd":{
                "label":"Shine 7",
                "rules":null,
                "flags":{
                  "miscellaneous":false
                }
              },
              "z19ow014":{
                "label":"Shine 8",
                "rules":null,
                "flags":{
                  "miscellaneous":false
                }
              },
              "p12y87qx":{
                "label":"3 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "81pmgg17":{
                "label":"6 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "xqkyxnl9":{
                "label":"100 Coins",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              }
            },
            "default":"zqo67pqy"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/0nw0oxlq"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/xd4e80wm"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/9d8p1llk"
            }
          ]
        },
        {
          "id":"wlekwxl6",
          "name":"World Category",
          "category":"xd1r95wk",
          "scope":{
            "type":"single-level",
            "level":"xd4e80wm"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "gq7mxvqp":"Individual World",
              "21gzpnlz":"All Shines",
              "jqzz3gqp":"Full Completion"
            },
            "values":{
              "gq7mxvqp":{
                "label":"Individual World",
                "rules":"- Complete episodes 2-7.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "21gzpnlz":{
                "label":"All Shines",
                "rules":"- Collect all 11 Shines in the world (8 Episode, 2 Hidden Shines, 100 coins)",
                "flags":{
                  "miscellaneous":false
                }
              },
              "jqzz3gqp":{
                "label":"Full Completion",
                "rules":"- Complete all shines and collect every blue coin in the world.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"gq7mxvqp"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/wlekwxl6"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/xd4e80wm"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/xd1r95wk"
            }
          ]
        },
        {
          "id":"68k7o4l2",
          "name":"Shine",
          "category":"9d8p1llk",
          "scope":{
            "type":"single-level",
            "level":"nwlzepdv"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "klro2jlp":"Shine 1",
              "gq7mxnqp":"Shine 2",
              "21gzpxlz":"Shine 3",
              "jqzz34qp":"Shine 4",
              "klro20lp":"Shine 5",
              "21dxe3qe":"Shine 6",
              "5q8w9rqd":"Shine 7",
              "4qygw3q7":"Shine 8",
              "mlnjo61p":"3 Reds",
              "810kdjqv":"6 Reds",
              "9qjk8014":"100 Coins"
            },
            "values":{
              "klro2jlp":{
                "label":"Shine 1",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "gq7mxnqp":{
                "label":"Shine 2",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "21gzpxlz":{
                "label":"Shine 3",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "jqzz34qp":{
                "label":"Shine 4",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "klro20lp":{
                "label":"Shine 5",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "21dxe3qe":{
                "label":"Shine 6",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "5q8w9rqd":{
                "label":"Shine 7",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "4qygw3q7":{
                "label":"Shine 8",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "mlnjo61p":{
                "label":"3 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "810kdjqv":{
                "label":"6 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "9qjk8014":{
                "label":"100 Coins",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              }
            },
            "default":"klro2jlp"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/68k7o4l2"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/nwlzepdv"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/9d8p1llk"
            }
          ]
        },
        {
          "id":"j84d5589",
          "name":"World Category",
          "category":"xd1r95wk",
          "scope":{
            "type":"single-level",
            "level":"nwlzepdv"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "jq66enqm":"Individual World",
              "5lm0my1v":"All Shines",
              "81wx09l4":"Full Completion"
            },
            "values":{
              "jq66enqm":{
                "label":"Individual World",
                "rules":"- Complete episodes 2-7.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "5lm0my1v":{
                "label":"All Shines",
                "rules":"- Collect all 11 Shines in the world (8 Episode, 2 Hidden Shines, 100 coins)",
                "flags":{
                  "miscellaneous":false
                }
              },
              "81wx09l4":{
                "label":"Full Completion",
                "rules":"- Complete all shines and collect every blue coin in the world.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"jq66enqm"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/j84d5589"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/nwlzepdv"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/xd1r95wk"
            }
          ]
        },
        {
          "id":"rn1jzpnj",
          "name":"Shine",
          "category":"9d8p1llk",
          "scope":{
            "type":"single-level",
            "level":"xd0no09q"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "zqo6vgqy":"Shine 1",
              "013n6kq5":"Shine 2",
              "rqv5y516":"Shine 3",
              "5le7xp1o":"Shine 4",
              "0q5j3rlp":"Shine 5",
              "4lx76jq2":"Shine 6",
              "8140wwqd":"Shine 7",
              "z190jj14":"Shine 8",
              "p12g6vqx":"4 Reds",
              "81pr3eq7":"100 Coins"
            },
            "values":{
              "zqo6vgqy":{
                "label":"Shine 1",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "013n6kq5":{
                "label":"Shine 2",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "rqv5y516":{
                "label":"Shine 3",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "5le7xp1o":{
                "label":"Shine 4",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "0q5j3rlp":{
                "label":"Shine 5",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "4lx76jq2":{
                "label":"Shine 6",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "8140wwqd":{
                "label":"Shine 7",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "z190jj14":{
                "label":"Shine 8",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "p12g6vqx":{
                "label":"4 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "81pr3eq7":{
                "label":"100 Coins",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              }
            },
            "default":"zqo6vgqy"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/rn1jzpnj"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/xd0no09q"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/9d8p1llk"
            }
          ]
        },
        {
          "id":"p855r58g",
          "name":"World Category",
          "category":"xd1r95wk",
          "scope":{
            "type":"single-level",
            "level":"xd0no09q"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "xqkpg9l9":"Individual World",
              "gq7yvnqp":"All Shines",
              "21gkwxlz":"Full Completion"
            },
            "values":{
              "xqkpg9l9":{
                "label":"Individual World",
                "rules":"- Complete episodes 1-7",
                "flags":{
                  "miscellaneous":false
                }
              },
              "gq7yvnqp":{
                "label":"All Shines",
                "rules":"- Collect all 11 Shines in the world (8 Episode, 2 Hidden Shines, 100 coins)",
                "flags":{
                  "miscellaneous":false
                }
              },
              "21gkwxlz":{
                "label":"Full Completion",
                "rules":"- Complete all shines and collect every blue coin in the world.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"xqkpg9l9"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/p855r58g"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/xd0no09q"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/xd1r95wk"
            }
          ]
        },
        {
          "id":"38dmpe80",
          "name":"Shine",
          "category":"9d8p1llk",
          "scope":{
            "type":"single-level",
            "level":"rw6gyn97"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "jqzor41p":"Shine 1",
              "klr8e01p":"Shine 2",
              "21dpj31e":"Shine 3",
              "5q8nxrqd":"Shine 4",
              "4qykv317":"Shine 5",
              "mlng461p":"Shine 6",
              "8102ojqv":"Shine 7",
              "9qjp60q4":"Shine 8",
              "jq689nlm":"4 Reds",
              "5lm7rylv":"100 Coins"
            },
            "values":{
              "jqzor41p":{
                "label":"Shine 1",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "klr8e01p":{
                "label":"Shine 2",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "21dpj31e":{
                "label":"Shine 3",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "5q8nxrqd":{
                "label":"Shine 4",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "4qykv317":{
                "label":"Shine 5",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "mlng461p":{
                "label":"Shine 6",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "8102ojqv":{
                "label":"Shine 7",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "9qjp60q4":{
                "label":"Shine 8",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "jq689nlm":{
                "label":"4 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "5lm7rylv":{
                "label":"100 Coins",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              }
            },
            "default":"jqzor41p"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/38dmpe80"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/rw6gyn97"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/9d8p1llk"
            }
          ]
        },
        {
          "id":"r8r47rne",
          "name":"World Category",
          "category":"xd1r95wk",
          "scope":{
            "type":"single-level",
            "level":"rw6gyn97"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "81w6v9l4":"Individual World",
              "zqoz8gly":"All Shines",
              "013zokq5":"Full Completion"
            },
            "values":{
              "81w6v9l4":{
                "label":"Individual World",
                "rules":"- Complete episodes 1-7",
                "flags":{
                  "miscellaneous":false
                }
              },
              "zqoz8gly":{
                "label":"All Shines",
                "rules":"- Collect all 11 Shines in the world (8 Episode, 2 Hidden Shines, 100 coins)",
                "flags":{
                  "miscellaneous":false
                }
              },
              "013zokq5":{
                "label":"Full Completion",
                "rules":"- Complete all shines and collect every blue coin in the world.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"81w6v9l4"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/r8r47rne"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/rw6gyn97"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/xd1r95wk"
            }
          ]
        },
        {
          "id":"5lyx1yn4",
          "name":"Shine",
          "category":"9d8p1llk",
          "scope":{
            "type":"single-level",
            "level":"n93l3790"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "rqvjk5q6":"Shine 1",
              "5lep6p1o":"Shine 2",
              "0q5d9rlp":"Shine 3",
              "4lxmvjq2":"Shine 4",
              "814r5wqd":"Shine 5",
              "z1902j14":"Shine 6",
              "p12gvvqx":"Shine 7",
              "81pryeq7":"Shine 8",
              "gq7y5nqp":"Hidden",
              "xqkpe9l9":"1 Reds",
              "21gknxlz":"100 Coins"
            },
            "values":{
              "rqvjk5q6":{
                "label":"Shine 1",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "5lep6p1o":{
                "label":"Shine 2",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "0q5d9rlp":{
                "label":"Shine 3",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "4lxmvjq2":{
                "label":"Shine 4",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "814r5wqd":{
                "label":"Shine 5",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "z1902j14":{
                "label":"Shine 6",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "p12gvvqx":{
                "label":"Shine 7",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "81pryeq7":{
                "label":"Shine 8",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "gq7y5nqp":{
                "label":"Hidden",
                "rules":"This is the shine next to the underground stairs that you collect by spraying the invisible shine graffiti on the wall.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "xqkpe9l9":{
                "label":"1 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "21gknxlz":{
                "label":"100 Coins",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              }
            },
            "default":"rqvjk5q6"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/5lyx1yn4"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/n93l3790"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/9d8p1llk"
            }
          ]
        },
        {
          "id":"e8mq5xn6",
          "name":"World Category",
          "category":"xd1r95wk",
          "scope":{
            "type":"single-level",
            "level":"n93l3790"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "jqzon41p":"Individual World",
              "klr8301p":"All Shines",
              "21dpk31e":"Full Completion"
            },
            "values":{
              "jqzon41p":{
                "label":"Individual World",
                "rules":"- Complete episodes 1-7 (No Gelato Beach Skip allowed, complete all 7 episodes)",
                "flags":{
                  "miscellaneous":false
                }
              },
              "klr8301p":{
                "label":"All Shines",
                "rules":"- Collect all 11 Shines in the world (8 Episode, 2 Hidden Shines, 100 coins)",
                "flags":{
                  "miscellaneous":false
                }
              },
              "21dpk31e":{
                "label":"Full Completion",
                "rules":"- Complete all shines and collect every blue coin in the world.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"jqzon41p"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/e8mq5xn6"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/n93l3790"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/xd1r95wk"
            }
          ]
        },
        {
          "id":"ylqo6v8r",
          "name":"Shine",
          "category":"9d8p1llk",
          "scope":{
            "type":"single-level",
            "level":"z985l79l"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "5q8nkrqd":"Shine 1",
              "4qykz317":"Shine 2",
              "mlng861p":"Shine 3",
              "8102vjqv":"Shine 4",
              "9qjp70q4":"Shine 5",
              "jq685nlm":"Shine 6",
              "5lm7oylv":"Shine 7",
              "81w649l4":"Shine 8",
              "zqozxgly":"Hidden",
              "013z9kq5":"1 Reds",
              "rqvjv5q6":"100 Coins"
            },
            "values":{
              "5q8nkrqd":{
                "label":"Shine 1",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "4qykz317":{
                "label":"Shine 2",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "mlng861p":{
                "label":"Shine 3",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "8102vjqv":{
                "label":"Shine 4",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "9qjp70q4":{
                "label":"Shine 5",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "jq685nlm":{
                "label":"Shine 6",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "5lm7oylv":{
                "label":"Shine 7",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "81w649l4":{
                "label":"Shine 8",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "zqozxgly":{
                "label":"Hidden",
                "rules":"This is the shine next to the underground stairs that you collect by spraying the invisible shine graffiti on the wall.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "013z9kq5":{
                "label":"1 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "rqvjv5q6":{
                "label":"100 Coins",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              }
            },
            "default":"5q8nkrqd"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/ylqo6v8r"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/z985l79l"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/9d8p1llk"
            }
          ]
        },
        {
          "id":"gnx2jg8v",
          "name":"World Category",
          "category":"xd1r95wk",
          "scope":{
            "type":"single-level",
            "level":"z985l79l"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "5lep2p1o":"Individual World",
              "0q5dvrlp":"All Shines",
              "4lxm5jq2":"Full Completion"
            },
            "values":{
              "5lep2p1o":{
                "label":"Individual World",
                "rules":"- Complete episodes 1-7 (No Gelato Beach Skip allowed, complete all 7 episodes)",
                "flags":{
                  "miscellaneous":false
                }
              },
              "0q5dvrlp":{
                "label":"All Shines",
                "rules":"- Collect all 11 Shines in the world (8 Episode, 2 Hidden Shines, 100 coins)",
                "flags":{
                  "miscellaneous":false
                }
              },
              "4lxm5jq2":{
                "label":"Full Completion",
                "rules":"- Complete all shines and collect every blue coin in the world.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"5lep2p1o"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/gnx2jg8v"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/z985l79l"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/xd1r95wk"
            }
          ]
        },
        {
          "id":"dlo67jlo",
          "name":"Shine",
          "category":"9d8p1llk",
          "scope":{
            "type":"single-level",
            "level":"rdnxgnwm"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "814rowqd":"Shine 1",
              "z190xj14":"Shine 2",
              "p12g9vqx":"Shine 3",
              "81preeq7":"Shine 4",
              "xqkpo9l9":"Shine 5",
              "gq7y2nqp":"Shine 6",
              "21gk9xlz":"Shine 7",
              "jqzog41p":"Shine 8",
              "klr8x01p":"2 Reds",
              "21dp631e":"6 Reds",
              "5q8n4rqd":"100 Coins"
            },
            "values":{
              "814rowqd":{
                "label":"Shine 1",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "z190xj14":{
                "label":"Shine 2",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "p12g9vqx":{
                "label":"Shine 3",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "81preeq7":{
                "label":"Shine 4",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "xqkpo9l9":{
                "label":"Shine 5",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "gq7y2nqp":{
                "label":"Shine 6",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "21gk9xlz":{
                "label":"Shine 7",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "jqzog41p":{
                "label":"Shine 8",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "klr8x01p":{
                "label":"2 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "21dp631e":{
                "label":"6 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "5q8n4rqd":{
                "label":"100 Coins",
                "rules":null,
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"814rowqd"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/dlo67jlo"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/rdnxgnwm"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/9d8p1llk"
            }
          ]
        },
        {
          "id":"jlzxry82",
          "name":"World Category",
          "category":"xd1r95wk",
          "scope":{
            "type":"single-level",
            "level":"rdnxgnwm"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "4qyk7317":"Individual World",
              "mlnge61p":"All Shines",
              "81026jqv":"Full Completion"
            },
            "values":{
              "4qyk7317":{
                "label":"Individual World",
                "rules":"- Complete episodes 1-7\r\n- EYG is permitted.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "mlnge61p":{
                "label":"All Shines",
                "rules":"- Collect all 11 Shines in the world (8 Episode, 2 Hidden Shines, 100 coins)",
                "flags":{
                  "miscellaneous":false
                }
              },
              "81026jqv":{
                "label":"Full Completion",
                "rules":"- Complete all shines and collect every blue coin in the world.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"4qyk7317"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/jlzxry82"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/rdnxgnwm"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/xd1r95wk"
            }
          ]
        },
        {
          "id":"9l75x481",
          "name":"Shine",
          "category":"9d8p1llk",
          "scope":{
            "type":"single-level",
            "level":"ldyk0jw3"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "9qjp20q4":"Shine 1",
              "jq68vnlm":"Shine 2",
              "5lm72ylv":"Shine 3",
              "81w679l4":"Shine 4",
              "zqozjgly":"Shine 5",
              "013zxkq5":"Shine 6",
              "rqvjx5q6":"Shine 7",
              "5lepnp1o":"Shine 8",
              "0q5d4rlp":"2 Reds",
              "4lxmgjq2":"6 Reds",
              "814r9wqd":"100 Coins"
            },
            "values":{
              "9qjp20q4":{
                "label":"Shine 1",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "jq68vnlm":{
                "label":"Shine 2",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "5lm72ylv":{
                "label":"Shine 3",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "81w679l4":{
                "label":"Shine 4",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "zqozjgly":{
                "label":"Shine 5",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "013zxkq5":{
                "label":"Shine 6",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "rqvjx5q6":{
                "label":"Shine 7",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "5lepnp1o":{
                "label":"Shine 8",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "0q5d4rlp":{
                "label":"2 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "4lxmgjq2":{
                "label":"6 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "814r9wqd":{
                "label":"100 Coins",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              }
            },
            "default":"9qjp20q4"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/9l75x481"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/ldyk0jw3"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/9d8p1llk"
            }
          ]
        },
        {
          "id":"yn2mjd85",
          "name":"World Category",
          "category":"xd1r95wk",
          "scope":{
            "type":"single-level",
            "level":"ldyk0jw3"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "z1905j14":"Individual World",
              "p12govqx":"All Shines",
              "81pr4eq7":"Full Completion"
            },
            "values":{
              "z1905j14":{
                "label":"Individual World",
                "rules":"- Complete episodes 1-7\r\n- EYG is permitted.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "p12govqx":{
                "label":"All Shines",
                "rules":"- Collect all 11 Shines in the world (8 Episode, 2 Hidden Shines, 100 coins)",
                "flags":{
                  "miscellaneous":false
                }
              },
              "81pr4eq7":{
                "label":"Full Completion",
                "rules":"- Complete all shines and collect every blue coin in the world.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"z1905j14"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/yn2mjd85"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/ldyk0jw3"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/xd1r95wk"
            }
          ]
        },
        {
          "id":"6njkzel4",
          "name":"Shine",
          "category":"9d8p1llk",
          "scope":{
            "type":"single-level",
            "level":"ywe3pq9l"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "xqkp99l9":"Shine 1",
              "gq7y9nqp":"Shine 2",
              "21gkexlz":"Shine 3",
              "jqzov41p":"Shine 4",
              "klr8j01p":"Shine 5",
              "gq7y9rqp":"Shine 6",
              "21gkeolz":"Shine 7",
              "jqzovk1p":"Shine 8",
              "klr8jw1p":"2 Reds",
              "21dpvg1e":"4 Reds",
              "5q8n26qd":"100 Coins"
            },
            "values":{
              "xqkp99l9":{
                "label":"Shine 1",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "gq7y9nqp":{
                "label":"Shine 2",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "21gkexlz":{
                "label":"Shine 3",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "jqzov41p":{
                "label":"Shine 4",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "klr8j01p":{
                "label":"Shine 5",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "gq7y9rqp":{
                "label":"Shine 6",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "21gkeolz":{
                "label":"Shine 7",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "jqzovk1p":{
                "label":"Shine 8",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "klr8jw1p":{
                "label":"2 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "21dpvg1e":{
                "label":"4 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "5q8n26qd":{
                "label":"100 Coins",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              }
            },
            "default":"xqkp99l9"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/6njkzel4"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/ywe3pq9l"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/9d8p1llk"
            }
          ]
        },
        {
          "id":"kn00m7n3",
          "name":"World Category",
          "category":"xd1r95wk",
          "scope":{
            "type":"single-level",
            "level":"ywe3pq9l"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "4qyk5d17":"Individual World",
              "mlngdn1p":"All Shines",
              "81020pqv":"Full Completion"
            },
            "values":{
              "4qyk5d17":{
                "label":"Individual World",
                "rules":"- Complete episodes 1-7",
                "flags":{
                  "miscellaneous":false
                }
              },
              "mlngdn1p":{
                "label":"All Shines",
                "rules":"- Collect all 11 Shines in the world (8 Episode, 2 Hidden Shines, 100 coins)",
                "flags":{
                  "miscellaneous":false
                }
              },
              "81020pqv":{
                "label":"Full Completion",
                "rules":"- Complete all shines and collect every blue coin in the world.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"4qyk5d17"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/kn00m7n3"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/ywe3pq9l"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/xd1r95wk"
            }
          ]
        },
        {
          "id":"ql6r1vl9",
          "name":"Shine",
          "category":"9d8p1llk",
          "scope":{
            "type":"single-level",
            "level":"69z606d1"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "9qjpwoq4":"Shine 1",
              "jq68yolm":"Shine 2",
              "5lm780lv":"Shine 3",
              "81w6e6l4":"Shine 4",
              "zqozm4ly":"Shine 5",
              "013zwyq5":"Shine 6",
              "rqvj6yq6":"Shine 7",
              "5lepk61o":"Shine 8",
              "0q5dovlp":"2 Reds",
              "4lxmxgq2":"4 Reds",
              "814rxkqd":"100 Coins"
            },
            "values":{
              "9qjpwoq4":{
                "label":"Shine 1",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "jq68yolm":{
                "label":"Shine 2",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "5lm780lv":{
                "label":"Shine 3",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "81w6e6l4":{
                "label":"Shine 4",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "zqozm4ly":{
                "label":"Shine 5",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "013zwyq5":{
                "label":"Shine 6",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "rqvj6yq6":{
                "label":"Shine 7",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "5lepk61o":{
                "label":"Shine 8",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "0q5dovlp":{
                "label":"2 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "4lxmxgq2":{
                "label":"4 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "814rxkqd":{
                "label":"100 Coins",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              }
            },
            "default":"9qjpwoq4"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/ql6r1vl9"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/69z606d1"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/9d8p1llk"
            }
          ]
        },
        {
          "id":"onv47mnm",
          "name":"World Category",
          "category":"xd1r95wk",
          "scope":{
            "type":"single-level",
            "level":"69z606d1"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "z1904414":"Individual World",
              "p12g52qx":"All Shines",
              "81pr7nq7":"Full Completion"
            },
            "values":{
              "z1904414":{
                "label":"Individual World",
                "rules":"- Complete episodes 1-7",
                "flags":{
                  "miscellaneous":false
                }
              },
              "p12g52qx":{
                "label":"All Shines",
                "rules":"- Collect all 11 Shines in the world (8 Episode, 2 Hidden Shines, 100 coins)",
                "flags":{
                  "miscellaneous":false
                }
              },
              "81pr7nq7":{
                "label":"Full Completion",
                "rules":"- Complete all shines and collect every blue coin in the world.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"z1904414"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/onv47mnm"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/69z606d1"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/xd1r95wk"
            }
          ]
        },
        {
          "id":"ylpq7d8g",
          "name":"Shine",
          "category":"9d8p1llk",
          "scope":{
            "type":"single-level",
            "level":"r9gn8qd2"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "xqkpr4l9":"Shine 1",
              "gq7ynrqp":"Shine 2",
              "21gkjolz":"Shine 3",
              "jqzo6k1p":"Shine 4",
              "klr8zw1p":"Shine 5",
              "21dp4g1e":"Shine 6",
              "5q8ne6qd":"Shine 7",
              "4qykxd17":"Shine 8",
              "mlngyn1p":"Gold Bird",
              "81025pqv":"6 Reds",
              "xqkpz4l9":"100 Coins"
            },
            "values":{
              "xqkpr4l9":{
                "label":"Shine 1",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "gq7ynrqp":{
                "label":"Shine 2",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "21gkjolz":{
                "label":"Shine 3",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "jqzo6k1p":{
                "label":"Shine 4",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "klr8zw1p":{
                "label":"Shine 5",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "21dp4g1e":{
                "label":"Shine 6",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "5q8ne6qd":{
                "label":"Shine 7",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "4qykxd17":{
                "label":"Shine 8",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "mlngyn1p":{
                "label":"Gold Bird",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "81025pqv":{
                "label":"6 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "xqkpz4l9":{
                "label":"100 Coins",
                "rules":null,
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"xqkpr4l9"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/ylpq7d8g"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/r9gn8qd2"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/9d8p1llk"
            }
          ]
        },
        {
          "id":"0nw07xlq",
          "name":"World Category",
          "category":"xd1r95wk",
          "scope":{
            "type":"single-level",
            "level":"r9gn8qd2"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "9qjpzoq4":"Individual World",
              "jq684olm":"All Shines",
              "5lm7x0lv":"Full Completion"
            },
            "values":{
              "9qjpzoq4":{
                "label":"Individual World",
                "rules":"- Complete episodes 1-7",
                "flags":{
                  "miscellaneous":false
                }
              },
              "jq684olm":{
                "label":"All Shines",
                "rules":"- Collect all 11 Shines in the world (8 Episode, 2 Hidden Shines, 100 coins)",
                "flags":{
                  "miscellaneous":false
                }
              },
              "5lm7x0lv":{
                "label":"Full Completion",
                "rules":"- Complete all shines and collect every blue coin in the world.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"9qjpzoq4"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/0nw07xlq"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/r9gn8qd2"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/xd1r95wk"
            }
          ]
        },
        {
          "id":"789dx0nw",
          "name":"Shine",
          "category":"9d8p1llk",
          "scope":{
            "type":"single-level",
            "level":"o9xo069l"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "81w6m6l4":"Shine 1",
              "zqozy4ly":"Shine 2",
              "013zvyq5":"Shine 3",
              "rqvj4yq6":"Shine 4",
              "5lepe61o":"Shine 5",
              "0q5d2vlp":"Shine 6",
              "4lxmygq2":"Shine 7",
              "814r2kqd":"Shine 8",
              "z190z414":"Gold Bird",
              "p12g22qx":"6 Reds",
              "81prxnq7":"100 Coins"
            },
            "values":{
              "81w6m6l4":{
                "label":"Shine 1",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "zqozy4ly":{
                "label":"Shine 2",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "013zvyq5":{
                "label":"Shine 3",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "rqvj4yq6":{
                "label":"Shine 4",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "5lepe61o":{
                "label":"Shine 5",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "0q5d2vlp":{
                "label":"Shine 6",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "4lxmygq2":{
                "label":"Shine 7",
                "rules":null,
                "flags":{
                  "miscellaneous":false
                }
              },
              "814r2kqd":{
                "label":"Shine 8",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "z190z414":{
                "label":"Gold Bird",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "p12g22qx":{
                "label":"6 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "81prxnq7":{
                "label":"100 Coins",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              }
            },
            "default":"81w6m6l4"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/789dx0nw"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/o9xo069l"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/9d8p1llk"
            }
          ]
        },
        {
          "id":"2lg15olp",
          "name":"World Category",
          "category":"xd1r95wk",
          "scope":{
            "type":"single-level",
            "level":"o9xo069l"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "gq7y7rqp":"Individual World",
              "21gkxolz":"All Shines",
              "jqzo0k1p":"Full Completion"
            },
            "values":{
              "gq7y7rqp":{
                "label":"Individual World",
                "rules":"- Complete episodes 1-7",
                "flags":{
                  "miscellaneous":false
                }
              },
              "21gkxolz":{
                "label":"All Shines",
                "rules":"- Collect all 11 Shines in the world (8 Episode, 2 Hidden Shines, 100 coins)",
                "flags":{
                  "miscellaneous":false
                }
              },
              "jqzo0k1p":{
                "label":"Full Completion",
                "rules":"- Complete all shines and collect every blue coin in the world, except for the 4 in the Eel area, as they are not accessible without the hover nozzle with the current knowledge of the game.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"gq7y7rqp"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/2lg15olp"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/o9xo069l"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/xd1r95wk"
            }
          ]
        },
        {
          "id":"wl3d9681",
          "name":"Shine",
          "category":"9d8p1llk",
          "scope":{
            "type":"single-level",
            "level":"495zn29p"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "klr85w1p":"Shine 1",
              "21dp2g1e":"Shine 2",
              "5q8ng6qd":"Shine 3",
              "4qyknd17":"Shine 4",
              "mlng5n1p":"Shine 5",
              "8102xpqv":"Shine 6",
              "9qjpgoq4":"Shine 7",
              "jq682olm":"Shine 8",
              "5lm7d0lv":"5 Reds",
              "81w6n6l4":"Hidden",
              "zqoz54ly":"100 Coins"
            },
            "values":{
              "klr85w1p":{
                "label":"Shine 1",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "21dp2g1e":{
                "label":"Shine 2",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "5q8ng6qd":{
                "label":"Shine 3",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "4qyknd17":{
                "label":"Shine 4",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "mlng5n1p":{
                "label":"Shine 5",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "8102xpqv":{
                "label":"Shine 6",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "9qjpgoq4":{
                "label":"Shine 7",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "jq682olm":{
                "label":"Shine 8",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "5lm7d0lv":{
                "label":"5 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "81w6n6l4":{
                "label":"Hidden",
                "rules":"This is the shine that spawns after spraying the sun at the top of the tree in Pianta 8.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "zqoz54ly":{
                "label":"100 Coins",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              }
            },
            "default":"klr85w1p"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/wl3d9681"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/495zn29p"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/9d8p1llk"
            }
          ]
        },
        {
          "id":"wlek9xl6",
          "name":"World Category",
          "category":"xd1r95wk",
          "scope":{
            "type":"single-level",
            "level":"495zn29p"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "013z2yq5":"Individual World",
              "rqvjmyq6":"All Shines",
              "5lep861o":"Full Completion"
            },
            "values":{
              "013z2yq5":{
                "label":"Individual World",
                "rules":"- Complete episodes 1-7",
                "flags":{
                  "miscellaneous":false
                }
              },
              "rqvjmyq6":{
                "label":"All Shines",
                "rules":"- Collect all 11 Shines in the world (8 Episode, 2 Hidden Shines, 100 coins)",
                "flags":{
                  "miscellaneous":false
                }
              },
              "5lep861o":{
                "label":"Full Completion",
                "rules":"- Complete all shines and collect every blue coin in the world.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"013z2yq5"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/wlek9xl6"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/495zn29p"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/xd1r95wk"
            }
          ]
        },
        {
          "id":"68k754l2",
          "name":"Shine",
          "category":"9d8p1llk",
          "scope":{
            "type":"single-level",
            "level":"rdqoqmwx"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "0q5d8vlp":"Shine 1",
              "4lxm4gq2":"Shine 2",
              "814rdkqd":"Shine 3",
              "z190r414":"Shine 4",
              "p12gz2qx":"Shine 5",
              "81prnnq7":"Shine 6",
              "xqkp84l9":"Shine 7",
              "gq7ygrqp":"Shine 8",
              "21gkgolz":"5 Reds",
              "jqzo4k1p":"Hidden",
              "klr87w1p":"100 Coins"
            },
            "values":{
              "0q5d8vlp":{
                "label":"Shine 1",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "4lxm4gq2":{
                "label":"Shine 2",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "814rdkqd":{
                "label":"Shine 3",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "z190r414":{
                "label":"Shine 4",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "p12gz2qx":{
                "label":"Shine 5",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "81prnnq7":{
                "label":"Shine 6",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "xqkp84l9":{
                "label":"Shine 7",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "gq7ygrqp":{
                "label":"Shine 8",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "21gkgolz":{
                "label":"5 Reds",
                "rules":"In-Game time is used.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "jqzo4k1p":{
                "label":"Hidden",
                "rules":"This is the shine that spawns after spraying the sun at the top of the tree in Pianta 8.",
                "flags":{
                  "miscellaneous":false
                }
              },
              "klr87w1p":{
                "label":"100 Coins",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              }
            },
            "default":"0q5d8vlp"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/68k754l2"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/rdqoqmwx"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/9d8p1llk"
            }
          ]
        },
        {
          "id":"j84dg589",
          "name":"World Category",
          "category":"xd1r95wk",
          "scope":{
            "type":"single-level",
            "level":"rdqoqmwx"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "21dpdg1e":"Individual World",
              "5q8nz6qd":"All Shines",
              "4qyk4d17":"Full Completion"
            },
            "values":{
              "21dpdg1e":{
                "label":"Individual World",
                "rules":"- Complete episodes 1-7",
                "flags":{
                  "miscellaneous":false
                }
              },
              "5q8nz6qd":{
                "label":"All Shines",
                "rules":"- Collect all 11 Shines in the world (8 Episode, 2 Hidden Shines, 100 coins)",
                "flags":{
                  "miscellaneous":false
                }
              },
              "4qyk4d17":{
                "label":"Full Completion",
                "rules":"- Complete all shines and collect every blue coin in the world.",
                "flags":{
                  "miscellaneous":false
                }
              }
            },
            "default":"21dpdg1e"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/j84dg589"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/rdqoqmwx"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/xd1r95wk"
            }
          ]
        },
        {
          "id":"6njj95n4",
          "name":"Shine",
          "category":"9d8p1llk",
          "scope":{
            "type":"single-level",
            "level":"o9x1el0d"
          },
          "mandatory":true,
          "user-defined":false,
          "obsoletes":true,
          "values":{
            "_note":"`choices` is deprecated, please use `values` instead",
            "choices":{
              "z192pr4q":"100 Coins",
              "p12v0z2q":"Airstrip Reds",
              "81py5nn1":"Beach Shine",
              "xqken84q":"Box Game 1",
              "gq75xgr1":"Box Game 2",
              "21gnpgol":"Box Game 3",
              "jqzn34kq":"Chuckster Shine",
              "klr327wl":"Corona Mountain",
              "21dkedgl":"Gelato Pipe",
              "5q8k9z6q":"Gold Bird",
              "4qyzw4d1":"Grass Pipe",
              "mln8o3nl":"Jail Secret",
              "810vd7pl":"Left Bell",
              "9qj78doq":"Left House",
              "jq65e7ol":"Lighthouse",
              "5lmomn01":"Lilypad",
              "81w4086q":"Pachinko",
              "zqoxvn4q":"Right Bell",
              "01396ry1":"Shine Gate"
            },
            "values":{
              "z192pr4q":{
                "label":"100 Coins",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "p12v0z2q":{
                "label":"Airstrip Reds",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "81py5nn1":{
                "label":"Beach Shine",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "xqken84q":{
                "label":"Box Game 1",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "gq75xgr1":{
                "label":"Box Game 2",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "21gnpgol":{
                "label":"Box Game 3",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "jqzn34kq":{
                "label":"Chuckster Shine",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "klr327wl":{
                "label":"Corona Mountain",
                "rules":null,
                "flags":{
                  "miscellaneous":false
                }
              },
              "21dkedgl":{
                "label":"Gelato Pipe",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "5q8k9z6q":{
                "label":"Gold Bird",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "4qyzw4d1":{
                "label":"Grass Pipe",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "mln8o3nl":{
                "label":"Jail Secret",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "810vd7pl":{
                "label":"Left Bell",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "9qj78doq":{
                "label":"Left House",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "jq65e7ol":{
                "label":"Lighthouse",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "5lmomn01":{
                "label":"Lilypad",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "81w4086q":{
                "label":"Pachinko",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "zqoxvn4q":{
                "label":"Right Bell",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              },
              "01396ry1":{
                "label":"Shine Gate",
                "rules":null,
                "flags":{
                  "miscellaneous":null
                }
              }
            },
            "default":"z192pr4q"
          },
          "is-subcategory":true,
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/variables/6njj95n4"
            },
            {
              "rel":"game",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"level",
              "uri":"https://www.speedrun.com/api/v1/levels/o9x1el0d"
            },
            {
              "rel":"category",
              "uri":"https://www.speedrun.com/api/v1/categories/9d8p1llk"
            }
          ]
        }
      ]
    }
  }
}
JSON
        );
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function testGetCategories(): void
    {
        $client = $this->getClient(<<<'JSON'
{
  "data":[
    {
      "id":"n2y3r8do",
      "name":"Any%",
      "weblink":"https://www.speedrun.com/sms#Any",
      "type":"per-game",
      "rules":"**Goal**\r\nBeat the game (Defeat Bowser in Corona Mountain).\r\n\r\n**Timing**\r\nTime starts when pressing A to select \u0027Yes\u0027 to create a new file. Time ends when you land the final ground pound on the Bowser fight.\r\n\r\n**Requirements**\r\n* Runs must be real-time (No pausing the timer).\r\n* When playing on console, you must play using an official game disc. USB/SD loading or unofficial (copied) discs are not allowed.\r\n* Using Nintendont to play discs from other regions is NOT allowed.\r\n* Emulator is not allowed for runs under 1 hour 35 minutes.\r\n* Video proof is required for runs under 1 hour 25 minutes.\r\n* Videos are required to show the game clearly, and contain game audio.\r\n\r\n**Recommendations**\r\n* Submit your runs with video if you have the ability to do so, regardless of the requirements.\r\n* Upload your splits to splits.io and add them to your submission, especially if you don\u0027t have a video.\r\n* [Gecko OS](http://wiibrew.org/wiki/Gecko_OS) is the preferred app for playing discs from other regions. Priiloader and AnyRegion Changer are also fine. If you want to use a different method, please contact a moderator first.\r\n* If you have any questions, contact a moderator. The best place to do this is in the [community Discord](https://discord.gg/0SoktBcRDw8B1NJB).",
      "players":{
        "type":"exactly",
        "value":1
      },
      "miscellaneous":false,
      "links":[
        {
          "rel":"self",
          "uri":"https://www.speedrun.com/api/v1/categories/n2y3r8do"
        },
        {
          "rel":"game",
          "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
        },
        {
          "rel":"variables",
          "uri":"https://www.speedrun.com/api/v1/categories/n2y3r8do/variables"
        },
        {
          "rel":"records",
          "uri":"https://www.speedrun.com/api/v1/categories/n2y3r8do/records"
        },
        {
          "rel":"runs",
          "uri":"https://www.speedrun.com/api/v1/runs?category=n2y3r8do"
        },
        {
          "rel":"leaderboard",
          "uri":"https://www.speedrun.com/api/v1/leaderboards/v1pxjz68/category/n2y3r8do"
        }
      ],
      "game":{
        "data":{
          "id":"v1pxjz68",
          "names":{
            "international":"Super Mario Sunshine",
            "japanese":"\u30b9\u30fc\u30d1\u30fc\u30de\u30ea\u30aa\u30b5\u30f3\u30b7\u30e3\u30a4\u30f3",
            "twitch":"Super Mario Sunshine"
          },
          "abbreviation":"sms",
          "weblink":"https://www.speedrun.com/sms",
          "released":2002,
          "release-date":"2002-07-19",
          "ruleset":{
            "show-milliseconds":true,
            "require-verification":true,
            "require-video":false,
            "run-times":[
              "realtime",
              "ingame"
            ],
            "default-time":"realtime",
            "emulators-allowed":true
          },
          "romhack":false,
          "gametypes":[

          ],
          "platforms":[
            "4p9z06rn",
            "v06dk3e4"
          ],
          "regions":[
            "pr184lqn",
            "e6lxy1dz",
            "o316x197",
            "p2g50lnk"
          ],
          "genres":[
            "qdnqkn8k",
            "jp23ox26"
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
            "dkjplk8q":"super-moderator",
            "qj2w9ojk":"super-moderator",
            "qjopynx6":"super-moderator",
            "y8d44o86":"super-moderator",
            "y8d41986":"super-moderator",
            "o8639p8z":"super-moderator",
            "18v6knxl":"super-moderator",
            "qj2367xk":"super-moderator",
            "98r36381":"super-moderator",
            "qj2y1r68":"super-moderator",
            "0jml7ly8":"super-moderator",
            "kj9k3lr8":"super-moderator"
          },
          "created":"2014-12-07T12:50:20Z",
          "assets":{
            "logo":{
              "uri":"https://www.speedrun.com/themes/sms/logo.png",
              "width":180,
              "height":32
            },
            "cover-tiny":{
              "uri":"https://www.speedrun.com/themes/sms/cover-32.png",
              "width":32,
              "height":45
            },
            "cover-small":{
              "uri":"https://www.speedrun.com/themes/sms/cover-64.png",
              "width":64,
              "height":90
            },
            "cover-medium":{
              "uri":"https://www.speedrun.com/themes/sms/cover-128.png",
              "width":128,
              "height":180
            },
            "cover-large":{
              "uri":"https://www.speedrun.com/themes/sms/cover-256.png",
              "width":256,
              "height":360
            },
            "icon":{
              "uri":"https://www.speedrun.com/themes/sms/favicon.png",
              "width":282,
              "height":325
            },
            "trophy-1st":{
              "uri":"https://www.speedrun.com/themes/sms/1st.png",
              "width":18,
              "height":18
            },
            "trophy-2nd":{
              "uri":"https://www.speedrun.com/themes/sms/2nd.png",
              "width":18,
              "height":18
            },
            "trophy-3rd":{
              "uri":"https://www.speedrun.com/themes/sms/3rd.png",
              "width":18,
              "height":18
            },
            "trophy-4th":null,
            "background":{
              "uri":"https://www.speedrun.com/themes/sms/background.png",
              "width":1920,
              "height":1080
            },
            "foreground":null
          },
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?game=v1pxjz68"
            },
            {
              "rel":"levels",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/levels"
            },
            {
              "rel":"categories",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/categories"
            },
            {
              "rel":"variables",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/variables"
            },
            {
              "rel":"records",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/records"
            },
            {
              "rel":"series",
              "uri":"https://www.speedrun.com/api/v1/series/rv7emz49"
            },
            {
              "rel":"derived-games",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/derived-games"
            },
            {
              "rel":"romhacks",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/derived-games"
            },
            {
              "rel":"leaderboard",
              "uri":"https://www.speedrun.com/api/v1/leaderboards/v1pxjz68/category/n2y3r8do"
            }
          ]
        }
      },
      "variables":{
        "data":[
          {
            "id":"kn0m2zl3",
            "name":"Normal/Hoverless",
            "category":"n2y3r8do",
            "scope":{
              "type":"full-game"
            },
            "mandatory":true,
            "user-defined":false,
            "obsoletes":true,
            "values":{
              "_note":"`choices` is deprecated, please use `values` instead",
              "choices":{
                "jq6m9o1m":"Normal",
                "5lmyr0lv":"Hoverless"
              },
              "values":{
                "jq6m9o1m":{
                  "label":"Normal",
                  "rules":null,
                  "flags":{
                    "miscellaneous":false
                  }
                },
                "5lmyr0lv":{
                  "label":"Hoverless",
                  "rules":"Hover-Nozzle is banned.",
                  "flags":{
                    "miscellaneous":false
                  }
                }
              },
              "default":"jq6m9o1m"
            },
            "is-subcategory":true,
            "links":[
              {
                "rel":"self",
                "uri":"https://www.speedrun.com/api/v1/variables/kn0m2zl3"
              },
              {
                "rel":"game",
                "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
              },
              {
                "rel":"category",
                "uri":"https://www.speedrun.com/api/v1/categories/n2y3r8do"
              }
            ]
          }
        ]
      }
    },
    {
      "id":"wkpmjjkr",
      "name":"All Episodes",
      "weblink":"https://www.speedrun.com/sms#All_Episodes",
      "type":"per-game",
      "rules":"**Goal**\r\nCollect every Shine Sprite obtained from completing episodes in the game worlds (8 per world), and beat the game (Defeat Bowser in Corona Mountain), for a grand total of 58 Shine Sprites.\r\n\r\n**Timing**\r\nTime starts when pressing A to select \u0027Yes\u0027 to create a new file. Time ends when you land the final ground pound on the Bowser fight.\r\n\r\n**Requirements**\r\n* Runs must be real-time (No pausing the timer).\r\n* When playing on console, you must play using an official game disc. USB/SD loading or unofficial (copied) discs are not allowed.\r\n* Using Nintendont to play discs from other regions is NOT allowed.\r\n* Emulator is not allowed for runs under 1 hour 50 minutes.\r\n* Video proof is required for runs under 1 hour 50 minutes.\r\n* Videos are required to show the game clearly, and contain game audio.\r\n\r\n**Recommendations**\r\n* Submit your runs with video if you have the ability to do so, regardless of the requirements.\r\n* Upload your splits to splits.io and add them to your submission, especially if you don\u0027t have a video.\r\n* [Gecko OS](http://wiibrew.org/wiki/Gecko_OS) is the preferred app for playing discs from other regions. Priiloader and AnyRegion Changer are also fine. If you want to use a different method, please contact a moderator first.\r\n* If you have any questions, contact a moderator. The best place to do this is in the [community Discord](https://discord.gg/0SoktBcRDw8B1NJB).",
      "players":{
        "type":"exactly",
        "value":1
      },
      "miscellaneous":false,
      "links":[
        {
          "rel":"self",
          "uri":"https://www.speedrun.com/api/v1/categories/wkpmjjkr"
        },
        {
          "rel":"game",
          "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
        },
        {
          "rel":"variables",
          "uri":"https://www.speedrun.com/api/v1/categories/wkpmjjkr/variables"
        },
        {
          "rel":"records",
          "uri":"https://www.speedrun.com/api/v1/categories/wkpmjjkr/records"
        },
        {
          "rel":"runs",
          "uri":"https://www.speedrun.com/api/v1/runs?category=wkpmjjkr"
        },
        {
          "rel":"leaderboard",
          "uri":"https://www.speedrun.com/api/v1/leaderboards/v1pxjz68/category/wkpmjjkr"
        }
      ],
      "game":{
        "data":{
          "id":"v1pxjz68",
          "names":{
            "international":"Super Mario Sunshine",
            "japanese":"\u30b9\u30fc\u30d1\u30fc\u30de\u30ea\u30aa\u30b5\u30f3\u30b7\u30e3\u30a4\u30f3",
            "twitch":"Super Mario Sunshine"
          },
          "abbreviation":"sms",
          "weblink":"https://www.speedrun.com/sms",
          "released":2002,
          "release-date":"2002-07-19",
          "ruleset":{
            "show-milliseconds":true,
            "require-verification":true,
            "require-video":false,
            "run-times":[
              "realtime",
              "ingame"
            ],
            "default-time":"realtime",
            "emulators-allowed":true
          },
          "romhack":false,
          "gametypes":[

          ],
          "platforms":[
            "4p9z06rn",
            "v06dk3e4"
          ],
          "regions":[
            "pr184lqn",
            "e6lxy1dz",
            "o316x197",
            "p2g50lnk"
          ],
          "genres":[
            "qdnqkn8k",
            "jp23ox26"
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
            "dkjplk8q":"super-moderator",
            "qj2w9ojk":"super-moderator",
            "qjopynx6":"super-moderator",
            "y8d44o86":"super-moderator",
            "y8d41986":"super-moderator",
            "o8639p8z":"super-moderator",
            "18v6knxl":"super-moderator",
            "qj2367xk":"super-moderator",
            "98r36381":"super-moderator",
            "qj2y1r68":"super-moderator",
            "0jml7ly8":"super-moderator",
            "kj9k3lr8":"super-moderator"
          },
          "created":"2014-12-07T12:50:20Z",
          "assets":{
            "logo":{
              "uri":"https://www.speedrun.com/themes/sms/logo.png",
              "width":180,
              "height":32
            },
            "cover-tiny":{
              "uri":"https://www.speedrun.com/themes/sms/cover-32.png",
              "width":32,
              "height":45
            },
            "cover-small":{
              "uri":"https://www.speedrun.com/themes/sms/cover-64.png",
              "width":64,
              "height":90
            },
            "cover-medium":{
              "uri":"https://www.speedrun.com/themes/sms/cover-128.png",
              "width":128,
              "height":180
            },
            "cover-large":{
              "uri":"https://www.speedrun.com/themes/sms/cover-256.png",
              "width":256,
              "height":360
            },
            "icon":{
              "uri":"https://www.speedrun.com/themes/sms/favicon.png",
              "width":282,
              "height":325
            },
            "trophy-1st":{
              "uri":"https://www.speedrun.com/themes/sms/1st.png",
              "width":18,
              "height":18
            },
            "trophy-2nd":{
              "uri":"https://www.speedrun.com/themes/sms/2nd.png",
              "width":18,
              "height":18
            },
            "trophy-3rd":{
              "uri":"https://www.speedrun.com/themes/sms/3rd.png",
              "width":18,
              "height":18
            },
            "trophy-4th":null,
            "background":{
              "uri":"https://www.speedrun.com/themes/sms/background.png",
              "width":1920,
              "height":1080
            },
            "foreground":null
          },
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?game=v1pxjz68"
            },
            {
              "rel":"levels",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/levels"
            },
            {
              "rel":"categories",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/categories"
            },
            {
              "rel":"variables",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/variables"
            },
            {
              "rel":"records",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/records"
            },
            {
              "rel":"series",
              "uri":"https://www.speedrun.com/api/v1/series/rv7emz49"
            },
            {
              "rel":"derived-games",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/derived-games"
            },
            {
              "rel":"romhacks",
              "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68/derived-games"
            },
            {
              "rel":"leaderboard",
              "uri":"https://www.speedrun.com/api/v1/leaderboards/v1pxjz68/category/n2y3r8do"
            }
          ]
        }
      },
      "variables":{
        "data":[
          {
            "id":"0nw7908q",
            "name":"Normal/Hoverless",
            "category":"wkpmjjkr",
            "scope":{
              "type":"full-game"
            },
            "mandatory":true,
            "user-defined":false,
            "obsoletes":true,
            "values":{
              "_note":"`choices` is deprecated, please use `values` instead",
              "choices":{
                "rqv7kyq6":"Normal",
                "814jok1d":"Hoverless"
              },
              "values":{
                "rqv7kyq6":{
                  "label":"Normal",
                  "rules":null,
                  "flags":{
                    "miscellaneous":null
                  }
                },
                "814jok1d":{
                  "label":"Hoverless",
                  "rules":"Hover-Nozzle is banned.",
                  "flags":{
                    "miscellaneous":false
                  }
                }
              },
              "default":"rqv7kyq6"
            },
            "is-subcategory":true,
            "links":[
              {
                "rel":"self",
                "uri":"https://www.speedrun.com/api/v1/variables/0nw7908q"
              },
              {
                "rel":"game",
                "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
              },
              {
                "rel":"category",
                "uri":"https://www.speedrun.com/api/v1/categories/wkpmjjkr"
              }
            ]
          }
        ]
      }
    }
  ]
}
JSON
        );
        $categories = $client->games()->getCategories('foo');

        self::assertSame('Any%', $categories[0]->getName());
        self::assertSame('All Episodes', $categories[1]->getName());
    }

    public function testGetLevels(): void
    {
        $client = $this->getClient(<<<'JSON'
{
  "data":[
    {
      "id":"xd4e80wm",
      "name":"Bianco Hills",
      "weblink":"https://www.speedrun.com/sms/Bianco_Hills",
      "rules":null,
      "links":[
        {
          "rel":"self",
          "uri":"https://www.speedrun.com/api/v1/levels/xd4e80wm"
        },
        {
          "rel":"game",
          "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
        },
        {
          "rel":"categories",
          "uri":"https://www.speedrun.com/api/v1/levels/xd4e80wm/categories"
        },
        {
          "rel":"variables",
          "uri":"https://www.speedrun.com/api/v1/levels/xd4e80wm/variables"
        },
        {
          "rel":"records",
          "uri":"https://www.speedrun.com/api/v1/levels/xd4e80wm/records"
        },
        {
          "rel":"runs",
          "uri":"https://www.speedrun.com/api/v1/runs?level=xd4e80wm"
        },
        {
          "rel":"leaderboard",
          "uri":"https://www.speedrun.com/api/v1/leaderboards/v1pxjz68/level/xd4e80wm/9d8p1llk"
        }
      ]
    },
    {
      "id":"nwlzepdv",
      "name":"Bianco Hills Hoverless",
      "weblink":"https://www.speedrun.com/sms/Bianco_Hills_Hoverless",
      "rules":"- Hover Nozzle is banned.",
      "links":[
        {
          "rel":"self",
          "uri":"https://www.speedrun.com/api/v1/levels/nwlzepdv"
        },
        {
          "rel":"game",
          "uri":"https://www.speedrun.com/api/v1/games/v1pxjz68"
        },
        {
          "rel":"categories",
          "uri":"https://www.speedrun.com/api/v1/levels/nwlzepdv/categories"
        },
        {
          "rel":"variables",
          "uri":"https://www.speedrun.com/api/v1/levels/nwlzepdv/variables"
        },
        {
          "rel":"records",
          "uri":"https://www.speedrun.com/api/v1/levels/nwlzepdv/records"
        },
        {
          "rel":"runs",
          "uri":"https://www.speedrun.com/api/v1/runs?level=nwlzepdv"
        },
        {
          "rel":"leaderboard",
          "uri":"https://www.speedrun.com/api/v1/leaderboards/v1pxjz68/level/nwlzepdv/9d8p1llk"
        }
      ]
    }
  ]
}
JSON
        );
    }

    public function testGetVariables(): void
    {
        $client = $this->getClient(<<<'JSON'
{
  "data":[
    {
      "id":"6nj5wpl4",
      "name":"Individual Cup",
      "category":"zdnwj6ed",
      "scope":{
        "type":"full-game"
      },
      "mandatory":true,
      "user-defined":false,
      "obsoletes":true,
      "values":{
        "_note":"`choices` is deprecated, please use `values` instead",
        "choices":{
          "gq7m2nqp":"Mushroom Cup",
          "21gz9xlz":"Flower Cup",
          "jqzzg4qp":"Star Cup",
          "klrox0lp":"Special Cup"
        },
        "values":{
          "gq7m2nqp":{
            "label":"Mushroom Cup",
            "rules":"Ends at the finish line of Thwomp Ruins.",
            "flags":{
              "miscellaneous":false
            }
          },
          "21gz9xlz":{
            "label":"Flower Cup",
            "rules":"Ends at the finish line of Shy Guy Falls.",
            "flags":{
              "miscellaneous":false
            }
          },
          "jqzzg4qp":{
            "label":"Star Cup",
            "rules":"Ends at the finish line of Mount Wario.",
            "flags":{
              "miscellaneous":false
            }
          },
          "klrox0lp":{
            "label":"Special Cup",
            "rules":"Ends at the finish line of Rainbow Road.",
            "flags":{
              "miscellaneous":false
            }
          }
        },
        "default":"gq7m2nqp"
      },
      "is-subcategory":true,
      "links":[
        {
          "rel":"self",
          "uri":"https://www.speedrun.com/api/v1/variables/6nj5wpl4"
        },
        {
          "rel":"game",
          "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde"
        },
        {
          "rel":"category",
          "uri":"https://www.speedrun.com/api/v1/categories/zdnwj6ed"
        }
      ]
    },
    {
      "id":"ylp61rng",
      "name":"Item Usage",
      "category":"vdo4yv2p",
      "scope":{
        "type":"full-game"
      },
      "mandatory":true,
      "user-defined":false,
      "obsoletes":true,
      "values":{
        "_note":"`choices` is deprecated, please use `values` instead",
        "choices":{
          "5q8w03qd":"Items",
          "4qygy2q7":"No Items"
        },
        "values":{
          "5q8w03qd":{
            "label":"Items",
            "rules":null,
            "flags":{
              "miscellaneous":null
            }
          },
          "4qygy2q7":{
            "label":"No Items",
            "rules":null,
            "flags":{
              "miscellaneous":null
            }
          }
        },
        "default":"5q8w03qd"
      },
      "is-subcategory":true,
      "links":[
        {
          "rel":"self",
          "uri":"https://www.speedrun.com/api/v1/variables/ylp61rng"
        },
        {
          "rel":"game",
          "uri":"https://www.speedrun.com/api/v1/games/kyd4pxde"
        },
        {
          "rel":"category",
          "uri":"https://www.speedrun.com/api/v1/categories/vdo4yv2p"
        }
      ]
    }
  ]
}
JSON
        );
    }
}
