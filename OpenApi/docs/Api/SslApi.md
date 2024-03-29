# Upmind\EnhanceSdk\SslApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWebsiteDomainSslCert()**](SslApi.md#getWebsiteDomainSslCert) | **GET** /v2/domains/{domain_id}/ssl | Returns the SSL for this website domain |
| [**setWebsiteDomainForceSsl()**](SslApi.md#setWebsiteDomainForceSsl) | **PUT** /v2/domains/{domain_id}/ssl/force_ssl | Set \&quot;force ssl\&quot; status for domain mapping |
| [**uploadWebsiteDomainSslCert()**](SslApi.md#uploadWebsiteDomainSslCert) | **POST** /v2/domains/{domain_id}/ssl | Upload custom ssl certificate, key and optional fullchain for a given website |


## `getWebsiteDomainSslCert()`

```php
getWebsiteDomainSslCert($domain_id): \Upmind\EnhanceSdk\Model\DomainSslCertWithData
```

Returns the SSL for this website domain

Endpoint for retrieving SSL certificates for a given website including certificates generated by letsencrypt

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain_id = 'domain_id_example'; // string | The id of the domain.

try {
    $result = $apiInstance->getWebsiteDomainSslCert($domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->getWebsiteDomainSslCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **string**| The id of the domain. | |

### Return type

[**\Upmind\EnhanceSdk\Model\DomainSslCertWithData**](../Model/DomainSslCertWithData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setWebsiteDomainForceSsl()`

```php
setWebsiteDomainForceSsl($domain_id, $body)
```

Set \"force ssl\" status for domain mapping

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain_id = 'domain_id_example'; // string | The id of the domain.
$body = True; // bool | Boolean \"force ssl\" setting

try {
    $apiInstance->setWebsiteDomainForceSsl($domain_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->setWebsiteDomainForceSsl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **string**| The id of the domain. | |
| **body** | **bool**| Boolean \&quot;force ssl\&quot; setting | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadWebsiteDomainSslCert()`

```php
uploadWebsiteDomainSslCert($domain_id, $ssl_cert): \Upmind\EnhanceSdk\Model\NewSslCert
```

Upload custom ssl certificate, key and optional fullchain for a given website

Endpoint for uploading custom SSL certificate for a given website. Verifies the cert key and maps to relevant domains that the certificate can be applied to. Returns error if no domain match is found. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain_id = 'domain_id_example'; // string | The id of the domain.
$ssl_cert = new \Upmind\EnhanceSdk\Model\SslCert(); // \Upmind\EnhanceSdk\Model\SslCert | Cert, private key and optional fullchain.

try {
    $result = $apiInstance->uploadWebsiteDomainSslCert($domain_id, $ssl_cert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->uploadWebsiteDomainSslCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **string**| The id of the domain. | |
| **ssl_cert** | [**\Upmind\EnhanceSdk\Model\SslCert**](../Model/SslCert.md)| Cert, private key and optional fullchain. | |

### Return type

[**\Upmind\EnhanceSdk\Model\NewSslCert**](../Model/NewSslCert.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
