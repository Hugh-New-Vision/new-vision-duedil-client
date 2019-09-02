# CompanyFinancialsFinancials

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounts_date** | [**\DateTime**](\DateTime.md) |  | 
**reporting_period** | **int** |  | 
**currency** | **string** |  | 
**consolidated_accounts** | **bool** |  | 
**audit_qualification** | **string** |  | 
**number_of_employees** | **object** |  | 
**turnover** | **object** | Revenue generated from business activities | 
**cost_of_sales** | **object** | Direct costs to the business of generating the Turnover | 
**sga_plus_other_net_costs** | **object** | Selling, general, administrative and other non-production costs of operating the business | 
**operating_profit** | **object** | Profit generated from principal trading activities, calculated by subtracting operating expenses from Gross Profit | 
**interest_receivable** | **object** |  | 
**interest_payable** | **object** |  | 
**pre_tax_profit** | **object** | Profit generated before taxation | 
**taxation** | **object** | A negative number indicates a tax charge to the business | 
**post_tax_profit** | **object** | Profit generated after taxation | 
**dividends_payable** | **object** | Profit distributed to shareholders | 
**retained_profits** | **object** | Undistributed profits retained within the business | 
**intangible_assets** | **object** | A company&#39;s fixed assets that have no physical presence, such as copyrights, patents, and brand names | 
**tangible_assets** | **object** | A company&#39;s fixed assets that have a physical presence, such as property and machinery | 
**investments_and_other_assets** | **object** | Investment and other assets held by a company | 
**fixed_assets** | **object** | The sum of Tangible Assets, Intangible Assets and Investments | 
**stock** | **object** | Goods for resale | 
**trade_debtors** | **object** | Amounts owed by customers | 
**other_debtors** | **object** | Amounts owed by other sources | 
**miscellaneous_current_assets** | **object** | Unspecified assets due within one year of the accounts date | 
**cash** | **object** | Cash in hand and in the bank | 
**current_assets** | **object** | The sum of Stock, Trade Debtors, Cash and other assets due within one year of the accounts date | 
**total_assets** | **object** | The value of all assets on the Balance Sheet | 
**bank_loans_and_overdrafts** | **object** |  | 
**trade_creditors** | **object** | Amounts owed to suppliers | 
**miscellaneous_current_liabilities** | **object** | Unspecified liabilities due within one year of accounts date | 
**other_short_term_finances** | **object** | Amounts owed to other sources | 
**current_liabilities** | **object** | The sum of Trade Creditors and other liabilities due within one year of accounts date | 
**contingent_liabilities** | **object** | A potential obligation dependent on the outcome of a future event | 
**other_long_term_finances** | **object** |  | 
**total_long_term_liabilities** | **object** | The sum of liabilities due after one year of the accounts date | 
**total_liabilities** | **object** | The total value of all amounts owed (long term and short term) | 
**net_assets** | **object** | Total Assets less Total Liabilities | 
**equity_paid_up** | **object** | The amount of capital that has been funded by shareholders | 
**revaluation_reserve** | **object** | Used when the value of an asset becomes greater than the value at which it was previously carried on the balance sheet | 
**sundry_reserves** | **object** | Capital reservers, Share premium account, and other company reserves | 
**profit_and_loss_account_reserve** | **object** | The (fully distributable) balance of retained earnings to carry forward | 
**shareholder_funds** | **object** | Equity Payed Up plus reservers; equivalent to Net Assets | 
**depreciation** | **object** | The cost associated with reducing the value of tangible fixed assets over their useful life | 
**amortisation_of_intangibles** | **object** | The cost associated with reducing the value of intangible fixed assets over their useful life | 
**ebitda** | **object** | Earnings before interest, tax, depreciation and amortization | 
**working_capital** | **object** | Current Assets less Current Liabilities | 
**capital_employed** | **object** | Total Assets less Current Liabilities; equivalent to Fixed Assets plus Working Capital | 
**wages_and_salaries** | **object** |  | 
**directors_emoluments** | **object** |  | 
**audit_fees** | **object** |  | 
**bank_overdraft_and_long_term_loans** | **object** |  | 
**net_cash_flow_from_operations** | **object** |  | 
**net_cash_flow_before_financing** | **object** |  | 
**net_cash_flow_from_financing** | **object** |  | 
**increase_in_cash** | **object** |  | 
**debtor_days** | **object** | Trade Debtors expressed as number of days of Turnover | 
**exports** | **object** | Turnover from overseas (often reported in the notes to the financial accounts) | 
**gross_margin_percentage** | [**\Swagger\Client\Model\CompanyFinancialsGrossMarginPercentage**](CompanyFinancialsGrossMarginPercentage.md) |  | 
**operating_profit_margin_percentage** | [**\Swagger\Client\Model\CompanyFinancialsOperatingProfitMarginPercentage**](CompanyFinancialsOperatingProfitMarginPercentage.md) |  | 
**ebitda_margin_percentage** | [**\Swagger\Client\Model\CompanyFinancialsEbitdaMarginPercentage**](CompanyFinancialsEbitdaMarginPercentage.md) |  | 
**pre_tax_profit_margin_percentage** | [**\Swagger\Client\Model\CompanyFinancialsPreTaxProfitMarginPercentage**](CompanyFinancialsPreTaxProfitMarginPercentage.md) |  | 
**net_margin_percentage** | [**\Swagger\Client\Model\CompanyFinancialsNetMarginPercentage**](CompanyFinancialsNetMarginPercentage.md) |  | 
**return_on_assets_percentage** | [**\Swagger\Client\Model\CompanyFinancialsReturnOnAssetsPercentage**](CompanyFinancialsReturnOnAssetsPercentage.md) |  | 
**return_on_capital_employed_percentage** | [**\Swagger\Client\Model\CompanyFinancialsReturnOnCapitalEmployedPercentage**](CompanyFinancialsReturnOnCapitalEmployedPercentage.md) |  | 
**return_on_equity** | [**\Swagger\Client\Model\CompanyFinancialsReturnOnEquity**](CompanyFinancialsReturnOnEquity.md) |  | 
**current_ratio** | [**\Swagger\Client\Model\CompanyFinancialsCurrentRatio**](CompanyFinancialsCurrentRatio.md) |  | 
**cash_to_current_liabilities_ratio** | [**\Swagger\Client\Model\CompanyFinancialsCashToCurrentLiabilitiesRatio**](CompanyFinancialsCashToCurrentLiabilitiesRatio.md) |  | 
**cash_to_total_assets_percentage** | [**\Swagger\Client\Model\CompanyFinancialsCashToTotalAssetsPercentage**](CompanyFinancialsCashToTotalAssetsPercentage.md) |  | 
**liquidity_ratio** | [**\Swagger\Client\Model\CompanyFinancialsLiquidityRatio**](CompanyFinancialsLiquidityRatio.md) |  | 
**gearing_percentage_on_liability_basis** | [**\Swagger\Client\Model\CompanyFinancialsGearingPercentageOnLiabilityBasis**](CompanyFinancialsGearingPercentageOnLiabilityBasis.md) |  | 
**gearing_percentage_on_gross_debt_basis** | [**\Swagger\Client\Model\CompanyFinancialsGearingPercentageOnGrossDebtBasis**](CompanyFinancialsGearingPercentageOnGrossDebtBasis.md) |  | 
**gearing_percentage_on_net_debt_basis** | [**\Swagger\Client\Model\CompanyFinancialsGearingPercentageOnNetDebtBasis**](CompanyFinancialsGearingPercentageOnNetDebtBasis.md) |  | 
**debt_to_capital_percentage** | [**\Swagger\Client\Model\CompanyFinancialsDebtToCapitalPercentage**](CompanyFinancialsDebtToCapitalPercentage.md) |  | 
**inventory_turnover_ratio** | [**\Swagger\Client\Model\CompanyFinancialsInventoryTurnoverRatio**](CompanyFinancialsInventoryTurnoverRatio.md) |  | 
**cash_to_turnover_ratio** | [**\Swagger\Client\Model\CompanyFinancialsCashToTurnoverRatio**](CompanyFinancialsCashToTurnoverRatio.md) |  | [optional] 
**cash_to_turnover_percentage** | [**\Swagger\Client\Model\CompanyFinancialsCashToTurnoverPercentage**](CompanyFinancialsCashToTurnoverPercentage.md) |  | 
**days_inventory_outstanding** | [**\Swagger\Client\Model\CompanyFinancialsDaysInventoryOutstanding**](CompanyFinancialsDaysInventoryOutstanding.md) |  | 
**days_sales_outstanding** | [**\Swagger\Client\Model\CompanyFinancialsDaysSalesOutstanding**](CompanyFinancialsDaysSalesOutstanding.md) |  | 
**days_payable_outstanding** | [**\Swagger\Client\Model\CompanyFinancialsDaysPayableOutstanding**](CompanyFinancialsDaysPayableOutstanding.md) |  | 
**cash_conversion_cycle** | [**\Swagger\Client\Model\CompanyFinancialsCashConversionCycle**](CompanyFinancialsCashConversionCycle.md) |  | 
**revenue_per_employee** | [**\Swagger\Client\Model\CompanyFinancialsRevenuePerEmployee**](CompanyFinancialsRevenuePerEmployee.md) |  | 
**human_capital_value_added** | [**\Swagger\Client\Model\CompanyFinancialsHumanCapitalValueAdded**](CompanyFinancialsHumanCapitalValueAdded.md) |  | 
**interest_coverage_ratio** | [**\Swagger\Client\Model\CompanyFinancialsInterestCoverageRatio**](CompanyFinancialsInterestCoverageRatio.md) |  | 
**net_debt_to_ebitda_ratio** | [**\Swagger\Client\Model\CompanyFinancialsNetDebtToEBITDARatio**](CompanyFinancialsNetDebtToEBITDARatio.md) |  | 
**cfo_to_sales_ratio** | [**\Swagger\Client\Model\CompanyFinancialsCfoToSalesRatio**](CompanyFinancialsCfoToSalesRatio.md) |  | 
**auditor** | [**\Swagger\Client\Model\CharityTrusteesTrustees**](CharityTrusteesTrustees.md) |  | 
**joint_auditor** | [**\Swagger\Client\Model\CharityTrusteesTrustees**](CharityTrusteesTrustees.md) |  | 
**solicitor** | [**\Swagger\Client\Model\CharityTrusteesTrustees**](CharityTrusteesTrustees.md) |  | 
**accountant** | [**\Swagger\Client\Model\CharityTrusteesTrustees**](CharityTrusteesTrustees.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


