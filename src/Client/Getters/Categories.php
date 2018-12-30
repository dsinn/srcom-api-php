<?php
namespace Dsinn\SrcomApi\Client\Getters;

use Dsinn\SrcomApi\Client\DataTypes\Category;
use Dsinn\SrcomApi\Client\DataTypes\Variable;

class Categories extends Getter
{
    const ORDER_BY_DEFAULT = 'pos';
    const ORDER_BY_MANDATORY = 'mandatory';
    const ORDER_BY_NAME = 'name';
    const ORDER_BY_USER_DEFINED = 'user-defined';
    const ORDER_DIRECTION_ASC = 'asc';
    const ORDER_DIRECTION_DESC = 'desc';

    /**
     * @param string $id
     * @return Category
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(string $id): Category
    {
        return new Category($this->httpClient->request('GET', "/categories/{$id}")['data']);
    }

    /**
     * @param string $id
     * @param string $orderby
     * @param string $direction
     * @return Variable[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getVariables(
        string $id,
        string $orderby = self::ORDER_BY_DEFAULT,
        string $direction = self::ORDER_DIRECTION_ASC
    ): array
    {
        return array_map(function (array $variableData) {
            return new Variable($variableData);
        }, $this->httpClient->request(
            'GET',
            "/categories/{$id}/variables",
            ['query' => compact('orderby', 'direction')]
        )['data']);
    }
}
