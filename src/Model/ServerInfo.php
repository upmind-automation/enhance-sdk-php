<?php
/**
 * ServerInfo
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
 * ServerInfo Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ServerInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ServerInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'group_id' => 'string',
        'is_control_panel' => 'bool',
        'is_configured' => 'bool',
        'friendly_name' => 'string',
        'hostname' => 'string',
        'ips' => '\Upmind\EnhanceSdk\Model\ServerIp[]',
        'disks' => '\Upmind\EnhanceSdk\Model\Disk[]',
        'os_usage' => 'int',
        'status' => '\Upmind\EnhanceSdk\Model\NetworkStatus',
        'roles' => '\Upmind\EnhanceSdk\Model\RolesSummary',
        'created_at' => 'string',
        'controld_version' => 'string',
        'dedicated_subscription' => '\Upmind\EnhanceSdk\Model\DedicatedSubscriptionInfo',
        'is_decommissioned' => 'bool',
        'ipv6_addr' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'group_id' => 'uuid',
        'is_control_panel' => null,
        'is_configured' => null,
        'friendly_name' => null,
        'hostname' => null,
        'ips' => null,
        'disks' => null,
        'os_usage' => null,
        'status' => null,
        'roles' => null,
        'created_at' => null,
        'controld_version' => 'semver',
        'dedicated_subscription' => null,
        'is_decommissioned' => null,
        'ipv6_addr' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'group_id' => false,
		'is_control_panel' => false,
		'is_configured' => false,
		'friendly_name' => false,
		'hostname' => false,
		'ips' => false,
		'disks' => false,
		'os_usage' => false,
		'status' => false,
		'roles' => false,
		'created_at' => false,
		'controld_version' => false,
		'dedicated_subscription' => false,
		'is_decommissioned' => false,
		'ipv6_addr' => false
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
        'id' => 'id',
        'group_id' => 'groupId',
        'is_control_panel' => 'isControlPanel',
        'is_configured' => 'isConfigured',
        'friendly_name' => 'friendlyName',
        'hostname' => 'hostname',
        'ips' => 'ips',
        'disks' => 'disks',
        'os_usage' => 'osUsage',
        'status' => 'status',
        'roles' => 'roles',
        'created_at' => 'createdAt',
        'controld_version' => 'controldVersion',
        'dedicated_subscription' => 'dedicatedSubscription',
        'is_decommissioned' => 'isDecommissioned',
        'ipv6_addr' => 'ipv6Addr'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'group_id' => 'setGroupId',
        'is_control_panel' => 'setIsControlPanel',
        'is_configured' => 'setIsConfigured',
        'friendly_name' => 'setFriendlyName',
        'hostname' => 'setHostname',
        'ips' => 'setIps',
        'disks' => 'setDisks',
        'os_usage' => 'setOsUsage',
        'status' => 'setStatus',
        'roles' => 'setRoles',
        'created_at' => 'setCreatedAt',
        'controld_version' => 'setControldVersion',
        'dedicated_subscription' => 'setDedicatedSubscription',
        'is_decommissioned' => 'setIsDecommissioned',
        'ipv6_addr' => 'setIpv6Addr'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'group_id' => 'getGroupId',
        'is_control_panel' => 'getIsControlPanel',
        'is_configured' => 'getIsConfigured',
        'friendly_name' => 'getFriendlyName',
        'hostname' => 'getHostname',
        'ips' => 'getIps',
        'disks' => 'getDisks',
        'os_usage' => 'getOsUsage',
        'status' => 'getStatus',
        'roles' => 'getRoles',
        'created_at' => 'getCreatedAt',
        'controld_version' => 'getControldVersion',
        'dedicated_subscription' => 'getDedicatedSubscription',
        'is_decommissioned' => 'getIsDecommissioned',
        'ipv6_addr' => 'getIpv6Addr'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('group_id', $data ?? [], null);
        $this->setIfExists('is_control_panel', $data ?? [], null);
        $this->setIfExists('is_configured', $data ?? [], null);
        $this->setIfExists('friendly_name', $data ?? [], null);
        $this->setIfExists('hostname', $data ?? [], null);
        $this->setIfExists('ips', $data ?? [], null);
        $this->setIfExists('disks', $data ?? [], null);
        $this->setIfExists('os_usage', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('controld_version', $data ?? [], null);
        $this->setIfExists('dedicated_subscription', $data ?? [], null);
        $this->setIfExists('is_decommissioned', $data ?? [], null);
        $this->setIfExists('ipv6_addr', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['group_id'] === null) {
            $invalidProperties[] = "'group_id' can't be null";
        }
        if ($this->container['is_control_panel'] === null) {
            $invalidProperties[] = "'is_control_panel' can't be null";
        }
        if ($this->container['is_configured'] === null) {
            $invalidProperties[] = "'is_configured' can't be null";
        }
        if ($this->container['friendly_name'] === null) {
            $invalidProperties[] = "'friendly_name' can't be null";
        }
        if ($this->container['hostname'] === null) {
            $invalidProperties[] = "'hostname' can't be null";
        }
        if ($this->container['ips'] === null) {
            $invalidProperties[] = "'ips' can't be null";
        }
        if ($this->container['roles'] === null) {
            $invalidProperties[] = "'roles' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['is_decommissioned'] === null) {
            $invalidProperties[] = "'is_decommissioned' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string $group_id group_id
     *
     * @return self
     */
    public function setGroupId($group_id)
    {
        if (is_null($group_id)) {
            throw new \InvalidArgumentException('non-nullable group_id cannot be null');
        }
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets is_control_panel
     *
     * @return bool
     */
    public function getIsControlPanel()
    {
        return $this->container['is_control_panel'];
    }

    /**
     * Sets is_control_panel
     *
     * @param bool $is_control_panel is_control_panel
     *
     * @return self
     */
    public function setIsControlPanel($is_control_panel)
    {
        if (is_null($is_control_panel)) {
            throw new \InvalidArgumentException('non-nullable is_control_panel cannot be null');
        }
        $this->container['is_control_panel'] = $is_control_panel;

        return $this;
    }

    /**
     * Gets is_configured
     *
     * @return bool
     */
    public function getIsConfigured()
    {
        return $this->container['is_configured'];
    }

    /**
     * Sets is_configured
     *
     * @param bool $is_configured is_configured
     *
     * @return self
     */
    public function setIsConfigured($is_configured)
    {
        if (is_null($is_configured)) {
            throw new \InvalidArgumentException('non-nullable is_configured cannot be null');
        }
        $this->container['is_configured'] = $is_configured;

        return $this;
    }

    /**
     * Gets friendly_name
     *
     * @return string
     */
    public function getFriendlyName()
    {
        return $this->container['friendly_name'];
    }

    /**
     * Sets friendly_name
     *
     * @param string $friendly_name friendly_name
     *
     * @return self
     */
    public function setFriendlyName($friendly_name)
    {
        if (is_null($friendly_name)) {
            throw new \InvalidArgumentException('non-nullable friendly_name cannot be null');
        }
        $this->container['friendly_name'] = $friendly_name;

        return $this;
    }

    /**
     * Gets hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string $hostname hostname
     *
     * @return self
     */
    public function setHostname($hostname)
    {
        if (is_null($hostname)) {
            throw new \InvalidArgumentException('non-nullable hostname cannot be null');
        }
        $this->container['hostname'] = $hostname;

        return $this;
    }

    /**
     * Gets ips
     *
     * @return \Upmind\EnhanceSdk\Model\ServerIp[]
     */
    public function getIps()
    {
        return $this->container['ips'];
    }

    /**
     * Sets ips
     *
     * @param \Upmind\EnhanceSdk\Model\ServerIp[] $ips ips
     *
     * @return self
     */
    public function setIps($ips)
    {
        if (is_null($ips)) {
            throw new \InvalidArgumentException('non-nullable ips cannot be null');
        }
        $this->container['ips'] = $ips;

        return $this;
    }

    /**
     * Gets disks
     *
     * @return \Upmind\EnhanceSdk\Model\Disk[]|null
     */
    public function getDisks()
    {
        return $this->container['disks'];
    }

    /**
     * Sets disks
     *
     * @param \Upmind\EnhanceSdk\Model\Disk[]|null $disks disks
     *
     * @return self
     */
    public function setDisks($disks)
    {
        if (is_null($disks)) {
            throw new \InvalidArgumentException('non-nullable disks cannot be null');
        }
        $this->container['disks'] = $disks;

        return $this;
    }

    /**
     * Gets os_usage
     *
     * @return int|null
     */
    public function getOsUsage()
    {
        return $this->container['os_usage'];
    }

    /**
     * Sets os_usage
     *
     * @param int|null $os_usage os_usage
     *
     * @return self
     */
    public function setOsUsage($os_usage)
    {
        if (is_null($os_usage)) {
            throw new \InvalidArgumentException('non-nullable os_usage cannot be null');
        }
        $this->container['os_usage'] = $os_usage;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Upmind\EnhanceSdk\Model\NetworkStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Upmind\EnhanceSdk\Model\NetworkStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \Upmind\EnhanceSdk\Model\RolesSummary
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \Upmind\EnhanceSdk\Model\RolesSummary $roles roles
     *
     * @return self
     */
    public function setRoles($roles)
    {
        if (is_null($roles)) {
            throw new \InvalidArgumentException('non-nullable roles cannot be null');
        }
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets controld_version
     *
     * @return string|null
     */
    public function getControldVersion()
    {
        return $this->container['controld_version'];
    }

    /**
     * Sets controld_version
     *
     * @param string|null $controld_version controld_version
     *
     * @return self
     */
    public function setControldVersion($controld_version)
    {
        if (is_null($controld_version)) {
            throw new \InvalidArgumentException('non-nullable controld_version cannot be null');
        }
        $this->container['controld_version'] = $controld_version;

        return $this;
    }

    /**
     * Gets dedicated_subscription
     *
     * @return \Upmind\EnhanceSdk\Model\DedicatedSubscriptionInfo|null
     */
    public function getDedicatedSubscription()
    {
        return $this->container['dedicated_subscription'];
    }

    /**
     * Sets dedicated_subscription
     *
     * @param \Upmind\EnhanceSdk\Model\DedicatedSubscriptionInfo|null $dedicated_subscription dedicated_subscription
     *
     * @return self
     */
    public function setDedicatedSubscription($dedicated_subscription)
    {
        if (is_null($dedicated_subscription)) {
            throw new \InvalidArgumentException('non-nullable dedicated_subscription cannot be null');
        }
        $this->container['dedicated_subscription'] = $dedicated_subscription;

        return $this;
    }

    /**
     * Gets is_decommissioned
     *
     * @return bool
     */
    public function getIsDecommissioned()
    {
        return $this->container['is_decommissioned'];
    }

    /**
     * Sets is_decommissioned
     *
     * @param bool $is_decommissioned is_decommissioned
     *
     * @return self
     */
    public function setIsDecommissioned($is_decommissioned)
    {
        if (is_null($is_decommissioned)) {
            throw new \InvalidArgumentException('non-nullable is_decommissioned cannot be null');
        }
        $this->container['is_decommissioned'] = $is_decommissioned;

        return $this;
    }

    /**
     * Gets ipv6_addr
     *
     * @return string|null
     */
    public function getIpv6Addr()
    {
        return $this->container['ipv6_addr'];
    }

    /**
     * Sets ipv6_addr
     *
     * @param string|null $ipv6_addr ipv6_addr
     *
     * @return self
     */
    public function setIpv6Addr($ipv6_addr)
    {
        if (is_null($ipv6_addr)) {
            throw new \InvalidArgumentException('non-nullable ipv6_addr cannot be null');
        }
        $this->container['ipv6_addr'] = $ipv6_addr;

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


