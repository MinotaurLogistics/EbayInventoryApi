<?php
/**
 * Fee
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Swagger\EbayInventoryClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * The version of the OpenAPI document: 1.13.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Swagger\EbayInventoryClient\Model;

use \ArrayAccess;
use \Swagger\EbayInventoryClient\ObjectSerializer;

/**
 * Fee Class Doc Comment
 *
 * @category Class
 * @description This type is used to express expected listing fees that the seller may incur for one or more unpublished offers, as well as any eBay-related promotional discounts being applied toward a specific fee. These fees are the expected cumulative fees per eBay marketplace (which is indicated in the marketplaceId field).
 * @package  Swagger\EbayInventoryClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Fee implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Fee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => '\Swagger\EbayInventoryClient\Model\Amount',
        'fee_type' => 'string',
        'promotional_discount' => '\Swagger\EbayInventoryClient\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'fee_type' => null,
        'promotional_discount' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'fee_type' => 'feeType',
        'promotional_discount' => 'promotionalDiscount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'fee_type' => 'setFeeType',
        'promotional_discount' => 'setPromotionalDiscount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'fee_type' => 'getFeeType',
        'promotional_discount' => 'getPromotionalDiscount'
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
        return self::$openAPIModelName;
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['fee_type'] = $data['fee_type'] ?? null;
        $this->container['promotional_discount'] = $data['promotional_discount'] ?? null;
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
     * Gets amount
     *
     * @return \Swagger\EbayInventoryClient\Model\Amount|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Swagger\EbayInventoryClient\Model\Amount|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets fee_type
     *
     * @return string|null
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param string|null $fee_type The value returned in this field indicates the type of listing fee that the seller may incur if one or more unpublished offers (offers are specified in the call request) are published on the marketplace specified in the marketplaceId field. Applicable listing fees will often include things such as InsertionFee or SubtitleFee, but many fee types will get returned even when they are 0.0. See the Standard selling fees help page for more information on listing fees.
     *
     * @return self
     */
    public function setFeeType($fee_type)
    {
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets promotional_discount
     *
     * @return \Swagger\EbayInventoryClient\Model\Amount|null
     */
    public function getPromotionalDiscount()
    {
        return $this->container['promotional_discount'];
    }

    /**
     * Sets promotional_discount
     *
     * @param \Swagger\EbayInventoryClient\Model\Amount|null $promotional_discount promotional_discount
     *
     * @return self
     */
    public function setPromotionalDiscount($promotional_discount)
    {
        $this->container['promotional_discount'] = $promotional_discount;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


