<?php
/**
 * DomainSslCertWithData
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * orchd
 *
 * orchd API docs
 *
 * The version of the OpenAPI document: 9.9.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Upmind\EnhanceSdk\Model;

use \ArrayAccess;
use \Upmind\EnhanceSdk\ObjectSerializer;

/**
 * DomainSslCertWithData Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DomainSslCertWithData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DomainSslCertWithData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cn' => 'string',
        'expires' => 'string',
        'issued' => 'string',
        'issuer' => 'string',
        'sans' => 'string[]',
        'cert' => 'string',
        'key' => 'string',
        'force_https' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cn' => null,
        'expires' => null,
        'issued' => null,
        'issuer' => null,
        'sans' => null,
        'cert' => null,
        'key' => null,
        'force_https' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cn' => false,
		'expires' => false,
		'issued' => false,
		'issuer' => false,
		'sans' => false,
		'cert' => false,
		'key' => false,
		'force_https' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cn' => 'cn',
        'expires' => 'expires',
        'issued' => 'issued',
        'issuer' => 'issuer',
        'sans' => 'sans',
        'cert' => 'cert',
        'key' => 'key',
        'force_https' => 'forceHttps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cn' => 'setCn',
        'expires' => 'setExpires',
        'issued' => 'setIssued',
        'issuer' => 'setIssuer',
        'sans' => 'setSans',
        'cert' => 'setCert',
        'key' => 'setKey',
        'force_https' => 'setForceHttps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cn' => 'getCn',
        'expires' => 'getExpires',
        'issued' => 'getIssued',
        'issuer' => 'getIssuer',
        'sans' => 'getSans',
        'cert' => 'getCert',
        'key' => 'getKey',
        'force_https' => 'getForceHttps'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('cn', $data ?? [], null);
        $this->setIfExists('expires', $data ?? [], null);
        $this->setIfExists('issued', $data ?? [], null);
        $this->setIfExists('issuer', $data ?? [], null);
        $this->setIfExists('sans', $data ?? [], null);
        $this->setIfExists('cert', $data ?? [], null);
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('force_https', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cn'] === null) {
            $invalidProperties[] = "'cn' can't be null";
        }
        if ($this->container['expires'] === null) {
            $invalidProperties[] = "'expires' can't be null";
        }
        if ($this->container['issued'] === null) {
            $invalidProperties[] = "'issued' can't be null";
        }
        if ($this->container['issuer'] === null) {
            $invalidProperties[] = "'issuer' can't be null";
        }
        if ($this->container['sans'] === null) {
            $invalidProperties[] = "'sans' can't be null";
        }
        if ($this->container['cert'] === null) {
            $invalidProperties[] = "'cert' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets cn
     *
     * @return string
     */
    public function getCn()
    {
        return $this->container['cn'];
    }

    /**
     * Sets cn
     *
     * @param string $cn cn
     *
     * @return self
     */
    public function setCn($cn)
    {
        if (is_null($cn)) {
            throw new \InvalidArgumentException('non-nullable cn cannot be null');
        }
        $this->container['cn'] = $cn;

        return $this;
    }

    /**
     * Gets expires
     *
     * @return string
     */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
     * Sets expires
     *
     * @param string $expires expires
     *
     * @return self
     */
    public function setExpires($expires)
    {
        if (is_null($expires)) {
            throw new \InvalidArgumentException('non-nullable expires cannot be null');
        }
        $this->container['expires'] = $expires;

        return $this;
    }

    /**
     * Gets issued
     *
     * @return string
     */
    public function getIssued()
    {
        return $this->container['issued'];
    }

    /**
     * Sets issued
     *
     * @param string $issued issued
     *
     * @return self
     */
    public function setIssued($issued)
    {
        if (is_null($issued)) {
            throw new \InvalidArgumentException('non-nullable issued cannot be null');
        }
        $this->container['issued'] = $issued;

        return $this;
    }

    /**
     * Gets issuer
     *
     * @return string
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     *
     * @param string $issuer issuer
     *
     * @return self
     */
    public function setIssuer($issuer)
    {
        if (is_null($issuer)) {
            throw new \InvalidArgumentException('non-nullable issuer cannot be null');
        }
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets sans
     *
     * @return string[]
     */
    public function getSans()
    {
        return $this->container['sans'];
    }

    /**
     * Sets sans
     *
     * @param string[] $sans sans
     *
     * @return self
     */
    public function setSans($sans)
    {
        if (is_null($sans)) {
            throw new \InvalidArgumentException('non-nullable sans cannot be null');
        }
        $this->container['sans'] = $sans;

        return $this;
    }

    /**
     * Gets cert
     *
     * @return string
     */
    public function getCert()
    {
        return $this->container['cert'];
    }

    /**
     * Sets cert
     *
     * @param string $cert cert
     *
     * @return self
     */
    public function setCert($cert)
    {
        if (is_null($cert)) {
            throw new \InvalidArgumentException('non-nullable cert cannot be null');
        }
        $this->container['cert'] = $cert;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key key
     *
     * @return self
     */
    public function setKey($key)
    {
        if (is_null($key)) {
            throw new \InvalidArgumentException('non-nullable key cannot be null');
        }
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets force_https
     *
     * @return bool|null
     */
    public function getForceHttps()
    {
        return $this->container['force_https'];
    }

    /**
     * Sets force_https
     *
     * @param bool|null $force_https force_https
     *
     * @return self
     */
    public function setForceHttps($force_https)
    {
        if (is_null($force_https)) {
            throw new \InvalidArgumentException('non-nullable force_https cannot be null');
        }
        $this->container['force_https'] = $force_https;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


