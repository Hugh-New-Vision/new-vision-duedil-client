<?php
/**
 * CallcreditIdentityCheckResponseWarnings
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
 * CallcreditIdentityCheckResponseWarnings Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallcreditIdentityCheckResponseWarnings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallcreditIdentityCheckResponse_warnings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'forward_address_links' => 'bool',
        'deceased' => 'bool',
        'gone_away' => 'bool',
        'length_of_residence' => 'bool',
        'pep' => 'bool',
        'sanction' => 'bool',
        'sdn' => 'bool',
        'share_length_of_residency' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'forward_address_links' => null,
        'deceased' => null,
        'gone_away' => null,
        'length_of_residence' => null,
        'pep' => null,
        'sanction' => null,
        'sdn' => null,
        'share_length_of_residency' => null
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
        'forward_address_links' => 'forwardAddressLinks',
        'deceased' => 'deceased',
        'gone_away' => 'goneAway',
        'length_of_residence' => 'lengthOfResidence',
        'pep' => 'pep',
        'sanction' => 'sanction',
        'sdn' => 'sdn',
        'share_length_of_residency' => 'shareLengthOfResidency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'forward_address_links' => 'setForwardAddressLinks',
        'deceased' => 'setDeceased',
        'gone_away' => 'setGoneAway',
        'length_of_residence' => 'setLengthOfResidence',
        'pep' => 'setPep',
        'sanction' => 'setSanction',
        'sdn' => 'setSdn',
        'share_length_of_residency' => 'setShareLengthOfResidency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'forward_address_links' => 'getForwardAddressLinks',
        'deceased' => 'getDeceased',
        'gone_away' => 'getGoneAway',
        'length_of_residence' => 'getLengthOfResidence',
        'pep' => 'getPep',
        'sanction' => 'getSanction',
        'sdn' => 'getSdn',
        'share_length_of_residency' => 'getShareLengthOfResidency'
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
        $this->container['forward_address_links'] = isset($data['forward_address_links']) ? $data['forward_address_links'] : null;
        $this->container['deceased'] = isset($data['deceased']) ? $data['deceased'] : null;
        $this->container['gone_away'] = isset($data['gone_away']) ? $data['gone_away'] : null;
        $this->container['length_of_residence'] = isset($data['length_of_residence']) ? $data['length_of_residence'] : null;
        $this->container['pep'] = isset($data['pep']) ? $data['pep'] : null;
        $this->container['sanction'] = isset($data['sanction']) ? $data['sanction'] : null;
        $this->container['sdn'] = isset($data['sdn']) ? $data['sdn'] : null;
        $this->container['share_length_of_residency'] = isset($data['share_length_of_residency']) ? $data['share_length_of_residency'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['forward_address_links'] === null) {
            $invalidProperties[] = "'forward_address_links' can't be null";
        }
        if ($this->container['deceased'] === null) {
            $invalidProperties[] = "'deceased' can't be null";
        }
        if ($this->container['gone_away'] === null) {
            $invalidProperties[] = "'gone_away' can't be null";
        }
        if ($this->container['length_of_residence'] === null) {
            $invalidProperties[] = "'length_of_residence' can't be null";
        }
        if ($this->container['pep'] === null) {
            $invalidProperties[] = "'pep' can't be null";
        }
        if ($this->container['sanction'] === null) {
            $invalidProperties[] = "'sanction' can't be null";
        }
        if ($this->container['sdn'] === null) {
            $invalidProperties[] = "'sdn' can't be null";
        }
        if ($this->container['share_length_of_residency'] === null) {
            $invalidProperties[] = "'share_length_of_residency' can't be null";
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
     * Gets forward_address_links
     *
     * @return bool
     */
    public function getForwardAddressLinks()
    {
        return $this->container['forward_address_links'];
    }

    /**
     * Sets forward_address_links
     *
     * @param bool $forward_address_links Whether or not forward address links have been found
     *
     * @return $this
     */
    public function setForwardAddressLinks($forward_address_links)
    {
        $this->container['forward_address_links'] = $forward_address_links;

        return $this;
    }

    /**
     * Gets deceased
     *
     * @return bool
     */
    public function getDeceased()
    {
        return $this->container['deceased'];
    }

    /**
     * Sets deceased
     *
     * @param bool $deceased Whether or not the individual matches to deceased data
     *
     * @return $this
     */
    public function setDeceased($deceased)
    {
        $this->container['deceased'] = $deceased;

        return $this;
    }

    /**
     * Gets gone_away
     *
     * @return bool
     */
    public function getGoneAway()
    {
        return $this->container['gone_away'];
    }

    /**
     * Sets gone_away
     *
     * @param bool $gone_away Whether or not the individual is found on the Gone Away Suppression (GAS) from the REaD Group, which tracks relocations in the UK
     *
     * @return $this
     */
    public function setGoneAway($gone_away)
    {
        $this->container['gone_away'] = $gone_away;

        return $this;
    }

    /**
     * Gets length_of_residence
     *
     * @return bool
     */
    public function getLengthOfResidence()
    {
        return $this->container['length_of_residence'];
    }

    /**
     * Sets length_of_residence
     *
     * @param bool $length_of_residence Whether or not the individual's electoral roll registration is less than 12 months old
     *
     * @return $this
     */
    public function setLengthOfResidence($length_of_residence)
    {
        $this->container['length_of_residence'] = $length_of_residence;

        return $this;
    }

    /**
     * Gets pep
     *
     * @return bool
     */
    public function getPep()
    {
        return $this->container['pep'];
    }

    /**
     * Sets pep
     *
     * @param bool $pep Whether or not the name matches to the Politically Exposed People database. Null if watchlistScreening module enabled.
     *
     * @return $this
     */
    public function setPep($pep)
    {
        $this->container['pep'] = $pep;

        return $this;
    }

    /**
     * Gets sanction
     *
     * @return bool
     */
    public function getSanction()
    {
        return $this->container['sanction'];
    }

    /**
     * Sets sanction
     *
     * @param bool $sanction Whether or not the name matches to the HM Treasury financial sanctions database. Null if watchlistScreening module enabled.
     *
     * @return $this
     */
    public function setSanction($sanction)
    {
        $this->container['sanction'] = $sanction;

        return $this;
    }

    /**
     * Gets sdn
     *
     * @return bool
     */
    public function getSdn()
    {
        return $this->container['sdn'];
    }

    /**
     * Sets sdn
     *
     * @param bool $sdn Whether or not the name matches to the OFAC Specially Designated Nationals database
     *
     * @return $this
     */
    public function setSdn($sdn)
    {
        $this->container['sdn'] = $sdn;

        return $this;
    }

    /**
     * Gets share_length_of_residency
     *
     * @return bool
     */
    public function getShareLengthOfResidency()
    {
        return $this->container['share_length_of_residency'];
    }

    /**
     * Sets share_length_of_residency
     *
     * @param bool $share_length_of_residency Whether or not any of the applicant's Callcredit's SHARE records have been opened within the last 12 months
     *
     * @return $this
     */
    public function setShareLengthOfResidency($share_length_of_residency)
    {
        $this->container['share_length_of_residency'] = $share_length_of_residency;

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


