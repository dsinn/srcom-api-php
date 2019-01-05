<?php
namespace Dsinn\SrcomApi\Client\Getters;

use Dsinn\SrcomApi\Client\DataTypes\Game;
use Dsinn\SrcomApi\Client\DataTypes\Series as SeriesData;

class Series extends Getter
{
    /**
     * @param string $id
     * @return SeriesData
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(string $id): SeriesData
    {
        return new SeriesData($this->getResponseBody($this->httpClient->request(
            'GET',
            "series/{$id}",
            $this->getEmbedOptions(SeriesData::getEmbeds())
        ))['data']);
    }

    /**
     * @param string $id
     * @return Game[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getGames(string $id): array
    {
        return array_map(function (array $gameData) {
            return new Game($gameData);
        }, $this->getResponseBody($this->httpClient->request(
            'GET',
            "series/{$id}/games",
            $this->getEmbedOptions(SeriesData::getEmbeds())
        ))['data']);
    }
}
