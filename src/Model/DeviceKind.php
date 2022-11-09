<?php
/**
 * DeviceKind
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
 * DeviceKind Class Doc Comment
 *
 * @category Class
 * @description The type of the btrfs device, if &#x60;device&#x60; the block device must already exist, otherwise (with &#x60;sparseFile&#x60;) it will be created from a new (not existing) sparse file. In both cases the block device will be formatted to btrfs and mounted in the given mount point.
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DeviceKind
{
    /**
     * Possible values of this enum
     */
    public const DEVICE = 'device';

    public const SPARSE_FILE = 'sparseFile';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DEVICE,
            self::SPARSE_FILE
        ];
    }
}


