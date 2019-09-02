<?php
/**
 * CallcreditIdentityCheckResponseMatchSummary
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
 * CallcreditIdentityCheckResponseMatchSummary Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallcreditIdentityCheckResponseMatchSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallcreditIdentityCheckResponse_matchSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'match_level' => 'string',
        'applicant_verified' => 'string',
        'num_primary_checks' => 'int',
        'num_primary_other_ids_confirmed' => 'int',
        'num_corroborative_checks' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'match_level' => null,
        'applicant_verified' => null,
        'num_primary_checks' => null,
        'num_primary_other_ids_confirmed' => null,
        'num_corroborative_checks' => null
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
        'match_level' => 'matchLevel',
        'applicant_verified' => 'applicantVerified',
        'num_primary_checks' => 'numPrimaryChecks',
        'num_primary_other_ids_confirmed' => 'numPrimaryOtherIdsConfirmed',
        'num_corroborative_checks' => 'numCorroborativeChecks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'match_level' => 'setMatchLevel',
        'applicant_verified' => 'setApplicantVerified',
        'num_primary_checks' => 'setNumPrimaryChecks',
        'num_primary_other_ids_confirmed' => 'setNumPrimaryOtherIdsConfirmed',
        'num_corroborative_checks' => 'setNumCorroborativeChecks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'match_level' => 'getMatchLevel',
        'applicant_verified' => 'getApplicantVerified',
        'num_primary_checks' => 'getNumPrimaryChecks',
        'num_primary_other_ids_confirmed' => 'getNumPrimaryOtherIdsConfirmed',
        'num_corroborative_checks' => 'getNumCorroborativeChecks'
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
        $this->container['match_level'] = isset($data['match_level']) ? $data['match_level'] : null;
        $this->container['applicant_verified'] = isset($data['applicant_verified']) ? $data['applicant_verified'] : null;
        $this->container['num_primary_checks'] = isset($data['num_primary_checks']) ? $data['num_primary_checks'] : null;
        $this->container['num_primary_other_ids_confirmed'] = isset($data['num_primary_other_ids_confirmed']) ? $data['num_primary_other_ids_confirmed'] : null;
        $this->container['num_corroborative_checks'] = isset($data['num_corroborative_checks']) ? $data['num_corroborative_checks'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['match_level'] === null) {
            $invalidProperties[] = "'match_level' can't be null";
        }
        if ($this->container['applicant_verified'] === null) {
            $invalidProperties[] = "'applicant_verified' can't be null";
        }
        if ($this->container['num_primary_checks'] === null) {
            $invalidProperties[] = "'num_primary_checks' can't be null";
        }
        if ($this->container['num_primary_other_ids_confirmed'] === null) {
            $invalidProperties[] = "'num_primary_other_ids_confirmed' can't be null";
        }
        if ($this->container['num_corroborative_checks'] === null) {
            $invalidProperties[] = "'num_corroborative_checks' can't be null";
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
     * Gets match_level
     *
     * @return string
     */
    public function getMatchLevel()
    {
        return $this->container['match_level'];
    }

    /**
     * Sets match_level
     *
     * @param string $match_level IndividualReport = a full match has been achieved; SurnameReport = a surname match has been achieved; AddressReport = an address match has been achieved; NoMatchFound = no matches have been achieved; Picklist = a picklist has been returned
     *
     * @return $this
     */
    public function setMatchLevel($match_level)
    {
        $this->container['match_level'] = $match_level;

        return $this;
    }

    /**
     * Gets applicant_verified
     *
     * @return string
     */
    public function getApplicantVerified()
    {
        return $this->container['applicant_verified'];
    }

    /**
     * Sets applicant_verified
     *
     * @param string $applicant_verified applicant_verified
     *
     * @return $this
     */
    public function setApplicantVerified($applicant_verified)
    {
        $this->container['applicant_verified'] = $applicant_verified;

        return $this;
    }

    /**
     * Gets num_primary_checks
     *
     * @return int
     */
    public function getNumPrimaryChecks()
    {
        return $this->container['num_primary_checks'];
    }

    /**
     * Sets num_primary_checks
     *
     * @param int $num_primary_checks num_primary_checks
     *
     * @return $this
     */
    public function setNumPrimaryChecks($num_primary_checks)
    {
        $this->container['num_primary_checks'] = $num_primary_checks;

        return $this;
    }

    /**
     * Gets num_primary_other_ids_confirmed
     *
     * @return int
     */
    public function getNumPrimaryOtherIdsConfirmed()
    {
        return $this->container['num_primary_other_ids_confirmed'];
    }

    /**
     * Sets num_primary_other_ids_confirmed
     *
     * @param int $num_primary_other_ids_confirmed num_primary_other_ids_confirmed
     *
     * @return $this
     */
    public function setNumPrimaryOtherIdsConfirmed($num_primary_other_ids_confirmed)
    {
        $this->container['num_primary_other_ids_confirmed'] = $num_primary_other_ids_confirmed;

        return $this;
    }

    /**
     * Gets num_corroborative_checks
     *
     * @return int
     */
    public function getNumCorroborativeChecks()
    {
        return $this->container['num_corroborative_checks'];
    }

    /**
     * Sets num_corroborative_checks
     *
     * @param int $num_corroborative_checks num_corroborative_checks
     *
     * @return $this
     */
    public function setNumCorroborativeChecks($num_corroborative_checks)
    {
        $this->container['num_corroborative_checks'] = $num_corroborative_checks;

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


