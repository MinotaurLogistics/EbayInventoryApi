<?php
/**
 * MigrateListingResponse
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
 * MigrateListingResponse Class Doc Comment
 *
 * @category Class
 * @description This type is used to display the results of each listing that the seller attempted to migrate.
 * @package  Swagger\EbayInventoryClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MigrateListingResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MigrateListingResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'errors' => '\Swagger\EbayInventoryClient\Model\Error[]',
        'inventory_item_group_key' => 'string',
        'inventory_items' => '\Swagger\EbayInventoryClient\Model\InventoryItemListing[]',
        'listing_id' => 'string',
        'marketplace_id' => 'string',
        'status_code' => 'int',
        'warnings' => '\Swagger\EbayInventoryClient\Model\Error[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'errors' => null,
        'inventory_item_group_key' => null,
        'inventory_items' => null,
        'listing_id' => null,
        'marketplace_id' => null,
        'status_code' => null,
        'warnings' => null
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
        'errors' => 'errors',
        'inventory_item_group_key' => 'inventoryItemGroupKey',
        'inventory_items' => 'inventoryItems',
        'listing_id' => 'listingId',
        'marketplace_id' => 'marketplaceId',
        'status_code' => 'statusCode',
        'warnings' => 'warnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'errors' => 'setErrors',
        'inventory_item_group_key' => 'setInventoryItemGroupKey',
        'inventory_items' => 'setInventoryItems',
        'listing_id' => 'setListingId',
        'marketplace_id' => 'setMarketplaceId',
        'status_code' => 'setStatusCode',
        'warnings' => 'setWarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'errors' => 'getErrors',
        'inventory_item_group_key' => 'getInventoryItemGroupKey',
        'inventory_items' => 'getInventoryItems',
        'listing_id' => 'getListingId',
        'marketplace_id' => 'getMarketplaceId',
        'status_code' => 'getStatusCode',
        'warnings' => 'getWarnings'
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
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['inventory_item_group_key'] = isset($data['inventory_item_group_key']) ? $data['inventory_item_group_key'] : null;
        $this->container['inventory_items'] = isset($data['inventory_items']) ? $data['inventory_items'] : null;
        $this->container['listing_id'] = isset($data['listing_id']) ? $data['listing_id'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
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
     * Gets errors
     *
     * @return \Swagger\EbayInventoryClient\Model\Error[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Swagger\EbayInventoryClient\Model\Error[] $errors If one or more errors occur with the attempt to migrate the listing, this container will be returned with detailed information on each error.
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets inventory_item_group_key
     *
     * @return string
     */
    public function getInventoryItemGroupKey()
    {
        return $this->container['inventory_item_group_key'];
    }

    /**
     * Sets inventory_item_group_key
     *
     * @param string $inventory_item_group_key This field will only be returned for a multiple-variation listing that the seller attempted to migrate. Its value is auto-generated by eBay. For a multiple-variation listing that is successfully migrated to the new Inventory model, eBay automatically creates an inventory item group object for the listing, and the seller will be able to retrieve and manage that new inventory item group object by using the value in this field.
     *
     * @return $this
     */
    public function setInventoryItemGroupKey($inventory_item_group_key)
    {
        $this->container['inventory_item_group_key'] = $inventory_item_group_key;

        return $this;
    }

    /**
     * Gets inventory_items
     *
     * @return \Swagger\EbayInventoryClient\Model\InventoryItemListing[]
     */
    public function getInventoryItems()
    {
        return $this->container['inventory_items'];
    }

    /**
     * Sets inventory_items
     *
     * @param \Swagger\EbayInventoryClient\Model\InventoryItemListing[] $inventory_items This container exists of an array of SKU values and offer IDs. For single-variation listings, this will only be one SKU value and one offer ID (if listing was successfully migrated), but multiple SKU values and offer IDs will be returned for multiple-variation listings.
     *
     * @return $this
     */
    public function setInventoryItems($inventory_items)
    {
        $this->container['inventory_items'] = $inventory_items;

        return $this;
    }

    /**
     * Gets listing_id
     *
     * @return string
     */
    public function getListingId()
    {
        return $this->container['listing_id'];
    }

    /**
     * Sets listing_id
     *
     * @param string $listing_id The unique identifier of the eBay listing that the seller attempted to migrate.
     *
     * @return $this
     */
    public function setListingId($listing_id)
    {
        $this->container['listing_id'] = $listing_id;

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
     * @param string $marketplace_id This is the unique identifier of the eBay Marketplace where the listing resides. The value fo the eBay US site will be EBAY_US. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets status_code
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int $status_code This field is returned for each listing that the seller attempted to migrate. See the HTTP status codes table to see which each status code indicates.
     *
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \Swagger\EbayInventoryClient\Model\Error[]
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \Swagger\EbayInventoryClient\Model\Error[] $warnings If one or more warnings occur with the attempt to migrate the listing, this container will be returned with detailed information on each warning. It is possible that a listing can be successfully migrated even if a warning occurs.
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

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


