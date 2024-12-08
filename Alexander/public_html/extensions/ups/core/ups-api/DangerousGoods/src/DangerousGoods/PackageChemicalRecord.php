<?php
/**
 * PackageChemicalRecord
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\DangerousGoods
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Dangerous Goods Utility
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

namespace UPS\DangerousGoods\DangerousGoods;

use \ArrayAccess;
use \UPS\DangerousGoods\ObjectSerializer;

/**
 * PackageChemicalRecord Class Doc Comment
 *
 * @category Class
 * @description Container to hold Chemical Record information.
 * @package  UPS\DangerousGoods
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackageChemicalRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Package_ChemicalRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chemical_record_identifier' => 'string',
        'reportable_quantity' => 'string',
        'class_division_number' => 'string',
        'sub_risk_class' => 'string',
        'id_number' => 'string',
        'packaging_group_type' => 'string',
        'quantity' => 'string',
        'uom' => 'string',
        'packaging_instruction_code' => 'string',
        'proper_shipping_name' => 'string',
        'technical_name' => 'string',
        'additional_description' => 'string',
        'packaging_type' => 'string',
        'hazard_label_required' => 'string',
        'packaging_type_quantity' => 'string',
        'commodity_regulated_level_code' => 'string',
        'transport_category' => 'string',
        'tunnel_restriction_code' => 'string',
        'all_packed_in_one_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chemical_record_identifier' => null,
        'reportable_quantity' => null,
        'class_division_number' => null,
        'sub_risk_class' => null,
        'id_number' => null,
        'packaging_group_type' => null,
        'quantity' => null,
        'uom' => null,
        'packaging_instruction_code' => null,
        'proper_shipping_name' => null,
        'technical_name' => null,
        'additional_description' => null,
        'packaging_type' => null,
        'hazard_label_required' => null,
        'packaging_type_quantity' => null,
        'commodity_regulated_level_code' => null,
        'transport_category' => null,
        'tunnel_restriction_code' => null,
        'all_packed_in_one_indicator' => null
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
        'chemical_record_identifier' => 'ChemicalRecordIdentifier',
        'reportable_quantity' => 'ReportableQuantity',
        'class_division_number' => 'ClassDivisionNumber',
        'sub_risk_class' => 'SubRiskClass',
        'id_number' => 'IDNumber',
        'packaging_group_type' => 'PackagingGroupType',
        'quantity' => 'Quantity',
        'uom' => 'UOM',
        'packaging_instruction_code' => 'PackagingInstructionCode',
        'proper_shipping_name' => 'ProperShippingName',
        'technical_name' => 'TechnicalName',
        'additional_description' => 'AdditionalDescription',
        'packaging_type' => 'PackagingType',
        'hazard_label_required' => 'HazardLabelRequired',
        'packaging_type_quantity' => 'PackagingTypeQuantity',
        'commodity_regulated_level_code' => 'CommodityRegulatedLevelCode',
        'transport_category' => 'TransportCategory',
        'tunnel_restriction_code' => 'TunnelRestrictionCode',
        'all_packed_in_one_indicator' => 'AllPackedInOneIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chemical_record_identifier' => 'setChemicalRecordIdentifier',
        'reportable_quantity' => 'setReportableQuantity',
        'class_division_number' => 'setClassDivisionNumber',
        'sub_risk_class' => 'setSubRiskClass',
        'id_number' => 'setIdNumber',
        'packaging_group_type' => 'setPackagingGroupType',
        'quantity' => 'setQuantity',
        'uom' => 'setUom',
        'packaging_instruction_code' => 'setPackagingInstructionCode',
        'proper_shipping_name' => 'setProperShippingName',
        'technical_name' => 'setTechnicalName',
        'additional_description' => 'setAdditionalDescription',
        'packaging_type' => 'setPackagingType',
        'hazard_label_required' => 'setHazardLabelRequired',
        'packaging_type_quantity' => 'setPackagingTypeQuantity',
        'commodity_regulated_level_code' => 'setCommodityRegulatedLevelCode',
        'transport_category' => 'setTransportCategory',
        'tunnel_restriction_code' => 'setTunnelRestrictionCode',
        'all_packed_in_one_indicator' => 'setAllPackedInOneIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chemical_record_identifier' => 'getChemicalRecordIdentifier',
        'reportable_quantity' => 'getReportableQuantity',
        'class_division_number' => 'getClassDivisionNumber',
        'sub_risk_class' => 'getSubRiskClass',
        'id_number' => 'getIdNumber',
        'packaging_group_type' => 'getPackagingGroupType',
        'quantity' => 'getQuantity',
        'uom' => 'getUom',
        'packaging_instruction_code' => 'getPackagingInstructionCode',
        'proper_shipping_name' => 'getProperShippingName',
        'technical_name' => 'getTechnicalName',
        'additional_description' => 'getAdditionalDescription',
        'packaging_type' => 'getPackagingType',
        'hazard_label_required' => 'getHazardLabelRequired',
        'packaging_type_quantity' => 'getPackagingTypeQuantity',
        'commodity_regulated_level_code' => 'getCommodityRegulatedLevelCode',
        'transport_category' => 'getTransportCategory',
        'tunnel_restriction_code' => 'getTunnelRestrictionCode',
        'all_packed_in_one_indicator' => 'getAllPackedInOneIndicator'
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
        $this->container['chemical_record_identifier'] = isset($data['chemical_record_identifier']) ? $data['chemical_record_identifier'] : null;
        $this->container['reportable_quantity'] = isset($data['reportable_quantity']) ? $data['reportable_quantity'] : null;
        $this->container['class_division_number'] = isset($data['class_division_number']) ? $data['class_division_number'] : null;
        $this->container['sub_risk_class'] = isset($data['sub_risk_class']) ? $data['sub_risk_class'] : null;
        $this->container['id_number'] = isset($data['id_number']) ? $data['id_number'] : null;
        $this->container['packaging_group_type'] = isset($data['packaging_group_type']) ? $data['packaging_group_type'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['packaging_instruction_code'] = isset($data['packaging_instruction_code']) ? $data['packaging_instruction_code'] : null;
        $this->container['proper_shipping_name'] = isset($data['proper_shipping_name']) ? $data['proper_shipping_name'] : null;
        $this->container['technical_name'] = isset($data['technical_name']) ? $data['technical_name'] : null;
        $this->container['additional_description'] = isset($data['additional_description']) ? $data['additional_description'] : null;
        $this->container['packaging_type'] = isset($data['packaging_type']) ? $data['packaging_type'] : null;
        $this->container['hazard_label_required'] = isset($data['hazard_label_required']) ? $data['hazard_label_required'] : null;
        $this->container['packaging_type_quantity'] = isset($data['packaging_type_quantity']) ? $data['packaging_type_quantity'] : null;
        $this->container['commodity_regulated_level_code'] = isset($data['commodity_regulated_level_code']) ? $data['commodity_regulated_level_code'] : null;
        $this->container['transport_category'] = isset($data['transport_category']) ? $data['transport_category'] : null;
        $this->container['tunnel_restriction_code'] = isset($data['tunnel_restriction_code']) ? $data['tunnel_restriction_code'] : null;
        $this->container['all_packed_in_one_indicator'] = isset($data['all_packed_in_one_indicator']) ? $data['all_packed_in_one_indicator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['chemical_record_identifier'] === null) {
            $invalidProperties[] = "'chemical_record_identifier' can't be null";
        }
        if ($this->container['commodity_regulated_level_code'] === null) {
            $invalidProperties[] = "'commodity_regulated_level_code' can't be null";
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
     * Gets chemical_record_identifier
     *
     * @return string
     */
    public function getChemicalRecordIdentifier()
    {
        return $this->container['chemical_record_identifier'];
    }

    /**
     * Sets chemical_record_identifier
     *
     * @param string $chemical_record_identifier Identifies the Chemcial Record.
     *
     * @return $this
     */
    public function setChemicalRecordIdentifier($chemical_record_identifier)
    {
        $this->container['chemical_record_identifier'] = $chemical_record_identifier;

        return $this;
    }

    /**
     * Gets reportable_quantity
     *
     * @return string
     */
    public function getReportableQuantity()
    {
        return $this->container['reportable_quantity'];
    }

    /**
     * Sets reportable_quantity
     *
     * @param string $reportable_quantity Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. If reportable quantity is met, RQ should be entered.
     *
     * @return $this
     */
    public function setReportableQuantity($reportable_quantity)
    {
        $this->container['reportable_quantity'] = $reportable_quantity;

        return $this;
    }

    /**
     * Gets class_division_number
     *
     * @return string
     */
    public function getClassDivisionNumber()
    {
        return $this->container['class_division_number'];
    }

    /**
     * Sets class_division_number
     *
     * @param string $class_division_number This is the hazard class associated to the specified commodity.  Required if CommodityRegulatedLevelCode is 'LQ' or 'FR'
     *
     * @return $this
     */
    public function setClassDivisionNumber($class_division_number)
    {
        $this->container['class_division_number'] = $class_division_number;

        return $this;
    }

    /**
     * Gets sub_risk_class
     *
     * @return string
     */
    public function getSubRiskClass()
    {
        return $this->container['sub_risk_class'];
    }

    /**
     * Sets sub_risk_class
     *
     * @param string $sub_risk_class Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.  Secondary hazardous characteristics of a package. (There can be more than one – separate each with a comma).
     *
     * @return $this
     */
    public function setSubRiskClass($sub_risk_class)
    {
        $this->container['sub_risk_class'] = $sub_risk_class;

        return $this;
    }

    /**
     * Gets id_number
     *
     * @return string
     */
    public function getIdNumber()
    {
        return $this->container['id_number'];
    }

    /**
     * Sets id_number
     *
     * @param string $id_number This is the ID number (UN/NA/ID) for the specified commodity.   Required if CommodityRegulatedLevelCode = LR, LQ or FR and if the field applies to the material by regulation.   UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).
     *
     * @return $this
     */
    public function setIdNumber($id_number)
    {
        $this->container['id_number'] = $id_number;

        return $this;
    }

    /**
     * Gets packaging_group_type
     *
     * @return string
     */
    public function getPackagingGroupType()
    {
        return $this->container['packaging_group_type'];
    }

    /**
     * Sets packaging_group_type
     *
     * @param string $packaging_group_type This is the packing group category associated to the specified commodity.  Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. Must be shown in Roman Numerals.  Valid values are:  I II III  blank
     *
     * @return $this
     */
    public function setPackagingGroupType($packaging_group_type)
    {
        $this->container['packaging_group_type'] = $packaging_group_type;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string $quantity Required if CommodityRegulatedLevelCode = LQ or FR. The numerical value of the mass capacity of the regulated good.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets uom
     *
     * @return string
     */
    public function getUom()
    {
        return $this->container['uom'];
    }

    /**
     * Sets uom
     *
     * @param string $uom Required if CommodityRegulatedLevelCode = LQ or FR. The unit of measure used for the mass capacity of the regulated good.    Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.
     *
     * @return $this
     */
    public function setUom($uom)
    {
        $this->container['uom'] = $uom;

        return $this;
    }

    /**
     * Gets packaging_instruction_code
     *
     * @return string
     */
    public function getPackagingInstructionCode()
    {
        return $this->container['packaging_instruction_code'];
    }

    /**
     * Sets packaging_instruction_code
     *
     * @param string $packaging_instruction_code The packing instructions related to the chemical record. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
     *
     * @return $this
     */
    public function setPackagingInstructionCode($packaging_instruction_code)
    {
        $this->container['packaging_instruction_code'] = $packaging_instruction_code;

        return $this;
    }

    /**
     * Gets proper_shipping_name
     *
     * @return string
     */
    public function getProperShippingName()
    {
        return $this->container['proper_shipping_name'];
    }

    /**
     * Sets proper_shipping_name
     *
     * @param string $proper_shipping_name The Proper Shipping Name assigned by ADR, CFR or IATA.   Required if CommodityRegulatedLevelCode = LR, LQ or FR.
     *
     * @return $this
     */
    public function setProperShippingName($proper_shipping_name)
    {
        $this->container['proper_shipping_name'] = $proper_shipping_name;

        return $this;
    }

    /**
     * Gets technical_name
     *
     * @return string
     */
    public function getTechnicalName()
    {
        return $this->container['technical_name'];
    }

    /**
     * Sets technical_name
     *
     * @param string $technical_name The technical name (when required) for the specified commodity.   Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
     *
     * @return $this
     */
    public function setTechnicalName($technical_name)
    {
        $this->container['technical_name'] = $technical_name;

        return $this;
    }

    /**
     * Gets additional_description
     *
     * @return string
     */
    public function getAdditionalDescription()
    {
        return $this->container['additional_description'];
    }

    /**
     * Sets additional_description
     *
     * @param string $additional_description Additional remarks or special provision information. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.  Additional information that may be required by regulation about a hazardous material, such as, “Limited Quantity”, DOT-SP numbers, EX numbers.
     *
     * @return $this
     */
    public function setAdditionalDescription($additional_description)
    {
        $this->container['additional_description'] = $additional_description;

        return $this;
    }

    /**
     * Gets packaging_type
     *
     * @return string
     */
    public function getPackagingType()
    {
        return $this->container['packaging_type'];
    }

    /**
     * Sets packaging_type
     *
     * @param string $packaging_type The package type code identifying the type of packaging used for the commodity. (Ex: Fiberboard Box).  Required if CommodityRegulatedLevelCode = LQ or FR.
     *
     * @return $this
     */
    public function setPackagingType($packaging_type)
    {
        $this->container['packaging_type'] = $packaging_type;

        return $this;
    }

    /**
     * Gets hazard_label_required
     *
     * @return string
     */
    public function getHazardLabelRequired()
    {
        return $this->container['hazard_label_required'];
    }

    /**
     * Sets hazard_label_required
     *
     * @param string $hazard_label_required Defines the type of label that is required on the package for the commodity.   Not applicable if CommodityRegulatedLevelCode = LR or EQ.
     *
     * @return $this
     */
    public function setHazardLabelRequired($hazard_label_required)
    {
        $this->container['hazard_label_required'] = $hazard_label_required;

        return $this;
    }

    /**
     * Gets packaging_type_quantity
     *
     * @return string
     */
    public function getPackagingTypeQuantity()
    {
        return $this->container['packaging_type_quantity'];
    }

    /**
     * Sets packaging_type_quantity
     *
     * @param string $packaging_type_quantity The number of pieces of the specific commodity.   Required if CommodityRegulatedLevelCode = LQ or FR.  Valid values: 1 to 999
     *
     * @return $this
     */
    public function setPackagingTypeQuantity($packaging_type_quantity)
    {
        $this->container['packaging_type_quantity'] = $packaging_type_quantity;

        return $this;
    }

    /**
     * Gets commodity_regulated_level_code
     *
     * @return string
     */
    public function getCommodityRegulatedLevelCode()
    {
        return $this->container['commodity_regulated_level_code'];
    }

    /**
     * Sets commodity_regulated_level_code
     *
     * @param string $commodity_regulated_level_code Indicates the type of commodity.  Valid values: LR, FR, LQ, EQ  FR = Fully Regulated LQ = Limited Quantity EQ = Excepted Quantity LR = Lightly Regulated
     *
     * @return $this
     */
    public function setCommodityRegulatedLevelCode($commodity_regulated_level_code)
    {
        $this->container['commodity_regulated_level_code'] = $commodity_regulated_level_code;

        return $this;
    }

    /**
     * Gets transport_category
     *
     * @return string
     */
    public function getTransportCategory()
    {
        return $this->container['transport_category'];
    }

    /**
     * Sets transport_category
     *
     * @param string $transport_category Transport Category.  Valid values: 0 to 4
     *
     * @return $this
     */
    public function setTransportCategory($transport_category)
    {
        $this->container['transport_category'] = $transport_category;

        return $this;
    }

    /**
     * Gets tunnel_restriction_code
     *
     * @return string
     */
    public function getTunnelRestrictionCode()
    {
        return $this->container['tunnel_restriction_code'];
    }

    /**
     * Sets tunnel_restriction_code
     *
     * @param string $tunnel_restriction_code Defines what is restricted to pass through a tunnel.
     *
     * @return $this
     */
    public function setTunnelRestrictionCode($tunnel_restriction_code)
    {
        $this->container['tunnel_restriction_code'] = $tunnel_restriction_code;

        return $this;
    }

    /**
     * Gets all_packed_in_one_indicator
     *
     * @return string
     */
    public function getAllPackedInOneIndicator()
    {
        return $this->container['all_packed_in_one_indicator'];
    }

    /**
     * Sets all_packed_in_one_indicator
     *
     * @param string $all_packed_in_one_indicator Indicates the hazmat shipment/package is all packed in one.
     *
     * @return $this
     */
    public function setAllPackedInOneIndicator($all_packed_in_one_indicator)
    {
        $this->container['all_packed_in_one_indicator'] = $all_packed_in_one_indicator;

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
