<?php
/**
 * CompanyChargesCharges
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
 * CompanyChargesCharges Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyChargesCharges implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanyCharges_charges';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'status' => 'string',
        'date_created' => '\DateTime',
        'date_filed' => '\DateTime',
        'date_satisfied' => '\DateTime',
        'persons_entitled' => '\Swagger\Client\Model\CharityTrusteesTrustees[]',
        'amount_secured' => 'string',
        'short_particulars' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'status' => null,
        'date_created' => 'date',
        'date_filed' => 'date',
        'date_satisfied' => 'date',
        'persons_entitled' => null,
        'amount_secured' => null,
        'short_particulars' => null
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
        'status' => 'status',
        'date_created' => 'dateCreated',
        'date_filed' => 'dateFiled',
        'date_satisfied' => 'dateSatisfied',
        'persons_entitled' => 'personsEntitled',
        'amount_secured' => 'amountSecured',
        'short_particulars' => 'shortParticulars'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'status' => 'setStatus',
        'date_created' => 'setDateCreated',
        'date_filed' => 'setDateFiled',
        'date_satisfied' => 'setDateSatisfied',
        'persons_entitled' => 'setPersonsEntitled',
        'amount_secured' => 'setAmountSecured',
        'short_particulars' => 'setShortParticulars'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'status' => 'getStatus',
        'date_created' => 'getDateCreated',
        'date_filed' => 'getDateFiled',
        'date_satisfied' => 'getDateSatisfied',
        'persons_entitled' => 'getPersonsEntitled',
        'amount_secured' => 'getAmountSecured',
        'short_particulars' => 'getShortParticulars'
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

    const STATUS_OUTSTANDING = 'Outstanding';
    const STATUS_SATISFIED = 'Satisfied';
    const STATUS_PARTIALLY_SATISFIED = 'Partially satisfied';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OUTSTANDING,
            self::STATUS_SATISFIED,
            self::STATUS_PARTIALLY_SATISFIED,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['date_filed'] = isset($data['date_filed']) ? $data['date_filed'] : null;
        $this->container['date_satisfied'] = isset($data['date_satisfied']) ? $data['date_satisfied'] : null;
        $this->container['persons_entitled'] = isset($data['persons_entitled']) ? $data['persons_entitled'] : null;
        $this->container['amount_secured'] = isset($data['amount_secured']) ? $data['amount_secured'] : null;
        $this->container['short_particulars'] = isset($data['short_particulars']) ? $data['short_particulars'] : null;
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
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['date_created'] === null) {
            $invalidProperties[] = "'date_created' can't be null";
        }
        if ($this->container['date_filed'] === null) {
            $invalidProperties[] = "'date_filed' can't be null";
        }
        if ($this->container['date_satisfied'] === null) {
            $invalidProperties[] = "'date_satisfied' can't be null";
        }
        if ($this->container['persons_entitled'] === null) {
            $invalidProperties[] = "'persons_entitled' can't be null";
        }
        if ($this->container['amount_secured'] === null) {
            $invalidProperties[] = "'amount_secured' can't be null";
        }
        if ($this->container['short_particulars'] === null) {
            $invalidProperties[] = "'short_particulars' can't be null";
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime $date_created date_created
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets date_filed
     *
     * @return \DateTime
     */
    public function getDateFiled()
    {
        return $this->container['date_filed'];
    }

    /**
     * Sets date_filed
     *
     * @param \DateTime $date_filed date_filed
     *
     * @return $this
     */
    public function setDateFiled($date_filed)
    {
        $this->container['date_filed'] = $date_filed;

        return $this;
    }

    /**
     * Gets date_satisfied
     *
     * @return \DateTime
     */
    public function getDateSatisfied()
    {
        return $this->container['date_satisfied'];
    }

    /**
     * Sets date_satisfied
     *
     * @param \DateTime $date_satisfied date_satisfied
     *
     * @return $this
     */
    public function setDateSatisfied($date_satisfied)
    {
        $this->container['date_satisfied'] = $date_satisfied;

        return $this;
    }

    /**
     * Gets persons_entitled
     *
     * @return \Swagger\Client\Model\CharityTrusteesTrustees[]
     */
    public function getPersonsEntitled()
    {
        return $this->container['persons_entitled'];
    }

    /**
     * Sets persons_entitled
     *
     * @param \Swagger\Client\Model\CharityTrusteesTrustees[] $persons_entitled persons_entitled
     *
     * @return $this
     */
    public function setPersonsEntitled($persons_entitled)
    {
        $this->container['persons_entitled'] = $persons_entitled;

        return $this;
    }

    /**
     * Gets amount_secured
     *
     * @return string
     */
    public function getAmountSecured()
    {
        return $this->container['amount_secured'];
    }

    /**
     * Sets amount_secured
     *
     * @param string $amount_secured amount_secured
     *
     * @return $this
     */
    public function setAmountSecured($amount_secured)
    {
        $this->container['amount_secured'] = $amount_secured;

        return $this;
    }

    /**
     * Gets short_particulars
     *
     * @return string
     */
    public function getShortParticulars()
    {
        return $this->container['short_particulars'];
    }

    /**
     * Sets short_particulars
     *
     * @param string $short_particulars short_particulars
     *
     * @return $this
     */
    public function setShortParticulars($short_particulars)
    {
        $this->container['short_particulars'] = $short_particulars;

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


