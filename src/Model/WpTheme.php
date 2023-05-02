<?php
/**
 * WpTheme
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
 * The version of the OpenAPI document: 9.1.1
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
 * WpTheme Class Doc Comment
 *
 * @category Class
 * @description Describes the theme directory name and additional theme information.
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WpTheme implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WpTheme';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dir_name' => 'string',
        'name' => 'string',
        'is_active' => 'bool',
        'uri' => 'string',
        'description' => 'string',
        'version' => 'string',
        'min_wp_version' => 'string',
        'min_php_version' => 'string',
        'author' => 'string',
        'author_uri' => 'string',
        'license' => 'string',
        'license_uri' => 'string',
        'text_domain' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dir_name' => null,
        'name' => null,
        'is_active' => null,
        'uri' => 'url',
        'description' => null,
        'version' => null,
        'min_wp_version' => 'semver',
        'min_php_version' => 'semver',
        'author' => null,
        'author_uri' => 'url',
        'license' => null,
        'license_uri' => 'url',
        'text_domain' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dir_name' => false,
		'name' => false,
		'is_active' => false,
		'uri' => false,
		'description' => false,
		'version' => false,
		'min_wp_version' => false,
		'min_php_version' => false,
		'author' => false,
		'author_uri' => false,
		'license' => false,
		'license_uri' => false,
		'text_domain' => false
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
        'dir_name' => 'dirName',
        'name' => 'name',
        'is_active' => 'isActive',
        'uri' => 'uri',
        'description' => 'description',
        'version' => 'version',
        'min_wp_version' => 'minWpVersion',
        'min_php_version' => 'minPhpVersion',
        'author' => 'author',
        'author_uri' => 'authorUri',
        'license' => 'license',
        'license_uri' => 'licenseUri',
        'text_domain' => 'textDomain'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dir_name' => 'setDirName',
        'name' => 'setName',
        'is_active' => 'setIsActive',
        'uri' => 'setUri',
        'description' => 'setDescription',
        'version' => 'setVersion',
        'min_wp_version' => 'setMinWpVersion',
        'min_php_version' => 'setMinPhpVersion',
        'author' => 'setAuthor',
        'author_uri' => 'setAuthorUri',
        'license' => 'setLicense',
        'license_uri' => 'setLicenseUri',
        'text_domain' => 'setTextDomain'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dir_name' => 'getDirName',
        'name' => 'getName',
        'is_active' => 'getIsActive',
        'uri' => 'getUri',
        'description' => 'getDescription',
        'version' => 'getVersion',
        'min_wp_version' => 'getMinWpVersion',
        'min_php_version' => 'getMinPhpVersion',
        'author' => 'getAuthor',
        'author_uri' => 'getAuthorUri',
        'license' => 'getLicense',
        'license_uri' => 'getLicenseUri',
        'text_domain' => 'getTextDomain'
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
        $this->setIfExists('dir_name', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('uri', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('min_wp_version', $data ?? [], null);
        $this->setIfExists('min_php_version', $data ?? [], null);
        $this->setIfExists('author', $data ?? [], null);
        $this->setIfExists('author_uri', $data ?? [], null);
        $this->setIfExists('license', $data ?? [], null);
        $this->setIfExists('license_uri', $data ?? [], null);
        $this->setIfExists('text_domain', $data ?? [], null);
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

        if ($this->container['dir_name'] === null) {
            $invalidProperties[] = "'dir_name' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets dir_name
     *
     * @return string
     */
    public function getDirName()
    {
        return $this->container['dir_name'];
    }

    /**
     * Sets dir_name
     *
     * @param string $dir_name dir_name
     *
     * @return self
     */
    public function setDirName($dir_name)
    {
        if (is_null($dir_name)) {
            throw new \InvalidArgumentException('non-nullable dir_name cannot be null');
        }
        $this->container['dir_name'] = $dir_name;

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
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return string|null
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string|null $uri uri
     *
     * @return self
     */
    public function setUri($uri)
    {
        if (is_null($uri)) {
            throw new \InvalidArgumentException('non-nullable uri cannot be null');
        }
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

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
     * Gets min_wp_version
     *
     * @return string|null
     */
    public function getMinWpVersion()
    {
        return $this->container['min_wp_version'];
    }

    /**
     * Sets min_wp_version
     *
     * @param string|null $min_wp_version min_wp_version
     *
     * @return self
     */
    public function setMinWpVersion($min_wp_version)
    {
        if (is_null($min_wp_version)) {
            throw new \InvalidArgumentException('non-nullable min_wp_version cannot be null');
        }
        $this->container['min_wp_version'] = $min_wp_version;

        return $this;
    }

    /**
     * Gets min_php_version
     *
     * @return string|null
     */
    public function getMinPhpVersion()
    {
        return $this->container['min_php_version'];
    }

    /**
     * Sets min_php_version
     *
     * @param string|null $min_php_version min_php_version
     *
     * @return self
     */
    public function setMinPhpVersion($min_php_version)
    {
        if (is_null($min_php_version)) {
            throw new \InvalidArgumentException('non-nullable min_php_version cannot be null');
        }
        $this->container['min_php_version'] = $min_php_version;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string|null $author author
     *
     * @return self
     */
    public function setAuthor($author)
    {
        if (is_null($author)) {
            throw new \InvalidArgumentException('non-nullable author cannot be null');
        }
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets author_uri
     *
     * @return string|null
     */
    public function getAuthorUri()
    {
        return $this->container['author_uri'];
    }

    /**
     * Sets author_uri
     *
     * @param string|null $author_uri author_uri
     *
     * @return self
     */
    public function setAuthorUri($author_uri)
    {
        if (is_null($author_uri)) {
            throw new \InvalidArgumentException('non-nullable author_uri cannot be null');
        }
        $this->container['author_uri'] = $author_uri;

        return $this;
    }

    /**
     * Gets license
     *
     * @return string|null
     */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
     * Sets license
     *
     * @param string|null $license license
     *
     * @return self
     */
    public function setLicense($license)
    {
        if (is_null($license)) {
            throw new \InvalidArgumentException('non-nullable license cannot be null');
        }
        $this->container['license'] = $license;

        return $this;
    }

    /**
     * Gets license_uri
     *
     * @return string|null
     */
    public function getLicenseUri()
    {
        return $this->container['license_uri'];
    }

    /**
     * Sets license_uri
     *
     * @param string|null $license_uri license_uri
     *
     * @return self
     */
    public function setLicenseUri($license_uri)
    {
        if (is_null($license_uri)) {
            throw new \InvalidArgumentException('non-nullable license_uri cannot be null');
        }
        $this->container['license_uri'] = $license_uri;

        return $this;
    }

    /**
     * Gets text_domain
     *
     * @return string|null
     */
    public function getTextDomain()
    {
        return $this->container['text_domain'];
    }

    /**
     * Sets text_domain
     *
     * @param string|null $text_domain text_domain
     *
     * @return self
     */
    public function setTextDomain($text_domain)
    {
        if (is_null($text_domain)) {
            throw new \InvalidArgumentException('non-nullable text_domain cannot be null');
        }
        $this->container['text_domain'] = $text_domain;

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


