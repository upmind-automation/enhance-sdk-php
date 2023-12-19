<?php
/**
 * UpdateBackupRemoteStorageS3
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
 * The version of the OpenAPI document: 10.0.0
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
 * UpdateBackupRemoteStorageS3 Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateBackupRemoteStorageS3 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateBackupRemoteStorageS3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'region' => 'string',
        'endpoint' => 'string',
        'bucket' => 'string',
        'access_key_id' => 'string',
        'access_key_secret' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'region' => null,
        'endpoint' => null,
        'bucket' => null,
        'access_key_id' => null,
        'access_key_secret' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'region' => false,
		'endpoint' => false,
		'bucket' => false,
		'access_key_id' => false,
		'access_key_secret' => false
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
        'region' => 'region',
        'endpoint' => 'endpoint',
        'bucket' => 'bucket',
        'access_key_id' => 'accessKeyId',
        'access_key_secret' => 'accessKeySecret'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'region' => 'setRegion',
        'endpoint' => 'setEndpoint',
        'bucket' => 'setBucket',
        'access_key_id' => 'setAccessKeyId',
        'access_key_secret' => 'setAccessKeySecret'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'region' => 'getRegion',
        'endpoint' => 'getEndpoint',
        'bucket' => 'getBucket',
        'access_key_id' => 'getAccessKeyId',
        'access_key_secret' => 'getAccessKeySecret'
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
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('endpoint', $data ?? [], null);
        $this->setIfExists('bucket', $data ?? [], null);
        $this->setIfExists('access_key_id', $data ?? [], null);
        $this->setIfExists('access_key_secret', $data ?? [], null);
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
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region region
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets endpoint
     *
     * @return string|null
     */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
     * Sets endpoint
     *
     * @param string|null $endpoint endpoint
     *
     * @return self
     */
    public function setEndpoint($endpoint)
    {
        if (is_null($endpoint)) {
            throw new \InvalidArgumentException('non-nullable endpoint cannot be null');
        }
        $this->container['endpoint'] = $endpoint;

        return $this;
    }

    /**
     * Gets bucket
     *
     * @return string|null
     */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
     * Sets bucket
     *
     * @param string|null $bucket bucket
     *
     * @return self
     */
    public function setBucket($bucket)
    {
        if (is_null($bucket)) {
            throw new \InvalidArgumentException('non-nullable bucket cannot be null');
        }
        $this->container['bucket'] = $bucket;

        return $this;
    }

    /**
     * Gets access_key_id
     *
     * @return string|null
     */
    public function getAccessKeyId()
    {
        return $this->container['access_key_id'];
    }

    /**
     * Sets access_key_id
     *
     * @param string|null $access_key_id access_key_id
     *
     * @return self
     */
    public function setAccessKeyId($access_key_id)
    {
        if (is_null($access_key_id)) {
            throw new \InvalidArgumentException('non-nullable access_key_id cannot be null');
        }
        $this->container['access_key_id'] = $access_key_id;

        return $this;
    }

    /**
     * Gets access_key_secret
     *
     * @return string|null
     */
    public function getAccessKeySecret()
    {
        return $this->container['access_key_secret'];
    }

    /**
     * Sets access_key_secret
     *
     * @param string|null $access_key_secret access_key_secret
     *
     * @return self
     */
    public function setAccessKeySecret($access_key_secret)
    {
        if (is_null($access_key_secret)) {
            throw new \InvalidArgumentException('non-nullable access_key_secret cannot be null');
        }
        $this->container['access_key_secret'] = $access_key_secret;

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


