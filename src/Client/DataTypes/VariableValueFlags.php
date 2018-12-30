<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class VariableValueFlags extends BaseData
{
    private $miscellaneous;

    public function getMiscellaneous(): bool
    {
        return $this->miscellaneous;
    }

    public function setMiscellaneous(bool $miscellaneous): self
    {
        $this->miscellaneous = $miscellaneous;
        return $this;
    }

    protected function getRequiredFields(): array
    {
        return [
            'miscellaneous',
        ];
    }
}
