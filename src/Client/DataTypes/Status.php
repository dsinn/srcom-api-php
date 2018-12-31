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

    public function getExaminer(): string
    {
        return $this->examiner;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getVerifyDate(): \DateTime
    {
        return $this->verifyDate;
    }

    public function setExaminer(string $examiner): self
    {
        $this->examiner = $examiner;
        return $this;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function setVerifyDate(string $verifyDateString): self
    {
        $this->verifyDate = $this->parseDateTime($verifyDateString);
        return $this;
    }

    protected static function getRequiredFields(): array
    {
        return [
            'status',
            'examiner',
            'verified',
        ];
    }
}
