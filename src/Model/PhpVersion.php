<?php
/**
 * PhpVersion
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
 * PhpVersion Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PhpVersion
{
    /**
     * Possible values of this enum
     */
    public const PHP56 = 'php56';

    public const PHP70 = 'php70';

    public const PHP71 = 'php71';

    public const PHP72 = 'php72';

    public const PHP73 = 'php73';

    public const PHP74 = 'php74';

    public const PHP80 = 'php80';

    public const PHP81 = 'php81';

    public const PHP82 = 'php82';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PHP56,
            self::PHP70,
            self::PHP71,
            self::PHP72,
            self::PHP73,
            self::PHP74,
            self::PHP80,
            self::PHP81,
            self::PHP82
        ];
    }
}


