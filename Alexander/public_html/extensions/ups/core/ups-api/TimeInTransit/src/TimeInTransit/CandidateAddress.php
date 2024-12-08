<?php
/**
 * CandidateAddress
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\TimeInTransit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Time In Transit
 *
 * The Time In Transit API provides estimated delivery times for various UPS shipping services, between specified locations.  Key Business Values: - **Enhanced Customer Experience**: Allows businesses provide accurate delivery estimates to their customers, enhancing customer service. - **Operational Efficiency**: Helps in logistics planning by providing transit times for different UPS services.
 *
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\TimeInTransit\TimeInTransit;

use \ArrayAccess;
use \UPS\TimeInTransit\ObjectSerializer;

/**
 * CandidateAddress Class Doc Comment
 *
 * @category Class
 * @package  UPS\TimeInTransit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CandidateAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'candidateAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country_name' => 'string',
        'country_code' => 'string',
        'state_province' => 'string',
        'city' => 'string',
        'town' => 'string',
        'postal_code' => 'string',
        'postal_code_low' => 'string',
        'postal_code_high' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country_name' => null,
        'country_code' => null,
        'state_province' => null,
        'city' => null,
        'town' => null,
        'postal_code' => null,
        'postal_code_low' => null,
        'postal_code_high' => null
    ];

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
        'country_name' => 'countryName',
        'country_code' => 'countryCode',
        'state_province' => 'stateProvince',
        'city' => 'city',
        'town' => 'town',
        'postal_code' => 'postalCode',
        'postal_code_low' => 'postalCodeLow',
        'postal_code_high' => 'postalCodeHigh'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_name' => 'setCountryName',
        'country_code' => 'setCountryCode',
        'state_province' => 'setStateProvince',
        'city' => 'setCity',
        'town' => 'setTown',
        'postal_code' => 'setPostalCode',
        'postal_code_low' => 'setPostalCodeLow',
        'postal_code_high' => 'setPostalCodeHigh'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_name' => 'getCountryName',
        'country_code' => 'getCountryCode',
        'state_province' => 'getStateProvince',
        'city' => 'getCity',
        'town' => 'getTown',
        'postal_code' => 'getPostalCode',
        'postal_code_low' => 'getPostalCodeLow',
        'postal_code_high' => 'getPostalCodeHigh'
    ];

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
        $this->container['country_name'] = isset($data['country_name']) ? $data['country_name'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['state_province'] = isset($data['state_province']) ? $data['state_province'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['town'] = isset($data['town']) ? $data['town'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['postal_code_low'] = isset($data['postal_code_low']) ? $data['postal_code_low'] : null;
        $this->container['postal_code_high'] = isset($data['postal_code_high']) ? $data['postal_code_high'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['country_name'] === null) {
            $invalidProperties[] = "'country_name' can't be null";
        }
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
     * Gets country_name
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->container['country_name'];
    }

    /**
     * Sets country_name
     *
     * @param string $country_name Spelled out country name.
     *
     * @return $this
     */
    public function setCountryName($country_name)
    {
        $this->container['country_name'] = $country_name;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code Country code, follows ISO-defined country codes.
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets state_province
     *
     * @return string
     */
    public function getStateProvince()
    {
        return $this->container['state_province'];
    }

    /**
     * Sets state_province
     *
     * @param string $state_province Present on response when candidate value has a political division 1 value available.
     *
     * @return $this
     */
    public function setStateProvince($state_province)
    {
        $this->container['state_province'] = $state_province;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city Present on response when candidate value has a political division 2 value available.
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string $town Present on response when candidate value has a political division 3 value available.
     *
     * @return $this
     */
    public function setTown($town)
    {
        $this->container['town'] = $town;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Present on response when candidate has a postal code value available
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets postal_code_low
     *
     * @return string
     */
    public function getPostalCodeLow()
    {
        return $this->container['postal_code_low'];
    }

    /**
     * Sets postal_code_low
     *
     * @param string $postal_code_low Present on response when candidate value has a postal code range value available. This is the postal range low value.
     *
     * @return $this
     */
    public function setPostalCodeLow($postal_code_low)
    {
        $this->container['postal_code_low'] = $postal_code_low;

        return $this;
    }

    /**
     * Gets postal_code_high
     *
     * @return string
     */
    public function getPostalCodeHigh()
    {
        return $this->container['postal_code_high'];
    }

    /**
     * Sets postal_code_high
     *
     * @param string $postal_code_high Present on response when candidate value has a postal code range value available. This is the postal range high value.
     *
     * @return $this
     */
    public function setPostalCodeHigh($postal_code_high)
    {
        $this->container['postal_code_high'] = $postal_code_high;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
