<?php
/**
 * PEPsAndSanctionsIndividualLookupResponse
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
 * PEPsAndSanctionsIndividualLookupResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PEPsAndSanctionsIndividualLookupResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PEPsAndSanctionsIndividualLookupResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lookup_id' => 'string',
        'honorific' => 'string',
        'alternative_honorific' => 'string',
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'nationalities' => '\Swagger\Client\Model\PEPsAndSanctionsNationality[]',
        'gender' => 'string',
        'image_url' => 'string',
        'pep_level' => 'int',
        'date_of_birth' => '\Swagger\Client\Model\PEPsAndSanctionsDate',
        'is_deceased' => 'bool',
        'date_of_death' => '\Swagger\Client\Model\PEPsAndSanctionsDate',
        'aliases' => '\Swagger\Client\Model\PEPsAndSanctionsIndividualAliases[]',
        'telephone' => 'string',
        'fax' => 'string',
        'mobile' => 'string',
        'email' => 'string',
        'addresses' => '\Swagger\Client\Model\PEPsAndSanctionsAddress[]',
        'global_datasets' => '\Swagger\Client\Model\PEPsAndSanctionsDatasetSummary',
        'documents' => '\Swagger\Client\Model\PEPsAndSanctionsDocument[]',
        'sanctions' => '\Swagger\Client\Model\PEPsAndSanctionsSanction[]',
        'notes' => '\Swagger\Client\Model\PEPsAndSanctionsNote[]',
        'linked_businesses' => '\Swagger\Client\Model\PEPsAndSanctionsBusinessLinkedToIndividual[]',
        'linked_individuals' => '\Swagger\Client\Model\PEPsAndSanctionsIndividualLinkedToIndividual[]',
        'political_positions' => '\Swagger\Client\Model\PEPsAndSanctionsPoliticalPosition[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lookup_id' => null,
        'honorific' => null,
        'alternative_honorific' => null,
        'first_name' => null,
        'middle_name' => null,
        'last_name' => null,
        'nationalities' => null,
        'gender' => null,
        'image_url' => null,
        'pep_level' => null,
        'date_of_birth' => null,
        'is_deceased' => null,
        'date_of_death' => null,
        'aliases' => null,
        'telephone' => null,
        'fax' => null,
        'mobile' => null,
        'email' => null,
        'addresses' => null,
        'global_datasets' => null,
        'documents' => null,
        'sanctions' => null,
        'notes' => null,
        'linked_businesses' => null,
        'linked_individuals' => null,
        'political_positions' => null
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
        'lookup_id' => 'lookupId',
        'honorific' => 'honorific',
        'alternative_honorific' => 'alternativeHonorific',
        'first_name' => 'firstName',
        'middle_name' => 'middleName',
        'last_name' => 'lastName',
        'nationalities' => 'nationalities',
        'gender' => 'gender',
        'image_url' => 'imageUrl',
        'pep_level' => 'pepLevel',
        'date_of_birth' => 'dateOfBirth',
        'is_deceased' => 'isDeceased',
        'date_of_death' => 'dateOfDeath',
        'aliases' => 'aliases',
        'telephone' => 'telephone',
        'fax' => 'fax',
        'mobile' => 'mobile',
        'email' => 'email',
        'addresses' => 'addresses',
        'global_datasets' => 'globalDatasets',
        'documents' => 'documents',
        'sanctions' => 'sanctions',
        'notes' => 'notes',
        'linked_businesses' => 'linkedBusinesses',
        'linked_individuals' => 'linkedIndividuals',
        'political_positions' => 'politicalPositions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lookup_id' => 'setLookupId',
        'honorific' => 'setHonorific',
        'alternative_honorific' => 'setAlternativeHonorific',
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'nationalities' => 'setNationalities',
        'gender' => 'setGender',
        'image_url' => 'setImageUrl',
        'pep_level' => 'setPepLevel',
        'date_of_birth' => 'setDateOfBirth',
        'is_deceased' => 'setIsDeceased',
        'date_of_death' => 'setDateOfDeath',
        'aliases' => 'setAliases',
        'telephone' => 'setTelephone',
        'fax' => 'setFax',
        'mobile' => 'setMobile',
        'email' => 'setEmail',
        'addresses' => 'setAddresses',
        'global_datasets' => 'setGlobalDatasets',
        'documents' => 'setDocuments',
        'sanctions' => 'setSanctions',
        'notes' => 'setNotes',
        'linked_businesses' => 'setLinkedBusinesses',
        'linked_individuals' => 'setLinkedIndividuals',
        'political_positions' => 'setPoliticalPositions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lookup_id' => 'getLookupId',
        'honorific' => 'getHonorific',
        'alternative_honorific' => 'getAlternativeHonorific',
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'nationalities' => 'getNationalities',
        'gender' => 'getGender',
        'image_url' => 'getImageUrl',
        'pep_level' => 'getPepLevel',
        'date_of_birth' => 'getDateOfBirth',
        'is_deceased' => 'getIsDeceased',
        'date_of_death' => 'getDateOfDeath',
        'aliases' => 'getAliases',
        'telephone' => 'getTelephone',
        'fax' => 'getFax',
        'mobile' => 'getMobile',
        'email' => 'getEmail',
        'addresses' => 'getAddresses',
        'global_datasets' => 'getGlobalDatasets',
        'documents' => 'getDocuments',
        'sanctions' => 'getSanctions',
        'notes' => 'getNotes',
        'linked_businesses' => 'getLinkedBusinesses',
        'linked_individuals' => 'getLinkedIndividuals',
        'political_positions' => 'getPoliticalPositions'
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
        $this->container['lookup_id'] = isset($data['lookup_id']) ? $data['lookup_id'] : null;
        $this->container['honorific'] = isset($data['honorific']) ? $data['honorific'] : null;
        $this->container['alternative_honorific'] = isset($data['alternative_honorific']) ? $data['alternative_honorific'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['nationalities'] = isset($data['nationalities']) ? $data['nationalities'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['pep_level'] = isset($data['pep_level']) ? $data['pep_level'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['is_deceased'] = isset($data['is_deceased']) ? $data['is_deceased'] : null;
        $this->container['date_of_death'] = isset($data['date_of_death']) ? $data['date_of_death'] : null;
        $this->container['aliases'] = isset($data['aliases']) ? $data['aliases'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['global_datasets'] = isset($data['global_datasets']) ? $data['global_datasets'] : null;
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
        $this->container['sanctions'] = isset($data['sanctions']) ? $data['sanctions'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['linked_businesses'] = isset($data['linked_businesses']) ? $data['linked_businesses'] : null;
        $this->container['linked_individuals'] = isset($data['linked_individuals']) ? $data['linked_individuals'] : null;
        $this->container['political_positions'] = isset($data['political_positions']) ? $data['political_positions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lookup_id'] === null) {
            $invalidProperties[] = "'lookup_id' can't be null";
        }
        if ($this->container['honorific'] === null) {
            $invalidProperties[] = "'honorific' can't be null";
        }
        if ($this->container['alternative_honorific'] === null) {
            $invalidProperties[] = "'alternative_honorific' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['middle_name'] === null) {
            $invalidProperties[] = "'middle_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['nationalities'] === null) {
            $invalidProperties[] = "'nationalities' can't be null";
        }
        if ($this->container['gender'] === null) {
            $invalidProperties[] = "'gender' can't be null";
        }
        if ($this->container['image_url'] === null) {
            $invalidProperties[] = "'image_url' can't be null";
        }
        if ($this->container['pep_level'] === null) {
            $invalidProperties[] = "'pep_level' can't be null";
        }
        if ($this->container['date_of_birth'] === null) {
            $invalidProperties[] = "'date_of_birth' can't be null";
        }
        if ($this->container['is_deceased'] === null) {
            $invalidProperties[] = "'is_deceased' can't be null";
        }
        if ($this->container['date_of_death'] === null) {
            $invalidProperties[] = "'date_of_death' can't be null";
        }
        if ($this->container['aliases'] === null) {
            $invalidProperties[] = "'aliases' can't be null";
        }
        if ($this->container['telephone'] === null) {
            $invalidProperties[] = "'telephone' can't be null";
        }
        if ($this->container['fax'] === null) {
            $invalidProperties[] = "'fax' can't be null";
        }
        if ($this->container['mobile'] === null) {
            $invalidProperties[] = "'mobile' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['addresses'] === null) {
            $invalidProperties[] = "'addresses' can't be null";
        }
        if ($this->container['global_datasets'] === null) {
            $invalidProperties[] = "'global_datasets' can't be null";
        }
        if ($this->container['documents'] === null) {
            $invalidProperties[] = "'documents' can't be null";
        }
        if ($this->container['sanctions'] === null) {
            $invalidProperties[] = "'sanctions' can't be null";
        }
        if ($this->container['notes'] === null) {
            $invalidProperties[] = "'notes' can't be null";
        }
        if ($this->container['linked_businesses'] === null) {
            $invalidProperties[] = "'linked_businesses' can't be null";
        }
        if ($this->container['linked_individuals'] === null) {
            $invalidProperties[] = "'linked_individuals' can't be null";
        }
        if ($this->container['political_positions'] === null) {
            $invalidProperties[] = "'political_positions' can't be null";
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
     * Gets lookup_id
     *
     * @return string
     */
    public function getLookupId()
    {
        return $this->container['lookup_id'];
    }

    /**
     * Sets lookup_id
     *
     * @param string $lookup_id lookup_id
     *
     * @return $this
     */
    public function setLookupId($lookup_id)
    {
        $this->container['lookup_id'] = $lookup_id;

        return $this;
    }

    /**
     * Gets honorific
     *
     * @return string
     */
    public function getHonorific()
    {
        return $this->container['honorific'];
    }

    /**
     * Sets honorific
     *
     * @param string $honorific honorific
     *
     * @return $this
     */
    public function setHonorific($honorific)
    {
        $this->container['honorific'] = $honorific;

        return $this;
    }

    /**
     * Gets alternative_honorific
     *
     * @return string
     */
    public function getAlternativeHonorific()
    {
        return $this->container['alternative_honorific'];
    }

    /**
     * Sets alternative_honorific
     *
     * @param string $alternative_honorific alternative_honorific
     *
     * @return $this
     */
    public function setAlternativeHonorific($alternative_honorific)
    {
        $this->container['alternative_honorific'] = $alternative_honorific;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string $middle_name middle_name
     *
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets nationalities
     *
     * @return \Swagger\Client\Model\PEPsAndSanctionsNationality[]
     */
    public function getNationalities()
    {
        return $this->container['nationalities'];
    }

    /**
     * Sets nationalities
     *
     * @param \Swagger\Client\Model\PEPsAndSanctionsNationality[] $nationalities nationalities
     *
     * @return $this
     */
    public function setNationalities($nationalities)
    {
        $this->container['nationalities'] = $nationalities;

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
     * @param string $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url image_url
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets pep_level
     *
     * @return int
     */
    public function getPepLevel()
    {
        return $this->container['pep_level'];
    }

    /**
     * Sets pep_level
     *
     * @param int $pep_level pep_level
     *
     * @return $this
     */
    public function setPepLevel($pep_level)
    {
        $this->container['pep_level'] = $pep_level;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \Swagger\Client\Model\PEPsAndSanctionsDate
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \Swagger\Client\Model\PEPsAndSanctionsDate $date_of_birth date_of_birth
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets is_deceased
     *
     * @return bool
     */
    public function getIsDeceased()
    {
        return $this->container['is_deceased'];
    }

    /**
     * Sets is_deceased
     *
     * @param bool $is_deceased is_deceased
     *
     * @return $this
     */
    public function setIsDeceased($is_deceased)
    {
        $this->container['is_deceased'] = $is_deceased;

        return $this;
    }

    /**
     * Gets date_of_death
     *
     * @return \Swagger\Client\Model\PEPsAndSanctionsDate
     */
    public function getDateOfDeath()
    {
        return $this->container['date_of_death'];
    }

    /**
     * Sets date_of_death
     *
     * @param \Swagger\Client\Model\PEPsAndSanctionsDate $date_of_death date_of_death
     *
     * @return $this
     */
    public function setDateOfDeath($date_of_death)
    {
        $this->container['date_of_death'] = $date_of_death;

        return $this;
    }

    /**
     * Gets aliases
     *
     * @return \Swagger\Client\Model\PEPsAndSanctionsIndividualAliases[]
     */
    public function getAliases()
    {
        return $this->container['aliases'];
    }

    /**
     * Sets aliases
     *
     * @param \Swagger\Client\Model\PEPsAndSanctionsIndividualAliases[] $aliases aliases
     *
     * @return $this
     */
    public function setAliases($aliases)
    {
        $this->container['aliases'] = $aliases;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string $telephone telephone
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string $fax fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string $mobile mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \Swagger\Client\Model\PEPsAndSanctionsAddress[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Swagger\Client\Model\PEPsAndSanctionsAddress[] $addresses addresses
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets global_datasets
     *
     * @return \Swagger\Client\Model\PEPsAndSanctionsDatasetSummary
     */
    public function getGlobalDatasets()
    {
        return $this->container['global_datasets'];
    }

    /**
     * Sets global_datasets
     *
     * @param \Swagger\Client\Model\PEPsAndSanctionsDatasetSummary $global_datasets global_datasets
     *
     * @return $this
     */
    public function setGlobalDatasets($global_datasets)
    {
        $this->container['global_datasets'] = $global_datasets;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \Swagger\Client\Model\PEPsAndSanctionsDocument[]
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \Swagger\Client\Model\PEPsAndSanctionsDocument[] $documents documents
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets sanctions
     *
     * @return \Swagger\Client\Model\PEPsAndSanctionsSanction[]
     */
    public function getSanctions()
    {
        return $this->container['sanctions'];
    }

    /**
     * Sets sanctions
     *
     * @param \Swagger\Client\Model\PEPsAndSanctionsSanction[] $sanctions sanctions
     *
     * @return $this
     */
    public function setSanctions($sanctions)
    {
        $this->container['sanctions'] = $sanctions;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \Swagger\Client\Model\PEPsAndSanctionsNote[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \Swagger\Client\Model\PEPsAndSanctionsNote[] $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets linked_businesses
     *
     * @return \Swagger\Client\Model\PEPsAndSanctionsBusinessLinkedToIndividual[]
     */
    public function getLinkedBusinesses()
    {
        return $this->container['linked_businesses'];
    }

    /**
     * Sets linked_businesses
     *
     * @param \Swagger\Client\Model\PEPsAndSanctionsBusinessLinkedToIndividual[] $linked_businesses linked_businesses
     *
     * @return $this
     */
    public function setLinkedBusinesses($linked_businesses)
    {
        $this->container['linked_businesses'] = $linked_businesses;

        return $this;
    }

    /**
     * Gets linked_individuals
     *
     * @return \Swagger\Client\Model\PEPsAndSanctionsIndividualLinkedToIndividual[]
     */
    public function getLinkedIndividuals()
    {
        return $this->container['linked_individuals'];
    }

    /**
     * Sets linked_individuals
     *
     * @param \Swagger\Client\Model\PEPsAndSanctionsIndividualLinkedToIndividual[] $linked_individuals linked_individuals
     *
     * @return $this
     */
    public function setLinkedIndividuals($linked_individuals)
    {
        $this->container['linked_individuals'] = $linked_individuals;

        return $this;
    }

    /**
     * Gets political_positions
     *
     * @return \Swagger\Client\Model\PEPsAndSanctionsPoliticalPosition[]
     */
    public function getPoliticalPositions()
    {
        return $this->container['political_positions'];
    }

    /**
     * Sets political_positions
     *
     * @param \Swagger\Client\Model\PEPsAndSanctionsPoliticalPosition[] $political_positions political_positions
     *
     * @return $this
     */
    public function setPoliticalPositions($political_positions)
    {
        $this->container['political_positions'] = $political_positions;

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


