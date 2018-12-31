<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class BaseData
{
    protected $unexpectedData = [];

    public function __construct(array $data)
    {
        if ($missingKeys = array_diff_key(array_flip(self::getRequiredFields()), $data)) {
            trigger_error(
                'Missing the following required fields: ' . implode(',', $missingKeys),
                E_USER_WARNING
            );
        }

        foreach (array_diff_key($data, array_flip(self::getDeprecatedFields())) as $key => $value) {
            $this->{'set' . ucfirst($this->camelize($key))}($value);
        }
    }

    /**
     * Fallback for new keys in the API response data.
     *
     * @param string $name
     * @param array $arguments
     */
    public function __call(string $name, array $arguments)
    {
        $field = $this->getFieldFromMethodCallName($name);

        if ($this->isSetCall($name)) {
            assert(
                count($arguments) === 1,
                new \BadMethodCallException('A set method call requires exactly one argument.')
            );
            $this->unexpectedData[$field] = $arguments[0];
        } elseif ($this->isGetCall($name)) {
            assert(
                count($arguments) === 0,
                new \BadMethodCallException('A get method call cannot have arguments.')
            );
            assert(
                array_key_exists($field, $this->unexpectedData),
                new \UnexpectedValueException("Field \"{$field}\" not set.")
            );
        } else {
            throw new \BadMethodCallException("Call to undefined method \"{$name}\".");
        }
    }

    protected static function getDeprecatedFields(): array
    {
        return [];
    }

    protected function getFieldFromMethodCallName(string $name): string
    {
        return $this->camelize(substr($name, 3));
    }

    /**
     * @return string[]
     */
    protected static function getRequiredFields(): array
    {
        return [];
    }

    protected function isGetCall(string $name): bool
    {
        return strpos($name, 'get') === 0;
    }

    protected function isSetCall(string $name): bool
    {
        return strpos($name, 'set') === 0;
    }

    protected function parseDate(string $dateString): \DateTime
    {
        return \DateTime::createFromFormat('Y-m-d', $dateString);
    }

    protected function parseDateTime(string $dateTimeString): \DateTime
    {
        return \DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $dateTimeString);
    }

    private function camelize(string $responseKey): string
    {
        $s = preg_replace_callback('/^[A-Z](?=[a-z])/', function (array $matches) {
            return strtolower($matches[0]);
        }, $responseKey);
        $s = preg_replace_callback('/[-_](.)/', function (array $matches) {
            return strtoupper($matches[1]);
        }, $s);

        return $s;
    }
}
