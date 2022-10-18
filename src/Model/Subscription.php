<?php
/**
 * Subscription
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
 * Subscription Class Doc Comment
 *
 * @category Class
 * @description An organization&#39;s subscription to a plan. This allows the subscriber to use the subscribed to resources up until the quota defined in the plan is exhausted. Includes details about the subscription as well as the current usage of the resources.
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Subscription implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'plan_id' => 'int',
        'plan_name' => 'string',
        'subscriber_id' => 'string',
        'vendor_id' => 'string',
        'status' => '\Upmind\EnhanceSdk\Model\Status',
        'suspended_by' => 'string',
        'resources' => '\Upmind\EnhanceSdk\Model\UsedResource[]',
        'allowances' => '\Upmind\EnhanceSdk\Model\Allowance[]',
        'selections' => '\Upmind\EnhanceSdk\Model\Selection[]',
        'dedicated_servers' => '\Upmind\EnhanceSdk\Model\SubscriptionDedicatedServersInfo',
        'created_at' => 'string',
        'plan_type' => '\Upmind\EnhanceSdk\Model\PlanType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'plan_id' => null,
        'plan_name' => null,
        'subscriber_id' => 'uuid',
        'vendor_id' => 'uuid',
        'status' => null,
        'suspended_by' => 'uuid',
        'resources' => null,
        'allowances' => null,
        'selections' => null,
        'dedicated_servers' => null,
        'created_at' => null,
        'plan_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'plan_id' => false,
		'plan_name' => false,
		'subscriber_id' => false,
		'vendor_id' => false,
		'status' => false,
		'suspended_by' => false,
		'resources' => false,
		'allowances' => false,
		'selections' => false,
		'dedicated_servers' => false,
		'created_at' => false,
		'plan_type' => false
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
        'id' => 'id',
        'plan_id' => 'planId',
        'plan_name' => 'planName',
        'subscriber_id' => 'subscriberId',
        'vendor_id' => 'vendorId',
        'status' => 'status',
        'suspended_by' => 'suspendedBy',
        'resources' => 'resources',
        'allowances' => 'allowances',
        'selections' => 'selections',
        'dedicated_servers' => 'dedicatedServers',
        'created_at' => 'createdAt',
        'plan_type' => 'planType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'plan_id' => 'setPlanId',
        'plan_name' => 'setPlanName',
        'subscriber_id' => 'setSubscriberId',
        'vendor_id' => 'setVendorId',
        'status' => 'setStatus',
        'suspended_by' => 'setSuspendedBy',
        'resources' => 'setResources',
        'allowances' => 'setAllowances',
        'selections' => 'setSelections',
        'dedicated_servers' => 'setDedicatedServers',
        'created_at' => 'setCreatedAt',
        'plan_type' => 'setPlanType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'plan_id' => 'getPlanId',
        'plan_name' => 'getPlanName',
        'subscriber_id' => 'getSubscriberId',
        'vendor_id' => 'getVendorId',
        'status' => 'getStatus',
        'suspended_by' => 'getSuspendedBy',
        'resources' => 'getResources',
        'allowances' => 'getAllowances',
        'selections' => 'getSelections',
        'dedicated_servers' => 'getDedicatedServers',
        'created_at' => 'getCreatedAt',
        'plan_type' => 'getPlanType'
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
        $this->setIfExists('plan_id', $data ?? [], null);
        $this->setIfExists('plan_name', $data ?? [], null);
        $this->setIfExists('subscriber_id', $data ?? [], null);
        $this->setIfExists('vendor_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('suspended_by', $data ?? [], null);
        $this->setIfExists('resources', $data ?? [], null);
        $this->setIfExists('allowances', $data ?? [], null);
        $this->setIfExists('selections', $data ?? [], null);
        $this->setIfExists('dedicated_servers', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('plan_type', $data ?? [], null);
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
        if ($this->container['plan_id'] === null) {
            $invalidProperties[] = "'plan_id' can't be null";
        }
        if ($this->container['plan_name'] === null) {
            $invalidProperties[] = "'plan_name' can't be null";
        }
        if ($this->container['subscriber_id'] === null) {
            $invalidProperties[] = "'subscriber_id' can't be null";
        }
        if ($this->container['vendor_id'] === null) {
            $invalidProperties[] = "'vendor_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['resources'] === null) {
            $invalidProperties[] = "'resources' can't be null";
        }
        if ($this->container['allowances'] === null) {
            $invalidProperties[] = "'allowances' can't be null";
        }
        if ($this->container['selections'] === null) {
            $invalidProperties[] = "'selections' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['plan_type'] === null) {
            $invalidProperties[] = "'plan_type' can't be null";
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
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
     * Gets plan_id
     *
     * @return int
     */
    public function getPlanId()
    {
        return $this->container['plan_id'];
    }

    /**
     * Sets plan_id
     *
     * @param int $plan_id plan_id
     *
     * @return self
     */
    public function setPlanId($plan_id)
    {

        if (is_null($plan_id)) {
            throw new \InvalidArgumentException('non-nullable plan_id cannot be null');
        }

        $this->container['plan_id'] = $plan_id;

        return $this;
    }

    /**
     * Gets plan_name
     *
     * @return string
     */
    public function getPlanName()
    {
        return $this->container['plan_name'];
    }

    /**
     * Sets plan_name
     *
     * @param string $plan_name plan_name
     *
     * @return self
     */
    public function setPlanName($plan_name)
    {

        if (is_null($plan_name)) {
            throw new \InvalidArgumentException('non-nullable plan_name cannot be null');
        }

        $this->container['plan_name'] = $plan_name;

        return $this;
    }

    /**
     * Gets subscriber_id
     *
     * @return string
     */
    public function getSubscriberId()
    {
        return $this->container['subscriber_id'];
    }

    /**
     * Sets subscriber_id
     *
     * @param string $subscriber_id subscriber_id
     *
     * @return self
     */
    public function setSubscriberId($subscriber_id)
    {

        if (is_null($subscriber_id)) {
            throw new \InvalidArgumentException('non-nullable subscriber_id cannot be null');
        }

        $this->container['subscriber_id'] = $subscriber_id;

        return $this;
    }

    /**
     * Gets vendor_id
     *
     * @return string
     */
    public function getVendorId()
    {
        return $this->container['vendor_id'];
    }

    /**
     * Sets vendor_id
     *
     * @param string $vendor_id vendor_id
     *
     * @return self
     */
    public function setVendorId($vendor_id)
    {

        if (is_null($vendor_id)) {
            throw new \InvalidArgumentException('non-nullable vendor_id cannot be null');
        }

        $this->container['vendor_id'] = $vendor_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Upmind\EnhanceSdk\Model\Status
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Upmind\EnhanceSdk\Model\Status $status status
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
     * Gets suspended_by
     *
     * @return string|null
     */
    public function getSuspendedBy()
    {
        return $this->container['suspended_by'];
    }

    /**
     * Sets suspended_by
     *
     * @param string|null $suspended_by suspended_by
     *
     * @return self
     */
    public function setSuspendedBy($suspended_by)
    {

        if (is_null($suspended_by)) {
            throw new \InvalidArgumentException('non-nullable suspended_by cannot be null');
        }

        $this->container['suspended_by'] = $suspended_by;

        return $this;
    }

    /**
     * Gets resources
     *
     * @return \Upmind\EnhanceSdk\Model\UsedResource[]
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param \Upmind\EnhanceSdk\Model\UsedResource[] $resources A list of used resources.
     *
     * @return self
     */
    public function setResources($resources)
    {

        if (is_null($resources)) {
            throw new \InvalidArgumentException('non-nullable resources cannot be null');
        }

        $this->container['resources'] = $resources;

        return $this;
    }

    /**
     * Gets allowances
     *
     * @return \Upmind\EnhanceSdk\Model\Allowance[]
     */
    public function getAllowances()
    {
        return $this->container['allowances'];
    }

    /**
     * Sets allowances
     *
     * @param \Upmind\EnhanceSdk\Model\Allowance[] $allowances allowances
     *
     * @return self
     */
    public function setAllowances($allowances)
    {

        if (is_null($allowances)) {
            throw new \InvalidArgumentException('non-nullable allowances cannot be null');
        }

        $this->container['allowances'] = $allowances;

        return $this;
    }

    /**
     * Gets selections
     *
     * @return \Upmind\EnhanceSdk\Model\Selection[]
     */
    public function getSelections()
    {
        return $this->container['selections'];
    }

    /**
     * Sets selections
     *
     * @param \Upmind\EnhanceSdk\Model\Selection[] $selections selections
     *
     * @return self
     */
    public function setSelections($selections)
    {

        if (is_null($selections)) {
            throw new \InvalidArgumentException('non-nullable selections cannot be null');
        }

        $this->container['selections'] = $selections;

        return $this;
    }

    /**
     * Gets dedicated_servers
     *
     * @return \Upmind\EnhanceSdk\Model\SubscriptionDedicatedServersInfo|null
     */
    public function getDedicatedServers()
    {
        return $this->container['dedicated_servers'];
    }

    /**
     * Sets dedicated_servers
     *
     * @param \Upmind\EnhanceSdk\Model\SubscriptionDedicatedServersInfo|null $dedicated_servers dedicated_servers
     *
     * @return self
     */
    public function setDedicatedServers($dedicated_servers)
    {

        if (is_null($dedicated_servers)) {
            throw new \InvalidArgumentException('non-nullable dedicated_servers cannot be null');
        }

        $this->container['dedicated_servers'] = $dedicated_servers;

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
     * Gets plan_type
     *
     * @return \Upmind\EnhanceSdk\Model\PlanType
     */
    public function getPlanType()
    {
        return $this->container['plan_type'];
    }

    /**
     * Sets plan_type
     *
     * @param \Upmind\EnhanceSdk\Model\PlanType $plan_type plan_type
     *
     * @return self
     */
    public function setPlanType($plan_type)
    {

        if (is_null($plan_type)) {
            throw new \InvalidArgumentException('non-nullable plan_type cannot be null');
        }

        $this->container['plan_type'] = $plan_type;

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


