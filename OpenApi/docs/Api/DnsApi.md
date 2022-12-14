# Upmind\EnhanceSdk\DnsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDnsThirdPartyProvider()**](DnsApi.md#createDnsThirdPartyProvider) | **POST** /dns/third-party-providers | Create new third party provider. |
| [**createWebsiteDomainDnsZoneRecord()**](DnsApi.md#createWebsiteDomainDnsZoneRecord) | **POST** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone/records | Create a new dns record for website domain |
| [**deleteDnsThirdPartyProvider()**](DnsApi.md#deleteDnsThirdPartyProvider) | **DELETE** /dns/third-party-providers/{provider_id} | Deletes a third party dns provider. |
| [**deleteWebsiteDomainDnsZoneRecord()**](DnsApi.md#deleteWebsiteDomainDnsZoneRecord) | **DELETE** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone/records/{record_id} | Delete dns zone record |
| [**getDnsThirdPartyProviders()**](DnsApi.md#getDnsThirdPartyProviders) | **GET** /dns/third-party-providers | Lists all third party providers. |
| [**getWebsiteDomainDnsZone()**](DnsApi.md#getWebsiteDomainDnsZone) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone | Get a dns zone for given domain |
| [**updateWebsiteDomainDnsZone()**](DnsApi.md#updateWebsiteDomainDnsZone) | **PATCH** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone | Updates a dns zone SOA for website domain |
| [**updateWebsiteDomainDnsZoneRecord()**](DnsApi.md#updateWebsiteDomainDnsZoneRecord) | **PATCH** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone/records/{record_id} | Updates a dns record for given domain |


## `createDnsThirdPartyProvider()`

```php
createDnsThirdPartyProvider($new_dns_third_party_provider)
```

Create new third party provider.

This operation can only be done by an MO admin. Third party providers are notified about changes to dns zones within Enhance. This endpoint creates a new provider which is going to be notified on provided URL about dns updates. Please not that after adding a new provider using this endpoint, the provider will initially receive a request to delete all its current data and then Enhance will send a request with all existing dns zones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_dns_third_party_provider = new \Upmind\EnhanceSdk\Model\NewDnsThirdPartyProvider(); // \Upmind\EnhanceSdk\Model\NewDnsThirdPartyProvider | Url where the updates are sent and map of header names to their values.

try {
    $apiInstance->createDnsThirdPartyProvider($new_dns_third_party_provider);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->createDnsThirdPartyProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_dns_third_party_provider** | [**\Upmind\EnhanceSdk\Model\NewDnsThirdPartyProvider**](../Model/NewDnsThirdPartyProvider.md)| Url where the updates are sent and map of header names to their values. | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWebsiteDomainDnsZoneRecord()`

```php
createWebsiteDomainDnsZoneRecord($org_id, $website_id, $domain_id, $new_dns_record): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Create a new dns record for website domain

Creates a new dns record for a website's domain dns zone. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$new_dns_record = new \Upmind\EnhanceSdk\Model\NewDnsRecord(); // \Upmind\EnhanceSdk\Model\NewDnsRecord | New dns record details.

try {
    $result = $apiInstance->createWebsiteDomainDnsZoneRecord($org_id, $website_id, $domain_id, $new_dns_record);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->createWebsiteDomainDnsZoneRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |
| **new_dns_record** | [**\Upmind\EnhanceSdk\Model\NewDnsRecord**](../Model/NewDnsRecord.md)| New dns record details. | |

### Return type

[**\Upmind\EnhanceSdk\Model\NewResourceUuid**](../Model/NewResourceUuid.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDnsThirdPartyProvider()`

```php
deleteDnsThirdPartyProvider($provider_id)
```

Deletes a third party dns provider.

This operation can only be done by an MO admin. Third party providers are notified about changes to dns zones within Enhance. This endpoint removes an existing provider. After this endpoint resolves, no new dns zones are going to be replicated to the provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_id = 56; // int | The id of the third party provider which can be obtained by querying the GET /dns/third-party-providers endpoint.

try {
    $apiInstance->deleteDnsThirdPartyProvider($provider_id);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->deleteDnsThirdPartyProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_id** | **int**| The id of the third party provider which can be obtained by querying the GET /dns/third-party-providers endpoint. | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebsiteDomainDnsZoneRecord()`

```php
deleteWebsiteDomainDnsZoneRecord($org_id, $website_id, $domain_id, $record_id)
```

Delete dns zone record

Deletes a dns zone record for given domain. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$record_id = 'record_id_example'; // string | The id of the record.

try {
    $apiInstance->deleteWebsiteDomainDnsZoneRecord($org_id, $website_id, $domain_id, $record_id);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->deleteWebsiteDomainDnsZoneRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |
| **record_id** | **string**| The id of the record. | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDnsThirdPartyProviders()`

```php
getDnsThirdPartyProviders(): \Upmind\EnhanceSdk\Model\DnsThirdPartyProvider[]
```

Lists all third party providers.

This operation can only be done by an MO admin. Third party providers are notified about changes to dns zones within Enhance. This endpoint lists all registered URLs which listen to these changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDnsThirdPartyProviders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->getDnsThirdPartyProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\DnsThirdPartyProvider[]**](../Model/DnsThirdPartyProvider.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteDomainDnsZone()`

```php
getWebsiteDomainDnsZone($org_id, $website_id, $domain_id): \Upmind\EnhanceSdk\Model\DnsZone
```

Get a dns zone for given domain

Returns details about the dns zone of given domain. Returns Soa record and all other records. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.

try {
    $result = $apiInstance->getWebsiteDomainDnsZone($org_id, $website_id, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->getWebsiteDomainDnsZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |

### Return type

[**\Upmind\EnhanceSdk\Model\DnsZone**](../Model/DnsZone.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebsiteDomainDnsZone()`

```php
updateWebsiteDomainDnsZone($org_id, $website_id, $domain_id, $update_dns_zone)
```

Updates a dns zone SOA for website domain

Partially updates dns zone SOA record for existing zone. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$update_dns_zone = new \Upmind\EnhanceSdk\Model\UpdateDnsZone(); // \Upmind\EnhanceSdk\Model\UpdateDnsZone | Fields to update.

try {
    $apiInstance->updateWebsiteDomainDnsZone($org_id, $website_id, $domain_id, $update_dns_zone);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->updateWebsiteDomainDnsZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |
| **update_dns_zone** | [**\Upmind\EnhanceSdk\Model\UpdateDnsZone**](../Model/UpdateDnsZone.md)| Fields to update. | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebsiteDomainDnsZoneRecord()`

```php
updateWebsiteDomainDnsZoneRecord($org_id, $website_id, $domain_id, $record_id, $update_dns_record)
```

Updates a dns record for given domain

Partially updates a dns record for existing zone. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$record_id = 'record_id_example'; // string | The id of the record.
$update_dns_record = new \Upmind\EnhanceSdk\Model\UpdateDnsRecord(); // \Upmind\EnhanceSdk\Model\UpdateDnsRecord | Fields to update.

try {
    $apiInstance->updateWebsiteDomainDnsZoneRecord($org_id, $website_id, $domain_id, $record_id, $update_dns_record);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->updateWebsiteDomainDnsZoneRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |
| **record_id** | **string**| The id of the record. | |
| **update_dns_record** | [**\Upmind\EnhanceSdk\Model\UpdateDnsRecord**](../Model/UpdateDnsRecord.md)| Fields to update. | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
