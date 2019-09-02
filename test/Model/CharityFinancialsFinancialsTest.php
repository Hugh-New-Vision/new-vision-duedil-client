<?php
/**
 * CharityFinancialsFinancialsTest
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
 * CharityFinancialsFinancialsTest Class Doc Comment
 *
 * @category    Class
 * @description CharityFinancialsFinancials
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CharityFinancialsFinancialsTest extends \PHPUnit_Framework_TestCase
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
     * Test "CharityFinancialsFinancials"
     */
    public function testCharityFinancialsFinancials()
    {
    }

    /**
     * Test attribute "accounts_start_date"
     */
    public function testPropertyAccountsStartDate()
    {
    }

    /**
     * Test attribute "accounts_end_date"
     */
    public function testPropertyAccountsEndDate()
    {
    }

    /**
     * Test attribute "currency"
     */
    public function testPropertyCurrency()
    {
    }

    /**
     * Test attribute "consolidated_accounts"
     */
    public function testPropertyConsolidatedAccounts()
    {
    }

    /**
     * Test attribute "charity_only_accounts"
     */
    public function testPropertyCharityOnlyAccounts()
    {
    }

    /**
     * Test attribute "number_of_employees"
     */
    public function testPropertyNumberOfEmployees()
    {
    }

    /**
     * Test attribute "number_of_volunteers"
     */
    public function testPropertyNumberOfVolunteers()
    {
    }

    /**
     * Test attribute "income_from_legacies"
     */
    public function testPropertyIncomeFromLegacies()
    {
    }

    /**
     * Test attribute "income_from_endowments"
     */
    public function testPropertyIncomeFromEndowments()
    {
    }

    /**
     * Test attribute "income_from_donations_and_legacies"
     */
    public function testPropertyIncomeFromDonationsAndLegacies()
    {
    }

    /**
     * Test attribute "income_from_charitable_activities"
     */
    public function testPropertyIncomeFromCharitableActivities()
    {
    }

    /**
     * Test attribute "income_from_investments"
     */
    public function testPropertyIncomeFromInvestments()
    {
    }

    /**
     * Test attribute "other_income"
     */
    public function testPropertyOtherIncome()
    {
    }

    /**
     * Test attribute "total_income_and_endowments"
     */
    public function testPropertyTotalIncomeAndEndowments()
    {
    }

    /**
     * Test attribute "investment_management_costs"
     */
    public function testPropertyInvestmentManagementCosts()
    {
    }

    /**
     * Test attribute "grant_funding_of_activities"
     */
    public function testPropertyGrantFundingOfActivities()
    {
    }

    /**
     * Test attribute "governance_costs"
     */
    public function testPropertyGovernanceCosts()
    {
    }

    /**
     * Test attribute "expenditure_on_charitable_activities"
     */
    public function testPropertyExpenditureOnCharitableActivities()
    {
    }

    /**
     * Test attribute "other_expenditure"
     */
    public function testPropertyOtherExpenditure()
    {
    }

    /**
     * Test attribute "total_expenditure"
     */
    public function testPropertyTotalExpenditure()
    {
    }

    /**
     * Test attribute "support_costs"
     */
    public function testPropertySupportCosts()
    {
    }

    /**
     * Test attribute "depreciation"
     */
    public function testPropertyDepreciation()
    {
    }

    /**
     * Test attribute "gains_or_losses_on_investments"
     */
    public function testPropertyGainsOrLossesOnInvestments()
    {
    }

    /**
     * Test attribute "actuarial_gain_or_loss_on_pension_fund"
     */
    public function testPropertyActuarialGainOrLossOnPensionFund()
    {
    }

    /**
     * Test attribute "fixed_asset_revaluation_gain_or_loss"
     */
    public function testPropertyFixedAssetRevaluationGainOrLoss()
    {
    }

    /**
     * Test attribute "fixed_investment_assets"
     */
    public function testPropertyFixedInvestmentAssets()
    {
    }

    /**
     * Test attribute "total_fixed_assets"
     */
    public function testPropertyTotalFixedAssets()
    {
    }

    /**
     * Test attribute "cash"
     */
    public function testPropertyCash()
    {
    }

    /**
     * Test attribute "total_current_assets"
     */
    public function testPropertyTotalCurrentAssets()
    {
    }

    /**
     * Test attribute "creditors_due_within_one_year"
     */
    public function testPropertyCreditorsDueWithinOneYear()
    {
    }

    /**
     * Test attribute "creditors_due_after_one_year"
     */
    public function testPropertyCreditorsDueAfterOneYear()
    {
    }

    /**
     * Test attribute "pension_assets"
     */
    public function testPropertyPensionAssets()
    {
    }

    /**
     * Test attribute "total_net_assets"
     */
    public function testPropertyTotalNetAssets()
    {
    }

    /**
     * Test attribute "endowment_funds"
     */
    public function testPropertyEndowmentFunds()
    {
    }

    /**
     * Test attribute "restricted_funds"
     */
    public function testPropertyRestrictedFunds()
    {
    }

    /**
     * Test attribute "unrestricted_funds"
     */
    public function testPropertyUnrestrictedFunds()
    {
    }

    /**
     * Test attribute "total_funds"
     */
    public function testPropertyTotalFunds()
    {
    }

    /**
     * Test attribute "reserves"
     */
    public function testPropertyReserves()
    {
    }

    /**
     * Test attribute "start_of_period_fixed_investment_assets"
     */
    public function testPropertyStartOfPeriodFixedInvestmentAssets()
    {
    }

    /**
     * Test attribute "start_of_period_total_fixed_assets"
     */
    public function testPropertyStartOfPeriodTotalFixedAssets()
    {
    }
}
