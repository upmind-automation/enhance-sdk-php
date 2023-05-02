<?php
/**
 * ResourceCheckConflictKind
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
use \Upmind\EnhanceSdk\ObjectSerializer;

/**
 * ResourceCheckConflictKind Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ResourceCheckConflictKind
{
    /**
     * Possible values of this enum
     */
    public const MYSQL_USER = 'mysqlUser';

    public const MYSQL_DB = 'mysqlDb';

    public const FTP_USER = 'ftpUser';

    public const MAILBOX_FORWARDER = 'mailboxForwarder';

    public const MAILBOX = 'mailbox';

    public const DOMAIN = 'domain';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MYSQL_USER,
            self::MYSQL_DB,
            self::FTP_USER,
            self::MAILBOX_FORWARDER,
            self::MAILBOX,
            self::DOMAIN
        ];
    }
}


