<?php
/**
 * CallcreditIdentityCheckResponseAddress
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DueDil API v4
 *
 * Welcome to the DueDil API v4, which provides programmatic access to DueDil's comprehensive company data. It can be used to enhance a wide variety of business functions, from auto-populating website forms to verifying customer credentials.  ### Getting started In order to make requests, you'll need to obtain an API key. Please visit https://www.duedil.com/api for more information. Once you have an API key, requests can be made using a UI such as [Postman](https://www.getpostman.com/) or via a terminal using [curl](https://curl.haxx.se/docs/manual.html). An example curl request should look as follows:  ``` curl -X GET --header 'Accept: application/json' --header 'X-AUTH-TOKEN: api_key' 'https://duedil.io/v4/company/gb/06999618.json' ```  ### Generating clients  This API has been authored using the [OpenAPI](https://en.wikipedia.org/wiki/OpenAPI_Specification) (Swagger) specification. Being machine readable, it can be used to generate V4 API clients in a range of languages. To create a client:   * Open the [Swagger Editor](http://editor.swagger.io/).  * Select 'File', 'Import URL' then enter https://duedil.io/v4/swagger.json  * Select 'Generate Client' then choose from over 30 languages such as PHP, Python and Java.  ### International data  DueDil provides a wide range of data spanning across multiple geographic regions. Our international package currently includes company information from the following countries:  | Country              |    | Country       |    | |----------------------|----|---------------|----| | Albania              | AL | Jersey        | JE | | Bahamas              | BS | Latvia        | LV | | Belgium              | BE | Liechtenstein | LI | | Bermuda              | BM | Luxembourg    | LU | | Hong Kong, SAR China | HK | Malta         | MT | | Cyprus               | CY | Montenegro    | ME | | Denmark              | DK | Netherlands   | NL | | Finland              | FI | Norway        | NO | | France               | FR | Poland        | PL | | Germany              | DE | Romania       | RO | | Greenland            | GL | Slovakia      | SK | | Guernsey             | GG | Slovenia      | SI | | Iceland              | IS | Sweden        | SE | | Isle of Man          | IM | Switzerland   | CH | | Israel               | IL |               |    |  Retrieving international data is simple. Construct your request with the corresponding country code. For the German company [Daimler AG](https://www.duedil.com/company/de/Stuttgart%20HRB%2019360/daimler-ag) you should construct your request URI as follows:  ``` curl -X GET --header 'Accept: application/json' --header 'X-AUTH-TOKEN: api_key' 'https://duedil.io/v4/company/de/Stuttgart%20HRB%2019360.json' ```  For Companies search, the country code should be included in the post body:  ``` {     \"criteria\": {         \"name\": \"Daimler AG\",         \"countryCodes\": {             \"values\": [\"DE\", \"FR\"]         }     } } ```  **Note:** You will need to have international access added to your plan to search for and retrieve information for companies outside of the United Kingdom (GB) and Ireland (IE).  #### Data coverage  While 100% coverage is our goal, this is not feasible for every international country at present. If we cannot find the entity you are requesting, the API will return HTTP 404 with message “Resource not found”. Partial responses can include null fields where specific data is unavailable.  ### Pagination  All endpoints that return collections can be paginated in the same way through two optional parameters (`limit` and `offset`). The `offset` parameter determines the 0-based index of the first element of the collection to be returned, which defaults to 0. The `limit` parameter sets the maximum number of items from the collection to be returned, which defaults to 10. The maximum allowed limit parameter is 50.  **Note:** API keys issued for evaluation purposes will have limited access to the first 10 search results only. Other non-search endpoints do not apply this constraint.   Every response from a paginated endpoint contains a top-level property called `pagination`, which in turn contains the `offset` and `limit` values used in the API call, as well as the `total` number of items in the collection. For instance:   ``` \"pagination\": {   \"offset\": 0,   \"limit\": 10,   \"total\": 12 } ```   In the example above, an API call with `offset` = 10 and `limit` = 10 would return the 11th and 12th items in the collection, whereas an API call with `offset` = 20 and `limit` = 10 would return a successful response (200 HTTP code) with an empty collection. Calls with invalid `offset`/`limit` parameters, such as negative values, return an error (400 HTTP code).
 *
 * OpenAPI spec version: 4.5.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CallcreditIdentityCheckResponseAddress Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallcreditIdentityCheckResponseAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallcreditIdentityCheckResponse_address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_pick_list_found' => 'bool',
        'current_address_matched' => 'string',
        'forwarding_address' => 'string',
        'num_address_links' => 'int',
        'paf_valid' => 'bool',
        'director_at_home' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_pick_list_found' => null,
        'current_address_matched' => null,
        'forwarding_address' => null,
        'num_address_links' => null,
        'paf_valid' => null,
        'director_at_home' => null
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
        'address_pick_list_found' => 'addressPickListFound',
        'current_address_matched' => 'currentAddressMatched',
        'forwarding_address' => 'forwardingAddress',
        'num_address_links' => 'numAddressLinks',
        'paf_valid' => 'pafValid',
        'director_at_home' => 'directorAtHome'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_pick_list_found' => 'setAddressPickListFound',
        'current_address_matched' => 'setCurrentAddressMatched',
        'forwarding_address' => 'setForwardingAddress',
        'num_address_links' => 'setNumAddressLinks',
        'paf_valid' => 'setPafValid',
        'director_at_home' => 'setDirectorAtHome'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_pick_list_found' => 'getAddressPickListFound',
        'current_address_matched' => 'getCurrentAddressMatched',
        'forwarding_address' => 'getForwardingAddress',
        'num_address_links' => 'getNumAddressLinks',
        'paf_valid' => 'getPafValid',
        'director_at_home' => 'getDirectorAtHome'
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
        $this->container['address_pick_list_found'] = isset($data['address_pick_list_found']) ? $data['address_pick_list_found'] : null;
        $this->container['current_address_matched'] = isset($data['current_address_matched']) ? $data['current_address_matched'] : null;
        $this->container['forwarding_address'] = isset($data['forwarding_address']) ? $data['forwarding_address'] : null;
        $this->container['num_address_links'] = isset($data['num_address_links']) ? $data['num_address_links'] : null;
        $this->container['paf_valid'] = isset($data['paf_valid']) ? $data['paf_valid'] : null;
        $this->container['director_at_home'] = isset($data['director_at_home']) ? $data['director_at_home'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address_pick_list_found'] === null) {
            $invalidProperties[] = "'address_pick_list_found' can't be null";
        }
        if ($this->container['current_address_matched'] === null) {
            $invalidProperties[] = "'current_address_matched' can't be null";
        }
        if ($this->container['forwarding_address'] === null) {
            $invalidProperties[] = "'forwarding_address' can't be null";
        }
        if ($this->container['num_address_links'] === null) {
            $invalidProperties[] = "'num_address_links' can't be null";
        }
        if ($this->container['paf_valid'] === null) {
            $invalidProperties[] = "'paf_valid' can't be null";
        }
        if ($this->container['director_at_home'] === null) {
            $invalidProperties[] = "'director_at_home' can't be null";
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
     * Gets address_pick_list_found
     *
     * @return bool
     */
    public function getAddressPickListFound()
    {
        return $this->container['address_pick_list_found'];
    }

    /**
     * Sets address_pick_list_found
     *
     * @param bool $address_pick_list_found Whether or not an address picklist has been found for the address provided
     *
     * @return $this
     */
    public function setAddressPickListFound($address_pick_list_found)
    {
        $this->container['address_pick_list_found'] = $address_pick_list_found;

        return $this;
    }

    /**
     * Gets current_address_matched
     *
     * @return string
     */
    public function getCurrentAddressMatched()
    {
        return $this->container['current_address_matched'];
    }

    /**
     * Sets current_address_matched
     *
     * @param string $current_address_matched The matched current address for the individual
     *
     * @return $this
     */
    public function setCurrentAddressMatched($current_address_matched)
    {
        $this->container['current_address_matched'] = $current_address_matched;

        return $this;
    }

    /**
     * Gets forwarding_address
     *
     * @return string
     */
    public function getForwardingAddress()
    {
        return $this->container['forwarding_address'];
    }

    /**
     * Sets forwarding_address
     *
     * @param string $forwarding_address The most recent forwarding address for the individual, if present
     *
     * @return $this
     */
    public function setForwardingAddress($forwarding_address)
    {
        $this->container['forwarding_address'] = $forwarding_address;

        return $this;
    }

    /**
     * Gets num_address_links
     *
     * @return int
     */
    public function getNumAddressLinks()
    {
        return $this->container['num_address_links'];
    }

    /**
     * Sets num_address_links
     *
     * @param int $num_address_links num_address_links
     *
     * @return $this
     */
    public function setNumAddressLinks($num_address_links)
    {
        $this->container['num_address_links'] = $num_address_links;

        return $this;
    }

    /**
     * Gets paf_valid
     *
     * @return bool
     */
    public function getPafValid()
    {
        return $this->container['paf_valid'];
    }

    /**
     * Sets paf_valid
     *
     * @param bool $paf_valid paf_valid
     *
     * @return $this
     */
    public function setPafValid($paf_valid)
    {
        $this->container['paf_valid'] = $paf_valid;

        return $this;
    }

    /**
     * Gets director_at_home
     *
     * @return bool
     */
    public function getDirectorAtHome()
    {
        return $this->container['director_at_home'];
    }

    /**
     * Sets director_at_home
     *
     * @param bool $director_at_home Individual is listed as a director at current address provided
     *
     * @return $this
     */
    public function setDirectorAtHome($director_at_home)
    {
        $this->container['director_at_home'] = $director_at_home;

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


