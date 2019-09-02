<?php
/**
 * CallcreditIndividualDetailsInputIndividualDetails
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
 * CallcreditIndividualDetailsInputIndividualDetails Class Doc Comment
 *
 * @category Class
 * @description Mandatory fields are title, firstName, surname; dateOfBirth is also required to obtain date of birth confirmation.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallcreditIndividualDetailsInputIndividualDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallcreditIndividualDetailsInput_individualDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_of_birth' => '\DateTime',
        'title' => 'string',
        'first_name' => 'string',
        'other_names' => 'string',
        'surname' => 'string',
        'email_address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_of_birth' => 'date',
        'title' => null,
        'first_name' => null,
        'other_names' => null,
        'surname' => null,
        'email_address' => null
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
        'date_of_birth' => 'dateOfBirth',
        'title' => 'title',
        'first_name' => 'firstName',
        'other_names' => 'otherNames',
        'surname' => 'surname',
        'email_address' => 'emailAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_of_birth' => 'setDateOfBirth',
        'title' => 'setTitle',
        'first_name' => 'setFirstName',
        'other_names' => 'setOtherNames',
        'surname' => 'setSurname',
        'email_address' => 'setEmailAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_of_birth' => 'getDateOfBirth',
        'title' => 'getTitle',
        'first_name' => 'getFirstName',
        'other_names' => 'getOtherNames',
        'surname' => 'getSurname',
        'email_address' => 'getEmailAddress'
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
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['other_names'] = isset($data['other_names']) ? $data['other_names'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) > 30)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['title']) < 2)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ((mb_strlen($this->container['first_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['first_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['other_names']) && (mb_strlen($this->container['other_names']) > 30)) {
            $invalidProperties[] = "invalid value for 'other_names', the character length must be smaller than or equal to 30.";
        }

        if ($this->container['surname'] === null) {
            $invalidProperties[] = "'surname' can't be null";
        }
        if ((mb_strlen($this->container['surname']) > 30)) {
            $invalidProperties[] = "invalid value for 'surname', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['surname']) < 2)) {
            $invalidProperties[] = "invalid value for 'surname', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) > 250)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) < 4)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be bigger than or equal to 4.";
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
     * Gets date_of_birth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime $date_of_birth YYYY-mm-dd
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

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
     * @param string $title The individual’s title. A minimum of 2 characters must be entered.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        if ((mb_strlen($title) > 30)) {
            throw new \InvalidArgumentException('invalid length for $title when calling CallcreditIndividualDetailsInputIndividualDetails., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($title) < 2)) {
            throw new \InvalidArgumentException('invalid length for $title when calling CallcreditIndividualDetailsInputIndividualDetails., must be bigger than or equal to 2.');
        }

        $this->container['title'] = $title;

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
     * @param string $first_name The individual’s forename. A minimum of 1 character must be entered.
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        if ((mb_strlen($first_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling CallcreditIndividualDetailsInputIndividualDetails., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($first_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling CallcreditIndividualDetailsInputIndividualDetails., must be bigger than or equal to 1.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets other_names
     *
     * @return string
     */
    public function getOtherNames()
    {
        return $this->container['other_names'];
    }

    /**
     * Sets other_names
     *
     * @param string $other_names The individuals other (middle) name.
     *
     * @return $this
     */
    public function setOtherNames($other_names)
    {
        if (!is_null($other_names) && (mb_strlen($other_names) > 30)) {
            throw new \InvalidArgumentException('invalid length for $other_names when calling CallcreditIndividualDetailsInputIndividualDetails., must be smaller than or equal to 30.');
        }

        $this->container['other_names'] = $other_names;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string $surname The individuals surname. A minimum of 2 characters must be entered.
     *
     * @return $this
     */
    public function setSurname($surname)
    {
        if ((mb_strlen($surname) > 30)) {
            throw new \InvalidArgumentException('invalid length for $surname when calling CallcreditIndividualDetailsInputIndividualDetails., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($surname) < 2)) {
            throw new \InvalidArgumentException('invalid length for $surname when calling CallcreditIndividualDetailsInputIndividualDetails., must be bigger than or equal to 2.');
        }

        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address The email address of the individual. This field is required for \"Email Risk\" extra cheacks. If it is not provided or `NULL` the `extraChecks` will have a warning specifying the exact reason and empty `emailRisk` report.
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        if (!is_null($email_address) && (mb_strlen($email_address) > 250)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling CallcreditIndividualDetailsInputIndividualDetails., must be smaller than or equal to 250.');
        }
        if (!is_null($email_address) && (mb_strlen($email_address) < 4)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling CallcreditIndividualDetailsInputIndividualDetails., must be bigger than or equal to 4.');
        }

        $this->container['email_address'] = $email_address;

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


