<?php
/**
 * Role
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
 * Role Class Doc Comment
 *
 * @category Class
 * @description The role of the member in the organization.
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Role
{
    /**
     * Possible values of this enum
     */
    public const OWNER = 'Owner';

    public const SUPER_ADMIN = 'SuperAdmin';

    public const BUSINESS = 'Business';

    public const SITE_ACCESS = 'SiteAccess';

    public const SUPPORT = 'Support';

    public const SYSADMIN = 'Sysadmin';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OWNER,
            self::SUPER_ADMIN,
            self::BUSINESS,
            self::SITE_ACCESS,
            self::SUPPORT,
            self::SYSADMIN
        ];
    }
}


