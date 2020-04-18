<?php
/**
 * IoPerson
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

use \ArrayAccess;
use \PkIo\ObjectSerializer;

/**
 * IoPerson Class Doc Comment
 *
 * @category Class
 * @description A person represents a single, identifiable individual.
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoPerson implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ioPerson';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'surname' => 'string',
'forename' => 'string',
'otherNames' => 'string[]',
'salutation' => 'string',
'suffix' => 'string',
'displayName' => 'string',
'gender' => '\PkIo\Model\IoGender',
'dateOfBirth' => '\PkIo\Model\IoDate',
'emailAddress' => 'string',
'mobileNumber' => 'string',
'externalId' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'surname' => null,
'forename' => null,
'otherNames' => null,
'salutation' => null,
'suffix' => null,
'displayName' => null,
'gender' => null,
'dateOfBirth' => null,
'emailAddress' => null,
'mobileNumber' => null,
'externalId' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'surname' => 'surname',
'forename' => 'forename',
'otherNames' => 'otherNames',
'salutation' => 'salutation',
'suffix' => 'suffix',
'displayName' => 'displayName',
'gender' => 'gender',
'dateOfBirth' => 'dateOfBirth',
'emailAddress' => 'emailAddress',
'mobileNumber' => 'mobileNumber',
'externalId' => 'externalId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'surname' => 'setSurname',
'forename' => 'setForename',
'otherNames' => 'setOtherNames',
'salutation' => 'setSalutation',
'suffix' => 'setSuffix',
'displayName' => 'setDisplayName',
'gender' => 'setGender',
'dateOfBirth' => 'setDateOfBirth',
'emailAddress' => 'setEmailAddress',
'mobileNumber' => 'setMobileNumber',
'externalId' => 'setExternalId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'surname' => 'getSurname',
'forename' => 'getForename',
'otherNames' => 'getOtherNames',
'salutation' => 'getSalutation',
'suffix' => 'getSuffix',
'displayName' => 'getDisplayName',
'gender' => 'getGender',
'dateOfBirth' => 'getDateOfBirth',
'emailAddress' => 'getEmailAddress',
'mobileNumber' => 'getMobileNumber',
'externalId' => 'getExternalId'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['forename'] = isset($data['forename']) ? $data['forename'] : null;
        $this->container['otherNames'] = isset($data['otherNames']) ? $data['otherNames'] : null;
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['dateOfBirth'] = isset($data['dateOfBirth']) ? $data['dateOfBirth'] : null;
        $this->container['emailAddress'] = isset($data['emailAddress']) ? $data['emailAddress'] : null;
        $this->container['mobileNumber'] = isset($data['mobileNumber']) ? $data['mobileNumber'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string $surname Surname / Family name.
     *
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets forename
     *
     * @return string
     */
    public function getForename()
    {
        return $this->container['forename'];
    }

    /**
     * Sets forename
     *
     * @param string $forename Forename / Given name.
     *
     * @return $this
     */
    public function setForename($forename)
    {
        $this->container['forename'] = $forename;

        return $this;
    }

    /**
     * Gets otherNames
     *
     * @return string[]
     */
    public function getOtherNames()
    {
        return $this->container['otherNames'];
    }

    /**
     * Sets otherNames
     *
     * @param string[] $otherNames Other names.
     *
     * @return $this
     */
    public function setOtherNames($otherNames)
    {
        $this->container['otherNames'] = $otherNames;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return string
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param string $salutation Salutation or title.
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets suffix
     *
     * @return string
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     *
     * @param string $suffix Suffix. For multiple suffixes, separate with spaces.
     *
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string $displayName If required, a string representing the user's preferred designation.
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return \PkIo\Model\IoGender
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \PkIo\Model\IoGender $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets dateOfBirth
     *
     * @return \PkIo\Model\IoDate
     */
    public function getDateOfBirth()
    {
        return $this->container['dateOfBirth'];
    }

    /**
     * Sets dateOfBirth
     *
     * @param \PkIo\Model\IoDate $dateOfBirth dateOfBirth
     *
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->container['dateOfBirth'] = $dateOfBirth;

        return $this;
    }

    /**
     * Gets emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['emailAddress'];
    }

    /**
     * Sets emailAddress
     *
     * @param string $emailAddress Email address.
     *
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->container['emailAddress'] = $emailAddress;

        return $this;
    }

    /**
     * Gets mobileNumber
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->container['mobileNumber'];
    }

    /**
     * Sets mobileNumber
     *
     * @param string $mobileNumber Telephone number. Enter in the format +{countryCode}{telephoneNumber} with no commas, spaces or other delimiters.
     *
     * @return $this
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->container['mobileNumber'] = $mobileNumber;

        return $this;
    }

    /**
     * Gets externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
     * Sets externalId
     *
     * @param string $externalId External id. Not editable.
     *
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}