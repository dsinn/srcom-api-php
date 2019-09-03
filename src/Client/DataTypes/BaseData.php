<?php
namespace Dsinn\SrcomApi\Client\DataTypes;

class BaseData implements \JsonSerializable
{
    protected $unexpectedData = [];

    public function __construct($data)
    {
        if (is_string($data)) {
            // @TODO Find better solution for "shallow" embeds
            if (method_exists($this, 'setId')) {
                return $this->setId($data);
            } else {
                throw new \TypeError("Unsupported constructor argument \"{$data}\" for class " . static::class);
            }
        }

        if ($missingKeys = array_diff_key(array_flip(static::getRequiredFields()), $data)) {
            trigger_error(
                static::class . ' missing the following required fields: ' . implode(', ', array_keys($missingKeys)),
                E_USER_WARNING
            );
        }

        foreach (array_diff_key($data, array_flip(static::getDeprecatedFields())) as $key => $value) {
            $this->{'set' . ucfirst($this->camelize($key))}(
                $this->tryMappingToClass(
                    $key,
                    in_array($key, static::getEmbeds()) && isset($value['data']) ? $value['data'] : $value
                )
            );
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

    /**
     * @return string[]
     */
    public static function getEmbeds(): array
    {
        return [];
    }

    public function jsonSerialize(): array
    {
        return array_diff_key(get_object_vars($this), array_flip(['unexpectedData']))
                + $this->unexpectedData;
    }

    /**
     * @return string[]|array[]
     */
    protected static function getClassMapping(): array
    {
        return [];
    }

    /**
     * @return string[]
     */
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

    private function tryMappingToClass(string $key, $value)
    {
        if (is_null($value) || !($class = static::getClassMapping()[$key] ?? null)) {
            return $value;
        }

        try {
            if (is_array($class)) {
                $class = array_pop($class);
                return array_map(function (array $value) use ($class) {
                    return new $class($value);
                }, $value);
            }

            if (in_array($key, static::getEmbeds()) && is_array($value) && empty($value)) {
                // Empty embed
                return null;
            }

            return new $class($value);
        } catch (\TypeError $e) {
            throw new \TypeError(sprintf(
                "%s\nClass %s attempted to instantiate %s on key %s with value %s",
                $e->getMessage(),
                static::class,
                $class,
                $key,
                print_r($value, true)
            ), $e->getCode(), $e);
        }
    }
}
