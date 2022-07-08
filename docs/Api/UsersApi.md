# Ensi\AdminAuthClient\UsersApi

All URIs are relative to *http://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addRolesToUser**](UsersApi.md#addRolesToUser) | **POST** /users/{id}:add-roles | Добавление ролей пользователю
[**createUser**](UsersApi.md#createUser) | **POST** /users | Создание объекта типа User
[**deleteRoleFromUser**](UsersApi.md#deleteRoleFromUser) | **POST** /users/{id}:delete-role | Удаление роли у пользователя
[**deleteUser**](UsersApi.md#deleteUser) | **DELETE** /users/{id} | Удаление объекта типа User
[**getCurrentUser**](UsersApi.md#getCurrentUser) | **POST** /users:current | Получить текущего пользователя
[**getRole**](UsersApi.md#getRole) | **GET** /roles/{id} | Получение объекта типа Role
[**getUser**](UsersApi.md#getUser) | **GET** /users/{id} | Получение объекта типа User
[**massChangeActive**](UsersApi.md#massChangeActive) | **POST** /users/mass/change-active | Массовая активация/деактивация пользователей
[**patchUser**](UsersApi.md#patchUser) | **PATCH** /users/{id} | Обновления части полей объекта типа User
[**refreshPasswordToken**](UsersApi.md#refreshPasswordToken) | **POST** /users/{id}:refresh-password-token | Обновление токена для установки пароля
[**searchOneUser**](UsersApi.md#searchOneUser) | **POST** /users:search-one | Поиск объекта типа User
[**searchRoles**](UsersApi.md#searchRoles) | **POST** /roles:search | Поиск объектов типа Role
[**searchUsers**](UsersApi.md#searchUsers) | **POST** /users:search | Поиск объектов типа User



## addRolesToUser

> \Ensi\AdminAuthClient\Dto\EmptyDataResponse addRolesToUser($id, $add_roles_to_user_request)

Добавление ролей пользователю

Добавление ролей пользователю

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\AdminAuthClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // int | Числовой id
$add_roles_to_user_request = new \Ensi\AdminAuthClient\Dto\AddRolesToUserRequest(); // \Ensi\AdminAuthClient\Dto\AddRolesToUserRequest | 

try {
    $result = $apiInstance->addRolesToUser($id, $add_roles_to_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->addRolesToUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Числовой id |
 **add_roles_to_user_request** | [**\Ensi\AdminAuthClient\Dto\AddRolesToUserRequest**](../Model/AddRolesToUserRequest.md)|  |

### Return type

[**\Ensi\AdminAuthClient\Dto\EmptyDataResponse**](../Model/EmptyDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createUser

> \Ensi\AdminAuthClient\Dto\UserResponse createUser($create_user_request)

Создание объекта типа User

Создание объекта типа User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\AdminAuthClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_user_request = new \Ensi\AdminAuthClient\Dto\CreateUserRequest(); // \Ensi\AdminAuthClient\Dto\CreateUserRequest | 

try {
    $result = $apiInstance->createUser($create_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_user_request** | [**\Ensi\AdminAuthClient\Dto\CreateUserRequest**](../Model/CreateUserRequest.md)|  |

### Return type

[**\Ensi\AdminAuthClient\Dto\UserResponse**](../Model/UserResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteRoleFromUser

> \Ensi\AdminAuthClient\Dto\EmptyDataResponse deleteRoleFromUser($id, $delete_role_from_user_request)

Удаление роли у пользователя

Удаление роли у пользователя

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\AdminAuthClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // int | Числовой id
$delete_role_from_user_request = new \Ensi\AdminAuthClient\Dto\DeleteRoleFromUserRequest(); // \Ensi\AdminAuthClient\Dto\DeleteRoleFromUserRequest | 

try {
    $result = $apiInstance->deleteRoleFromUser($id, $delete_role_from_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteRoleFromUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Числовой id |
 **delete_role_from_user_request** | [**\Ensi\AdminAuthClient\Dto\DeleteRoleFromUserRequest**](../Model/DeleteRoleFromUserRequest.md)|  |

### Return type

[**\Ensi\AdminAuthClient\Dto\EmptyDataResponse**](../Model/EmptyDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteUser

> \Ensi\AdminAuthClient\Dto\EmptyDataResponse deleteUser($id)

Удаление объекта типа User

Удаление объекта типа User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\AdminAuthClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // int | Числовой id

try {
    $result = $apiInstance->deleteUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Числовой id |

### Return type

[**\Ensi\AdminAuthClient\Dto\EmptyDataResponse**](../Model/EmptyDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCurrentUser

> \Ensi\AdminAuthClient\Dto\UserResponse getCurrentUser()

Получить текущего пользователя

Поиск объектов типа User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Ensi\AdminAuthClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ensi\AdminAuthClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCurrentUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getCurrentUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Ensi\AdminAuthClient\Dto\UserResponse**](../Model/UserResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRole

> \Ensi\AdminAuthClient\Dto\RoleResponse getRole($id, $include)

Получение объекта типа Role

Получение объекта типа Role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\AdminAuthClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // int | Числовой id
$include = 'include_example'; // string | Связанные сущности для подгрузки, через запятую

try {
    $result = $apiInstance->getRole($id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Числовой id |
 **include** | **string**| Связанные сущности для подгрузки, через запятую | [optional]

### Return type

[**\Ensi\AdminAuthClient\Dto\RoleResponse**](../Model/RoleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUser

> \Ensi\AdminAuthClient\Dto\UserResponse getUser($id, $include)

Получение объекта типа User

Получение объекта типа User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\AdminAuthClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // int | Числовой id
$include = 'include_example'; // string | Связанные сущности для подгрузки, через запятую

try {
    $result = $apiInstance->getUser($id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Числовой id |
 **include** | **string**| Связанные сущности для подгрузки, через запятую | [optional]

### Return type

[**\Ensi\AdminAuthClient\Dto\UserResponse**](../Model/UserResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## massChangeActive

> \Ensi\AdminAuthClient\Dto\EmptyDataResponse massChangeActive($mass_change_active)

Массовая активация/деактивация пользователей

Массовая активация/деактивация пользователей

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\AdminAuthClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mass_change_active = new \Ensi\AdminAuthClient\Dto\MassChangeActive(); // \Ensi\AdminAuthClient\Dto\MassChangeActive | 

try {
    $result = $apiInstance->massChangeActive($mass_change_active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->massChangeActive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mass_change_active** | [**\Ensi\AdminAuthClient\Dto\MassChangeActive**](../Model/MassChangeActive.md)|  |

### Return type

[**\Ensi\AdminAuthClient\Dto\EmptyDataResponse**](../Model/EmptyDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchUser

> \Ensi\AdminAuthClient\Dto\UserResponse patchUser($id, $patch_user_request)

Обновления части полей объекта типа User

Обновления части полей объекта типа User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\AdminAuthClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // int | Числовой id
$patch_user_request = new \Ensi\AdminAuthClient\Dto\PatchUserRequest(); // \Ensi\AdminAuthClient\Dto\PatchUserRequest | 

try {
    $result = $apiInstance->patchUser($id, $patch_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->patchUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Числовой id |
 **patch_user_request** | [**\Ensi\AdminAuthClient\Dto\PatchUserRequest**](../Model/PatchUserRequest.md)|  |

### Return type

[**\Ensi\AdminAuthClient\Dto\UserResponse**](../Model/UserResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## refreshPasswordToken

> \Ensi\AdminAuthClient\Dto\EmptyDataResponse refreshPasswordToken($id)

Обновление токена для установки пароля

Обновить токен для установки пароля

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\AdminAuthClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | ID пользователя

try {
    $result = $apiInstance->refreshPasswordToken($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->refreshPasswordToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID пользователя |

### Return type

[**\Ensi\AdminAuthClient\Dto\EmptyDataResponse**](../Model/EmptyDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchOneUser

> \Ensi\AdminAuthClient\Dto\UserResponse searchOneUser($search_users_request)

Поиск объекта типа User

Поиск объектов типа User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\AdminAuthClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_users_request = new \Ensi\AdminAuthClient\Dto\SearchUsersRequest(); // \Ensi\AdminAuthClient\Dto\SearchUsersRequest | 

try {
    $result = $apiInstance->searchOneUser($search_users_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->searchOneUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_users_request** | [**\Ensi\AdminAuthClient\Dto\SearchUsersRequest**](../Model/SearchUsersRequest.md)|  |

### Return type

[**\Ensi\AdminAuthClient\Dto\UserResponse**](../Model/UserResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchRoles

> \Ensi\AdminAuthClient\Dto\SearchRolesResponse searchRoles($search_roles_request)

Поиск объектов типа Role

Поиск объектов типа Role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\AdminAuthClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_roles_request = new \Ensi\AdminAuthClient\Dto\SearchRolesRequest(); // \Ensi\AdminAuthClient\Dto\SearchRolesRequest | 

try {
    $result = $apiInstance->searchRoles($search_roles_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->searchRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_roles_request** | [**\Ensi\AdminAuthClient\Dto\SearchRolesRequest**](../Model/SearchRolesRequest.md)|  |

### Return type

[**\Ensi\AdminAuthClient\Dto\SearchRolesResponse**](../Model/SearchRolesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchUsers

> \Ensi\AdminAuthClient\Dto\SearchUsersResponse searchUsers($search_users_request)

Поиск объектов типа User

Поиск объектов типа User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\AdminAuthClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_users_request = new \Ensi\AdminAuthClient\Dto\SearchUsersRequest(); // \Ensi\AdminAuthClient\Dto\SearchUsersRequest | 

try {
    $result = $apiInstance->searchUsers($search_users_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->searchUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_users_request** | [**\Ensi\AdminAuthClient\Dto\SearchUsersRequest**](../Model/SearchUsersRequest.md)|  |

### Return type

[**\Ensi\AdminAuthClient\Dto\SearchUsersResponse**](../Model/SearchUsersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

