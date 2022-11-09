<?php
/**
 * DnsStatus
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
use \Upmind\EnhanceSdk\ObjectSerializer;

/**
 * DnsStatus Class Doc Comment
 *
 * @category Class
 * @description Resolved &#x3D; domain resolves to our servers. ForeignServer &#x3D; domain resolves but points to somewhere else. Failed &#x3D; DNS query failed for the domain (potentially not configured). Unknown &#x3D; Not queried. Error &#x3D; There was an internal error. Mixed &#x3D; Website&#39;s domains resolved with different statuses.
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DnsStatus
{
    /**
     * Possible values of this enum
     */
    public const RESOLVED = 'Resolved';

    public const FOREIGN_SERVER = 'ForeignServer';

    public const FAILED = 'Failed';

    public const MIXED = 'Mixed';

    public const UNKNOWN = 'Unknown';

    public const ERROR = 'Error';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RESOLVED,
            self::FOREIGN_SERVER,
            self::FAILED,
            self::MIXED,
            self::UNKNOWN,
            self::ERROR
        ];
    }
}


