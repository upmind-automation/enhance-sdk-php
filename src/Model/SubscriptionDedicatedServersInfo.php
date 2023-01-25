<?php
/**
 * SubscriptionDedicatedServersInfo
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
 * SubscriptionDedicatedServersInfo Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SubscriptionDedicatedServersInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionDedicatedServersInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'app_server' => '\Upmind\EnhanceSdk\Model\SubscriptionDedicatedServer',
        'backup_server' => '\Upmind\EnhanceSdk\Model\SubscriptionDedicatedServer',
        'db_server' => '\Upmind\EnhanceSdk\Model\SubscriptionDedicatedServer',
        'email_server' => '\Upmind\EnhanceSdk\Model\SubscriptionDedicatedServer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'app_server' => null,
        'backup_server' => null,
        'db_server' => null,
        'email_server' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'app_server' => false,
		'backup_server' => false,
		'db_server' => false,
		'email_server' => false
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
        'app_server' => 'appServer',
        'backup_server' => 'backupServer',
        'db_server' => 'dbServer',
        'email_server' => 'emailServer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_server' => 'setAppServer',
        'backup_server' => 'setBackupServer',
        'db_server' => 'setDbServer',
        'email_server' => 'setEmailServer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_server' => 'getAppServer',
        'backup_server' => 'getBackupServer',
        'db_server' => 'getDbServer',
        'email_server' => 'getEmailServer'
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
        $this->setIfExists('app_server', $data ?? [], null);
        $this->setIfExists('backup_server', $data ?? [], null);
        $this->setIfExists('db_server', $data ?? [], null);
        $this->setIfExists('email_server', $data ?? [], null);
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
     * Gets app_server
     *
     * @return \Upmind\EnhanceSdk\Model\SubscriptionDedicatedServer|null
     */
    public function getAppServer()
    {
        return $this->container['app_server'];
    }

    /**
     * Sets app_server
     *
     * @param \Upmind\EnhanceSdk\Model\SubscriptionDedicatedServer|null $app_server app_server
     *
     * @return self
     */
    public function setAppServer($app_server)
    {

        if (is_null($app_server)) {
            throw new \InvalidArgumentException('non-nullable app_server cannot be null');
        }

        $this->container['app_server'] = $app_server;

        return $this;
    }

    /**
     * Gets backup_server
     *
     * @return \Upmind\EnhanceSdk\Model\SubscriptionDedicatedServer|null
     */
    public function getBackupServer()
    {
        return $this->container['backup_server'];
    }

    /**
     * Sets backup_server
     *
     * @param \Upmind\EnhanceSdk\Model\SubscriptionDedicatedServer|null $backup_server backup_server
     *
     * @return self
     */
    public function setBackupServer($backup_server)
    {

        if (is_null($backup_server)) {
            throw new \InvalidArgumentException('non-nullable backup_server cannot be null');
        }

        $this->container['backup_server'] = $backup_server;

        return $this;
    }

    /**
     * Gets db_server
     *
     * @return \Upmind\EnhanceSdk\Model\SubscriptionDedicatedServer|null
     */
    public function getDbServer()
    {
        return $this->container['db_server'];
    }

    /**
     * Sets db_server
     *
     * @param \Upmind\EnhanceSdk\Model\SubscriptionDedicatedServer|null $db_server db_server
     *
     * @return self
     */
    public function setDbServer($db_server)
    {

        if (is_null($db_server)) {
            throw new \InvalidArgumentException('non-nullable db_server cannot be null');
        }

        $this->container['db_server'] = $db_server;

        return $this;
    }

    /**
     * Gets email_server
     *
     * @return \Upmind\EnhanceSdk\Model\SubscriptionDedicatedServer|null
     */
    public function getEmailServer()
    {
        return $this->container['email_server'];
    }

    /**
     * Sets email_server
     *
     * @param \Upmind\EnhanceSdk\Model\SubscriptionDedicatedServer|null $email_server email_server
     *
     * @return self
     */
    public function setEmailServer($email_server)
    {

        if (is_null($email_server)) {
            throw new \InvalidArgumentException('non-nullable email_server cannot be null');
        }

        $this->container['email_server'] = $email_server;

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


