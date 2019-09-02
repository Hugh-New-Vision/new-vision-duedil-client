# CallcreditIdentityCheckResponseExtraChecksWatchlistScreening

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**count_of_peps** | **int** | Count of potential matches where risk indicator &#x3D; PEP (Politically Exposed Person) | 
**count_of_sanctions** | **int** | Count of potential matches where risk indicator &#x3D; RCA (Relative or Close Associate) | 
**count_of_rc_as** | **int** | Count of potential matches where risk indicator &#x3D; Sanction (Individual has a sanction against them) | 
**watchlist_screening_warning** | **bool** | True if any of the risk indicators counts above are greater than zero | [optional] 
**matches** | [**\Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningMatches[]**](CallcreditIdentityCheckResponseExtraChecksWatchlistScreeningMatches.md) | Matched records | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


