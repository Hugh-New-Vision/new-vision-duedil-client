# Swagger\Client\OwnershipApi

All URIs are relative to *https://duedil.io/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**charityCountryCodeCharityIdSubsidiariesFormatGet**](OwnershipApi.md#charityCountryCodeCharityIdSubsidiariesFormatGet) | **GET** /charity/{countryCode}/{charityId}/subsidiaries.{format} | Charity subsidiaries
[**companyCountryCodeCompanyIdBankAccountsFormatGet**](OwnershipApi.md#companyCountryCodeCompanyIdBankAccountsFormatGet) | **GET** /company/{countryCode}/{companyId}/bank-accounts.{format} | Company bank accounts
[**companyCountryCodeCompanyIdChargesFormatGet**](OwnershipApi.md#companyCountryCodeCompanyIdChargesFormatGet) | **GET** /company/{countryCode}/{companyId}/charges.{format} | Company charges
[**companyCountryCodeCompanyIdFcaAuthorisationsFormatGet**](OwnershipApi.md#companyCountryCodeCompanyIdFcaAuthorisationsFormatGet) | **GET** /company/{countryCode}/{companyId}/fca-authorisations.{format} | Company FCA authorisations
[**companyCountryCodeCompanyIdFilingsFormatGet**](OwnershipApi.md#companyCountryCodeCompanyIdFilingsFormatGet) | **GET** /company/{countryCode}/{companyId}/filings.{format} | Company filings
[**companyCountryCodeCompanyIdGazetteNoticesFormatGet**](OwnershipApi.md#companyCountryCodeCompanyIdGazetteNoticesFormatGet) | **GET** /company/{countryCode}/{companyId}/gazette-notices.{format} | Company gazette notices
[**companyCountryCodeCompanyIdGroupParentsFormatGet**](OwnershipApi.md#companyCountryCodeCompanyIdGroupParentsFormatGet) | **GET** /company/{countryCode}/{companyId}/group-parents.{format} | Company group parents
[**companyCountryCodeCompanyIdGroupSubsidiariesFormatGet**](OwnershipApi.md#companyCountryCodeCompanyIdGroupSubsidiariesFormatGet) | **GET** /company/{countryCode}/{companyId}/group-subsidiaries.{format} | Company group subsidiaries
[**companyCountryCodeCompanyIdPersonsSignificantControlFormatGet**](OwnershipApi.md#companyCountryCodeCompanyIdPersonsSignificantControlFormatGet) | **GET** /company/{countryCode}/{companyId}/persons-significant-control.{format} | Company persons of significant control
[**companyCountryCodeCompanyIdPortfolioCompaniesFormatGet**](OwnershipApi.md#companyCountryCodeCompanyIdPortfolioCompaniesFormatGet) | **GET** /company/{countryCode}/{companyId}/portfolio-companies.{format} | Company portfolio companies
[**companyCountryCodeCompanyIdRelatedCompaniesFormatGet**](OwnershipApi.md#companyCountryCodeCompanyIdRelatedCompaniesFormatGet) | **GET** /company/{countryCode}/{companyId}/related-companies.{format} | Company related companies
[**companyCountryCodeCompanyIdShareholdersFormatGet**](OwnershipApi.md#companyCountryCodeCompanyIdShareholdersFormatGet) | **GET** /company/{countryCode}/{companyId}/shareholders.{format} | Company shareholders


# **charityCountryCodeCharityIdSubsidiariesFormatGet**
> \Swagger\Client\Model\CharitySubsidiariesResponse charityCountryCodeCharityIdSubsidiariesFormatGet($country_code, $charity_id, $format, $offset, $limit)

Charity subsidiaries

Get subsidiaries for a given charity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\OwnershipApi(
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
    $result = $apiInstance->charityCountryCodeCharityIdSubsidiariesFormatGet($country_code, $charity_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnershipApi->charityCountryCodeCharityIdSubsidiariesFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CharitySubsidiariesResponse**](../Model/CharitySubsidiariesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdBankAccountsFormatGet**
> \Swagger\Client\Model\CompanyBankAccountsResponse companyCountryCodeCompanyIdBankAccountsFormatGet($country_code, $company_id, $format, $offset, $limit)

Company bank accounts

Get bank accounts for a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\OwnershipApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdBankAccountsFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnershipApi->companyCountryCodeCompanyIdBankAccountsFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyBankAccountsResponse**](../Model/CompanyBankAccountsResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdChargesFormatGet**
> \Swagger\Client\Model\CompanyChargesResponse companyCountryCodeCompanyIdChargesFormatGet($country_code, $company_id, $format, $offset, $limit)

Company charges

Get charges for a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\OwnershipApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdChargesFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnershipApi->companyCountryCodeCompanyIdChargesFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyChargesResponse**](../Model/CompanyChargesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdFcaAuthorisationsFormatGet**
> \Swagger\Client\Model\CompanyFCAAuthorisationsResponse companyCountryCodeCompanyIdFcaAuthorisationsFormatGet($country_code, $company_id, $format, $offset, $limit)

Company FCA authorisations

Get the Financial Conduct Authority authorisations or registrations for a given UK company. Due to the nature of this regulation, country codes other than 'gb' will not be supported.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\OwnershipApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdFcaAuthorisationsFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnershipApi->companyCountryCodeCompanyIdFcaAuthorisationsFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyFCAAuthorisationsResponse**](../Model/CompanyFCAAuthorisationsResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdFilingsFormatGet**
> \Swagger\Client\Model\CompanyFilingsResponse companyCountryCodeCompanyIdFilingsFormatGet($country_code, $company_id, $format, $offset, $limit)

Company filings

Get filings for a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\OwnershipApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdFilingsFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnershipApi->companyCountryCodeCompanyIdFilingsFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyFilingsResponse**](../Model/CompanyFilingsResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdGazetteNoticesFormatGet**
> \Swagger\Client\Model\CompanyGazetteNoticesResponse companyCountryCodeCompanyIdGazetteNoticesFormatGet($country_code, $company_id, $format, $offset, $limit)

Company gazette notices

Get gazette notices for a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\OwnershipApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdGazetteNoticesFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnershipApi->companyCountryCodeCompanyIdGazetteNoticesFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyGazetteNoticesResponse**](../Model/CompanyGazetteNoticesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdGroupParentsFormatGet**
> \Swagger\Client\Model\CompanyGroupParentsResponse companyCountryCodeCompanyIdGroupParentsFormatGet($country_code, $company_id, $format, $offset, $limit)

Company group parents

Get group parents for a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\OwnershipApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdGroupParentsFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnershipApi->companyCountryCodeCompanyIdGroupParentsFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyGroupParentsResponse**](../Model/CompanyGroupParentsResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdGroupSubsidiariesFormatGet**
> \Swagger\Client\Model\CompanyGroupSubsidiariesResponse companyCountryCodeCompanyIdGroupSubsidiariesFormatGet($country_code, $company_id, $format, $offset, $limit)

Company group subsidiaries

Get group subsidiaries for a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\OwnershipApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdGroupSubsidiariesFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnershipApi->companyCountryCodeCompanyIdGroupSubsidiariesFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyGroupSubsidiariesResponse**](../Model/CompanyGroupSubsidiariesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdPersonsSignificantControlFormatGet**
> \Swagger\Client\Model\PoSCResponse companyCountryCodeCompanyIdPersonsSignificantControlFormatGet($country_code, $company_id, $format, $offset, $limit)

Company persons of significant control

Get persons of significant control (PoSC) for a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\OwnershipApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdPersonsSignificantControlFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnershipApi->companyCountryCodeCompanyIdPersonsSignificantControlFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\PoSCResponse**](../Model/PoSCResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdPortfolioCompaniesFormatGet**
> \Swagger\Client\Model\CompanyPortfolioCompaniesResponse companyCountryCodeCompanyIdPortfolioCompaniesFormatGet($country_code, $company_id, $format, $offset, $limit)

Company portfolio companies

Get portfolio companies for a given company. Currently, these correspond to known UK and Irish shareholdings based on the annual returns of other UK and Irish companies, *excluding subsidiaries* (which are available via the group-subsidiaries endpoint).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\OwnershipApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdPortfolioCompaniesFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnershipApi->companyCountryCodeCompanyIdPortfolioCompaniesFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyPortfolioCompaniesResponse**](../Model/CompanyPortfolioCompaniesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdRelatedCompaniesFormatGet**
> \Swagger\Client\Model\CompanyRelatedCompaniesResponse companyCountryCodeCompanyIdRelatedCompaniesFormatGet($country_code, $company_id, $format, $offset, $limit)

Company related companies

Get potentially related UK and Irish companies based on a number of reasons relating to governance and location. This list intentionally excludes companies that are separately identified as shareholders, group or portfolio companies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\OwnershipApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdRelatedCompaniesFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnershipApi->companyCountryCodeCompanyIdRelatedCompaniesFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyRelatedCompaniesResponse**](../Model/CompanyRelatedCompaniesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdShareholdersFormatGet**
> \Swagger\Client\Model\CompanyShareholdersResponse companyCountryCodeCompanyIdShareholdersFormatGet($country_code, $company_id, $format, $offset, $limit)

Company shareholders

Get shareholders and their shareholdings for a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\OwnershipApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdShareholdersFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnershipApi->companyCountryCodeCompanyIdShareholdersFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyShareholdersResponse**](../Model/CompanyShareholdersResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

