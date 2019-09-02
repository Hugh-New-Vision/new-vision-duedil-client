# CallcreditIdentityCheckResponseExtraChecksEmailRiskReport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**score** | **int** | A risk rating on a scale from one to a thousand. The higher the score, the higher the risk | [optional] 
**email_address** | **string** |  | [optional] 
**risk_level** | **string** | An assessment of the level of fraud risk associated with the email address provided, based on the risk score.   Very High - 899-1000  High - 799-898  Medium High - 599-798 Neutral - 300-598  Low - 100-299  Very Low - 0-99 | [optional] 
**description** | **string** | Relevant information to understand the score | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date which the email mailbox was created. | [optional] 
**first_verified_date** | [**\DateTime**](\DateTime.md) | The date which the email address was first verified. | [optional] 
**status** | **string** | Current status of the email address   Active - Email mailbox is currently active  Inactive - Email mailbox is currently not active  Expired - Email mailbox was previously active but not currently  Unknown - Unable to determine email mailbox status | [optional] 
**domain** | [**\Swagger\Client\Model\CallcreditIdentityCheckResponseExtraChecksEmailRiskReportDomain**](CallcreditIdentityCheckResponseExtraChecksEmailRiskReportDomain.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


