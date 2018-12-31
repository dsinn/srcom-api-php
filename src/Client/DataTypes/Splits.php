<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Splits extends BaseData
{
    protected static function getRequiredFields(): array
    {
        return [
            'rel',
            'uri',
        ];
    }
}
