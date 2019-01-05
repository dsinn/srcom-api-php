<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Ruleset extends BaseData
{
    /** @var string */
    private $defaultTime;
    /** @var bool */
    private $emulatorsAllowed;
    /** @var bool */
    private $requireVerification;
    /** @var bool */
    private $requireVideo;
    /** @var string[] */
    private $runTimes;
    /** @var bool */
    private $showMilliseconds;

    public function getDefaultTime(): string
    {
        return $this->defaultTime;
    }

    public function getEmulatorsAllowed(): bool
    {
        return $this->emulatorsAllowed;
    }

    public function getRequireVerification(): bool
    {
        return $this->requireVerification;
    }

    public function getRequireVideo(): bool
    {
        return $this->requireVideo;
    }

    /**
     * @return string[]
     */
    public function getRunTimes(): array
    {
        return $this->runTimes;
    }

    public function getShowMilliseconds(): bool
    {
        return $this->showMilliseconds;
    }

    public function setDefaultTime(string $defaultTime): self
    {
        $this->defaultTime = $defaultTime;
        return $this;
    }

    public function setEmulatorsAllowed(bool $emulatorsAllowed): self
    {
        $this->emulatorsAllowed = $emulatorsAllowed;
        return $this;
    }

    public function setRequireVerification(bool $requireVerification): self
    {
        $this->requireVerification = $requireVerification;
        return $this;
    }

    public function setRequireVideo(bool $requireVideo): self
    {
        $this->requireVideo = $requireVideo;
        return $this;
    }

    /**
     * @param string[] $runTimes
     * @return Ruleset
     */
    public function setRunTimes(array $runTimes): self
    {
        $this->runTimes = $runTimes;
        return $this;
    }

    public function setShowMilliseconds(bool $showMilliseconds): self
    {
        $this->showMilliseconds = $showMilliseconds;
        return $this;
    }

    protected static function getRequiredFields(): array
    {
        return [
            'show-milliseconds',
            'require-verification',
            'require-video',
            'run-times',
            'default-time',
            'emulators-allowed',
        ];
    }
}
