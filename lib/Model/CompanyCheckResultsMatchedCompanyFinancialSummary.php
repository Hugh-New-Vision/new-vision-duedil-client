<?php
/**
 * CompanyCheckResultsMatchedCompanyFinancialSummary
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
 * CompanyCheckResultsMatchedCompanyFinancialSummary Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyCheckResultsMatchedCompanyFinancialSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanyCheckResults_matchedCompany_financialSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filing_date' => 'string',
        'turnover' => 'float',
        'ebitda' => 'float',
        'post_tax_profit' => 'float',
        'total_assets' => 'float',
        'net_assets' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'filing_date' => null,
        'turnover' => 'float',
        'ebitda' => 'float',
        'post_tax_profit' => 'float',
        'total_assets' => 'float',
        'net_assets' => 'float'
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
        'filing_date' => 'filingDate',
        'turnover' => 'turnover',
        'ebitda' => 'ebitda',
        'post_tax_profit' => 'postTaxProfit',
        'total_assets' => 'totalAssets',
        'net_assets' => 'netAssets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filing_date' => 'setFilingDate',
        'turnover' => 'setTurnover',
        'ebitda' => 'setEbitda',
        'post_tax_profit' => 'setPostTaxProfit',
        'total_assets' => 'setTotalAssets',
        'net_assets' => 'setNetAssets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filing_date' => 'getFilingDate',
        'turnover' => 'getTurnover',
        'ebitda' => 'getEbitda',
        'post_tax_profit' => 'getPostTaxProfit',
        'total_assets' => 'getTotalAssets',
        'net_assets' => 'getNetAssets'
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
        $this->container['filing_date'] = isset($data['filing_date']) ? $data['filing_date'] : null;
        $this->container['turnover'] = isset($data['turnover']) ? $data['turnover'] : null;
        $this->container['ebitda'] = isset($data['ebitda']) ? $data['ebitda'] : null;
        $this->container['post_tax_profit'] = isset($data['post_tax_profit']) ? $data['post_tax_profit'] : null;
        $this->container['total_assets'] = isset($data['total_assets']) ? $data['total_assets'] : null;
        $this->container['net_assets'] = isset($data['net_assets']) ? $data['net_assets'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['filing_date'] === null) {
            $invalidProperties[] = "'filing_date' can't be null";
        }
        if ($this->container['turnover'] === null) {
            $invalidProperties[] = "'turnover' can't be null";
        }
        if ($this->container['ebitda'] === null) {
            $invalidProperties[] = "'ebitda' can't be null";
        }
        if ($this->container['post_tax_profit'] === null) {
            $invalidProperties[] = "'post_tax_profit' can't be null";
        }
        if ($this->container['total_assets'] === null) {
            $invalidProperties[] = "'total_assets' can't be null";
        }
        if ($this->container['net_assets'] === null) {
            $invalidProperties[] = "'net_assets' can't be null";
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
     * Gets filing_date
     *
     * @return string
     */
    public function getFilingDate()
    {
        return $this->container['filing_date'];
    }

    /**
     * Sets filing_date
     *
     * @param string $filing_date filing_date
     *
     * @return $this
     */
    public function setFilingDate($filing_date)
    {
        $this->container['filing_date'] = $filing_date;

        return $this;
    }

    /**
     * Gets turnover
     *
     * @return float
     */
    public function getTurnover()
    {
        return $this->container['turnover'];
    }

    /**
     * Sets turnover
     *
     * @param float $turnover turnover
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
     * @return float
     */
    public function getEbitda()
    {
        return $this->container['ebitda'];
    }

    /**
     * Sets ebitda
     *
     * @param float $ebitda ebitda
     *
     * @return $this
     */
    public function setEbitda($ebitda)
    {
        $this->container['ebitda'] = $ebitda;

        return $this;
    }

    /**
     * Gets post_tax_profit
     *
     * @return float
     */
    public function getPostTaxProfit()
    {
        return $this->container['post_tax_profit'];
    }

    /**
     * Sets post_tax_profit
     *
     * @param float $post_tax_profit post_tax_profit
     *
     * @return $this
     */
    public function setPostTaxProfit($post_tax_profit)
    {
        $this->container['post_tax_profit'] = $post_tax_profit;

        return $this;
    }

    /**
     * Gets total_assets
     *
     * @return float
     */
    public function getTotalAssets()
    {
        return $this->container['total_assets'];
    }

    /**
     * Sets total_assets
     *
     * @param float $total_assets total_assets
     *
     * @return $this
     */
    public function setTotalAssets($total_assets)
    {
        $this->container['total_assets'] = $total_assets;

        return $this;
    }

    /**
     * Gets net_assets
     *
     * @return float
     */
    public function getNetAssets()
    {
        return $this->container['net_assets'];
    }

    /**
     * Sets net_assets
     *
     * @param float $net_assets net_assets
     *
     * @return $this
     */
    public function setNetAssets($net_assets)
    {
        $this->container['net_assets'] = $net_assets;

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


