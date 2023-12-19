<?php
/**
 * CgroupLimits
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
 * CgroupLimits Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CgroupLimits implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CgroupLimits';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'nproc' => 'float',
        'memory_limit' => 'float',
        'iops' => 'float',
        'io_bandwidth' => 'float',
        'virtual_cpus' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'nproc' => null,
        'memory_limit' => null,
        'iops' => null,
        'io_bandwidth' => null,
        'virtual_cpus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'nproc' => true,
		'memory_limit' => true,
		'iops' => true,
		'io_bandwidth' => true,
		'virtual_cpus' => true
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
        'nproc' => 'nproc',
        'memory_limit' => 'memoryLimit',
        'iops' => 'iops',
        'io_bandwidth' => 'ioBandwidth',
        'virtual_cpus' => 'virtualCpus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nproc' => 'setNproc',
        'memory_limit' => 'setMemoryLimit',
        'iops' => 'setIops',
        'io_bandwidth' => 'setIoBandwidth',
        'virtual_cpus' => 'setVirtualCpus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nproc' => 'getNproc',
        'memory_limit' => 'getMemoryLimit',
        'iops' => 'getIops',
        'io_bandwidth' => 'getIoBandwidth',
        'virtual_cpus' => 'getVirtualCpus'
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
        $this->setIfExists('nproc', $data ?? [], null);
        $this->setIfExists('memory_limit', $data ?? [], null);
        $this->setIfExists('iops', $data ?? [], null);
        $this->setIfExists('io_bandwidth', $data ?? [], null);
        $this->setIfExists('virtual_cpus', $data ?? [], null);
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

        if ($this->container['nproc'] === null) {
            $invalidProperties[] = "'nproc' can't be null";
        }
        if ($this->container['memory_limit'] === null) {
            $invalidProperties[] = "'memory_limit' can't be null";
        }
        if ($this->container['iops'] === null) {
            $invalidProperties[] = "'iops' can't be null";
        }
        if ($this->container['io_bandwidth'] === null) {
            $invalidProperties[] = "'io_bandwidth' can't be null";
        }
        if ($this->container['virtual_cpus'] === null) {
            $invalidProperties[] = "'virtual_cpus' can't be null";
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
     * Gets nproc
     *
     * @return float
     */
    public function getNproc()
    {
        return $this->container['nproc'];
    }

    /**
     * Sets nproc
     *
     * @param float $nproc nproc
     *
     * @return self
     */
    public function setNproc($nproc)
    {
        if (is_null($nproc)) {
            array_push($this->openAPINullablesSetToNull, 'nproc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nproc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nproc'] = $nproc;

        return $this;
    }

    /**
     * Gets memory_limit
     *
     * @return float
     */
    public function getMemoryLimit()
    {
        return $this->container['memory_limit'];
    }

    /**
     * Sets memory_limit
     *
     * @param float $memory_limit memory_limit
     *
     * @return self
     */
    public function setMemoryLimit($memory_limit)
    {
        if (is_null($memory_limit)) {
            array_push($this->openAPINullablesSetToNull, 'memory_limit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('memory_limit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['memory_limit'] = $memory_limit;

        return $this;
    }

    /**
     * Gets iops
     *
     * @return float
     */
    public function getIops()
    {
        return $this->container['iops'];
    }

    /**
     * Sets iops
     *
     * @param float $iops iops
     *
     * @return self
     */
    public function setIops($iops)
    {
        if (is_null($iops)) {
            array_push($this->openAPINullablesSetToNull, 'iops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('iops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['iops'] = $iops;

        return $this;
    }

    /**
     * Gets io_bandwidth
     *
     * @return float
     */
    public function getIoBandwidth()
    {
        return $this->container['io_bandwidth'];
    }

    /**
     * Sets io_bandwidth
     *
     * @param float $io_bandwidth io_bandwidth
     *
     * @return self
     */
    public function setIoBandwidth($io_bandwidth)
    {
        if (is_null($io_bandwidth)) {
            array_push($this->openAPINullablesSetToNull, 'io_bandwidth');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('io_bandwidth', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['io_bandwidth'] = $io_bandwidth;

        return $this;
    }

    /**
     * Gets virtual_cpus
     *
     * @return float
     */
    public function getVirtualCpus()
    {
        return $this->container['virtual_cpus'];
    }

    /**
     * Sets virtual_cpus
     *
     * @param float $virtual_cpus virtual_cpus
     *
     * @return self
     */
    public function setVirtualCpus($virtual_cpus)
    {
        if (is_null($virtual_cpus)) {
            array_push($this->openAPINullablesSetToNull, 'virtual_cpus');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('virtual_cpus', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['virtual_cpus'] = $virtual_cpus;

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


