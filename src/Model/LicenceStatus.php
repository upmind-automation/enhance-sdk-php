<?php
/**
 * LicenceStatus
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
use \Upmind\EnhanceSdk\ObjectSerializer;

/**
 * LicenceStatus Class Doc Comment
 *
 * @category Class
 * @description Enhance Licence status
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LicenceStatus
{
    /**
     * Possible values of this enum
     */
    public const ACTIVE = 'active';

    public const CANCELLED = 'cancelled';

    public const SUSPENDED = 'suspended';

    public const TRIAL = 'trial';

    public const UNPAID = 'unpaid';

    public const UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVE,
            self::CANCELLED,
            self::SUSPENDED,
            self::TRIAL,
            self::UNPAID,
            self::UNKNOWN
        ];
    }
}


