<?php
/**
 * LogLevelLimit
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
 * The version of the OpenAPI document: 8.1.0
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
 * LogLevelLimit Class Doc Comment
 *
 * @category Class
 * @description Limit the log level of a service.
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LogLevelLimit
{
    /**
     * Possible values of this enum
     */
    public const ERROR = 'error';

    public const WARN = 'warn';

    public const INFO = 'info';

    public const TRACE = 'trace';

    public const DEBUG = 'debug';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ERROR,
            self::WARN,
            self::INFO,
            self::TRACE,
            self::DEBUG
        ];
    }
}


