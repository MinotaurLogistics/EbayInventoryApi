<?php
/**
 * BestOffer
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
 * BestOffer Class Doc Comment
 *
 * @category Class
 * @description This type is used by the bestOfferTerms container, which is used if the seller would like to support the Best Offer feature on their listing.
 * @package  Swagger\EbayInventoryClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BestOffer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BestOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'auto_accept_price' => '\Swagger\EbayInventoryClient\Model\Amount',
        'auto_decline_price' => '\Swagger\EbayInventoryClient\Model\Amount',
        'best_offer_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'auto_accept_price' => null,
        'auto_decline_price' => null,
        'best_offer_enabled' => null
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
        'auto_accept_price' => 'autoAcceptPrice',
        'auto_decline_price' => 'autoDeclinePrice',
        'best_offer_enabled' => 'bestOfferEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_accept_price' => 'setAutoAcceptPrice',
        'auto_decline_price' => 'setAutoDeclinePrice',
        'best_offer_enabled' => 'setBestOfferEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_accept_price' => 'getAutoAcceptPrice',
        'auto_decline_price' => 'getAutoDeclinePrice',
        'best_offer_enabled' => 'getBestOfferEnabled'
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
        $this->container['auto_accept_price'] = $data['auto_accept_price'] ?? null;
        $this->container['auto_decline_price'] = $data['auto_decline_price'] ?? null;
        $this->container['best_offer_enabled'] = $data['best_offer_enabled'] ?? null;
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
     * Gets auto_accept_price
     *
     * @return \Swagger\EbayInventoryClient\Model\Amount|null
     */
    public function getAutoAcceptPrice()
    {
        return $this->container['auto_accept_price'];
    }

    /**
     * Sets auto_accept_price
     *
     * @param \Swagger\EbayInventoryClient\Model\Amount|null $auto_accept_price auto_accept_price
     *
     * @return self
     */
    public function setAutoAcceptPrice($auto_accept_price)
    {
        $this->container['auto_accept_price'] = $auto_accept_price;

        return $this;
    }

    /**
     * Gets auto_decline_price
     *
     * @return \Swagger\EbayInventoryClient\Model\Amount|null
     */
    public function getAutoDeclinePrice()
    {
        return $this->container['auto_decline_price'];
    }

    /**
     * Sets auto_decline_price
     *
     * @param \Swagger\EbayInventoryClient\Model\Amount|null $auto_decline_price auto_decline_price
     *
     * @return self
     */
    public function setAutoDeclinePrice($auto_decline_price)
    {
        $this->container['auto_decline_price'] = $auto_decline_price;

        return $this;
    }

    /**
     * Gets best_offer_enabled
     *
     * @return bool|null
     */
    public function getBestOfferEnabled()
    {
        return $this->container['best_offer_enabled'];
    }

    /**
     * Sets best_offer_enabled
     *
     * @param bool|null $best_offer_enabled This field indicates whether or not the Best Offer feature is enabled for the listing. A seller can enable the Best Offer feature for a listing as long as the category supports the Best Offer feature. The seller includes this field and sets its value to true to enable Best Offer feature.
     *
     * @return self
     */
    public function setBestOfferEnabled($best_offer_enabled)
    {
        $this->container['best_offer_enabled'] = $best_offer_enabled;

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


