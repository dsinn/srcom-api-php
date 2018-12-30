<?php
namespace Dsinn\SrcomApi\Client\Getter;

use Dsinn\SrcomApi\Client\DataTypes\Category;

class Categories extends Getter
{
    /**
     * @param string $id
     * @return Category
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(string $id): Category
    {
        return new Category($this->httpClient->request('GET', "/categories/{$id}")['data']);
    }
}
