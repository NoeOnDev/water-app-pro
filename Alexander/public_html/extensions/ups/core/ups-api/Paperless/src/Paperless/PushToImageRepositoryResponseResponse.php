<?php
/**
 * PushToImageRepositoryResponseResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Paperless
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Paperless Document
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

namespace UPS\Paperless\Paperless;

use \ArrayAccess;
use \UPS\Paperless\ObjectSerializer;

/**
 * PushToImageRepositoryResponseResponse Class Doc Comment
 *
 * @category Class
 * @description Response container.
 * @package  UPS\Paperless
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PushToImageRepositoryResponseResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PushToImageRepositoryResponse_Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'response_status' => '\UPS\Paperless\Paperless\ResponseResponseStatus',
        'alert' => '\UPS\Paperless\Paperless\ResponseAlert[]',
        'transaction_reference' => '\UPS\Paperless\Paperless\ResponseTransactionReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'response_status' => null,
        'alert' => null,
        'transaction_reference' => null
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
        'response_status' => 'ResponseStatus',
        'alert' => 'Alert',
        'transaction_reference' => 'TransactionReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'response_status' => 'setResponseStatus',
        'alert' => 'setAlert',
        'transaction_reference' => 'setTransactionReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'response_status' => 'getResponseStatus',
        'alert' => 'getAlert',
        'transaction_reference' => 'getTransactionReference'
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
        $this->container['response_status'] = isset($data['response_status']) ? $data['response_status'] : null;
        $this->container['alert'] = isset($data['alert']) ? $data['alert'] : null;
        $this->container['transaction_reference'] = isset($data['transaction_reference']) ? $data['transaction_reference'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['response_status'] === null) {
            $invalidProperties[] = "'response_status' can't be null";
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
     * Gets response_status
     *
     * @return \UPS\Paperless\Paperless\ResponseResponseStatus
     */
    public function getResponseStatus()
    {
        return $this->container['response_status'];
    }

    /**
     * Sets response_status
     *
     * @param \UPS\Paperless\Paperless\ResponseResponseStatus $response_status response_status
     *
     * @return $this
     */
    public function setResponseStatus($response_status)
    {
        $this->container['response_status'] = $response_status;

        return $this;
    }

    /**
     * Gets alert
     *
     * @return \UPS\Paperless\Paperless\ResponseAlert[]
     */
    public function getAlert()
    {
        return $this->container['alert'];
    }

    /**
     * Sets alert
     *
     * @param \UPS\Paperless\Paperless\ResponseAlert[] $alert Alert Container.  There can be zero to many alert containers with code and description.  **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return $this
     */
    public function setAlert($alert)
    {
        $this->container['alert'] = $alert;

        return $this;
    }

    /**
     * Gets transaction_reference
     *
     * @return \UPS\Paperless\Paperless\ResponseTransactionReference
     */
    public function getTransactionReference()
    {
        return $this->container['transaction_reference'];
    }

    /**
     * Sets transaction_reference
     *
     * @param \UPS\Paperless\Paperless\ResponseTransactionReference $transaction_reference transaction_reference
     *
     * @return $this
     */
    public function setTransactionReference($transaction_reference)
    {
        $this->container['transaction_reference'] = $transaction_reference;

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
