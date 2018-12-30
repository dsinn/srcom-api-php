<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class BaseData
{
    private $unexpectedData = [];

    public function __construct(array $data)
    {
        assert(
            !($missingKeys = array_diff_key(array_flip($this->getRequiredFields()), $data)),
            'Missing the following required fields: ' . implode(',', $missingKeys)
        );

        foreach ($data as $key => $value) {
            $this->{'set' . $key}($value);
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
        $field = $this->uncapitalize(substr($name, 3));

        if (strpos($name, 'set') === 0) {
            assert(count($arguments) === 1, 'A set method call requires exactly one argument.');
            $this->unexpectedData[$field] = $arguments[0];
        } elseif (strpos($name, 'get') === 0) {
            assert(count($arguments) === 0, 'A get method call cannot have arguments.');
            assert(array_key_exists($field, $this->unexpectedData), "Field \"{$field}\" not set.");
        } else {
            throw new \BadMethodCallException("Call to undefined method \"{$name}\".");
        }
    }

    protected function getStringMappingResult(string $key, array $map)
    {
        if (array_key_exists($key, $map)) {
            return $map[$key];
        }

        trigger_error("Key \"{$key}\" not found in the map " . json_encode($map), E_USER_WARNING);
        return $key;
    }

    /**
     * @return string[]
     */
    protected function getRequiredFields(): array
    {
        return [];
    }

    private function uncapitalize(string $upperCamelCaseString): string
    {
        return preg_replace_callback('/^([A-Z])(?=[a-z])/', 'strtolower', $upperCamelCaseString);
    }
}
