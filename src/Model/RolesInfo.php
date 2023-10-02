<?php
/**
 * RolesInfo
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
 * RolesInfo Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RolesInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RolesInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => '\Upmind\EnhanceSdk\Model\EmailRoleInfo',
        'backup' => '\Upmind\EnhanceSdk\Model\BackupRoleInfo',
        'database' => '\Upmind\EnhanceSdk\Model\DatabaseRoleInfo',
        'application' => '\Upmind\EnhanceSdk\Model\ApplicationRoleInfo',
        'dns' => '\Upmind\EnhanceSdk\Model\DnsRoleInfo',
        'webserver_kind' => '\Upmind\EnhanceSdk\Model\WebserverKind'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email' => null,
        'backup' => null,
        'database' => null,
        'application' => null,
        'dns' => null,
        'webserver_kind' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'email' => false,
		'backup' => false,
		'database' => false,
		'application' => false,
		'dns' => false,
		'webserver_kind' => false
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
        'email' => 'email',
        'backup' => 'backup',
        'database' => 'database',
        'application' => 'application',
        'dns' => 'dns',
        'webserver_kind' => 'webserverKind'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'backup' => 'setBackup',
        'database' => 'setDatabase',
        'application' => 'setApplication',
        'dns' => 'setDns',
        'webserver_kind' => 'setWebserverKind'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'backup' => 'getBackup',
        'database' => 'getDatabase',
        'application' => 'getApplication',
        'dns' => 'getDns',
        'webserver_kind' => 'getWebserverKind'
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
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('backup', $data ?? [], null);
        $this->setIfExists('database', $data ?? [], null);
        $this->setIfExists('application', $data ?? [], null);
        $this->setIfExists('dns', $data ?? [], null);
        $this->setIfExists('webserver_kind', $data ?? [], null);
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
     * Gets email
     *
     * @return \Upmind\EnhanceSdk\Model\EmailRoleInfo|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param \Upmind\EnhanceSdk\Model\EmailRoleInfo|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets backup
     *
     * @return \Upmind\EnhanceSdk\Model\BackupRoleInfo|null
     */
    public function getBackup()
    {
        return $this->container['backup'];
    }

    /**
     * Sets backup
     *
     * @param \Upmind\EnhanceSdk\Model\BackupRoleInfo|null $backup backup
     *
     * @return self
     */
    public function setBackup($backup)
    {
        if (is_null($backup)) {
            throw new \InvalidArgumentException('non-nullable backup cannot be null');
        }
        $this->container['backup'] = $backup;

        return $this;
    }

    /**
     * Gets database
     *
     * @return \Upmind\EnhanceSdk\Model\DatabaseRoleInfo|null
     */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
     * Sets database
     *
     * @param \Upmind\EnhanceSdk\Model\DatabaseRoleInfo|null $database database
     *
     * @return self
     */
    public function setDatabase($database)
    {
        if (is_null($database)) {
            throw new \InvalidArgumentException('non-nullable database cannot be null');
        }
        $this->container['database'] = $database;

        return $this;
    }

    /**
     * Gets application
     *
     * @return \Upmind\EnhanceSdk\Model\ApplicationRoleInfo|null
     */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
     * Sets application
     *
     * @param \Upmind\EnhanceSdk\Model\ApplicationRoleInfo|null $application application
     *
     * @return self
     */
    public function setApplication($application)
    {
        if (is_null($application)) {
            throw new \InvalidArgumentException('non-nullable application cannot be null');
        }
        $this->container['application'] = $application;

        return $this;
    }

    /**
     * Gets dns
     *
     * @return \Upmind\EnhanceSdk\Model\DnsRoleInfo|null
     */
    public function getDns()
    {
        return $this->container['dns'];
    }

    /**
     * Sets dns
     *
     * @param \Upmind\EnhanceSdk\Model\DnsRoleInfo|null $dns dns
     *
     * @return self
     */
    public function setDns($dns)
    {
        if (is_null($dns)) {
            throw new \InvalidArgumentException('non-nullable dns cannot be null');
        }
        $this->container['dns'] = $dns;

        return $this;
    }

    /**
     * Gets webserver_kind
     *
     * @return \Upmind\EnhanceSdk\Model\WebserverKind|null
     */
    public function getWebserverKind()
    {
        return $this->container['webserver_kind'];
    }

    /**
     * Sets webserver_kind
     *
     * @param \Upmind\EnhanceSdk\Model\WebserverKind|null $webserver_kind webserver_kind
     *
     * @return self
     */
    public function setWebserverKind($webserver_kind)
    {
        if (is_null($webserver_kind)) {
            throw new \InvalidArgumentException('non-nullable webserver_kind cannot be null');
        }
        $this->container['webserver_kind'] = $webserver_kind;

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


