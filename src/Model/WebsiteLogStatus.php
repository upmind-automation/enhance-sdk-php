<?php
/**
 * WebsiteLogStatus
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
use \Upmind\EnhanceSdk\ObjectSerializer;

/**
 * WebsiteLogStatus Class Doc Comment
 *
 * @category Class
 * @description The status of the website at the time the log was written. Some statuses have additional metadata (ok, slow, failed4xx, failed5xx) whereas some don&#39;t (timeout, dnsZoneNotFound, appServerMismatch).
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebsiteLogStatus
{
    /**
     * Possible values of this enum
     */
    public const OK = 'ok';

    public const SLOW = 'slow';

    public const FAILED4XX = 'failed4xx';

    public const FAILED5XX = 'failed5xx';

    public const TIMEOUT = 'timeout';

    public const DNS_ZONE_NOT_FOUND = 'dnsZoneNotFound';

    public const APP_SERVER_MISMATCH = 'appServerMismatch';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OK,
            self::SLOW,
            self::FAILED4XX,
            self::FAILED5XX,
            self::TIMEOUT,
            self::DNS_ZONE_NOT_FOUND,
            self::APP_SERVER_MISMATCH
        ];
    }
}


