<?php
/**
 * PricingSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\EbayInventoryClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * OpenAPI spec version: 1.11.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.16
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\EbayInventoryClient\Model;

use \ArrayAccess;
use \Swagger\EbayInventoryClient\ObjectSerializer;

/**
 * PricingSummary Class Doc Comment
 *
 * @category Class
 * @description This type is used to specify the listing price for the product and settings for the Minimum Advertised Price and Strikethrough Pricing features. The &lt;strong&gt;price&lt;/strong&gt; field must be supplied before an offer is published, but a seller may create an offer without supplying a price initially. The Minimum Advertised Price feature is only available on the US site. Strikethrough Pricing is available on the US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, and Spain sites.
 * @package  Swagger\EbayInventoryClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PricingSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PricingSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'minimum_advertised_price' => '\Swagger\EbayInventoryClient\Model\Amount',
        'originally_sold_for_retail_price_on' => 'string',
        'original_retail_price' => '\Swagger\EbayInventoryClient\Model\Amount',
        'price' => '\Swagger\EbayInventoryClient\Model\Amount',
        'pricing_visibility' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'minimum_advertised_price' => null,
        'originally_sold_for_retail_price_on' => null,
        'original_retail_price' => null,
        'price' => null,
        'pricing_visibility' => null
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
        'minimum_advertised_price' => 'minimumAdvertisedPrice',
        'originally_sold_for_retail_price_on' => 'originallySoldForRetailPriceOn',
        'original_retail_price' => 'originalRetailPrice',
        'price' => 'price',
        'pricing_visibility' => 'pricingVisibility'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'minimum_advertised_price' => 'setMinimumAdvertisedPrice',
        'originally_sold_for_retail_price_on' => 'setOriginallySoldForRetailPriceOn',
        'original_retail_price' => 'setOriginalRetailPrice',
        'price' => 'setPrice',
        'pricing_visibility' => 'setPricingVisibility'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'minimum_advertised_price' => 'getMinimumAdvertisedPrice',
        'originally_sold_for_retail_price_on' => 'getOriginallySoldForRetailPriceOn',
        'original_retail_price' => 'getOriginalRetailPrice',
        'price' => 'getPrice',
        'pricing_visibility' => 'getPricingVisibility'
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
        $this->container['minimum_advertised_price'] = isset($data['minimum_advertised_price']) ? $data['minimum_advertised_price'] : null;
        $this->container['originally_sold_for_retail_price_on'] = isset($data['originally_sold_for_retail_price_on']) ? $data['originally_sold_for_retail_price_on'] : null;
        $this->container['original_retail_price'] = isset($data['original_retail_price']) ? $data['original_retail_price'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['pricing_visibility'] = isset($data['pricing_visibility']) ? $data['pricing_visibility'] : null;
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
     * Gets minimum_advertised_price
     *
     * @return \Swagger\EbayInventoryClient\Model\Amount
     */
    public function getMinimumAdvertisedPrice()
    {
        return $this->container['minimum_advertised_price'];
    }

    /**
     * Sets minimum_advertised_price
     *
     * @param \Swagger\EbayInventoryClient\Model\Amount $minimum_advertised_price minimum_advertised_price
     *
     * @return $this
     */
    public function setMinimumAdvertisedPrice($minimum_advertised_price)
    {
        $this->container['minimum_advertised_price'] = $minimum_advertised_price;

        return $this;
    }

    /**
     * Gets originally_sold_for_retail_price_on
     *
     * @return string
     */
    public function getOriginallySoldForRetailPriceOn()
    {
        return $this->container['originally_sold_for_retail_price_on'];
    }

    /**
     * Sets originally_sold_for_retail_price_on
     *
     * @param string $originally_sold_for_retail_price_on This field is needed if the Strikethrough Pricing (STP) feature will be used in the offer. This field indicates that the product was sold for the price in the originalRetailPrice field on an eBay site, or sold for that price by a third-party retailer. When using the createOffer or updateOffer calls, the seller will pass in a value of ON_EBAY to indicate that the product was sold for the originalRetailPrice on an eBay site, or the seller will pass in a value of OFF_EBAY to indicate that the product was sold for the originalRetailPrice through a third-party retailer. This field and the originalRetailPrice field are only applicable if the seller and listing are eligible to use the Strikethrough Pricing feature, a feature which is limited to the US (core site and Motors), UK, Germany, Canada (English and French versions), France, Italy, and Spain sites. This field will be returned if set for the offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:SoldOnEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setOriginallySoldForRetailPriceOn($originally_sold_for_retail_price_on)
    {
        $this->container['originally_sold_for_retail_price_on'] = $originally_sold_for_retail_price_on;

        return $this;
    }

    /**
     * Gets original_retail_price
     *
     * @return \Swagger\EbayInventoryClient\Model\Amount
     */
    public function getOriginalRetailPrice()
    {
        return $this->container['original_retail_price'];
    }

    /**
     * Sets original_retail_price
     *
     * @param \Swagger\EbayInventoryClient\Model\Amount $original_retail_price original_retail_price
     *
     * @return $this
     */
    public function setOriginalRetailPrice($original_retail_price)
    {
        $this->container['original_retail_price'] = $original_retail_price;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Swagger\EbayInventoryClient\Model\Amount
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Swagger\EbayInventoryClient\Model\Amount $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets pricing_visibility
     *
     * @return string
     */
    public function getPricingVisibility()
    {
        return $this->container['pricing_visibility'];
    }

    /**
     * Sets pricing_visibility
     *
     * @param string $pricing_visibility This field is needed if the Minimum Advertised Price (MAP) feature will be used in the offer. This field is only applicable if an eligible US seller is using the Minimum Advertised Price (MAP) feature and a minimumAdvertisedPrice has been specified. The value set in this field will determine whether the MAP price is shown to a prospective buyer prior to checkout through a pop-up window accessed from the View Item page, or if the MAP price is not shown until the checkout flow after the buyer has already committed to buying the item. To show the MAP price prior to checkout, the seller will set this value to PRE_CHECKOUT. To show the MAP price after the buyer already commits to buy the item, the seller will set this value to DURING_CHECKOUT. This field will be ignored if the seller and/or the listing is not eligible for the MAP feature. This field will be returned if set for the offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MinimumAdvertisedPriceHandlingEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setPricingVisibility($pricing_visibility)
    {
        $this->container['pricing_visibility'] = $pricing_visibility;

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


