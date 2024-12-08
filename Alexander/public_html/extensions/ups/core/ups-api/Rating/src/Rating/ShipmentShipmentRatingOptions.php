<?php
/**
 * ShipmentShipmentRatingOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rate
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
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

namespace UPS\Rating\Rating;

use \ArrayAccess;
use \UPS\Rating\ObjectSerializer;

/**
 * ShipmentShipmentRatingOptions Class Doc Comment
 *
 * @category Class
 * @description Shipment Rating Options container.
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentShipmentRatingOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Shipment_ShipmentRatingOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'negotiated_rates_indicator' => 'string',
        'frs_shipment_indicator' => 'string',
        'rate_chart_indicator' => 'string',
        'user_level_discount_indicator' => 'string',
        'tpfc_negotiated_rates_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'negotiated_rates_indicator' => null,
        'frs_shipment_indicator' => null,
        'rate_chart_indicator' => null,
        'user_level_discount_indicator' => null,
        'tpfc_negotiated_rates_indicator' => null
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
        'negotiated_rates_indicator' => 'NegotiatedRatesIndicator',
        'frs_shipment_indicator' => 'FRSShipmentIndicator',
        'rate_chart_indicator' => 'RateChartIndicator',
        'user_level_discount_indicator' => 'UserLevelDiscountIndicator',
        'tpfc_negotiated_rates_indicator' => 'TPFCNegotiatedRatesIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'negotiated_rates_indicator' => 'setNegotiatedRatesIndicator',
        'frs_shipment_indicator' => 'setFrsShipmentIndicator',
        'rate_chart_indicator' => 'setRateChartIndicator',
        'user_level_discount_indicator' => 'setUserLevelDiscountIndicator',
        'tpfc_negotiated_rates_indicator' => 'setTpfcNegotiatedRatesIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'negotiated_rates_indicator' => 'getNegotiatedRatesIndicator',
        'frs_shipment_indicator' => 'getFrsShipmentIndicator',
        'rate_chart_indicator' => 'getRateChartIndicator',
        'user_level_discount_indicator' => 'getUserLevelDiscountIndicator',
        'tpfc_negotiated_rates_indicator' => 'getTpfcNegotiatedRatesIndicator'
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
        $this->container['negotiated_rates_indicator'] = isset($data['negotiated_rates_indicator']) ? $data['negotiated_rates_indicator'] : null;
        $this->container['frs_shipment_indicator'] = isset($data['frs_shipment_indicator']) ? $data['frs_shipment_indicator'] : null;
        $this->container['rate_chart_indicator'] = isset($data['rate_chart_indicator']) ? $data['rate_chart_indicator'] : null;
        $this->container['user_level_discount_indicator'] = isset($data['user_level_discount_indicator']) ? $data['user_level_discount_indicator'] : null;
        $this->container['tpfc_negotiated_rates_indicator'] = isset($data['tpfc_negotiated_rates_indicator']) ? $data['tpfc_negotiated_rates_indicator'] : null;
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
     * Gets negotiated_rates_indicator
     *
     * @return string
     */
    public function getNegotiatedRatesIndicator()
    {
        return $this->container['negotiated_rates_indicator'];
    }

    /**
     * Sets negotiated_rates_indicator
     *
     * @param string $negotiated_rates_indicator NegotiatedRatesIndicator -  Required to display two types of discounts: 1) Bids or Account Based Rates2) Web/Promotional Discounts BidsAccount Based Rates: If the indicator is present, the Shipper is authorized, and the Rating API XML Request is configured to return Negotiated Rates, then Negotiated Rates should be returned in the response. Web/Promotional Discounts: If the indicator is present, the Shipper is authorized for Web/Promotional Discounts then Negotiated Rates should be returned in the response.
     *
     * @return $this
     */
    public function setNegotiatedRatesIndicator($negotiated_rates_indicator)
    {
        $this->container['negotiated_rates_indicator'] = $negotiated_rates_indicator;

        return $this;
    }

    /**
     * Gets frs_shipment_indicator
     *
     * @return string
     */
    public function getFrsShipmentIndicator()
    {
        return $this->container['frs_shipment_indicator'];
    }

    /**
     * Sets frs_shipment_indicator
     *
     * @param string $frs_shipment_indicator FRS Indicator. The indicator is required to obtain rates for UPS Ground Freight Pricing (GFP).  The account number must be enabled for GFP.
     *
     * @return $this
     */
    public function setFrsShipmentIndicator($frs_shipment_indicator)
    {
        $this->container['frs_shipment_indicator'] = $frs_shipment_indicator;

        return $this;
    }

    /**
     * Gets rate_chart_indicator
     *
     * @return string
     */
    public function getRateChartIndicator()
    {
        return $this->container['rate_chart_indicator'];
    }

    /**
     * Sets rate_chart_indicator
     *
     * @param string $rate_chart_indicator RateChartIndicator -  If present in a request, the response will contain a RateChart element.
     *
     * @return $this
     */
    public function setRateChartIndicator($rate_chart_indicator)
    {
        $this->container['rate_chart_indicator'] = $rate_chart_indicator;

        return $this;
    }

    /**
     * Gets user_level_discount_indicator
     *
     * @return string
     */
    public function getUserLevelDiscountIndicator()
    {
        return $this->container['user_level_discount_indicator'];
    }

    /**
     * Sets user_level_discount_indicator
     *
     * @param string $user_level_discount_indicator UserLevelDiscountIndicator - required to obtain rates for User Level Promotions.  This is required to obtain User Level Discounts. There must also be no ShipperNumber in the Shipper container.
     *
     * @return $this
     */
    public function setUserLevelDiscountIndicator($user_level_discount_indicator)
    {
        $this->container['user_level_discount_indicator'] = $user_level_discount_indicator;

        return $this;
    }

    /**
     * Gets tpfc_negotiated_rates_indicator
     *
     * @return string
     */
    public function getTpfcNegotiatedRatesIndicator()
    {
        return $this->container['tpfc_negotiated_rates_indicator'];
    }

    /**
     * Sets tpfc_negotiated_rates_indicator
     *
     * @param string $tpfc_negotiated_rates_indicator This indicator applies for a third party (3P) / Freight collect (FC) shipment only. For 3P/FC shipment if the shipper wishes to request for the negotiated rates of the third party then this indicator should be included in the request. If authorized the 3P/FC negotiated rates will be applied to the shipment and rates will be returned in response.
     *
     * @return $this
     */
    public function setTpfcNegotiatedRatesIndicator($tpfc_negotiated_rates_indicator)
    {
        $this->container['tpfc_negotiated_rates_indicator'] = $tpfc_negotiated_rates_indicator;

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
