<?php
namespace Dsinn\SrcomApi\Client\Getters;

use Dsinn\SrcomApi\Client\DataTypes\Run;
use Dsinn\SrcomApi\Client\DataTypes\Status;
use Dsinn\SrcomApi\Client\Validator\BoolValidator;
use Dsinn\SrcomApi\Client\Validator\SetOfValuesValidator;
use Dsinn\SrcomApi\Client\Validator\StringValidator;

class Runs extends Getter
{
    const FILTER_CATEGORY = 'category';
    const FILTER_EMULATED = 'emulated';
    const FILTER_EXAMINER = 'examiner';
    const FILTER_GAME = 'game';
    const FILTER_GUEST = 'guest';
    const FILTER_LEVEL = 'level';
    const FILTER_PLATFORM = 'platform';
    const FILTER_REGION = 'region';
    const FILTER_STATUS = 'status';
    const FILTER_USER = 'user';

    const ORDER_BY_CATEGORY = 'category';
    const ORDER_BY_DATE = 'date';
    const ORDER_BY_DEFAULT = self::ORDER_BY_GAME;
    const ORDER_BY_EMULATED = 'emulated';
    const ORDER_BY_GAME = 'game';
    const ORDER_BY_PLATFORM = 'platform';
    const ORDER_BY_REGION = 'region';
    const ORDER_BY_STATUS = 'status';
    const ORDER_BY_SUBMITTED = 'submitted';
    const ORDER_BY_VERIFY_DATE = 'verify-date';

    const ORDER_DIRECTION_ASC = 'asc';
    const ORDER_DIRECTION_DESC = 'desc';

    /**
     * @param string[] $filterOptions
     * @param string $orderby
     * @param string $direction
     * @return Run[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getList(
        array $filterOptions = [],
        string $orderby = self::ORDER_BY_DEFAULT,
        string $direction = self::ORDER_DIRECTION_ASC
    ): array
    {
        $this->validateOptions($filterOptions, [
            self::FILTER_USER => new StringValidator(),
            self::FILTER_GUEST => new StringValidator(),
            self::FILTER_EXAMINER => new StringValidator(),
            self::FILTER_GAME => new StringValidator(),
            self::FILTER_LEVEL => new StringValidator(),
            self::FILTER_CATEGORY => new StringValidator(),
            self::FILTER_PLATFORM => new StringValidator(),
            self::FILTER_REGION => new StringValidator(),
            self::FILTER_EMULATED => new BoolValidator(),
            self::FILTER_STATUS => new SetOfValuesValidator(Status::getStatuses()),
        ]);

        return array_map(function (array $runData) {
            return new Run($runData);
        }, $this->getResponseBody($this->httpClient->request(
            'GET',
            'runs',
            array_merge_recursive(
                ['query' => $filterOptions + compact('orderby', 'direction')],
                $this->getEmbedOptions(Run::getEmbeds())
            )
        ))['data']);
    }
}
