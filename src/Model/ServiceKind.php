<?php
/**
 * ServiceKind
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
use \Upmind\EnhanceSdk\ObjectSerializer;

/**
 * ServiceKind Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceKind
{
    /**
     * Possible values of this enum
     */
    public const CONTROLD = 'controld';

    public const ORCHD = 'orchd';

    public const AUTHD = 'authd';

    public const LOGD = 'logd';

    public const SGED = 'sged';

    public const BKUPD = 'bkupd';

    public const MYSQLCD = 'mysqlcd';

    public const DNSCD = 'dnscd';

    public const FILERD = 'filerd';

    public const MTACD = 'mtacd';

    public const IMAPCD = 'imapcd';

    public const SPAMCD = 'spamcd';

    public const FTPCD = 'ftpcd';

    public const UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CONTROLD,
            self::ORCHD,
            self::AUTHD,
            self::LOGD,
            self::SGED,
            self::BKUPD,
            self::MYSQLCD,
            self::DNSCD,
            self::FILERD,
            self::MTACD,
            self::IMAPCD,
            self::SPAMCD,
            self::FTPCD,
            self::UNKNOWN_DEFAULT_OPEN_API
        ];
    }
}


