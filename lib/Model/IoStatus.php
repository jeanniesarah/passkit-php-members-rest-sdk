<?php
/**
 * IoStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PassKit Members API
 *
 * The PassKit Members API lets you manage your membership programs and passes for Apple Wallet and Google Pay.
 *
 * OpenAPI spec version: 1.0-rc
 * Contact: support@passkit.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.19
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PkIo\Model;
use \PkIo\ObjectSerializer;

/**
 * IoStatus Class Doc Comment
 *
 * @category Class
 * @description Status is the best determined status of the pass.   - PASS_ISSUED: Pass has been issued.  - PASS_INSTALLED: Pass has been installed in a wallet.  - PASS_UNINSTALLED: Pass has been uninstalled (possibly deleted) from a wallet.  - PASS_INVALIDATED: Pass has been invalidated.
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoStatus
{
    /**
     * Possible values of this enum
     */
    const ISSUED = 'PASS_ISSUED';
const INSTALLED = 'PASS_INSTALLED';
const UNINSTALLED = 'PASS_UNINSTALLED';
const INVALIDATED = 'PASS_INVALIDATED';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ISSUED,
self::INSTALLED,
self::UNINSTALLED,
self::INVALIDATED,        ];
    }
}
