# OpenAPIClient-php

Stage Technologies, Inc. API

Useful links:
- [Stage](https://www.heystage.com/)

For more information, please visit [https://www.heystage.com/](https://www.heystage.com/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: StageApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_identifier = joe@example.com; // string
$feature_identifier = createWidget; // string

try {
    $result = $apiInstance->access($user_identifier, $feature_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->access: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.heystage.com/sdk-api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*StageApi* | [**access**](docs/Api/StageApi.md#access) | **POST** /users/{userIdentifier}/features/{featureIdentifier}/access | 
*StageApi* | [**adjustAccessCount**](docs/Api/StageApi.md#adjustaccesscount) | **PUT** /users/{userIdentifier}/features/{featureIdentifier}/adjustAccessCount | 
*StageApi* | [**createOrganization**](docs/Api/StageApi.md#createorganization) | **POST** /organizations | 
*StageApi* | [**createOrganizationCheckoutSession**](docs/Api/StageApi.md#createorganizationcheckoutsession) | **POST** /billing/organizations/{organizationIdentifier}/plans/{planIdentifier}/checkoutSessions | 
*StageApi* | [**createOrganizationUser**](docs/Api/StageApi.md#createorganizationuser) | **POST** /organizations/{organizationIdentifier}/users | 
*StageApi* | [**createUser**](docs/Api/StageApi.md#createuser) | **POST** /users | 
*StageApi* | [**createUserCheckoutSession**](docs/Api/StageApi.md#createusercheckoutsession) | **POST** /billing/users/{userIdentifier}/plans/{planIdentifier}/checkoutSessions | 
*StageApi* | [**getOrganization**](docs/Api/StageApi.md#getorganization) | **GET** /organizations/{organizationIdentifier} | 
*StageApi* | [**getOrganizationPlans**](docs/Api/StageApi.md#getorganizationplans) | **GET** /organizations/{organizationIdentifier}/plans | 
*StageApi* | [**getUser**](docs/Api/StageApi.md#getuser) | **GET** /users/{userIdentifier} | 
*StageApi* | [**getUserPlans**](docs/Api/StageApi.md#getuserplans) | **GET** /users/{userIdentifier}/plans | 
*StageApi* | [**hasAccess**](docs/Api/StageApi.md#hasaccess) | **GET** /users/{userIdentifier}/features/{featureIdentifier}/access | 
*StageApi* | [**hasAccesses**](docs/Api/StageApi.md#hasaccesses) | **GET** /users/{userIdentifier}/accesses | 
*StageApi* | [**mergeOrganization**](docs/Api/StageApi.md#mergeorganization) | **PUT** /organizations/{organizationIdentifier}/merge | 
*StageApi* | [**resetAccessCount**](docs/Api/StageApi.md#resetaccesscount) | **PUT** /users/{userIdentifier}/features/{featureIdentifier}/resetAccessCount | 
*StageApi* | [**updateUser**](docs/Api/StageApi.md#updateuser) | **PUT** /users/{userIdentifier} | 

## Models

- [Access](docs/Model/Access.md)
- [Accesses](docs/Model/Accesses.md)
- [AdjustAccessCountArg](docs/Model/AdjustAccessCountArg.md)
- [CheckoutSessionArg](docs/Model/CheckoutSessionArg.md)
- [CheckoutSessionArgVendorOptions](docs/Model/CheckoutSessionArgVendorOptions.md)
- [CheckoutSessionArgVendorOptionsStripeOptions](docs/Model/CheckoutSessionArgVendorOptionsStripeOptions.md)
- [CheckoutSessionArgVendorOptionsStripeOptionsSubscriptionData](docs/Model/CheckoutSessionArgVendorOptionsStripeOptionsSubscriptionData.md)
- [CreateOrganizationArg](docs/Model/CreateOrganizationArg.md)
- [CreateOrganizationUserArg](docs/Model/CreateOrganizationUserArg.md)
- [CreateUserArg](docs/Model/CreateUserArg.md)
- [Feature](docs/Model/Feature.md)
- [FieldError](docs/Model/FieldError.md)
- [MergeOrganizationArg](docs/Model/MergeOrganizationArg.md)
- [Organization](docs/Model/Organization.md)
- [OrganizationPlans](docs/Model/OrganizationPlans.md)
- [Plan](docs/Model/Plan.md)
- [PlanFeatures](docs/Model/PlanFeatures.md)
- [Problem](docs/Model/Problem.md)
- [UpdateUserArg](docs/Model/UpdateUserArg.md)
- [User](docs/Model/User.md)
- [UserPlans](docs/Model/UserPlans.md)
- [UserPlansPlans](docs/Model/UserPlansPlans.md)

## Authorization

Authentication schemes defined for the API:
### StageApiKey

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

stage@heystage.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.0.37`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
