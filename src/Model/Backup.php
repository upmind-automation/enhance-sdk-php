<?php
/**
 * Backup
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
 * Backup Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Backup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Backup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'website_id' => 'string',
        'started_at' => 'string',
        'finished_at' => 'string',
        'snapshot_dir_name' => 'string',
        'size' => 'int',
        'home_dir_status' => '\Upmind\EnhanceSdk\Model\OperationStatus',
        'files_size' => 'int',
        'mysql_dbs_status' => '\Upmind\EnhanceSdk\Model\OperationStatus',
        'mysql_dbs_count' => 'int',
        'mysql_dbs_size' => 'int',
        'emails_status' => '\Upmind\EnhanceSdk\Model\OperationStatus',
        'emails_count' => 'int',
        'emails_size' => 'int',
        'kind' => '\Upmind\EnhanceSdk\Model\BackupKind'
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
        'website_id' => 'uuid',
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
        'snapshot_dir_name' => 'filename',
        'size' => null,
        'home_dir_status' => null,
        'files_size' => null,
        'mysql_dbs_status' => null,
        'mysql_dbs_count' => null,
        'mysql_dbs_size' => null,
        'emails_status' => null,
        'emails_count' => null,
        'emails_size' => null,
        'kind' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'website_id' => false,
		'started_at' => false,
		'finished_at' => false,
		'snapshot_dir_name' => false,
		'size' => false,
		'home_dir_status' => false,
		'files_size' => false,
		'mysql_dbs_status' => false,
		'mysql_dbs_count' => false,
		'mysql_dbs_size' => false,
		'emails_status' => false,
		'emails_count' => false,
		'emails_size' => false,
		'kind' => false
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
        'started_at' => 'startedAt',
        'finished_at' => 'finishedAt',
        'snapshot_dir_name' => 'snapshotDirName',
        'size' => 'size',
        'home_dir_status' => 'homeDirStatus',
        'files_size' => 'filesSize',
        'mysql_dbs_status' => 'mysqlDbsStatus',
        'mysql_dbs_count' => 'mysqlDbsCount',
        'mysql_dbs_size' => 'mysqlDbsSize',
        'emails_status' => 'emailsStatus',
        'emails_count' => 'emailsCount',
        'emails_size' => 'emailsSize',
        'kind' => 'kind'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'website_id' => 'setWebsiteId',
        'started_at' => 'setStartedAt',
        'finished_at' => 'setFinishedAt',
        'snapshot_dir_name' => 'setSnapshotDirName',
        'size' => 'setSize',
        'home_dir_status' => 'setHomeDirStatus',
        'files_size' => 'setFilesSize',
        'mysql_dbs_status' => 'setMysqlDbsStatus',
        'mysql_dbs_count' => 'setMysqlDbsCount',
        'mysql_dbs_size' => 'setMysqlDbsSize',
        'emails_status' => 'setEmailsStatus',
        'emails_count' => 'setEmailsCount',
        'emails_size' => 'setEmailsSize',
        'kind' => 'setKind'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'website_id' => 'getWebsiteId',
        'started_at' => 'getStartedAt',
        'finished_at' => 'getFinishedAt',
        'snapshot_dir_name' => 'getSnapshotDirName',
        'size' => 'getSize',
        'home_dir_status' => 'getHomeDirStatus',
        'files_size' => 'getFilesSize',
        'mysql_dbs_status' => 'getMysqlDbsStatus',
        'mysql_dbs_count' => 'getMysqlDbsCount',
        'mysql_dbs_size' => 'getMysqlDbsSize',
        'emails_status' => 'getEmailsStatus',
        'emails_count' => 'getEmailsCount',
        'emails_size' => 'getEmailsSize',
        'kind' => 'getKind'
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
        $this->setIfExists('website_id', $data ?? [], null);
        $this->setIfExists('started_at', $data ?? [], null);
        $this->setIfExists('finished_at', $data ?? [], null);
        $this->setIfExists('snapshot_dir_name', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('home_dir_status', $data ?? [], null);
        $this->setIfExists('files_size', $data ?? [], null);
        $this->setIfExists('mysql_dbs_status', $data ?? [], null);
        $this->setIfExists('mysql_dbs_count', $data ?? [], null);
        $this->setIfExists('mysql_dbs_size', $data ?? [], null);
        $this->setIfExists('emails_status', $data ?? [], null);
        $this->setIfExists('emails_count', $data ?? [], null);
        $this->setIfExists('emails_size', $data ?? [], null);
        $this->setIfExists('kind', $data ?? [], null);
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
        if ($this->container['started_at'] === null) {
            $invalidProperties[] = "'started_at' can't be null";
        }
        if ($this->container['snapshot_dir_name'] === null) {
            $invalidProperties[] = "'snapshot_dir_name' can't be null";
        }
        if ($this->container['kind'] === null) {
            $invalidProperties[] = "'kind' can't be null";
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
     * Gets started_at
     *
     * @return string
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param string $started_at started_at
     *
     * @return self
     */
    public function setStartedAt($started_at)
    {

        if (is_null($started_at)) {
            throw new \InvalidArgumentException('non-nullable started_at cannot be null');
        }

        $this->container['started_at'] = $started_at;

        return $this;
    }

    /**
     * Gets finished_at
     *
     * @return string|null
     */
    public function getFinishedAt()
    {
        return $this->container['finished_at'];
    }

    /**
     * Sets finished_at
     *
     * @param string|null $finished_at finished_at
     *
     * @return self
     */
    public function setFinishedAt($finished_at)
    {

        if (is_null($finished_at)) {
            throw new \InvalidArgumentException('non-nullable finished_at cannot be null');
        }

        $this->container['finished_at'] = $finished_at;

        return $this;
    }

    /**
     * Gets snapshot_dir_name
     *
     * @return string
     */
    public function getSnapshotDirName()
    {
        return $this->container['snapshot_dir_name'];
    }

    /**
     * Sets snapshot_dir_name
     *
     * @param string $snapshot_dir_name snapshot_dir_name
     *
     * @return self
     */
    public function setSnapshotDirName($snapshot_dir_name)
    {

        if (is_null($snapshot_dir_name)) {
            throw new \InvalidArgumentException('non-nullable snapshot_dir_name cannot be null');
        }

        $this->container['snapshot_dir_name'] = $snapshot_dir_name;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {

        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }

        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets home_dir_status
     *
     * @return \Upmind\EnhanceSdk\Model\OperationStatus|null
     */
    public function getHomeDirStatus()
    {
        return $this->container['home_dir_status'];
    }

    /**
     * Sets home_dir_status
     *
     * @param \Upmind\EnhanceSdk\Model\OperationStatus|null $home_dir_status home_dir_status
     *
     * @return self
     */
    public function setHomeDirStatus($home_dir_status)
    {

        if (is_null($home_dir_status)) {
            throw new \InvalidArgumentException('non-nullable home_dir_status cannot be null');
        }

        $this->container['home_dir_status'] = $home_dir_status;

        return $this;
    }

    /**
     * Gets files_size
     *
     * @return int|null
     */
    public function getFilesSize()
    {
        return $this->container['files_size'];
    }

    /**
     * Sets files_size
     *
     * @param int|null $files_size files_size
     *
     * @return self
     */
    public function setFilesSize($files_size)
    {

        if (is_null($files_size)) {
            throw new \InvalidArgumentException('non-nullable files_size cannot be null');
        }

        $this->container['files_size'] = $files_size;

        return $this;
    }

    /**
     * Gets mysql_dbs_status
     *
     * @return \Upmind\EnhanceSdk\Model\OperationStatus|null
     */
    public function getMysqlDbsStatus()
    {
        return $this->container['mysql_dbs_status'];
    }

    /**
     * Sets mysql_dbs_status
     *
     * @param \Upmind\EnhanceSdk\Model\OperationStatus|null $mysql_dbs_status mysql_dbs_status
     *
     * @return self
     */
    public function setMysqlDbsStatus($mysql_dbs_status)
    {

        if (is_null($mysql_dbs_status)) {
            throw new \InvalidArgumentException('non-nullable mysql_dbs_status cannot be null');
        }

        $this->container['mysql_dbs_status'] = $mysql_dbs_status;

        return $this;
    }

    /**
     * Gets mysql_dbs_count
     *
     * @return int|null
     */
    public function getMysqlDbsCount()
    {
        return $this->container['mysql_dbs_count'];
    }

    /**
     * Sets mysql_dbs_count
     *
     * @param int|null $mysql_dbs_count mysql_dbs_count
     *
     * @return self
     */
    public function setMysqlDbsCount($mysql_dbs_count)
    {

        if (is_null($mysql_dbs_count)) {
            throw new \InvalidArgumentException('non-nullable mysql_dbs_count cannot be null');
        }

        $this->container['mysql_dbs_count'] = $mysql_dbs_count;

        return $this;
    }

    /**
     * Gets mysql_dbs_size
     *
     * @return int|null
     */
    public function getMysqlDbsSize()
    {
        return $this->container['mysql_dbs_size'];
    }

    /**
     * Sets mysql_dbs_size
     *
     * @param int|null $mysql_dbs_size mysql_dbs_size
     *
     * @return self
     */
    public function setMysqlDbsSize($mysql_dbs_size)
    {

        if (is_null($mysql_dbs_size)) {
            throw new \InvalidArgumentException('non-nullable mysql_dbs_size cannot be null');
        }

        $this->container['mysql_dbs_size'] = $mysql_dbs_size;

        return $this;
    }

    /**
     * Gets emails_status
     *
     * @return \Upmind\EnhanceSdk\Model\OperationStatus|null
     */
    public function getEmailsStatus()
    {
        return $this->container['emails_status'];
    }

    /**
     * Sets emails_status
     *
     * @param \Upmind\EnhanceSdk\Model\OperationStatus|null $emails_status emails_status
     *
     * @return self
     */
    public function setEmailsStatus($emails_status)
    {

        if (is_null($emails_status)) {
            throw new \InvalidArgumentException('non-nullable emails_status cannot be null');
        }

        $this->container['emails_status'] = $emails_status;

        return $this;
    }

    /**
     * Gets emails_count
     *
     * @return int|null
     */
    public function getEmailsCount()
    {
        return $this->container['emails_count'];
    }

    /**
     * Sets emails_count
     *
     * @param int|null $emails_count emails_count
     *
     * @return self
     */
    public function setEmailsCount($emails_count)
    {

        if (is_null($emails_count)) {
            throw new \InvalidArgumentException('non-nullable emails_count cannot be null');
        }

        $this->container['emails_count'] = $emails_count;

        return $this;
    }

    /**
     * Gets emails_size
     *
     * @return int|null
     */
    public function getEmailsSize()
    {
        return $this->container['emails_size'];
    }

    /**
     * Sets emails_size
     *
     * @param int|null $emails_size emails_size
     *
     * @return self
     */
    public function setEmailsSize($emails_size)
    {

        if (is_null($emails_size)) {
            throw new \InvalidArgumentException('non-nullable emails_size cannot be null');
        }

        $this->container['emails_size'] = $emails_size;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return \Upmind\EnhanceSdk\Model\BackupKind
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param \Upmind\EnhanceSdk\Model\BackupKind $kind kind
     *
     * @return self
     */
    public function setKind($kind)
    {

        if (is_null($kind)) {
            throw new \InvalidArgumentException('non-nullable kind cannot be null');
        }

        $this->container['kind'] = $kind;

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


