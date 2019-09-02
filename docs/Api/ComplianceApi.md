# Swagger\Client\ComplianceApi

All URIs are relative to *https://duedil.io/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callcreditIdentityCheckFormatPost**](ComplianceApi.md#callcreditIdentityCheckFormatPost) | **POST** /callcredit/identity-check.{format} | Identity check
[**duedilCompanyCheckFormatPost**](ComplianceApi.md#duedilCompanyCheckFormatPost) | **POST** /duedil/company-check.{format} | Company check


# **callcreditIdentityCheckFormatPost**
> \Swagger\Client\Model\CallcreditIdentityCheckResponse callcreditIdentityCheckFormatPost($format, $callcredit_identity_check)

Identity check

Perform an identity check against an individual in the UK, powered by Callcredit data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\ComplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | Response format. Currently, only supported option is json.
$callcredit_identity_check = new \Swagger\Client\Model\CallcreditIdentityCheckInput(); // \Swagger\Client\Model\CallcreditIdentityCheckInput | Details about an individual and their address to conduct an identity check.

try {
    $result = $apiInstance->callcreditIdentityCheckFormatPost($format, $callcredit_identity_check);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplianceApi->callcreditIdentityCheckFormatPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Response format. Currently, only supported option is json. |
 **callcredit_identity_check** | [**\Swagger\Client\Model\CallcreditIdentityCheckInput**](../Model/CallcreditIdentityCheckInput.md)| Details about an individual and their address to conduct an identity check. |

### Return type

[**\Swagger\Client\Model\CallcreditIdentityCheckResponse**](../Model/CallcreditIdentityCheckResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **duedilCompanyCheckFormatPost**
> \Swagger\Client\Model\CompanyCheckResponse duedilCompanyCheckFormatPost($format, $body)

Company check

Match given inputs against registered companies in the UK and Ireland. A billable company report will be generated using the following rules:   ### Reasons for a FAIL result - Simplified company status is Closed - A current officer is disqualified - No company was matched - Company matched has no data - PEPs and sanctions check returned one or more businesses with a match score of 100  ### Possible warnings (Will not cause a FAIL) - Simplified company status is Intermediate - One or more Gazette notices were found - No shareholder information was found - No shareholder information was found for the ultimate parent - Ultimate parent is a foreign company - Annual return or confirmation statement is overdue - Accounts are overdue - A former officer is disqualified - PEPs and sanctions check returned one or more businesses with a match score at or above 80  If multiple potential matches are found, a pick list is returned with enough information to allow for a more specific subsequent request (not billable).  ### Sandbox In Sandbox environment this endpoint will generate static response from historical data of real company check reports for 7 predefined company searches. All other requests will result in report not found response (HTTP 404).    ### Example search requests - **Hsbc Holdings Plc**   ```    {     \"companyId\": \"00617987\"   }    ```    --- - **Woolworths Group Plc**   ```    {     \"companyId\": \"03855289\"   }    ```   --- - **Royal Dutch Shell Plc**   ```    {     \"companyId\": \"04366849\"   }    ```   --- - **Evi Technologies Limited**   ```    {     \"companyId\": \"04660006\"   }    ```   --- - **Duedil Limited**   ```    {     \"companyId\": \"06999618\"   }    ```   --- - **Brompton Bicycle Limited**   ```    {     \"companyId\": \"01261512\",     \"name\": \"Brompton Bicycle Limited\",     \"countryCodes\": {         \"values\": [             \"GB\"         ]     }   }    ```   --- - **Tesco name search**   ```    {     \"name\": \"tesco\",     \"countryCodes\": {         \"values\": [             \"GB\"         ]     }   }    ```   ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\ComplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | Response format. Currently, only supported option is json.
$body = new \Swagger\Client\Model\CompanyCheckCriteria(); // \Swagger\Client\Model\CompanyCheckCriteria | Company check criteria.

try {
    $result = $apiInstance->duedilCompanyCheckFormatPost($format, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplianceApi->duedilCompanyCheckFormatPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Response format. Currently, only supported option is json. |
 **body** | [**\Swagger\Client\Model\CompanyCheckCriteria**](../Model/CompanyCheckCriteria.md)| Company check criteria. |

### Return type

[**\Swagger\Client\Model\CompanyCheckResponse**](../Model/CompanyCheckResponse.md)

### Authorization

[UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

