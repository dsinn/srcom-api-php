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
    const FILTER_DATE = 'date';
    const FILTER_EMULATORS = 'emulators';
    const FILTER_PLATFORM = 'platform';
    const FILTER_REGION = 'region';
    const FILTER_TIMING = 'timing';
    const FILTER_TOP = 'top';
    const FILTER_VIDEO_ONLY = 'video-only';

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
            self::FILTER_TOP => new PositiveIntValidator(),
            self::FILTER_PLATFORM => new StringValidator(),
            self::FILTER_REGION => new StringValidator(),
            self::FILTER_EMULATORS => new BoolValidator(),
            self::FILTER_VIDEO_ONLY => new BoolValidator(),
            self::FILTER_TIMING => new SetOfValuesValidator(Times::getTypes()),
            self::FILTER_DATE => new ISO8601DateValidator(),
            'var-*' => new StringValidator(),
        ];
    }
}
