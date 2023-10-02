<?php
/**
 * NewWebsiteApp
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
 * NewWebsiteApp Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NewWebsiteApp implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewWebsiteApp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'app' => '\Upmind\EnhanceSdk\Model\WebsiteAppKind',
        'version' => 'string',
        'path' => 'string',
        'admin_username' => 'string',
        'admin_password' => 'string',
        'admin_email' => 'string',
        'domain_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'app' => null,
        'version' => 'semver',
        'path' => 'path',
        'admin_username' => null,
        'admin_password' => null,
        'admin_email' => null,
        'domain_id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'app' => false,
		'version' => false,
		'path' => false,
		'admin_username' => false,
		'admin_password' => false,
		'admin_email' => false,
		'domain_id' => false
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
        'app' => 'app',
        'version' => 'version',
        'path' => 'path',
        'admin_username' => 'adminUsername',
        'admin_password' => 'adminPassword',
        'admin_email' => 'adminEmail',
        'domain_id' => 'domainId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app' => 'setApp',
        'version' => 'setVersion',
        'path' => 'setPath',
        'admin_username' => 'setAdminUsername',
        'admin_password' => 'setAdminPassword',
        'admin_email' => 'setAdminEmail',
        'domain_id' => 'setDomainId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app' => 'getApp',
        'version' => 'getVersion',
        'path' => 'getPath',
        'admin_username' => 'getAdminUsername',
        'admin_password' => 'getAdminPassword',
        'admin_email' => 'getAdminEmail',
        'domain_id' => 'getDomainId'
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
        $this->setIfExists('app', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('admin_username', $data ?? [], null);
        $this->setIfExists('admin_password', $data ?? [], null);
        $this->setIfExists('admin_email', $data ?? [], null);
        $this->setIfExists('domain_id', $data ?? [], null);
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

        if ($this->container['app'] === null) {
            $invalidProperties[] = "'app' can't be null";
        }
        if ($this->container['admin_username'] === null) {
            $invalidProperties[] = "'admin_username' can't be null";
        }
        if ($this->container['admin_password'] === null) {
            $invalidProperties[] = "'admin_password' can't be null";
        }
        if ($this->container['admin_email'] === null) {
            $invalidProperties[] = "'admin_email' can't be null";
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
     * Gets app
     *
     * @return \Upmind\EnhanceSdk\Model\WebsiteAppKind
     */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
     * Sets app
     *
     * @param \Upmind\EnhanceSdk\Model\WebsiteAppKind $app app
     *
     * @return self
     */
    public function setApp($app)
    {
        if (is_null($app)) {
            throw new \InvalidArgumentException('non-nullable app cannot be null');
        }
        $this->container['app'] = $app;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        if (is_null($path)) {
            throw new \InvalidArgumentException('non-nullable path cannot be null');
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets admin_username
     *
     * @return string
     */
    public function getAdminUsername()
    {
        return $this->container['admin_username'];
    }

    /**
     * Sets admin_username
     *
     * @param string $admin_username This username is going to be the username of the initial WP user with which the user can login to the WP admin. This is equivalent to going to `wp-admin/install.php` and performing the install from there.
     *
     * @return self
     */
    public function setAdminUsername($admin_username)
    {
        if (is_null($admin_username)) {
            throw new \InvalidArgumentException('non-nullable admin_username cannot be null');
        }
        $this->container['admin_username'] = $admin_username;

        return $this;
    }

    /**
     * Gets admin_password
     *
     * @return string
     */
    public function getAdminPassword()
    {
        return $this->container['admin_password'];
    }

    /**
     * Sets admin_password
     *
     * @param string $admin_password Complements the admin username. Provide unhashed password.
     *
     * @return self
     */
    public function setAdminPassword($admin_password)
    {
        if (is_null($admin_password)) {
            throw new \InvalidArgumentException('non-nullable admin_password cannot be null');
        }
        $this->container['admin_password'] = $admin_password;

        return $this;
    }

    /**
     * Gets admin_email
     *
     * @return string
     */
    public function getAdminEmail()
    {
        return $this->container['admin_email'];
    }

    /**
     * Sets admin_email
     *
     * @param string $admin_email Sets the admin email address, required by some applications.
     *
     * @return self
     */
    public function setAdminEmail($admin_email)
    {
        if (is_null($admin_email)) {
            throw new \InvalidArgumentException('non-nullable admin_email cannot be null');
        }
        $this->container['admin_email'] = $admin_email;

        return $this;
    }

    /**
     * Gets domain_id
     *
     * @return string|null
     */
    public function getDomainId()
    {
        return $this->container['domain_id'];
    }

    /**
     * Sets domain_id
     *
     * @param string|null $domain_id Install on a specific domain within this website.  Will default to use the primary domain.
     *
     * @return self
     */
    public function setDomainId($domain_id)
    {
        if (is_null($domain_id)) {
            throw new \InvalidArgumentException('non-nullable domain_id cannot be null');
        }
        $this->container['domain_id'] = $domain_id;

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


