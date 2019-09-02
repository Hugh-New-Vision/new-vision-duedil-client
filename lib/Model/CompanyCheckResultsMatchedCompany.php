<?php
/**
 * CompanyCheckResultsMatchedCompany
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
 * CompanyCheckResultsMatchedCompany Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyCheckResultsMatchedCompany implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanyCheckResults_matchedCompany';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country_code' => 'string',
        'company_id' => 'string',
        'name' => 'string',
        'legal_entity_identifier' => '\Swagger\Client\Model\KeyCompanyInformationLegalEntityIdentifier',
        'type' => 'string',
        'incorporation_country' => 'string',
        'incorporation_date' => 'string',
        'official_status' => 'string',
        'simplified_status' => 'string',
        'number_of_employees' => 'int',
        'primary_website' => 'string',
        'registered_address' => '\Swagger\Client\Model\KeyCompanyInformationRegisteredAddress',
        'industries' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompanyIndustries[]',
        'accounts' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompanyAccounts',
        'financial_summary' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompanyFinancialSummary[]',
        'annual_returns' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompanyAnnualReturns',
        'officers' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompanyOfficers[]',
        'officer_disqualifications' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompanyOfficerDisqualifications',
        'total_company_shares' => 'int',
        'number_of_shareholders' => 'int',
        'shareholders_greater_or_equal_ten_percent' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompanyShareholdersGreaterOrEqualTenPercent[]',
        'immediate_parents' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompanyImmediateParents[]',
        'ultimate_parents' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompanyUltimateParents[]',
        'persons_of_significant_control' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompanyPersonsOfSignificantControl[]',
        'psc_statements' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompanyPscStatements[]',
        'portfolio_companies_count' => 'int',
        'related_companies_count' => 'int',
        'charges_count' => 'int',
        'bank_accounts_count' => 'int',
        'gazette_notices_count' => 'int',
        'is_fca_authorised' => 'bool',
        'document_filing_counts' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompanyDocumentFilingCounts',
        'peps_sanctions_check' => '\Swagger\Client\Model\CompanyCheckResultsMatchedCompanyPepsSanctionsCheck'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country_code' => null,
        'company_id' => null,
        'name' => null,
        'legal_entity_identifier' => null,
        'type' => null,
        'incorporation_country' => null,
        'incorporation_date' => null,
        'official_status' => null,
        'simplified_status' => null,
        'number_of_employees' => null,
        'primary_website' => null,
        'registered_address' => null,
        'industries' => null,
        'accounts' => null,
        'financial_summary' => null,
        'annual_returns' => null,
        'officers' => null,
        'officer_disqualifications' => null,
        'total_company_shares' => 'int64',
        'number_of_shareholders' => null,
        'shareholders_greater_or_equal_ten_percent' => null,
        'immediate_parents' => null,
        'ultimate_parents' => null,
        'persons_of_significant_control' => null,
        'psc_statements' => null,
        'portfolio_companies_count' => null,
        'related_companies_count' => null,
        'charges_count' => null,
        'bank_accounts_count' => null,
        'gazette_notices_count' => null,
        'is_fca_authorised' => null,
        'document_filing_counts' => null,
        'peps_sanctions_check' => null
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
        'industries' => 'industries',
        'accounts' => 'accounts',
        'financial_summary' => 'financialSummary',
        'annual_returns' => 'annualReturns',
        'officers' => 'officers',
        'officer_disqualifications' => 'officerDisqualifications',
        'total_company_shares' => 'totalCompanyShares',
        'number_of_shareholders' => 'numberOfShareholders',
        'shareholders_greater_or_equal_ten_percent' => 'shareholdersGreaterOrEqualTenPercent',
        'immediate_parents' => 'immediateParents',
        'ultimate_parents' => 'ultimateParents',
        'persons_of_significant_control' => 'personsOfSignificantControl',
        'psc_statements' => 'pscStatements',
        'portfolio_companies_count' => 'portfolioCompaniesCount',
        'related_companies_count' => 'relatedCompaniesCount',
        'charges_count' => 'chargesCount',
        'bank_accounts_count' => 'bankAccountsCount',
        'gazette_notices_count' => 'gazetteNoticesCount',
        'is_fca_authorised' => 'isFcaAuthorised',
        'document_filing_counts' => 'documentFilingCounts',
        'peps_sanctions_check' => 'pepsSanctionsCheck'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_code' => 'setCountryCode',
        'company_id' => 'setCompanyId',
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
        'industries' => 'setIndustries',
        'accounts' => 'setAccounts',
        'financial_summary' => 'setFinancialSummary',
        'annual_returns' => 'setAnnualReturns',
        'officers' => 'setOfficers',
        'officer_disqualifications' => 'setOfficerDisqualifications',
        'total_company_shares' => 'setTotalCompanyShares',
        'number_of_shareholders' => 'setNumberOfShareholders',
        'shareholders_greater_or_equal_ten_percent' => 'setShareholdersGreaterOrEqualTenPercent',
        'immediate_parents' => 'setImmediateParents',
        'ultimate_parents' => 'setUltimateParents',
        'persons_of_significant_control' => 'setPersonsOfSignificantControl',
        'psc_statements' => 'setPscStatements',
        'portfolio_companies_count' => 'setPortfolioCompaniesCount',
        'related_companies_count' => 'setRelatedCompaniesCount',
        'charges_count' => 'setChargesCount',
        'bank_accounts_count' => 'setBankAccountsCount',
        'gazette_notices_count' => 'setGazetteNoticesCount',
        'is_fca_authorised' => 'setIsFcaAuthorised',
        'document_filing_counts' => 'setDocumentFilingCounts',
        'peps_sanctions_check' => 'setPepsSanctionsCheck'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_code' => 'getCountryCode',
        'company_id' => 'getCompanyId',
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
        'industries' => 'getIndustries',
        'accounts' => 'getAccounts',
        'financial_summary' => 'getFinancialSummary',
        'annual_returns' => 'getAnnualReturns',
        'officers' => 'getOfficers',
        'officer_disqualifications' => 'getOfficerDisqualifications',
        'total_company_shares' => 'getTotalCompanyShares',
        'number_of_shareholders' => 'getNumberOfShareholders',
        'shareholders_greater_or_equal_ten_percent' => 'getShareholdersGreaterOrEqualTenPercent',
        'immediate_parents' => 'getImmediateParents',
        'ultimate_parents' => 'getUltimateParents',
        'persons_of_significant_control' => 'getPersonsOfSignificantControl',
        'psc_statements' => 'getPscStatements',
        'portfolio_companies_count' => 'getPortfolioCompaniesCount',
        'related_companies_count' => 'getRelatedCompaniesCount',
        'charges_count' => 'getChargesCount',
        'bank_accounts_count' => 'getBankAccountsCount',
        'gazette_notices_count' => 'getGazetteNoticesCount',
        'is_fca_authorised' => 'getIsFcaAuthorised',
        'document_filing_counts' => 'getDocumentFilingCounts',
        'peps_sanctions_check' => 'getPepsSanctionsCheck'
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
        $this->container['industries'] = isset($data['industries']) ? $data['industries'] : null;
        $this->container['accounts'] = isset($data['accounts']) ? $data['accounts'] : null;
        $this->container['financial_summary'] = isset($data['financial_summary']) ? $data['financial_summary'] : null;
        $this->container['annual_returns'] = isset($data['annual_returns']) ? $data['annual_returns'] : null;
        $this->container['officers'] = isset($data['officers']) ? $data['officers'] : null;
        $this->container['officer_disqualifications'] = isset($data['officer_disqualifications']) ? $data['officer_disqualifications'] : null;
        $this->container['total_company_shares'] = isset($data['total_company_shares']) ? $data['total_company_shares'] : null;
        $this->container['number_of_shareholders'] = isset($data['number_of_shareholders']) ? $data['number_of_shareholders'] : null;
        $this->container['shareholders_greater_or_equal_ten_percent'] = isset($data['shareholders_greater_or_equal_ten_percent']) ? $data['shareholders_greater_or_equal_ten_percent'] : null;
        $this->container['immediate_parents'] = isset($data['immediate_parents']) ? $data['immediate_parents'] : null;
        $this->container['ultimate_parents'] = isset($data['ultimate_parents']) ? $data['ultimate_parents'] : null;
        $this->container['persons_of_significant_control'] = isset($data['persons_of_significant_control']) ? $data['persons_of_significant_control'] : null;
        $this->container['psc_statements'] = isset($data['psc_statements']) ? $data['psc_statements'] : null;
        $this->container['portfolio_companies_count'] = isset($data['portfolio_companies_count']) ? $data['portfolio_companies_count'] : null;
        $this->container['related_companies_count'] = isset($data['related_companies_count']) ? $data['related_companies_count'] : null;
        $this->container['charges_count'] = isset($data['charges_count']) ? $data['charges_count'] : null;
        $this->container['bank_accounts_count'] = isset($data['bank_accounts_count']) ? $data['bank_accounts_count'] : null;
        $this->container['gazette_notices_count'] = isset($data['gazette_notices_count']) ? $data['gazette_notices_count'] : null;
        $this->container['is_fca_authorised'] = isset($data['is_fca_authorised']) ? $data['is_fca_authorised'] : null;
        $this->container['document_filing_counts'] = isset($data['document_filing_counts']) ? $data['document_filing_counts'] : null;
        $this->container['peps_sanctions_check'] = isset($data['peps_sanctions_check']) ? $data['peps_sanctions_check'] : null;
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
        if ($this->container['industries'] === null) {
            $invalidProperties[] = "'industries' can't be null";
        }
        if ($this->container['accounts'] === null) {
            $invalidProperties[] = "'accounts' can't be null";
        }
        if ($this->container['financial_summary'] === null) {
            $invalidProperties[] = "'financial_summary' can't be null";
        }
        if ($this->container['annual_returns'] === null) {
            $invalidProperties[] = "'annual_returns' can't be null";
        }
        if ($this->container['officers'] === null) {
            $invalidProperties[] = "'officers' can't be null";
        }
        if ($this->container['officer_disqualifications'] === null) {
            $invalidProperties[] = "'officer_disqualifications' can't be null";
        }
        if ($this->container['total_company_shares'] === null) {
            $invalidProperties[] = "'total_company_shares' can't be null";
        }
        if ($this->container['number_of_shareholders'] === null) {
            $invalidProperties[] = "'number_of_shareholders' can't be null";
        }
        if ($this->container['shareholders_greater_or_equal_ten_percent'] === null) {
            $invalidProperties[] = "'shareholders_greater_or_equal_ten_percent' can't be null";
        }
        if ($this->container['immediate_parents'] === null) {
            $invalidProperties[] = "'immediate_parents' can't be null";
        }
        if ($this->container['ultimate_parents'] === null) {
            $invalidProperties[] = "'ultimate_parents' can't be null";
        }
        if ($this->container['persons_of_significant_control'] === null) {
            $invalidProperties[] = "'persons_of_significant_control' can't be null";
        }
        if ($this->container['psc_statements'] === null) {
            $invalidProperties[] = "'psc_statements' can't be null";
        }
        if ($this->container['portfolio_companies_count'] === null) {
            $invalidProperties[] = "'portfolio_companies_count' can't be null";
        }
        if ($this->container['related_companies_count'] === null) {
            $invalidProperties[] = "'related_companies_count' can't be null";
        }
        if ($this->container['charges_count'] === null) {
            $invalidProperties[] = "'charges_count' can't be null";
        }
        if ($this->container['bank_accounts_count'] === null) {
            $invalidProperties[] = "'bank_accounts_count' can't be null";
        }
        if ($this->container['gazette_notices_count'] === null) {
            $invalidProperties[] = "'gazette_notices_count' can't be null";
        }
        if ($this->container['is_fca_authorised'] === null) {
            $invalidProperties[] = "'is_fca_authorised' can't be null";
        }
        if ($this->container['document_filing_counts'] === null) {
            $invalidProperties[] = "'document_filing_counts' can't be null";
        }
        if ($this->container['peps_sanctions_check'] === null) {
            $invalidProperties[] = "'peps_sanctions_check' can't be null";
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
     * @param string $country_code country_code
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
     * @param string $company_id company_id
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

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
     * @param string $name name
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
     * @return string
     */
    public function getIncorporationDate()
    {
        return $this->container['incorporation_date'];
    }

    /**
     * Sets incorporation_date
     *
     * @param string $incorporation_date incorporation_date
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
     * Gets industries
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyIndustries[]
     */
    public function getIndustries()
    {
        return $this->container['industries'];
    }

    /**
     * Sets industries
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyIndustries[] $industries industries
     *
     * @return $this
     */
    public function setIndustries($industries)
    {
        $this->container['industries'] = $industries;

        return $this;
    }

    /**
     * Gets accounts
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyAccounts
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyAccounts $accounts accounts
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
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyFinancialSummary[]
     */
    public function getFinancialSummary()
    {
        return $this->container['financial_summary'];
    }

    /**
     * Sets financial_summary
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyFinancialSummary[] $financial_summary financial_summary
     *
     * @return $this
     */
    public function setFinancialSummary($financial_summary)
    {
        $this->container['financial_summary'] = $financial_summary;

        return $this;
    }

    /**
     * Gets annual_returns
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyAnnualReturns
     */
    public function getAnnualReturns()
    {
        return $this->container['annual_returns'];
    }

    /**
     * Sets annual_returns
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyAnnualReturns $annual_returns annual_returns
     *
     * @return $this
     */
    public function setAnnualReturns($annual_returns)
    {
        $this->container['annual_returns'] = $annual_returns;

        return $this;
    }

    /**
     * Gets officers
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyOfficers[]
     */
    public function getOfficers()
    {
        return $this->container['officers'];
    }

    /**
     * Sets officers
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyOfficers[] $officers officers
     *
     * @return $this
     */
    public function setOfficers($officers)
    {
        $this->container['officers'] = $officers;

        return $this;
    }

    /**
     * Gets officer_disqualifications
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyOfficerDisqualifications
     */
    public function getOfficerDisqualifications()
    {
        return $this->container['officer_disqualifications'];
    }

    /**
     * Sets officer_disqualifications
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyOfficerDisqualifications $officer_disqualifications officer_disqualifications
     *
     * @return $this
     */
    public function setOfficerDisqualifications($officer_disqualifications)
    {
        $this->container['officer_disqualifications'] = $officer_disqualifications;

        return $this;
    }

    /**
     * Gets total_company_shares
     *
     * @return int
     */
    public function getTotalCompanyShares()
    {
        return $this->container['total_company_shares'];
    }

    /**
     * Sets total_company_shares
     *
     * @param int $total_company_shares total_company_shares
     *
     * @return $this
     */
    public function setTotalCompanyShares($total_company_shares)
    {
        $this->container['total_company_shares'] = $total_company_shares;

        return $this;
    }

    /**
     * Gets number_of_shareholders
     *
     * @return int
     */
    public function getNumberOfShareholders()
    {
        return $this->container['number_of_shareholders'];
    }

    /**
     * Sets number_of_shareholders
     *
     * @param int $number_of_shareholders number_of_shareholders
     *
     * @return $this
     */
    public function setNumberOfShareholders($number_of_shareholders)
    {
        $this->container['number_of_shareholders'] = $number_of_shareholders;

        return $this;
    }

    /**
     * Gets shareholders_greater_or_equal_ten_percent
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyShareholdersGreaterOrEqualTenPercent[]
     */
    public function getShareholdersGreaterOrEqualTenPercent()
    {
        return $this->container['shareholders_greater_or_equal_ten_percent'];
    }

    /**
     * Sets shareholders_greater_or_equal_ten_percent
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyShareholdersGreaterOrEqualTenPercent[] $shareholders_greater_or_equal_ten_percent shareholders_greater_or_equal_ten_percent
     *
     * @return $this
     */
    public function setShareholdersGreaterOrEqualTenPercent($shareholders_greater_or_equal_ten_percent)
    {
        $this->container['shareholders_greater_or_equal_ten_percent'] = $shareholders_greater_or_equal_ten_percent;

        return $this;
    }

    /**
     * Gets immediate_parents
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyImmediateParents[]
     */
    public function getImmediateParents()
    {
        return $this->container['immediate_parents'];
    }

    /**
     * Sets immediate_parents
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyImmediateParents[] $immediate_parents immediate_parents
     *
     * @return $this
     */
    public function setImmediateParents($immediate_parents)
    {
        $this->container['immediate_parents'] = $immediate_parents;

        return $this;
    }

    /**
     * Gets ultimate_parents
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyUltimateParents[]
     */
    public function getUltimateParents()
    {
        return $this->container['ultimate_parents'];
    }

    /**
     * Sets ultimate_parents
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyUltimateParents[] $ultimate_parents ultimate_parents
     *
     * @return $this
     */
    public function setUltimateParents($ultimate_parents)
    {
        $this->container['ultimate_parents'] = $ultimate_parents;

        return $this;
    }

    /**
     * Gets persons_of_significant_control
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyPersonsOfSignificantControl[]
     */
    public function getPersonsOfSignificantControl()
    {
        return $this->container['persons_of_significant_control'];
    }

    /**
     * Sets persons_of_significant_control
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyPersonsOfSignificantControl[] $persons_of_significant_control persons_of_significant_control
     *
     * @return $this
     */
    public function setPersonsOfSignificantControl($persons_of_significant_control)
    {
        $this->container['persons_of_significant_control'] = $persons_of_significant_control;

        return $this;
    }

    /**
     * Gets psc_statements
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyPscStatements[]
     */
    public function getPscStatements()
    {
        return $this->container['psc_statements'];
    }

    /**
     * Sets psc_statements
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyPscStatements[] $psc_statements psc_statements
     *
     * @return $this
     */
    public function setPscStatements($psc_statements)
    {
        $this->container['psc_statements'] = $psc_statements;

        return $this;
    }

    /**
     * Gets portfolio_companies_count
     *
     * @return int
     */
    public function getPortfolioCompaniesCount()
    {
        return $this->container['portfolio_companies_count'];
    }

    /**
     * Sets portfolio_companies_count
     *
     * @param int $portfolio_companies_count portfolio_companies_count
     *
     * @return $this
     */
    public function setPortfolioCompaniesCount($portfolio_companies_count)
    {
        $this->container['portfolio_companies_count'] = $portfolio_companies_count;

        return $this;
    }

    /**
     * Gets related_companies_count
     *
     * @return int
     */
    public function getRelatedCompaniesCount()
    {
        return $this->container['related_companies_count'];
    }

    /**
     * Sets related_companies_count
     *
     * @param int $related_companies_count related_companies_count
     *
     * @return $this
     */
    public function setRelatedCompaniesCount($related_companies_count)
    {
        $this->container['related_companies_count'] = $related_companies_count;

        return $this;
    }

    /**
     * Gets charges_count
     *
     * @return int
     */
    public function getChargesCount()
    {
        return $this->container['charges_count'];
    }

    /**
     * Sets charges_count
     *
     * @param int $charges_count charges_count
     *
     * @return $this
     */
    public function setChargesCount($charges_count)
    {
        $this->container['charges_count'] = $charges_count;

        return $this;
    }

    /**
     * Gets bank_accounts_count
     *
     * @return int
     */
    public function getBankAccountsCount()
    {
        return $this->container['bank_accounts_count'];
    }

    /**
     * Sets bank_accounts_count
     *
     * @param int $bank_accounts_count bank_accounts_count
     *
     * @return $this
     */
    public function setBankAccountsCount($bank_accounts_count)
    {
        $this->container['bank_accounts_count'] = $bank_accounts_count;

        return $this;
    }

    /**
     * Gets gazette_notices_count
     *
     * @return int
     */
    public function getGazetteNoticesCount()
    {
        return $this->container['gazette_notices_count'];
    }

    /**
     * Sets gazette_notices_count
     *
     * @param int $gazette_notices_count gazette_notices_count
     *
     * @return $this
     */
    public function setGazetteNoticesCount($gazette_notices_count)
    {
        $this->container['gazette_notices_count'] = $gazette_notices_count;

        return $this;
    }

    /**
     * Gets is_fca_authorised
     *
     * @return bool
     */
    public function getIsFcaAuthorised()
    {
        return $this->container['is_fca_authorised'];
    }

    /**
     * Sets is_fca_authorised
     *
     * @param bool $is_fca_authorised is_fca_authorised
     *
     * @return $this
     */
    public function setIsFcaAuthorised($is_fca_authorised)
    {
        $this->container['is_fca_authorised'] = $is_fca_authorised;

        return $this;
    }

    /**
     * Gets document_filing_counts
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyDocumentFilingCounts
     */
    public function getDocumentFilingCounts()
    {
        return $this->container['document_filing_counts'];
    }

    /**
     * Sets document_filing_counts
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyDocumentFilingCounts $document_filing_counts document_filing_counts
     *
     * @return $this
     */
    public function setDocumentFilingCounts($document_filing_counts)
    {
        $this->container['document_filing_counts'] = $document_filing_counts;

        return $this;
    }

    /**
     * Gets peps_sanctions_check
     *
     * @return \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyPepsSanctionsCheck
     */
    public function getPepsSanctionsCheck()
    {
        return $this->container['peps_sanctions_check'];
    }

    /**
     * Sets peps_sanctions_check
     *
     * @param \Swagger\Client\Model\CompanyCheckResultsMatchedCompanyPepsSanctionsCheck $peps_sanctions_check peps_sanctions_check
     *
     * @return $this
     */
    public function setPepsSanctionsCheck($peps_sanctions_check)
    {
        $this->container['peps_sanctions_check'] = $peps_sanctions_check;

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


