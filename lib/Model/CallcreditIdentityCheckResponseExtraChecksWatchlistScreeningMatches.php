<?php
/**
 * CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningMatches
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
 * CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningMatches Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningMatches implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallcreditIdentityCheckResponse_extraChecks_watchlistScreening_matches';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'primary_name' => 'string',
        'is_active_pep' => 'bool',
        'risk_category' => 'string',
        'title' => 'string',
        'gender' => 'string',
        'dates_of_birth' => '\Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningDatesOfBirth[]',
        'countries' => '\Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningCountries[]',
        'match_metadata' => '\Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningMatchMetadata',
        'last_revised' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'primary_name' => null,
        'is_active_pep' => null,
        'risk_category' => null,
        'title' => null,
        'gender' => null,
        'dates_of_birth' => null,
        'countries' => null,
        'match_metadata' => null,
        'last_revised' => 'date-time'
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
        'primary_name' => 'primaryName',
        'is_active_pep' => 'isActivePEP',
        'risk_category' => 'riskCategory',
        'title' => 'title',
        'gender' => 'gender',
        'dates_of_birth' => 'datesOfBirth',
        'countries' => 'countries',
        'match_metadata' => 'matchMetadata',
        'last_revised' => 'lastRevised'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'primary_name' => 'setPrimaryName',
        'is_active_pep' => 'setIsActivePep',
        'risk_category' => 'setRiskCategory',
        'title' => 'setTitle',
        'gender' => 'setGender',
        'dates_of_birth' => 'setDatesOfBirth',
        'countries' => 'setCountries',
        'match_metadata' => 'setMatchMetadata',
        'last_revised' => 'setLastRevised'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'primary_name' => 'getPrimaryName',
        'is_active_pep' => 'getIsActivePep',
        'risk_category' => 'getRiskCategory',
        'title' => 'getTitle',
        'gender' => 'getGender',
        'dates_of_birth' => 'getDatesOfBirth',
        'countries' => 'getCountries',
        'match_metadata' => 'getMatchMetadata',
        'last_revised' => 'getLastRevised'
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

    const RISK_CATEGORY_SI = 'SI';
    const RISK_CATEGORY_SI_LT = 'SI-LT';
    const RISK_CATEGORY_ECR = 'ECR';
    const RISK_CATEGORY_PEP = 'PEP';
    const RISK_CATEGORY_RCA = 'RCA';
    const RISK_CATEGORY_SAN = 'SAN';
    const RISK_CATEGORY_OOL = 'OOL';
    const RISK_CATEGORY_OEL = 'OEL';
    const RISK_CATEGORY_BRD = 'BRD';
    const GENDER_M = 'M';
    const GENDER_F = 'F';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRiskCategoryAllowableValues()
    {
        return [
            self::RISK_CATEGORY_SI,
            self::RISK_CATEGORY_SI_LT,
            self::RISK_CATEGORY_ECR,
            self::RISK_CATEGORY_PEP,
            self::RISK_CATEGORY_RCA,
            self::RISK_CATEGORY_SAN,
            self::RISK_CATEGORY_OOL,
            self::RISK_CATEGORY_OEL,
            self::RISK_CATEGORY_BRD,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_M,
            self::GENDER_F,
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
        $this->container['primary_name'] = isset($data['primary_name']) ? $data['primary_name'] : null;
        $this->container['is_active_pep'] = isset($data['is_active_pep']) ? $data['is_active_pep'] : null;
        $this->container['risk_category'] = isset($data['risk_category']) ? $data['risk_category'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['dates_of_birth'] = isset($data['dates_of_birth']) ? $data['dates_of_birth'] : null;
        $this->container['countries'] = isset($data['countries']) ? $data['countries'] : null;
        $this->container['match_metadata'] = isset($data['match_metadata']) ? $data['match_metadata'] : null;
        $this->container['last_revised'] = isset($data['last_revised']) ? $data['last_revised'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRiskCategoryAllowableValues();
        if (!is_null($this->container['risk_category']) && !in_array($this->container['risk_category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'risk_category', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender', must be one of '%s'",
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
     * Gets primary_name
     *
     * @return string
     */
    public function getPrimaryName()
    {
        return $this->container['primary_name'];
    }

    /**
     * Sets primary_name
     *
     * @param string $primary_name The Primary Name of the potential Match
     *
     * @return $this
     */
    public function setPrimaryName($primary_name)
    {
        $this->container['primary_name'] = $primary_name;

        return $this;
    }

    /**
     * Gets is_active_pep
     *
     * @return bool
     */
    public function getIsActivePep()
    {
        return $this->container['is_active_pep'];
    }

    /**
     * Sets is_active_pep
     *
     * @param bool $is_active_pep If the potential match is currently a Politically Exposed Person this will be `true` and if it has been one `false`. If the risk indicator is not a PEP then it'll be `null`
     *
     * @return $this
     */
    public function setIsActivePep($is_active_pep)
    {
        $this->container['is_active_pep'] = $is_active_pep;

        return $this;
    }

    /**
     * Gets risk_category
     *
     * @return string
     */
    public function getRiskCategory()
    {
        return $this->container['risk_category'];
    }

    /**
     * Sets risk_category
     *
     * @param string $risk_category Detail of a single risk category
     *
     * @return $this
     */
    public function setRiskCategory($risk_category)
    {
        $allowedValues = $this->getRiskCategoryAllowableValues();
        if (!is_null($risk_category) && !in_array($risk_category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'risk_category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['risk_category'] = $risk_category;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The Title of the potential match
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender Gender of the potential match
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($gender) && !in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets dates_of_birth
     *
     * @return \Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningDatesOfBirth[]
     */
    public function getDatesOfBirth()
    {
        return $this->container['dates_of_birth'];
    }

    /**
     * Sets dates_of_birth
     *
     * @param \Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningDatesOfBirth[] $dates_of_birth Dates of birth of the potential match
     *
     * @return $this
     */
    public function setDatesOfBirth($dates_of_birth)
    {
        $this->container['dates_of_birth'] = $dates_of_birth;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return \Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningCountries[]
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param \Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningCountries[] $countries Array of countries associated with the match
     *
     * @return $this
     */
    public function setCountries($countries)
    {
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets match_metadata
     *
     * @return \Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningMatchMetadata
     */
    public function getMatchMetadata()
    {
        return $this->container['match_metadata'];
    }

    /**
     * Sets match_metadata
     *
     * @param \Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningMatchMetadata $match_metadata match_metadata
     *
     * @return $this
     */
    public function setMatchMetadata($match_metadata)
    {
        $this->container['match_metadata'] = $match_metadata;

        return $this;
    }

    /**
     * Gets last_revised
     *
     * @return \DateTime
     */
    public function getLastRevised()
    {
        return $this->container['last_revised'];
    }

    /**
     * Sets last_revised
     *
     * @param \DateTime $last_revised last_revised
     *
     * @return $this
     */
    public function setLastRevised($last_revised)
    {
        $this->container['last_revised'] = $last_revised;

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


