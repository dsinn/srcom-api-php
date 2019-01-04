<?php
namespace Dsinn\SrcomApi\Client\Getters;

use Dsinn\SrcomApi\Client\DataTypes\Series as SeriesData;

class Series extends Getter
{
    /**
     * @param string $id
     * @return SeriesData
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(string $id): \Dsinn\SrcomApi\Client\DataTypes\Series
    {
        return new SeriesData($this->httpClient->request(
            'GET',
            "/series/{$id}",
            ['query' => ['embed' => 'moderators']]
        )['data']);
    }
}