# Swagger\Client\CreditReportApi

All URIs are relative to *https://duedil.io/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyCountryCodeCompanyIdCreditReportFormatGet**](CreditReportApi.md#companyCountryCodeCompanyIdCreditReportFormatGet) | **GET** /company/{countryCode}/{companyId}/credit-report.{format} | Credit report


# **companyCountryCodeCompanyIdCreditReportFormatGet**
> \Swagger\Client\Model\CompanyCreditReportResponse companyCountryCodeCompanyIdCreditReportFormatGet($country_code, $company_id, $format)

Credit report

Get credit report for a given company. ### Sandbox  In Sandbox environment this endpoint will generate static response from historical data of real credit reports for 7 predefined companies. All other requests will result in credit report not found response (HTTP 404).   The companies are as follows  - Bp P.L.C. - countryCode: **gb** companyId: **00102498**  - Royal Dutch Shell Plc - countryCode: **gb** companyId: **04366849**  - Hsbc Holdings Plc - countryCode: **gb** companyId: **00617987**  - Tesco Plc - countryCode: **gb** companyId: **00445790**  - Vodafone Group Public Limited Company - countryCode: **gb** companyId: **01833679**  - Woolworths Group PLC - countryCode: **gb** companyId: **03855289**  - Brompton Bicycle Limited - countryCode: **gb** companyId: **01261512**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\CreditReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code in lowercase.
$company_id = "company_id_example"; // string | Company registration number
$format = "format_example"; // string | Response format. Currently, only supported option is json.

try {
    $result = $apiInstance->companyCountryCodeCompanyIdCreditReportFormatGet($country_code, $company_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditReportApi->companyCountryCodeCompanyIdCreditReportFormatGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code in lowercase. |
 **company_id** | **string**| Company registration number |
 **format** | **string**| Response format. Currently, only supported option is json. |

### Return type

[**\Swagger\Client\Model\CompanyCreditReportResponse**](../Model/CompanyCreditReportResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

