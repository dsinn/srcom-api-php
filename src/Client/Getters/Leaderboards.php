<?php
namespace Dsinn\SrcomApi\Client\Getters;

use Dsinn\SrcomApi\Client\DataTypes\Leaderboard;
use Dsinn\SrcomApi\Client\DataTypes\Times;
use Dsinn\SrcomApi\Client\Validator\BoolValidator;
use Dsinn\SrcomApi\Client\Validator\ISO8601DateValidator;
use Dsinn\SrcomApi\Client\Validator\PositiveIntValidator;
use Dsinn\SrcomApi\Client\Validator\SetOfValuesValidator;
use Dsinn\SrcomApi\Client\Validator\StringValidator;

class Leaderboards extends Getter
{
    /**
     * @param string $game
     * @param string $category
     * @param array $options
     * @return Leaderboard
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getByCategory(string $game, string $category, array $options = []): Leaderboard
    {
        $this->validateOptions($options, [
            'top' => new PositiveIntValidator(),
            'platform' => new StringValidator(),
            'region' => new StringValidator(),
            'emulators' => new BoolValidator(),
            'video-only' => new BoolValidator(),
            'timing' => new SetOfValuesValidator(Times::getTypes()),
            'date' => new ISO8601DateValidator(),
            'var-*' => new StringValidator(),
        ]);

        return new Leaderboard($this->httpClient->request(
            'GET',
            "/leaderboards/{$game}/category/{$category}",
            ['query' => $options]
        )['data']);
    }
}
