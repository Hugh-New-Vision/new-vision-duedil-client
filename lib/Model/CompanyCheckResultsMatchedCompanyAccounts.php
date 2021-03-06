<?php
/**
 * CompanyCheckResultsMatchedCompanyAccounts
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
 * CompanyCheckResultsMatchedCompanyAccounts Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyCheckResultsMatchedCompanyAccounts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanyCheckResults_matchedCompany_accounts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filing_type' => 'string',
        'currency' => 'string',
        'latest_accounts_date' => 'string',
        'consolidated_accounts' => 'bool',
        'next_accounts_due_date' => 'string',
        'next_accounts_overdue' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'filing_type' => null,
        'currency' => null,
        'latest_accounts_date' => null,
        'consolidated_accounts' => null,
        'next_accounts_due_date' => null,
        'next_accounts_overdue' => null
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
        'filing_type' => 'filingType',
        'currency' => 'currency',
        'latest_accounts_date' => 'latestAccountsDate',
        'consolidated_accounts' => 'consolidatedAccounts',
        'next_accounts_due_date' => 'nextAccountsDueDate',
        'next_accounts_overdue' => 'nextAccountsOverdue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filing_type' => 'setFilingType',
        'currency' => 'setCurrency',
        'latest_accounts_date' => 'setLatestAccountsDate',
        'consolidated_accounts' => 'setConsolidatedAccounts',
        'next_accounts_due_date' => 'setNextAccountsDueDate',
        'next_accounts_overdue' => 'setNextAccountsOverdue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filing_type' => 'getFilingType',
        'currency' => 'getCurrency',
        'latest_accounts_date' => 'getLatestAccountsDate',
        'consolidated_accounts' => 'getConsolidatedAccounts',
        'next_accounts_due_date' => 'getNextAccountsDueDate',
        'next_accounts_overdue' => 'getNextAccountsOverdue'
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
        $this->container['filing_type'] = isset($data['filing_type']) ? $data['filing_type'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['latest_accounts_date'] = isset($data['latest_accounts_date']) ? $data['latest_accounts_date'] : null;
        $this->container['consolidated_accounts'] = isset($data['consolidated_accounts']) ? $data['consolidated_accounts'] : null;
        $this->container['next_accounts_due_date'] = isset($data['next_accounts_due_date']) ? $data['next_accounts_due_date'] : null;
        $this->container['next_accounts_overdue'] = isset($data['next_accounts_overdue']) ? $data['next_accounts_overdue'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['filing_type'] === null) {
            $invalidProperties[] = "'filing_type' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['latest_accounts_date'] === null) {
            $invalidProperties[] = "'latest_accounts_date' can't be null";
        }
        if ($this->container['consolidated_accounts'] === null) {
            $invalidProperties[] = "'consolidated_accounts' can't be null";
        }
        if ($this->container['next_accounts_due_date'] === null) {
            $invalidProperties[] = "'next_accounts_due_date' can't be null";
        }
        if ($this->container['next_accounts_overdue'] === null) {
            $invalidProperties[] = "'next_accounts_overdue' can't be null";
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
     * Gets filing_type
     *
     * @return string
     */
    public function getFilingType()
    {
        return $this->container['filing_type'];
    }

    /**
     * Sets filing_type
     *
     * @param string $filing_type filing_type
     *
     * @return $this
     */
    public function setFilingType($filing_type)
    {
        $this->container['filing_type'] = $filing_type;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets latest_accounts_date
     *
     * @return string
     */
    public function getLatestAccountsDate()
    {
        return $this->container['latest_accounts_date'];
    }

    /**
     * Sets latest_accounts_date
     *
     * @param string $latest_accounts_date latest_accounts_date
     *
     * @return $this
     */
    public function setLatestAccountsDate($latest_accounts_date)
    {
        $this->container['latest_accounts_date'] = $latest_accounts_date;

        return $this;
    }

    /**
     * Gets consolidated_accounts
     *
     * @return bool
     */
    public function getConsolidatedAccounts()
    {
        return $this->container['consolidated_accounts'];
    }

    /**
     * Sets consolidated_accounts
     *
     * @param bool $consolidated_accounts consolidated_accounts
     *
     * @return $this
     */
    public function setConsolidatedAccounts($consolidated_accounts)
    {
        $this->container['consolidated_accounts'] = $consolidated_accounts;

        return $this;
    }

    /**
     * Gets next_accounts_due_date
     *
     * @return string
     */
    public function getNextAccountsDueDate()
    {
        return $this->container['next_accounts_due_date'];
    }

    /**
     * Sets next_accounts_due_date
     *
     * @param string $next_accounts_due_date next_accounts_due_date
     *
     * @return $this
     */
    public function setNextAccountsDueDate($next_accounts_due_date)
    {
        $this->container['next_accounts_due_date'] = $next_accounts_due_date;

        return $this;
    }

    /**
     * Gets next_accounts_overdue
     *
     * @return bool
     */
    public function getNextAccountsOverdue()
    {
        return $this->container['next_accounts_overdue'];
    }

    /**
     * Sets next_accounts_overdue
     *
     * @param bool $next_accounts_overdue next_accounts_overdue
     *
     * @return $this
     */
    public function setNextAccountsOverdue($next_accounts_overdue)
    {
        $this->container['next_accounts_overdue'] = $next_accounts_overdue;

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


