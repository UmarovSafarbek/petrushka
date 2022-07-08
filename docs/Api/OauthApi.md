# Ensi\AdminAuthClient\OauthApi

All URIs are relative to *http://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createToken**](OauthApi.md#createToken) | **POST** /oauth/token | Создать новый токен аутентификации
[**deleteToken**](OauthApi.md#deleteToken) | **DELETE** /oauth/tokens/{id} | Удалить токен аутентификации



## createToken

> \Ensi\AdminAuthClient\Dto\CreateTokenResponse createToken($create_token_request)

Создать новый токен аутентификации

Создать новый токен аутентификации

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\AdminAuthClient\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_token_request = new \Ensi\AdminAuthClient\Dto\CreateTokenRequest(); // \Ensi\AdminAuthClient\Dto\CreateTokenRequest | 

try {
    $result = $apiInstance->createToken($create_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->createToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_token_request** | [**\Ensi\AdminAuthClient\Dto\CreateTokenRequest**](../Model/CreateTokenRequest.md)|  |

### Return type

[**\Ensi\AdminAuthClient\Dto\CreateTokenResponse**](../Model/CreateTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteToken

> deleteToken($id)

Удалить токен аутентификации

Удалить токен аутентификации

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Ensi\AdminAuthClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ensi\AdminAuthClient\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = b292369ad4d10944183cc5f05c77528e3749202b9745ea0bd88f6b1e6181fff6e364bd36cd11a4ed; // string | Строковый id

try {
    $apiInstance->deleteToken($id);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->deleteToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Строковый id |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

