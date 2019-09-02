# CallcreditIdentityCheckResponseWarnings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**forward_address_links** | **bool** | Whether or not forward address links have been found | 
**deceased** | **bool** | Whether or not the individual matches to deceased data | 
**gone_away** | **bool** | Whether or not the individual is found on the Gone Away Suppression (GAS) from the REaD Group, which tracks relocations in the UK | 
**length_of_residence** | **bool** | Whether or not the individual&#39;s electoral roll registration is less than 12 months old | 
**pep** | **bool** | Whether or not the name matches to the Politically Exposed People database. Null if watchlistScreening module enabled. | 
**sanction** | **bool** | Whether or not the name matches to the HM Treasury financial sanctions database. Null if watchlistScreening module enabled. | 
**sdn** | **bool** | Whether or not the name matches to the OFAC Specially Designated Nationals database | 
**share_length_of_residency** | **bool** | Whether or not any of the applicant&#39;s Callcredit&#39;s SHARE records have been opened within the last 12 months | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


