<?php
/**
 * CompanyCheckResults
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
 * CompanyCheckResults Class Doc Comment
 *
 * @category Class
 * @description Company check result containing any relevant information and check warnings and/or failures
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyCheckResults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanyCheckResults';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'criteria' => 'object',
        'kyb_result' => '\Swagger\Client\Model\CompanyCheckResultsKybResult',
        'warnings' => '\Swagger\Client\Model\CompanyCheckResultsWarnings',
        'matched_company' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompany',
        'picklist_companies' => '\Swagger\Client\Model\CompanyCheckResultsPicklistCompanies[]',
        'report_charged' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'criteria' => null,
        'kyb_result' => null,
        'warnings' => null,
        'matched_company' => null,
        'picklist_companies' => null,
        'report_charged' => null
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
        'criteria' => 'criteria',
        'kyb_result' => 'kybResult',
        'warnings' => 'warnings',
        'matched_company' => 'matchedCompany',
        'picklist_companies' => 'picklistCompanies',
        'report_charged' => 'reportCharged'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'criteria' => 'setCriteria',
        'kyb_result' => 'setKybResult',
        'warnings' => 'setWarnings',
        'matched_company' => 'setMatchedCompany',
        'picklist_companies' => 'setPicklistCompanies',
        'report_charged' => 'setReportCharged'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'criteria' => 'getCriteria',
        'kyb_result' => 'getKybResult',
        'warnings' => 'getWarnings',
        'matched_company' => 'getMatchedCompany',
        'picklist_companies' => 'getPicklistCompanies',
        'report_charged' => 'getReportCharged'
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
        $this->container['criteria'] = isset($data['criteria']) ? $data['criteria'] : null;
        $this->container['kyb_result'] = isset($data['kyb_result']) ? $data['kyb_result'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
        $this->container['matched_company'] = isset($data['matched_company']) ? $data['matched_company'] : null;
        $this->container['picklist_companies'] = isset($data['picklist_companies']) ? $data['picklist_companies'] : null;
        $this->container['report_charged'] = isset($data['report_charged']) ? $data['report_charged'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['criteria'] === null) {
            $invalidProperties[] = "'criteria' can't be null";
        }
        if ($this->container['kyb_result'] === null) {
            $invalidProperties[] = "'kyb_result' can't be null";
        }
        if ($this->container['warnings'] === null) {
            $invalidProperties[] = "'warnings' can't be null";
        }
        if ($this->container['matched_company'] === null) {
            $invalidProperties[] = "'matched_company' can't be null";
        }
        if ($this->container['picklist_companies'] === null) {
            $invalidProperties[] = "'picklist_companies' can't be null";
        }
        if ($this->container['report_charged'] === null) {
            $invalidProperties[] = "'report_charged' can't be null";
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
     * Gets criteria
     *
     * @return object
     */
    public function getCriteria()
    {
        return $this->container['criteria'];
    }

    /**
     * Sets criteria
     *
     * @param object $criteria criteria
     *
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->container['criteria'] = $criteria;

        return $this;
    }

    /**
     * Gets kyb_result
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsKybResult
     */
    public function getKybResult()
    {
        return $this->container['kyb_result'];
    }

    /**
     * Sets kyb_result
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsKybResult $kyb_result kyb_result
     *
     * @return $this
     */
    public function setKybResult($kyb_result)
    {
        $this->container['kyb_result'] = $kyb_result;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsWarnings
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsWarnings $warnings warnings
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets matched_company
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompany
     */
    public function getMatchedCompany()
    {
        return $this->container['matched_company'];
    }

    /**
     * Sets matched_company
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompany $matched_company matched_company
     *
     * @return $this
     */
    public function setMatchedCompany($matched_company)
    {
        $this->container['matched_company'] = $matched_company;

        return $this;
    }

    /**
     * Gets picklist_companies
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsPicklistCompanies[]
     */
    public function getPicklistCompanies()
    {
        return $this->container['picklist_companies'];
    }

    /**
     * Sets picklist_companies
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsPicklistCompanies[] $picklist_companies picklist_companies
     *
     * @return $this
     */
    public function setPicklistCompanies($picklist_companies)
    {
        $this->container['picklist_companies'] = $picklist_companies;

        return $this;
    }

    /**
     * Gets report_charged
     *
     * @return bool
     */
    public function getReportCharged()
    {
        return $this->container['report_charged'];
    }

    /**
     * Sets report_charged
     *
     * @param bool $report_charged report_charged
     *
     * @return $this
     */
    public function setReportCharged($report_charged)
    {
        $this->container['report_charged'] = $report_charged;

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


