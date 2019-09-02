# CallcreditIdentityCheckResponseExtraChecksRealTimeFraudAlertsReportInconsistencyDataInconsistencies

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The ‘Type’ attribute defines the Inconsistency data item which does not match the input data that the results have been generated for. The ‘Type’ attribute can be one of the following below. | [optional] 
**last_seen** | [**\DateTime**](\DateTime.md) | The date and time that the input data items were last seen inconsistently, within the VelocityPeriod and Level* set in the configuration. | [optional] 
**times_seen** | **int** | The number of times that distinct inconsistent data has been seen, within the VelocityPeriod and Level* set in the configuration. | [optional] 
**warning** | **bool** | If the TimesSeen exceeds the InconsistencyThreshold set in the configuration this will be ‘true’, otherwise ‘false’. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


