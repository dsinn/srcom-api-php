<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class Variable extends BaseData
{
    const CATEGORY_ALL = null;

    /** @var string|null */
    private $category;
    /** @var string */
    private $id;
    /** @var bool */
    private $isSubcategory;
    /** @var Links */
    private $links;
    /** @var bool */
    private $mandatory;
    /** @var string */
    private $name;
    /** @var bool */
    private $obsoletes;
    /** @var Scope */
    private $scope;
    /** @var bool */
    private $userDefined;
    /** @var VariableValueSet */
    private $values;

    public function getCategory()
    {
        return $this->category;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getIsSubcategory(): bool
    {
        return $this->isSubcategory;
    }

    public function getLinks(): Links
    {
        return $this->links;
    }

    public function getMandatory(): bool
    {
        return $this->mandatory;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getObsoletes(): bool
    {
        return $this->obsoletes;
    }

    public function getScope(): Scope
    {
        return $this->scope;
    }

    public function getUserDefined(): bool
    {
        return $this->userDefined;
    }

    public function getValues(): VariableValueSet
    {
        return $this->values;
    }

    public function setCategory($category): self
    {
        $this->category = $category;
        return $this;
    }

    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setIsSubcategory(bool $isSubcategory): self
    {
        $this->isSubcategory = $isSubcategory;
        return $this;
    }

    public function setLinks(array $linkData): self
    {
        $this->links = new Links($linkData);
        return $this;
    }

    public function setMandatory(bool $mandatory): self
    {
        $this->mandatory = $mandatory;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setObsoletes(bool $obsoletes): self
    {
        $this->obsoletes = $obsoletes;
        return $this;
    }

    public function setScope(array $scopeData): self
    {
        $this->scope = new Scope($scopeData);
        return $this;
    }

    public function setUserDefined(bool $userDefined): self
    {
        $this->userDefined = $userDefined;
        return $this;
    }

    public function setValues(array $valueData): self
    {
        $this->values = new VariableValueSet($valueData);
        return $this;
    }

    protected function getRequiredFields(): array
    {
        return [
            'id',
            'name',
            'category',
            'scope',
            'mandatory',
            'user-defined',
            'obsoletes',
            'values',
            'is-subcategory',
            'links',
        ];
    }
}
