# # Problem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **int** |  | [optional]
**type** | **string** | URI indicating error type. | [optional]
**status** | **int** | HTTP status code. | [optional]
**title** | **string** | Human-readable error title. | [optional]
**detail** | **string** | Human-readable error details. | [optional]
**error_code** | **string** | Error code describing the error. When it&#39;s &#x60;FORM_VALIDATION_ERROR&#x60;, &#x60;fieldErrors&#x60; is populated. | [optional]
**field_errors** | [**\OpenAPI\Client\Model\FieldError[]**](FieldError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
