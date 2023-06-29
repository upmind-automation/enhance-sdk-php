<?php
/**
 * Org
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
 * The version of the OpenAPI document: 9.4.0
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
 * Org Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Org implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Org';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'parent_id' => 'string',
        'name' => 'string',
        'status' => '\Upmind\EnhanceSdk\Model\Status',
        'suspended_by' => 'string',
        'owner' => 'string',
        'owner_email' => 'string',
        'owner_id' => 'string',
        'owner_login_id' => 'string',
        'subscriptions_count' => 'int',
        'websites_count' => 'int',
        'created_at' => 'string',
        'owner_avatar_path' => 'string',
        'locale' => '\Upmind\EnhanceSdk\Model\CPLocale'
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
        'parent_id' => 'uuid',
        'name' => null,
        'status' => null,
        'suspended_by' => 'uuid',
        'owner' => null,
        'owner_email' => 'email',
        'owner_id' => 'uuid',
        'owner_login_id' => 'uuid',
        'subscriptions_count' => null,
        'websites_count' => null,
        'created_at' => null,
        'owner_avatar_path' => 'path',
        'locale' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'parent_id' => false,
		'name' => false,
		'status' => false,
		'suspended_by' => false,
		'owner' => false,
		'owner_email' => false,
		'owner_id' => false,
		'owner_login_id' => false,
		'subscriptions_count' => false,
		'websites_count' => false,
		'created_at' => false,
		'owner_avatar_path' => false,
		'locale' => false
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
        'parent_id' => 'parentId',
        'name' => 'name',
        'status' => 'status',
        'suspended_by' => 'suspendedBy',
        'owner' => 'owner',
        'owner_email' => 'ownerEmail',
        'owner_id' => 'ownerId',
        'owner_login_id' => 'ownerLoginId',
        'subscriptions_count' => 'subscriptionsCount',
        'websites_count' => 'websitesCount',
        'created_at' => 'createdAt',
        'owner_avatar_path' => 'ownerAvatarPath',
        'locale' => 'locale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'parent_id' => 'setParentId',
        'name' => 'setName',
        'status' => 'setStatus',
        'suspended_by' => 'setSuspendedBy',
        'owner' => 'setOwner',
        'owner_email' => 'setOwnerEmail',
        'owner_id' => 'setOwnerId',
        'owner_login_id' => 'setOwnerLoginId',
        'subscriptions_count' => 'setSubscriptionsCount',
        'websites_count' => 'setWebsitesCount',
        'created_at' => 'setCreatedAt',
        'owner_avatar_path' => 'setOwnerAvatarPath',
        'locale' => 'setLocale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'parent_id' => 'getParentId',
        'name' => 'getName',
        'status' => 'getStatus',
        'suspended_by' => 'getSuspendedBy',
        'owner' => 'getOwner',
        'owner_email' => 'getOwnerEmail',
        'owner_id' => 'getOwnerId',
        'owner_login_id' => 'getOwnerLoginId',
        'subscriptions_count' => 'getSubscriptionsCount',
        'websites_count' => 'getWebsitesCount',
        'created_at' => 'getCreatedAt',
        'owner_avatar_path' => 'getOwnerAvatarPath',
        'locale' => 'getLocale'
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
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('suspended_by', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
        $this->setIfExists('owner_email', $data ?? [], null);
        $this->setIfExists('owner_id', $data ?? [], null);
        $this->setIfExists('owner_login_id', $data ?? [], null);
        $this->setIfExists('subscriptions_count', $data ?? [], null);
        $this->setIfExists('websites_count', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('owner_avatar_path', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['subscriptions_count'] === null) {
            $invalidProperties[] = "'subscriptions_count' can't be null";
        }
        if ($this->container['websites_count'] === null) {
            $invalidProperties[] = "'websites_count' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
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
     * Gets parent_id
     *
     * @return string|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string|null $parent_id parent_id
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        if (is_null($parent_id)) {
            throw new \InvalidArgumentException('non-nullable parent_id cannot be null');
        }
        $this->container['parent_id'] = $parent_id;

        return $this;
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
     * Gets owner
     *
     * @return string|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string|null $owner owner
     *
     * @return self
     */
    public function setOwner($owner)
    {
        if (is_null($owner)) {
            throw new \InvalidArgumentException('non-nullable owner cannot be null');
        }
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets owner_email
     *
     * @return string|null
     */
    public function getOwnerEmail()
    {
        return $this->container['owner_email'];
    }

    /**
     * Sets owner_email
     *
     * @param string|null $owner_email owner_email
     *
     * @return self
     */
    public function setOwnerEmail($owner_email)
    {
        if (is_null($owner_email)) {
            throw new \InvalidArgumentException('non-nullable owner_email cannot be null');
        }
        $this->container['owner_email'] = $owner_email;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string|null $owner_id owner_id
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {
        if (is_null($owner_id)) {
            throw new \InvalidArgumentException('non-nullable owner_id cannot be null');
        }
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets owner_login_id
     *
     * @return string|null
     */
    public function getOwnerLoginId()
    {
        return $this->container['owner_login_id'];
    }

    /**
     * Sets owner_login_id
     *
     * @param string|null $owner_login_id owner_login_id
     *
     * @return self
     */
    public function setOwnerLoginId($owner_login_id)
    {
        if (is_null($owner_login_id)) {
            throw new \InvalidArgumentException('non-nullable owner_login_id cannot be null');
        }
        $this->container['owner_login_id'] = $owner_login_id;

        return $this;
    }

    /**
     * Gets subscriptions_count
     *
     * @return int
     */
    public function getSubscriptionsCount()
    {
        return $this->container['subscriptions_count'];
    }

    /**
     * Sets subscriptions_count
     *
     * @param int $subscriptions_count subscriptions_count
     *
     * @return self
     */
    public function setSubscriptionsCount($subscriptions_count)
    {
        if (is_null($subscriptions_count)) {
            throw new \InvalidArgumentException('non-nullable subscriptions_count cannot be null');
        }
        $this->container['subscriptions_count'] = $subscriptions_count;

        return $this;
    }

    /**
     * Gets websites_count
     *
     * @return int
     */
    public function getWebsitesCount()
    {
        return $this->container['websites_count'];
    }

    /**
     * Sets websites_count
     *
     * @param int $websites_count websites_count
     *
     * @return self
     */
    public function setWebsitesCount($websites_count)
    {
        if (is_null($websites_count)) {
            throw new \InvalidArgumentException('non-nullable websites_count cannot be null');
        }
        $this->container['websites_count'] = $websites_count;

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
     * Gets owner_avatar_path
     *
     * @return string|null
     */
    public function getOwnerAvatarPath()
    {
        return $this->container['owner_avatar_path'];
    }

    /**
     * Sets owner_avatar_path
     *
     * @param string|null $owner_avatar_path owner_avatar_path
     *
     * @return self
     */
    public function setOwnerAvatarPath($owner_avatar_path)
    {
        if (is_null($owner_avatar_path)) {
            throw new \InvalidArgumentException('non-nullable owner_avatar_path cannot be null');
        }
        $this->container['owner_avatar_path'] = $owner_avatar_path;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return \Upmind\EnhanceSdk\Model\CPLocale
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param \Upmind\EnhanceSdk\Model\CPLocale $locale locale
     *
     * @return self
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }
        $this->container['locale'] = $locale;

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


