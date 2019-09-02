<?php
/**
 * CallcreditIdentityCheckResponse
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
 * CallcreditIdentityCheckResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallcreditIdentityCheckResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallcreditIdentityCheckResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'call_validate_reference' => 'string',
        'match_summary' => '\Swagger\Client\Model\CallcreditIdentityCheckResponseMatchSummary',
        'score_card' => '\Swagger\Client\Model\CallcreditIdentityCheckResponseScoreCard',
        'warnings' => '\Swagger\Client\Model\CallcreditIdentityCheckResponseWarnings',
        'name' => '\Swagger\Client\Model\CallcreditIdentityCheckResponseName',
        'address' => '\Swagger\Client\Model\CallcreditIdentityCheckResponseAddress',
        'date_of_birth' => '\Swagger\Client\Model\CallcreditIdentityCheckResponseDateOfBirth',
        'electoral_roll' => '\Swagger\Client\Model\CallcreditIdentityCheckResponseElectoralRoll',
        'deceased' => '\Swagger\Client\Model\CallcreditIdentityCheckResponseDeceased',
        'county_court_judgments' => '\Swagger\Client\Model\CallcreditIdentityCheckResponseCountyCourtJudgments',
        'bankruptcy_or_insolvency' => '\Swagger\Client\Model\CallcreditIdentityCheckResponseBankruptcyOrInsolvency',
        'callcredit_share' => '\Swagger\Client\Model\CallcreditIdentityCheckResponseCallcreditSHARE',
        'notice_of_corrections' => 'string',
        'extra_checks' => '\Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'call_validate_reference' => null,
        'match_summary' => null,
        'score_card' => null,
        'warnings' => null,
        'name' => null,
        'address' => null,
        'date_of_birth' => null,
        'electoral_roll' => null,
        'deceased' => null,
        'county_court_judgments' => null,
        'bankruptcy_or_insolvency' => null,
        'callcredit_share' => null,
        'notice_of_corrections' => null,
        'extra_checks' => null
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
        'call_validate_reference' => 'callValidateReference',
        'match_summary' => 'matchSummary',
        'score_card' => 'scoreCard',
        'warnings' => 'warnings',
        'name' => 'name',
        'address' => 'address',
        'date_of_birth' => 'dateOfBirth',
        'electoral_roll' => 'electoralRoll',
        'deceased' => 'deceased',
        'county_court_judgments' => 'countyCourtJudgments',
        'bankruptcy_or_insolvency' => 'bankruptcyOrInsolvency',
        'callcredit_share' => 'callcreditSHARE',
        'notice_of_corrections' => 'noticeOfCorrections',
        'extra_checks' => 'extraChecks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'call_validate_reference' => 'setCallValidateReference',
        'match_summary' => 'setMatchSummary',
        'score_card' => 'setScoreCard',
        'warnings' => 'setWarnings',
        'name' => 'setName',
        'address' => 'setAddress',
        'date_of_birth' => 'setDateOfBirth',
        'electoral_roll' => 'setElectoralRoll',
        'deceased' => 'setDeceased',
        'county_court_judgments' => 'setCountyCourtJudgments',
        'bankruptcy_or_insolvency' => 'setBankruptcyOrInsolvency',
        'callcredit_share' => 'setCallcreditShare',
        'notice_of_corrections' => 'setNoticeOfCorrections',
        'extra_checks' => 'setExtraChecks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'call_validate_reference' => 'getCallValidateReference',
        'match_summary' => 'getMatchSummary',
        'score_card' => 'getScoreCard',
        'warnings' => 'getWarnings',
        'name' => 'getName',
        'address' => 'getAddress',
        'date_of_birth' => 'getDateOfBirth',
        'electoral_roll' => 'getElectoralRoll',
        'deceased' => 'getDeceased',
        'county_court_judgments' => 'getCountyCourtJudgments',
        'bankruptcy_or_insolvency' => 'getBankruptcyOrInsolvency',
        'callcredit_share' => 'getCallcreditShare',
        'notice_of_corrections' => 'getNoticeOfCorrections',
        'extra_checks' => 'getExtraChecks'
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
        $this->container['call_validate_reference'] = isset($data['call_validate_reference']) ? $data['call_validate_reference'] : null;
        $this->container['match_summary'] = isset($data['match_summary']) ? $data['match_summary'] : null;
        $this->container['score_card'] = isset($data['score_card']) ? $data['score_card'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['electoral_roll'] = isset($data['electoral_roll']) ? $data['electoral_roll'] : null;
        $this->container['deceased'] = isset($data['deceased']) ? $data['deceased'] : null;
        $this->container['county_court_judgments'] = isset($data['county_court_judgments']) ? $data['county_court_judgments'] : null;
        $this->container['bankruptcy_or_insolvency'] = isset($data['bankruptcy_or_insolvency']) ? $data['bankruptcy_or_insolvency'] : null;
        $this->container['callcredit_share'] = isset($data['callcredit_share']) ? $data['callcredit_share'] : null;
        $this->container['notice_of_corrections'] = isset($data['notice_of_corrections']) ? $data['notice_of_corrections'] : null;
        $this->container['extra_checks'] = isset($data['extra_checks']) ? $data['extra_checks'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['call_validate_reference'] === null) {
            $invalidProperties[] = "'call_validate_reference' can't be null";
        }
        if ($this->container['match_summary'] === null) {
            $invalidProperties[] = "'match_summary' can't be null";
        }
        if ($this->container['score_card'] === null) {
            $invalidProperties[] = "'score_card' can't be null";
        }
        if ($this->container['warnings'] === null) {
            $invalidProperties[] = "'warnings' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['date_of_birth'] === null) {
            $invalidProperties[] = "'date_of_birth' can't be null";
        }
        if ($this->container['electoral_roll'] === null) {
            $invalidProperties[] = "'electoral_roll' can't be null";
        }
        if ($this->container['deceased'] === null) {
            $invalidProperties[] = "'deceased' can't be null";
        }
        if ($this->container['county_court_judgments'] === null) {
            $invalidProperties[] = "'county_court_judgments' can't be null";
        }
        if ($this->container['bankruptcy_or_insolvency'] === null) {
            $invalidProperties[] = "'bankruptcy_or_insolvency' can't be null";
        }
        if ($this->container['callcredit_share'] === null) {
            $invalidProperties[] = "'callcredit_share' can't be null";
        }
        if ($this->container['notice_of_corrections'] === null) {
            $invalidProperties[] = "'notice_of_corrections' can't be null";
        }
        if ($this->container['extra_checks'] === null) {
            $invalidProperties[] = "'extra_checks' can't be null";
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
     * Gets call_validate_reference
     *
     * @return string
     */
    public function getCallValidateReference()
    {
        return $this->container['call_validate_reference'];
    }

    /**
     * Sets call_validate_reference
     *
     * @param string $call_validate_reference CallValidate reference number, please use this if contacting Callcredit regarding this query.
     *
     * @return $this
     */
    public function setCallValidateReference($call_validate_reference)
    {
        $this->container['call_validate_reference'] = $call_validate_reference;

        return $this;
    }

    /**
     * Gets match_summary
     *
     * @return \Swagger\Client\Model\CallcreditIdentityCheckResponseMatchSummary
     */
    public function getMatchSummary()
    {
        return $this->container['match_summary'];
    }

    /**
     * Sets match_summary
     *
     * @param \Swagger\Client\Model\CallcreditIdentityCheckResponseMatchSummary $match_summary match_summary
     *
     * @return $this
     */
    public function setMatchSummary($match_summary)
    {
        $this->container['match_summary'] = $match_summary;

        return $this;
    }

    /**
     * Gets score_card
     *
     * @return \Swagger\Client\Model\CallcreditIdentityCheckResponseScoreCard
     */
    public function getScoreCard()
    {
        return $this->container['score_card'];
    }

    /**
     * Sets score_card
     *
     * @param \Swagger\Client\Model\CallcreditIdentityCheckResponseScoreCard $score_card score_card
     *
     * @return $this
     */
    public function setScoreCard($score_card)
    {
        $this->container['score_card'] = $score_card;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \Swagger\Client\Model\CallcreditIdentityCheckResponseWarnings
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \Swagger\Client\Model\CallcreditIdentityCheckResponseWarnings $warnings warnings
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \Swagger\Client\Model\CallcreditIdentityCheckResponseName
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Swagger\Client\Model\CallcreditIdentityCheckResponseName $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Swagger\Client\Model\CallcreditIdentityCheckResponseAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Swagger\Client\Model\CallcreditIdentityCheckResponseAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \Swagger\Client\Model\CallcreditIdentityCheckResponseDateOfBirth
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \Swagger\Client\Model\CallcreditIdentityCheckResponseDateOfBirth $date_of_birth date_of_birth
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets electoral_roll
     *
     * @return \Swagger\Client\Model\CallcreditIdentityCheckResponseElectoralRoll
     */
    public function getElectoralRoll()
    {
        return $this->container['electoral_roll'];
    }

    /**
     * Sets electoral_roll
     *
     * @param \Swagger\Client\Model\CallcreditIdentityCheckResponseElectoralRoll $electoral_roll electoral_roll
     *
     * @return $this
     */
    public function setElectoralRoll($electoral_roll)
    {
        $this->container['electoral_roll'] = $electoral_roll;

        return $this;
    }

    /**
     * Gets deceased
     *
     * @return \Swagger\Client\Model\CallcreditIdentityCheckResponseDeceased
     */
    public function getDeceased()
    {
        return $this->container['deceased'];
    }

    /**
     * Sets deceased
     *
     * @param \Swagger\Client\Model\CallcreditIdentityCheckResponseDeceased $deceased deceased
     *
     * @return $this
     */
    public function setDeceased($deceased)
    {
        $this->container['deceased'] = $deceased;

        return $this;
    }

    /**
     * Gets county_court_judgments
     *
     * @return \Swagger\Client\Model\CallcreditIdentityCheckResponseCountyCourtJudgments
     */
    public function getCountyCourtJudgments()
    {
        return $this->container['county_court_judgments'];
    }

    /**
     * Sets county_court_judgments
     *
     * @param \Swagger\Client\Model\CallcreditIdentityCheckResponseCountyCourtJudgments $county_court_judgments county_court_judgments
     *
     * @return $this
     */
    public function setCountyCourtJudgments($county_court_judgments)
    {
        $this->container['county_court_judgments'] = $county_court_judgments;

        return $this;
    }

    /**
     * Gets bankruptcy_or_insolvency
     *
     * @return \Swagger\Client\Model\CallcreditIdentityCheckResponseBankruptcyOrInsolvency
     */
    public function getBankruptcyOrInsolvency()
    {
        return $this->container['bankruptcy_or_insolvency'];
    }

    /**
     * Sets bankruptcy_or_insolvency
     *
     * @param \Swagger\Client\Model\CallcreditIdentityCheckResponseBankruptcyOrInsolvency $bankruptcy_or_insolvency bankruptcy_or_insolvency
     *
     * @return $this
     */
    public function setBankruptcyOrInsolvency($bankruptcy_or_insolvency)
    {
        $this->container['bankruptcy_or_insolvency'] = $bankruptcy_or_insolvency;

        return $this;
    }

    /**
     * Gets callcredit_share
     *
     * @return \Swagger\Client\Model\CallcreditIdentityCheckResponseCallcreditSHARE
     */
    public function getCallcreditShare()
    {
        return $this->container['callcredit_share'];
    }

    /**
     * Sets callcredit_share
     *
     * @param \Swagger\Client\Model\CallcreditIdentityCheckResponseCallcreditSHARE $callcredit_share callcredit_share
     *
     * @return $this
     */
    public function setCallcreditShare($callcredit_share)
    {
        $this->container['callcredit_share'] = $callcredit_share;

        return $this;
    }

    /**
     * Gets notice_of_corrections
     *
     * @return string
     */
    public function getNoticeOfCorrections()
    {
        return $this->container['notice_of_corrections'];
    }

    /**
     * Sets notice_of_corrections
     *
     * @param string $notice_of_corrections notice_of_corrections
     *
     * @return $this
     */
    public function setNoticeOfCorrections($notice_of_corrections)
    {
        $this->container['notice_of_corrections'] = $notice_of_corrections;

        return $this;
    }

    /**
     * Gets extra_checks
     *
     * @return \Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecks
     */
    public function getExtraChecks()
    {
        return $this->container['extra_checks'];
    }

    /**
     * Sets extra_checks
     *
     * @param \Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecks $extra_checks extra_checks
     *
     * @return $this
     */
    public function setExtraChecks($extra_checks)
    {
        $this->container['extra_checks'] = $extra_checks;

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


