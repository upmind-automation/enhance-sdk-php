<?php
/**
 * NewPlan
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
 * NewPlan Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NewPlan implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'resources' => '\Upmind\EnhanceSdk\Model\Resource[]',
        'allowances' => '\Upmind\EnhanceSdk\Model\Allowance[]',
        'selections' => '\Upmind\EnhanceSdk\Model\Selection[]',
        'server_group_id' => 'string',
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
        'name' => null,
        'resources' => null,
        'allowances' => null,
        'selections' => null,
        'server_group_id' => null,
        'plan_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'resources' => false,
		'allowances' => false,
		'selections' => false,
		'server_group_id' => false,
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
        'name' => 'name',
        'resources' => 'resources',
        'allowances' => 'allowances',
        'selections' => 'selections',
        'server_group_id' => 'serverGroupId',
        'plan_type' => 'planType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'resources' => 'setResources',
        'allowances' => 'setAllowances',
        'selections' => 'setSelections',
        'server_group_id' => 'setServerGroupId',
        'plan_type' => 'setPlanType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'resources' => 'getResources',
        'allowances' => 'getAllowances',
        'selections' => 'getSelections',
        'server_group_id' => 'getServerGroupId',
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('resources', $data ?? [], null);
        $this->setIfExists('allowances', $data ?? [], null);
        $this->setIfExists('selections', $data ?? [], null);
        $this->setIfExists('server_group_id', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets resources
     *
     * @return \Upmind\EnhanceSdk\Model\Resource[]
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param \Upmind\EnhanceSdk\Model\Resource[] $resources resources
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
     * Gets plan_type
     *
     * @return \Upmind\EnhanceSdk\Model\PlanType|null
     */
    public function getPlanType()
    {
        return $this->container['plan_type'];
    }

    /**
     * Sets plan_type
     *
     * @param \Upmind\EnhanceSdk\Model\PlanType|null $plan_type plan_type
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


