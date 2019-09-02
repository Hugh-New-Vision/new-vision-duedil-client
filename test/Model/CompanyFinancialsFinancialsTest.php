<?php
/**
 * CompanyFinancialsFinancialsTest
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
 * CompanyFinancialsFinancialsTest Class Doc Comment
 *
 * @category    Class
 * @description CompanyFinancialsFinancials
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CompanyFinancialsFinancialsTest extends \PHPUnit_Framework_TestCase
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
     * Test "CompanyFinancialsFinancials"
     */
    public function testCompanyFinancialsFinancials()
    {
    }

    /**
     * Test attribute "accounts_date"
     */
    public function testPropertyAccountsDate()
    {
    }

    /**
     * Test attribute "reporting_period"
     */
    public function testPropertyReportingPeriod()
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
     * Test attribute "audit_qualification"
     */
    public function testPropertyAuditQualification()
    {
    }

    /**
     * Test attribute "number_of_employees"
     */
    public function testPropertyNumberOfEmployees()
    {
    }

    /**
     * Test attribute "turnover"
     */
    public function testPropertyTurnover()
    {
    }

    /**
     * Test attribute "cost_of_sales"
     */
    public function testPropertyCostOfSales()
    {
    }

    /**
     * Test attribute "sga_plus_other_net_costs"
     */
    public function testPropertySgaPlusOtherNetCosts()
    {
    }

    /**
     * Test attribute "operating_profit"
     */
    public function testPropertyOperatingProfit()
    {
    }

    /**
     * Test attribute "interest_receivable"
     */
    public function testPropertyInterestReceivable()
    {
    }

    /**
     * Test attribute "interest_payable"
     */
    public function testPropertyInterestPayable()
    {
    }

    /**
     * Test attribute "pre_tax_profit"
     */
    public function testPropertyPreTaxProfit()
    {
    }

    /**
     * Test attribute "taxation"
     */
    public function testPropertyTaxation()
    {
    }

    /**
     * Test attribute "post_tax_profit"
     */
    public function testPropertyPostTaxProfit()
    {
    }

    /**
     * Test attribute "dividends_payable"
     */
    public function testPropertyDividendsPayable()
    {
    }

    /**
     * Test attribute "retained_profits"
     */
    public function testPropertyRetainedProfits()
    {
    }

    /**
     * Test attribute "intangible_assets"
     */
    public function testPropertyIntangibleAssets()
    {
    }

    /**
     * Test attribute "tangible_assets"
     */
    public function testPropertyTangibleAssets()
    {
    }

    /**
     * Test attribute "investments_and_other_assets"
     */
    public function testPropertyInvestmentsAndOtherAssets()
    {
    }

    /**
     * Test attribute "fixed_assets"
     */
    public function testPropertyFixedAssets()
    {
    }

    /**
     * Test attribute "stock"
     */
    public function testPropertyStock()
    {
    }

    /**
     * Test attribute "trade_debtors"
     */
    public function testPropertyTradeDebtors()
    {
    }

    /**
     * Test attribute "other_debtors"
     */
    public function testPropertyOtherDebtors()
    {
    }

    /**
     * Test attribute "miscellaneous_current_assets"
     */
    public function testPropertyMiscellaneousCurrentAssets()
    {
    }

    /**
     * Test attribute "cash"
     */
    public function testPropertyCash()
    {
    }

    /**
     * Test attribute "current_assets"
     */
    public function testPropertyCurrentAssets()
    {
    }

    /**
     * Test attribute "total_assets"
     */
    public function testPropertyTotalAssets()
    {
    }

    /**
     * Test attribute "bank_loans_and_overdrafts"
     */
    public function testPropertyBankLoansAndOverdrafts()
    {
    }

    /**
     * Test attribute "trade_creditors"
     */
    public function testPropertyTradeCreditors()
    {
    }

    /**
     * Test attribute "miscellaneous_current_liabilities"
     */
    public function testPropertyMiscellaneousCurrentLiabilities()
    {
    }

    /**
     * Test attribute "other_short_term_finances"
     */
    public function testPropertyOtherShortTermFinances()
    {
    }

    /**
     * Test attribute "current_liabilities"
     */
    public function testPropertyCurrentLiabilities()
    {
    }

    /**
     * Test attribute "contingent_liabilities"
     */
    public function testPropertyContingentLiabilities()
    {
    }

    /**
     * Test attribute "other_long_term_finances"
     */
    public function testPropertyOtherLongTermFinances()
    {
    }

    /**
     * Test attribute "total_long_term_liabilities"
     */
    public function testPropertyTotalLongTermLiabilities()
    {
    }

    /**
     * Test attribute "total_liabilities"
     */
    public function testPropertyTotalLiabilities()
    {
    }

    /**
     * Test attribute "net_assets"
     */
    public function testPropertyNetAssets()
    {
    }

    /**
     * Test attribute "equity_paid_up"
     */
    public function testPropertyEquityPaidUp()
    {
    }

    /**
     * Test attribute "revaluation_reserve"
     */
    public function testPropertyRevaluationReserve()
    {
    }

    /**
     * Test attribute "sundry_reserves"
     */
    public function testPropertySundryReserves()
    {
    }

    /**
     * Test attribute "profit_and_loss_account_reserve"
     */
    public function testPropertyProfitAndLossAccountReserve()
    {
    }

    /**
     * Test attribute "shareholder_funds"
     */
    public function testPropertyShareholderFunds()
    {
    }

    /**
     * Test attribute "depreciation"
     */
    public function testPropertyDepreciation()
    {
    }

    /**
     * Test attribute "amortisation_of_intangibles"
     */
    public function testPropertyAmortisationOfIntangibles()
    {
    }

    /**
     * Test attribute "ebitda"
     */
    public function testPropertyEbitda()
    {
    }

    /**
     * Test attribute "working_capital"
     */
    public function testPropertyWorkingCapital()
    {
    }

    /**
     * Test attribute "capital_employed"
     */
    public function testPropertyCapitalEmployed()
    {
    }

    /**
     * Test attribute "wages_and_salaries"
     */
    public function testPropertyWagesAndSalaries()
    {
    }

    /**
     * Test attribute "directors_emoluments"
     */
    public function testPropertyDirectorsEmoluments()
    {
    }

    /**
     * Test attribute "audit_fees"
     */
    public function testPropertyAuditFees()
    {
    }

    /**
     * Test attribute "bank_overdraft_and_long_term_loans"
     */
    public function testPropertyBankOverdraftAndLongTermLoans()
    {
    }

    /**
     * Test attribute "net_cash_flow_from_operations"
     */
    public function testPropertyNetCashFlowFromOperations()
    {
    }

    /**
     * Test attribute "net_cash_flow_before_financing"
     */
    public function testPropertyNetCashFlowBeforeFinancing()
    {
    }

    /**
     * Test attribute "net_cash_flow_from_financing"
     */
    public function testPropertyNetCashFlowFromFinancing()
    {
    }

    /**
     * Test attribute "increase_in_cash"
     */
    public function testPropertyIncreaseInCash()
    {
    }

    /**
     * Test attribute "debtor_days"
     */
    public function testPropertyDebtorDays()
    {
    }

    /**
     * Test attribute "exports"
     */
    public function testPropertyExports()
    {
    }

    /**
     * Test attribute "gross_margin_percentage"
     */
    public function testPropertyGrossMarginPercentage()
    {
    }

    /**
     * Test attribute "operating_profit_margin_percentage"
     */
    public function testPropertyOperatingProfitMarginPercentage()
    {
    }

    /**
     * Test attribute "ebitda_margin_percentage"
     */
    public function testPropertyEbitdaMarginPercentage()
    {
    }

    /**
     * Test attribute "pre_tax_profit_margin_percentage"
     */
    public function testPropertyPreTaxProfitMarginPercentage()
    {
    }

    /**
     * Test attribute "net_margin_percentage"
     */
    public function testPropertyNetMarginPercentage()
    {
    }

    /**
     * Test attribute "return_on_assets_percentage"
     */
    public function testPropertyReturnOnAssetsPercentage()
    {
    }

    /**
     * Test attribute "return_on_capital_employed_percentage"
     */
    public function testPropertyReturnOnCapitalEmployedPercentage()
    {
    }

    /**
     * Test attribute "return_on_equity"
     */
    public function testPropertyReturnOnEquity()
    {
    }

    /**
     * Test attribute "current_ratio"
     */
    public function testPropertyCurrentRatio()
    {
    }

    /**
     * Test attribute "cash_to_current_liabilities_ratio"
     */
    public function testPropertyCashToCurrentLiabilitiesRatio()
    {
    }

    /**
     * Test attribute "cash_to_total_assets_percentage"
     */
    public function testPropertyCashToTotalAssetsPercentage()
    {
    }

    /**
     * Test attribute "liquidity_ratio"
     */
    public function testPropertyLiquidityRatio()
    {
    }

    /**
     * Test attribute "gearing_percentage_on_liability_basis"
     */
    public function testPropertyGearingPercentageOnLiabilityBasis()
    {
    }

    /**
     * Test attribute "gearing_percentage_on_gross_debt_basis"
     */
    public function testPropertyGearingPercentageOnGrossDebtBasis()
    {
    }

    /**
     * Test attribute "gearing_percentage_on_net_debt_basis"
     */
    public function testPropertyGearingPercentageOnNetDebtBasis()
    {
    }

    /**
     * Test attribute "debt_to_capital_percentage"
     */
    public function testPropertyDebtToCapitalPercentage()
    {
    }

    /**
     * Test attribute "inventory_turnover_ratio"
     */
    public function testPropertyInventoryTurnoverRatio()
    {
    }

    /**
     * Test attribute "cash_to_turnover_ratio"
     */
    public function testPropertyCashToTurnoverRatio()
    {
    }

    /**
     * Test attribute "cash_to_turnover_percentage"
     */
    public function testPropertyCashToTurnoverPercentage()
    {
    }

    /**
     * Test attribute "days_inventory_outstanding"
     */
    public function testPropertyDaysInventoryOutstanding()
    {
    }

    /**
     * Test attribute "days_sales_outstanding"
     */
    public function testPropertyDaysSalesOutstanding()
    {
    }

    /**
     * Test attribute "days_payable_outstanding"
     */
    public function testPropertyDaysPayableOutstanding()
    {
    }

    /**
     * Test attribute "cash_conversion_cycle"
     */
    public function testPropertyCashConversionCycle()
    {
    }

    /**
     * Test attribute "revenue_per_employee"
     */
    public function testPropertyRevenuePerEmployee()
    {
    }

    /**
     * Test attribute "human_capital_value_added"
     */
    public function testPropertyHumanCapitalValueAdded()
    {
    }

    /**
     * Test attribute "interest_coverage_ratio"
     */
    public function testPropertyInterestCoverageRatio()
    {
    }

    /**
     * Test attribute "net_debt_to_ebitda_ratio"
     */
    public function testPropertyNetDebtToEbitdaRatio()
    {
    }

    /**
     * Test attribute "cfo_to_sales_ratio"
     */
    public function testPropertyCfoToSalesRatio()
    {
    }

    /**
     * Test attribute "auditor"
     */
    public function testPropertyAuditor()
    {
    }

    /**
     * Test attribute "joint_auditor"
     */
    public function testPropertyJointAuditor()
    {
    }

    /**
     * Test attribute "solicitor"
     */
    public function testPropertySolicitor()
    {
    }

    /**
     * Test attribute "accountant"
     */
    public function testPropertyAccountant()
    {
    }
}
