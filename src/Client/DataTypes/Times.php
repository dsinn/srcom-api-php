<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Times extends BaseData
{
    /** @var Time */
    private $ingame;
    /** @var Time */
    private $realtime;
    /** @var Time */
    private $realtimeNoloads;

    public function __call(string $name, array $arguments)
    {
        if (isset($arguments[0]) && !is_int($arguments[0])) {
            // Redundant with the "_t" arguments
            return;
        }

        parent::__call($name, $arguments);
        if ($this->isSetCall($name)) {
            $field = $this->getFieldFromMethodCallName($name);
            if ($this->unexpectedData[$field]) {
                $this->unexpectedData[$field] = new Time($this->unexpectedData[$field]);
            }
        }
    }

    public function getLowestTime(): Time
    {
        $nonzeroTimes = array_filter([$this->ingame, $this->realtime, $this->realtimeNoloads], function (Time $time) {
            return $time->getSecondsElapsed();
        });
        usort($nonzeroTimes, function (Time $t1, Time $t2) {
            return $t2->getSecondsElapsed() <=> $t1->getSecondsElapsed();
        });
        return array_pop($nonzeroTimes);
    }

    public function getIngame(): Time
    {
        return $this->ingame;
    }

    public function getRealtime(): Time
    {
        return $this->realtime;
    }

    public function getRealtimeNoloads(): Time
    {
        return $this->realtimeNoloads;
    }

    /**
     * @return string[]
     */
    public static function getTypes(): array
    {
        return ['realtime', 'realtime_noloads', 'ingame'];
    }

    public function setIngameT(int $seconds): self
    {
        $this->ingame = new Time($seconds);
        return $this;
    }

    public function setRealtimeT(int $seconds): self
    {
        $this->realtime = new Time($seconds);
        return $this;
    }

    public function setRealtimeNoloadsT(int $seconds): self
    {
        $this->realtimeNoloads = new Time($seconds);
        return $this;
    }

    protected static function getRequiredFields(): array
    {
        return [
            'ingame',
        ];
    }
}
