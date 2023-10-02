<?php
/**
 * WebsiteKind
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
use \Upmind\EnhanceSdk\ObjectSerializer;

/**
 * WebsiteKind Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebsiteKind
{
    /**
     * Possible values of this enum
     */
    public const NORMAL = 'normal';

    public const CONTROL_PANEL = 'controlPanel';

    public const PHP_MY_ADMIN = 'phpMyAdmin';

    public const ROUNDCUBE = 'roundcube';

    public const STAGING = 'staging';

    public const SERVER_HOSTNAME = 'serverHostname';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NORMAL,
            self::CONTROL_PANEL,
            self::PHP_MY_ADMIN,
            self::ROUNDCUBE,
            self::STAGING,
            self::SERVER_HOSTNAME
        ];
    }
}


