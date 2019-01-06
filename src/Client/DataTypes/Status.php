<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Status extends BaseData
{
    const STATUS_NEW = 'new';
    const STATUS_VERIFIED = 'verified';
    const STATUS_REJECTED = 'rejected';

    /** @var string */
    private $examiner;
    /** @var string */
    private $status;
    /** @var \DateTime */
    private $verifyDate;

    public function getExaminer(): ?string
    {
        return $this->examiner;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string[]
     */
    public static function getStatuses(): array
    {
        return [
            self::STATUS_NEW,
            self::STATUS_VERIFIED,
            self::STATUS_REJECTED,
        ];
    }

    public function getVerifyDate(): ?\DateTime
    {
        return $this->verifyDate;
    }

    public function setExaminer(?string $examiner): self
    {
        $this->examiner = $examiner;
        return $this;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function setVerifyDate(?\DateTime $verifyDate): self
    {
        $this->verifyDate = $verifyDate;
        return $this;
    }

    protected static function getClassMapping(): array
    {
        return [
            'verify-date' => \DateTime::class,
        ];
    }

    protected static function getRequiredFields(): array
    {
        return [
            'status',
        ];
    }
}
