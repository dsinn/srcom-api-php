<?php
namespace Dsinn\SrcomApi\Client\Getters;

use Dsinn\SrcomApi\Client\DataTypes\Leaderboard;
use Dsinn\SrcomApi\Client\DataTypes\Times;
use Dsinn\SrcomApi\Client\Validator\BoolValidator;
use Dsinn\SrcomApi\Client\Validator\ISO8601DateValidator;
use Dsinn\SrcomApi\Client\Validator\PositiveIntValidator;
use Dsinn\SrcomApi\Client\Validator\SetOfValuesValidator;
use Dsinn\SrcomApi\Client\Validator\StringValidator;
use Dsinn\SrcomApi\Client\Validator\ValidatorInterface;

class Leaderboards extends Getter
{
    /**
     * @param string $game
     * @param string $category
     * @param array $options
     * @return Leaderboard
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getByGameCategory(string $game, string $category, array $options = []): Leaderboard
    {
        $this->validateOptions($options, $this->getValidationOptions());

        return new Leaderboard($this->getResponseBody($this->httpClient->request(
            'GET',
            "leaderboards/{$game}/category/{$category}",
            array_merge_recursive(['query' => $options], $this->getEmbedOptions(Leaderboard::getEmbeds()))
        ))['data']);
    }

    /**
     * @param string $game
     * @param string $level
     * @param string $category
     * @param array $options
     * @return Leaderboard
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getByLevelCategory(string $game, string $level, string $category, array $options = []): Leaderboard
    {
        $this->validateOptions($options, $this->getValidationOptions());

        return new Leaderboard($this->getResponseBody($this->httpClient->request(
            'GET',
            "leaderboards/{$game}/level/{$level}/{$category}",
            array_merge_recursive(['query' => $options], $this->getEmbedOptions(Leaderboard::getEmbeds()))
        ))['data']);
    }

    /**
     * @return ValidatorInterface[]
     */
    private function getValidationOptions(): array
    {
        return [
            'top' => new PositiveIntValidator(),
            'platform' => new StringValidator(),
            'region' => new StringValidator(),
            'emulators' => new BoolValidator(),
            'video-only' => new BoolValidator(),
            'timing' => new SetOfValuesValidator(Times::getTypes()),
            'date' => new ISO8601DateValidator(),
            'var-*' => new StringValidator(),
        ];
    }
}
