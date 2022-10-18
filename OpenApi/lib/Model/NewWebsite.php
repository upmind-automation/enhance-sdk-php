<?php
/**
 * NewWebsite
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
 * The version of the OpenAPI document: 7.3.0
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
 * NewWebsite Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NewWebsite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewWebsite';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'domain' => 'string',
        'subscription_id' => 'int',
        'app_server_id' => 'string',
        'backup_server_id' => 'string',
        'db_server_id' => 'string',
        'email_server_id' => 'string',
        'server_group_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'domain' => null,
        'subscription_id' => null,
        'app_server_id' => 'uuid',
        'backup_server_id' => 'uuid',
        'db_server_id' => 'uuid',
        'email_server_id' => 'uuid',
        'server_group_id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'domain' => false,
		'subscription_id' => false,
		'app_server_id' => false,
		'backup_server_id' => false,
		'db_server_id' => false,
		'email_server_id' => false,
		'server_group_id' => false
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
        'domain' => 'domain',
        'subscription_id' => 'subscriptionId',
        'app_server_id' => 'appServerId',
        'backup_server_id' => 'backupServerId',
        'db_server_id' => 'dbServerId',
        'email_server_id' => 'emailServerId',
        'server_group_id' => 'serverGroupId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain' => 'setDomain',
        'subscription_id' => 'setSubscriptionId',
        'app_server_id' => 'setAppServerId',
        'backup_server_id' => 'setBackupServerId',
        'db_server_id' => 'setDbServerId',
        'email_server_id' => 'setEmailServerId',
        'server_group_id' => 'setServerGroupId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain' => 'getDomain',
        'subscription_id' => 'getSubscriptionId',
        'app_server_id' => 'getAppServerId',
        'backup_server_id' => 'getBackupServerId',
        'db_server_id' => 'getDbServerId',
        'email_server_id' => 'getEmailServerId',
        'server_group_id' => 'getServerGroupId'
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
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('subscription_id', $data ?? [], null);
        $this->setIfExists('app_server_id', $data ?? [], null);
        $this->setIfExists('backup_server_id', $data ?? [], null);
        $this->setIfExists('db_server_id', $data ?? [], null);
        $this->setIfExists('email_server_id', $data ?? [], null);
        $this->setIfExists('server_group_id', $data ?? [], null);
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

        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
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
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain The domain of the new website.
     *
     * @return self
     */
    public function setDomain($domain)
    {

        if (is_null($domain)) {
            throw new \InvalidArgumentException('non-nullable domain cannot be null');
        }

        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets subscription_id
     *
     * @return int|null
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     *
     * @param int|null $subscription_id subscription_id
     *
     * @return self
     */
    public function setSubscriptionId($subscription_id)
    {

        if (is_null($subscription_id)) {
            throw new \InvalidArgumentException('non-nullable subscription_id cannot be null');
        }

        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets app_server_id
     *
     * @return string|null
     */
    public function getAppServerId()
    {
        return $this->container['app_server_id'];
    }

    /**
     * Sets app_server_id
     *
     * @param string|null $app_server_id app_server_id
     *
     * @return self
     */
    public function setAppServerId($app_server_id)
    {

        if (is_null($app_server_id)) {
            throw new \InvalidArgumentException('non-nullable app_server_id cannot be null');
        }

        $this->container['app_server_id'] = $app_server_id;

        return $this;
    }

    /**
     * Gets backup_server_id
     *
     * @return string|null
     */
    public function getBackupServerId()
    {
        return $this->container['backup_server_id'];
    }

    /**
     * Sets backup_server_id
     *
     * @param string|null $backup_server_id backup_server_id
     *
     * @return self
     */
    public function setBackupServerId($backup_server_id)
    {

        if (is_null($backup_server_id)) {
            throw new \InvalidArgumentException('non-nullable backup_server_id cannot be null');
        }

        $this->container['backup_server_id'] = $backup_server_id;

        return $this;
    }

    /**
     * Gets db_server_id
     *
     * @return string|null
     */
    public function getDbServerId()
    {
        return $this->container['db_server_id'];
    }

    /**
     * Sets db_server_id
     *
     * @param string|null $db_server_id db_server_id
     *
     * @return self
     */
    public function setDbServerId($db_server_id)
    {

        if (is_null($db_server_id)) {
            throw new \InvalidArgumentException('non-nullable db_server_id cannot be null');
        }

        $this->container['db_server_id'] = $db_server_id;

        return $this;
    }

    /**
     * Gets email_server_id
     *
     * @return string|null
     */
    public function getEmailServerId()
    {
        return $this->container['email_server_id'];
    }

    /**
     * Sets email_server_id
     *
     * @param string|null $email_server_id email_server_id
     *
     * @return self
     */
    public function setEmailServerId($email_server_id)
    {

        if (is_null($email_server_id)) {
            throw new \InvalidArgumentException('non-nullable email_server_id cannot be null');
        }

        $this->container['email_server_id'] = $email_server_id;

        return $this;
    }

    /**
     * Gets server_group_id
     *
     * @return string|null
     */
    public function getServerGroupId()
    {
        return $this->container['server_group_id'];
    }

    /**
     * Sets server_group_id
     *
     * @param string|null $server_group_id server_group_id
     *
     * @return self
     */
    public function setServerGroupId($server_group_id)
    {

        if (is_null($server_group_id)) {
            throw new \InvalidArgumentException('non-nullable server_group_id cannot be null');
        }

        $this->container['server_group_id'] = $server_group_id;

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


