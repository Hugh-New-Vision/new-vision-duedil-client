<?php
/**
 * KeyCharityInformationRegisteredAs
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
 * KeyCharityInformationRegisteredAs Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KeyCharityInformationRegisteredAs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KeyCharityInformation_registeredAs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'registered_charity_number' => 'string',
        'subsidiary_number' => 'string',
        'national_jurisdiction' => 'string',
        'regional_jurisdictions' => '\Swagger\Client\Model\KeyCharityInformationRegisteredAsRegionalJurisdictions[]',
        'area_of_benefit' => 'string',
        'charitable_objects' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'registered_charity_number' => null,
        'subsidiary_number' => null,
        'national_jurisdiction' => null,
        'regional_jurisdictions' => null,
        'area_of_benefit' => null,
        'charitable_objects' => null
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
        'registered_charity_number' => 'registeredCharityNumber',
        'subsidiary_number' => 'subsidiaryNumber',
        'national_jurisdiction' => 'nationalJurisdiction',
        'regional_jurisdictions' => 'regionalJurisdictions',
        'area_of_benefit' => 'areaOfBenefit',
        'charitable_objects' => 'charitableObjects'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'registered_charity_number' => 'setRegisteredCharityNumber',
        'subsidiary_number' => 'setSubsidiaryNumber',
        'national_jurisdiction' => 'setNationalJurisdiction',
        'regional_jurisdictions' => 'setRegionalJurisdictions',
        'area_of_benefit' => 'setAreaOfBenefit',
        'charitable_objects' => 'setCharitableObjects'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'registered_charity_number' => 'getRegisteredCharityNumber',
        'subsidiary_number' => 'getSubsidiaryNumber',
        'national_jurisdiction' => 'getNationalJurisdiction',
        'regional_jurisdictions' => 'getRegionalJurisdictions',
        'area_of_benefit' => 'getAreaOfBenefit',
        'charitable_objects' => 'getCharitableObjects'
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
        $this->container['registered_charity_number'] = isset($data['registered_charity_number']) ? $data['registered_charity_number'] : null;
        $this->container['subsidiary_number'] = isset($data['subsidiary_number']) ? $data['subsidiary_number'] : null;
        $this->container['national_jurisdiction'] = isset($data['national_jurisdiction']) ? $data['national_jurisdiction'] : null;
        $this->container['regional_jurisdictions'] = isset($data['regional_jurisdictions']) ? $data['regional_jurisdictions'] : null;
        $this->container['area_of_benefit'] = isset($data['area_of_benefit']) ? $data['area_of_benefit'] : null;
        $this->container['charitable_objects'] = isset($data['charitable_objects']) ? $data['charitable_objects'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['registered_charity_number'] === null) {
            $invalidProperties[] = "'registered_charity_number' can't be null";
        }
        if ($this->container['subsidiary_number'] === null) {
            $invalidProperties[] = "'subsidiary_number' can't be null";
        }
        if ($this->container['national_jurisdiction'] === null) {
            $invalidProperties[] = "'national_jurisdiction' can't be null";
        }
        if ($this->container['regional_jurisdictions'] === null) {
            $invalidProperties[] = "'regional_jurisdictions' can't be null";
        }
        if ($this->container['area_of_benefit'] === null) {
            $invalidProperties[] = "'area_of_benefit' can't be null";
        }
        if ($this->container['charitable_objects'] === null) {
            $invalidProperties[] = "'charitable_objects' can't be null";
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
     * Gets registered_charity_number
     *
     * @return string
     */
    public function getRegisteredCharityNumber()
    {
        return $this->container['registered_charity_number'];
    }

    /**
     * Sets registered_charity_number
     *
     * @param string $registered_charity_number registered_charity_number
     *
     * @return $this
     */
    public function setRegisteredCharityNumber($registered_charity_number)
    {
        $this->container['registered_charity_number'] = $registered_charity_number;

        return $this;
    }

    /**
     * Gets subsidiary_number
     *
     * @return string
     */
    public function getSubsidiaryNumber()
    {
        return $this->container['subsidiary_number'];
    }

    /**
     * Sets subsidiary_number
     *
     * @param string $subsidiary_number subsidiary_number
     *
     * @return $this
     */
    public function setSubsidiaryNumber($subsidiary_number)
    {
        $this->container['subsidiary_number'] = $subsidiary_number;

        return $this;
    }

    /**
     * Gets national_jurisdiction
     *
     * @return string
     */
    public function getNationalJurisdiction()
    {
        return $this->container['national_jurisdiction'];
    }

    /**
     * Sets national_jurisdiction
     *
     * @param string $national_jurisdiction national_jurisdiction
     *
     * @return $this
     */
    public function setNationalJurisdiction($national_jurisdiction)
    {
        $this->container['national_jurisdiction'] = $national_jurisdiction;

        return $this;
    }

    /**
     * Gets regional_jurisdictions
     *
     * @return \Swagger\Client\Model\KeyCharityInformationRegisteredAsRegionalJurisdictions[]
     */
    public function getRegionalJurisdictions()
    {
        return $this->container['regional_jurisdictions'];
    }

    /**
     * Sets regional_jurisdictions
     *
     * @param \Swagger\Client\Model\KeyCharityInformationRegisteredAsRegionalJurisdictions[] $regional_jurisdictions regional_jurisdictions
     *
     * @return $this
     */
    public function setRegionalJurisdictions($regional_jurisdictions)
    {
        $this->container['regional_jurisdictions'] = $regional_jurisdictions;

        return $this;
    }

    /**
     * Gets area_of_benefit
     *
     * @return string
     */
    public function getAreaOfBenefit()
    {
        return $this->container['area_of_benefit'];
    }

    /**
     * Sets area_of_benefit
     *
     * @param string $area_of_benefit area_of_benefit
     *
     * @return $this
     */
    public function setAreaOfBenefit($area_of_benefit)
    {
        $this->container['area_of_benefit'] = $area_of_benefit;

        return $this;
    }

    /**
     * Gets charitable_objects
     *
     * @return string
     */
    public function getCharitableObjects()
    {
        return $this->container['charitable_objects'];
    }

    /**
     * Sets charitable_objects
     *
     * @param string $charitable_objects charitable_objects
     *
     * @return $this
     */
    public function setCharitableObjects($charitable_objects)
    {
        $this->container['charitable_objects'] = $charitable_objects;

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


