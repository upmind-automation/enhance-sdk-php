<?php
/**
 * DomainApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * orchd
 *
 * orchd API docs
 *
 * The version of the OpenAPI document: 7.3.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Upmind\EnhanceSdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Upmind\EnhanceSdk\ApiException;
use Upmind\EnhanceSdk\Configuration;
use Upmind\EnhanceSdk\HeaderSelector;
use Upmind\EnhanceSdk\ObjectSerializer;

/**
 * DomainApi Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DomainApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation enableWebsiteSslCert
     *
     * Enables already stored certificate for a given domain
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  string $website_id The id of the website. (required)
     * @param  string $cert_id The id of the ssl certificate. (required)
     * @param  string $domain_id The id of the domain. (required)
     * @param  bool $force_ssl Forced redirect to SSL for the given domain (optional)
     *
     * @throws \Upmind\EnhanceSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function enableWebsiteSslCert($org_id, $website_id, $cert_id, $domain_id, $force_ssl = null)
    {
        $this->enableWebsiteSslCertWithHttpInfo($org_id, $website_id, $cert_id, $domain_id, $force_ssl);
    }

    /**
     * Operation enableWebsiteSslCertWithHttpInfo
     *
     * Enables already stored certificate for a given domain
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  string $website_id The id of the website. (required)
     * @param  string $cert_id The id of the ssl certificate. (required)
     * @param  string $domain_id The id of the domain. (required)
     * @param  bool $force_ssl Forced redirect to SSL for the given domain (optional)
     *
     * @throws \Upmind\EnhanceSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function enableWebsiteSslCertWithHttpInfo($org_id, $website_id, $cert_id, $domain_id, $force_ssl = null)
    {
        $request = $this->enableWebsiteSslCertRequest($org_id, $website_id, $cert_id, $domain_id, $force_ssl);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            
            
            
            
            
            }
            throw $e;
        }
    }

    /**
     * Operation enableWebsiteSslCertAsync
     *
     * Enables already stored certificate for a given domain
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  string $website_id The id of the website. (required)
     * @param  string $cert_id The id of the ssl certificate. (required)
     * @param  string $domain_id The id of the domain. (required)
     * @param  bool $force_ssl Forced redirect to SSL for the given domain (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function enableWebsiteSslCertAsync($org_id, $website_id, $cert_id, $domain_id, $force_ssl = null)
    {
        return $this->enableWebsiteSslCertAsyncWithHttpInfo($org_id, $website_id, $cert_id, $domain_id, $force_ssl)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation enableWebsiteSslCertAsyncWithHttpInfo
     *
     * Enables already stored certificate for a given domain
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  string $website_id The id of the website. (required)
     * @param  string $cert_id The id of the ssl certificate. (required)
     * @param  string $domain_id The id of the domain. (required)
     * @param  bool $force_ssl Forced redirect to SSL for the given domain (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function enableWebsiteSslCertAsyncWithHttpInfo($org_id, $website_id, $cert_id, $domain_id, $force_ssl = null)
    {
        $returnType = '';
        $request = $this->enableWebsiteSslCertRequest($org_id, $website_id, $cert_id, $domain_id, $force_ssl);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'enableWebsiteSslCert'
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  string $website_id The id of the website. (required)
     * @param  string $cert_id The id of the ssl certificate. (required)
     * @param  string $domain_id The id of the domain. (required)
     * @param  bool $force_ssl Forced redirect to SSL for the given domain (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function enableWebsiteSslCertRequest($org_id, $website_id, $cert_id, $domain_id, $force_ssl = null)
    {

        // verify the required parameter 'org_id' is set
        if ($org_id === null || (is_array($org_id) && count($org_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_id when calling enableWebsiteSslCert'
            );
        }

        // verify the required parameter 'website_id' is set
        if ($website_id === null || (is_array($website_id) && count($website_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $website_id when calling enableWebsiteSslCert'
            );
        }

        // verify the required parameter 'cert_id' is set
        if ($cert_id === null || (is_array($cert_id) && count($cert_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cert_id when calling enableWebsiteSslCert'
            );
        }

        // verify the required parameter 'domain_id' is set
        if ($domain_id === null || (is_array($domain_id) && count($domain_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $domain_id when calling enableWebsiteSslCert'
            );
        }


        $resourcePath = '/orgs/{org_id}/websites/{website_id}/ssl/{cert_id}/domains/{domain_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $force_ssl,
            'forceSsl', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($org_id !== null) {
            $resourcePath = str_replace(
                '{' . 'org_id' . '}',
                ObjectSerializer::toPathValue($org_id),
                $resourcePath
            );
        }
        // path params
        if ($website_id !== null) {
            $resourcePath = str_replace(
                '{' . 'website_id' . '}',
                ObjectSerializer::toPathValue($website_id),
                $resourcePath
            );
        }
        // path params
        if ($cert_id !== null) {
            $resourcePath = str_replace(
                '{' . 'cert_id' . '}',
                ObjectSerializer::toPathValue($cert_id),
                $resourcePath
            );
        }
        // path params
        if ($domain_id !== null) {
            $resourcePath = str_replace(
                '{' . 'domain_id' . '}',
                ObjectSerializer::toPathValue($domain_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
