# Swagger\Client\PEPsAndSanctionsApi

All URIs are relative to *https://duedil.io/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pepsSanctionsBusinessLookupIdFormatGet**](PEPsAndSanctionsApi.md#pepsSanctionsBusinessLookupIdFormatGet) | **GET** /peps-sanctions/business/{lookupId}.{format} | PEPs and Sanctions business lookup
[**pepsSanctionsIndividualLookupIdFormatGet**](PEPsAndSanctionsApi.md#pepsSanctionsIndividualLookupIdFormatGet) | **GET** /peps-sanctions/individual/{lookupId}.{format} | PEPs and Sanctions individuals lookup
[**pepsSanctionsSearchBusinessesFormatPost**](PEPsAndSanctionsApi.md#pepsSanctionsSearchBusinessesFormatPost) | **POST** /peps-sanctions/search/businesses.{format} | PEPs and Sanctions businesses search
[**pepsSanctionsSearchIndividualsFormatPost**](PEPsAndSanctionsApi.md#pepsSanctionsSearchIndividualsFormatPost) | **POST** /peps-sanctions/search/individuals.{format} | PEPs and Sanctions individuals search


# **pepsSanctionsBusinessLookupIdFormatGet**
> \Swagger\Client\Model\PEPsAndSanctionsBusinessLookupResponse pepsSanctionsBusinessLookupIdFormatGet($format, $lookup_id)

PEPs and Sanctions business lookup

Runs a lookup for business with PEPs or sanctions by lookup ID. ### Sandbox The sandbox environment returns static historical data for a predefined business.  All other requests will result in a not found response (HTTP 404).  - Sabtina Ltd - lookupId: **DD-677a7e01005c**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\PEPsAndSanctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | Response format. Currently, only supported option is json.
$lookup_id = "lookup_id_example"; // string | Business or Individual lookup ID

try {
    $result = $apiInstance->pepsSanctionsBusinessLookupIdFormatGet($format, $lookup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PEPsAndSanctionsApi->pepsSanctionsBusinessLookupIdFormatGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Response format. Currently, only supported option is json. |
 **lookup_id** | **string**| Business or Individual lookup ID |

### Return type

[**\Swagger\Client\Model\PEPsAndSanctionsBusinessLookupResponse**](../Model/PEPsAndSanctionsBusinessLookupResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pepsSanctionsIndividualLookupIdFormatGet**
> \Swagger\Client\Model\PEPsAndSanctionsIndividualLookupResponse pepsSanctionsIndividualLookupIdFormatGet($format, $lookup_id)

PEPs and Sanctions individuals lookup

Runs a lookup for individuals with PEPs or sanctions by lookup ID. ### Sandbox The sandbox environment returns static historical data for a predefined individual.  All other requests will result in a not found response (HTTP 404). Personal information relating to individuals such as address and email has been replaced with the following string: `<obfuscated>`  - David Cameron - lookupId: **DD-617b78020152**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\PEPsAndSanctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | Response format. Currently, only supported option is json.
$lookup_id = "lookup_id_example"; // string | Business or Individual lookup ID

try {
    $result = $apiInstance->pepsSanctionsIndividualLookupIdFormatGet($format, $lookup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PEPsAndSanctionsApi->pepsSanctionsIndividualLookupIdFormatGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Response format. Currently, only supported option is json. |
 **lookup_id** | **string**| Business or Individual lookup ID |

### Return type

[**\Swagger\Client\Model\PEPsAndSanctionsIndividualLookupResponse**](../Model/PEPsAndSanctionsIndividualLookupResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pepsSanctionsSearchBusinessesFormatPost**
> \Swagger\Client\Model\PEPsAndSanctionsBusinessSearchResponse pepsSanctionsSearchBusinessesFormatPost($format, $peps_and_sanctions_businesses)

PEPs and Sanctions businesses search

Runs a search for business with PEPs or sanctions. ### Sandbox The sandbox environment returns static historical data for 2 predefined businesses.  All other requests will result in a not found response (HTTP 404).  - **Businesses Search - DueDil Company**   ```   {     \"criteria\": {       \"duedilCompany\": {         \"companyId\": \"01794877\",         \"countryCode\": \"gb\"       }     }    }   ```    ---  - **Businesses Search - Any Business**   ```   {     \"criteria\": {        \"anyBusiness\": {         \"name\": \"Gazprom Media Holding\",         \"countryCode\": \"ru\"       }     }   }   ```    ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\PEPsAndSanctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | Response format. Currently, only supported option is json.
$peps_and_sanctions_businesses = new \Swagger\Client\Model\PEPsAndSanctionsBusinessSearchCriteria(); // \Swagger\Client\Model\PEPsAndSanctionsBusinessSearchCriteria | Details about a business and their address to conduct an PEPs and Sanctions check.

try {
    $result = $apiInstance->pepsSanctionsSearchBusinessesFormatPost($format, $peps_and_sanctions_businesses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PEPsAndSanctionsApi->pepsSanctionsSearchBusinessesFormatPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Response format. Currently, only supported option is json. |
 **peps_and_sanctions_businesses** | [**\Swagger\Client\Model\PEPsAndSanctionsBusinessSearchCriteria**](../Model/PEPsAndSanctionsBusinessSearchCriteria.md)| Details about a business and their address to conduct an PEPs and Sanctions check. |

### Return type

[**\Swagger\Client\Model\PEPsAndSanctionsBusinessSearchResponse**](../Model/PEPsAndSanctionsBusinessSearchResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pepsSanctionsSearchIndividualsFormatPost**
> \Swagger\Client\Model\PEPsAndSanctionsIndividualSearchResponse pepsSanctionsSearchIndividualsFormatPost($format, $peps_and_sanctions_individuals)

PEPs and Sanctions individuals search

Runs a search for individuals with PEPs or sanctions. ### Sandbox The sandbox environment returns static historical data for 2 predefined individuals. All other requests will result in a not found response (HTTP 404). Personal information relating to individuals such as address and email has been replaced with the following string: `<obfuscated>`  - **Individuals Search - DueDil Officer**   ```    {     \"criteria\": {       \"duedilOfficer\": {         \"officerId\": \"915779948\"       }      }   }    ```    ---  - **Individuals Search - Any Individual**   ```    {     \"criteria\": {       \"anyIndividual\": {         \"firstName\": \"David\",         \"lastName\": \"Cameron\",         \"dateOfBirth\": {           \"year\": 1966         }       }     }   }   ```    ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\PEPsAndSanctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | Response format. Currently, only supported option is json.
$peps_and_sanctions_individuals = new \Swagger\Client\Model\PEPsAndSanctionsIndividualSearchCriteria(); // \Swagger\Client\Model\PEPsAndSanctionsIndividualSearchCriteria | Details about an individual and their address to conduct an PEPs and Sanctions check.

try {
    $result = $apiInstance->pepsSanctionsSearchIndividualsFormatPost($format, $peps_and_sanctions_individuals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PEPsAndSanctionsApi->pepsSanctionsSearchIndividualsFormatPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Response format. Currently, only supported option is json. |
 **peps_and_sanctions_individuals** | [**\Swagger\Client\Model\PEPsAndSanctionsIndividualSearchCriteria**](../Model/PEPsAndSanctionsIndividualSearchCriteria.md)| Details about an individual and their address to conduct an PEPs and Sanctions check. |

### Return type

[**\Swagger\Client\Model\PEPsAndSanctionsIndividualSearchResponse**](../Model/PEPsAndSanctionsIndividualSearchResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

