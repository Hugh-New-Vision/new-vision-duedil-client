<?php
/**
 * PoSCSPeoplePersonsOfSignificantControl
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
 * PoSCSPeoplePersonsOfSignificantControl Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PoSCSPeoplePersonsOfSignificantControl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PoSCSPeople_personsOfSignificantControl';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'person' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompanyPerson',
        'company' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompanyCompany',
        'other_legal_entity' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompanyOtherLegalEntity',
        'natures_of_control' => 'string[]',
        'is_shareholder' => 'bool',
        'notified_at' => 'string',
        'ceased_at' => 'string',
        'exact_matches' => '\Swagger\Client\Model\SharedExactMatches',
        'possible_matches' => '\Swagger\Client\Model\SharedPossibleMatches'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'person' => null,
        'company' => null,
        'other_legal_entity' => null,
        'natures_of_control' => null,
        'is_shareholder' => null,
        'notified_at' => null,
        'ceased_at' => null,
        'exact_matches' => null,
        'possible_matches' => null
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
        'type' => 'type',
        'person' => 'person',
        'company' => 'company',
        'other_legal_entity' => 'otherLegalEntity',
        'natures_of_control' => 'naturesOfControl',
        'is_shareholder' => 'isShareholder',
        'notified_at' => 'notifiedAt',
        'ceased_at' => 'ceasedAt',
        'exact_matches' => 'exactMatches',
        'possible_matches' => 'possibleMatches'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'person' => 'setPerson',
        'company' => 'setCompany',
        'other_legal_entity' => 'setOtherLegalEntity',
        'natures_of_control' => 'setNaturesOfControl',
        'is_shareholder' => 'setIsShareholder',
        'notified_at' => 'setNotifiedAt',
        'ceased_at' => 'setCeasedAt',
        'exact_matches' => 'setExactMatches',
        'possible_matches' => 'setPossibleMatches'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'person' => 'getPerson',
        'company' => 'getCompany',
        'other_legal_entity' => 'getOtherLegalEntity',
        'natures_of_control' => 'getNaturesOfControl',
        'is_shareholder' => 'getIsShareholder',
        'notified_at' => 'getNotifiedAt',
        'ceased_at' => 'getCeasedAt',
        'exact_matches' => 'getExactMatches',
        'possible_matches' => 'getPossibleMatches'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['person'] = isset($data['person']) ? $data['person'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['other_legal_entity'] = isset($data['other_legal_entity']) ? $data['other_legal_entity'] : null;
        $this->container['natures_of_control'] = isset($data['natures_of_control']) ? $data['natures_of_control'] : null;
        $this->container['is_shareholder'] = isset($data['is_shareholder']) ? $data['is_shareholder'] : null;
        $this->container['notified_at'] = isset($data['notified_at']) ? $data['notified_at'] : null;
        $this->container['ceased_at'] = isset($data['ceased_at']) ? $data['ceased_at'] : null;
        $this->container['exact_matches'] = isset($data['exact_matches']) ? $data['exact_matches'] : null;
        $this->container['possible_matches'] = isset($data['possible_matches']) ? $data['possible_matches'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['person'] === null) {
            $invalidProperties[] = "'person' can't be null";
        }
        if ($this->container['company'] === null) {
            $invalidProperties[] = "'company' can't be null";
        }
        if ($this->container['other_legal_entity'] === null) {
            $invalidProperties[] = "'other_legal_entity' can't be null";
        }
        if ($this->container['natures_of_control'] === null) {
            $invalidProperties[] = "'natures_of_control' can't be null";
        }
        if ($this->container['is_shareholder'] === null) {
            $invalidProperties[] = "'is_shareholder' can't be null";
        }
        if ($this->container['exact_matches'] === null) {
            $invalidProperties[] = "'exact_matches' can't be null";
        }
        if ($this->container['possible_matches'] === null) {
            $invalidProperties[] = "'possible_matches' can't be null";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets person
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyPerson
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyPerson $person person
     *
     * @return $this
     */
    public function setPerson($person)
    {
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets company
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyCompany
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyCompany $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets other_legal_entity
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyOtherLegalEntity
     */
    public function getOtherLegalEntity()
    {
        return $this->container['other_legal_entity'];
    }

    /**
     * Sets other_legal_entity
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyOtherLegalEntity $other_legal_entity other_legal_entity
     *
     * @return $this
     */
    public function setOtherLegalEntity($other_legal_entity)
    {
        $this->container['other_legal_entity'] = $other_legal_entity;

        return $this;
    }

    /**
     * Gets natures_of_control
     *
     * @return string[]
     */
    public function getNaturesOfControl()
    {
        return $this->container['natures_of_control'];
    }

    /**
     * Sets natures_of_control
     *
     * @param string[] $natures_of_control natures_of_control
     *
     * @return $this
     */
    public function setNaturesOfControl($natures_of_control)
    {
        $this->container['natures_of_control'] = $natures_of_control;

        return $this;
    }

    /**
     * Gets is_shareholder
     *
     * @return bool
     */
    public function getIsShareholder()
    {
        return $this->container['is_shareholder'];
    }

    /**
     * Sets is_shareholder
     *
     * @param bool $is_shareholder is_shareholder
     *
     * @return $this
     */
    public function setIsShareholder($is_shareholder)
    {
        $this->container['is_shareholder'] = $is_shareholder;

        return $this;
    }

    /**
     * Gets notified_at
     *
     * @return string
     */
    public function getNotifiedAt()
    {
        return $this->container['notified_at'];
    }

    /**
     * Sets notified_at
     *
     * @param string $notified_at notified_at
     *
     * @return $this
     */
    public function setNotifiedAt($notified_at)
    {
        $this->container['notified_at'] = $notified_at;

        return $this;
    }

    /**
     * Gets ceased_at
     *
     * @return string
     */
    public function getCeasedAt()
    {
        return $this->container['ceased_at'];
    }

    /**
     * Sets ceased_at
     *
     * @param string $ceased_at ceased_at
     *
     * @return $this
     */
    public function setCeasedAt($ceased_at)
    {
        $this->container['ceased_at'] = $ceased_at;

        return $this;
    }

    /**
     * Gets exact_matches
     *
     * @return \Swagger\Client\Model\SharedExactMatches
     */
    public function getExactMatches()
    {
        return $this->container['exact_matches'];
    }

    /**
     * Sets exact_matches
     *
     * @param \Swagger\Client\Model\SharedExactMatches $exact_matches exact_matches
     *
     * @return $this
     */
    public function setExactMatches($exact_matches)
    {
        $this->container['exact_matches'] = $exact_matches;

        return $this;
    }

    /**
     * Gets possible_matches
     *
     * @return \Swagger\Client\Model\SharedPossibleMatches
     */
    public function getPossibleMatches()
    {
        return $this->container['possible_matches'];
    }

    /**
     * Sets possible_matches
     *
     * @param \Swagger\Client\Model\SharedPossibleMatches $possible_matches possible_matches
     *
     * @return $this
     */
    public function setPossibleMatches($possible_matches)
    {
        $this->container['possible_matches'] = $possible_matches;

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


