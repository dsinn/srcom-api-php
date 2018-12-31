<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Time
{
    /** @var float */
    private $secondsElapsed;
    /** @var string */
    private $string;

    public function __construct(float $secondsElapsed)
    {
        $this->secondsElapsed = $secondsElapsed;
    }

    public function getString(): string
    {
        if (!$this->string) {
            $milliseconds = (int) round(fmod($this->secondsElapsed, 1) * 1000); // round because of FP error
            $seconds = (int)$this->secondsElapsed % 60;
            $minutes = intdiv($this->secondsElapsed % 3600, 60);
            $hours = intdiv($this->secondsElapsed, 3600);

            $this->string = sprintf(
                "%s%s%s%s",
                $hours ? "{$hours}h " : '',
                sprintf('%0' . ($hours ? 2 : 1) . 'd', $minutes) . 'm ',
                sprintf('%02ds', $seconds),
                $milliseconds ? sprintf(" %03dms", $milliseconds) : ''
            );
        }

        return $this->string;
    }
}
