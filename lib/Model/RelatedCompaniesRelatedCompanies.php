<?php
/**
 * RelatedCompaniesRelatedCompanies
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
 * RelatedCompaniesRelatedCompanies Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RelatedCompaniesRelatedCompanies implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RelatedCompanies_relatedCompanies';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country_code' => 'string',
        'company_id' => 'string',
        'official_status' => 'string',
        'simplified_status' => 'string',
        'name' => 'string',
        'confidence' => 'string',
        'name_similarity_score' => 'float',
        'mutual_addresses' => '\Swagger\Client\Model\RelatedCompaniesMutualAddresses',
        'mutual_major_shareholders' => '\Swagger\Client\Model\RelatedCompaniesMutualMajorShareholders',
        'mutual_officers' => '\Swagger\Client\Model\RelatedCompaniesMutualOfficers',
        'mutual_investments' => '\Swagger\Client\Model\RelatedCompaniesMutualInvestments'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country_code' => null,
        'company_id' => null,
        'official_status' => null,
        'simplified_status' => null,
        'name' => null,
        'confidence' => null,
        'name_similarity_score' => 'float',
        'mutual_addresses' => null,
        'mutual_major_shareholders' => null,
        'mutual_officers' => null,
        'mutual_investments' => null
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
        'official_status' => 'officialStatus',
        'simplified_status' => 'simplifiedStatus',
        'name' => 'name',
        'confidence' => 'confidence',
        'name_similarity_score' => 'nameSimilarityScore',
        'mutual_addresses' => 'mutualAddresses',
        'mutual_major_shareholders' => 'mutualMajorShareholders',
        'mutual_officers' => 'mutualOfficers',
        'mutual_investments' => 'mutualInvestments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_code' => 'setCountryCode',
        'company_id' => 'setCompanyId',
        'official_status' => 'setOfficialStatus',
        'simplified_status' => 'setSimplifiedStatus',
        'name' => 'setName',
        'confidence' => 'setConfidence',
        'name_similarity_score' => 'setNameSimilarityScore',
        'mutual_addresses' => 'setMutualAddresses',
        'mutual_major_shareholders' => 'setMutualMajorShareholders',
        'mutual_officers' => 'setMutualOfficers',
        'mutual_investments' => 'setMutualInvestments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_code' => 'getCountryCode',
        'company_id' => 'getCompanyId',
        'official_status' => 'getOfficialStatus',
        'simplified_status' => 'getSimplifiedStatus',
        'name' => 'getName',
        'confidence' => 'getConfidence',
        'name_similarity_score' => 'getNameSimilarityScore',
        'mutual_addresses' => 'getMutualAddresses',
        'mutual_major_shareholders' => 'getMutualMajorShareholders',
        'mutual_officers' => 'getMutualOfficers',
        'mutual_investments' => 'getMutualInvestments'
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
        $this->container['official_status'] = isset($data['official_status']) ? $data['official_status'] : null;
        $this->container['simplified_status'] = isset($data['simplified_status']) ? $data['simplified_status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['name_similarity_score'] = isset($data['name_similarity_score']) ? $data['name_similarity_score'] : null;
        $this->container['mutual_addresses'] = isset($data['mutual_addresses']) ? $data['mutual_addresses'] : null;
        $this->container['mutual_major_shareholders'] = isset($data['mutual_major_shareholders']) ? $data['mutual_major_shareholders'] : null;
        $this->container['mutual_officers'] = isset($data['mutual_officers']) ? $data['mutual_officers'] : null;
        $this->container['mutual_investments'] = isset($data['mutual_investments']) ? $data['mutual_investments'] : null;
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
        if ($this->container['official_status'] === null) {
            $invalidProperties[] = "'official_status' can't be null";
        }
        if ($this->container['simplified_status'] === null) {
            $invalidProperties[] = "'simplified_status' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['confidence'] === null) {
            $invalidProperties[] = "'confidence' can't be null";
        }
        if ($this->container['name_similarity_score'] === null) {
            $invalidProperties[] = "'name_similarity_score' can't be null";
        }
        if ($this->container['mutual_addresses'] === null) {
            $invalidProperties[] = "'mutual_addresses' can't be null";
        }
        if ($this->container['mutual_major_shareholders'] === null) {
            $invalidProperties[] = "'mutual_major_shareholders' can't be null";
        }
        if ($this->container['mutual_officers'] === null) {
            $invalidProperties[] = "'mutual_officers' can't be null";
        }
        if ($this->container['mutual_investments'] === null) {
            $invalidProperties[] = "'mutual_investments' can't be null";
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
     * @param string $country_code Related company country code
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
     * @param string $company_id Related company ID
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

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
     * @param string $name Related company name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets confidence
     *
     * @return string
     */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
     * Sets confidence
     *
     * @param string $confidence Confidence for the similarity match between the source and destination companies being compared
     *
     * @return $this
     */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;

        return $this;
    }

    /**
     * Gets name_similarity_score
     *
     * @return float
     */
    public function getNameSimilarityScore()
    {
        return $this->container['name_similarity_score'];
    }

    /**
     * Sets name_similarity_score
     *
     * @param float $name_similarity_score Name similarity score between the source and destination companies
     *
     * @return $this
     */
    public function setNameSimilarityScore($name_similarity_score)
    {
        $this->container['name_similarity_score'] = $name_similarity_score;

        return $this;
    }

    /**
     * Gets mutual_addresses
     *
     * @return \Swagger\Client\Model\RelatedCompaniesMutualAddresses
     */
    public function getMutualAddresses()
    {
        return $this->container['mutual_addresses'];
    }

    /**
     * Sets mutual_addresses
     *
     * @param \Swagger\Client\Model\RelatedCompaniesMutualAddresses $mutual_addresses mutual_addresses
     *
     * @return $this
     */
    public function setMutualAddresses($mutual_addresses)
    {
        $this->container['mutual_addresses'] = $mutual_addresses;

        return $this;
    }

    /**
     * Gets mutual_major_shareholders
     *
     * @return \Swagger\Client\Model\RelatedCompaniesMutualMajorShareholders
     */
    public function getMutualMajorShareholders()
    {
        return $this->container['mutual_major_shareholders'];
    }

    /**
     * Sets mutual_major_shareholders
     *
     * @param \Swagger\Client\Model\RelatedCompaniesMutualMajorShareholders $mutual_major_shareholders mutual_major_shareholders
     *
     * @return $this
     */
    public function setMutualMajorShareholders($mutual_major_shareholders)
    {
        $this->container['mutual_major_shareholders'] = $mutual_major_shareholders;

        return $this;
    }

    /**
     * Gets mutual_officers
     *
     * @return \Swagger\Client\Model\RelatedCompaniesMutualOfficers
     */
    public function getMutualOfficers()
    {
        return $this->container['mutual_officers'];
    }

    /**
     * Sets mutual_officers
     *
     * @param \Swagger\Client\Model\RelatedCompaniesMutualOfficers $mutual_officers mutual_officers
     *
     * @return $this
     */
    public function setMutualOfficers($mutual_officers)
    {
        $this->container['mutual_officers'] = $mutual_officers;

        return $this;
    }

    /**
     * Gets mutual_investments
     *
     * @return \Swagger\Client\Model\RelatedCompaniesMutualInvestments
     */
    public function getMutualInvestments()
    {
        return $this->container['mutual_investments'];
    }

    /**
     * Sets mutual_investments
     *
     * @param \Swagger\Client\Model\RelatedCompaniesMutualInvestments $mutual_investments mutual_investments
     *
     * @return $this
     */
    public function setMutualInvestments($mutual_investments)
    {
        $this->container['mutual_investments'] = $mutual_investments;

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


