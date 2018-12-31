<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class BaseData
{
    private $unexpectedData = [];

    public function __construct(array $data)
    {
        assert(
            !($missingKeys = array_diff_key(array_flip(self::getRequiredFields()), $data)),
            'Missing the following required fields: ' . implode(',', $missingKeys)
        );

        foreach (array_diff_key($data, array_flip(self::getDeprecatedFields())) as $key => $value) {
            $this->{'set' . $this->camelize($key)}($value);
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
        $field = $this->camelize(substr($name, 3));

        if (strpos($name, 'set') === 0) {
            assert(
                count($arguments) === 1,
                new \BadMethodCallException('A set method call requires exactly one argument.')
            );
            $this->unexpectedData[$field] = $arguments[0];
        } elseif (strpos($name, 'get') === 0) {
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

    /**
     * @return string[]
     */
    protected static function getRequiredFields(): array
    {
        return [];
    }

    private function camelize(string $responseKey): string
    {
        $s = preg_replace_callback('/^([A-Z])(?=[a-z])/', 'strtolower', $responseKey);
        $s = preg_replace_callback('/-(.)/', function (array $matches) {
            return strtoupper($matches[1]);
        }, $s);

        return $s;
    }
}
