# Swagger\Client\EssentialsApi

All URIs are relative to *https://duedil.io/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**charityCountryCodeCharityIdAreasOfActivityFormatGet**](EssentialsApi.md#charityCountryCodeCharityIdAreasOfActivityFormatGet) | **GET** /charity/{countryCode}/{charityId}/areas-of-activity.{format} | Charity areas of activity
[**charityCountryCodeCharityIdClassifiersFormatGet**](EssentialsApi.md#charityCountryCodeCharityIdClassifiersFormatGet) | **GET** /charity/{countryCode}/{charityId}/classifiers.{format} | Charity classifiers
[**charityCountryCodeCharityIdFormatGet**](EssentialsApi.md#charityCountryCodeCharityIdFormatGet) | **GET** /charity/{countryCode}/{charityId}.{format} | Charity vitals
[**charityCountryCodeCharityIdRegisteredNamesFormatGet**](EssentialsApi.md#charityCountryCodeCharityIdRegisteredNamesFormatGet) | **GET** /charity/{countryCode}/{charityId}/registered-names.{format} | Charity registered names
[**charityCountryCodeCharityIdStatusHistoryFormatGet**](EssentialsApi.md#charityCountryCodeCharityIdStatusHistoryFormatGet) | **GET** /charity/{countryCode}/{charityId}/status-history.{format} | Charity status history
[**charityCountryCodeCharityIdTrusteesFormatGet**](EssentialsApi.md#charityCountryCodeCharityIdTrusteesFormatGet) | **GET** /charity/{countryCode}/{charityId}/trustees.{format} | Charity trustees
[**companyCountryCodeCompanyIdAddressesFormatGet**](EssentialsApi.md#companyCountryCodeCompanyIdAddressesFormatGet) | **GET** /company/{countryCode}/{companyId}/addresses.{format} | Company addresses
[**companyCountryCodeCompanyIdCharitableIdentitiesFormatGet**](EssentialsApi.md#companyCountryCodeCompanyIdCharitableIdentitiesFormatGet) | **GET** /company/{countryCode}/{companyId}/charitable-identities.{format} | Company charitable identities
[**companyCountryCodeCompanyIdDescriptionsFormatGet**](EssentialsApi.md#companyCountryCodeCompanyIdDescriptionsFormatGet) | **GET** /company/{countryCode}/{companyId}/descriptions.{format} | Company descriptions
[**companyCountryCodeCompanyIdFormatGet**](EssentialsApi.md#companyCountryCodeCompanyIdFormatGet) | **GET** /company/{countryCode}/{companyId}.{format} | Company vitals
[**companyCountryCodeCompanyIdHmrcImportsExportsFormatGet**](EssentialsApi.md#companyCountryCodeCompanyIdHmrcImportsExportsFormatGet) | **GET** /company/{countryCode}/{companyId}/hmrc-imports-exports.{format} | Company HMRC imports and exports
[**companyCountryCodeCompanyIdIndustriesFormatGet**](EssentialsApi.md#companyCountryCodeCompanyIdIndustriesFormatGet) | **GET** /company/{countryCode}/{companyId}/industries.{format} | Company industries
[**companyCountryCodeCompanyIdKeywordsFormatGet**](EssentialsApi.md#companyCountryCodeCompanyIdKeywordsFormatGet) | **GET** /company/{countryCode}/{companyId}/keywords.{format} | Company keywords
[**companyCountryCodeCompanyIdOfficersFormatGet**](EssentialsApi.md#companyCountryCodeCompanyIdOfficersFormatGet) | **GET** /company/{countryCode}/{companyId}/officers.{format} | Company officers
[**companyCountryCodeCompanyIdRegisteredNamesFormatGet**](EssentialsApi.md#companyCountryCodeCompanyIdRegisteredNamesFormatGet) | **GET** /company/{countryCode}/{companyId}/registered-names.{format} | Company registered names
[**companyCountryCodeCompanyIdRelatedNamesFormatGet**](EssentialsApi.md#companyCountryCodeCompanyIdRelatedNamesFormatGet) | **GET** /company/{countryCode}/{companyId}/related-names.{format} | Company related names
[**companyCountryCodeCompanyIdSocialMediaProfilesFormatGet**](EssentialsApi.md#companyCountryCodeCompanyIdSocialMediaProfilesFormatGet) | **GET** /company/{countryCode}/{companyId}/social-media-profiles.{format} | Company social media profiles
[**companyCountryCodeCompanyIdTelephoneNumbersFormatGet**](EssentialsApi.md#companyCountryCodeCompanyIdTelephoneNumbersFormatGet) | **GET** /company/{countryCode}/{companyId}/telephone-numbers.{format} | Company telephone numbers
[**companyCountryCodeCompanyIdWebsitesFormatGet**](EssentialsApi.md#companyCountryCodeCompanyIdWebsitesFormatGet) | **GET** /company/{countryCode}/{companyId}/websites.{format} | Company websites
[**officerOfficerIdCompaniesFormatGet**](EssentialsApi.md#officerOfficerIdCompaniesFormatGet) | **GET** /officer/{officerId}/companies.{format} | Officer appointments
[**officerOfficerIdFormatGet**](EssentialsApi.md#officerOfficerIdFormatGet) | **GET** /officer/{officerId}.{format} | Officer vitals


# **charityCountryCodeCharityIdAreasOfActivityFormatGet**
> \Swagger\Client\Model\CharityAreasOfActivityResponse charityCountryCodeCharityIdAreasOfActivityFormatGet($country_code, $charity_id, $format, $offset, $limit)

Charity areas of activity

Get geographic areas of activity for a given charity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
    $result = $apiInstance->charityCountryCodeCharityIdAreasOfActivityFormatGet($country_code, $charity_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->charityCountryCodeCharityIdAreasOfActivityFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CharityAreasOfActivityResponse**](../Model/CharityAreasOfActivityResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **charityCountryCodeCharityIdClassifiersFormatGet**
> \Swagger\Client\Model\CharityClassifiersResponse charityCountryCodeCharityIdClassifiersFormatGet($country_code, $charity_id, $format, $offset, $limit, $types)

Charity classifiers

Get classifiers for a given charity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
$types = array("types_example"); // string[] | List of charity  classifier types to include.  - purpose: What the charity does. - activity: How the charity operates - beneficiary: Who the charity helps

try {
    $result = $apiInstance->charityCountryCodeCharityIdClassifiersFormatGet($country_code, $charity_id, $format, $offset, $limit, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->charityCountryCodeCharityIdClassifiersFormatGet: ', $e->getMessage(), PHP_EOL;
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
 **types** | [**string[]**](../Model/string.md)| List of charity  classifier types to include.  - purpose: What the charity does. - activity: How the charity operates - beneficiary: Who the charity helps | [optional]

### Return type

[**\Swagger\Client\Model\CharityClassifiersResponse**](../Model/CharityClassifiersResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **charityCountryCodeCharityIdFormatGet**
> \Swagger\Client\Model\CharityResponse charityCountryCodeCharityIdFormatGet($country_code, $charity_id, $format)

Charity vitals

Get key information for a given charity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code in lowercase.
$charity_id = "charity_id_example"; // string | Charity registration number
$format = "format_example"; // string | Response format. Currently, only supported option is json.

try {
    $result = $apiInstance->charityCountryCodeCharityIdFormatGet($country_code, $charity_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->charityCountryCodeCharityIdFormatGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code in lowercase. |
 **charity_id** | **string**| Charity registration number |
 **format** | **string**| Response format. Currently, only supported option is json. |

### Return type

[**\Swagger\Client\Model\CharityResponse**](../Model/CharityResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **charityCountryCodeCharityIdRegisteredNamesFormatGet**
> \Swagger\Client\Model\CharityRegisteredNamesResponse charityCountryCodeCharityIdRegisteredNamesFormatGet($country_code, $charity_id, $format, $offset, $limit)

Charity registered names

Get registered names for a given charity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
    $result = $apiInstance->charityCountryCodeCharityIdRegisteredNamesFormatGet($country_code, $charity_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->charityCountryCodeCharityIdRegisteredNamesFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CharityRegisteredNamesResponse**](../Model/CharityRegisteredNamesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **charityCountryCodeCharityIdStatusHistoryFormatGet**
> \Swagger\Client\Model\CharityStatusesResponse charityCountryCodeCharityIdStatusHistoryFormatGet($country_code, $charity_id, $format, $offset, $limit)

Charity status history

Get status history for a given charity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
    $result = $apiInstance->charityCountryCodeCharityIdStatusHistoryFormatGet($country_code, $charity_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->charityCountryCodeCharityIdStatusHistoryFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CharityStatusesResponse**](../Model/CharityStatusesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **charityCountryCodeCharityIdTrusteesFormatGet**
> \Swagger\Client\Model\CharityTrusteesResponse charityCountryCodeCharityIdTrusteesFormatGet($country_code, $charity_id, $format, $offset, $limit)

Charity trustees

Get trustees for a given charity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
    $result = $apiInstance->charityCountryCodeCharityIdTrusteesFormatGet($country_code, $charity_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->charityCountryCodeCharityIdTrusteesFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CharityTrusteesResponse**](../Model/CharityTrusteesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdAddressesFormatGet**
> \Swagger\Client\Model\CompanyAddressesResponse companyCountryCodeCompanyIdAddressesFormatGet($country_code, $company_id, $format, $offset, $limit)

Company addresses

Get addresses for a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdAddressesFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->companyCountryCodeCompanyIdAddressesFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyAddressesResponse**](../Model/CompanyAddressesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdCharitableIdentitiesFormatGet**
> \Swagger\Client\Model\CompanyCharitableIdentitiesResponse companyCountryCodeCompanyIdCharitableIdentitiesFormatGet($country_code, $company_id, $format, $offset, $limit)

Company charitable identities

Get charitable identities associated with a given company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdCharitableIdentitiesFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->companyCountryCodeCompanyIdCharitableIdentitiesFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyCharitableIdentitiesResponse**](../Model/CompanyCharitableIdentitiesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdDescriptionsFormatGet**
> \Swagger\Client\Model\CompanyDescriptionsResponse companyCountryCodeCompanyIdDescriptionsFormatGet($country_code, $company_id, $format, $offset, $limit)

Company descriptions

Get descriptions for a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdDescriptionsFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->companyCountryCodeCompanyIdDescriptionsFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyDescriptionsResponse**](../Model/CompanyDescriptionsResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdFormatGet**
> \Swagger\Client\Model\CompanyResponse companyCountryCodeCompanyIdFormatGet($country_code, $company_id, $format)

Company vitals

Get key information for a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code in lowercase.
$company_id = "company_id_example"; // string | Company registration number
$format = "format_example"; // string | Response format. Currently, only supported option is json.

try {
    $result = $apiInstance->companyCountryCodeCompanyIdFormatGet($country_code, $company_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->companyCountryCodeCompanyIdFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyResponse**](../Model/CompanyResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdHmrcImportsExportsFormatGet**
> \Swagger\Client\Model\CompanyHMRCImportsExportsResponse companyCountryCodeCompanyIdHmrcImportsExportsFormatGet($country_code, $company_id, $format, $offset, $limit, $trade_directions)

Company HMRC imports and exports

Get the list of commodities imported from and exported to non-EU countries by month for a given UK company. Sourced from HMRC Customs Trade Statistics

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
$trade_directions = array("trade_directions_example"); // string[] | List of trade directions

try {
    $result = $apiInstance->companyCountryCodeCompanyIdHmrcImportsExportsFormatGet($country_code, $company_id, $format, $offset, $limit, $trade_directions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->companyCountryCodeCompanyIdHmrcImportsExportsFormatGet: ', $e->getMessage(), PHP_EOL;
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
 **trade_directions** | [**string[]**](../Model/string.md)| List of trade directions | [optional]

### Return type

[**\Swagger\Client\Model\CompanyHMRCImportsExportsResponse**](../Model/CompanyHMRCImportsExportsResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdIndustriesFormatGet**
> \Swagger\Client\Model\CompanyIndustriesResponse companyCountryCodeCompanyIdIndustriesFormatGet($country_code, $company_id, $format, $offset, $limit, $types)

Company industries

Get industries for a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
$types = array("types_example"); // string[] | List of industry classification systems to include if available

try {
    $result = $apiInstance->companyCountryCodeCompanyIdIndustriesFormatGet($country_code, $company_id, $format, $offset, $limit, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->companyCountryCodeCompanyIdIndustriesFormatGet: ', $e->getMessage(), PHP_EOL;
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
 **types** | [**string[]**](../Model/string.md)| List of industry classification systems to include if available | [optional]

### Return type

[**\Swagger\Client\Model\CompanyIndustriesResponse**](../Model/CompanyIndustriesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdKeywordsFormatGet**
> \Swagger\Client\Model\CompanyKeywordsResponse companyCountryCodeCompanyIdKeywordsFormatGet($country_code, $company_id, $format, $offset, $limit)

Company keywords

Get keywords associated with a given company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdKeywordsFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->companyCountryCodeCompanyIdKeywordsFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyKeywordsResponse**](../Model/CompanyKeywordsResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdOfficersFormatGet**
> \Swagger\Client\Model\CompanyOfficersResponse companyCountryCodeCompanyIdOfficersFormatGet($country_code, $company_id, $format, $offset, $limit, $appointment_statuses)

Company officers

Get officers and their appointments for a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
$appointment_statuses = array("appointment_statuses_example"); // string[] | List of appointment statuses to include

try {
    $result = $apiInstance->companyCountryCodeCompanyIdOfficersFormatGet($country_code, $company_id, $format, $offset, $limit, $appointment_statuses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->companyCountryCodeCompanyIdOfficersFormatGet: ', $e->getMessage(), PHP_EOL;
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
 **appointment_statuses** | [**string[]**](../Model/string.md)| List of appointment statuses to include | [optional]

### Return type

[**\Swagger\Client\Model\CompanyOfficersResponse**](../Model/CompanyOfficersResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdRegisteredNamesFormatGet**
> \Swagger\Client\Model\CompanyRegisteredNamesResponse companyCountryCodeCompanyIdRegisteredNamesFormatGet($country_code, $company_id, $format, $offset, $limit)

Company registered names

Get registered names for a company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdRegisteredNamesFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->companyCountryCodeCompanyIdRegisteredNamesFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyRegisteredNamesResponse**](../Model/CompanyRegisteredNamesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdRelatedNamesFormatGet**
> \Swagger\Client\Model\CompanyRelatedNamesResponse companyCountryCodeCompanyIdRelatedNamesFormatGet($country_code, $company_id, $format, $offset, $limit)

Company related names

Get related names for a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdRelatedNamesFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->companyCountryCodeCompanyIdRelatedNamesFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyRelatedNamesResponse**](../Model/CompanyRelatedNamesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdSocialMediaProfilesFormatGet**
> \Swagger\Client\Model\CompanySocialMediaProfilesResponse companyCountryCodeCompanyIdSocialMediaProfilesFormatGet($country_code, $company_id, $format, $offset, $limit, $platforms)

Company social media profiles

Get social media profiles for a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
$platforms = array("platforms_example"); // string[] | List of platforms to include

try {
    $result = $apiInstance->companyCountryCodeCompanyIdSocialMediaProfilesFormatGet($country_code, $company_id, $format, $offset, $limit, $platforms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->companyCountryCodeCompanyIdSocialMediaProfilesFormatGet: ', $e->getMessage(), PHP_EOL;
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
 **platforms** | [**string[]**](../Model/string.md)| List of platforms to include | [optional]

### Return type

[**\Swagger\Client\Model\CompanySocialMediaProfilesResponse**](../Model/CompanySocialMediaProfilesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdTelephoneNumbersFormatGet**
> \Swagger\Client\Model\CompanyTelephoneNumbersResponse companyCountryCodeCompanyIdTelephoneNumbersFormatGet($country_code, $company_id, $format, $offset, $limit)

Company telephone numbers

Get telephone numbers associated with a given company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdTelephoneNumbersFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->companyCountryCodeCompanyIdTelephoneNumbersFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyTelephoneNumbersResponse**](../Model/CompanyTelephoneNumbersResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCountryCodeCompanyIdWebsitesFormatGet**
> \Swagger\Client\Model\CompanyWebsitesResponse companyCountryCodeCompanyIdWebsitesFormatGet($country_code, $company_id, $format, $offset, $limit)

Company websites

Get websites associated with a given company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
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
    $result = $apiInstance->companyCountryCodeCompanyIdWebsitesFormatGet($country_code, $company_id, $format, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->companyCountryCodeCompanyIdWebsitesFormatGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CompanyWebsitesResponse**](../Model/CompanyWebsitesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **officerOfficerIdCompaniesFormatGet**
> \Swagger\Client\Model\OfficerCompaniesResponse officerOfficerIdCompaniesFormatGet($officer_id, $format, $offset, $limit, $appointment_statuses)

Officer appointments

Get all companies and appointments for a given officer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$officer_id = "officer_id_example"; // string | Officer id
$format = "format_example"; // string | Response format. Currently, only supported option is json.
$offset = 0; // int | Determines the 0-based index of the first element of the collection to be returned
$limit = 10; // int | Configures the maximum number of items from the collection to be returned in the given API call
$appointment_statuses = array("appointment_statuses_example"); // string[] | List of appointment statuses to include

try {
    $result = $apiInstance->officerOfficerIdCompaniesFormatGet($officer_id, $format, $offset, $limit, $appointment_statuses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->officerOfficerIdCompaniesFormatGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **officer_id** | **string**| Officer id |
 **format** | **string**| Response format. Currently, only supported option is json. |
 **offset** | **int**| Determines the 0-based index of the first element of the collection to be returned | [optional] [default to 0]
 **limit** | **int**| Configures the maximum number of items from the collection to be returned in the given API call | [optional] [default to 10]
 **appointment_statuses** | [**string[]**](../Model/string.md)| List of appointment statuses to include | [optional]

### Return type

[**\Swagger\Client\Model\OfficerCompaniesResponse**](../Model/OfficerCompaniesResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **officerOfficerIdFormatGet**
> \Swagger\Client\Model\OfficerResponse officerOfficerIdFormatGet($officer_id, $format)

Officer vitals

Get key information for a given officer. Note that an officer can be either a person or a company acting as a corporate officer. **WARNING: We plan to make non-backwards compatible changes to officer identifiers in the near future to accommodate data from other countries.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\EssentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$officer_id = "officer_id_example"; // string | Officer id
$format = "format_example"; // string | Response format. Currently, only supported option is json.

try {
    $result = $apiInstance->officerOfficerIdFormatGet($officer_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EssentialsApi->officerOfficerIdFormatGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **officer_id** | **string**| Officer id |
 **format** | **string**| Response format. Currently, only supported option is json. |

### Return type

[**\Swagger\Client\Model\OfficerResponse**](../Model/OfficerResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

