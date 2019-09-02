<?php
/**
 * KeyCharityInformation
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
 * KeyCharityInformation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KeyCharityInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KeyCharityInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'registered_as' => '\Swagger\Client\Model\KeyCharityInformationRegisteredAs',
        'incorporation_country' => 'string',
        'is_filing_charity' => 'bool',
        'is_subsidiary_charity' => 'bool',
        'first_registered_date' => '\DateTime',
        'current_status' => '\Swagger\Client\Model\KeyCharityInformationCurrentStatus',
        'number_of_employees' => 'int',
        'number_of_volunteers' => 'int',
        'filing_parent' => 'object',
        'corporate_identity' => 'object',
        'primary_website' => 'string',
        'official_contact' => '\Swagger\Client\Model\KeyCharityInformationOfficialContact',
        'accounts' => '\Swagger\Client\Model\KeyCharityInformationAccounts',
        'financial_summary' => '\Swagger\Client\Model\KeyCharityInformationFinancialSummary'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'registered_as' => null,
        'incorporation_country' => null,
        'is_filing_charity' => null,
        'is_subsidiary_charity' => null,
        'first_registered_date' => 'date',
        'current_status' => null,
        'number_of_employees' => null,
        'number_of_volunteers' => null,
        'filing_parent' => null,
        'corporate_identity' => null,
        'primary_website' => null,
        'official_contact' => null,
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
        'registered_as' => 'registeredAs',
        'incorporation_country' => 'incorporationCountry',
        'is_filing_charity' => 'isFilingCharity',
        'is_subsidiary_charity' => 'isSubsidiaryCharity',
        'first_registered_date' => 'firstRegisteredDate',
        'current_status' => 'currentStatus',
        'number_of_employees' => 'numberOfEmployees',
        'number_of_volunteers' => 'numberOfVolunteers',
        'filing_parent' => 'filingParent',
        'corporate_identity' => 'corporateIdentity',
        'primary_website' => 'primaryWebsite',
        'official_contact' => 'officialContact',
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
        'registered_as' => 'setRegisteredAs',
        'incorporation_country' => 'setIncorporationCountry',
        'is_filing_charity' => 'setIsFilingCharity',
        'is_subsidiary_charity' => 'setIsSubsidiaryCharity',
        'first_registered_date' => 'setFirstRegisteredDate',
        'current_status' => 'setCurrentStatus',
        'number_of_employees' => 'setNumberOfEmployees',
        'number_of_volunteers' => 'setNumberOfVolunteers',
        'filing_parent' => 'setFilingParent',
        'corporate_identity' => 'setCorporateIdentity',
        'primary_website' => 'setPrimaryWebsite',
        'official_contact' => 'setOfficialContact',
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
        'registered_as' => 'getRegisteredAs',
        'incorporation_country' => 'getIncorporationCountry',
        'is_filing_charity' => 'getIsFilingCharity',
        'is_subsidiary_charity' => 'getIsSubsidiaryCharity',
        'first_registered_date' => 'getFirstRegisteredDate',
        'current_status' => 'getCurrentStatus',
        'number_of_employees' => 'getNumberOfEmployees',
        'number_of_volunteers' => 'getNumberOfVolunteers',
        'filing_parent' => 'getFilingParent',
        'corporate_identity' => 'getCorporateIdentity',
        'primary_website' => 'getPrimaryWebsite',
        'official_contact' => 'getOfficialContact',
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
        $this->container['registered_as'] = isset($data['registered_as']) ? $data['registered_as'] : null;
        $this->container['incorporation_country'] = isset($data['incorporation_country']) ? $data['incorporation_country'] : null;
        $this->container['is_filing_charity'] = isset($data['is_filing_charity']) ? $data['is_filing_charity'] : null;
        $this->container['is_subsidiary_charity'] = isset($data['is_subsidiary_charity']) ? $data['is_subsidiary_charity'] : null;
        $this->container['first_registered_date'] = isset($data['first_registered_date']) ? $data['first_registered_date'] : null;
        $this->container['current_status'] = isset($data['current_status']) ? $data['current_status'] : null;
        $this->container['number_of_employees'] = isset($data['number_of_employees']) ? $data['number_of_employees'] : null;
        $this->container['number_of_volunteers'] = isset($data['number_of_volunteers']) ? $data['number_of_volunteers'] : null;
        $this->container['filing_parent'] = isset($data['filing_parent']) ? $data['filing_parent'] : null;
        $this->container['corporate_identity'] = isset($data['corporate_identity']) ? $data['corporate_identity'] : null;
        $this->container['primary_website'] = isset($data['primary_website']) ? $data['primary_website'] : null;
        $this->container['official_contact'] = isset($data['official_contact']) ? $data['official_contact'] : null;
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
        if ($this->container['registered_as'] === null) {
            $invalidProperties[] = "'registered_as' can't be null";
        }
        if ($this->container['is_filing_charity'] === null) {
            $invalidProperties[] = "'is_filing_charity' can't be null";
        }
        if ($this->container['is_subsidiary_charity'] === null) {
            $invalidProperties[] = "'is_subsidiary_charity' can't be null";
        }
        if ($this->container['first_registered_date'] === null) {
            $invalidProperties[] = "'first_registered_date' can't be null";
        }
        if ($this->container['current_status'] === null) {
            $invalidProperties[] = "'current_status' can't be null";
        }
        if ($this->container['number_of_employees'] === null) {
            $invalidProperties[] = "'number_of_employees' can't be null";
        }
        if ($this->container['number_of_volunteers'] === null) {
            $invalidProperties[] = "'number_of_volunteers' can't be null";
        }
        if ($this->container['filing_parent'] === null) {
            $invalidProperties[] = "'filing_parent' can't be null";
        }
        if ($this->container['corporate_identity'] === null) {
            $invalidProperties[] = "'corporate_identity' can't be null";
        }
        if ($this->container['official_contact'] === null) {
            $invalidProperties[] = "'official_contact' can't be null";
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
     * @param string $name Registered charity name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets registered_as
     *
     * @return \Swagger\Client\Model\KeyCharityInformationRegisteredAs
     */
    public function getRegisteredAs()
    {
        return $this->container['registered_as'];
    }

    /**
     * Sets registered_as
     *
     * @param \Swagger\Client\Model\KeyCharityInformationRegisteredAs $registered_as registered_as
     *
     * @return $this
     */
    public function setRegisteredAs($registered_as)
    {
        $this->container['registered_as'] = $registered_as;

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
     * Gets is_filing_charity
     *
     * @return bool
     */
    public function getIsFilingCharity()
    {
        return $this->container['is_filing_charity'];
    }

    /**
     * Sets is_filing_charity
     *
     * @param bool $is_filing_charity is_filing_charity
     *
     * @return $this
     */
    public function setIsFilingCharity($is_filing_charity)
    {
        $this->container['is_filing_charity'] = $is_filing_charity;

        return $this;
    }

    /**
     * Gets is_subsidiary_charity
     *
     * @return bool
     */
    public function getIsSubsidiaryCharity()
    {
        return $this->container['is_subsidiary_charity'];
    }

    /**
     * Sets is_subsidiary_charity
     *
     * @param bool $is_subsidiary_charity is_subsidiary_charity
     *
     * @return $this
     */
    public function setIsSubsidiaryCharity($is_subsidiary_charity)
    {
        $this->container['is_subsidiary_charity'] = $is_subsidiary_charity;

        return $this;
    }

    /**
     * Gets first_registered_date
     *
     * @return \DateTime
     */
    public function getFirstRegisteredDate()
    {
        return $this->container['first_registered_date'];
    }

    /**
     * Sets first_registered_date
     *
     * @param \DateTime $first_registered_date First registration date in ISO 8601 date format (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setFirstRegisteredDate($first_registered_date)
    {
        $this->container['first_registered_date'] = $first_registered_date;

        return $this;
    }

    /**
     * Gets current_status
     *
     * @return \Swagger\Client\Model\KeyCharityInformationCurrentStatus
     */
    public function getCurrentStatus()
    {
        return $this->container['current_status'];
    }

    /**
     * Sets current_status
     *
     * @param \Swagger\Client\Model\KeyCharityInformationCurrentStatus $current_status current_status
     *
     * @return $this
     */
    public function setCurrentStatus($current_status)
    {
        $this->container['current_status'] = $current_status;

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
     * Gets number_of_volunteers
     *
     * @return int
     */
    public function getNumberOfVolunteers()
    {
        return $this->container['number_of_volunteers'];
    }

    /**
     * Sets number_of_volunteers
     *
     * @param int $number_of_volunteers number_of_volunteers
     *
     * @return $this
     */
    public function setNumberOfVolunteers($number_of_volunteers)
    {
        $this->container['number_of_volunteers'] = $number_of_volunteers;

        return $this;
    }

    /**
     * Gets filing_parent
     *
     * @return object
     */
    public function getFilingParent()
    {
        return $this->container['filing_parent'];
    }

    /**
     * Sets filing_parent
     *
     * @param object $filing_parent filing_parent
     *
     * @return $this
     */
    public function setFilingParent($filing_parent)
    {
        $this->container['filing_parent'] = $filing_parent;

        return $this;
    }

    /**
     * Gets corporate_identity
     *
     * @return object
     */
    public function getCorporateIdentity()
    {
        return $this->container['corporate_identity'];
    }

    /**
     * Sets corporate_identity
     *
     * @param object $corporate_identity corporate_identity
     *
     * @return $this
     */
    public function setCorporateIdentity($corporate_identity)
    {
        $this->container['corporate_identity'] = $corporate_identity;

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
     * Gets official_contact
     *
     * @return \Swagger\Client\Model\KeyCharityInformationOfficialContact
     */
    public function getOfficialContact()
    {
        return $this->container['official_contact'];
    }

    /**
     * Sets official_contact
     *
     * @param \Swagger\Client\Model\KeyCharityInformationOfficialContact $official_contact official_contact
     *
     * @return $this
     */
    public function setOfficialContact($official_contact)
    {
        $this->container['official_contact'] = $official_contact;

        return $this;
    }

    /**
     * Gets accounts
     *
     * @return \Swagger\Client\Model\KeyCharityInformationAccounts
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     *
     * @param \Swagger\Client\Model\KeyCharityInformationAccounts $accounts accounts
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
     * @return \Swagger\Client\Model\KeyCharityInformationFinancialSummary
     */
    public function getFinancialSummary()
    {
        return $this->container['financial_summary'];
    }

    /**
     * Sets financial_summary
     *
     * @param \Swagger\Client\Model\KeyCharityInformationFinancialSummary $financial_summary financial_summary
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


