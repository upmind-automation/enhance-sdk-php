<?php
/**
 * DomainWithUuid
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
 * DomainWithUuid Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DomainWithUuid implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DomainWithUuid';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'domain_id' => 'string',
        'domain_name' => 'string',
        'is_primary' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'domain_id' => null,
        'domain_name' => null,
        'is_primary' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'domain_id' => false,
		'domain_name' => false,
		'is_primary' => false
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
        'domain_id' => 'domainId',
        'domain_name' => 'domainName',
        'is_primary' => 'isPrimary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain_id' => 'setDomainId',
        'domain_name' => 'setDomainName',
        'is_primary' => 'setIsPrimary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain_id' => 'getDomainId',
        'domain_name' => 'getDomainName',
        'is_primary' => 'getIsPrimary'
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
        $this->setIfExists('domain_id', $data ?? [], null);
        $this->setIfExists('domain_name', $data ?? [], null);
        $this->setIfExists('is_primary', $data ?? [], null);
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

        if ($this->container['domain_id'] === null) {
            $invalidProperties[] = "'domain_id' can't be null";
        }
        if ($this->container['domain_name'] === null) {
            $invalidProperties[] = "'domain_name' can't be null";
        }
        if ($this->container['is_primary'] === null) {
            $invalidProperties[] = "'is_primary' can't be null";
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
     * Gets domain_id
     *
     * @return string
     */
    public function getDomainId()
    {
        return $this->container['domain_id'];
    }

    /**
     * Sets domain_id
     *
     * @param string $domain_id domain_id
     *
     * @return self
     */
    public function setDomainId($domain_id)
    {
        if (is_null($domain_id)) {
            throw new \InvalidArgumentException('non-nullable domain_id cannot be null');
        }
        $this->container['domain_id'] = $domain_id;

        return $this;
    }

    /**
     * Gets domain_name
     *
     * @return string
     */
    public function getDomainName()
    {
        return $this->container['domain_name'];
    }

    /**
     * Sets domain_name
     *
     * @param string $domain_name domain_name
     *
     * @return self
     */
    public function setDomainName($domain_name)
    {
        if (is_null($domain_name)) {
            throw new \InvalidArgumentException('non-nullable domain_name cannot be null');
        }
        $this->container['domain_name'] = $domain_name;

        return $this;
    }

    /**
     * Gets is_primary
     *
     * @return bool
     */
    public function getIsPrimary()
    {
        return $this->container['is_primary'];
    }

    /**
     * Sets is_primary
     *
     * @param bool $is_primary is_primary
     *
     * @return self
     */
    public function setIsPrimary($is_primary)
    {
        if (is_null($is_primary)) {
            throw new \InvalidArgumentException('non-nullable is_primary cannot be null');
        }
        $this->container['is_primary'] = $is_primary;

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

