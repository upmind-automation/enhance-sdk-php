<?php
/**
 * LoginMembership
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
 * LoginMembership Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LoginMembership implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoginMembership';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'member_id' => 'string',
        'org_id' => 'string',
        'org_name' => 'string',
        'is_master_org' => 'bool',
        'roles' => '\Upmind\EnhanceSdk\Model\Role[]',
        'site_access_count' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'member_id' => 'uuid',
        'org_id' => 'uuid',
        'org_name' => null,
        'is_master_org' => null,
        'roles' => null,
        'site_access_count' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'member_id' => false,
		'org_id' => false,
		'org_name' => false,
		'is_master_org' => false,
		'roles' => false,
		'site_access_count' => false
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
        'member_id' => 'memberId',
        'org_id' => 'orgId',
        'org_name' => 'orgName',
        'is_master_org' => 'isMasterOrg',
        'roles' => 'roles',
        'site_access_count' => 'siteAccessCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'member_id' => 'setMemberId',
        'org_id' => 'setOrgId',
        'org_name' => 'setOrgName',
        'is_master_org' => 'setIsMasterOrg',
        'roles' => 'setRoles',
        'site_access_count' => 'setSiteAccessCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'member_id' => 'getMemberId',
        'org_id' => 'getOrgId',
        'org_name' => 'getOrgName',
        'is_master_org' => 'getIsMasterOrg',
        'roles' => 'getRoles',
        'site_access_count' => 'getSiteAccessCount'
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
        $this->setIfExists('member_id', $data ?? [], null);
        $this->setIfExists('org_id', $data ?? [], null);
        $this->setIfExists('org_name', $data ?? [], null);
        $this->setIfExists('is_master_org', $data ?? [], null);
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('site_access_count', $data ?? [], null);
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

        if ($this->container['member_id'] === null) {
            $invalidProperties[] = "'member_id' can't be null";
        }
        if ($this->container['org_id'] === null) {
            $invalidProperties[] = "'org_id' can't be null";
        }
        if ($this->container['org_name'] === null) {
            $invalidProperties[] = "'org_name' can't be null";
        }
        if ($this->container['is_master_org'] === null) {
            $invalidProperties[] = "'is_master_org' can't be null";
        }
        if ($this->container['roles'] === null) {
            $invalidProperties[] = "'roles' can't be null";
        }
        if ($this->container['site_access_count'] === null) {
            $invalidProperties[] = "'site_access_count' can't be null";
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
     * Gets member_id
     *
     * @return string
     */
    public function getMemberId()
    {
        return $this->container['member_id'];
    }

    /**
     * Sets member_id
     *
     * @param string $member_id member_id
     *
     * @return self
     */
    public function setMemberId($member_id)
    {
        if (is_null($member_id)) {
            throw new \InvalidArgumentException('non-nullable member_id cannot be null');
        }
        $this->container['member_id'] = $member_id;

        return $this;
    }

    /**
     * Gets org_id
     *
     * @return string
     */
    public function getOrgId()
    {
        return $this->container['org_id'];
    }

    /**
     * Sets org_id
     *
     * @param string $org_id org_id
     *
     * @return self
     */
    public function setOrgId($org_id)
    {
        if (is_null($org_id)) {
            throw new \InvalidArgumentException('non-nullable org_id cannot be null');
        }
        $this->container['org_id'] = $org_id;

        return $this;
    }

    /**
     * Gets org_name
     *
     * @return string
     */
    public function getOrgName()
    {
        return $this->container['org_name'];
    }

    /**
     * Sets org_name
     *
     * @param string $org_name org_name
     *
     * @return self
     */
    public function setOrgName($org_name)
    {
        if (is_null($org_name)) {
            throw new \InvalidArgumentException('non-nullable org_name cannot be null');
        }
        $this->container['org_name'] = $org_name;

        return $this;
    }

    /**
     * Gets is_master_org
     *
     * @return bool
     */
    public function getIsMasterOrg()
    {
        return $this->container['is_master_org'];
    }

    /**
     * Sets is_master_org
     *
     * @param bool $is_master_org is_master_org
     *
     * @return self
     */
    public function setIsMasterOrg($is_master_org)
    {
        if (is_null($is_master_org)) {
            throw new \InvalidArgumentException('non-nullable is_master_org cannot be null');
        }
        $this->container['is_master_org'] = $is_master_org;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \Upmind\EnhanceSdk\Model\Role[]
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \Upmind\EnhanceSdk\Model\Role[] $roles roles
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
     * Gets site_access_count
     *
     * @return float
     */
    public function getSiteAccessCount()
    {
        return $this->container['site_access_count'];
    }

    /**
     * Sets site_access_count
     *
     * @param float $site_access_count site_access_count
     *
     * @return self
     */
    public function setSiteAccessCount($site_access_count)
    {
        if (is_null($site_access_count)) {
            throw new \InvalidArgumentException('non-nullable site_access_count cannot be null');
        }
        $this->container['site_access_count'] = $site_access_count;

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


