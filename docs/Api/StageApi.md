# OpenAPI\Client\StageApi

All URIs are relative to https://api.heystage.com/sdk-api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**access()**](StageApi.md#access) | **POST** /users/{userIdentifier}/features/{featureIdentifier}/access |  |
| [**adjustAccessCount()**](StageApi.md#adjustAccessCount) | **PUT** /users/{userIdentifier}/features/{featureIdentifier}/adjustAccessCount |  |
| [**createOrganization()**](StageApi.md#createOrganization) | **POST** /organizations |  |
| [**createOrganizationCheckoutSession()**](StageApi.md#createOrganizationCheckoutSession) | **POST** /billing/organizations/{organizationIdentifier}/plans/{planIdentifier}/checkoutSessions |  |
| [**createOrganizationUser()**](StageApi.md#createOrganizationUser) | **POST** /organizations/{organizationIdentifier}/users |  |
| [**createUser()**](StageApi.md#createUser) | **POST** /users |  |
| [**createUserCheckoutSession()**](StageApi.md#createUserCheckoutSession) | **POST** /billing/users/{userIdentifier}/plans/{planIdentifier}/checkoutSessions |  |
| [**getOrganization()**](StageApi.md#getOrganization) | **GET** /organizations/{organizationIdentifier} |  |
| [**getOrganizationPlans()**](StageApi.md#getOrganizationPlans) | **GET** /organizations/{organizationIdentifier}/plans |  |
| [**getPlansForOrganizations()**](StageApi.md#getPlansForOrganizations) | **GET** /organizations/plans |  |
| [**getPlansForUsers()**](StageApi.md#getPlansForUsers) | **GET** /users/plans |  |
| [**getUser()**](StageApi.md#getUser) | **GET** /users/{userIdentifier} |  |
| [**getUserPlans()**](StageApi.md#getUserPlans) | **GET** /users/{userIdentifier}/plans |  |
| [**hasAccess()**](StageApi.md#hasAccess) | **GET** /users/{userIdentifier}/features/{featureIdentifier}/access |  |
| [**hasAccesses()**](StageApi.md#hasAccesses) | **GET** /users/{userIdentifier}/accesses |  |
| [**mergeOrganization()**](StageApi.md#mergeOrganization) | **PUT** /organizations/{organizationIdentifier}/merge |  |
| [**resetAccessCount()**](StageApi.md#resetAccessCount) | **PUT** /users/{userIdentifier}/features/{featureIdentifier}/resetAccessCount |  |
| [**updateUser()**](StageApi.md#updateUser) | **PUT** /users/{userIdentifier} |  |


## `access()`

```php
access($user_identifier, $feature_identifier): \OpenAPI\Client\Model\Access
```



### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_identifier** | **string**|  | |
| **feature_identifier** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Access**](../Model/Access.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adjustAccessCount()`

```php
adjustAccessCount($user_identifier, $feature_identifier, $adjust_access_count_arg): \OpenAPI\Client\Model\Access
```



### Example

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
$adjust_access_count_arg = new \OpenAPI\Client\Model\AdjustAccessCountArg(); // \OpenAPI\Client\Model\AdjustAccessCountArg

try {
    $result = $apiInstance->adjustAccessCount($user_identifier, $feature_identifier, $adjust_access_count_arg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->adjustAccessCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_identifier** | **string**|  | |
| **feature_identifier** | **string**|  | |
| **adjust_access_count_arg** | [**\OpenAPI\Client\Model\AdjustAccessCountArg**](../Model/AdjustAccessCountArg.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Access**](../Model/Access.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganization()`

```php
createOrganization($create_organization_arg): \OpenAPI\Client\Model\Organization
```



### Example

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
$create_organization_arg = new \OpenAPI\Client\Model\CreateOrganizationArg(); // \OpenAPI\Client\Model\CreateOrganizationArg

try {
    $result = $apiInstance->createOrganization($create_organization_arg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->createOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_organization_arg** | [**\OpenAPI\Client\Model\CreateOrganizationArg**](../Model/CreateOrganizationArg.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Organization**](../Model/Organization.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationCheckoutSession()`

```php
createOrganizationCheckoutSession($organization_identifier, $plan_identifier, $checkout_session_arg): \OpenAPI\Client\Model\CheckoutSession
```



### Example

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
$organization_identifier = 'organization_identifier_example'; // string
$plan_identifier = 'plan_identifier_example'; // string
$checkout_session_arg = new \OpenAPI\Client\Model\CheckoutSessionArg(); // \OpenAPI\Client\Model\CheckoutSessionArg

try {
    $result = $apiInstance->createOrganizationCheckoutSession($organization_identifier, $plan_identifier, $checkout_session_arg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->createOrganizationCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_identifier** | **string**|  | |
| **plan_identifier** | **string**|  | |
| **checkout_session_arg** | [**\OpenAPI\Client\Model\CheckoutSessionArg**](../Model/CheckoutSessionArg.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationUser()`

```php
createOrganizationUser($organization_identifier, $create_organization_user_arg): \OpenAPI\Client\Model\User
```



### Example

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
$organization_identifier = 'organization_identifier_example'; // string
$create_organization_user_arg = new \OpenAPI\Client\Model\CreateOrganizationUserArg(); // \OpenAPI\Client\Model\CreateOrganizationUserArg

try {
    $result = $apiInstance->createOrganizationUser($organization_identifier, $create_organization_user_arg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->createOrganizationUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_identifier** | **string**|  | |
| **create_organization_user_arg** | [**\OpenAPI\Client\Model\CreateOrganizationUserArg**](../Model/CreateOrganizationUserArg.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUser()`

```php
createUser($create_user_arg): \OpenAPI\Client\Model\User
```



### Example

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
$create_user_arg = new \OpenAPI\Client\Model\CreateUserArg(); // \OpenAPI\Client\Model\CreateUserArg

try {
    $result = $apiInstance->createUser($create_user_arg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_user_arg** | [**\OpenAPI\Client\Model\CreateUserArg**](../Model/CreateUserArg.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUserCheckoutSession()`

```php
createUserCheckoutSession($user_identifier, $plan_identifier, $checkout_session_arg): \OpenAPI\Client\Model\CheckoutSession
```



### Example

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
$plan_identifier = 'plan_identifier_example'; // string
$checkout_session_arg = new \OpenAPI\Client\Model\CheckoutSessionArg(); // \OpenAPI\Client\Model\CheckoutSessionArg

try {
    $result = $apiInstance->createUserCheckoutSession($user_identifier, $plan_identifier, $checkout_session_arg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->createUserCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_identifier** | **string**|  | |
| **plan_identifier** | **string**|  | |
| **checkout_session_arg** | [**\OpenAPI\Client\Model\CheckoutSessionArg**](../Model/CheckoutSessionArg.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganization()`

```php
getOrganization($organization_identifier): \OpenAPI\Client\Model\Organization
```



### Example

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
$organization_identifier = 'organization_identifier_example'; // string

try {
    $result = $apiInstance->getOrganization($organization_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->getOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_identifier** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Organization**](../Model/Organization.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationPlans()`

```php
getOrganizationPlans($organization_identifier): \OpenAPI\Client\Model\OrganizationPlans
```



### Example

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
$organization_identifier = 'organization_identifier_example'; // string

try {
    $result = $apiInstance->getOrganizationPlans($organization_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->getOrganizationPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_identifier** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OrganizationPlans**](../Model/OrganizationPlans.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlansForOrganizations()`

```php
getPlansForOrganizations(): \OpenAPI\Client\Model\Plans
```



### Example

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

try {
    $result = $apiInstance->getPlansForOrganizations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->getPlansForOrganizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Plans**](../Model/Plans.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlansForUsers()`

```php
getPlansForUsers(): \OpenAPI\Client\Model\Plans
```



### Example

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

try {
    $result = $apiInstance->getPlansForUsers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->getPlansForUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Plans**](../Model/Plans.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($user_identifier): \OpenAPI\Client\Model\User
```



### Example

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

try {
    $result = $apiInstance->getUser($user_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_identifier** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserPlans()`

```php
getUserPlans($user_identifier): \OpenAPI\Client\Model\UserPlans
```



### Example

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

try {
    $result = $apiInstance->getUserPlans($user_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->getUserPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_identifier** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\UserPlans**](../Model/UserPlans.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hasAccess()`

```php
hasAccess($user_identifier, $feature_identifier): \OpenAPI\Client\Model\Access
```



### Example

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
    $result = $apiInstance->hasAccess($user_identifier, $feature_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->hasAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_identifier** | **string**|  | |
| **feature_identifier** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Access**](../Model/Access.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hasAccesses()`

```php
hasAccesses($user_identifier, $feature_identifiers): \OpenAPI\Client\Model\Accesses
```



### Example

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
$feature_identifiers = ["createWidget","viewWidget"]; // string[]

try {
    $result = $apiInstance->hasAccesses($user_identifier, $feature_identifiers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->hasAccesses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_identifier** | **string**|  | |
| **feature_identifiers** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Accesses**](../Model/Accesses.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mergeOrganization()`

```php
mergeOrganization($organization_identifier, $merge_organization_arg): \OpenAPI\Client\Model\Organization
```



### Example

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
$organization_identifier = 'organization_identifier_example'; // string
$merge_organization_arg = new \OpenAPI\Client\Model\MergeOrganizationArg(); // \OpenAPI\Client\Model\MergeOrganizationArg

try {
    $result = $apiInstance->mergeOrganization($organization_identifier, $merge_organization_arg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->mergeOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_identifier** | **string**|  | |
| **merge_organization_arg** | [**\OpenAPI\Client\Model\MergeOrganizationArg**](../Model/MergeOrganizationArg.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Organization**](../Model/Organization.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetAccessCount()`

```php
resetAccessCount($user_identifier, $feature_identifier): \OpenAPI\Client\Model\Access
```



### Example

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
    $result = $apiInstance->resetAccessCount($user_identifier, $feature_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->resetAccessCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_identifier** | **string**|  | |
| **feature_identifier** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Access**](../Model/Access.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($user_identifier, $update_user_arg): \OpenAPI\Client\Model\User
```



### Example

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
$update_user_arg = new \OpenAPI\Client\Model\UpdateUserArg(); // \OpenAPI\Client\Model\UpdateUserArg

try {
    $result = $apiInstance->updateUser($user_identifier, $update_user_arg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StageApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_identifier** | **string**|  | |
| **update_user_arg** | [**\OpenAPI\Client\Model\UpdateUserArg**](../Model/UpdateUserArg.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[StageApiKey](../../README.md#StageApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.heystage.v1+json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
