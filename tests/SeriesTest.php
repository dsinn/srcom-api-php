<?php
namespace Dsinn\SrcomApi\Tests;

class SeriesTest extends TestCase
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function testGet()
    {
        $client = $this->getClient(<<<'JSON'
{
  "data":{
    "id":"1kgr75w4",
    "names":{
      "international":"Grand Theft Auto",
      "japanese":""
    },
    "abbreviation":"gta",
    "weblink":"https://www.speedrun.com/gta",
    "moderators":{
      "data":[
        {
          "id":"mkj9nw84",
          "names":{
            "international":"f1",
            "japanese":null
          },
          "weblink":"https://www.speedrun.com/user/f1",
          "name-style":{
            "style":"gradient",
            "color-from":{
              "light":"#DAA520",
              "dark":"#F0C03E"
            },
            "color-to":{
              "light":"#DAA520",
              "dark":"#F0C03E"
            }
          },
          "role":"user",
          "signup":"2014-07-10T17:10:03Z",
          "location":null,
          "twitch":{
            "uri":"https://www.twitch.tv/forwarrd1"
          },
          "hitbox":null,
          "youtube":{
            "uri":"https://www.youtube.com/channel/UCjTFKSwN3CVJ_VrkHeb6Sww"
          },
          "twitter":null,
          "speedrunslive":{
            "uri":"http://www.speedrunslive.com/profiles/#!/forwarrd1"
          },
          "links":[
            {
              "rel":"self",
              "uri":"https://www.speedrun.com/api/v1/users/mkj9nw84"
            },
            {
              "rel":"runs",
              "uri":"https://www.speedrun.com/api/v1/runs?user=mkj9nw84"
            },
            {
              "rel":"games",
              "uri":"https://www.speedrun.com/api/v1/games?moderator=mkj9nw84"
            },
            {
              "rel":"personal-bests",
              "uri":"https://www.speedrun.com/api/v1/users/mkj9nw84/personal-bests"
            }
          ]
        }
      ]
    },
    "created":"2014-12-07T12:50:20Z",
    "assets":{
      "logo":{
        "uri":"https://www.speedrun.com/themes/mk64/logo.png",
        "width":180,
        "height":34
      },
      "cover-tiny":{
        "uri":"https://www.speedrun.com/themes/mk64/cover-32.png",
        "width":32,
        "height":45
      },
      "cover-small":{
        "uri":"https://www.speedrun.com/themes/mk64/cover-64.png",
        "width":64,
        "height":90
      },
      "cover-medium":{
        "uri":"https://www.speedrun.com/themes/mk64/cover-128.png",
        "width":128,
        "height":180
      },
      "cover-large":{
        "uri":"https://www.speedrun.com/themes/mk64/cover-256.png",
        "width":256,
        "height":360
      },
      "icon":{
        "uri":"https://www.speedrun.com/themes/mario_kart/favicon.png",
        "width":44,
        "height":44
      },
      "trophy-1st":{
        "uri":"https://www.speedrun.com/images/icons/goldtrophy.png",
        "width":16,
        "height":16
      },
      "trophy-2nd":{
        "uri":"https://www.speedrun.com/images/icons/silvertrophy.png",
        "width":16,
        "height":16
      },
      "trophy-3rd":{
        "uri":"https://www.speedrun.com/images/icons/bronzetrophy.png",
        "width":16,
        "height":16
      },
      "trophy-4th":null,
      "background":{
        "uri":"https://www.speedrun.com/themes/mk64/background.png",
        "width":151,
        "height":195
      },
      "foreground":null
    },
    "links":[
      {
        "rel":"self",
        "uri":"https://www.speedrun.com/api/v1/series/wnlod5vz"
      },
      {
        "rel":"games",
        "uri":"https://www.speedrun.com/api/v1/series/wnlod5vz/games"
      }
    ]
  }
}
JSON
        );
        $series = $client->series()->get('foo');

        self::assertSame('1kgr75w4', $series->getId());
        self::assertSame('Grand Theft Auto', $series->getNames()->getInternational());
        self::assertSame('', $series->getNames()->getJapanese());
        self::assertSame('gta', $series->getAbbreviation());
        self::assertSame('https://www.speedrun.com/gta', $series->getWeblink());
        self::assertSame(true, is_array($series->getModerators()));
        self::assertSame(strtotime('2014-12-07T12:50:20Z'), $series->getCreated()->getTimestamp());

        self::assertSame('https://www.speedrun.com/themes/mk64/logo.png', $series->getAssets()->getLogo()->getUri());
        self::assertSame(180, $series->getAssets()->getLogo()->getWidth());
        self::assertSame(34, $series->getAssets()->getLogo()->getHeight());
        self::assertSame('https://www.speedrun.com/themes/mk64/cover-32.png', $series->getAssets()->getCoverTiny()->getUri());
        self::assertSame(32, $series->getAssets()->getCoverTiny()->getWidth());
        self::assertSame(45, $series->getAssets()->getCoverTiny()->getHeight());
        self::assertSame('https://www.speedrun.com/themes/mk64/cover-64.png', $series->getAssets()->getCoverSmall()->getUri());
        self::assertSame(64, $series->getAssets()->getCoverSmall()->getWidth());
        self::assertSame(90, $series->getAssets()->getCoverSmall()->getHeight());
        self::assertSame('https://www.speedrun.com/themes/mk64/cover-128.png', $series->getAssets()->getCoverMedium()->getUri());
        self::assertSame(128, $series->getAssets()->getCoverMedium()->getWidth());
        self::assertSame(180, $series->getAssets()->getCoverMedium()->getHeight());
        self::assertSame('https://www.speedrun.com/themes/mk64/cover-256.png', $series->getAssets()->getCoverLarge()->getUri());
        self::assertSame(256, $series->getAssets()->getCoverLarge()->getWidth());
        self::assertSame(360, $series->getAssets()->getCoverLarge()->getHeight());
        self::assertSame('https://www.speedrun.com/themes/mario_kart/favicon.png', $series->getAssets()->getIcon()->getUri());
        self::assertSame(44, $series->getAssets()->getIcon()->getWidth());
        self::assertSame(44, $series->getAssets()->getIcon()->getHeight());
        self::assertSame('https://www.speedrun.com/images/icons/goldtrophy.png', $series->getAssets()->getTrophy1st()->getUri());
        self::assertSame(16, $series->getAssets()->getTrophy1st()->getWidth());
        self::assertSame(16, $series->getAssets()->getTrophy1st()->getHeight());
        self::assertSame('https://www.speedrun.com/images/icons/silvertrophy.png', $series->getAssets()->getTrophy2nd()->getUri());
        self::assertSame(16, $series->getAssets()->getTrophy2nd()->getWidth());
        self::assertSame(16, $series->getAssets()->getTrophy2nd()->getHeight());
        self::assertSame('https://www.speedrun.com/images/icons/bronzetrophy.png', $series->getAssets()->getTrophy3rd()->getUri());
        self::assertSame(16, $series->getAssets()->getTrophy3rd()->getWidth());
        self::assertSame(16, $series->getAssets()->getTrophy3rd()->getHeight());
        self::assertSame(null, $series->getAssets()->getTrophy4th());
        self::assertSame('https://www.speedrun.com/themes/mk64/background.png', $series->getAssets()->getBackground()->getUri());
        self::assertSame(151, $series->getAssets()->getBackground()->getWidth());
        self::assertSame(195, $series->getAssets()->getBackground()->getHeight());
        self::assertSame(null, $series->getAssets()->getForeground());

        self::assertSame('https://www.speedrun.com/api/v1/series/wnlod5vz', $series->getLinks()['self']->getUri());
        self::assertSame('https://www.speedrun.com/api/v1/series/wnlod5vz/games', $series->getLinks()['games']->getUri());
    }
}
