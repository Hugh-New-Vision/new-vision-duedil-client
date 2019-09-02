<?php
/**
 * CharityFinancialsFinancials
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
 * CharityFinancialsFinancials Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CharityFinancialsFinancials implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CharityFinancials_financials';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accounts_start_date' => '\DateTime',
        'accounts_end_date' => '\DateTime',
        'currency' => 'string',
        'consolidated_accounts' => 'object',
        'charity_only_accounts' => 'object',
        'number_of_employees' => 'object',
        'number_of_volunteers' => 'object',
        'income_from_legacies' => 'object',
        'income_from_endowments' => 'object',
        'income_from_donations_and_legacies' => 'object',
        'income_from_charitable_activities' => 'object',
        'income_from_investments' => 'object',
        'other_income' => 'object',
        'total_income_and_endowments' => 'object',
        'investment_management_costs' => 'object',
        'grant_funding_of_activities' => 'object',
        'governance_costs' => 'object',
        'expenditure_on_charitable_activities' => 'object',
        'other_expenditure' => 'object',
        'total_expenditure' => 'object',
        'support_costs' => 'object',
        'depreciation' => 'object',
        'gains_or_losses_on_investments' => 'object',
        'actuarial_gain_or_loss_on_pension_fund' => 'object',
        'fixed_asset_revaluation_gain_or_loss' => 'object',
        'fixed_investment_assets' => 'object',
        'total_fixed_assets' => 'object',
        'cash' => 'object',
        'total_current_assets' => 'object',
        'creditors_due_within_one_year' => 'object',
        'creditors_due_after_one_year' => 'object',
        'pension_assets' => 'object',
        'total_net_assets' => 'object',
        'endowment_funds' => 'object',
        'restricted_funds' => 'object',
        'unrestricted_funds' => 'object',
        'total_funds' => 'object',
        'reserves' => 'object',
        'start_of_period_fixed_investment_assets' => 'object',
        'start_of_period_total_fixed_assets' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accounts_start_date' => 'date',
        'accounts_end_date' => 'date',
        'currency' => null,
        'consolidated_accounts' => null,
        'charity_only_accounts' => null,
        'number_of_employees' => null,
        'number_of_volunteers' => null,
        'income_from_legacies' => null,
        'income_from_endowments' => null,
        'income_from_donations_and_legacies' => null,
        'income_from_charitable_activities' => null,
        'income_from_investments' => null,
        'other_income' => null,
        'total_income_and_endowments' => null,
        'investment_management_costs' => null,
        'grant_funding_of_activities' => null,
        'governance_costs' => null,
        'expenditure_on_charitable_activities' => null,
        'other_expenditure' => null,
        'total_expenditure' => null,
        'support_costs' => null,
        'depreciation' => null,
        'gains_or_losses_on_investments' => null,
        'actuarial_gain_or_loss_on_pension_fund' => null,
        'fixed_asset_revaluation_gain_or_loss' => null,
        'fixed_investment_assets' => null,
        'total_fixed_assets' => null,
        'cash' => null,
        'total_current_assets' => null,
        'creditors_due_within_one_year' => null,
        'creditors_due_after_one_year' => null,
        'pension_assets' => null,
        'total_net_assets' => null,
        'endowment_funds' => null,
        'restricted_funds' => null,
        'unrestricted_funds' => null,
        'total_funds' => null,
        'reserves' => null,
        'start_of_period_fixed_investment_assets' => null,
        'start_of_period_total_fixed_assets' => null
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
        'accounts_start_date' => 'accountsStartDate',
        'accounts_end_date' => 'accountsEndDate',
        'currency' => 'currency',
        'consolidated_accounts' => 'consolidatedAccounts',
        'charity_only_accounts' => 'charityOnlyAccounts',
        'number_of_employees' => 'numberOfEmployees',
        'number_of_volunteers' => 'numberOfVolunteers',
        'income_from_legacies' => 'incomeFromLegacies',
        'income_from_endowments' => 'incomeFromEndowments',
        'income_from_donations_and_legacies' => 'incomeFromDonationsAndLegacies',
        'income_from_charitable_activities' => 'incomeFromCharitableActivities',
        'income_from_investments' => 'incomeFromInvestments',
        'other_income' => 'otherIncome',
        'total_income_and_endowments' => 'totalIncomeAndEndowments',
        'investment_management_costs' => 'investmentManagementCosts',
        'grant_funding_of_activities' => 'grantFundingOfActivities',
        'governance_costs' => 'governanceCosts',
        'expenditure_on_charitable_activities' => 'expenditureOnCharitableActivities',
        'other_expenditure' => 'otherExpenditure',
        'total_expenditure' => 'totalExpenditure',
        'support_costs' => 'supportCosts',
        'depreciation' => 'depreciation',
        'gains_or_losses_on_investments' => 'gainsOrLossesOnInvestments',
        'actuarial_gain_or_loss_on_pension_fund' => 'actuarialGainOrLossOnPensionFund',
        'fixed_asset_revaluation_gain_or_loss' => 'fixedAssetRevaluationGainOrLoss',
        'fixed_investment_assets' => 'fixedInvestmentAssets',
        'total_fixed_assets' => 'totalFixedAssets',
        'cash' => 'cash',
        'total_current_assets' => 'totalCurrentAssets',
        'creditors_due_within_one_year' => 'creditorsDueWithinOneYear',
        'creditors_due_after_one_year' => 'creditorsDueAfterOneYear',
        'pension_assets' => 'pensionAssets',
        'total_net_assets' => 'totalNetAssets',
        'endowment_funds' => 'endowmentFunds',
        'restricted_funds' => 'restrictedFunds',
        'unrestricted_funds' => 'unrestrictedFunds',
        'total_funds' => 'totalFunds',
        'reserves' => 'reserves',
        'start_of_period_fixed_investment_assets' => 'startOfPeriodFixedInvestmentAssets',
        'start_of_period_total_fixed_assets' => 'startOfPeriodTotalFixedAssets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accounts_start_date' => 'setAccountsStartDate',
        'accounts_end_date' => 'setAccountsEndDate',
        'currency' => 'setCurrency',
        'consolidated_accounts' => 'setConsolidatedAccounts',
        'charity_only_accounts' => 'setCharityOnlyAccounts',
        'number_of_employees' => 'setNumberOfEmployees',
        'number_of_volunteers' => 'setNumberOfVolunteers',
        'income_from_legacies' => 'setIncomeFromLegacies',
        'income_from_endowments' => 'setIncomeFromEndowments',
        'income_from_donations_and_legacies' => 'setIncomeFromDonationsAndLegacies',
        'income_from_charitable_activities' => 'setIncomeFromCharitableActivities',
        'income_from_investments' => 'setIncomeFromInvestments',
        'other_income' => 'setOtherIncome',
        'total_income_and_endowments' => 'setTotalIncomeAndEndowments',
        'investment_management_costs' => 'setInvestmentManagementCosts',
        'grant_funding_of_activities' => 'setGrantFundingOfActivities',
        'governance_costs' => 'setGovernanceCosts',
        'expenditure_on_charitable_activities' => 'setExpenditureOnCharitableActivities',
        'other_expenditure' => 'setOtherExpenditure',
        'total_expenditure' => 'setTotalExpenditure',
        'support_costs' => 'setSupportCosts',
        'depreciation' => 'setDepreciation',
        'gains_or_losses_on_investments' => 'setGainsOrLossesOnInvestments',
        'actuarial_gain_or_loss_on_pension_fund' => 'setActuarialGainOrLossOnPensionFund',
        'fixed_asset_revaluation_gain_or_loss' => 'setFixedAssetRevaluationGainOrLoss',
        'fixed_investment_assets' => 'setFixedInvestmentAssets',
        'total_fixed_assets' => 'setTotalFixedAssets',
        'cash' => 'setCash',
        'total_current_assets' => 'setTotalCurrentAssets',
        'creditors_due_within_one_year' => 'setCreditorsDueWithinOneYear',
        'creditors_due_after_one_year' => 'setCreditorsDueAfterOneYear',
        'pension_assets' => 'setPensionAssets',
        'total_net_assets' => 'setTotalNetAssets',
        'endowment_funds' => 'setEndowmentFunds',
        'restricted_funds' => 'setRestrictedFunds',
        'unrestricted_funds' => 'setUnrestrictedFunds',
        'total_funds' => 'setTotalFunds',
        'reserves' => 'setReserves',
        'start_of_period_fixed_investment_assets' => 'setStartOfPeriodFixedInvestmentAssets',
        'start_of_period_total_fixed_assets' => 'setStartOfPeriodTotalFixedAssets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accounts_start_date' => 'getAccountsStartDate',
        'accounts_end_date' => 'getAccountsEndDate',
        'currency' => 'getCurrency',
        'consolidated_accounts' => 'getConsolidatedAccounts',
        'charity_only_accounts' => 'getCharityOnlyAccounts',
        'number_of_employees' => 'getNumberOfEmployees',
        'number_of_volunteers' => 'getNumberOfVolunteers',
        'income_from_legacies' => 'getIncomeFromLegacies',
        'income_from_endowments' => 'getIncomeFromEndowments',
        'income_from_donations_and_legacies' => 'getIncomeFromDonationsAndLegacies',
        'income_from_charitable_activities' => 'getIncomeFromCharitableActivities',
        'income_from_investments' => 'getIncomeFromInvestments',
        'other_income' => 'getOtherIncome',
        'total_income_and_endowments' => 'getTotalIncomeAndEndowments',
        'investment_management_costs' => 'getInvestmentManagementCosts',
        'grant_funding_of_activities' => 'getGrantFundingOfActivities',
        'governance_costs' => 'getGovernanceCosts',
        'expenditure_on_charitable_activities' => 'getExpenditureOnCharitableActivities',
        'other_expenditure' => 'getOtherExpenditure',
        'total_expenditure' => 'getTotalExpenditure',
        'support_costs' => 'getSupportCosts',
        'depreciation' => 'getDepreciation',
        'gains_or_losses_on_investments' => 'getGainsOrLossesOnInvestments',
        'actuarial_gain_or_loss_on_pension_fund' => 'getActuarialGainOrLossOnPensionFund',
        'fixed_asset_revaluation_gain_or_loss' => 'getFixedAssetRevaluationGainOrLoss',
        'fixed_investment_assets' => 'getFixedInvestmentAssets',
        'total_fixed_assets' => 'getTotalFixedAssets',
        'cash' => 'getCash',
        'total_current_assets' => 'getTotalCurrentAssets',
        'creditors_due_within_one_year' => 'getCreditorsDueWithinOneYear',
        'creditors_due_after_one_year' => 'getCreditorsDueAfterOneYear',
        'pension_assets' => 'getPensionAssets',
        'total_net_assets' => 'getTotalNetAssets',
        'endowment_funds' => 'getEndowmentFunds',
        'restricted_funds' => 'getRestrictedFunds',
        'unrestricted_funds' => 'getUnrestrictedFunds',
        'total_funds' => 'getTotalFunds',
        'reserves' => 'getReserves',
        'start_of_period_fixed_investment_assets' => 'getStartOfPeriodFixedInvestmentAssets',
        'start_of_period_total_fixed_assets' => 'getStartOfPeriodTotalFixedAssets'
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
        $this->container['accounts_start_date'] = isset($data['accounts_start_date']) ? $data['accounts_start_date'] : null;
        $this->container['accounts_end_date'] = isset($data['accounts_end_date']) ? $data['accounts_end_date'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['consolidated_accounts'] = isset($data['consolidated_accounts']) ? $data['consolidated_accounts'] : null;
        $this->container['charity_only_accounts'] = isset($data['charity_only_accounts']) ? $data['charity_only_accounts'] : null;
        $this->container['number_of_employees'] = isset($data['number_of_employees']) ? $data['number_of_employees'] : null;
        $this->container['number_of_volunteers'] = isset($data['number_of_volunteers']) ? $data['number_of_volunteers'] : null;
        $this->container['income_from_legacies'] = isset($data['income_from_legacies']) ? $data['income_from_legacies'] : null;
        $this->container['income_from_endowments'] = isset($data['income_from_endowments']) ? $data['income_from_endowments'] : null;
        $this->container['income_from_donations_and_legacies'] = isset($data['income_from_donations_and_legacies']) ? $data['income_from_donations_and_legacies'] : null;
        $this->container['income_from_charitable_activities'] = isset($data['income_from_charitable_activities']) ? $data['income_from_charitable_activities'] : null;
        $this->container['income_from_investments'] = isset($data['income_from_investments']) ? $data['income_from_investments'] : null;
        $this->container['other_income'] = isset($data['other_income']) ? $data['other_income'] : null;
        $this->container['total_income_and_endowments'] = isset($data['total_income_and_endowments']) ? $data['total_income_and_endowments'] : null;
        $this->container['investment_management_costs'] = isset($data['investment_management_costs']) ? $data['investment_management_costs'] : null;
        $this->container['grant_funding_of_activities'] = isset($data['grant_funding_of_activities']) ? $data['grant_funding_of_activities'] : null;
        $this->container['governance_costs'] = isset($data['governance_costs']) ? $data['governance_costs'] : null;
        $this->container['expenditure_on_charitable_activities'] = isset($data['expenditure_on_charitable_activities']) ? $data['expenditure_on_charitable_activities'] : null;
        $this->container['other_expenditure'] = isset($data['other_expenditure']) ? $data['other_expenditure'] : null;
        $this->container['total_expenditure'] = isset($data['total_expenditure']) ? $data['total_expenditure'] : null;
        $this->container['support_costs'] = isset($data['support_costs']) ? $data['support_costs'] : null;
        $this->container['depreciation'] = isset($data['depreciation']) ? $data['depreciation'] : null;
        $this->container['gains_or_losses_on_investments'] = isset($data['gains_or_losses_on_investments']) ? $data['gains_or_losses_on_investments'] : null;
        $this->container['actuarial_gain_or_loss_on_pension_fund'] = isset($data['actuarial_gain_or_loss_on_pension_fund']) ? $data['actuarial_gain_or_loss_on_pension_fund'] : null;
        $this->container['fixed_asset_revaluation_gain_or_loss'] = isset($data['fixed_asset_revaluation_gain_or_loss']) ? $data['fixed_asset_revaluation_gain_or_loss'] : null;
        $this->container['fixed_investment_assets'] = isset($data['fixed_investment_assets']) ? $data['fixed_investment_assets'] : null;
        $this->container['total_fixed_assets'] = isset($data['total_fixed_assets']) ? $data['total_fixed_assets'] : null;
        $this->container['cash'] = isset($data['cash']) ? $data['cash'] : null;
        $this->container['total_current_assets'] = isset($data['total_current_assets']) ? $data['total_current_assets'] : null;
        $this->container['creditors_due_within_one_year'] = isset($data['creditors_due_within_one_year']) ? $data['creditors_due_within_one_year'] : null;
        $this->container['creditors_due_after_one_year'] = isset($data['creditors_due_after_one_year']) ? $data['creditors_due_after_one_year'] : null;
        $this->container['pension_assets'] = isset($data['pension_assets']) ? $data['pension_assets'] : null;
        $this->container['total_net_assets'] = isset($data['total_net_assets']) ? $data['total_net_assets'] : null;
        $this->container['endowment_funds'] = isset($data['endowment_funds']) ? $data['endowment_funds'] : null;
        $this->container['restricted_funds'] = isset($data['restricted_funds']) ? $data['restricted_funds'] : null;
        $this->container['unrestricted_funds'] = isset($data['unrestricted_funds']) ? $data['unrestricted_funds'] : null;
        $this->container['total_funds'] = isset($data['total_funds']) ? $data['total_funds'] : null;
        $this->container['reserves'] = isset($data['reserves']) ? $data['reserves'] : null;
        $this->container['start_of_period_fixed_investment_assets'] = isset($data['start_of_period_fixed_investment_assets']) ? $data['start_of_period_fixed_investment_assets'] : null;
        $this->container['start_of_period_total_fixed_assets'] = isset($data['start_of_period_total_fixed_assets']) ? $data['start_of_period_total_fixed_assets'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accounts_start_date'] === null) {
            $invalidProperties[] = "'accounts_start_date' can't be null";
        }
        if ($this->container['accounts_end_date'] === null) {
            $invalidProperties[] = "'accounts_end_date' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['consolidated_accounts'] === null) {
            $invalidProperties[] = "'consolidated_accounts' can't be null";
        }
        if ($this->container['charity_only_accounts'] === null) {
            $invalidProperties[] = "'charity_only_accounts' can't be null";
        }
        if ($this->container['number_of_employees'] === null) {
            $invalidProperties[] = "'number_of_employees' can't be null";
        }
        if ($this->container['income_from_legacies'] === null) {
            $invalidProperties[] = "'income_from_legacies' can't be null";
        }
        if ($this->container['income_from_endowments'] === null) {
            $invalidProperties[] = "'income_from_endowments' can't be null";
        }
        if ($this->container['income_from_donations_and_legacies'] === null) {
            $invalidProperties[] = "'income_from_donations_and_legacies' can't be null";
        }
        if ($this->container['income_from_charitable_activities'] === null) {
            $invalidProperties[] = "'income_from_charitable_activities' can't be null";
        }
        if ($this->container['income_from_investments'] === null) {
            $invalidProperties[] = "'income_from_investments' can't be null";
        }
        if ($this->container['other_income'] === null) {
            $invalidProperties[] = "'other_income' can't be null";
        }
        if ($this->container['total_income_and_endowments'] === null) {
            $invalidProperties[] = "'total_income_and_endowments' can't be null";
        }
        if ($this->container['investment_management_costs'] === null) {
            $invalidProperties[] = "'investment_management_costs' can't be null";
        }
        if ($this->container['grant_funding_of_activities'] === null) {
            $invalidProperties[] = "'grant_funding_of_activities' can't be null";
        }
        if ($this->container['governance_costs'] === null) {
            $invalidProperties[] = "'governance_costs' can't be null";
        }
        if ($this->container['expenditure_on_charitable_activities'] === null) {
            $invalidProperties[] = "'expenditure_on_charitable_activities' can't be null";
        }
        if ($this->container['other_expenditure'] === null) {
            $invalidProperties[] = "'other_expenditure' can't be null";
        }
        if ($this->container['total_expenditure'] === null) {
            $invalidProperties[] = "'total_expenditure' can't be null";
        }
        if ($this->container['support_costs'] === null) {
            $invalidProperties[] = "'support_costs' can't be null";
        }
        if ($this->container['depreciation'] === null) {
            $invalidProperties[] = "'depreciation' can't be null";
        }
        if ($this->container['gains_or_losses_on_investments'] === null) {
            $invalidProperties[] = "'gains_or_losses_on_investments' can't be null";
        }
        if ($this->container['actuarial_gain_or_loss_on_pension_fund'] === null) {
            $invalidProperties[] = "'actuarial_gain_or_loss_on_pension_fund' can't be null";
        }
        if ($this->container['fixed_asset_revaluation_gain_or_loss'] === null) {
            $invalidProperties[] = "'fixed_asset_revaluation_gain_or_loss' can't be null";
        }
        if ($this->container['fixed_investment_assets'] === null) {
            $invalidProperties[] = "'fixed_investment_assets' can't be null";
        }
        if ($this->container['total_fixed_assets'] === null) {
            $invalidProperties[] = "'total_fixed_assets' can't be null";
        }
        if ($this->container['cash'] === null) {
            $invalidProperties[] = "'cash' can't be null";
        }
        if ($this->container['total_current_assets'] === null) {
            $invalidProperties[] = "'total_current_assets' can't be null";
        }
        if ($this->container['creditors_due_within_one_year'] === null) {
            $invalidProperties[] = "'creditors_due_within_one_year' can't be null";
        }
        if ($this->container['creditors_due_after_one_year'] === null) {
            $invalidProperties[] = "'creditors_due_after_one_year' can't be null";
        }
        if ($this->container['pension_assets'] === null) {
            $invalidProperties[] = "'pension_assets' can't be null";
        }
        if ($this->container['total_net_assets'] === null) {
            $invalidProperties[] = "'total_net_assets' can't be null";
        }
        if ($this->container['endowment_funds'] === null) {
            $invalidProperties[] = "'endowment_funds' can't be null";
        }
        if ($this->container['restricted_funds'] === null) {
            $invalidProperties[] = "'restricted_funds' can't be null";
        }
        if ($this->container['unrestricted_funds'] === null) {
            $invalidProperties[] = "'unrestricted_funds' can't be null";
        }
        if ($this->container['total_funds'] === null) {
            $invalidProperties[] = "'total_funds' can't be null";
        }
        if ($this->container['reserves'] === null) {
            $invalidProperties[] = "'reserves' can't be null";
        }
        if ($this->container['start_of_period_fixed_investment_assets'] === null) {
            $invalidProperties[] = "'start_of_period_fixed_investment_assets' can't be null";
        }
        if ($this->container['start_of_period_total_fixed_assets'] === null) {
            $invalidProperties[] = "'start_of_period_total_fixed_assets' can't be null";
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
     * Gets accounts_start_date
     *
     * @return \DateTime
     */
    public function getAccountsStartDate()
    {
        return $this->container['accounts_start_date'];
    }

    /**
     * Sets accounts_start_date
     *
     * @param \DateTime $accounts_start_date accounts_start_date
     *
     * @return $this
     */
    public function setAccountsStartDate($accounts_start_date)
    {
        $this->container['accounts_start_date'] = $accounts_start_date;

        return $this;
    }

    /**
     * Gets accounts_end_date
     *
     * @return \DateTime
     */
    public function getAccountsEndDate()
    {
        return $this->container['accounts_end_date'];
    }

    /**
     * Sets accounts_end_date
     *
     * @param \DateTime $accounts_end_date accounts_end_date
     *
     * @return $this
     */
    public function setAccountsEndDate($accounts_end_date)
    {
        $this->container['accounts_end_date'] = $accounts_end_date;

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
     * @return object
     */
    public function getConsolidatedAccounts()
    {
        return $this->container['consolidated_accounts'];
    }

    /**
     * Sets consolidated_accounts
     *
     * @param object $consolidated_accounts consolidated_accounts
     *
     * @return $this
     */
    public function setConsolidatedAccounts($consolidated_accounts)
    {
        $this->container['consolidated_accounts'] = $consolidated_accounts;

        return $this;
    }

    /**
     * Gets charity_only_accounts
     *
     * @return object
     */
    public function getCharityOnlyAccounts()
    {
        return $this->container['charity_only_accounts'];
    }

    /**
     * Sets charity_only_accounts
     *
     * @param object $charity_only_accounts charity_only_accounts
     *
     * @return $this
     */
    public function setCharityOnlyAccounts($charity_only_accounts)
    {
        $this->container['charity_only_accounts'] = $charity_only_accounts;

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
     * Gets number_of_volunteers
     *
     * @return object
     */
    public function getNumberOfVolunteers()
    {
        return $this->container['number_of_volunteers'];
    }

    /**
     * Sets number_of_volunteers
     *
     * @param object $number_of_volunteers number_of_volunteers
     *
     * @return $this
     */
    public function setNumberOfVolunteers($number_of_volunteers)
    {
        $this->container['number_of_volunteers'] = $number_of_volunteers;

        return $this;
    }

    /**
     * Gets income_from_legacies
     *
     * @return object
     */
    public function getIncomeFromLegacies()
    {
        return $this->container['income_from_legacies'];
    }

    /**
     * Sets income_from_legacies
     *
     * @param object $income_from_legacies income_from_legacies
     *
     * @return $this
     */
    public function setIncomeFromLegacies($income_from_legacies)
    {
        $this->container['income_from_legacies'] = $income_from_legacies;

        return $this;
    }

    /**
     * Gets income_from_endowments
     *
     * @return object
     */
    public function getIncomeFromEndowments()
    {
        return $this->container['income_from_endowments'];
    }

    /**
     * Sets income_from_endowments
     *
     * @param object $income_from_endowments income_from_endowments
     *
     * @return $this
     */
    public function setIncomeFromEndowments($income_from_endowments)
    {
        $this->container['income_from_endowments'] = $income_from_endowments;

        return $this;
    }

    /**
     * Gets income_from_donations_and_legacies
     *
     * @return object
     */
    public function getIncomeFromDonationsAndLegacies()
    {
        return $this->container['income_from_donations_and_legacies'];
    }

    /**
     * Sets income_from_donations_and_legacies
     *
     * @param object $income_from_donations_and_legacies income_from_donations_and_legacies
     *
     * @return $this
     */
    public function setIncomeFromDonationsAndLegacies($income_from_donations_and_legacies)
    {
        $this->container['income_from_donations_and_legacies'] = $income_from_donations_and_legacies;

        return $this;
    }

    /**
     * Gets income_from_charitable_activities
     *
     * @return object
     */
    public function getIncomeFromCharitableActivities()
    {
        return $this->container['income_from_charitable_activities'];
    }

    /**
     * Sets income_from_charitable_activities
     *
     * @param object $income_from_charitable_activities income_from_charitable_activities
     *
     * @return $this
     */
    public function setIncomeFromCharitableActivities($income_from_charitable_activities)
    {
        $this->container['income_from_charitable_activities'] = $income_from_charitable_activities;

        return $this;
    }

    /**
     * Gets income_from_investments
     *
     * @return object
     */
    public function getIncomeFromInvestments()
    {
        return $this->container['income_from_investments'];
    }

    /**
     * Sets income_from_investments
     *
     * @param object $income_from_investments income_from_investments
     *
     * @return $this
     */
    public function setIncomeFromInvestments($income_from_investments)
    {
        $this->container['income_from_investments'] = $income_from_investments;

        return $this;
    }

    /**
     * Gets other_income
     *
     * @return object
     */
    public function getOtherIncome()
    {
        return $this->container['other_income'];
    }

    /**
     * Sets other_income
     *
     * @param object $other_income other_income
     *
     * @return $this
     */
    public function setOtherIncome($other_income)
    {
        $this->container['other_income'] = $other_income;

        return $this;
    }

    /**
     * Gets total_income_and_endowments
     *
     * @return object
     */
    public function getTotalIncomeAndEndowments()
    {
        return $this->container['total_income_and_endowments'];
    }

    /**
     * Sets total_income_and_endowments
     *
     * @param object $total_income_and_endowments total_income_and_endowments
     *
     * @return $this
     */
    public function setTotalIncomeAndEndowments($total_income_and_endowments)
    {
        $this->container['total_income_and_endowments'] = $total_income_and_endowments;

        return $this;
    }

    /**
     * Gets investment_management_costs
     *
     * @return object
     */
    public function getInvestmentManagementCosts()
    {
        return $this->container['investment_management_costs'];
    }

    /**
     * Sets investment_management_costs
     *
     * @param object $investment_management_costs investment_management_costs
     *
     * @return $this
     */
    public function setInvestmentManagementCosts($investment_management_costs)
    {
        $this->container['investment_management_costs'] = $investment_management_costs;

        return $this;
    }

    /**
     * Gets grant_funding_of_activities
     *
     * @return object
     */
    public function getGrantFundingOfActivities()
    {
        return $this->container['grant_funding_of_activities'];
    }

    /**
     * Sets grant_funding_of_activities
     *
     * @param object $grant_funding_of_activities grant_funding_of_activities
     *
     * @return $this
     */
    public function setGrantFundingOfActivities($grant_funding_of_activities)
    {
        $this->container['grant_funding_of_activities'] = $grant_funding_of_activities;

        return $this;
    }

    /**
     * Gets governance_costs
     *
     * @return object
     */
    public function getGovernanceCosts()
    {
        return $this->container['governance_costs'];
    }

    /**
     * Sets governance_costs
     *
     * @param object $governance_costs governance_costs
     *
     * @return $this
     */
    public function setGovernanceCosts($governance_costs)
    {
        $this->container['governance_costs'] = $governance_costs;

        return $this;
    }

    /**
     * Gets expenditure_on_charitable_activities
     *
     * @return object
     */
    public function getExpenditureOnCharitableActivities()
    {
        return $this->container['expenditure_on_charitable_activities'];
    }

    /**
     * Sets expenditure_on_charitable_activities
     *
     * @param object $expenditure_on_charitable_activities expenditure_on_charitable_activities
     *
     * @return $this
     */
    public function setExpenditureOnCharitableActivities($expenditure_on_charitable_activities)
    {
        $this->container['expenditure_on_charitable_activities'] = $expenditure_on_charitable_activities;

        return $this;
    }

    /**
     * Gets other_expenditure
     *
     * @return object
     */
    public function getOtherExpenditure()
    {
        return $this->container['other_expenditure'];
    }

    /**
     * Sets other_expenditure
     *
     * @param object $other_expenditure other_expenditure
     *
     * @return $this
     */
    public function setOtherExpenditure($other_expenditure)
    {
        $this->container['other_expenditure'] = $other_expenditure;

        return $this;
    }

    /**
     * Gets total_expenditure
     *
     * @return object
     */
    public function getTotalExpenditure()
    {
        return $this->container['total_expenditure'];
    }

    /**
     * Sets total_expenditure
     *
     * @param object $total_expenditure total_expenditure
     *
     * @return $this
     */
    public function setTotalExpenditure($total_expenditure)
    {
        $this->container['total_expenditure'] = $total_expenditure;

        return $this;
    }

    /**
     * Gets support_costs
     *
     * @return object
     */
    public function getSupportCosts()
    {
        return $this->container['support_costs'];
    }

    /**
     * Sets support_costs
     *
     * @param object $support_costs support_costs
     *
     * @return $this
     */
    public function setSupportCosts($support_costs)
    {
        $this->container['support_costs'] = $support_costs;

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
     * @param object $depreciation depreciation
     *
     * @return $this
     */
    public function setDepreciation($depreciation)
    {
        $this->container['depreciation'] = $depreciation;

        return $this;
    }

    /**
     * Gets gains_or_losses_on_investments
     *
     * @return object
     */
    public function getGainsOrLossesOnInvestments()
    {
        return $this->container['gains_or_losses_on_investments'];
    }

    /**
     * Sets gains_or_losses_on_investments
     *
     * @param object $gains_or_losses_on_investments gains_or_losses_on_investments
     *
     * @return $this
     */
    public function setGainsOrLossesOnInvestments($gains_or_losses_on_investments)
    {
        $this->container['gains_or_losses_on_investments'] = $gains_or_losses_on_investments;

        return $this;
    }

    /**
     * Gets actuarial_gain_or_loss_on_pension_fund
     *
     * @return object
     */
    public function getActuarialGainOrLossOnPensionFund()
    {
        return $this->container['actuarial_gain_or_loss_on_pension_fund'];
    }

    /**
     * Sets actuarial_gain_or_loss_on_pension_fund
     *
     * @param object $actuarial_gain_or_loss_on_pension_fund actuarial_gain_or_loss_on_pension_fund
     *
     * @return $this
     */
    public function setActuarialGainOrLossOnPensionFund($actuarial_gain_or_loss_on_pension_fund)
    {
        $this->container['actuarial_gain_or_loss_on_pension_fund'] = $actuarial_gain_or_loss_on_pension_fund;

        return $this;
    }

    /**
     * Gets fixed_asset_revaluation_gain_or_loss
     *
     * @return object
     */
    public function getFixedAssetRevaluationGainOrLoss()
    {
        return $this->container['fixed_asset_revaluation_gain_or_loss'];
    }

    /**
     * Sets fixed_asset_revaluation_gain_or_loss
     *
     * @param object $fixed_asset_revaluation_gain_or_loss fixed_asset_revaluation_gain_or_loss
     *
     * @return $this
     */
    public function setFixedAssetRevaluationGainOrLoss($fixed_asset_revaluation_gain_or_loss)
    {
        $this->container['fixed_asset_revaluation_gain_or_loss'] = $fixed_asset_revaluation_gain_or_loss;

        return $this;
    }

    /**
     * Gets fixed_investment_assets
     *
     * @return object
     */
    public function getFixedInvestmentAssets()
    {
        return $this->container['fixed_investment_assets'];
    }

    /**
     * Sets fixed_investment_assets
     *
     * @param object $fixed_investment_assets fixed_investment_assets
     *
     * @return $this
     */
    public function setFixedInvestmentAssets($fixed_investment_assets)
    {
        $this->container['fixed_investment_assets'] = $fixed_investment_assets;

        return $this;
    }

    /**
     * Gets total_fixed_assets
     *
     * @return object
     */
    public function getTotalFixedAssets()
    {
        return $this->container['total_fixed_assets'];
    }

    /**
     * Sets total_fixed_assets
     *
     * @param object $total_fixed_assets total_fixed_assets
     *
     * @return $this
     */
    public function setTotalFixedAssets($total_fixed_assets)
    {
        $this->container['total_fixed_assets'] = $total_fixed_assets;

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
     * @param object $cash cash
     *
     * @return $this
     */
    public function setCash($cash)
    {
        $this->container['cash'] = $cash;

        return $this;
    }

    /**
     * Gets total_current_assets
     *
     * @return object
     */
    public function getTotalCurrentAssets()
    {
        return $this->container['total_current_assets'];
    }

    /**
     * Sets total_current_assets
     *
     * @param object $total_current_assets total_current_assets
     *
     * @return $this
     */
    public function setTotalCurrentAssets($total_current_assets)
    {
        $this->container['total_current_assets'] = $total_current_assets;

        return $this;
    }

    /**
     * Gets creditors_due_within_one_year
     *
     * @return object
     */
    public function getCreditorsDueWithinOneYear()
    {
        return $this->container['creditors_due_within_one_year'];
    }

    /**
     * Sets creditors_due_within_one_year
     *
     * @param object $creditors_due_within_one_year creditors_due_within_one_year
     *
     * @return $this
     */
    public function setCreditorsDueWithinOneYear($creditors_due_within_one_year)
    {
        $this->container['creditors_due_within_one_year'] = $creditors_due_within_one_year;

        return $this;
    }

    /**
     * Gets creditors_due_after_one_year
     *
     * @return object
     */
    public function getCreditorsDueAfterOneYear()
    {
        return $this->container['creditors_due_after_one_year'];
    }

    /**
     * Sets creditors_due_after_one_year
     *
     * @param object $creditors_due_after_one_year creditors_due_after_one_year
     *
     * @return $this
     */
    public function setCreditorsDueAfterOneYear($creditors_due_after_one_year)
    {
        $this->container['creditors_due_after_one_year'] = $creditors_due_after_one_year;

        return $this;
    }

    /**
     * Gets pension_assets
     *
     * @return object
     */
    public function getPensionAssets()
    {
        return $this->container['pension_assets'];
    }

    /**
     * Sets pension_assets
     *
     * @param object $pension_assets pension_assets
     *
     * @return $this
     */
    public function setPensionAssets($pension_assets)
    {
        $this->container['pension_assets'] = $pension_assets;

        return $this;
    }

    /**
     * Gets total_net_assets
     *
     * @return object
     */
    public function getTotalNetAssets()
    {
        return $this->container['total_net_assets'];
    }

    /**
     * Sets total_net_assets
     *
     * @param object $total_net_assets total_net_assets
     *
     * @return $this
     */
    public function setTotalNetAssets($total_net_assets)
    {
        $this->container['total_net_assets'] = $total_net_assets;

        return $this;
    }

    /**
     * Gets endowment_funds
     *
     * @return object
     */
    public function getEndowmentFunds()
    {
        return $this->container['endowment_funds'];
    }

    /**
     * Sets endowment_funds
     *
     * @param object $endowment_funds endowment_funds
     *
     * @return $this
     */
    public function setEndowmentFunds($endowment_funds)
    {
        $this->container['endowment_funds'] = $endowment_funds;

        return $this;
    }

    /**
     * Gets restricted_funds
     *
     * @return object
     */
    public function getRestrictedFunds()
    {
        return $this->container['restricted_funds'];
    }

    /**
     * Sets restricted_funds
     *
     * @param object $restricted_funds restricted_funds
     *
     * @return $this
     */
    public function setRestrictedFunds($restricted_funds)
    {
        $this->container['restricted_funds'] = $restricted_funds;

        return $this;
    }

    /**
     * Gets unrestricted_funds
     *
     * @return object
     */
    public function getUnrestrictedFunds()
    {
        return $this->container['unrestricted_funds'];
    }

    /**
     * Sets unrestricted_funds
     *
     * @param object $unrestricted_funds unrestricted_funds
     *
     * @return $this
     */
    public function setUnrestrictedFunds($unrestricted_funds)
    {
        $this->container['unrestricted_funds'] = $unrestricted_funds;

        return $this;
    }

    /**
     * Gets total_funds
     *
     * @return object
     */
    public function getTotalFunds()
    {
        return $this->container['total_funds'];
    }

    /**
     * Sets total_funds
     *
     * @param object $total_funds total_funds
     *
     * @return $this
     */
    public function setTotalFunds($total_funds)
    {
        $this->container['total_funds'] = $total_funds;

        return $this;
    }

    /**
     * Gets reserves
     *
     * @return object
     */
    public function getReserves()
    {
        return $this->container['reserves'];
    }

    /**
     * Sets reserves
     *
     * @param object $reserves reserves
     *
     * @return $this
     */
    public function setReserves($reserves)
    {
        $this->container['reserves'] = $reserves;

        return $this;
    }

    /**
     * Gets start_of_period_fixed_investment_assets
     *
     * @return object
     */
    public function getStartOfPeriodFixedInvestmentAssets()
    {
        return $this->container['start_of_period_fixed_investment_assets'];
    }

    /**
     * Sets start_of_period_fixed_investment_assets
     *
     * @param object $start_of_period_fixed_investment_assets start_of_period_fixed_investment_assets
     *
     * @return $this
     */
    public function setStartOfPeriodFixedInvestmentAssets($start_of_period_fixed_investment_assets)
    {
        $this->container['start_of_period_fixed_investment_assets'] = $start_of_period_fixed_investment_assets;

        return $this;
    }

    /**
     * Gets start_of_period_total_fixed_assets
     *
     * @return object
     */
    public function getStartOfPeriodTotalFixedAssets()
    {
        return $this->container['start_of_period_total_fixed_assets'];
    }

    /**
     * Sets start_of_period_total_fixed_assets
     *
     * @param object $start_of_period_total_fixed_assets start_of_period_total_fixed_assets
     *
     * @return $this
     */
    public function setStartOfPeriodTotalFixedAssets($start_of_period_total_fixed_assets)
    {
        $this->container['start_of_period_total_fixed_assets'] = $start_of_period_total_fixed_assets;

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


