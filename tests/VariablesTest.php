<?php
namespace Dsinn\SrcomApi\Tests;

use Dsinn\SrcomApi\Client\DataTypes\Scope;
use Dsinn\SrcomApi\Client\DataTypes\Variable;

class VariablesTest extends TestCase
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function testGet()
    {
        $client = $this->getClient(<<<JSON
{
  "data": {
    "id": "wzx7q875",
    "name": "cc",
    "category": null,
    "scope": {
      "type": "full-game"
    },
    "mandatory": true,
    "user-defined": false,
    "obsoletes": false,
    "values": {
      "values": {
        "zdbx1h88": {
          "label": "150cc",
          "rules": "do not cheat",
          "flags": {
            "miscellaneous": false
          }
        },
        "k1omees9": {
          "label": "200cc",
          "rules": "you can cheat",
          "flags": {
            "miscellaneous": true
          }
        }
      },
      "default": "zdbx1h88"
    },
    "is-subcategory": true,
    "links": [{
      "rel": "self",
      "uri": "https://www.speedrun.com/api/v1/variables/wzx7q875"
    }, {
      "rel": "game",
      "uri": "https://www.speedrun.com/api/v1/games/zate4l10"
    }]
  }
}
JSON
        );
        $variable = $client->variables()->get('foo');

        self::assertSame('wzx7q875', $variable->getId());
        self::assertSame('cc', $variable->getName());
        self::assertSame(Variable::CATEGORY_ALL, $variable->getCategory());
        self::assertSame(Scope::TYPE_FULL_GAME, $variable->getScope()->getType());
        self::assertSame(true, $variable->getMandatory());
        self::assertSame(false, $variable->getUserDefined());
        self::assertSame(false, $variable->getObsoletes());

        self::assertSame('150cc', $variable->getValues()->getValue('zdbx1h88')->getLabel());
        self::assertSame('do not cheat', $variable->getValues()->getValue('zdbx1h88')->getRules());
        self::assertSame(false, $variable->getValues()->getValue('zdbx1h88')->getFlags()->getMiscellaneous());

        self::assertSame('200cc', $variable->getValues()->getValue('k1omees9')->getLabel());
        self::assertSame('you can cheat', $variable->getValues()->getValue('k1omees9')->getRules());
        self::assertSame(true, $variable->getValues()->getValue('k1omees9')->getFlags()->getMiscellaneous());

        self::assertSame('150cc', $variable->getValues()->getDefaultValue()->getLabel());
        self::assertSame('do not cheat', $variable->getValues()->getDefaultValue()->getRules());
        self::assertSame(false, $variable->getValues()->getDefaultValue()->getFlags()->getMiscellaneous());

        self::assertSame('zdbx1h88', $variable->getValues()->getDefaultKey());

        self::assertSame(true, $variable->getIsSubcategory());
        self::assertSame([
            'self' => 'https://www.speedrun.com/api/v1/variables/wzx7q875',
            'game' => 'https://www.speedrun.com/api/v1/games/zate4l10',
        ], $variable->getLinks()->getAll());
    }
}
