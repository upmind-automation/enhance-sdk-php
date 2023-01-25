<?php
/**
 * SetupResult
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
 * SetupResult Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SetupResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SetupResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'login_id' => 'string',
        'member_id' => 'string',
        'org_id' => 'string',
        'server_id' => 'string',
        'control_panel_website_id' => 'string',
        'php_my_admin_website_id' => 'string',
        'roundcube_website_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'login_id' => 'uuid',
        'member_id' => 'uuid',
        'org_id' => 'uuid',
        'server_id' => 'uuid',
        'control_panel_website_id' => 'uuid',
        'php_my_admin_website_id' => 'uuid',
        'roundcube_website_id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'login_id' => false,
		'member_id' => false,
		'org_id' => false,
		'server_id' => false,
		'control_panel_website_id' => false,
		'php_my_admin_website_id' => false,
		'roundcube_website_id' => false
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
        'login_id' => 'loginId',
        'member_id' => 'memberId',
        'org_id' => 'orgId',
        'server_id' => 'serverId',
        'control_panel_website_id' => 'controlPanelWebsiteId',
        'php_my_admin_website_id' => 'phpMyAdminWebsiteId',
        'roundcube_website_id' => 'roundcubeWebsiteId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'login_id' => 'setLoginId',
        'member_id' => 'setMemberId',
        'org_id' => 'setOrgId',
        'server_id' => 'setServerId',
        'control_panel_website_id' => 'setControlPanelWebsiteId',
        'php_my_admin_website_id' => 'setPhpMyAdminWebsiteId',
        'roundcube_website_id' => 'setRoundcubeWebsiteId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'login_id' => 'getLoginId',
        'member_id' => 'getMemberId',
        'org_id' => 'getOrgId',
        'server_id' => 'getServerId',
        'control_panel_website_id' => 'getControlPanelWebsiteId',
        'php_my_admin_website_id' => 'getPhpMyAdminWebsiteId',
        'roundcube_website_id' => 'getRoundcubeWebsiteId'
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
        $this->setIfExists('login_id', $data ?? [], null);
        $this->setIfExists('member_id', $data ?? [], null);
        $this->setIfExists('org_id', $data ?? [], null);
        $this->setIfExists('server_id', $data ?? [], null);
        $this->setIfExists('control_panel_website_id', $data ?? [], null);
        $this->setIfExists('php_my_admin_website_id', $data ?? [], null);
        $this->setIfExists('roundcube_website_id', $data ?? [], null);
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

        if ($this->container['login_id'] === null) {
            $invalidProperties[] = "'login_id' can't be null";
        }
        if ($this->container['member_id'] === null) {
            $invalidProperties[] = "'member_id' can't be null";
        }
        if ($this->container['org_id'] === null) {
            $invalidProperties[] = "'org_id' can't be null";
        }
        if ($this->container['server_id'] === null) {
            $invalidProperties[] = "'server_id' can't be null";
        }
        if ($this->container['control_panel_website_id'] === null) {
            $invalidProperties[] = "'control_panel_website_id' can't be null";
        }
        if ($this->container['php_my_admin_website_id'] === null) {
            $invalidProperties[] = "'php_my_admin_website_id' can't be null";
        }
        if ($this->container['roundcube_website_id'] === null) {
            $invalidProperties[] = "'roundcube_website_id' can't be null";
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
     * Gets login_id
     *
     * @return string
     */
    public function getLoginId()
    {
        return $this->container['login_id'];
    }

    /**
     * Sets login_id
     *
     * @param string $login_id login_id
     *
     * @return self
     */
    public function setLoginId($login_id)
    {

        if (is_null($login_id)) {
            throw new \InvalidArgumentException('non-nullable login_id cannot be null');
        }

        $this->container['login_id'] = $login_id;

        return $this;
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
     * Gets server_id
     *
     * @return string
     */
    public function getServerId()
    {
        return $this->container['server_id'];
    }

    /**
     * Sets server_id
     *
     * @param string $server_id server_id
     *
     * @return self
     */
    public function setServerId($server_id)
    {

        if (is_null($server_id)) {
            throw new \InvalidArgumentException('non-nullable server_id cannot be null');
        }

        $this->container['server_id'] = $server_id;

        return $this;
    }

    /**
     * Gets control_panel_website_id
     *
     * @return string
     */
    public function getControlPanelWebsiteId()
    {
        return $this->container['control_panel_website_id'];
    }

    /**
     * Sets control_panel_website_id
     *
     * @param string $control_panel_website_id control_panel_website_id
     *
     * @return self
     */
    public function setControlPanelWebsiteId($control_panel_website_id)
    {

        if (is_null($control_panel_website_id)) {
            throw new \InvalidArgumentException('non-nullable control_panel_website_id cannot be null');
        }

        $this->container['control_panel_website_id'] = $control_panel_website_id;

        return $this;
    }

    /**
     * Gets php_my_admin_website_id
     *
     * @return string
     */
    public function getPhpMyAdminWebsiteId()
    {
        return $this->container['php_my_admin_website_id'];
    }

    /**
     * Sets php_my_admin_website_id
     *
     * @param string $php_my_admin_website_id php_my_admin_website_id
     *
     * @return self
     */
    public function setPhpMyAdminWebsiteId($php_my_admin_website_id)
    {

        if (is_null($php_my_admin_website_id)) {
            throw new \InvalidArgumentException('non-nullable php_my_admin_website_id cannot be null');
        }

        $this->container['php_my_admin_website_id'] = $php_my_admin_website_id;

        return $this;
    }

    /**
     * Gets roundcube_website_id
     *
     * @return string
     */
    public function getRoundcubeWebsiteId()
    {
        return $this->container['roundcube_website_id'];
    }

    /**
     * Sets roundcube_website_id
     *
     * @param string $roundcube_website_id roundcube_website_id
     *
     * @return self
     */
    public function setRoundcubeWebsiteId($roundcube_website_id)
    {

        if (is_null($roundcube_website_id)) {
            throw new \InvalidArgumentException('non-nullable roundcube_website_id cannot be null');
        }

        $this->container['roundcube_website_id'] = $roundcube_website_id;

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


