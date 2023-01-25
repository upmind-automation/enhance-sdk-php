<?php
/**
 * OrchdLoginPolicySettings
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
 * The version of the OpenAPI document: 9.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
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
 * OrchdLoginPolicySettings Class Doc Comment
 *
 * @category Class
 * @description Settings for orchd login policy
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrchdLoginPolicySettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrchdLoginPolicySettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enabled' => 'bool',
        'email_quota' => 'int',
        'email_auto_block' => 'bool',
        'email_auto_block_threshold' => 'int',
        'ip_quota' => 'int',
        'ip_auto_block' => 'bool',
        'ip_auto_block_threshold' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enabled' => null,
        'email_quota' => null,
        'email_auto_block' => null,
        'email_auto_block_threshold' => null,
        'ip_quota' => null,
        'ip_auto_block' => null,
        'ip_auto_block_threshold' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enabled' => false,
		'email_quota' => false,
		'email_auto_block' => false,
		'email_auto_block_threshold' => false,
		'ip_quota' => false,
		'ip_auto_block' => false,
		'ip_auto_block_threshold' => false
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
        'enabled' => 'enabled',
        'email_quota' => 'emailQuota',
        'email_auto_block' => 'emailAutoBlock',
        'email_auto_block_threshold' => 'emailAutoBlockThreshold',
        'ip_quota' => 'ipQuota',
        'ip_auto_block' => 'ipAutoBlock',
        'ip_auto_block_threshold' => 'ipAutoBlockThreshold'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'email_quota' => 'setEmailQuota',
        'email_auto_block' => 'setEmailAutoBlock',
        'email_auto_block_threshold' => 'setEmailAutoBlockThreshold',
        'ip_quota' => 'setIpQuota',
        'ip_auto_block' => 'setIpAutoBlock',
        'ip_auto_block_threshold' => 'setIpAutoBlockThreshold'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'email_quota' => 'getEmailQuota',
        'email_auto_block' => 'getEmailAutoBlock',
        'email_auto_block_threshold' => 'getEmailAutoBlockThreshold',
        'ip_quota' => 'getIpQuota',
        'ip_auto_block' => 'getIpAutoBlock',
        'ip_auto_block_threshold' => 'getIpAutoBlockThreshold'
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
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('email_quota', $data ?? [], null);
        $this->setIfExists('email_auto_block', $data ?? [], null);
        $this->setIfExists('email_auto_block_threshold', $data ?? [], null);
        $this->setIfExists('ip_quota', $data ?? [], null);
        $this->setIfExists('ip_auto_block', $data ?? [], null);
        $this->setIfExists('ip_auto_block_threshold', $data ?? [], null);
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

        if (!is_null($this->container['email_auto_block_threshold']) && ($this->container['email_auto_block_threshold'] < 1)) {
            $invalidProperties[] = "invalid value for 'email_auto_block_threshold', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['ip_auto_block_threshold']) && ($this->container['ip_auto_block_threshold'] < 1)) {
            $invalidProperties[] = "invalid value for 'ip_auto_block_threshold', must be bigger than or equal to 1.";
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
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {

        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }

        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets email_quota
     *
     * @return int|null
     */
    public function getEmailQuota()
    {
        return $this->container['email_quota'];
    }

    /**
     * Sets email_quota
     *
     * @param int|null $email_quota email_quota
     *
     * @return self
     */
    public function setEmailQuota($email_quota)
    {

        if (is_null($email_quota)) {
            throw new \InvalidArgumentException('non-nullable email_quota cannot be null');
        }

        $this->container['email_quota'] = $email_quota;

        return $this;
    }

    /**
     * Gets email_auto_block
     *
     * @return bool|null
     */
    public function getEmailAutoBlock()
    {
        return $this->container['email_auto_block'];
    }

    /**
     * Sets email_auto_block
     *
     * @param bool|null $email_auto_block email_auto_block
     *
     * @return self
     */
    public function setEmailAutoBlock($email_auto_block)
    {

        if (is_null($email_auto_block)) {
            throw new \InvalidArgumentException('non-nullable email_auto_block cannot be null');
        }

        $this->container['email_auto_block'] = $email_auto_block;

        return $this;
    }

    /**
     * Gets email_auto_block_threshold
     *
     * @return int|null
     */
    public function getEmailAutoBlockThreshold()
    {
        return $this->container['email_auto_block_threshold'];
    }

    /**
     * Sets email_auto_block_threshold
     *
     * @param int|null $email_auto_block_threshold email_auto_block_threshold
     *
     * @return self
     */
    public function setEmailAutoBlockThreshold($email_auto_block_threshold)
    {

        if (!is_null($email_auto_block_threshold) && ($email_auto_block_threshold < 1)) {
            throw new \InvalidArgumentException('invalid value for $email_auto_block_threshold when calling OrchdLoginPolicySettings., must be bigger than or equal to 1.');
        }


        if (is_null($email_auto_block_threshold)) {
            throw new \InvalidArgumentException('non-nullable email_auto_block_threshold cannot be null');
        }

        $this->container['email_auto_block_threshold'] = $email_auto_block_threshold;

        return $this;
    }

    /**
     * Gets ip_quota
     *
     * @return int|null
     */
    public function getIpQuota()
    {
        return $this->container['ip_quota'];
    }

    /**
     * Sets ip_quota
     *
     * @param int|null $ip_quota ip_quota
     *
     * @return self
     */
    public function setIpQuota($ip_quota)
    {

        if (is_null($ip_quota)) {
            throw new \InvalidArgumentException('non-nullable ip_quota cannot be null');
        }

        $this->container['ip_quota'] = $ip_quota;

        return $this;
    }

    /**
     * Gets ip_auto_block
     *
     * @return bool|null
     */
    public function getIpAutoBlock()
    {
        return $this->container['ip_auto_block'];
    }

    /**
     * Sets ip_auto_block
     *
     * @param bool|null $ip_auto_block ip_auto_block
     *
     * @return self
     */
    public function setIpAutoBlock($ip_auto_block)
    {

        if (is_null($ip_auto_block)) {
            throw new \InvalidArgumentException('non-nullable ip_auto_block cannot be null');
        }

        $this->container['ip_auto_block'] = $ip_auto_block;

        return $this;
    }

    /**
     * Gets ip_auto_block_threshold
     *
     * @return int|null
     */
    public function getIpAutoBlockThreshold()
    {
        return $this->container['ip_auto_block_threshold'];
    }

    /**
     * Sets ip_auto_block_threshold
     *
     * @param int|null $ip_auto_block_threshold ip_auto_block_threshold
     *
     * @return self
     */
    public function setIpAutoBlockThreshold($ip_auto_block_threshold)
    {

        if (!is_null($ip_auto_block_threshold) && ($ip_auto_block_threshold < 1)) {
            throw new \InvalidArgumentException('invalid value for $ip_auto_block_threshold when calling OrchdLoginPolicySettings., must be bigger than or equal to 1.');
        }


        if (is_null($ip_auto_block_threshold)) {
            throw new \InvalidArgumentException('non-nullable ip_auto_block_threshold cannot be null');
        }

        $this->container['ip_auto_block_threshold'] = $ip_auto_block_threshold;

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


