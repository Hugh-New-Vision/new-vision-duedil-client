<?php
/**
 * KeyCompanyInformation
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
 * KeyCompanyInformation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KeyCompanyInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KeyCompanyInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'legal_entity_identifier' => '\Swagger\Client\Model\KeyCompanyInformationLegalEntityIdentifier',
        'type' => 'string',
        'incorporation_country' => 'string',
        'incorporation_date' => '\DateTime',
        'official_status' => 'string',
        'simplified_status' => 'string',
        'number_of_employees' => 'int',
        'primary_website' => 'string',
        'registered_address' => '\Swagger\Client\Model\KeyCompanyInformationRegisteredAddress',
        'charitable_identities_count' => 'float',
        'accounts' => '\Swagger\Client\Model\KeyCompanyInformationAccounts',
        'financial_summary' => '\Swagger\Client\Model\KeyCompanyInformationFinancialSummary'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'legal_entity_identifier' => null,
        'type' => null,
        'incorporation_country' => null,
        'incorporation_date' => 'date',
        'official_status' => null,
        'simplified_status' => null,
        'number_of_employees' => null,
        'primary_website' => null,
        'registered_address' => null,
        'charitable_identities_count' => 'int32',
        'accounts' => null,
        'financial_summary' => null
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
        'legal_entity_identifier' => 'legalEntityIdentifier',
        'type' => 'type',
        'incorporation_country' => 'incorporationCountry',
        'incorporation_date' => 'incorporationDate',
        'official_status' => 'officialStatus',
        'simplified_status' => 'simplifiedStatus',
        'number_of_employees' => 'numberOfEmployees',
        'primary_website' => 'primaryWebsite',
        'registered_address' => 'registeredAddress',
        'charitable_identities_count' => 'charitableIdentitiesCount',
        'accounts' => 'accounts',
        'financial_summary' => 'financialSummary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'legal_entity_identifier' => 'setLegalEntityIdentifier',
        'type' => 'setType',
        'incorporation_country' => 'setIncorporationCountry',
        'incorporation_date' => 'setIncorporationDate',
        'official_status' => 'setOfficialStatus',
        'simplified_status' => 'setSimplifiedStatus',
        'number_of_employees' => 'setNumberOfEmployees',
        'primary_website' => 'setPrimaryWebsite',
        'registered_address' => 'setRegisteredAddress',
        'charitable_identities_count' => 'setCharitableIdentitiesCount',
        'accounts' => 'setAccounts',
        'financial_summary' => 'setFinancialSummary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'legal_entity_identifier' => 'getLegalEntityIdentifier',
        'type' => 'getType',
        'incorporation_country' => 'getIncorporationCountry',
        'incorporation_date' => 'getIncorporationDate',
        'official_status' => 'getOfficialStatus',
        'simplified_status' => 'getSimplifiedStatus',
        'number_of_employees' => 'getNumberOfEmployees',
        'primary_website' => 'getPrimaryWebsite',
        'registered_address' => 'getRegisteredAddress',
        'charitable_identities_count' => 'getCharitableIdentitiesCount',
        'accounts' => 'getAccounts',
        'financial_summary' => 'getFinancialSummary'
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
        $this->container['legal_entity_identifier'] = isset($data['legal_entity_identifier']) ? $data['legal_entity_identifier'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['incorporation_country'] = isset($data['incorporation_country']) ? $data['incorporation_country'] : null;
        $this->container['incorporation_date'] = isset($data['incorporation_date']) ? $data['incorporation_date'] : null;
        $this->container['official_status'] = isset($data['official_status']) ? $data['official_status'] : null;
        $this->container['simplified_status'] = isset($data['simplified_status']) ? $data['simplified_status'] : null;
        $this->container['number_of_employees'] = isset($data['number_of_employees']) ? $data['number_of_employees'] : null;
        $this->container['primary_website'] = isset($data['primary_website']) ? $data['primary_website'] : null;
        $this->container['registered_address'] = isset($data['registered_address']) ? $data['registered_address'] : null;
        $this->container['charitable_identities_count'] = isset($data['charitable_identities_count']) ? $data['charitable_identities_count'] : null;
        $this->container['accounts'] = isset($data['accounts']) ? $data['accounts'] : null;
        $this->container['financial_summary'] = isset($data['financial_summary']) ? $data['financial_summary'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['legal_entity_identifier'] === null) {
            $invalidProperties[] = "'legal_entity_identifier' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['incorporation_country'] === null) {
            $invalidProperties[] = "'incorporation_country' can't be null";
        }
        if ($this->container['incorporation_date'] === null) {
            $invalidProperties[] = "'incorporation_date' can't be null";
        }
        if ($this->container['official_status'] === null) {
            $invalidProperties[] = "'official_status' can't be null";
        }
        if ($this->container['simplified_status'] === null) {
            $invalidProperties[] = "'simplified_status' can't be null";
        }
        if ($this->container['number_of_employees'] === null) {
            $invalidProperties[] = "'number_of_employees' can't be null";
        }
        if ($this->container['primary_website'] === null) {
            $invalidProperties[] = "'primary_website' can't be null";
        }
        if ($this->container['registered_address'] === null) {
            $invalidProperties[] = "'registered_address' can't be null";
        }
        if ($this->container['charitable_identities_count'] === null) {
            $invalidProperties[] = "'charitable_identities_count' can't be null";
        }
        if ($this->container['accounts'] === null) {
            $invalidProperties[] = "'accounts' can't be null";
        }
        if ($this->container['financial_summary'] === null) {
            $invalidProperties[] = "'financial_summary' can't be null";
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
     * Gets legal_entity_identifier
     *
     * @return \Swagger\Client\Model\KeyCompanyInformationLegalEntityIdentifier
     */
    public function getLegalEntityIdentifier()
    {
        return $this->container['legal_entity_identifier'];
    }

    /**
     * Sets legal_entity_identifier
     *
     * @param \Swagger\Client\Model\KeyCompanyInformationLegalEntityIdentifier $legal_entity_identifier legal_entity_identifier
     *
     * @return $this
     */
    public function setLegalEntityIdentifier($legal_entity_identifier)
    {
        $this->container['legal_entity_identifier'] = $legal_entity_identifier;

        return $this;
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
     * @param string $type Jurisdiction-specific company type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets incorporation_country
     *
     * @return string
     */
    public function getIncorporationCountry()
    {
        return $this->container['incorporation_country'];
    }

    /**
     * Sets incorporation_country
     *
     * @param string $incorporation_country incorporation_country
     *
     * @return $this
     */
    public function setIncorporationCountry($incorporation_country)
    {
        $this->container['incorporation_country'] = $incorporation_country;

        return $this;
    }

    /**
     * Gets incorporation_date
     *
     * @return \DateTime
     */
    public function getIncorporationDate()
    {
        return $this->container['incorporation_date'];
    }

    /**
     * Sets incorporation_date
     *
     * @param \DateTime $incorporation_date Incorporation date in ISO 8601 date format (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setIncorporationDate($incorporation_date)
    {
        $this->container['incorporation_date'] = $incorporation_date;

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
     * @param string $official_status Jurisdiction-specific company status
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
     * Gets number_of_employees
     *
     * @return int
     */
    public function getNumberOfEmployees()
    {
        return $this->container['number_of_employees'];
    }

    /**
     * Sets number_of_employees
     *
     * @param int $number_of_employees number_of_employees
     *
     * @return $this
     */
    public function setNumberOfEmployees($number_of_employees)
    {
        $this->container['number_of_employees'] = $number_of_employees;

        return $this;
    }

    /**
     * Gets primary_website
     *
     * @return string
     */
    public function getPrimaryWebsite()
    {
        return $this->container['primary_website'];
    }

    /**
     * Sets primary_website
     *
     * @param string $primary_website primary_website
     *
     * @return $this
     */
    public function setPrimaryWebsite($primary_website)
    {
        $this->container['primary_website'] = $primary_website;

        return $this;
    }

    /**
     * Gets registered_address
     *
     * @return \Swagger\Client\Model\KeyCompanyInformationRegisteredAddress
     */
    public function getRegisteredAddress()
    {
        return $this->container['registered_address'];
    }

    /**
     * Sets registered_address
     *
     * @param \Swagger\Client\Model\KeyCompanyInformationRegisteredAddress $registered_address registered_address
     *
     * @return $this
     */
    public function setRegisteredAddress($registered_address)
    {
        $this->container['registered_address'] = $registered_address;

        return $this;
    }

    /**
     * Gets charitable_identities_count
     *
     * @return float
     */
    public function getCharitableIdentitiesCount()
    {
        return $this->container['charitable_identities_count'];
    }

    /**
     * Sets charitable_identities_count
     *
     * @param float $charitable_identities_count The number of charities reporting this company as their corporate identity
     *
     * @return $this
     */
    public function setCharitableIdentitiesCount($charitable_identities_count)
    {
        $this->container['charitable_identities_count'] = $charitable_identities_count;

        return $this;
    }

    /**
     * Gets accounts
     *
     * @return \Swagger\Client\Model\KeyCompanyInformationAccounts
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     *
     * @param \Swagger\Client\Model\KeyCompanyInformationAccounts $accounts accounts
     *
     * @return $this
     */
    public function setAccounts($accounts)
    {
        $this->container['accounts'] = $accounts;

        return $this;
    }

    /**
     * Gets financial_summary
     *
     * @return \Swagger\Client\Model\KeyCompanyInformationFinancialSummary
     */
    public function getFinancialSummary()
    {
        return $this->container['financial_summary'];
    }

    /**
     * Sets financial_summary
     *
     * @param \Swagger\Client\Model\KeyCompanyInformationFinancialSummary $financial_summary financial_summary
     *
     * @return $this
     */
    public function setFinancialSummary($financial_summary)
    {
        $this->container['financial_summary'] = $financial_summary;

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


