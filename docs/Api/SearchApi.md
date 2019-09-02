# Swagger\Client\SearchApi

All URIs are relative to *https://duedil.io/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchCharitiesFormatPost**](SearchApi.md#searchCharitiesFormatPost) | **POST** /search/charities.{format} | Find charities
[**searchCompaniesFormatPost**](SearchApi.md#searchCompaniesFormatPost) | **POST** /search/companies.{format} | Find companies
[**searchKeywordsFormatPost**](SearchApi.md#searchKeywordsFormatPost) | **POST** /search/keywords.{format} | Find keywords (to be used on company/officer search filters)
[**searchOfficersFormatPost**](SearchApi.md#searchOfficersFormatPost) | **POST** /search/officers.{format} | Find officers
[**searchRegionsFormatPost**](SearchApi.md#searchRegionsFormatPost) | **POST** /search/regions.{format} | Find regions (to be used on company/officer search filters)


# **searchCharitiesFormatPost**
> \Swagger\Client\Model\CharitySearchResponse searchCharitiesFormatPost($format, $body, $offset, $limit)

Find charities

Find charities based on search criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | Response format. Currently, only supported option is json.
$body = new \Swagger\Client\Model\CharitySearchCriteria(); // \Swagger\Client\Model\CharitySearchCriteria | Charity search criteria
$offset = 0; // int | Determines the 0-based index of the first element of the collection to be returned
$limit = 10; // int | Configures the maximum number of items from the collection to be returned in the given API call

try {
    $result = $apiInstance->searchCharitiesFormatPost($format, $body, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchCharitiesFormatPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Response format. Currently, only supported option is json. |
 **body** | [**\Swagger\Client\Model\CharitySearchCriteria**](../Model/CharitySearchCriteria.md)| Charity search criteria |
 **offset** | **int**| Determines the 0-based index of the first element of the collection to be returned | [optional] [default to 0]
 **limit** | **int**| Configures the maximum number of items from the collection to be returned in the given API call | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\CharitySearchResponse**](../Model/CharitySearchResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCompaniesFormatPost**
> \Swagger\Client\Model\CompanySearchResponse searchCompaniesFormatPost($format, $body, $offset, $limit)

Find companies

Find companies based on search criteria.  **Note:** Certain search criteria can only be accessed when a particular endpoint package is purchased. For example, the creditRisk filter is restricted to keys with the [Credit Report](#tag/Credit-report) package. Where applicable, these restrictions are included in the criteria descriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | Response format. Currently, only supported option is json.
$body = new \Swagger\Client\Model\CompanySearchCriteria(); // \Swagger\Client\Model\CompanySearchCriteria | Company search criteria
$offset = 0; // int | Determines the 0-based index of the first element of the collection to be returned
$limit = 10; // int | Configures the maximum number of items from the collection to be returned in the given API call

try {
    $result = $apiInstance->searchCompaniesFormatPost($format, $body, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchCompaniesFormatPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Response format. Currently, only supported option is json. |
 **body** | [**\Swagger\Client\Model\CompanySearchCriteria**](../Model/CompanySearchCriteria.md)| Company search criteria |
 **offset** | **int**| Determines the 0-based index of the first element of the collection to be returned | [optional] [default to 0]
 **limit** | **int**| Configures the maximum number of items from the collection to be returned in the given API call | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\CompanySearchResponse**](../Model/CompanySearchResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKeywordsFormatPost**
> \Swagger\Client\Model\KeywordSearchResponse searchKeywordsFormatPost($format, $body, $offset, $limit)

Find keywords (to be used on company/officer search filters)

Find keywords based on search criteria. Full keywords can then be used as a value for company or director search filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | Response format. Currently, only supported option is json.
$body = new \Swagger\Client\Model\KeywordSearchCriteria(); // \Swagger\Client\Model\KeywordSearchCriteria | Keyword search criteria
$offset = 0; // int | Determines the 0-based index of the first element of the collection to be returned
$limit = 10; // int | Configures the maximum number of items from the collection to be returned in the given API call

try {
    $result = $apiInstance->searchKeywordsFormatPost($format, $body, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchKeywordsFormatPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Response format. Currently, only supported option is json. |
 **body** | [**\Swagger\Client\Model\KeywordSearchCriteria**](../Model/KeywordSearchCriteria.md)| Keyword search criteria |
 **offset** | **int**| Determines the 0-based index of the first element of the collection to be returned | [optional] [default to 0]
 **limit** | **int**| Configures the maximum number of items from the collection to be returned in the given API call | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\KeywordSearchResponse**](../Model/KeywordSearchResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchOfficersFormatPost**
> \Swagger\Client\Model\OfficerSearchResponse searchOfficersFormatPost($format, $body, $offset, $limit)

Find officers

Find officers based on search criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | Response format. Currently, only supported option is json.
$body = new \Swagger\Client\Model\OfficerSearchCriteria(); // \Swagger\Client\Model\OfficerSearchCriteria | Officer search criteria
$offset = 0; // int | Determines the 0-based index of the first element of the collection to be returned
$limit = 10; // int | Configures the maximum number of items from the collection to be returned in the given API call

try {
    $result = $apiInstance->searchOfficersFormatPost($format, $body, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchOfficersFormatPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Response format. Currently, only supported option is json. |
 **body** | [**\Swagger\Client\Model\OfficerSearchCriteria**](../Model/OfficerSearchCriteria.md)| Officer search criteria |
 **offset** | **int**| Determines the 0-based index of the first element of the collection to be returned | [optional] [default to 0]
 **limit** | **int**| Configures the maximum number of items from the collection to be returned in the given API call | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\OfficerSearchResponse**](../Model/OfficerSearchResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchRegionsFormatPost**
> \Swagger\Client\Model\RegionSearchResponse searchRegionsFormatPost($format, $body, $offset, $limit)

Find regions (to be used on company/officer search filters)

Find regions based on search criteria. Region IDs can then be used as a value for company or director search filters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | Response format. Currently, only supported option is json.
$body = new \Swagger\Client\Model\RegionSearchCriteria(); // \Swagger\Client\Model\RegionSearchCriteria | Region search criteria
$offset = 0; // int | Determines the 0-based index of the first element of the collection to be returned
$limit = 10; // int | Configures the maximum number of items from the collection to be returned in the given API call

try {
    $result = $apiInstance->searchRegionsFormatPost($format, $body, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchRegionsFormatPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Response format. Currently, only supported option is json. |
 **body** | [**\Swagger\Client\Model\RegionSearchCriteria**](../Model/RegionSearchCriteria.md)| Region search criteria |
 **offset** | **int**| Determines the 0-based index of the first element of the collection to be returned | [optional] [default to 0]
 **limit** | **int**| Configures the maximum number of items from the collection to be returned in the given API call | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\RegionSearchResponse**](../Model/RegionSearchResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

