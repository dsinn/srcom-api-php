<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class RunPlacement extends BaseData
{
    /** @var int */
    private $place;
    /** @var Run */
    private $run;

    public function getPlace(): int
    {
        return $this->place;
    }

    public function getRun(): Run
    {
        return $this->run;
    }

    public function setPlace(int $place): self
    {
        $this->place = $place;
        return $this;
    }

    public function setRun(Run $run): self
    {
        $this->run = $run;
        return $this;
    }

    protected static function getClassMapping(): array
    {
        return [
            'run' => Run::class,
        ];
    }

    protected static function getRequiredFields(): array
    {
        return [
            'place',
            'run',
        ];
    }
}
