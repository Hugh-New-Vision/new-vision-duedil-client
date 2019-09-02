<?php
/**
 * CompanySearchResultsCompanies
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
 * CompanySearchResultsCompanies Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanySearchResultsCompanies implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanySearchResults_companies';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country_code' => 'string',
        'company_id' => 'string',
        'name' => 'string',
        'type' => 'string',
        'incorporation_date' => '\DateTime',
        'official_status' => 'string',
        'simplified_status' => 'string',
        'keywords' => 'string[]',
        'domains' => 'string[]',
        'addresses' => '\Swagger\Client\Model\CompanyAddress[]',
        'industries' => '\Swagger\Client\Model\CompanyIndustry[]',
        'credit_risk' => 'string',
        'number_of_employees' => 'object',
        'turnover' => 'object',
        'ebitda' => 'object',
        'net_assets' => 'object',
        'total_assets' => 'object',
        'post_tax_profit' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country_code' => null,
        'company_id' => null,
        'name' => null,
        'type' => null,
        'incorporation_date' => 'date',
        'official_status' => null,
        'simplified_status' => null,
        'keywords' => null,
        'domains' => null,
        'addresses' => null,
        'industries' => null,
        'credit_risk' => null,
        'number_of_employees' => null,
        'turnover' => null,
        'ebitda' => null,
        'net_assets' => null,
        'total_assets' => null,
        'post_tax_profit' => null
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
        'country_code' => 'countryCode',
        'company_id' => 'companyId',
        'name' => 'name',
        'type' => 'type',
        'incorporation_date' => 'incorporationDate',
        'official_status' => 'officialStatus',
        'simplified_status' => 'simplifiedStatus',
        'keywords' => 'keywords',
        'domains' => 'domains',
        'addresses' => 'addresses',
        'industries' => 'industries',
        'credit_risk' => 'creditRisk',
        'number_of_employees' => 'numberOfEmployees',
        'turnover' => 'turnover',
        'ebitda' => 'ebitda',
        'net_assets' => 'netAssets',
        'total_assets' => 'totalAssets',
        'post_tax_profit' => 'postTaxProfit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_code' => 'setCountryCode',
        'company_id' => 'setCompanyId',
        'name' => 'setName',
        'type' => 'setType',
        'incorporation_date' => 'setIncorporationDate',
        'official_status' => 'setOfficialStatus',
        'simplified_status' => 'setSimplifiedStatus',
        'keywords' => 'setKeywords',
        'domains' => 'setDomains',
        'addresses' => 'setAddresses',
        'industries' => 'setIndustries',
        'credit_risk' => 'setCreditRisk',
        'number_of_employees' => 'setNumberOfEmployees',
        'turnover' => 'setTurnover',
        'ebitda' => 'setEbitda',
        'net_assets' => 'setNetAssets',
        'total_assets' => 'setTotalAssets',
        'post_tax_profit' => 'setPostTaxProfit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_code' => 'getCountryCode',
        'company_id' => 'getCompanyId',
        'name' => 'getName',
        'type' => 'getType',
        'incorporation_date' => 'getIncorporationDate',
        'official_status' => 'getOfficialStatus',
        'simplified_status' => 'getSimplifiedStatus',
        'keywords' => 'getKeywords',
        'domains' => 'getDomains',
        'addresses' => 'getAddresses',
        'industries' => 'getIndustries',
        'credit_risk' => 'getCreditRisk',
        'number_of_employees' => 'getNumberOfEmployees',
        'turnover' => 'getTurnover',
        'ebitda' => 'getEbitda',
        'net_assets' => 'getNetAssets',
        'total_assets' => 'getTotalAssets',
        'post_tax_profit' => 'getPostTaxProfit'
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
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['incorporation_date'] = isset($data['incorporation_date']) ? $data['incorporation_date'] : null;
        $this->container['official_status'] = isset($data['official_status']) ? $data['official_status'] : null;
        $this->container['simplified_status'] = isset($data['simplified_status']) ? $data['simplified_status'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['domains'] = isset($data['domains']) ? $data['domains'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['industries'] = isset($data['industries']) ? $data['industries'] : null;
        $this->container['credit_risk'] = isset($data['credit_risk']) ? $data['credit_risk'] : null;
        $this->container['number_of_employees'] = isset($data['number_of_employees']) ? $data['number_of_employees'] : null;
        $this->container['turnover'] = isset($data['turnover']) ? $data['turnover'] : null;
        $this->container['ebitda'] = isset($data['ebitda']) ? $data['ebitda'] : null;
        $this->container['net_assets'] = isset($data['net_assets']) ? $data['net_assets'] : null;
        $this->container['total_assets'] = isset($data['total_assets']) ? $data['total_assets'] : null;
        $this->container['post_tax_profit'] = isset($data['post_tax_profit']) ? $data['post_tax_profit'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['incorporation_date'] === null) {
            $invalidProperties[] = "'incorporation_date' can't be null";
        }
        if ($this->container['official_status'] === null) {
            $invalidProperties[] = "'official_status' can't be null";
        }
        if ($this->container['simplified_status'] === null) {
            $invalidProperties[] = "'simplified_status' can't be null";
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
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return string
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string $company_id company_id
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
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
     * Gets incorporation_date
     *
     * @return \DateTime
     */
    public function getIncorporationDate()
    {
        return $this->container['incorporation_date'];
    }

    /**
     * Sets incorporation_date
     *
     * @param \DateTime $incorporation_date incorporation_date
     *
     * @return $this
     */
    public function setIncorporationDate($incorporation_date)
    {
        $this->container['incorporation_date'] = $incorporation_date;

        return $this;
    }

    /**
     * Gets official_status
     *
     * @return string
     */
    public function getOfficialStatus()
    {
        return $this->container['official_status'];
    }

    /**
     * Sets official_status
     *
     * @param string $official_status official_status
     *
     * @return $this
     */
    public function setOfficialStatus($official_status)
    {
        $this->container['official_status'] = $official_status;

        return $this;
    }

    /**
     * Gets simplified_status
     *
     * @return string
     */
    public function getSimplifiedStatus()
    {
        return $this->container['simplified_status'];
    }

    /**
     * Sets simplified_status
     *
     * @param string $simplified_status simplified_status
     *
     * @return $this
     */
    public function setSimplifiedStatus($simplified_status)
    {
        $this->container['simplified_status'] = $simplified_status;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[] $keywords keywords
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets domains
     *
     * @return string[]
     */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
     * Sets domains
     *
     * @param string[] $domains domains
     *
     * @return $this
     */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \Swagger\Client\Model\CompanyAddress[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Swagger\Client\Model\CompanyAddress[] $addresses addresses
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets industries
     *
     * @return \Swagger\Client\Model\CompanyIndustry[]
     */
    public function getIndustries()
    {
        return $this->container['industries'];
    }

    /**
     * Sets industries
     *
     * @param \Swagger\Client\Model\CompanyIndustry[] $industries industries
     *
     * @return $this
     */
    public function setIndustries($industries)
    {
        $this->container['industries'] = $industries;

        return $this;
    }

    /**
     * Gets credit_risk
     *
     * @return string
     */
    public function getCreditRisk()
    {
        return $this->container['credit_risk'];
    }

    /**
     * Sets credit_risk
     *
     * @param string $credit_risk credit_risk
     *
     * @return $this
     */
    public function setCreditRisk($credit_risk)
    {
        $this->container['credit_risk'] = $credit_risk;

        return $this;
    }

    /**
     * Gets number_of_employees
     *
     * @return object
     */
    public function getNumberOfEmployees()
    {
        return $this->container['number_of_employees'];
    }

    /**
     * Sets number_of_employees
     *
     * @param object $number_of_employees number_of_employees
     *
     * @return $this
     */
    public function setNumberOfEmployees($number_of_employees)
    {
        $this->container['number_of_employees'] = $number_of_employees;

        return $this;
    }

    /**
     * Gets turnover
     *
     * @return object
     */
    public function getTurnover()
    {
        return $this->container['turnover'];
    }

    /**
     * Sets turnover
     *
     * @param object $turnover turnover
     *
     * @return $this
     */
    public function setTurnover($turnover)
    {
        $this->container['turnover'] = $turnover;

        return $this;
    }

    /**
     * Gets ebitda
     *
     * @return object
     */
    public function getEbitda()
    {
        return $this->container['ebitda'];
    }

    /**
     * Sets ebitda
     *
     * @param object $ebitda ebitda
     *
     * @return $this
     */
    public function setEbitda($ebitda)
    {
        $this->container['ebitda'] = $ebitda;

        return $this;
    }

    /**
     * Gets net_assets
     *
     * @return object
     */
    public function getNetAssets()
    {
        return $this->container['net_assets'];
    }

    /**
     * Sets net_assets
     *
     * @param object $net_assets net_assets
     *
     * @return $this
     */
    public function setNetAssets($net_assets)
    {
        $this->container['net_assets'] = $net_assets;

        return $this;
    }

    /**
     * Gets total_assets
     *
     * @return object
     */
    public function getTotalAssets()
    {
        return $this->container['total_assets'];
    }

    /**
     * Sets total_assets
     *
     * @param object $total_assets total_assets
     *
     * @return $this
     */
    public function setTotalAssets($total_assets)
    {
        $this->container['total_assets'] = $total_assets;

        return $this;
    }

    /**
     * Gets post_tax_profit
     *
     * @return object
     */
    public function getPostTaxProfit()
    {
        return $this->container['post_tax_profit'];
    }

    /**
     * Sets post_tax_profit
     *
     * @param object $post_tax_profit post_tax_profit
     *
     * @return $this
     */
    public function setPostTaxProfit($post_tax_profit)
    {
        $this->container['post_tax_profit'] = $post_tax_profit;

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


