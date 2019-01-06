<?php
namespace Dsinn\SrcomApi\Client\Getters;

use Dsinn\SrcomApi\Client\DataTypes\Category;
use Dsinn\SrcomApi\Client\Validator\BoolValidator;

class Games extends Getter
{
    const FILTER_MISCELLANEOUS = 'miscellaneous';

    const ORDER_BY_DEFAULT = self::ORDER_BY_POS;
    const ORDER_BY_MISCELLANEOUS = 'miscellaneous';
    const ORDER_BY_NAME = 'name';
    const ORDER_BY_POS = 'pos';

    const ORDER_DIRECTION_ASC = 'asc';
    const ORDER_DIRECTION_DESC = 'desc';

    /**
     * @param string $gameId
     * @param array $filterOptions
     * @param string $orderby
     * @param string $direction
     * @return Category[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCategories(
        string $gameId,
        array $filterOptions = [],
        string $orderby = self::ORDER_BY_DEFAULT,
        string $direction = self::ORDER_DIRECTION_ASC
    ): array
    {
        $this->validateOptions($filterOptions, [
            self::FILTER_MISCELLANEOUS => new BoolValidator(),
        ]);

        return array_map(function (array $categoryData) {
            return new Category($categoryData);
        }, $this->getResponseBody($this->httpClient->request(
            'GET',
            "games/{$gameId}/categories",
            array_merge_recursive(
                ['query' => compact('orderby', 'direction')],
                $this->getEmbedOptions(Category::getEmbeds())
            )
        ))['data']);
    }
}
