<?php
/**
 * CompanyCreditReportCreditReport
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
 * CompanyCreditReportCreditReport Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyCreditReportCreditReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanyCreditReport_creditReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'credit_rating' => '\Swagger\Client\Model\CompanyCreditReportCreditReportCreditRating',
        'credit_limit' => '\Swagger\Client\Model\CompanyCreditReportCreditReportCreditLimit',
        'credit_score_history' => '\Swagger\Client\Model\CompanyCreditReportCreditReportCreditScoreHistory[]',
        'credit_limit_history' => '\Swagger\Client\Model\CompanyCreditReportCreditReportCreditLimitHistory[]',
        'commentary' => '\Swagger\Client\Model\CompanyCreditReportCreditReportCommentary[]',
        'county_court_judgments' => '\Swagger\Client\Model\CompanyCreditReportCreditReportCountyCourtJudgments',
        'payment_statistics' => '\Swagger\Client\Model\CompanyCreditReportCreditReportPaymentStatistics'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'credit_rating' => null,
        'credit_limit' => null,
        'credit_score_history' => null,
        'credit_limit_history' => null,
        'commentary' => null,
        'county_court_judgments' => null,
        'payment_statistics' => null
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
        'credit_rating' => 'creditRating',
        'credit_limit' => 'creditLimit',
        'credit_score_history' => 'creditScoreHistory',
        'credit_limit_history' => 'creditLimitHistory',
        'commentary' => 'commentary',
        'county_court_judgments' => 'countyCourtJudgments',
        'payment_statistics' => 'paymentStatistics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'credit_rating' => 'setCreditRating',
        'credit_limit' => 'setCreditLimit',
        'credit_score_history' => 'setCreditScoreHistory',
        'credit_limit_history' => 'setCreditLimitHistory',
        'commentary' => 'setCommentary',
        'county_court_judgments' => 'setCountyCourtJudgments',
        'payment_statistics' => 'setPaymentStatistics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'credit_rating' => 'getCreditRating',
        'credit_limit' => 'getCreditLimit',
        'credit_score_history' => 'getCreditScoreHistory',
        'credit_limit_history' => 'getCreditLimitHistory',
        'commentary' => 'getCommentary',
        'county_court_judgments' => 'getCountyCourtJudgments',
        'payment_statistics' => 'getPaymentStatistics'
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
        $this->container['credit_rating'] = isset($data['credit_rating']) ? $data['credit_rating'] : null;
        $this->container['credit_limit'] = isset($data['credit_limit']) ? $data['credit_limit'] : null;
        $this->container['credit_score_history'] = isset($data['credit_score_history']) ? $data['credit_score_history'] : null;
        $this->container['credit_limit_history'] = isset($data['credit_limit_history']) ? $data['credit_limit_history'] : null;
        $this->container['commentary'] = isset($data['commentary']) ? $data['commentary'] : null;
        $this->container['county_court_judgments'] = isset($data['county_court_judgments']) ? $data['county_court_judgments'] : null;
        $this->container['payment_statistics'] = isset($data['payment_statistics']) ? $data['payment_statistics'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['credit_rating'] === null) {
            $invalidProperties[] = "'credit_rating' can't be null";
        }
        if ($this->container['credit_limit'] === null) {
            $invalidProperties[] = "'credit_limit' can't be null";
        }
        if ($this->container['credit_score_history'] === null) {
            $invalidProperties[] = "'credit_score_history' can't be null";
        }
        if ($this->container['credit_limit_history'] === null) {
            $invalidProperties[] = "'credit_limit_history' can't be null";
        }
        if ($this->container['commentary'] === null) {
            $invalidProperties[] = "'commentary' can't be null";
        }
        if ($this->container['county_court_judgments'] === null) {
            $invalidProperties[] = "'county_court_judgments' can't be null";
        }
        if ($this->container['payment_statistics'] === null) {
            $invalidProperties[] = "'payment_statistics' can't be null";
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
     * Gets credit_rating
     *
     * @return \Swagger\Client\Model\CompanyCreditReportCreditReportCreditRating
     */
    public function getCreditRating()
    {
        return $this->container['credit_rating'];
    }

    /**
     * Sets credit_rating
     *
     * @param \Swagger\Client\Model\CompanyCreditReportCreditReportCreditRating $credit_rating credit_rating
     *
     * @return $this
     */
    public function setCreditRating($credit_rating)
    {
        $this->container['credit_rating'] = $credit_rating;

        return $this;
    }

    /**
     * Gets credit_limit
     *
     * @return \Swagger\Client\Model\CompanyCreditReportCreditReportCreditLimit
     */
    public function getCreditLimit()
    {
        return $this->container['credit_limit'];
    }

    /**
     * Sets credit_limit
     *
     * @param \Swagger\Client\Model\CompanyCreditReportCreditReportCreditLimit $credit_limit credit_limit
     *
     * @return $this
     */
    public function setCreditLimit($credit_limit)
    {
        $this->container['credit_limit'] = $credit_limit;

        return $this;
    }

    /**
     * Gets credit_score_history
     *
     * @return \Swagger\Client\Model\CompanyCreditReportCreditReportCreditScoreHistory[]
     */
    public function getCreditScoreHistory()
    {
        return $this->container['credit_score_history'];
    }

    /**
     * Sets credit_score_history
     *
     * @param \Swagger\Client\Model\CompanyCreditReportCreditReportCreditScoreHistory[] $credit_score_history credit_score_history
     *
     * @return $this
     */
    public function setCreditScoreHistory($credit_score_history)
    {
        $this->container['credit_score_history'] = $credit_score_history;

        return $this;
    }

    /**
     * Gets credit_limit_history
     *
     * @return \Swagger\Client\Model\CompanyCreditReportCreditReportCreditLimitHistory[]
     */
    public function getCreditLimitHistory()
    {
        return $this->container['credit_limit_history'];
    }

    /**
     * Sets credit_limit_history
     *
     * @param \Swagger\Client\Model\CompanyCreditReportCreditReportCreditLimitHistory[] $credit_limit_history credit_limit_history
     *
     * @return $this
     */
    public function setCreditLimitHistory($credit_limit_history)
    {
        $this->container['credit_limit_history'] = $credit_limit_history;

        return $this;
    }

    /**
     * Gets commentary
     *
     * @return \Swagger\Client\Model\CompanyCreditReportCreditReportCommentary[]
     */
    public function getCommentary()
    {
        return $this->container['commentary'];
    }

    /**
     * Sets commentary
     *
     * @param \Swagger\Client\Model\CompanyCreditReportCreditReportCommentary[] $commentary commentary
     *
     * @return $this
     */
    public function setCommentary($commentary)
    {
        $this->container['commentary'] = $commentary;

        return $this;
    }

    /**
     * Gets county_court_judgments
     *
     * @return \Swagger\Client\Model\CompanyCreditReportCreditReportCountyCourtJudgments
     */
    public function getCountyCourtJudgments()
    {
        return $this->container['county_court_judgments'];
    }

    /**
     * Sets county_court_judgments
     *
     * @param \Swagger\Client\Model\CompanyCreditReportCreditReportCountyCourtJudgments $county_court_judgments county_court_judgments
     *
     * @return $this
     */
    public function setCountyCourtJudgments($county_court_judgments)
    {
        $this->container['county_court_judgments'] = $county_court_judgments;

        return $this;
    }

    /**
     * Gets payment_statistics
     *
     * @return \Swagger\Client\Model\CompanyCreditReportCreditReportPaymentStatistics
     */
    public function getPaymentStatistics()
    {
        return $this->container['payment_statistics'];
    }

    /**
     * Sets payment_statistics
     *
     * @param \Swagger\Client\Model\CompanyCreditReportCreditReportPaymentStatistics $payment_statistics payment_statistics
     *
     * @return $this
     */
    public function setPaymentStatistics($payment_statistics)
    {
        $this->container['payment_statistics'] = $payment_statistics;

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


