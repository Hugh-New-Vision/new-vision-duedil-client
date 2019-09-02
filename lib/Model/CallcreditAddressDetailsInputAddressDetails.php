<?php
/**
 * CallcreditAddressDetailsInputAddressDetails
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
 * CallcreditAddressDetailsInputAddressDetails Class Doc Comment
 *
 * @category Class
 * @description Mandatory fields are buildingName or buildingNumber or abodeNumber and postcode. If a flat or apartment is being searched, please supply this in abodeNumber and also provide buildingName or buildingNumber and postcode.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallcreditAddressDetailsInputAddressDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallcreditAddressDetailsInput_addressDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'building_name' => 'string',
        'building_number' => 'string',
        'abode_number' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'address3' => 'string',
        'town' => 'string',
        'postcode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'building_name' => null,
        'building_number' => null,
        'abode_number' => null,
        'address1' => null,
        'address2' => null,
        'address3' => null,
        'town' => null,
        'postcode' => null
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
        'building_name' => 'buildingName',
        'building_number' => 'buildingNumber',
        'abode_number' => 'abodeNumber',
        'address1' => 'address1',
        'address2' => 'address2',
        'address3' => 'address3',
        'town' => 'town',
        'postcode' => 'postcode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'building_name' => 'setBuildingName',
        'building_number' => 'setBuildingNumber',
        'abode_number' => 'setAbodeNumber',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'address3' => 'setAddress3',
        'town' => 'setTown',
        'postcode' => 'setPostcode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'building_name' => 'getBuildingName',
        'building_number' => 'getBuildingNumber',
        'abode_number' => 'getAbodeNumber',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'address3' => 'getAddress3',
        'town' => 'getTown',
        'postcode' => 'getPostcode'
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
        $this->container['building_name'] = isset($data['building_name']) ? $data['building_name'] : null;
        $this->container['building_number'] = isset($data['building_number']) ? $data['building_number'] : null;
        $this->container['abode_number'] = isset($data['abode_number']) ? $data['abode_number'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['address3'] = isset($data['address3']) ? $data['address3'] : null;
        $this->container['town'] = isset($data['town']) ? $data['town'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['building_name']) && (mb_strlen($this->container['building_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'building_name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['building_number']) && (mb_strlen($this->container['building_number']) > 50)) {
            $invalidProperties[] = "invalid value for 'building_number', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['abode_number']) && (mb_strlen($this->container['abode_number']) > 50)) {
            $invalidProperties[] = "invalid value for 'abode_number', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['address1']) && (mb_strlen($this->container['address1']) > 50)) {
            $invalidProperties[] = "invalid value for 'address1', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['address2']) && (mb_strlen($this->container['address2']) > 50)) {
            $invalidProperties[] = "invalid value for 'address2', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['address3']) && (mb_strlen($this->container['address3']) > 50)) {
            $invalidProperties[] = "invalid value for 'address3', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['town']) && (mb_strlen($this->container['town']) > 25)) {
            $invalidProperties[] = "invalid value for 'town', the character length must be smaller than or equal to 25.";
        }

        if ($this->container['postcode'] === null) {
            $invalidProperties[] = "'postcode' can't be null";
        }
        if ((mb_strlen($this->container['postcode']) > 8)) {
            $invalidProperties[] = "invalid value for 'postcode', the character length must be smaller than or equal to 8.";
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
     * Gets building_name
     *
     * @return string
     */
    public function getBuildingName()
    {
        return $this->container['building_name'];
    }

    /**
     * Sets building_name
     *
     * @param string $building_name building_name
     *
     * @return $this
     */
    public function setBuildingName($building_name)
    {
        if (!is_null($building_name) && (mb_strlen($building_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $building_name when calling CallcreditAddressDetailsInputAddressDetails., must be smaller than or equal to 50.');
        }

        $this->container['building_name'] = $building_name;

        return $this;
    }

    /**
     * Gets building_number
     *
     * @return string
     */
    public function getBuildingNumber()
    {
        return $this->container['building_number'];
    }

    /**
     * Sets building_number
     *
     * @param string $building_number building_number
     *
     * @return $this
     */
    public function setBuildingNumber($building_number)
    {
        if (!is_null($building_number) && (mb_strlen($building_number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $building_number when calling CallcreditAddressDetailsInputAddressDetails., must be smaller than or equal to 50.');
        }

        $this->container['building_number'] = $building_number;

        return $this;
    }

    /**
     * Gets abode_number
     *
     * @return string
     */
    public function getAbodeNumber()
    {
        return $this->container['abode_number'];
    }

    /**
     * Sets abode_number
     *
     * @param string $abode_number abode_number
     *
     * @return $this
     */
    public function setAbodeNumber($abode_number)
    {
        if (!is_null($abode_number) && (mb_strlen($abode_number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $abode_number when calling CallcreditAddressDetailsInputAddressDetails., must be smaller than or equal to 50.');
        }

        $this->container['abode_number'] = $abode_number;

        return $this;
    }

    /**
     * Gets address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string $address1 address1
     *
     * @return $this
     */
    public function setAddress1($address1)
    {
        if (!is_null($address1) && (mb_strlen($address1) > 50)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling CallcreditAddressDetailsInputAddressDetails., must be smaller than or equal to 50.');
        }

        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string $address2 address2
     *
     * @return $this
     */
    public function setAddress2($address2)
    {
        if (!is_null($address2) && (mb_strlen($address2) > 50)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling CallcreditAddressDetailsInputAddressDetails., must be smaller than or equal to 50.');
        }

        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets address3
     *
     * @return string
     */
    public function getAddress3()
    {
        return $this->container['address3'];
    }

    /**
     * Sets address3
     *
     * @param string $address3 address3
     *
     * @return $this
     */
    public function setAddress3($address3)
    {
        if (!is_null($address3) && (mb_strlen($address3) > 50)) {
            throw new \InvalidArgumentException('invalid length for $address3 when calling CallcreditAddressDetailsInputAddressDetails., must be smaller than or equal to 50.');
        }

        $this->container['address3'] = $address3;

        return $this;
    }

    /**
     * Gets town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string $town town
     *
     * @return $this
     */
    public function setTown($town)
    {
        if (!is_null($town) && (mb_strlen($town) > 25)) {
            throw new \InvalidArgumentException('invalid length for $town when calling CallcreditAddressDetailsInputAddressDetails., must be smaller than or equal to 25.');
        }

        $this->container['town'] = $town;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        if ((mb_strlen($postcode) > 8)) {
            throw new \InvalidArgumentException('invalid length for $postcode when calling CallcreditAddressDetailsInputAddressDetails., must be smaller than or equal to 8.');
        }

        $this->container['postcode'] = $postcode;

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


