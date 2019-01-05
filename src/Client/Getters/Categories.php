<?php
namespace Dsinn\SrcomApi\Client\Getters;

use Dsinn\SrcomApi\Client\DataTypes\Category;
use Dsinn\SrcomApi\Client\DataTypes\Leaderboard;
use Dsinn\SrcomApi\Client\DataTypes\Variable;
use Dsinn\SrcomApi\Client\Pagination;

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
        return new Category($this->getResponseBody($this->httpClient->request(
            'GET',
            "categories/{$id}",
            $this->getEmbedOptions(Category::getEmbeds())
        ))['data']);
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
        }, $this->getResponseBody($this->httpClient->request(
            'GET',
            "categories/{$id}/variables",
            array_merge_recursive(
                ['query' => compact('orderby', 'direction')],
                $this->getEmbedOptions(Category::getEmbeds())
            )
        ))['data']);
    }

    /**
     * @param string $id
     * @param int $top
     * @param bool $skipEmpty
     * @param Pagination|null $pagination
     * @return Leaderboard[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getRecords(string $id, int $top = 3, bool $skipEmpty = false, Pagination &$pagination = null)
    {
        $body = $this->getResponseBody($this->httpClient->request(
            'GET',
            "categories/{$id}/records",
            array_merge_recursive(
                ['query' => compact('top') + ['skip-empty' => $skipEmpty]],
                $this->getEmbedOptions(array_merge(Category::getEmbeds(), Leaderboard::getEmbeds()))
            )
        ));

        return array_map(function (array $leaderboardData) {
            return new Leaderboard($leaderboardData);
        }, $body['data']);
    }
}
