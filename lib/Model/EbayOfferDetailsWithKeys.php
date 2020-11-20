<?php
/**
 * EbayOfferDetailsWithKeys
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
 * EbayOfferDetailsWithKeys Class Doc Comment
 *
 * @category Class
 * @description This type provides details of an offer, and is used by the base request payload of the &lt;strong&gt;createOffer&lt;/strong&gt; and &lt;strong&gt;bulkCreateOffer&lt;/strong&gt; methods.
 * @package  Swagger\EbayInventoryClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EbayOfferDetailsWithKeys implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EbayOfferDetailsWithKeys';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'available_quantity' => 'int',
        'category_id' => 'string',
        'charity' => '\Swagger\EbayInventoryClient\Model\Charity',
        'format' => 'string',
        'hide_buyer_details' => 'bool',
        'include_catalog_product_details' => 'bool',
        'listing_description' => 'string',
        'listing_duration' => 'string',
        'listing_policies' => '\Swagger\EbayInventoryClient\Model\ListingPolicies',
        'listing_start_date' => 'string',
        'lot_size' => 'int',
        'marketplace_id' => 'string',
        'merchant_location_key' => 'string',
        'pricing_summary' => '\Swagger\EbayInventoryClient\Model\PricingSummary',
        'quantity_limit_per_buyer' => 'int',
        'secondary_category_id' => 'string',
        'store_category_names' => 'string[]',
        'sku' => 'string',
        'tax' => '\Swagger\EbayInventoryClient\Model\Tax'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'available_quantity' => null,
        'category_id' => null,
        'charity' => null,
        'format' => null,
        'hide_buyer_details' => null,
        'include_catalog_product_details' => null,
        'listing_description' => null,
        'listing_duration' => null,
        'listing_policies' => null,
        'listing_start_date' => null,
        'lot_size' => null,
        'marketplace_id' => null,
        'merchant_location_key' => null,
        'pricing_summary' => null,
        'quantity_limit_per_buyer' => null,
        'secondary_category_id' => null,
        'store_category_names' => null,
        'sku' => null,
        'tax' => null
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
        'available_quantity' => 'availableQuantity',
        'category_id' => 'categoryId',
        'charity' => 'charity',
        'format' => 'format',
        'hide_buyer_details' => 'hideBuyerDetails',
        'include_catalog_product_details' => 'includeCatalogProductDetails',
        'listing_description' => 'listingDescription',
        'listing_duration' => 'listingDuration',
        'listing_policies' => 'listingPolicies',
        'listing_start_date' => 'listingStartDate',
        'lot_size' => 'lotSize',
        'marketplace_id' => 'marketplaceId',
        'merchant_location_key' => 'merchantLocationKey',
        'pricing_summary' => 'pricingSummary',
        'quantity_limit_per_buyer' => 'quantityLimitPerBuyer',
        'secondary_category_id' => 'secondaryCategoryId',
        'store_category_names' => 'storeCategoryNames',
        'sku' => 'sku',
        'tax' => 'tax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_quantity' => 'setAvailableQuantity',
        'category_id' => 'setCategoryId',
        'charity' => 'setCharity',
        'format' => 'setFormat',
        'hide_buyer_details' => 'setHideBuyerDetails',
        'include_catalog_product_details' => 'setIncludeCatalogProductDetails',
        'listing_description' => 'setListingDescription',
        'listing_duration' => 'setListingDuration',
        'listing_policies' => 'setListingPolicies',
        'listing_start_date' => 'setListingStartDate',
        'lot_size' => 'setLotSize',
        'marketplace_id' => 'setMarketplaceId',
        'merchant_location_key' => 'setMerchantLocationKey',
        'pricing_summary' => 'setPricingSummary',
        'quantity_limit_per_buyer' => 'setQuantityLimitPerBuyer',
        'secondary_category_id' => 'setSecondaryCategoryId',
        'store_category_names' => 'setStoreCategoryNames',
        'sku' => 'setSku',
        'tax' => 'setTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_quantity' => 'getAvailableQuantity',
        'category_id' => 'getCategoryId',
        'charity' => 'getCharity',
        'format' => 'getFormat',
        'hide_buyer_details' => 'getHideBuyerDetails',
        'include_catalog_product_details' => 'getIncludeCatalogProductDetails',
        'listing_description' => 'getListingDescription',
        'listing_duration' => 'getListingDuration',
        'listing_policies' => 'getListingPolicies',
        'listing_start_date' => 'getListingStartDate',
        'lot_size' => 'getLotSize',
        'marketplace_id' => 'getMarketplaceId',
        'merchant_location_key' => 'getMerchantLocationKey',
        'pricing_summary' => 'getPricingSummary',
        'quantity_limit_per_buyer' => 'getQuantityLimitPerBuyer',
        'secondary_category_id' => 'getSecondaryCategoryId',
        'store_category_names' => 'getStoreCategoryNames',
        'sku' => 'getSku',
        'tax' => 'getTax'
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
        $this->container['available_quantity'] = isset($data['available_quantity']) ? $data['available_quantity'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['charity'] = isset($data['charity']) ? $data['charity'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['hide_buyer_details'] = isset($data['hide_buyer_details']) ? $data['hide_buyer_details'] : null;
        $this->container['include_catalog_product_details'] = isset($data['include_catalog_product_details']) ? $data['include_catalog_product_details'] : null;
        $this->container['listing_description'] = isset($data['listing_description']) ? $data['listing_description'] : null;
        $this->container['listing_duration'] = isset($data['listing_duration']) ? $data['listing_duration'] : null;
        $this->container['listing_policies'] = isset($data['listing_policies']) ? $data['listing_policies'] : null;
        $this->container['listing_start_date'] = isset($data['listing_start_date']) ? $data['listing_start_date'] : null;
        $this->container['lot_size'] = isset($data['lot_size']) ? $data['lot_size'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['merchant_location_key'] = isset($data['merchant_location_key']) ? $data['merchant_location_key'] : null;
        $this->container['pricing_summary'] = isset($data['pricing_summary']) ? $data['pricing_summary'] : null;
        $this->container['quantity_limit_per_buyer'] = isset($data['quantity_limit_per_buyer']) ? $data['quantity_limit_per_buyer'] : null;
        $this->container['secondary_category_id'] = isset($data['secondary_category_id']) ? $data['secondary_category_id'] : null;
        $this->container['store_category_names'] = isset($data['store_category_names']) ? $data['store_category_names'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
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
     * Gets available_quantity
     *
     * @return int
     */
    public function getAvailableQuantity()
    {
        return $this->container['available_quantity'];
    }

    /**
     * Sets available_quantity
     *
     * @param int $available_quantity This integer value sets the quantity of the inventory item (specified by the sku value) that will be available for purchase by buyers shopping on the eBay site specified in the marketplaceId field. Quantity must be set to 1 or more in order for the inventory item to be purchasable, but this field is not necessarily required, even for published offers, if the general quantity of the inventory item has already been set in the inventory item record.
     *
     * @return $this
     */
    public function setAvailableQuantity($available_quantity)
    {
        $this->container['available_quantity'] = $available_quantity;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string $category_id The unique identifier of the eBay category that the product will be listed under. This field is not immediately required upon creating an offer, but will be required before publishing the offer. Sellers can use the getCategorySuggestions method of the Taxonomy API to retrieve suggested category ID values. The seller passes in a query string like &quot;iPhone 6&quot;, and category ID values for suggested categories are returned in the response.
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets charity
     *
     * @return \Swagger\EbayInventoryClient\Model\Charity
     */
    public function getCharity()
    {
        return $this->container['charity'];
    }

    /**
     * Sets charity
     *
     * @param \Swagger\EbayInventoryClient\Model\Charity $charity charity
     *
     * @return $this
     */
    public function setCharity($charity)
    {
        $this->container['charity'] = $charity;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format This enumerated value indicates the listing format of the offer. Currently, the only supported value for this field is FIXED_PRICE, as the Inventory API only supports fixed-price listings at this time. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:FormatTypeEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets hide_buyer_details
     *
     * @return bool
     */
    public function getHideBuyerDetails()
    {
        return $this->container['hide_buyer_details'];
    }

    /**
     * Sets hide_buyer_details
     *
     * @param bool $hide_buyer_details This field is included and set to true if the seller wishes to create a private listing. Sellers may want to use this option when they believe that a listing's potential bidders/buyers would not want their obfuscated user IDs (and feedback scores) exposed to other users.
     *
     * @return $this
     */
    public function setHideBuyerDetails($hide_buyer_details)
    {
        $this->container['hide_buyer_details'] = $hide_buyer_details;

        return $this;
    }

    /**
     * Gets include_catalog_product_details
     *
     * @return bool
     */
    public function getIncludeCatalogProductDetails()
    {
        return $this->container['include_catalog_product_details'];
    }

    /**
     * Sets include_catalog_product_details
     *
     * @param bool $include_catalog_product_details This field indicates whether or not eBay product catalog details are applied to a listing. A value of true indicates the listing corresponds to the eBay product associated with the provided product identifier. The product identifier is provided in createOrReplaceInventoryItem. Note: Though the includeCatalogProductDetails parameter is not required to be submitted in the request, the parameter defaults to 'true' if omitted.
     *
     * @return $this
     */
    public function setIncludeCatalogProductDetails($include_catalog_product_details)
    {
        $this->container['include_catalog_product_details'] = $include_catalog_product_details;

        return $this;
    }

    /**
     * Gets listing_description
     *
     * @return string
     */
    public function getListingDescription()
    {
        return $this->container['listing_description'];
    }

    /**
     * Sets listing_description
     *
     * @param string $listing_description The text in this field is (published offers), or will become (unpublished offers) the description of the eBay listing. This field is not immediately required for an unpublished offer, but will be required before publishing the offer. Note that if the listingDescription field was omitted in the createOffer call for the offer, the offer entity should have picked up the text provided in the product.description field of the inventory item record, or if the inventory item is part of a group, the offer entity should have picked up the text provided in the description field of the inventory item group record. HTML tags and markup can be used in listing descriptions, but each character counts toward the max length limit. Note: To ensure that their short listing description is optimized when viewed on mobile devices, sellers should strongly consider using eBay's View Item description summary feature when listing their items. Keep in mind that the 'short' listing description is what prospective buyers first see when they view the listing on a mobile device. The 'full' listing description is also available to mobile users when they click on the short listing description, but the full description is not automatically optimized for viewing in mobile devices, and many users won't even drill down to the full description. Using HTML div and span tag attributes, this feature allows sellers to customize and fully control the short listing description that is displayed to prospective buyers when viewing the listing on a mobile device. The short listing description on mobile devices is limited to 800 characters, and whenever the full listing description (provided in this field, in UI, or seller tool) exceeds this limit, eBay uses a special algorithm to derive the best possible short listing description within the 800-character limit. However, due to some short listing description content being removed, it is definitely not ideal for the seller, and could lead to a bad buyer experience and possibly to a Significantly not as described (SNAD) case, since the buyer may not get complete details on the item when viewing the short listing description. See the eBay help page for more details on using the HTML div and span tags. Max length: 500000 (which includes HTML markup/tags)
     *
     * @return $this
     */
    public function setListingDescription($listing_description)
    {
        $this->container['listing_description'] = $listing_description;

        return $this;
    }

    /**
     * Gets listing_duration
     *
     * @return string
     */
    public function getListingDuration()
    {
        return $this->container['listing_duration'];
    }

    /**
     * Sets listing_duration
     *
     * @param string $listing_duration Note: This field is not necessary (and has no effect) since 'GTC' (Good 'til Cancelled) is the only supported listing duration, and the listingDuration value gets set to GTC by default. This field indicates the number of days that the seller wants the listing to be active. 'GTC' listings are automatically renewed each calendar month until the seller decides to end the listing. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ListingDurationEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setListingDuration($listing_duration)
    {
        $this->container['listing_duration'] = $listing_duration;

        return $this;
    }

    /**
     * Gets listing_policies
     *
     * @return \Swagger\EbayInventoryClient\Model\ListingPolicies
     */
    public function getListingPolicies()
    {
        return $this->container['listing_policies'];
    }

    /**
     * Sets listing_policies
     *
     * @param \Swagger\EbayInventoryClient\Model\ListingPolicies $listing_policies listing_policies
     *
     * @return $this
     */
    public function setListingPolicies($listing_policies)
    {
        $this->container['listing_policies'] = $listing_policies;

        return $this;
    }

    /**
     * Gets listing_start_date
     *
     * @return string
     */
    public function getListingStartDate()
    {
        return $this->container['listing_start_date'];
    }

    /**
     * Sets listing_start_date
     *
     * @param string $listing_start_date This field can be used if the seller wants to specify a time in the future that the listing will become active on eBay. The timestamp supplied in this field should be in UTC format, and it should be far enough in the future so that the seller will have enought time to publish the listing with the publishOffer method. This field is optional. If this field is not provided, the listing starts immediately after a successful publishOffer method.
     *
     * @return $this
     */
    public function setListingStartDate($listing_start_date)
    {
        $this->container['listing_start_date'] = $listing_start_date;

        return $this;
    }

    /**
     * Gets lot_size
     *
     * @return int
     */
    public function getLotSize()
    {
        return $this->container['lot_size'];
    }

    /**
     * Sets lot_size
     *
     * @param int $lot_size This field is only applicable if the listing is a lot listing. A lot listing is a listing that has multiple quantity of the same product. An example would be a set of four identical car tires. The integer value passed into this field is the number of identical items being sold through the lot listing.
     *
     * @return $this
     */
    public function setLotSize($lot_size)
    {
        $this->container['lot_size'] = $lot_size;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id This enumeration value is the unique identifier of the eBay site for which the offer will be made available. See MarketplaceEnum for the list of supported enumeration values. This field is required. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets merchant_location_key
     *
     * @return string
     */
    public function getMerchantLocationKey()
    {
        return $this->container['merchant_location_key'];
    }

    /**
     * Sets merchant_location_key
     *
     * @param string $merchant_location_key The unique identifier of a merchant's inventory location (where the inventory item in the offer is located). A merchantLocationKey value is established when the merchant creates an inventory location using the createInventoryLocation call. To get more information about inventory locations, the getInventoryLocation call can be used. This field is not initially required upon first creating an offer, but will become required before an offer can be published. Max length: 36
     *
     * @return $this
     */
    public function setMerchantLocationKey($merchant_location_key)
    {
        $this->container['merchant_location_key'] = $merchant_location_key;

        return $this;
    }

    /**
     * Gets pricing_summary
     *
     * @return \Swagger\EbayInventoryClient\Model\PricingSummary
     */
    public function getPricingSummary()
    {
        return $this->container['pricing_summary'];
    }

    /**
     * Sets pricing_summary
     *
     * @param \Swagger\EbayInventoryClient\Model\PricingSummary $pricing_summary pricing_summary
     *
     * @return $this
     */
    public function setPricingSummary($pricing_summary)
    {
        $this->container['pricing_summary'] = $pricing_summary;

        return $this;
    }

    /**
     * Gets quantity_limit_per_buyer
     *
     * @return int
     */
    public function getQuantityLimitPerBuyer()
    {
        return $this->container['quantity_limit_per_buyer'];
    }

    /**
     * Sets quantity_limit_per_buyer
     *
     * @param int $quantity_limit_per_buyer This field is only applicable and set if the seller wishes to set a restriction on the purchase quantity per seller. If this field is set by the seller for the offer, then each distinct buyer may purchase up to, but not exceed the quantity specified for this field. So, if this field's value is 5, each buyer may purchase between one to five of these products, and the purchases can occur in one multiple-quantity purchase, or over multiple transactions. If a buyer attempts to purchase one or more of these products, and the cumulative quantity will take the buyer beyond the quantity limit, that buyer will be blocked from that purchase.
     *
     * @return $this
     */
    public function setQuantityLimitPerBuyer($quantity_limit_per_buyer)
    {
        $this->container['quantity_limit_per_buyer'] = $quantity_limit_per_buyer;

        return $this;
    }

    /**
     * Gets secondary_category_id
     *
     * @return string
     */
    public function getSecondaryCategoryId()
    {
        return $this->container['secondary_category_id'];
    }

    /**
     * Sets secondary_category_id
     *
     * @param string $secondary_category_id The unique identifier for a secondary category. This field is applicable if the seller decides to list the item under two categories. Sellers can use the getCategorySuggestions method of the Taxonomy API to retrieve suggested category ID values. A fee may be charged when adding a secondary category to a listing. Note: You cannot list US eBay Motors vehicles in two categories. However, you can list Parts &amp; Accessories in two categories.
     *
     * @return $this
     */
    public function setSecondaryCategoryId($secondary_category_id)
    {
        $this->container['secondary_category_id'] = $secondary_category_id;

        return $this;
    }

    /**
     * Gets store_category_names
     *
     * @return string[]
     */
    public function getStoreCategoryNames()
    {
        return $this->container['store_category_names'];
    }

    /**
     * Sets store_category_names
     *
     * @param string[] $store_category_names This container is used if the seller would like to place the inventory item into one or two eBay store categories that the seller has set up for their eBay store. The string value(s) passed in to this container will be the full path(s) to the eBay store categories, as shown below: &quot;storeCategoryNames&quot;: [  &quot;/Fashion/Men/Shirts&quot;,  &quot;/Fashion/Men/Accessories&quot; ],
     *
     * @return $this
     */
    public function setStoreCategoryNames($store_category_names)
    {
        $this->container['store_category_names'] = $store_category_names;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku This is the seller-defined SKU value of the product that will be listed on the eBay site (specified in the marketplaceId field). Only one offer (in unpublished or published state) may exist for each sku/marketplaceId/format combination. This field is required. Max Length: 50
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \Swagger\EbayInventoryClient\Model\Tax
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \Swagger\EbayInventoryClient\Model\Tax $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

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


