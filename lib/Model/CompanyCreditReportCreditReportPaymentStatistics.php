<?php
/**
 * CompanyCreditReportCreditReportPaymentStatistics
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
 * CompanyCreditReportCreditReportPaymentStatistics Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyCreditReportCreditReportPaymentStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanyCreditReport_creditReport_paymentStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_invoices_sampled' => 'float',
        'threshold_days' => 'float',
        'invoices_paid' => '\Swagger\Client\Model\CompanyCreditReportCreditReportPaymentStatisticsInvoicesPaid',
        'invoices_outstanding' => '\Swagger\Client\Model\CompanyCreditReportCreditReportPaymentStatisticsInvoicesPaid',
        'payment_trend' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_invoices_sampled' => 'int32',
        'threshold_days' => 'int32',
        'invoices_paid' => null,
        'invoices_outstanding' => null,
        'payment_trend' => null
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
        'total_invoices_sampled' => 'totalInvoicesSampled',
        'threshold_days' => 'thresholdDays',
        'invoices_paid' => 'invoicesPaid',
        'invoices_outstanding' => 'invoicesOutstanding',
        'payment_trend' => 'paymentTrend'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_invoices_sampled' => 'setTotalInvoicesSampled',
        'threshold_days' => 'setThresholdDays',
        'invoices_paid' => 'setInvoicesPaid',
        'invoices_outstanding' => 'setInvoicesOutstanding',
        'payment_trend' => 'setPaymentTrend'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_invoices_sampled' => 'getTotalInvoicesSampled',
        'threshold_days' => 'getThresholdDays',
        'invoices_paid' => 'getInvoicesPaid',
        'invoices_outstanding' => 'getInvoicesOutstanding',
        'payment_trend' => 'getPaymentTrend'
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

    const PAYMENT_TREND_IMPROVING = 'Improving';
    const PAYMENT_TREND_WORSENING = 'Worsening';
    const PAYMENT_TREND_STABLE = 'Stable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentTrendAllowableValues()
    {
        return [
            self::PAYMENT_TREND_IMPROVING,
            self::PAYMENT_TREND_WORSENING,
            self::PAYMENT_TREND_STABLE,
        ];
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
        $this->container['total_invoices_sampled'] = isset($data['total_invoices_sampled']) ? $data['total_invoices_sampled'] : null;
        $this->container['threshold_days'] = isset($data['threshold_days']) ? $data['threshold_days'] : null;
        $this->container['invoices_paid'] = isset($data['invoices_paid']) ? $data['invoices_paid'] : null;
        $this->container['invoices_outstanding'] = isset($data['invoices_outstanding']) ? $data['invoices_outstanding'] : null;
        $this->container['payment_trend'] = isset($data['payment_trend']) ? $data['payment_trend'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['total_invoices_sampled'] === null) {
            $invalidProperties[] = "'total_invoices_sampled' can't be null";
        }
        if ($this->container['threshold_days'] === null) {
            $invalidProperties[] = "'threshold_days' can't be null";
        }
        if ($this->container['invoices_paid'] === null) {
            $invalidProperties[] = "'invoices_paid' can't be null";
        }
        if ($this->container['invoices_outstanding'] === null) {
            $invalidProperties[] = "'invoices_outstanding' can't be null";
        }
        if ($this->container['payment_trend'] === null) {
            $invalidProperties[] = "'payment_trend' can't be null";
        }
        $allowedValues = $this->getPaymentTrendAllowableValues();
        if (!is_null($this->container['payment_trend']) && !in_array($this->container['payment_trend'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_trend', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets total_invoices_sampled
     *
     * @return float
     */
    public function getTotalInvoicesSampled()
    {
        return $this->container['total_invoices_sampled'];
    }

    /**
     * Sets total_invoices_sampled
     *
     * @param float $total_invoices_sampled total_invoices_sampled
     *
     * @return $this
     */
    public function setTotalInvoicesSampled($total_invoices_sampled)
    {
        $this->container['total_invoices_sampled'] = $total_invoices_sampled;

        return $this;
    }

    /**
     * Gets threshold_days
     *
     * @return float
     */
    public function getThresholdDays()
    {
        return $this->container['threshold_days'];
    }

    /**
     * Sets threshold_days
     *
     * @param float $threshold_days threshold_days
     *
     * @return $this
     */
    public function setThresholdDays($threshold_days)
    {
        $this->container['threshold_days'] = $threshold_days;

        return $this;
    }

    /**
     * Gets invoices_paid
     *
     * @return \Swagger\Client\Model\CompanyCreditReportCreditReportPaymentStatisticsInvoicesPaid
     */
    public function getInvoicesPaid()
    {
        return $this->container['invoices_paid'];
    }

    /**
     * Sets invoices_paid
     *
     * @param \Swagger\Client\Model\CompanyCreditReportCreditReportPaymentStatisticsInvoicesPaid $invoices_paid invoices_paid
     *
     * @return $this
     */
    public function setInvoicesPaid($invoices_paid)
    {
        $this->container['invoices_paid'] = $invoices_paid;

        return $this;
    }

    /**
     * Gets invoices_outstanding
     *
     * @return \Swagger\Client\Model\CompanyCreditReportCreditReportPaymentStatisticsInvoicesPaid
     */
    public function getInvoicesOutstanding()
    {
        return $this->container['invoices_outstanding'];
    }

    /**
     * Sets invoices_outstanding
     *
     * @param \Swagger\Client\Model\CompanyCreditReportCreditReportPaymentStatisticsInvoicesPaid $invoices_outstanding invoices_outstanding
     *
     * @return $this
     */
    public function setInvoicesOutstanding($invoices_outstanding)
    {
        $this->container['invoices_outstanding'] = $invoices_outstanding;

        return $this;
    }

    /**
     * Gets payment_trend
     *
     * @return string
     */
    public function getPaymentTrend()
    {
        return $this->container['payment_trend'];
    }

    /**
     * Sets payment_trend
     *
     * @param string $payment_trend payment_trend
     *
     * @return $this
     */
    public function setPaymentTrend($payment_trend)
    {
        $allowedValues = $this->getPaymentTrendAllowableValues();
        if (!in_array($payment_trend, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_trend', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_trend'] = $payment_trend;

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


