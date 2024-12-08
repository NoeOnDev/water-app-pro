<?php
/**
 * ShipmentServiceOptionsPickupOptions
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
 * ShipmentServiceOptionsPickupOptions Class Doc Comment
 *
 * @category Class
 * @description Shipment Service Pickup Options Container.  Valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipments.
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentServiceOptionsPickupOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentServiceOptions_PickupOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lift_gate_at_pickup_indicator' => 'string',
        'hold_for_pickup_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lift_gate_at_pickup_indicator' => null,
        'hold_for_pickup_indicator' => null
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
        'lift_gate_at_pickup_indicator' => 'LiftGateAtPickupIndicator',
        'hold_for_pickup_indicator' => 'HoldForPickupIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lift_gate_at_pickup_indicator' => 'setLiftGateAtPickupIndicator',
        'hold_for_pickup_indicator' => 'setHoldForPickupIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lift_gate_at_pickup_indicator' => 'getLiftGateAtPickupIndicator',
        'hold_for_pickup_indicator' => 'getHoldForPickupIndicator'
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
        $this->container['lift_gate_at_pickup_indicator'] = isset($data['lift_gate_at_pickup_indicator']) ? $data['lift_gate_at_pickup_indicator'] : null;
        $this->container['hold_for_pickup_indicator'] = isset($data['hold_for_pickup_indicator']) ? $data['hold_for_pickup_indicator'] : null;
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
     * Gets lift_gate_at_pickup_indicator
     *
     * @return string
     */
    public function getLiftGateAtPickupIndicator()
    {
        return $this->container['lift_gate_at_pickup_indicator'];
    }

    /**
     * Sets lift_gate_at_pickup_indicator
     *
     * @param string $lift_gate_at_pickup_indicator The presence of the tag LiftGatePickupRequiredIndicator indicates that the shipment requires a lift gate for pickup.
     *
     * @return $this
     */
    public function setLiftGateAtPickupIndicator($lift_gate_at_pickup_indicator)
    {
        $this->container['lift_gate_at_pickup_indicator'] = $lift_gate_at_pickup_indicator;

        return $this;
    }

    /**
     * Gets hold_for_pickup_indicator
     *
     * @return string
     */
    public function getHoldForPickupIndicator()
    {
        return $this->container['hold_for_pickup_indicator'];
    }

    /**
     * Sets hold_for_pickup_indicator
     *
     * @param string $hold_for_pickup_indicator The presence of the tag HoldForPickupIndicator indicates that the user opted to hold the shipment at UPS location for pickup.
     *
     * @return $this
     */
    public function setHoldForPickupIndicator($hold_for_pickup_indicator)
    {
        $this->container['hold_for_pickup_indicator'] = $hold_for_pickup_indicator;

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
