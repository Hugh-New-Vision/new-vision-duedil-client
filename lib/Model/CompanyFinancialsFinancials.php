<?php
/**
 * CompanyFinancialsFinancials
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
 * CompanyFinancialsFinancials Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyFinancialsFinancials implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanyFinancials_financials';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accounts_date' => '\DateTime',
        'reporting_period' => 'int',
        'currency' => 'string',
        'consolidated_accounts' => 'bool',
        'audit_qualification' => 'string',
        'number_of_employees' => 'object',
        'turnover' => 'object',
        'cost_of_sales' => 'object',
        'sga_plus_other_net_costs' => 'object',
        'operating_profit' => 'object',
        'interest_receivable' => 'object',
        'interest_payable' => 'object',
        'pre_tax_profit' => 'object',
        'taxation' => 'object',
        'post_tax_profit' => 'object',
        'dividends_payable' => 'object',
        'retained_profits' => 'object',
        'intangible_assets' => 'object',
        'tangible_assets' => 'object',
        'investments_and_other_assets' => 'object',
        'fixed_assets' => 'object',
        'stock' => 'object',
        'trade_debtors' => 'object',
        'other_debtors' => 'object',
        'miscellaneous_current_assets' => 'object',
        'cash' => 'object',
        'current_assets' => 'object',
        'total_assets' => 'object',
        'bank_loans_and_overdrafts' => 'object',
        'trade_creditors' => 'object',
        'miscellaneous_current_liabilities' => 'object',
        'other_short_term_finances' => 'object',
        'current_liabilities' => 'object',
        'contingent_liabilities' => 'object',
        'other_long_term_finances' => 'object',
        'total_long_term_liabilities' => 'object',
        'total_liabilities' => 'object',
        'net_assets' => 'object',
        'equity_paid_up' => 'object',
        'revaluation_reserve' => 'object',
        'sundry_reserves' => 'object',
        'profit_and_loss_account_reserve' => 'object',
        'shareholder_funds' => 'object',
        'depreciation' => 'object',
        'amortisation_of_intangibles' => 'object',
        'ebitda' => 'object',
        'working_capital' => 'object',
        'capital_employed' => 'object',
        'wages_and_salaries' => 'object',
        'directors_emoluments' => 'object',
        'audit_fees' => 'object',
        'bank_overdraft_and_long_term_loans' => 'object',
        'net_cash_flow_from_operations' => 'object',
        'net_cash_flow_before_financing' => 'object',
        'net_cash_flow_from_financing' => 'object',
        'increase_in_cash' => 'object',
        'debtor_days' => 'object',
        'exports' => 'object',
        'gross_margin_percentage' => '\Swagger\Client\Model\CompanyFinancialsGrossMarginPercentage',
        'operating_profit_margin_percentage' => '\Swagger\Client\Model\CompanyFinancialsOperatingProfitMarginPercentage',
        'ebitda_margin_percentage' => '\Swagger\Client\Model\CompanyFinancialsEbitdaMarginPercentage',
        'pre_tax_profit_margin_percentage' => '\Swagger\Client\Model\CompanyFinancialsPreTaxProfitMarginPercentage',
        'net_margin_percentage' => '\Swagger\Client\Model\CompanyFinancialsNetMarginPercentage',
        'return_on_assets_percentage' => '\Swagger\Client\Model\CompanyFinancialsReturnOnAssetsPercentage',
        'return_on_capital_employed_percentage' => '\Swagger\Client\Model\CompanyFinancialsReturnOnCapitalEmployedPercentage',
        'return_on_equity' => '\Swagger\Client\Model\CompanyFinancialsReturnOnEquity',
        'current_ratio' => '\Swagger\Client\Model\CompanyFinancialsCurrentRatio',
        'cash_to_current_liabilities_ratio' => '\Swagger\Client\Model\CompanyFinancialsCashToCurrentLiabilitiesRatio',
        'cash_to_total_assets_percentage' => '\Swagger\Client\Model\CompanyFinancialsCashToTotalAssetsPercentage',
        'liquidity_ratio' => '\Swagger\Client\Model\CompanyFinancialsLiquidityRatio',
        'gearing_percentage_on_liability_basis' => '\Swagger\Client\Model\CompanyFinancialsGearingPercentageOnLiabilityBasis',
        'gearing_percentage_on_gross_debt_basis' => '\Swagger\Client\Model\CompanyFinancialsGearingPercentageOnGrossDebtBasis',
        'gearing_percentage_on_net_debt_basis' => '\Swagger\Client\Model\CompanyFinancialsGearingPercentageOnNetDebtBasis',
        'debt_to_capital_percentage' => '\Swagger\Client\Model\CompanyFinancialsDebtToCapitalPercentage',
        'inventory_turnover_ratio' => '\Swagger\Client\Model\CompanyFinancialsInventoryTurnoverRatio',
        'cash_to_turnover_ratio' => '\Swagger\Client\Model\CompanyFinancialsCashToTurnoverRatio',
        'cash_to_turnover_percentage' => '\Swagger\Client\Model\CompanyFinancialsCashToTurnoverPercentage',
        'days_inventory_outstanding' => '\Swagger\Client\Model\CompanyFinancialsDaysInventoryOutstanding',
        'days_sales_outstanding' => '\Swagger\Client\Model\CompanyFinancialsDaysSalesOutstanding',
        'days_payable_outstanding' => '\Swagger\Client\Model\CompanyFinancialsDaysPayableOutstanding',
        'cash_conversion_cycle' => '\Swagger\Client\Model\CompanyFinancialsCashConversionCycle',
        'revenue_per_employee' => '\Swagger\Client\Model\CompanyFinancialsRevenuePerEmployee',
        'human_capital_value_added' => '\Swagger\Client\Model\CompanyFinancialsHumanCapitalValueAdded',
        'interest_coverage_ratio' => '\Swagger\Client\Model\CompanyFinancialsInterestCoverageRatio',
        'net_debt_to_ebitda_ratio' => '\Swagger\Client\Model\CompanyFinancialsNetDebtToEBITDARatio',
        'cfo_to_sales_ratio' => '\Swagger\Client\Model\CompanyFinancialsCfoToSalesRatio',
        'auditor' => '\Swagger\Client\Model\CharityTrusteesTrustees',
        'joint_auditor' => '\Swagger\Client\Model\CharityTrusteesTrustees',
        'solicitor' => '\Swagger\Client\Model\CharityTrusteesTrustees',
        'accountant' => '\Swagger\Client\Model\CharityTrusteesTrustees'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accounts_date' => 'date',
        'reporting_period' => 'int32',
        'currency' => null,
        'consolidated_accounts' => null,
        'audit_qualification' => null,
        'number_of_employees' => null,
        'turnover' => null,
        'cost_of_sales' => null,
        'sga_plus_other_net_costs' => null,
        'operating_profit' => null,
        'interest_receivable' => null,
        'interest_payable' => null,
        'pre_tax_profit' => null,
        'taxation' => null,
        'post_tax_profit' => null,
        'dividends_payable' => null,
        'retained_profits' => null,
        'intangible_assets' => null,
        'tangible_assets' => null,
        'investments_and_other_assets' => null,
        'fixed_assets' => null,
        'stock' => null,
        'trade_debtors' => null,
        'other_debtors' => null,
        'miscellaneous_current_assets' => null,
        'cash' => null,
        'current_assets' => null,
        'total_assets' => null,
        'bank_loans_and_overdrafts' => null,
        'trade_creditors' => null,
        'miscellaneous_current_liabilities' => null,
        'other_short_term_finances' => null,
        'current_liabilities' => null,
        'contingent_liabilities' => null,
        'other_long_term_finances' => null,
        'total_long_term_liabilities' => null,
        'total_liabilities' => null,
        'net_assets' => null,
        'equity_paid_up' => null,
        'revaluation_reserve' => null,
        'sundry_reserves' => null,
        'profit_and_loss_account_reserve' => null,
        'shareholder_funds' => null,
        'depreciation' => null,
        'amortisation_of_intangibles' => null,
        'ebitda' => null,
        'working_capital' => null,
        'capital_employed' => null,
        'wages_and_salaries' => null,
        'directors_emoluments' => null,
        'audit_fees' => null,
        'bank_overdraft_and_long_term_loans' => null,
        'net_cash_flow_from_operations' => null,
        'net_cash_flow_before_financing' => null,
        'net_cash_flow_from_financing' => null,
        'increase_in_cash' => null,
        'debtor_days' => null,
        'exports' => null,
        'gross_margin_percentage' => null,
        'operating_profit_margin_percentage' => null,
        'ebitda_margin_percentage' => null,
        'pre_tax_profit_margin_percentage' => null,
        'net_margin_percentage' => null,
        'return_on_assets_percentage' => null,
        'return_on_capital_employed_percentage' => null,
        'return_on_equity' => null,
        'current_ratio' => null,
        'cash_to_current_liabilities_ratio' => null,
        'cash_to_total_assets_percentage' => null,
        'liquidity_ratio' => null,
        'gearing_percentage_on_liability_basis' => null,
        'gearing_percentage_on_gross_debt_basis' => null,
        'gearing_percentage_on_net_debt_basis' => null,
        'debt_to_capital_percentage' => null,
        'inventory_turnover_ratio' => null,
        'cash_to_turnover_ratio' => null,
        'cash_to_turnover_percentage' => null,
        'days_inventory_outstanding' => null,
        'days_sales_outstanding' => null,
        'days_payable_outstanding' => null,
        'cash_conversion_cycle' => null,
        'revenue_per_employee' => null,
        'human_capital_value_added' => null,
        'interest_coverage_ratio' => null,
        'net_debt_to_ebitda_ratio' => null,
        'cfo_to_sales_ratio' => null,
        'auditor' => null,
        'joint_auditor' => null,
        'solicitor' => null,
        'accountant' => null
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
        'accounts_date' => 'accountsDate',
        'reporting_period' => 'reportingPeriod',
        'currency' => 'currency',
        'consolidated_accounts' => 'consolidatedAccounts',
        'audit_qualification' => 'auditQualification',
        'number_of_employees' => 'numberOfEmployees',
        'turnover' => 'turnover',
        'cost_of_sales' => 'costOfSales',
        'sga_plus_other_net_costs' => 'sgaPlusOtherNetCosts',
        'operating_profit' => 'operatingProfit',
        'interest_receivable' => 'interestReceivable',
        'interest_payable' => 'interestPayable',
        'pre_tax_profit' => 'preTaxProfit',
        'taxation' => 'taxation',
        'post_tax_profit' => 'postTaxProfit',
        'dividends_payable' => 'dividendsPayable',
        'retained_profits' => 'retainedProfits',
        'intangible_assets' => 'intangibleAssets',
        'tangible_assets' => 'tangibleAssets',
        'investments_and_other_assets' => 'investmentsAndOtherAssets',
        'fixed_assets' => 'fixedAssets',
        'stock' => 'stock',
        'trade_debtors' => 'tradeDebtors',
        'other_debtors' => 'otherDebtors',
        'miscellaneous_current_assets' => 'miscellaneousCurrentAssets',
        'cash' => 'cash',
        'current_assets' => 'currentAssets',
        'total_assets' => 'totalAssets',
        'bank_loans_and_overdrafts' => 'bankLoansAndOverdrafts',
        'trade_creditors' => 'tradeCreditors',
        'miscellaneous_current_liabilities' => 'miscellaneousCurrentLiabilities',
        'other_short_term_finances' => 'otherShortTermFinances',
        'current_liabilities' => 'currentLiabilities',
        'contingent_liabilities' => 'contingentLiabilities',
        'other_long_term_finances' => 'otherLongTermFinances',
        'total_long_term_liabilities' => 'totalLongTermLiabilities',
        'total_liabilities' => 'totalLiabilities',
        'net_assets' => 'netAssets',
        'equity_paid_up' => 'equityPaidUp',
        'revaluation_reserve' => 'revaluationReserve',
        'sundry_reserves' => 'sundryReserves',
        'profit_and_loss_account_reserve' => 'profitAndLossAccountReserve',
        'shareholder_funds' => 'shareholderFunds',
        'depreciation' => 'depreciation',
        'amortisation_of_intangibles' => 'amortisationOfIntangibles',
        'ebitda' => 'ebitda',
        'working_capital' => 'workingCapital',
        'capital_employed' => 'capitalEmployed',
        'wages_and_salaries' => 'wagesAndSalaries',
        'directors_emoluments' => 'directorsEmoluments',
        'audit_fees' => 'auditFees',
        'bank_overdraft_and_long_term_loans' => 'bankOverdraftAndLongTermLoans',
        'net_cash_flow_from_operations' => 'netCashFlowFromOperations',
        'net_cash_flow_before_financing' => 'netCashFlowBeforeFinancing',
        'net_cash_flow_from_financing' => 'netCashFlowFromFinancing',
        'increase_in_cash' => 'increaseInCash',
        'debtor_days' => 'debtorDays',
        'exports' => 'exports',
        'gross_margin_percentage' => 'grossMarginPercentage',
        'operating_profit_margin_percentage' => 'operatingProfitMarginPercentage',
        'ebitda_margin_percentage' => 'ebitdaMarginPercentage',
        'pre_tax_profit_margin_percentage' => 'preTaxProfitMarginPercentage',
        'net_margin_percentage' => 'netMarginPercentage',
        'return_on_assets_percentage' => 'returnOnAssetsPercentage',
        'return_on_capital_employed_percentage' => 'returnOnCapitalEmployedPercentage',
        'return_on_equity' => 'returnOnEquity',
        'current_ratio' => 'currentRatio',
        'cash_to_current_liabilities_ratio' => 'cashToCurrentLiabilitiesRatio',
        'cash_to_total_assets_percentage' => 'cashToTotalAssetsPercentage',
        'liquidity_ratio' => 'liquidityRatio',
        'gearing_percentage_on_liability_basis' => 'gearingPercentageOnLiabilityBasis',
        'gearing_percentage_on_gross_debt_basis' => 'gearingPercentageOnGrossDebtBasis',
        'gearing_percentage_on_net_debt_basis' => 'gearingPercentageOnNetDebtBasis',
        'debt_to_capital_percentage' => 'debtToCapitalPercentage',
        'inventory_turnover_ratio' => 'inventoryTurnoverRatio',
        'cash_to_turnover_ratio' => 'cashToTurnoverRatio',
        'cash_to_turnover_percentage' => 'cashToTurnoverPercentage',
        'days_inventory_outstanding' => 'daysInventoryOutstanding',
        'days_sales_outstanding' => 'daysSalesOutstanding',
        'days_payable_outstanding' => 'daysPayableOutstanding',
        'cash_conversion_cycle' => 'cashConversionCycle',
        'revenue_per_employee' => 'revenuePerEmployee',
        'human_capital_value_added' => 'humanCapitalValueAdded',
        'interest_coverage_ratio' => 'interestCoverageRatio',
        'net_debt_to_ebitda_ratio' => 'netDebtToEBITDARatio',
        'cfo_to_sales_ratio' => 'cfoToSalesRatio',
        'auditor' => 'auditor',
        'joint_auditor' => 'jointAuditor',
        'solicitor' => 'solicitor',
        'accountant' => 'accountant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accounts_date' => 'setAccountsDate',
        'reporting_period' => 'setReportingPeriod',
        'currency' => 'setCurrency',
        'consolidated_accounts' => 'setConsolidatedAccounts',
        'audit_qualification' => 'setAuditQualification',
        'number_of_employees' => 'setNumberOfEmployees',
        'turnover' => 'setTurnover',
        'cost_of_sales' => 'setCostOfSales',
        'sga_plus_other_net_costs' => 'setSgaPlusOtherNetCosts',
        'operating_profit' => 'setOperatingProfit',
        'interest_receivable' => 'setInterestReceivable',
        'interest_payable' => 'setInterestPayable',
        'pre_tax_profit' => 'setPreTaxProfit',
        'taxation' => 'setTaxation',
        'post_tax_profit' => 'setPostTaxProfit',
        'dividends_payable' => 'setDividendsPayable',
        'retained_profits' => 'setRetainedProfits',
        'intangible_assets' => 'setIntangibleAssets',
        'tangible_assets' => 'setTangibleAssets',
        'investments_and_other_assets' => 'setInvestmentsAndOtherAssets',
        'fixed_assets' => 'setFixedAssets',
        'stock' => 'setStock',
        'trade_debtors' => 'setTradeDebtors',
        'other_debtors' => 'setOtherDebtors',
        'miscellaneous_current_assets' => 'setMiscellaneousCurrentAssets',
        'cash' => 'setCash',
        'current_assets' => 'setCurrentAssets',
        'total_assets' => 'setTotalAssets',
        'bank_loans_and_overdrafts' => 'setBankLoansAndOverdrafts',
        'trade_creditors' => 'setTradeCreditors',
        'miscellaneous_current_liabilities' => 'setMiscellaneousCurrentLiabilities',
        'other_short_term_finances' => 'setOtherShortTermFinances',
        'current_liabilities' => 'setCurrentLiabilities',
        'contingent_liabilities' => 'setContingentLiabilities',
        'other_long_term_finances' => 'setOtherLongTermFinances',
        'total_long_term_liabilities' => 'setTotalLongTermLiabilities',
        'total_liabilities' => 'setTotalLiabilities',
        'net_assets' => 'setNetAssets',
        'equity_paid_up' => 'setEquityPaidUp',
        'revaluation_reserve' => 'setRevaluationReserve',
        'sundry_reserves' => 'setSundryReserves',
        'profit_and_loss_account_reserve' => 'setProfitAndLossAccountReserve',
        'shareholder_funds' => 'setShareholderFunds',
        'depreciation' => 'setDepreciation',
        'amortisation_of_intangibles' => 'setAmortisationOfIntangibles',
        'ebitda' => 'setEbitda',
        'working_capital' => 'setWorkingCapital',
        'capital_employed' => 'setCapitalEmployed',
        'wages_and_salaries' => 'setWagesAndSalaries',
        'directors_emoluments' => 'setDirectorsEmoluments',
        'audit_fees' => 'setAuditFees',
        'bank_overdraft_and_long_term_loans' => 'setBankOverdraftAndLongTermLoans',
        'net_cash_flow_from_operations' => 'setNetCashFlowFromOperations',
        'net_cash_flow_before_financing' => 'setNetCashFlowBeforeFinancing',
        'net_cash_flow_from_financing' => 'setNetCashFlowFromFinancing',
        'increase_in_cash' => 'setIncreaseInCash',
        'debtor_days' => 'setDebtorDays',
        'exports' => 'setExports',
        'gross_margin_percentage' => 'setGrossMarginPercentage',
        'operating_profit_margin_percentage' => 'setOperatingProfitMarginPercentage',
        'ebitda_margin_percentage' => 'setEbitdaMarginPercentage',
        'pre_tax_profit_margin_percentage' => 'setPreTaxProfitMarginPercentage',
        'net_margin_percentage' => 'setNetMarginPercentage',
        'return_on_assets_percentage' => 'setReturnOnAssetsPercentage',
        'return_on_capital_employed_percentage' => 'setReturnOnCapitalEmployedPercentage',
        'return_on_equity' => 'setReturnOnEquity',
        'current_ratio' => 'setCurrentRatio',
        'cash_to_current_liabilities_ratio' => 'setCashToCurrentLiabilitiesRatio',
        'cash_to_total_assets_percentage' => 'setCashToTotalAssetsPercentage',
        'liquidity_ratio' => 'setLiquidityRatio',
        'gearing_percentage_on_liability_basis' => 'setGearingPercentageOnLiabilityBasis',
        'gearing_percentage_on_gross_debt_basis' => 'setGearingPercentageOnGrossDebtBasis',
        'gearing_percentage_on_net_debt_basis' => 'setGearingPercentageOnNetDebtBasis',
        'debt_to_capital_percentage' => 'setDebtToCapitalPercentage',
        'inventory_turnover_ratio' => 'setInventoryTurnoverRatio',
        'cash_to_turnover_ratio' => 'setCashToTurnoverRatio',
        'cash_to_turnover_percentage' => 'setCashToTurnoverPercentage',
        'days_inventory_outstanding' => 'setDaysInventoryOutstanding',
        'days_sales_outstanding' => 'setDaysSalesOutstanding',
        'days_payable_outstanding' => 'setDaysPayableOutstanding',
        'cash_conversion_cycle' => 'setCashConversionCycle',
        'revenue_per_employee' => 'setRevenuePerEmployee',
        'human_capital_value_added' => 'setHumanCapitalValueAdded',
        'interest_coverage_ratio' => 'setInterestCoverageRatio',
        'net_debt_to_ebitda_ratio' => 'setNetDebtToEbitdaRatio',
        'cfo_to_sales_ratio' => 'setCfoToSalesRatio',
        'auditor' => 'setAuditor',
        'joint_auditor' => 'setJointAuditor',
        'solicitor' => 'setSolicitor',
        'accountant' => 'setAccountant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accounts_date' => 'getAccountsDate',
        'reporting_period' => 'getReportingPeriod',
        'currency' => 'getCurrency',
        'consolidated_accounts' => 'getConsolidatedAccounts',
        'audit_qualification' => 'getAuditQualification',
        'number_of_employees' => 'getNumberOfEmployees',
        'turnover' => 'getTurnover',
        'cost_of_sales' => 'getCostOfSales',
        'sga_plus_other_net_costs' => 'getSgaPlusOtherNetCosts',
        'operating_profit' => 'getOperatingProfit',
        'interest_receivable' => 'getInterestReceivable',
        'interest_payable' => 'getInterestPayable',
        'pre_tax_profit' => 'getPreTaxProfit',
        'taxation' => 'getTaxation',
        'post_tax_profit' => 'getPostTaxProfit',
        'dividends_payable' => 'getDividendsPayable',
        'retained_profits' => 'getRetainedProfits',
        'intangible_assets' => 'getIntangibleAssets',
        'tangible_assets' => 'getTangibleAssets',
        'investments_and_other_assets' => 'getInvestmentsAndOtherAssets',
        'fixed_assets' => 'getFixedAssets',
        'stock' => 'getStock',
        'trade_debtors' => 'getTradeDebtors',
        'other_debtors' => 'getOtherDebtors',
        'miscellaneous_current_assets' => 'getMiscellaneousCurrentAssets',
        'cash' => 'getCash',
        'current_assets' => 'getCurrentAssets',
        'total_assets' => 'getTotalAssets',
        'bank_loans_and_overdrafts' => 'getBankLoansAndOverdrafts',
        'trade_creditors' => 'getTradeCreditors',
        'miscellaneous_current_liabilities' => 'getMiscellaneousCurrentLiabilities',
        'other_short_term_finances' => 'getOtherShortTermFinances',
        'current_liabilities' => 'getCurrentLiabilities',
        'contingent_liabilities' => 'getContingentLiabilities',
        'other_long_term_finances' => 'getOtherLongTermFinances',
        'total_long_term_liabilities' => 'getTotalLongTermLiabilities',
        'total_liabilities' => 'getTotalLiabilities',
        'net_assets' => 'getNetAssets',
        'equity_paid_up' => 'getEquityPaidUp',
        'revaluation_reserve' => 'getRevaluationReserve',
        'sundry_reserves' => 'getSundryReserves',
        'profit_and_loss_account_reserve' => 'getProfitAndLossAccountReserve',
        'shareholder_funds' => 'getShareholderFunds',
        'depreciation' => 'getDepreciation',
        'amortisation_of_intangibles' => 'getAmortisationOfIntangibles',
        'ebitda' => 'getEbitda',
        'working_capital' => 'getWorkingCapital',
        'capital_employed' => 'getCapitalEmployed',
        'wages_and_salaries' => 'getWagesAndSalaries',
        'directors_emoluments' => 'getDirectorsEmoluments',
        'audit_fees' => 'getAuditFees',
        'bank_overdraft_and_long_term_loans' => 'getBankOverdraftAndLongTermLoans',
        'net_cash_flow_from_operations' => 'getNetCashFlowFromOperations',
        'net_cash_flow_before_financing' => 'getNetCashFlowBeforeFinancing',
        'net_cash_flow_from_financing' => 'getNetCashFlowFromFinancing',
        'increase_in_cash' => 'getIncreaseInCash',
        'debtor_days' => 'getDebtorDays',
        'exports' => 'getExports',
        'gross_margin_percentage' => 'getGrossMarginPercentage',
        'operating_profit_margin_percentage' => 'getOperatingProfitMarginPercentage',
        'ebitda_margin_percentage' => 'getEbitdaMarginPercentage',
        'pre_tax_profit_margin_percentage' => 'getPreTaxProfitMarginPercentage',
        'net_margin_percentage' => 'getNetMarginPercentage',
        'return_on_assets_percentage' => 'getReturnOnAssetsPercentage',
        'return_on_capital_employed_percentage' => 'getReturnOnCapitalEmployedPercentage',
        'return_on_equity' => 'getReturnOnEquity',
        'current_ratio' => 'getCurrentRatio',
        'cash_to_current_liabilities_ratio' => 'getCashToCurrentLiabilitiesRatio',
        'cash_to_total_assets_percentage' => 'getCashToTotalAssetsPercentage',
        'liquidity_ratio' => 'getLiquidityRatio',
        'gearing_percentage_on_liability_basis' => 'getGearingPercentageOnLiabilityBasis',
        'gearing_percentage_on_gross_debt_basis' => 'getGearingPercentageOnGrossDebtBasis',
        'gearing_percentage_on_net_debt_basis' => 'getGearingPercentageOnNetDebtBasis',
        'debt_to_capital_percentage' => 'getDebtToCapitalPercentage',
        'inventory_turnover_ratio' => 'getInventoryTurnoverRatio',
        'cash_to_turnover_ratio' => 'getCashToTurnoverRatio',
        'cash_to_turnover_percentage' => 'getCashToTurnoverPercentage',
        'days_inventory_outstanding' => 'getDaysInventoryOutstanding',
        'days_sales_outstanding' => 'getDaysSalesOutstanding',
        'days_payable_outstanding' => 'getDaysPayableOutstanding',
        'cash_conversion_cycle' => 'getCashConversionCycle',
        'revenue_per_employee' => 'getRevenuePerEmployee',
        'human_capital_value_added' => 'getHumanCapitalValueAdded',
        'interest_coverage_ratio' => 'getInterestCoverageRatio',
        'net_debt_to_ebitda_ratio' => 'getNetDebtToEbitdaRatio',
        'cfo_to_sales_ratio' => 'getCfoToSalesRatio',
        'auditor' => 'getAuditor',
        'joint_auditor' => 'getJointAuditor',
        'solicitor' => 'getSolicitor',
        'accountant' => 'getAccountant'
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
        $this->container['accounts_date'] = isset($data['accounts_date']) ? $data['accounts_date'] : null;
        $this->container['reporting_period'] = isset($data['reporting_period']) ? $data['reporting_period'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['consolidated_accounts'] = isset($data['consolidated_accounts']) ? $data['consolidated_accounts'] : null;
        $this->container['audit_qualification'] = isset($data['audit_qualification']) ? $data['audit_qualification'] : null;
        $this->container['number_of_employees'] = isset($data['number_of_employees']) ? $data['number_of_employees'] : null;
        $this->container['turnover'] = isset($data['turnover']) ? $data['turnover'] : null;
        $this->container['cost_of_sales'] = isset($data['cost_of_sales']) ? $data['cost_of_sales'] : null;
        $this->container['sga_plus_other_net_costs'] = isset($data['sga_plus_other_net_costs']) ? $data['sga_plus_other_net_costs'] : null;
        $this->container['operating_profit'] = isset($data['operating_profit']) ? $data['operating_profit'] : null;
        $this->container['interest_receivable'] = isset($data['interest_receivable']) ? $data['interest_receivable'] : null;
        $this->container['interest_payable'] = isset($data['interest_payable']) ? $data['interest_payable'] : null;
        $this->container['pre_tax_profit'] = isset($data['pre_tax_profit']) ? $data['pre_tax_profit'] : null;
        $this->container['taxation'] = isset($data['taxation']) ? $data['taxation'] : null;
        $this->container['post_tax_profit'] = isset($data['post_tax_profit']) ? $data['post_tax_profit'] : null;
        $this->container['dividends_payable'] = isset($data['dividends_payable']) ? $data['dividends_payable'] : null;
        $this->container['retained_profits'] = isset($data['retained_profits']) ? $data['retained_profits'] : null;
        $this->container['intangible_assets'] = isset($data['intangible_assets']) ? $data['intangible_assets'] : null;
        $this->container['tangible_assets'] = isset($data['tangible_assets']) ? $data['tangible_assets'] : null;
        $this->container['investments_and_other_assets'] = isset($data['investments_and_other_assets']) ? $data['investments_and_other_assets'] : null;
        $this->container['fixed_assets'] = isset($data['fixed_assets']) ? $data['fixed_assets'] : null;
        $this->container['stock'] = isset($data['stock']) ? $data['stock'] : null;
        $this->container['trade_debtors'] = isset($data['trade_debtors']) ? $data['trade_debtors'] : null;
        $this->container['other_debtors'] = isset($data['other_debtors']) ? $data['other_debtors'] : null;
        $this->container['miscellaneous_current_assets'] = isset($data['miscellaneous_current_assets']) ? $data['miscellaneous_current_assets'] : null;
        $this->container['cash'] = isset($data['cash']) ? $data['cash'] : null;
        $this->container['current_assets'] = isset($data['current_assets']) ? $data['current_assets'] : null;
        $this->container['total_assets'] = isset($data['total_assets']) ? $data['total_assets'] : null;
        $this->container['bank_loans_and_overdrafts'] = isset($data['bank_loans_and_overdrafts']) ? $data['bank_loans_and_overdrafts'] : null;
        $this->container['trade_creditors'] = isset($data['trade_creditors']) ? $data['trade_creditors'] : null;
        $this->container['miscellaneous_current_liabilities'] = isset($data['miscellaneous_current_liabilities']) ? $data['miscellaneous_current_liabilities'] : null;
        $this->container['other_short_term_finances'] = isset($data['other_short_term_finances']) ? $data['other_short_term_finances'] : null;
        $this->container['current_liabilities'] = isset($data['current_liabilities']) ? $data['current_liabilities'] : null;
        $this->container['contingent_liabilities'] = isset($data['contingent_liabilities']) ? $data['contingent_liabilities'] : null;
        $this->container['other_long_term_finances'] = isset($data['other_long_term_finances']) ? $data['other_long_term_finances'] : null;
        $this->container['total_long_term_liabilities'] = isset($data['total_long_term_liabilities']) ? $data['total_long_term_liabilities'] : null;
        $this->container['total_liabilities'] = isset($data['total_liabilities']) ? $data['total_liabilities'] : null;
        $this->container['net_assets'] = isset($data['net_assets']) ? $data['net_assets'] : null;
        $this->container['equity_paid_up'] = isset($data['equity_paid_up']) ? $data['equity_paid_up'] : null;
        $this->container['revaluation_reserve'] = isset($data['revaluation_reserve']) ? $data['revaluation_reserve'] : null;
        $this->container['sundry_reserves'] = isset($data['sundry_reserves']) ? $data['sundry_reserves'] : null;
        $this->container['profit_and_loss_account_reserve'] = isset($data['profit_and_loss_account_reserve']) ? $data['profit_and_loss_account_reserve'] : null;
        $this->container['shareholder_funds'] = isset($data['shareholder_funds']) ? $data['shareholder_funds'] : null;
        $this->container['depreciation'] = isset($data['depreciation']) ? $data['depreciation'] : null;
        $this->container['amortisation_of_intangibles'] = isset($data['amortisation_of_intangibles']) ? $data['amortisation_of_intangibles'] : null;
        $this->container['ebitda'] = isset($data['ebitda']) ? $data['ebitda'] : null;
        $this->container['working_capital'] = isset($data['working_capital']) ? $data['working_capital'] : null;
        $this->container['capital_employed'] = isset($data['capital_employed']) ? $data['capital_employed'] : null;
        $this->container['wages_and_salaries'] = isset($data['wages_and_salaries']) ? $data['wages_and_salaries'] : null;
        $this->container['directors_emoluments'] = isset($data['directors_emoluments']) ? $data['directors_emoluments'] : null;
        $this->container['audit_fees'] = isset($data['audit_fees']) ? $data['audit_fees'] : null;
        $this->container['bank_overdraft_and_long_term_loans'] = isset($data['bank_overdraft_and_long_term_loans']) ? $data['bank_overdraft_and_long_term_loans'] : null;
        $this->container['net_cash_flow_from_operations'] = isset($data['net_cash_flow_from_operations']) ? $data['net_cash_flow_from_operations'] : null;
        $this->container['net_cash_flow_before_financing'] = isset($data['net_cash_flow_before_financing']) ? $data['net_cash_flow_before_financing'] : null;
        $this->container['net_cash_flow_from_financing'] = isset($data['net_cash_flow_from_financing']) ? $data['net_cash_flow_from_financing'] : null;
        $this->container['increase_in_cash'] = isset($data['increase_in_cash']) ? $data['increase_in_cash'] : null;
        $this->container['debtor_days'] = isset($data['debtor_days']) ? $data['debtor_days'] : null;
        $this->container['exports'] = isset($data['exports']) ? $data['exports'] : null;
        $this->container['gross_margin_percentage'] = isset($data['gross_margin_percentage']) ? $data['gross_margin_percentage'] : null;
        $this->container['operating_profit_margin_percentage'] = isset($data['operating_profit_margin_percentage']) ? $data['operating_profit_margin_percentage'] : null;
        $this->container['ebitda_margin_percentage'] = isset($data['ebitda_margin_percentage']) ? $data['ebitda_margin_percentage'] : null;
        $this->container['pre_tax_profit_margin_percentage'] = isset($data['pre_tax_profit_margin_percentage']) ? $data['pre_tax_profit_margin_percentage'] : null;
        $this->container['net_margin_percentage'] = isset($data['net_margin_percentage']) ? $data['net_margin_percentage'] : null;
        $this->container['return_on_assets_percentage'] = isset($data['return_on_assets_percentage']) ? $data['return_on_assets_percentage'] : null;
        $this->container['return_on_capital_employed_percentage'] = isset($data['return_on_capital_employed_percentage']) ? $data['return_on_capital_employed_percentage'] : null;
        $this->container['return_on_equity'] = isset($data['return_on_equity']) ? $data['return_on_equity'] : null;
        $this->container['current_ratio'] = isset($data['current_ratio']) ? $data['current_ratio'] : null;
        $this->container['cash_to_current_liabilities_ratio'] = isset($data['cash_to_current_liabilities_ratio']) ? $data['cash_to_current_liabilities_ratio'] : null;
        $this->container['cash_to_total_assets_percentage'] = isset($data['cash_to_total_assets_percentage']) ? $data['cash_to_total_assets_percentage'] : null;
        $this->container['liquidity_ratio'] = isset($data['liquidity_ratio']) ? $data['liquidity_ratio'] : null;
        $this->container['gearing_percentage_on_liability_basis'] = isset($data['gearing_percentage_on_liability_basis']) ? $data['gearing_percentage_on_liability_basis'] : null;
        $this->container['gearing_percentage_on_gross_debt_basis'] = isset($data['gearing_percentage_on_gross_debt_basis']) ? $data['gearing_percentage_on_gross_debt_basis'] : null;
        $this->container['gearing_percentage_on_net_debt_basis'] = isset($data['gearing_percentage_on_net_debt_basis']) ? $data['gearing_percentage_on_net_debt_basis'] : null;
        $this->container['debt_to_capital_percentage'] = isset($data['debt_to_capital_percentage']) ? $data['debt_to_capital_percentage'] : null;
        $this->container['inventory_turnover_ratio'] = isset($data['inventory_turnover_ratio']) ? $data['inventory_turnover_ratio'] : null;
        $this->container['cash_to_turnover_ratio'] = isset($data['cash_to_turnover_ratio']) ? $data['cash_to_turnover_ratio'] : null;
        $this->container['cash_to_turnover_percentage'] = isset($data['cash_to_turnover_percentage']) ? $data['cash_to_turnover_percentage'] : null;
        $this->container['days_inventory_outstanding'] = isset($data['days_inventory_outstanding']) ? $data['days_inventory_outstanding'] : null;
        $this->container['days_sales_outstanding'] = isset($data['days_sales_outstanding']) ? $data['days_sales_outstanding'] : null;
        $this->container['days_payable_outstanding'] = isset($data['days_payable_outstanding']) ? $data['days_payable_outstanding'] : null;
        $this->container['cash_conversion_cycle'] = isset($data['cash_conversion_cycle']) ? $data['cash_conversion_cycle'] : null;
        $this->container['revenue_per_employee'] = isset($data['revenue_per_employee']) ? $data['revenue_per_employee'] : null;
        $this->container['human_capital_value_added'] = isset($data['human_capital_value_added']) ? $data['human_capital_value_added'] : null;
        $this->container['interest_coverage_ratio'] = isset($data['interest_coverage_ratio']) ? $data['interest_coverage_ratio'] : null;
        $this->container['net_debt_to_ebitda_ratio'] = isset($data['net_debt_to_ebitda_ratio']) ? $data['net_debt_to_ebitda_ratio'] : null;
        $this->container['cfo_to_sales_ratio'] = isset($data['cfo_to_sales_ratio']) ? $data['cfo_to_sales_ratio'] : null;
        $this->container['auditor'] = isset($data['auditor']) ? $data['auditor'] : null;
        $this->container['joint_auditor'] = isset($data['joint_auditor']) ? $data['joint_auditor'] : null;
        $this->container['solicitor'] = isset($data['solicitor']) ? $data['solicitor'] : null;
        $this->container['accountant'] = isset($data['accountant']) ? $data['accountant'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accounts_date'] === null) {
            $invalidProperties[] = "'accounts_date' can't be null";
        }
        if ($this->container['reporting_period'] === null) {
            $invalidProperties[] = "'reporting_period' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['consolidated_accounts'] === null) {
            $invalidProperties[] = "'consolidated_accounts' can't be null";
        }
        if ($this->container['audit_qualification'] === null) {
            $invalidProperties[] = "'audit_qualification' can't be null";
        }
        if ($this->container['number_of_employees'] === null) {
            $invalidProperties[] = "'number_of_employees' can't be null";
        }
        if ($this->container['turnover'] === null) {
            $invalidProperties[] = "'turnover' can't be null";
        }
        if ($this->container['cost_of_sales'] === null) {
            $invalidProperties[] = "'cost_of_sales' can't be null";
        }
        if ($this->container['sga_plus_other_net_costs'] === null) {
            $invalidProperties[] = "'sga_plus_other_net_costs' can't be null";
        }
        if ($this->container['operating_profit'] === null) {
            $invalidProperties[] = "'operating_profit' can't be null";
        }
        if ($this->container['interest_receivable'] === null) {
            $invalidProperties[] = "'interest_receivable' can't be null";
        }
        if ($this->container['interest_payable'] === null) {
            $invalidProperties[] = "'interest_payable' can't be null";
        }
        if ($this->container['pre_tax_profit'] === null) {
            $invalidProperties[] = "'pre_tax_profit' can't be null";
        }
        if ($this->container['taxation'] === null) {
            $invalidProperties[] = "'taxation' can't be null";
        }
        if ($this->container['post_tax_profit'] === null) {
            $invalidProperties[] = "'post_tax_profit' can't be null";
        }
        if ($this->container['dividends_payable'] === null) {
            $invalidProperties[] = "'dividends_payable' can't be null";
        }
        if ($this->container['retained_profits'] === null) {
            $invalidProperties[] = "'retained_profits' can't be null";
        }
        if ($this->container['intangible_assets'] === null) {
            $invalidProperties[] = "'intangible_assets' can't be null";
        }
        if ($this->container['tangible_assets'] === null) {
            $invalidProperties[] = "'tangible_assets' can't be null";
        }
        if ($this->container['investments_and_other_assets'] === null) {
            $invalidProperties[] = "'investments_and_other_assets' can't be null";
        }
        if ($this->container['fixed_assets'] === null) {
            $invalidProperties[] = "'fixed_assets' can't be null";
        }
        if ($this->container['stock'] === null) {
            $invalidProperties[] = "'stock' can't be null";
        }
        if ($this->container['trade_debtors'] === null) {
            $invalidProperties[] = "'trade_debtors' can't be null";
        }
        if ($this->container['other_debtors'] === null) {
            $invalidProperties[] = "'other_debtors' can't be null";
        }
        if ($this->container['miscellaneous_current_assets'] === null) {
            $invalidProperties[] = "'miscellaneous_current_assets' can't be null";
        }
        if ($this->container['cash'] === null) {
            $invalidProperties[] = "'cash' can't be null";
        }
        if ($this->container['current_assets'] === null) {
            $invalidProperties[] = "'current_assets' can't be null";
        }
        if ($this->container['total_assets'] === null) {
            $invalidProperties[] = "'total_assets' can't be null";
        }
        if ($this->container['bank_loans_and_overdrafts'] === null) {
            $invalidProperties[] = "'bank_loans_and_overdrafts' can't be null";
        }
        if ($this->container['trade_creditors'] === null) {
            $invalidProperties[] = "'trade_creditors' can't be null";
        }
        if ($this->container['miscellaneous_current_liabilities'] === null) {
            $invalidProperties[] = "'miscellaneous_current_liabilities' can't be null";
        }
        if ($this->container['other_short_term_finances'] === null) {
            $invalidProperties[] = "'other_short_term_finances' can't be null";
        }
        if ($this->container['current_liabilities'] === null) {
            $invalidProperties[] = "'current_liabilities' can't be null";
        }
        if ($this->container['contingent_liabilities'] === null) {
            $invalidProperties[] = "'contingent_liabilities' can't be null";
        }
        if ($this->container['other_long_term_finances'] === null) {
            $invalidProperties[] = "'other_long_term_finances' can't be null";
        }
        if ($this->container['total_long_term_liabilities'] === null) {
            $invalidProperties[] = "'total_long_term_liabilities' can't be null";
        }
        if ($this->container['total_liabilities'] === null) {
            $invalidProperties[] = "'total_liabilities' can't be null";
        }
        if ($this->container['net_assets'] === null) {
            $invalidProperties[] = "'net_assets' can't be null";
        }
        if ($this->container['equity_paid_up'] === null) {
            $invalidProperties[] = "'equity_paid_up' can't be null";
        }
        if ($this->container['revaluation_reserve'] === null) {
            $invalidProperties[] = "'revaluation_reserve' can't be null";
        }
        if ($this->container['sundry_reserves'] === null) {
            $invalidProperties[] = "'sundry_reserves' can't be null";
        }
        if ($this->container['profit_and_loss_account_reserve'] === null) {
            $invalidProperties[] = "'profit_and_loss_account_reserve' can't be null";
        }
        if ($this->container['shareholder_funds'] === null) {
            $invalidProperties[] = "'shareholder_funds' can't be null";
        }
        if ($this->container['depreciation'] === null) {
            $invalidProperties[] = "'depreciation' can't be null";
        }
        if ($this->container['amortisation_of_intangibles'] === null) {
            $invalidProperties[] = "'amortisation_of_intangibles' can't be null";
        }
        if ($this->container['ebitda'] === null) {
            $invalidProperties[] = "'ebitda' can't be null";
        }
        if ($this->container['working_capital'] === null) {
            $invalidProperties[] = "'working_capital' can't be null";
        }
        if ($this->container['capital_employed'] === null) {
            $invalidProperties[] = "'capital_employed' can't be null";
        }
        if ($this->container['wages_and_salaries'] === null) {
            $invalidProperties[] = "'wages_and_salaries' can't be null";
        }
        if ($this->container['directors_emoluments'] === null) {
            $invalidProperties[] = "'directors_emoluments' can't be null";
        }
        if ($this->container['audit_fees'] === null) {
            $invalidProperties[] = "'audit_fees' can't be null";
        }
        if ($this->container['bank_overdraft_and_long_term_loans'] === null) {
            $invalidProperties[] = "'bank_overdraft_and_long_term_loans' can't be null";
        }
        if ($this->container['net_cash_flow_from_operations'] === null) {
            $invalidProperties[] = "'net_cash_flow_from_operations' can't be null";
        }
        if ($this->container['net_cash_flow_before_financing'] === null) {
            $invalidProperties[] = "'net_cash_flow_before_financing' can't be null";
        }
        if ($this->container['net_cash_flow_from_financing'] === null) {
            $invalidProperties[] = "'net_cash_flow_from_financing' can't be null";
        }
        if ($this->container['increase_in_cash'] === null) {
            $invalidProperties[] = "'increase_in_cash' can't be null";
        }
        if ($this->container['debtor_days'] === null) {
            $invalidProperties[] = "'debtor_days' can't be null";
        }
        if ($this->container['exports'] === null) {
            $invalidProperties[] = "'exports' can't be null";
        }
        if ($this->container['gross_margin_percentage'] === null) {
            $invalidProperties[] = "'gross_margin_percentage' can't be null";
        }
        if ($this->container['operating_profit_margin_percentage'] === null) {
            $invalidProperties[] = "'operating_profit_margin_percentage' can't be null";
        }
        if ($this->container['ebitda_margin_percentage'] === null) {
            $invalidProperties[] = "'ebitda_margin_percentage' can't be null";
        }
        if ($this->container['pre_tax_profit_margin_percentage'] === null) {
            $invalidProperties[] = "'pre_tax_profit_margin_percentage' can't be null";
        }
        if ($this->container['net_margin_percentage'] === null) {
            $invalidProperties[] = "'net_margin_percentage' can't be null";
        }
        if ($this->container['return_on_assets_percentage'] === null) {
            $invalidProperties[] = "'return_on_assets_percentage' can't be null";
        }
        if ($this->container['return_on_capital_employed_percentage'] === null) {
            $invalidProperties[] = "'return_on_capital_employed_percentage' can't be null";
        }
        if ($this->container['return_on_equity'] === null) {
            $invalidProperties[] = "'return_on_equity' can't be null";
        }
        if ($this->container['current_ratio'] === null) {
            $invalidProperties[] = "'current_ratio' can't be null";
        }
        if ($this->container['cash_to_current_liabilities_ratio'] === null) {
            $invalidProperties[] = "'cash_to_current_liabilities_ratio' can't be null";
        }
        if ($this->container['cash_to_total_assets_percentage'] === null) {
            $invalidProperties[] = "'cash_to_total_assets_percentage' can't be null";
        }
        if ($this->container['liquidity_ratio'] === null) {
            $invalidProperties[] = "'liquidity_ratio' can't be null";
        }
        if ($this->container['gearing_percentage_on_liability_basis'] === null) {
            $invalidProperties[] = "'gearing_percentage_on_liability_basis' can't be null";
        }
        if ($this->container['gearing_percentage_on_gross_debt_basis'] === null) {
            $invalidProperties[] = "'gearing_percentage_on_gross_debt_basis' can't be null";
        }
        if ($this->container['gearing_percentage_on_net_debt_basis'] === null) {
            $invalidProperties[] = "'gearing_percentage_on_net_debt_basis' can't be null";
        }
        if ($this->container['debt_to_capital_percentage'] === null) {
            $invalidProperties[] = "'debt_to_capital_percentage' can't be null";
        }
        if ($this->container['inventory_turnover_ratio'] === null) {
            $invalidProperties[] = "'inventory_turnover_ratio' can't be null";
        }
        if ($this->container['cash_to_turnover_percentage'] === null) {
            $invalidProperties[] = "'cash_to_turnover_percentage' can't be null";
        }
        if ($this->container['days_inventory_outstanding'] === null) {
            $invalidProperties[] = "'days_inventory_outstanding' can't be null";
        }
        if ($this->container['days_sales_outstanding'] === null) {
            $invalidProperties[] = "'days_sales_outstanding' can't be null";
        }
        if ($this->container['days_payable_outstanding'] === null) {
            $invalidProperties[] = "'days_payable_outstanding' can't be null";
        }
        if ($this->container['cash_conversion_cycle'] === null) {
            $invalidProperties[] = "'cash_conversion_cycle' can't be null";
        }
        if ($this->container['revenue_per_employee'] === null) {
            $invalidProperties[] = "'revenue_per_employee' can't be null";
        }
        if ($this->container['human_capital_value_added'] === null) {
            $invalidProperties[] = "'human_capital_value_added' can't be null";
        }
        if ($this->container['interest_coverage_ratio'] === null) {
            $invalidProperties[] = "'interest_coverage_ratio' can't be null";
        }
        if ($this->container['net_debt_to_ebitda_ratio'] === null) {
            $invalidProperties[] = "'net_debt_to_ebitda_ratio' can't be null";
        }
        if ($this->container['cfo_to_sales_ratio'] === null) {
            $invalidProperties[] = "'cfo_to_sales_ratio' can't be null";
        }
        if ($this->container['auditor'] === null) {
            $invalidProperties[] = "'auditor' can't be null";
        }
        if ($this->container['joint_auditor'] === null) {
            $invalidProperties[] = "'joint_auditor' can't be null";
        }
        if ($this->container['solicitor'] === null) {
            $invalidProperties[] = "'solicitor' can't be null";
        }
        if ($this->container['accountant'] === null) {
            $invalidProperties[] = "'accountant' can't be null";
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
     * Gets accounts_date
     *
     * @return \DateTime
     */
    public function getAccountsDate()
    {
        return $this->container['accounts_date'];
    }

    /**
     * Sets accounts_date
     *
     * @param \DateTime $accounts_date accounts_date
     *
     * @return $this
     */
    public function setAccountsDate($accounts_date)
    {
        $this->container['accounts_date'] = $accounts_date;

        return $this;
    }

    /**
     * Gets reporting_period
     *
     * @return int
     */
    public function getReportingPeriod()
    {
        return $this->container['reporting_period'];
    }

    /**
     * Sets reporting_period
     *
     * @param int $reporting_period reporting_period
     *
     * @return $this
     */
    public function setReportingPeriod($reporting_period)
    {
        $this->container['reporting_period'] = $reporting_period;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets consolidated_accounts
     *
     * @return bool
     */
    public function getConsolidatedAccounts()
    {
        return $this->container['consolidated_accounts'];
    }

    /**
     * Sets consolidated_accounts
     *
     * @param bool $consolidated_accounts consolidated_accounts
     *
     * @return $this
     */
    public function setConsolidatedAccounts($consolidated_accounts)
    {
        $this->container['consolidated_accounts'] = $consolidated_accounts;

        return $this;
    }

    /**
     * Gets audit_qualification
     *
     * @return string
     */
    public function getAuditQualification()
    {
        return $this->container['audit_qualification'];
    }

    /**
     * Sets audit_qualification
     *
     * @param string $audit_qualification audit_qualification
     *
     * @return $this
     */
    public function setAuditQualification($audit_qualification)
    {
        $this->container['audit_qualification'] = $audit_qualification;

        return $this;
    }

    /**
     * Gets number_of_employees
     *
     * @return object
     */
    public function getNumberOfEmployees()
    {
        return $this->container['number_of_employees'];
    }

    /**
     * Sets number_of_employees
     *
     * @param object $number_of_employees number_of_employees
     *
     * @return $this
     */
    public function setNumberOfEmployees($number_of_employees)
    {
        $this->container['number_of_employees'] = $number_of_employees;

        return $this;
    }

    /**
     * Gets turnover
     *
     * @return object
     */
    public function getTurnover()
    {
        return $this->container['turnover'];
    }

    /**
     * Sets turnover
     *
     * @param object $turnover Revenue generated from business activities
     *
     * @return $this
     */
    public function setTurnover($turnover)
    {
        $this->container['turnover'] = $turnover;

        return $this;
    }

    /**
     * Gets cost_of_sales
     *
     * @return object
     */
    public function getCostOfSales()
    {
        return $this->container['cost_of_sales'];
    }

    /**
     * Sets cost_of_sales
     *
     * @param object $cost_of_sales Direct costs to the business of generating the Turnover
     *
     * @return $this
     */
    public function setCostOfSales($cost_of_sales)
    {
        $this->container['cost_of_sales'] = $cost_of_sales;

        return $this;
    }

    /**
     * Gets sga_plus_other_net_costs
     *
     * @return object
     */
    public function getSgaPlusOtherNetCosts()
    {
        return $this->container['sga_plus_other_net_costs'];
    }

    /**
     * Sets sga_plus_other_net_costs
     *
     * @param object $sga_plus_other_net_costs Selling, general, administrative and other non-production costs of operating the business
     *
     * @return $this
     */
    public function setSgaPlusOtherNetCosts($sga_plus_other_net_costs)
    {
        $this->container['sga_plus_other_net_costs'] = $sga_plus_other_net_costs;

        return $this;
    }

    /**
     * Gets operating_profit
     *
     * @return object
     */
    public function getOperatingProfit()
    {
        return $this->container['operating_profit'];
    }

    /**
     * Sets operating_profit
     *
     * @param object $operating_profit Profit generated from principal trading activities, calculated by subtracting operating expenses from Gross Profit
     *
     * @return $this
     */
    public function setOperatingProfit($operating_profit)
    {
        $this->container['operating_profit'] = $operating_profit;

        return $this;
    }

    /**
     * Gets interest_receivable
     *
     * @return object
     */
    public function getInterestReceivable()
    {
        return $this->container['interest_receivable'];
    }

    /**
     * Sets interest_receivable
     *
     * @param object $interest_receivable interest_receivable
     *
     * @return $this
     */
    public function setInterestReceivable($interest_receivable)
    {
        $this->container['interest_receivable'] = $interest_receivable;

        return $this;
    }

    /**
     * Gets interest_payable
     *
     * @return object
     */
    public function getInterestPayable()
    {
        return $this->container['interest_payable'];
    }

    /**
     * Sets interest_payable
     *
     * @param object $interest_payable interest_payable
     *
     * @return $this
     */
    public function setInterestPayable($interest_payable)
    {
        $this->container['interest_payable'] = $interest_payable;

        return $this;
    }

    /**
     * Gets pre_tax_profit
     *
     * @return object
     */
    public function getPreTaxProfit()
    {
        return $this->container['pre_tax_profit'];
    }

    /**
     * Sets pre_tax_profit
     *
     * @param object $pre_tax_profit Profit generated before taxation
     *
     * @return $this
     */
    public function setPreTaxProfit($pre_tax_profit)
    {
        $this->container['pre_tax_profit'] = $pre_tax_profit;

        return $this;
    }

    /**
     * Gets taxation
     *
     * @return object
     */
    public function getTaxation()
    {
        return $this->container['taxation'];
    }

    /**
     * Sets taxation
     *
     * @param object $taxation A negative number indicates a tax charge to the business
     *
     * @return $this
     */
    public function setTaxation($taxation)
    {
        $this->container['taxation'] = $taxation;

        return $this;
    }

    /**
     * Gets post_tax_profit
     *
     * @return object
     */
    public function getPostTaxProfit()
    {
        return $this->container['post_tax_profit'];
    }

    /**
     * Sets post_tax_profit
     *
     * @param object $post_tax_profit Profit generated after taxation
     *
     * @return $this
     */
    public function setPostTaxProfit($post_tax_profit)
    {
        $this->container['post_tax_profit'] = $post_tax_profit;

        return $this;
    }

    /**
     * Gets dividends_payable
     *
     * @return object
     */
    public function getDividendsPayable()
    {
        return $this->container['dividends_payable'];
    }

    /**
     * Sets dividends_payable
     *
     * @param object $dividends_payable Profit distributed to shareholders
     *
     * @return $this
     */
    public function setDividendsPayable($dividends_payable)
    {
        $this->container['dividends_payable'] = $dividends_payable;

        return $this;
    }

    /**
     * Gets retained_profits
     *
     * @return object
     */
    public function getRetainedProfits()
    {
        return $this->container['retained_profits'];
    }

    /**
     * Sets retained_profits
     *
     * @param object $retained_profits Undistributed profits retained within the business
     *
     * @return $this
     */
    public function setRetainedProfits($retained_profits)
    {
        $this->container['retained_profits'] = $retained_profits;

        return $this;
    }

    /**
     * Gets intangible_assets
     *
     * @return object
     */
    public function getIntangibleAssets()
    {
        return $this->container['intangible_assets'];
    }

    /**
     * Sets intangible_assets
     *
     * @param object $intangible_assets A company's fixed assets that have no physical presence, such as copyrights, patents, and brand names
     *
     * @return $this
     */
    public function setIntangibleAssets($intangible_assets)
    {
        $this->container['intangible_assets'] = $intangible_assets;

        return $this;
    }

    /**
     * Gets tangible_assets
     *
     * @return object
     */
    public function getTangibleAssets()
    {
        return $this->container['tangible_assets'];
    }

    /**
     * Sets tangible_assets
     *
     * @param object $tangible_assets A company's fixed assets that have a physical presence, such as property and machinery
     *
     * @return $this
     */
    public function setTangibleAssets($tangible_assets)
    {
        $this->container['tangible_assets'] = $tangible_assets;

        return $this;
    }

    /**
     * Gets investments_and_other_assets
     *
     * @return object
     */
    public function getInvestmentsAndOtherAssets()
    {
        return $this->container['investments_and_other_assets'];
    }

    /**
     * Sets investments_and_other_assets
     *
     * @param object $investments_and_other_assets Investment and other assets held by a company
     *
     * @return $this
     */
    public function setInvestmentsAndOtherAssets($investments_and_other_assets)
    {
        $this->container['investments_and_other_assets'] = $investments_and_other_assets;

        return $this;
    }

    /**
     * Gets fixed_assets
     *
     * @return object
     */
    public function getFixedAssets()
    {
        return $this->container['fixed_assets'];
    }

    /**
     * Sets fixed_assets
     *
     * @param object $fixed_assets The sum of Tangible Assets, Intangible Assets and Investments
     *
     * @return $this
     */
    public function setFixedAssets($fixed_assets)
    {
        $this->container['fixed_assets'] = $fixed_assets;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return object
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param object $stock Goods for resale
     *
     * @return $this
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets trade_debtors
     *
     * @return object
     */
    public function getTradeDebtors()
    {
        return $this->container['trade_debtors'];
    }

    /**
     * Sets trade_debtors
     *
     * @param object $trade_debtors Amounts owed by customers
     *
     * @return $this
     */
    public function setTradeDebtors($trade_debtors)
    {
        $this->container['trade_debtors'] = $trade_debtors;

        return $this;
    }

    /**
     * Gets other_debtors
     *
     * @return object
     */
    public function getOtherDebtors()
    {
        return $this->container['other_debtors'];
    }

    /**
     * Sets other_debtors
     *
     * @param object $other_debtors Amounts owed by other sources
     *
     * @return $this
     */
    public function setOtherDebtors($other_debtors)
    {
        $this->container['other_debtors'] = $other_debtors;

        return $this;
    }

    /**
     * Gets miscellaneous_current_assets
     *
     * @return object
     */
    public function getMiscellaneousCurrentAssets()
    {
        return $this->container['miscellaneous_current_assets'];
    }

    /**
     * Sets miscellaneous_current_assets
     *
     * @param object $miscellaneous_current_assets Unspecified assets due within one year of the accounts date
     *
     * @return $this
     */
    public function setMiscellaneousCurrentAssets($miscellaneous_current_assets)
    {
        $this->container['miscellaneous_current_assets'] = $miscellaneous_current_assets;

        return $this;
    }

    /**
     * Gets cash
     *
     * @return object
     */
    public function getCash()
    {
        return $this->container['cash'];
    }

    /**
     * Sets cash
     *
     * @param object $cash Cash in hand and in the bank
     *
     * @return $this
     */
    public function setCash($cash)
    {
        $this->container['cash'] = $cash;

        return $this;
    }

    /**
     * Gets current_assets
     *
     * @return object
     */
    public function getCurrentAssets()
    {
        return $this->container['current_assets'];
    }

    /**
     * Sets current_assets
     *
     * @param object $current_assets The sum of Stock, Trade Debtors, Cash and other assets due within one year of the accounts date
     *
     * @return $this
     */
    public function setCurrentAssets($current_assets)
    {
        $this->container['current_assets'] = $current_assets;

        return $this;
    }

    /**
     * Gets total_assets
     *
     * @return object
     */
    public function getTotalAssets()
    {
        return $this->container['total_assets'];
    }

    /**
     * Sets total_assets
     *
     * @param object $total_assets The value of all assets on the Balance Sheet
     *
     * @return $this
     */
    public function setTotalAssets($total_assets)
    {
        $this->container['total_assets'] = $total_assets;

        return $this;
    }

    /**
     * Gets bank_loans_and_overdrafts
     *
     * @return object
     */
    public function getBankLoansAndOverdrafts()
    {
        return $this->container['bank_loans_and_overdrafts'];
    }

    /**
     * Sets bank_loans_and_overdrafts
     *
     * @param object $bank_loans_and_overdrafts bank_loans_and_overdrafts
     *
     * @return $this
     */
    public function setBankLoansAndOverdrafts($bank_loans_and_overdrafts)
    {
        $this->container['bank_loans_and_overdrafts'] = $bank_loans_and_overdrafts;

        return $this;
    }

    /**
     * Gets trade_creditors
     *
     * @return object
     */
    public function getTradeCreditors()
    {
        return $this->container['trade_creditors'];
    }

    /**
     * Sets trade_creditors
     *
     * @param object $trade_creditors Amounts owed to suppliers
     *
     * @return $this
     */
    public function setTradeCreditors($trade_creditors)
    {
        $this->container['trade_creditors'] = $trade_creditors;

        return $this;
    }

    /**
     * Gets miscellaneous_current_liabilities
     *
     * @return object
     */
    public function getMiscellaneousCurrentLiabilities()
    {
        return $this->container['miscellaneous_current_liabilities'];
    }

    /**
     * Sets miscellaneous_current_liabilities
     *
     * @param object $miscellaneous_current_liabilities Unspecified liabilities due within one year of accounts date
     *
     * @return $this
     */
    public function setMiscellaneousCurrentLiabilities($miscellaneous_current_liabilities)
    {
        $this->container['miscellaneous_current_liabilities'] = $miscellaneous_current_liabilities;

        return $this;
    }

    /**
     * Gets other_short_term_finances
     *
     * @return object
     */
    public function getOtherShortTermFinances()
    {
        return $this->container['other_short_term_finances'];
    }

    /**
     * Sets other_short_term_finances
     *
     * @param object $other_short_term_finances Amounts owed to other sources
     *
     * @return $this
     */
    public function setOtherShortTermFinances($other_short_term_finances)
    {
        $this->container['other_short_term_finances'] = $other_short_term_finances;

        return $this;
    }

    /**
     * Gets current_liabilities
     *
     * @return object
     */
    public function getCurrentLiabilities()
    {
        return $this->container['current_liabilities'];
    }

    /**
     * Sets current_liabilities
     *
     * @param object $current_liabilities The sum of Trade Creditors and other liabilities due within one year of accounts date
     *
     * @return $this
     */
    public function setCurrentLiabilities($current_liabilities)
    {
        $this->container['current_liabilities'] = $current_liabilities;

        return $this;
    }

    /**
     * Gets contingent_liabilities
     *
     * @return object
     */
    public function getContingentLiabilities()
    {
        return $this->container['contingent_liabilities'];
    }

    /**
     * Sets contingent_liabilities
     *
     * @param object $contingent_liabilities A potential obligation dependent on the outcome of a future event
     *
     * @return $this
     */
    public function setContingentLiabilities($contingent_liabilities)
    {
        $this->container['contingent_liabilities'] = $contingent_liabilities;

        return $this;
    }

    /**
     * Gets other_long_term_finances
     *
     * @return object
     */
    public function getOtherLongTermFinances()
    {
        return $this->container['other_long_term_finances'];
    }

    /**
     * Sets other_long_term_finances
     *
     * @param object $other_long_term_finances other_long_term_finances
     *
     * @return $this
     */
    public function setOtherLongTermFinances($other_long_term_finances)
    {
        $this->container['other_long_term_finances'] = $other_long_term_finances;

        return $this;
    }

    /**
     * Gets total_long_term_liabilities
     *
     * @return object
     */
    public function getTotalLongTermLiabilities()
    {
        return $this->container['total_long_term_liabilities'];
    }

    /**
     * Sets total_long_term_liabilities
     *
     * @param object $total_long_term_liabilities The sum of liabilities due after one year of the accounts date
     *
     * @return $this
     */
    public function setTotalLongTermLiabilities($total_long_term_liabilities)
    {
        $this->container['total_long_term_liabilities'] = $total_long_term_liabilities;

        return $this;
    }

    /**
     * Gets total_liabilities
     *
     * @return object
     */
    public function getTotalLiabilities()
    {
        return $this->container['total_liabilities'];
    }

    /**
     * Sets total_liabilities
     *
     * @param object $total_liabilities The total value of all amounts owed (long term and short term)
     *
     * @return $this
     */
    public function setTotalLiabilities($total_liabilities)
    {
        $this->container['total_liabilities'] = $total_liabilities;

        return $this;
    }

    /**
     * Gets net_assets
     *
     * @return object
     */
    public function getNetAssets()
    {
        return $this->container['net_assets'];
    }

    /**
     * Sets net_assets
     *
     * @param object $net_assets Total Assets less Total Liabilities
     *
     * @return $this
     */
    public function setNetAssets($net_assets)
    {
        $this->container['net_assets'] = $net_assets;

        return $this;
    }

    /**
     * Gets equity_paid_up
     *
     * @return object
     */
    public function getEquityPaidUp()
    {
        return $this->container['equity_paid_up'];
    }

    /**
     * Sets equity_paid_up
     *
     * @param object $equity_paid_up The amount of capital that has been funded by shareholders
     *
     * @return $this
     */
    public function setEquityPaidUp($equity_paid_up)
    {
        $this->container['equity_paid_up'] = $equity_paid_up;

        return $this;
    }

    /**
     * Gets revaluation_reserve
     *
     * @return object
     */
    public function getRevaluationReserve()
    {
        return $this->container['revaluation_reserve'];
    }

    /**
     * Sets revaluation_reserve
     *
     * @param object $revaluation_reserve Used when the value of an asset becomes greater than the value at which it was previously carried on the balance sheet
     *
     * @return $this
     */
    public function setRevaluationReserve($revaluation_reserve)
    {
        $this->container['revaluation_reserve'] = $revaluation_reserve;

        return $this;
    }

    /**
     * Gets sundry_reserves
     *
     * @return object
     */
    public function getSundryReserves()
    {
        return $this->container['sundry_reserves'];
    }

    /**
     * Sets sundry_reserves
     *
     * @param object $sundry_reserves Capital reservers, Share premium account, and other company reserves
     *
     * @return $this
     */
    public function setSundryReserves($sundry_reserves)
    {
        $this->container['sundry_reserves'] = $sundry_reserves;

        return $this;
    }

    /**
     * Gets profit_and_loss_account_reserve
     *
     * @return object
     */
    public function getProfitAndLossAccountReserve()
    {
        return $this->container['profit_and_loss_account_reserve'];
    }

    /**
     * Sets profit_and_loss_account_reserve
     *
     * @param object $profit_and_loss_account_reserve The (fully distributable) balance of retained earnings to carry forward
     *
     * @return $this
     */
    public function setProfitAndLossAccountReserve($profit_and_loss_account_reserve)
    {
        $this->container['profit_and_loss_account_reserve'] = $profit_and_loss_account_reserve;

        return $this;
    }

    /**
     * Gets shareholder_funds
     *
     * @return object
     */
    public function getShareholderFunds()
    {
        return $this->container['shareholder_funds'];
    }

    /**
     * Sets shareholder_funds
     *
     * @param object $shareholder_funds Equity Payed Up plus reservers; equivalent to Net Assets
     *
     * @return $this
     */
    public function setShareholderFunds($shareholder_funds)
    {
        $this->container['shareholder_funds'] = $shareholder_funds;

        return $this;
    }

    /**
     * Gets depreciation
     *
     * @return object
     */
    public function getDepreciation()
    {
        return $this->container['depreciation'];
    }

    /**
     * Sets depreciation
     *
     * @param object $depreciation The cost associated with reducing the value of tangible fixed assets over their useful life
     *
     * @return $this
     */
    public function setDepreciation($depreciation)
    {
        $this->container['depreciation'] = $depreciation;

        return $this;
    }

    /**
     * Gets amortisation_of_intangibles
     *
     * @return object
     */
    public function getAmortisationOfIntangibles()
    {
        return $this->container['amortisation_of_intangibles'];
    }

    /**
     * Sets amortisation_of_intangibles
     *
     * @param object $amortisation_of_intangibles The cost associated with reducing the value of intangible fixed assets over their useful life
     *
     * @return $this
     */
    public function setAmortisationOfIntangibles($amortisation_of_intangibles)
    {
        $this->container['amortisation_of_intangibles'] = $amortisation_of_intangibles;

        return $this;
    }

    /**
     * Gets ebitda
     *
     * @return object
     */
    public function getEbitda()
    {
        return $this->container['ebitda'];
    }

    /**
     * Sets ebitda
     *
     * @param object $ebitda Earnings before interest, tax, depreciation and amortization
     *
     * @return $this
     */
    public function setEbitda($ebitda)
    {
        $this->container['ebitda'] = $ebitda;

        return $this;
    }

    /**
     * Gets working_capital
     *
     * @return object
     */
    public function getWorkingCapital()
    {
        return $this->container['working_capital'];
    }

    /**
     * Sets working_capital
     *
     * @param object $working_capital Current Assets less Current Liabilities
     *
     * @return $this
     */
    public function setWorkingCapital($working_capital)
    {
        $this->container['working_capital'] = $working_capital;

        return $this;
    }

    /**
     * Gets capital_employed
     *
     * @return object
     */
    public function getCapitalEmployed()
    {
        return $this->container['capital_employed'];
    }

    /**
     * Sets capital_employed
     *
     * @param object $capital_employed Total Assets less Current Liabilities; equivalent to Fixed Assets plus Working Capital
     *
     * @return $this
     */
    public function setCapitalEmployed($capital_employed)
    {
        $this->container['capital_employed'] = $capital_employed;

        return $this;
    }

    /**
     * Gets wages_and_salaries
     *
     * @return object
     */
    public function getWagesAndSalaries()
    {
        return $this->container['wages_and_salaries'];
    }

    /**
     * Sets wages_and_salaries
     *
     * @param object $wages_and_salaries wages_and_salaries
     *
     * @return $this
     */
    public function setWagesAndSalaries($wages_and_salaries)
    {
        $this->container['wages_and_salaries'] = $wages_and_salaries;

        return $this;
    }

    /**
     * Gets directors_emoluments
     *
     * @return object
     */
    public function getDirectorsEmoluments()
    {
        return $this->container['directors_emoluments'];
    }

    /**
     * Sets directors_emoluments
     *
     * @param object $directors_emoluments directors_emoluments
     *
     * @return $this
     */
    public function setDirectorsEmoluments($directors_emoluments)
    {
        $this->container['directors_emoluments'] = $directors_emoluments;

        return $this;
    }

    /**
     * Gets audit_fees
     *
     * @return object
     */
    public function getAuditFees()
    {
        return $this->container['audit_fees'];
    }

    /**
     * Sets audit_fees
     *
     * @param object $audit_fees audit_fees
     *
     * @return $this
     */
    public function setAuditFees($audit_fees)
    {
        $this->container['audit_fees'] = $audit_fees;

        return $this;
    }

    /**
     * Gets bank_overdraft_and_long_term_loans
     *
     * @return object
     */
    public function getBankOverdraftAndLongTermLoans()
    {
        return $this->container['bank_overdraft_and_long_term_loans'];
    }

    /**
     * Sets bank_overdraft_and_long_term_loans
     *
     * @param object $bank_overdraft_and_long_term_loans bank_overdraft_and_long_term_loans
     *
     * @return $this
     */
    public function setBankOverdraftAndLongTermLoans($bank_overdraft_and_long_term_loans)
    {
        $this->container['bank_overdraft_and_long_term_loans'] = $bank_overdraft_and_long_term_loans;

        return $this;
    }

    /**
     * Gets net_cash_flow_from_operations
     *
     * @return object
     */
    public function getNetCashFlowFromOperations()
    {
        return $this->container['net_cash_flow_from_operations'];
    }

    /**
     * Sets net_cash_flow_from_operations
     *
     * @param object $net_cash_flow_from_operations net_cash_flow_from_operations
     *
     * @return $this
     */
    public function setNetCashFlowFromOperations($net_cash_flow_from_operations)
    {
        $this->container['net_cash_flow_from_operations'] = $net_cash_flow_from_operations;

        return $this;
    }

    /**
     * Gets net_cash_flow_before_financing
     *
     * @return object
     */
    public function getNetCashFlowBeforeFinancing()
    {
        return $this->container['net_cash_flow_before_financing'];
    }

    /**
     * Sets net_cash_flow_before_financing
     *
     * @param object $net_cash_flow_before_financing net_cash_flow_before_financing
     *
     * @return $this
     */
    public function setNetCashFlowBeforeFinancing($net_cash_flow_before_financing)
    {
        $this->container['net_cash_flow_before_financing'] = $net_cash_flow_before_financing;

        return $this;
    }

    /**
     * Gets net_cash_flow_from_financing
     *
     * @return object
     */
    public function getNetCashFlowFromFinancing()
    {
        return $this->container['net_cash_flow_from_financing'];
    }

    /**
     * Sets net_cash_flow_from_financing
     *
     * @param object $net_cash_flow_from_financing net_cash_flow_from_financing
     *
     * @return $this
     */
    public function setNetCashFlowFromFinancing($net_cash_flow_from_financing)
    {
        $this->container['net_cash_flow_from_financing'] = $net_cash_flow_from_financing;

        return $this;
    }

    /**
     * Gets increase_in_cash
     *
     * @return object
     */
    public function getIncreaseInCash()
    {
        return $this->container['increase_in_cash'];
    }

    /**
     * Sets increase_in_cash
     *
     * @param object $increase_in_cash increase_in_cash
     *
     * @return $this
     */
    public function setIncreaseInCash($increase_in_cash)
    {
        $this->container['increase_in_cash'] = $increase_in_cash;

        return $this;
    }

    /**
     * Gets debtor_days
     *
     * @return object
     */
    public function getDebtorDays()
    {
        return $this->container['debtor_days'];
    }

    /**
     * Sets debtor_days
     *
     * @param object $debtor_days Trade Debtors expressed as number of days of Turnover
     *
     * @return $this
     */
    public function setDebtorDays($debtor_days)
    {
        $this->container['debtor_days'] = $debtor_days;

        return $this;
    }

    /**
     * Gets exports
     *
     * @return object
     */
    public function getExports()
    {
        return $this->container['exports'];
    }

    /**
     * Sets exports
     *
     * @param object $exports Turnover from overseas (often reported in the notes to the financial accounts)
     *
     * @return $this
     */
    public function setExports($exports)
    {
        $this->container['exports'] = $exports;

        return $this;
    }

    /**
     * Gets gross_margin_percentage
     *
     * @return \Swagger\Client\Model\CompanyFinancialsGrossMarginPercentage
     */
    public function getGrossMarginPercentage()
    {
        return $this->container['gross_margin_percentage'];
    }

    /**
     * Sets gross_margin_percentage
     *
     * @param \Swagger\Client\Model\CompanyFinancialsGrossMarginPercentage $gross_margin_percentage gross_margin_percentage
     *
     * @return $this
     */
    public function setGrossMarginPercentage($gross_margin_percentage)
    {
        $this->container['gross_margin_percentage'] = $gross_margin_percentage;

        return $this;
    }

    /**
     * Gets operating_profit_margin_percentage
     *
     * @return \Swagger\Client\Model\CompanyFinancialsOperatingProfitMarginPercentage
     */
    public function getOperatingProfitMarginPercentage()
    {
        return $this->container['operating_profit_margin_percentage'];
    }

    /**
     * Sets operating_profit_margin_percentage
     *
     * @param \Swagger\Client\Model\CompanyFinancialsOperatingProfitMarginPercentage $operating_profit_margin_percentage operating_profit_margin_percentage
     *
     * @return $this
     */
    public function setOperatingProfitMarginPercentage($operating_profit_margin_percentage)
    {
        $this->container['operating_profit_margin_percentage'] = $operating_profit_margin_percentage;

        return $this;
    }

    /**
     * Gets ebitda_margin_percentage
     *
     * @return \Swagger\Client\Model\CompanyFinancialsEbitdaMarginPercentage
     */
    public function getEbitdaMarginPercentage()
    {
        return $this->container['ebitda_margin_percentage'];
    }

    /**
     * Sets ebitda_margin_percentage
     *
     * @param \Swagger\Client\Model\CompanyFinancialsEbitdaMarginPercentage $ebitda_margin_percentage ebitda_margin_percentage
     *
     * @return $this
     */
    public function setEbitdaMarginPercentage($ebitda_margin_percentage)
    {
        $this->container['ebitda_margin_percentage'] = $ebitda_margin_percentage;

        return $this;
    }

    /**
     * Gets pre_tax_profit_margin_percentage
     *
     * @return \Swagger\Client\Model\CompanyFinancialsPreTaxProfitMarginPercentage
     */
    public function getPreTaxProfitMarginPercentage()
    {
        return $this->container['pre_tax_profit_margin_percentage'];
    }

    /**
     * Sets pre_tax_profit_margin_percentage
     *
     * @param \Swagger\Client\Model\CompanyFinancialsPreTaxProfitMarginPercentage $pre_tax_profit_margin_percentage pre_tax_profit_margin_percentage
     *
     * @return $this
     */
    public function setPreTaxProfitMarginPercentage($pre_tax_profit_margin_percentage)
    {
        $this->container['pre_tax_profit_margin_percentage'] = $pre_tax_profit_margin_percentage;

        return $this;
    }

    /**
     * Gets net_margin_percentage
     *
     * @return \Swagger\Client\Model\CompanyFinancialsNetMarginPercentage
     */
    public function getNetMarginPercentage()
    {
        return $this->container['net_margin_percentage'];
    }

    /**
     * Sets net_margin_percentage
     *
     * @param \Swagger\Client\Model\CompanyFinancialsNetMarginPercentage $net_margin_percentage net_margin_percentage
     *
     * @return $this
     */
    public function setNetMarginPercentage($net_margin_percentage)
    {
        $this->container['net_margin_percentage'] = $net_margin_percentage;

        return $this;
    }

    /**
     * Gets return_on_assets_percentage
     *
     * @return \Swagger\Client\Model\CompanyFinancialsReturnOnAssetsPercentage
     */
    public function getReturnOnAssetsPercentage()
    {
        return $this->container['return_on_assets_percentage'];
    }

    /**
     * Sets return_on_assets_percentage
     *
     * @param \Swagger\Client\Model\CompanyFinancialsReturnOnAssetsPercentage $return_on_assets_percentage return_on_assets_percentage
     *
     * @return $this
     */
    public function setReturnOnAssetsPercentage($return_on_assets_percentage)
    {
        $this->container['return_on_assets_percentage'] = $return_on_assets_percentage;

        return $this;
    }

    /**
     * Gets return_on_capital_employed_percentage
     *
     * @return \Swagger\Client\Model\CompanyFinancialsReturnOnCapitalEmployedPercentage
     */
    public function getReturnOnCapitalEmployedPercentage()
    {
        return $this->container['return_on_capital_employed_percentage'];
    }

    /**
     * Sets return_on_capital_employed_percentage
     *
     * @param \Swagger\Client\Model\CompanyFinancialsReturnOnCapitalEmployedPercentage $return_on_capital_employed_percentage return_on_capital_employed_percentage
     *
     * @return $this
     */
    public function setReturnOnCapitalEmployedPercentage($return_on_capital_employed_percentage)
    {
        $this->container['return_on_capital_employed_percentage'] = $return_on_capital_employed_percentage;

        return $this;
    }

    /**
     * Gets return_on_equity
     *
     * @return \Swagger\Client\Model\CompanyFinancialsReturnOnEquity
     */
    public function getReturnOnEquity()
    {
        return $this->container['return_on_equity'];
    }

    /**
     * Sets return_on_equity
     *
     * @param \Swagger\Client\Model\CompanyFinancialsReturnOnEquity $return_on_equity return_on_equity
     *
     * @return $this
     */
    public function setReturnOnEquity($return_on_equity)
    {
        $this->container['return_on_equity'] = $return_on_equity;

        return $this;
    }

    /**
     * Gets current_ratio
     *
     * @return \Swagger\Client\Model\CompanyFinancialsCurrentRatio
     */
    public function getCurrentRatio()
    {
        return $this->container['current_ratio'];
    }

    /**
     * Sets current_ratio
     *
     * @param \Swagger\Client\Model\CompanyFinancialsCurrentRatio $current_ratio current_ratio
     *
     * @return $this
     */
    public function setCurrentRatio($current_ratio)
    {
        $this->container['current_ratio'] = $current_ratio;

        return $this;
    }

    /**
     * Gets cash_to_current_liabilities_ratio
     *
     * @return \Swagger\Client\Model\CompanyFinancialsCashToCurrentLiabilitiesRatio
     */
    public function getCashToCurrentLiabilitiesRatio()
    {
        return $this->container['cash_to_current_liabilities_ratio'];
    }

    /**
     * Sets cash_to_current_liabilities_ratio
     *
     * @param \Swagger\Client\Model\CompanyFinancialsCashToCurrentLiabilitiesRatio $cash_to_current_liabilities_ratio cash_to_current_liabilities_ratio
     *
     * @return $this
     */
    public function setCashToCurrentLiabilitiesRatio($cash_to_current_liabilities_ratio)
    {
        $this->container['cash_to_current_liabilities_ratio'] = $cash_to_current_liabilities_ratio;

        return $this;
    }

    /**
     * Gets cash_to_total_assets_percentage
     *
     * @return \Swagger\Client\Model\CompanyFinancialsCashToTotalAssetsPercentage
     */
    public function getCashToTotalAssetsPercentage()
    {
        return $this->container['cash_to_total_assets_percentage'];
    }

    /**
     * Sets cash_to_total_assets_percentage
     *
     * @param \Swagger\Client\Model\CompanyFinancialsCashToTotalAssetsPercentage $cash_to_total_assets_percentage cash_to_total_assets_percentage
     *
     * @return $this
     */
    public function setCashToTotalAssetsPercentage($cash_to_total_assets_percentage)
    {
        $this->container['cash_to_total_assets_percentage'] = $cash_to_total_assets_percentage;

        return $this;
    }

    /**
     * Gets liquidity_ratio
     *
     * @return \Swagger\Client\Model\CompanyFinancialsLiquidityRatio
     */
    public function getLiquidityRatio()
    {
        return $this->container['liquidity_ratio'];
    }

    /**
     * Sets liquidity_ratio
     *
     * @param \Swagger\Client\Model\CompanyFinancialsLiquidityRatio $liquidity_ratio liquidity_ratio
     *
     * @return $this
     */
    public function setLiquidityRatio($liquidity_ratio)
    {
        $this->container['liquidity_ratio'] = $liquidity_ratio;

        return $this;
    }

    /**
     * Gets gearing_percentage_on_liability_basis
     *
     * @return \Swagger\Client\Model\CompanyFinancialsGearingPercentageOnLiabilityBasis
     */
    public function getGearingPercentageOnLiabilityBasis()
    {
        return $this->container['gearing_percentage_on_liability_basis'];
    }

    /**
     * Sets gearing_percentage_on_liability_basis
     *
     * @param \Swagger\Client\Model\CompanyFinancialsGearingPercentageOnLiabilityBasis $gearing_percentage_on_liability_basis gearing_percentage_on_liability_basis
     *
     * @return $this
     */
    public function setGearingPercentageOnLiabilityBasis($gearing_percentage_on_liability_basis)
    {
        $this->container['gearing_percentage_on_liability_basis'] = $gearing_percentage_on_liability_basis;

        return $this;
    }

    /**
     * Gets gearing_percentage_on_gross_debt_basis
     *
     * @return \Swagger\Client\Model\CompanyFinancialsGearingPercentageOnGrossDebtBasis
     */
    public function getGearingPercentageOnGrossDebtBasis()
    {
        return $this->container['gearing_percentage_on_gross_debt_basis'];
    }

    /**
     * Sets gearing_percentage_on_gross_debt_basis
     *
     * @param \Swagger\Client\Model\CompanyFinancialsGearingPercentageOnGrossDebtBasis $gearing_percentage_on_gross_debt_basis gearing_percentage_on_gross_debt_basis
     *
     * @return $this
     */
    public function setGearingPercentageOnGrossDebtBasis($gearing_percentage_on_gross_debt_basis)
    {
        $this->container['gearing_percentage_on_gross_debt_basis'] = $gearing_percentage_on_gross_debt_basis;

        return $this;
    }

    /**
     * Gets gearing_percentage_on_net_debt_basis
     *
     * @return \Swagger\Client\Model\CompanyFinancialsGearingPercentageOnNetDebtBasis
     */
    public function getGearingPercentageOnNetDebtBasis()
    {
        return $this->container['gearing_percentage_on_net_debt_basis'];
    }

    /**
     * Sets gearing_percentage_on_net_debt_basis
     *
     * @param \Swagger\Client\Model\CompanyFinancialsGearingPercentageOnNetDebtBasis $gearing_percentage_on_net_debt_basis gearing_percentage_on_net_debt_basis
     *
     * @return $this
     */
    public function setGearingPercentageOnNetDebtBasis($gearing_percentage_on_net_debt_basis)
    {
        $this->container['gearing_percentage_on_net_debt_basis'] = $gearing_percentage_on_net_debt_basis;

        return $this;
    }

    /**
     * Gets debt_to_capital_percentage
     *
     * @return \Swagger\Client\Model\CompanyFinancialsDebtToCapitalPercentage
     */
    public function getDebtToCapitalPercentage()
    {
        return $this->container['debt_to_capital_percentage'];
    }

    /**
     * Sets debt_to_capital_percentage
     *
     * @param \Swagger\Client\Model\CompanyFinancialsDebtToCapitalPercentage $debt_to_capital_percentage debt_to_capital_percentage
     *
     * @return $this
     */
    public function setDebtToCapitalPercentage($debt_to_capital_percentage)
    {
        $this->container['debt_to_capital_percentage'] = $debt_to_capital_percentage;

        return $this;
    }

    /**
     * Gets inventory_turnover_ratio
     *
     * @return \Swagger\Client\Model\CompanyFinancialsInventoryTurnoverRatio
     */
    public function getInventoryTurnoverRatio()
    {
        return $this->container['inventory_turnover_ratio'];
    }

    /**
     * Sets inventory_turnover_ratio
     *
     * @param \Swagger\Client\Model\CompanyFinancialsInventoryTurnoverRatio $inventory_turnover_ratio inventory_turnover_ratio
     *
     * @return $this
     */
    public function setInventoryTurnoverRatio($inventory_turnover_ratio)
    {
        $this->container['inventory_turnover_ratio'] = $inventory_turnover_ratio;

        return $this;
    }

    /**
     * Gets cash_to_turnover_ratio
     *
     * @return \Swagger\Client\Model\CompanyFinancialsCashToTurnoverRatio
     */
    public function getCashToTurnoverRatio()
    {
        return $this->container['cash_to_turnover_ratio'];
    }

    /**
     * Sets cash_to_turnover_ratio
     *
     * @param \Swagger\Client\Model\CompanyFinancialsCashToTurnoverRatio $cash_to_turnover_ratio cash_to_turnover_ratio
     *
     * @return $this
     */
    public function setCashToTurnoverRatio($cash_to_turnover_ratio)
    {
        $this->container['cash_to_turnover_ratio'] = $cash_to_turnover_ratio;

        return $this;
    }

    /**
     * Gets cash_to_turnover_percentage
     *
     * @return \Swagger\Client\Model\CompanyFinancialsCashToTurnoverPercentage
     */
    public function getCashToTurnoverPercentage()
    {
        return $this->container['cash_to_turnover_percentage'];
    }

    /**
     * Sets cash_to_turnover_percentage
     *
     * @param \Swagger\Client\Model\CompanyFinancialsCashToTurnoverPercentage $cash_to_turnover_percentage cash_to_turnover_percentage
     *
     * @return $this
     */
    public function setCashToTurnoverPercentage($cash_to_turnover_percentage)
    {
        $this->container['cash_to_turnover_percentage'] = $cash_to_turnover_percentage;

        return $this;
    }

    /**
     * Gets days_inventory_outstanding
     *
     * @return \Swagger\Client\Model\CompanyFinancialsDaysInventoryOutstanding
     */
    public function getDaysInventoryOutstanding()
    {
        return $this->container['days_inventory_outstanding'];
    }

    /**
     * Sets days_inventory_outstanding
     *
     * @param \Swagger\Client\Model\CompanyFinancialsDaysInventoryOutstanding $days_inventory_outstanding days_inventory_outstanding
     *
     * @return $this
     */
    public function setDaysInventoryOutstanding($days_inventory_outstanding)
    {
        $this->container['days_inventory_outstanding'] = $days_inventory_outstanding;

        return $this;
    }

    /**
     * Gets days_sales_outstanding
     *
     * @return \Swagger\Client\Model\CompanyFinancialsDaysSalesOutstanding
     */
    public function getDaysSalesOutstanding()
    {
        return $this->container['days_sales_outstanding'];
    }

    /**
     * Sets days_sales_outstanding
     *
     * @param \Swagger\Client\Model\CompanyFinancialsDaysSalesOutstanding $days_sales_outstanding days_sales_outstanding
     *
     * @return $this
     */
    public function setDaysSalesOutstanding($days_sales_outstanding)
    {
        $this->container['days_sales_outstanding'] = $days_sales_outstanding;

        return $this;
    }

    /**
     * Gets days_payable_outstanding
     *
     * @return \Swagger\Client\Model\CompanyFinancialsDaysPayableOutstanding
     */
    public function getDaysPayableOutstanding()
    {
        return $this->container['days_payable_outstanding'];
    }

    /**
     * Sets days_payable_outstanding
     *
     * @param \Swagger\Client\Model\CompanyFinancialsDaysPayableOutstanding $days_payable_outstanding days_payable_outstanding
     *
     * @return $this
     */
    public function setDaysPayableOutstanding($days_payable_outstanding)
    {
        $this->container['days_payable_outstanding'] = $days_payable_outstanding;

        return $this;
    }

    /**
     * Gets cash_conversion_cycle
     *
     * @return \Swagger\Client\Model\CompanyFinancialsCashConversionCycle
     */
    public function getCashConversionCycle()
    {
        return $this->container['cash_conversion_cycle'];
    }

    /**
     * Sets cash_conversion_cycle
     *
     * @param \Swagger\Client\Model\CompanyFinancialsCashConversionCycle $cash_conversion_cycle cash_conversion_cycle
     *
     * @return $this
     */
    public function setCashConversionCycle($cash_conversion_cycle)
    {
        $this->container['cash_conversion_cycle'] = $cash_conversion_cycle;

        return $this;
    }

    /**
     * Gets revenue_per_employee
     *
     * @return \Swagger\Client\Model\CompanyFinancialsRevenuePerEmployee
     */
    public function getRevenuePerEmployee()
    {
        return $this->container['revenue_per_employee'];
    }

    /**
     * Sets revenue_per_employee
     *
     * @param \Swagger\Client\Model\CompanyFinancialsRevenuePerEmployee $revenue_per_employee revenue_per_employee
     *
     * @return $this
     */
    public function setRevenuePerEmployee($revenue_per_employee)
    {
        $this->container['revenue_per_employee'] = $revenue_per_employee;

        return $this;
    }

    /**
     * Gets human_capital_value_added
     *
     * @return \Swagger\Client\Model\CompanyFinancialsHumanCapitalValueAdded
     */
    public function getHumanCapitalValueAdded()
    {
        return $this->container['human_capital_value_added'];
    }

    /**
     * Sets human_capital_value_added
     *
     * @param \Swagger\Client\Model\CompanyFinancialsHumanCapitalValueAdded $human_capital_value_added human_capital_value_added
     *
     * @return $this
     */
    public function setHumanCapitalValueAdded($human_capital_value_added)
    {
        $this->container['human_capital_value_added'] = $human_capital_value_added;

        return $this;
    }

    /**
     * Gets interest_coverage_ratio
     *
     * @return \Swagger\Client\Model\CompanyFinancialsInterestCoverageRatio
     */
    public function getInterestCoverageRatio()
    {
        return $this->container['interest_coverage_ratio'];
    }

    /**
     * Sets interest_coverage_ratio
     *
     * @param \Swagger\Client\Model\CompanyFinancialsInterestCoverageRatio $interest_coverage_ratio interest_coverage_ratio
     *
     * @return $this
     */
    public function setInterestCoverageRatio($interest_coverage_ratio)
    {
        $this->container['interest_coverage_ratio'] = $interest_coverage_ratio;

        return $this;
    }

    /**
     * Gets net_debt_to_ebitda_ratio
     *
     * @return \Swagger\Client\Model\CompanyFinancialsNetDebtToEBITDARatio
     */
    public function getNetDebtToEbitdaRatio()
    {
        return $this->container['net_debt_to_ebitda_ratio'];
    }

    /**
     * Sets net_debt_to_ebitda_ratio
     *
     * @param \Swagger\Client\Model\CompanyFinancialsNetDebtToEBITDARatio $net_debt_to_ebitda_ratio net_debt_to_ebitda_ratio
     *
     * @return $this
     */
    public function setNetDebtToEbitdaRatio($net_debt_to_ebitda_ratio)
    {
        $this->container['net_debt_to_ebitda_ratio'] = $net_debt_to_ebitda_ratio;

        return $this;
    }

    /**
     * Gets cfo_to_sales_ratio
     *
     * @return \Swagger\Client\Model\CompanyFinancialsCfoToSalesRatio
     */
    public function getCfoToSalesRatio()
    {
        return $this->container['cfo_to_sales_ratio'];
    }

    /**
     * Sets cfo_to_sales_ratio
     *
     * @param \Swagger\Client\Model\CompanyFinancialsCfoToSalesRatio $cfo_to_sales_ratio cfo_to_sales_ratio
     *
     * @return $this
     */
    public function setCfoToSalesRatio($cfo_to_sales_ratio)
    {
        $this->container['cfo_to_sales_ratio'] = $cfo_to_sales_ratio;

        return $this;
    }

    /**
     * Gets auditor
     *
     * @return \Swagger\Client\Model\CharityTrusteesTrustees
     */
    public function getAuditor()
    {
        return $this->container['auditor'];
    }

    /**
     * Sets auditor
     *
     * @param \Swagger\Client\Model\CharityTrusteesTrustees $auditor auditor
     *
     * @return $this
     */
    public function setAuditor($auditor)
    {
        $this->container['auditor'] = $auditor;

        return $this;
    }

    /**
     * Gets joint_auditor
     *
     * @return \Swagger\Client\Model\CharityTrusteesTrustees
     */
    public function getJointAuditor()
    {
        return $this->container['joint_auditor'];
    }

    /**
     * Sets joint_auditor
     *
     * @param \Swagger\Client\Model\CharityTrusteesTrustees $joint_auditor joint_auditor
     *
     * @return $this
     */
    public function setJointAuditor($joint_auditor)
    {
        $this->container['joint_auditor'] = $joint_auditor;

        return $this;
    }

    /**
     * Gets solicitor
     *
     * @return \Swagger\Client\Model\CharityTrusteesTrustees
     */
    public function getSolicitor()
    {
        return $this->container['solicitor'];
    }

    /**
     * Sets solicitor
     *
     * @param \Swagger\Client\Model\CharityTrusteesTrustees $solicitor solicitor
     *
     * @return $this
     */
    public function setSolicitor($solicitor)
    {
        $this->container['solicitor'] = $solicitor;

        return $this;
    }

    /**
     * Gets accountant
     *
     * @return \Swagger\Client\Model\CharityTrusteesTrustees
     */
    public function getAccountant()
    {
        return $this->container['accountant'];
    }

    /**
     * Sets accountant
     *
     * @param \Swagger\Client\Model\CharityTrusteesTrustees $accountant accountant
     *
     * @return $this
     */
    public function setAccountant($accountant)
    {
        $this->container['accountant'] = $accountant;

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


