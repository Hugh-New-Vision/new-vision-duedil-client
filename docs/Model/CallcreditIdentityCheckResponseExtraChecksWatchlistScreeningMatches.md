# CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningMatches

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**primary_name** | **string** | The Primary Name of the potential Match | [optional] 
**is_active_pep** | **bool** | If the potential match is currently a Politically Exposed Person this will be &#x60;true&#x60; and if it has been one &#x60;false&#x60;. If the risk indicator is not a PEP then it&#39;ll be &#x60;null&#x60; | [optional] 
**risk_category** | **string** | Detail of a single risk category | [optional] 
**title** | **string** | The Title of the potential match | [optional] 
**gender** | **string** | Gender of the potential match | [optional] 
**dates_of_birth** | [**\Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningDatesOfBirth[]**](CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningDatesOfBirth.md) | Dates of birth of the potential match | [optional] 
**countries** | [**\Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningCountries[]**](CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningCountries.md) | Array of countries associated with the match | [optional] 
**match_metadata** | [**\Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningMatchMetadata**](CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningMatchMetadata.md) |  | [optional] 
**last_revised** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


