<?php
/**
 * CompanyCheckResultsMatchedCompanyTest
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
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * CompanyCheckResultsMatchedCompanyTest Class Doc Comment
 *
 * @category    Class
 * @description CompanyCheckResultsMatchedCompany
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CompanyCheckResultsMatchedCompanyTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "CompanyCheckResultsMatchedCompany"
     */
    public function testCompanyCheckResultsMatchedCompany()
    {
    }

    /**
     * Test attribute "country_code"
     */
    public function testPropertyCountryCode()
    {
    }

    /**
     * Test attribute "company_id"
     */
    public function testPropertyCompanyId()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "legal_entity_identifier"
     */
    public function testPropertyLegalEntityIdentifier()
    {
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
    }

    /**
     * Test attribute "incorporation_country"
     */
    public function testPropertyIncorporationCountry()
    {
    }

    /**
     * Test attribute "incorporation_date"
     */
    public function testPropertyIncorporationDate()
    {
    }

    /**
     * Test attribute "official_status"
     */
    public function testPropertyOfficialStatus()
    {
    }

    /**
     * Test attribute "simplified_status"
     */
    public function testPropertySimplifiedStatus()
    {
    }

    /**
     * Test attribute "number_of_employees"
     */
    public function testPropertyNumberOfEmployees()
    {
    }

    /**
     * Test attribute "primary_website"
     */
    public function testPropertyPrimaryWebsite()
    {
    }

    /**
     * Test attribute "registered_address"
     */
    public function testPropertyRegisteredAddress()
    {
    }

    /**
     * Test attribute "industries"
     */
    public function testPropertyIndustries()
    {
    }

    /**
     * Test attribute "accounts"
     */
    public function testPropertyAccounts()
    {
    }

    /**
     * Test attribute "financial_summary"
     */
    public function testPropertyFinancialSummary()
    {
    }

    /**
     * Test attribute "annual_returns"
     */
    public function testPropertyAnnualReturns()
    {
    }

    /**
     * Test attribute "officers"
     */
    public function testPropertyOfficers()
    {
    }

    /**
     * Test attribute "officer_disqualifications"
     */
    public function testPropertyOfficerDisqualifications()
    {
    }

    /**
     * Test attribute "total_company_shares"
     */
    public function testPropertyTotalCompanyShares()
    {
    }

    /**
     * Test attribute "number_of_shareholders"
     */
    public function testPropertyNumberOfShareholders()
    {
    }

    /**
     * Test attribute "shareholders_greater_or_equal_ten_percent"
     */
    public function testPropertyShareholdersGreaterOrEqualTenPercent()
    {
    }

    /**
     * Test attribute "immediate_parents"
     */
    public function testPropertyImmediateParents()
    {
    }

    /**
     * Test attribute "ultimate_parents"
     */
    public function testPropertyUltimateParents()
    {
    }

    /**
     * Test attribute "persons_of_significant_control"
     */
    public function testPropertyPersonsOfSignificantControl()
    {
    }

    /**
     * Test attribute "psc_statements"
     */
    public function testPropertyPscStatements()
    {
    }

    /**
     * Test attribute "portfolio_companies_count"
     */
    public function testPropertyPortfolioCompaniesCount()
    {
    }

    /**
     * Test attribute "related_companies_count"
     */
    public function testPropertyRelatedCompaniesCount()
    {
    }

    /**
     * Test attribute "charges_count"
     */
    public function testPropertyChargesCount()
    {
    }

    /**
     * Test attribute "bank_accounts_count"
     */
    public function testPropertyBankAccountsCount()
    {
    }

    /**
     * Test attribute "gazette_notices_count"
     */
    public function testPropertyGazetteNoticesCount()
    {
    }

    /**
     * Test attribute "is_fca_authorised"
     */
    public function testPropertyIsFcaAuthorised()
    {
    }

    /**
     * Test attribute "document_filing_counts"
     */
    public function testPropertyDocumentFilingCounts()
    {
    }

    /**
     * Test attribute "peps_sanctions_check"
     */
    public function testPropertyPepsSanctionsCheck()
    {
    }
}
