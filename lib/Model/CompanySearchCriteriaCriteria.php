<?php
/**
 * CompanySearchCriteriaCriteria
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
 * CompanySearchCriteriaCriteria Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanySearchCriteriaCriteria implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanySearchCriteria_criteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'country_codes' => 'object',
        'simplified_statuses' => 'object',
        'regions' => 'object',
        'domain_names' => 'object',
        'keywords' => 'object',
        'industries' => 'object',
        'incorporated' => '\Swagger\Client\Model\CompanySearchCriteriaCriteriaIncorporated',
        'employees_value' => 'object',
        'employees_delta_percentage' => 'object',
        'turnover_value' => 'object',
        'turnover_delta_percentage' => 'object',
        'ebitda_value' => 'object',
        'ebitda_delta_percentage' => 'object',
        'net_assets_value' => 'object',
        'net_assets_delta_percentage' => 'object',
        'total_assets_value' => 'object',
        'total_assets_delta_percentage' => 'object',
        'post_tax_profit_value' => 'object',
        'post_tax_profit_delta_percentage' => 'object',
        'credit_risk' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'country_codes' => null,
        'simplified_statuses' => null,
        'regions' => null,
        'domain_names' => null,
        'keywords' => null,
        'industries' => null,
        'incorporated' => null,
        'employees_value' => null,
        'employees_delta_percentage' => null,
        'turnover_value' => null,
        'turnover_delta_percentage' => null,
        'ebitda_value' => null,
        'ebitda_delta_percentage' => null,
        'net_assets_value' => null,
        'net_assets_delta_percentage' => null,
        'total_assets_value' => null,
        'total_assets_delta_percentage' => null,
        'post_tax_profit_value' => null,
        'post_tax_profit_delta_percentage' => null,
        'credit_risk' => null
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
        'name' => 'name',
        'country_codes' => 'countryCodes',
        'simplified_statuses' => 'simplifiedStatuses',
        'regions' => 'regions',
        'domain_names' => 'domainNames',
        'keywords' => 'keywords',
        'industries' => 'industries',
        'incorporated' => 'incorporated',
        'employees_value' => 'employeesValue',
        'employees_delta_percentage' => 'employeesDeltaPercentage',
        'turnover_value' => 'turnoverValue',
        'turnover_delta_percentage' => 'turnoverDeltaPercentage',
        'ebitda_value' => 'ebitdaValue',
        'ebitda_delta_percentage' => 'ebitdaDeltaPercentage',
        'net_assets_value' => 'netAssetsValue',
        'net_assets_delta_percentage' => 'netAssetsDeltaPercentage',
        'total_assets_value' => 'totalAssetsValue',
        'total_assets_delta_percentage' => 'totalAssetsDeltaPercentage',
        'post_tax_profit_value' => 'postTaxProfitValue',
        'post_tax_profit_delta_percentage' => 'postTaxProfitDeltaPercentage',
        'credit_risk' => 'creditRisk'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'country_codes' => 'setCountryCodes',
        'simplified_statuses' => 'setSimplifiedStatuses',
        'regions' => 'setRegions',
        'domain_names' => 'setDomainNames',
        'keywords' => 'setKeywords',
        'industries' => 'setIndustries',
        'incorporated' => 'setIncorporated',
        'employees_value' => 'setEmployeesValue',
        'employees_delta_percentage' => 'setEmployeesDeltaPercentage',
        'turnover_value' => 'setTurnoverValue',
        'turnover_delta_percentage' => 'setTurnoverDeltaPercentage',
        'ebitda_value' => 'setEbitdaValue',
        'ebitda_delta_percentage' => 'setEbitdaDeltaPercentage',
        'net_assets_value' => 'setNetAssetsValue',
        'net_assets_delta_percentage' => 'setNetAssetsDeltaPercentage',
        'total_assets_value' => 'setTotalAssetsValue',
        'total_assets_delta_percentage' => 'setTotalAssetsDeltaPercentage',
        'post_tax_profit_value' => 'setPostTaxProfitValue',
        'post_tax_profit_delta_percentage' => 'setPostTaxProfitDeltaPercentage',
        'credit_risk' => 'setCreditRisk'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'country_codes' => 'getCountryCodes',
        'simplified_statuses' => 'getSimplifiedStatuses',
        'regions' => 'getRegions',
        'domain_names' => 'getDomainNames',
        'keywords' => 'getKeywords',
        'industries' => 'getIndustries',
        'incorporated' => 'getIncorporated',
        'employees_value' => 'getEmployeesValue',
        'employees_delta_percentage' => 'getEmployeesDeltaPercentage',
        'turnover_value' => 'getTurnoverValue',
        'turnover_delta_percentage' => 'getTurnoverDeltaPercentage',
        'ebitda_value' => 'getEbitdaValue',
        'ebitda_delta_percentage' => 'getEbitdaDeltaPercentage',
        'net_assets_value' => 'getNetAssetsValue',
        'net_assets_delta_percentage' => 'getNetAssetsDeltaPercentage',
        'total_assets_value' => 'getTotalAssetsValue',
        'total_assets_delta_percentage' => 'getTotalAssetsDeltaPercentage',
        'post_tax_profit_value' => 'getPostTaxProfitValue',
        'post_tax_profit_delta_percentage' => 'getPostTaxProfitDeltaPercentage',
        'credit_risk' => 'getCreditRisk'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['country_codes'] = isset($data['country_codes']) ? $data['country_codes'] : null;
        $this->container['simplified_statuses'] = isset($data['simplified_statuses']) ? $data['simplified_statuses'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['domain_names'] = isset($data['domain_names']) ? $data['domain_names'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['industries'] = isset($data['industries']) ? $data['industries'] : null;
        $this->container['incorporated'] = isset($data['incorporated']) ? $data['incorporated'] : null;
        $this->container['employees_value'] = isset($data['employees_value']) ? $data['employees_value'] : null;
        $this->container['employees_delta_percentage'] = isset($data['employees_delta_percentage']) ? $data['employees_delta_percentage'] : null;
        $this->container['turnover_value'] = isset($data['turnover_value']) ? $data['turnover_value'] : null;
        $this->container['turnover_delta_percentage'] = isset($data['turnover_delta_percentage']) ? $data['turnover_delta_percentage'] : null;
        $this->container['ebitda_value'] = isset($data['ebitda_value']) ? $data['ebitda_value'] : null;
        $this->container['ebitda_delta_percentage'] = isset($data['ebitda_delta_percentage']) ? $data['ebitda_delta_percentage'] : null;
        $this->container['net_assets_value'] = isset($data['net_assets_value']) ? $data['net_assets_value'] : null;
        $this->container['net_assets_delta_percentage'] = isset($data['net_assets_delta_percentage']) ? $data['net_assets_delta_percentage'] : null;
        $this->container['total_assets_value'] = isset($data['total_assets_value']) ? $data['total_assets_value'] : null;
        $this->container['total_assets_delta_percentage'] = isset($data['total_assets_delta_percentage']) ? $data['total_assets_delta_percentage'] : null;
        $this->container['post_tax_profit_value'] = isset($data['post_tax_profit_value']) ? $data['post_tax_profit_value'] : null;
        $this->container['post_tax_profit_delta_percentage'] = isset($data['post_tax_profit_delta_percentage']) ? $data['post_tax_profit_delta_percentage'] : null;
        $this->container['credit_risk'] = isset($data['credit_risk']) ? $data['credit_risk'] : null;
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
     * @param string $name Registered company name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets country_codes
     *
     * @return object
     */
    public function getCountryCodes()
    {
        return $this->container['country_codes'];
    }

    /**
     * Sets country_codes
     *
     * @param object $country_codes List of company country codes
     *
     * @return $this
     */
    public function setCountryCodes($country_codes)
    {
        $this->container['country_codes'] = $country_codes;

        return $this;
    }

    /**
     * Gets simplified_statuses
     *
     * @return object
     */
    public function getSimplifiedStatuses()
    {
        return $this->container['simplified_statuses'];
    }

    /**
     * Sets simplified_statuses
     *
     * @param object $simplified_statuses List of company simplified statuses
     *
     * @return $this
     */
    public function setSimplifiedStatuses($simplified_statuses)
    {
        $this->container['simplified_statuses'] = $simplified_statuses;

        return $this;
    }

    /**
     * Gets regions
     *
     * @return object
     */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
     * Sets regions
     *
     * @param object $regions List of regions
     *
     * @return $this
     */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;

        return $this;
    }

    /**
     * Gets domain_names
     *
     * @return object
     */
    public function getDomainNames()
    {
        return $this->container['domain_names'];
    }

    /**
     * Sets domain_names
     *
     * @param object $domain_names List of company domain names
     *
     * @return $this
     */
    public function setDomainNames($domain_names)
    {
        $this->container['domain_names'] = $domain_names;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return object
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param object $keywords List of company keywords
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets industries
     *
     * @return object
     */
    public function getIndustries()
    {
        return $this->container['industries'];
    }

    /**
     * Sets industries
     *
     * @param object $industries List of company industries
     *
     * @return $this
     */
    public function setIndustries($industries)
    {
        $this->container['industries'] = $industries;

        return $this;
    }

    /**
     * Gets incorporated
     *
     * @return \Swagger\Client\Model\CompanySearchCriteriaCriteriaIncorporated
     */
    public function getIncorporated()
    {
        return $this->container['incorporated'];
    }

    /**
     * Sets incorporated
     *
     * @param \Swagger\Client\Model\CompanySearchCriteriaCriteriaIncorporated $incorporated incorporated
     *
     * @return $this
     */
    public function setIncorporated($incorporated)
    {
        $this->container['incorporated'] = $incorporated;

        return $this;
    }

    /**
     * Gets employees_value
     *
     * @return object
     */
    public function getEmployeesValue()
    {
        return $this->container['employees_value'];
    }

    /**
     * Sets employees_value
     *
     * @param object $employees_value Range of employee values
     *
     * @return $this
     */
    public function setEmployeesValue($employees_value)
    {
        $this->container['employees_value'] = $employees_value;

        return $this;
    }

    /**
     * Gets employees_delta_percentage
     *
     * @return object
     */
    public function getEmployeesDeltaPercentage()
    {
        return $this->container['employees_delta_percentage'];
    }

    /**
     * Sets employees_delta_percentage
     *
     * @param object $employees_delta_percentage Range of employee delta percentages
     *
     * @return $this
     */
    public function setEmployeesDeltaPercentage($employees_delta_percentage)
    {
        $this->container['employees_delta_percentage'] = $employees_delta_percentage;

        return $this;
    }

    /**
     * Gets turnover_value
     *
     * @return object
     */
    public function getTurnoverValue()
    {
        return $this->container['turnover_value'];
    }

    /**
     * Sets turnover_value
     *
     * @param object $turnover_value Range of turnover value
     *
     * @return $this
     */
    public function setTurnoverValue($turnover_value)
    {
        $this->container['turnover_value'] = $turnover_value;

        return $this;
    }

    /**
     * Gets turnover_delta_percentage
     *
     * @return object
     */
    public function getTurnoverDeltaPercentage()
    {
        return $this->container['turnover_delta_percentage'];
    }

    /**
     * Sets turnover_delta_percentage
     *
     * @param object $turnover_delta_percentage Range of turnover delta percentages
     *
     * @return $this
     */
    public function setTurnoverDeltaPercentage($turnover_delta_percentage)
    {
        $this->container['turnover_delta_percentage'] = $turnover_delta_percentage;

        return $this;
    }

    /**
     * Gets ebitda_value
     *
     * @return object
     */
    public function getEbitdaValue()
    {
        return $this->container['ebitda_value'];
    }

    /**
     * Sets ebitda_value
     *
     * @param object $ebitda_value Range of ebidta values
     *
     * @return $this
     */
    public function setEbitdaValue($ebitda_value)
    {
        $this->container['ebitda_value'] = $ebitda_value;

        return $this;
    }

    /**
     * Gets ebitda_delta_percentage
     *
     * @return object
     */
    public function getEbitdaDeltaPercentage()
    {
        return $this->container['ebitda_delta_percentage'];
    }

    /**
     * Sets ebitda_delta_percentage
     *
     * @param object $ebitda_delta_percentage Range of ebidta delta percentages
     *
     * @return $this
     */
    public function setEbitdaDeltaPercentage($ebitda_delta_percentage)
    {
        $this->container['ebitda_delta_percentage'] = $ebitda_delta_percentage;

        return $this;
    }

    /**
     * Gets net_assets_value
     *
     * @return object
     */
    public function getNetAssetsValue()
    {
        return $this->container['net_assets_value'];
    }

    /**
     * Sets net_assets_value
     *
     * @param object $net_assets_value Range of net asset values
     *
     * @return $this
     */
    public function setNetAssetsValue($net_assets_value)
    {
        $this->container['net_assets_value'] = $net_assets_value;

        return $this;
    }

    /**
     * Gets net_assets_delta_percentage
     *
     * @return object
     */
    public function getNetAssetsDeltaPercentage()
    {
        return $this->container['net_assets_delta_percentage'];
    }

    /**
     * Sets net_assets_delta_percentage
     *
     * @param object $net_assets_delta_percentage Range of net asset delta percentages
     *
     * @return $this
     */
    public function setNetAssetsDeltaPercentage($net_assets_delta_percentage)
    {
        $this->container['net_assets_delta_percentage'] = $net_assets_delta_percentage;

        return $this;
    }

    /**
     * Gets total_assets_value
     *
     * @return object
     */
    public function getTotalAssetsValue()
    {
        return $this->container['total_assets_value'];
    }

    /**
     * Sets total_assets_value
     *
     * @param object $total_assets_value Range of total asset values
     *
     * @return $this
     */
    public function setTotalAssetsValue($total_assets_value)
    {
        $this->container['total_assets_value'] = $total_assets_value;

        return $this;
    }

    /**
     * Gets total_assets_delta_percentage
     *
     * @return object
     */
    public function getTotalAssetsDeltaPercentage()
    {
        return $this->container['total_assets_delta_percentage'];
    }

    /**
     * Sets total_assets_delta_percentage
     *
     * @param object $total_assets_delta_percentage Range of total asset delta percentages
     *
     * @return $this
     */
    public function setTotalAssetsDeltaPercentage($total_assets_delta_percentage)
    {
        $this->container['total_assets_delta_percentage'] = $total_assets_delta_percentage;

        return $this;
    }

    /**
     * Gets post_tax_profit_value
     *
     * @return object
     */
    public function getPostTaxProfitValue()
    {
        return $this->container['post_tax_profit_value'];
    }

    /**
     * Sets post_tax_profit_value
     *
     * @param object $post_tax_profit_value Range of post tax profit values
     *
     * @return $this
     */
    public function setPostTaxProfitValue($post_tax_profit_value)
    {
        $this->container['post_tax_profit_value'] = $post_tax_profit_value;

        return $this;
    }

    /**
     * Gets post_tax_profit_delta_percentage
     *
     * @return object
     */
    public function getPostTaxProfitDeltaPercentage()
    {
        return $this->container['post_tax_profit_delta_percentage'];
    }

    /**
     * Sets post_tax_profit_delta_percentage
     *
     * @param object $post_tax_profit_delta_percentage Range of post tax profit delta percentages
     *
     * @return $this
     */
    public function setPostTaxProfitDeltaPercentage($post_tax_profit_delta_percentage)
    {
        $this->container['post_tax_profit_delta_percentage'] = $post_tax_profit_delta_percentage;

        return $this;
    }

    /**
     * Gets credit_risk
     *
     * @return object
     */
    public function getCreditRisk()
    {
        return $this->container['credit_risk'];
    }

    /**
     * Sets credit_risk
     *
     * @param object $credit_risk credit_risk
     *
     * @return $this
     */
    public function setCreditRisk($credit_risk)
    {
        $this->container['credit_risk'] = $credit_risk;

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


