<?php
/**
 * Email
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
 * The version of the OpenAPI document: 8.0.0
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
 * Email Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Email implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Email';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'website_id' => 'string',
        'mailbox_name' => 'string',
        'address' => 'string',
        'aliases' => 'string[]',
        'mailbox_id' => 'string',
        'status' => '\Upmind\EnhanceSdk\Model\EmailStatus',
        'quota' => '\Upmind\EnhanceSdk\Model\Quota',
        'autoresponders_count' => 'int',
        'forwarders_count' => 'int',
        'created_at' => 'string',
        'email_kind' => 'string'
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
        'website_id' => 'uuid',
        'mailbox_name' => null,
        'address' => null,
        'aliases' => null,
        'mailbox_id' => 'uuid',
        'status' => null,
        'quota' => null,
        'autoresponders_count' => null,
        'forwarders_count' => null,
        'created_at' => null,
        'email_kind' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'website_id' => false,
		'mailbox_name' => false,
		'address' => false,
		'aliases' => false,
		'mailbox_id' => false,
		'status' => false,
		'quota' => false,
		'autoresponders_count' => false,
		'forwarders_count' => false,
		'created_at' => false,
		'email_kind' => false
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
        'website_id' => 'websiteId',
        'mailbox_name' => 'mailboxName',
        'address' => 'address',
        'aliases' => 'aliases',
        'mailbox_id' => 'mailboxId',
        'status' => 'status',
        'quota' => 'quota',
        'autoresponders_count' => 'autorespondersCount',
        'forwarders_count' => 'forwardersCount',
        'created_at' => 'createdAt',
        'email_kind' => 'emailKind'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'website_id' => 'setWebsiteId',
        'mailbox_name' => 'setMailboxName',
        'address' => 'setAddress',
        'aliases' => 'setAliases',
        'mailbox_id' => 'setMailboxId',
        'status' => 'setStatus',
        'quota' => 'setQuota',
        'autoresponders_count' => 'setAutorespondersCount',
        'forwarders_count' => 'setForwardersCount',
        'created_at' => 'setCreatedAt',
        'email_kind' => 'setEmailKind'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'website_id' => 'getWebsiteId',
        'mailbox_name' => 'getMailboxName',
        'address' => 'getAddress',
        'aliases' => 'getAliases',
        'mailbox_id' => 'getMailboxId',
        'status' => 'getStatus',
        'quota' => 'getQuota',
        'autoresponders_count' => 'getAutorespondersCount',
        'forwarders_count' => 'getForwardersCount',
        'created_at' => 'getCreatedAt',
        'email_kind' => 'getEmailKind'
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

    public const EMAIL_KIND_NORMAL = 'normal';
    public const EMAIL_KIND_INTERNAL = 'internal';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEmailKindAllowableValues()
    {
        return [
            self::EMAIL_KIND_NORMAL,
            self::EMAIL_KIND_INTERNAL,
        ];
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
        $this->setIfExists('website_id', $data ?? [], null);
        $this->setIfExists('mailbox_name', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('aliases', $data ?? [], null);
        $this->setIfExists('mailbox_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('quota', $data ?? [], null);
        $this->setIfExists('autoresponders_count', $data ?? [], null);
        $this->setIfExists('forwarders_count', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('email_kind', $data ?? [], null);
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
        if ($this->container['website_id'] === null) {
            $invalidProperties[] = "'website_id' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['aliases'] === null) {
            $invalidProperties[] = "'aliases' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['autoresponders_count'] === null) {
            $invalidProperties[] = "'autoresponders_count' can't be null";
        }
        if ($this->container['forwarders_count'] === null) {
            $invalidProperties[] = "'forwarders_count' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['email_kind'] === null) {
            $invalidProperties[] = "'email_kind' can't be null";
        }
        $allowedValues = $this->getEmailKindAllowableValues();
        if (!is_null($this->container['email_kind']) && !in_array($this->container['email_kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'email_kind', must be one of '%s'",
                $this->container['email_kind'],
                implode("', '", $allowedValues)
            );
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
     * Gets website_id
     *
     * @return string
     */
    public function getWebsiteId()
    {
        return $this->container['website_id'];
    }

    /**
     * Sets website_id
     *
     * @param string $website_id website_id
     *
     * @return self
     */
    public function setWebsiteId($website_id)
    {

        if (is_null($website_id)) {
            throw new \InvalidArgumentException('non-nullable website_id cannot be null');
        }

        $this->container['website_id'] = $website_id;

        return $this;
    }

    /**
     * Gets mailbox_name
     *
     * @return string|null
     */
    public function getMailboxName()
    {
        return $this->container['mailbox_name'];
    }

    /**
     * Sets mailbox_name
     *
     * @param string|null $mailbox_name mailbox_name
     *
     * @return self
     */
    public function setMailboxName($mailbox_name)
    {

        if (is_null($mailbox_name)) {
            throw new \InvalidArgumentException('non-nullable mailbox_name cannot be null');
        }

        $this->container['mailbox_name'] = $mailbox_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return self
     */
    public function setAddress($address)
    {

        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }

        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets aliases
     *
     * @return string[]
     */
    public function getAliases()
    {
        return $this->container['aliases'];
    }

    /**
     * Sets aliases
     *
     * @param string[] $aliases aliases
     *
     * @return self
     */
    public function setAliases($aliases)
    {

        if (is_null($aliases)) {
            throw new \InvalidArgumentException('non-nullable aliases cannot be null');
        }

        $this->container['aliases'] = $aliases;

        return $this;
    }

    /**
     * Gets mailbox_id
     *
     * @return string|null
     */
    public function getMailboxId()
    {
        return $this->container['mailbox_id'];
    }

    /**
     * Sets mailbox_id
     *
     * @param string|null $mailbox_id mailbox_id
     *
     * @return self
     */
    public function setMailboxId($mailbox_id)
    {

        if (is_null($mailbox_id)) {
            throw new \InvalidArgumentException('non-nullable mailbox_id cannot be null');
        }

        $this->container['mailbox_id'] = $mailbox_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Upmind\EnhanceSdk\Model\EmailStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Upmind\EnhanceSdk\Model\EmailStatus $status status
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
     * Gets quota
     *
     * @return \Upmind\EnhanceSdk\Model\Quota|null
     */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
     * Sets quota
     *
     * @param \Upmind\EnhanceSdk\Model\Quota|null $quota quota
     *
     * @return self
     */
    public function setQuota($quota)
    {

        if (is_null($quota)) {
            throw new \InvalidArgumentException('non-nullable quota cannot be null');
        }

        $this->container['quota'] = $quota;

        return $this;
    }

    /**
     * Gets autoresponders_count
     *
     * @return int
     */
    public function getAutorespondersCount()
    {
        return $this->container['autoresponders_count'];
    }

    /**
     * Sets autoresponders_count
     *
     * @param int $autoresponders_count autoresponders_count
     *
     * @return self
     */
    public function setAutorespondersCount($autoresponders_count)
    {

        if (is_null($autoresponders_count)) {
            throw new \InvalidArgumentException('non-nullable autoresponders_count cannot be null');
        }

        $this->container['autoresponders_count'] = $autoresponders_count;

        return $this;
    }

    /**
     * Gets forwarders_count
     *
     * @return int
     */
    public function getForwardersCount()
    {
        return $this->container['forwarders_count'];
    }

    /**
     * Sets forwarders_count
     *
     * @param int $forwarders_count forwarders_count
     *
     * @return self
     */
    public function setForwardersCount($forwarders_count)
    {

        if (is_null($forwarders_count)) {
            throw new \InvalidArgumentException('non-nullable forwarders_count cannot be null');
        }

        $this->container['forwarders_count'] = $forwarders_count;

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
     * Gets email_kind
     *
     * @return string
     */
    public function getEmailKind()
    {
        return $this->container['email_kind'];
    }

    /**
     * Sets email_kind
     *
     * @param string $email_kind email_kind
     *
     * @return self
     */
    public function setEmailKind($email_kind)
    {
        $allowedValues = $this->getEmailKindAllowableValues();
        if (!in_array($email_kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'email_kind', must be one of '%s'",
                    $email_kind,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($email_kind)) {
            throw new \InvalidArgumentException('non-nullable email_kind cannot be null');
        }

        $this->container['email_kind'] = $email_kind;

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


