# Swagger\Client\FinancialsApi

All URIs are relative to *https://duedil.io/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**charityCountryCodeCharityIdFinancialsFormatGet**](FinancialsApi.md#charityCountryCodeCharityIdFinancialsFormatGet) | **GET** /charity/{countryCode}/{charityId}/financials.{format} | Charity financials
[**companyCountryCodeCompanyIdFinancialsFormatGet**](FinancialsApi.md#companyCountryCodeCompanyIdFinancialsFormatGet) | **GET** /company/{countryCode}/{companyId}/financials.{format} | Company financials


# **charityCountryCodeCharityIdFinancialsFormatGet**
> \Swagger\Client\Model\CharityFinancialsResponse charityCountryCodeCharityIdFinancialsFormatGet($country_code, $charity_id, $format, $offset, $limit)

Charity financials

Get financials for a given charity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\FinancialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code in lowercase.
$charity_id = "charity_id_example"; // string | Charity registration number
$format = "format_example"; // string | Response format. Currently, only supported option is json.
$offset = 0; // int | Determines the 0-based index of the first element of the collection to be returned
$limit = 10; // int | Configures the maximum number of items from the collection to be returned in the given API call

try {
    $result = $apiInstance->charityCountryCodeCharityIdFinancialsFormatGet($country_code, $charity_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialsApi->charityCountryCodeCharityIdFinancialsFormatGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code in lowercase. |
 **charity_id** | **string**| Charity registration number |
 **format** | **string**| Response format. Currently, only supported option is json. |
 **offset** | **int**| Determines the 0-based index of the first element of the collection to be returned | [optional] [default to 0]
 **limit** | **int**| Configures the maximum number of items from the collection to be returned in the given API call | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\CharityFinancialsResponse**](../Model/CharityFinancialsResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdFinancialsFormatGet**
> \Swagger\Client\Model\CompanyFinancialsResponse companyCountryCodeCompanyIdFinancialsFormatGet($country_code, $company_id, $format, $offset, $limit)

Company financials

Get company financial filings for a given company.  We have extensive data coverage for companies in UK and Republic of Ireland.  Beware that for other countries the data coverage varies and you could expect to receive HTTP 404 (Not Found) response where we have no matching record for the country and company or partial response with null fields where data is missing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\FinancialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code in lowercase.
$company_id = "company_id_example"; // string | Company registration number
$format = "format_example"; // string | Response format. Currently, only supported option is json.
$offset = 0; // int | Determines the 0-based index of the first element of the collection to be returned
$limit = 10; // int | Configures the maximum number of items from the collection to be returned in the given API call

try {
    $result = $apiInstance->companyCountryCodeCompanyIdFinancialsFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialsApi->companyCountryCodeCompanyIdFinancialsFormatGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code in lowercase. |
 **company_id** | **string**| Company registration number |
 **format** | **string**| Response format. Currently, only supported option is json. |
 **offset** | **int**| Determines the 0-based index of the first element of the collection to be returned | [optional] [default to 0]
 **limit** | **int**| Configures the maximum number of items from the collection to be returned in the given API call | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\CompanyFinancialsResponse**](../Model/CompanyFinancialsResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

