<?php
/**
 * MetricsApi
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
 * MetricsApi Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MetricsApi
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
     * Operation getWebsiteMetrics
     *
     * Get website metrics
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  string $website_id The id of the website. (required)
     * @param  \DateTime $start Start datetime UTC. (optional)
     * @param  \DateTime $end End datetime UTC. (optional)
     * @param  string $granularity Takes one of &#x60;hour&#x60;, &#x60;day&#x60;, &#x60;month&#x60; or &#x60;year&#x60;, defaults to &#x60;day&#x60; (optional)
     *
     * @throws \Upmind\EnhanceSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Upmind\EnhanceSdk\Model\WebsiteMetricsFullListing
     */
    public function getWebsiteMetrics($org_id, $website_id, $start = null, $end = null, $granularity = null)
    {
        list($response) = $this->getWebsiteMetricsWithHttpInfo($org_id, $website_id, $start, $end, $granularity);
        return $response;
    }

    /**
     * Operation getWebsiteMetricsWithHttpInfo
     *
     * Get website metrics
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  string $website_id The id of the website. (required)
     * @param  \DateTime $start Start datetime UTC. (optional)
     * @param  \DateTime $end End datetime UTC. (optional)
     * @param  string $granularity Takes one of &#x60;hour&#x60;, &#x60;day&#x60;, &#x60;month&#x60; or &#x60;year&#x60;, defaults to &#x60;day&#x60; (optional)
     *
     * @throws \Upmind\EnhanceSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Upmind\EnhanceSdk\Model\WebsiteMetricsFullListing, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWebsiteMetricsWithHttpInfo($org_id, $website_id, $start = null, $end = null, $granularity = null)
    {
        $request = $this->getWebsiteMetricsRequest($org_id, $website_id, $start, $end, $granularity);

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

            switch($statusCode) {
            
                case 200:
                    if ('\Upmind\EnhanceSdk\Model\WebsiteMetricsFullListing' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Upmind\EnhanceSdk\Model\WebsiteMetricsFullListing' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Upmind\EnhanceSdk\Model\WebsiteMetricsFullListing', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
            
            
            }

            $returnType = '\Upmind\EnhanceSdk\Model\WebsiteMetricsFullListing';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Upmind\EnhanceSdk\Model\WebsiteMetricsFullListing',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
            
            
            }
            throw $e;
        }
    }

    /**
     * Operation getWebsiteMetricsAsync
     *
     * Get website metrics
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  string $website_id The id of the website. (required)
     * @param  \DateTime $start Start datetime UTC. (optional)
     * @param  \DateTime $end End datetime UTC. (optional)
     * @param  string $granularity Takes one of &#x60;hour&#x60;, &#x60;day&#x60;, &#x60;month&#x60; or &#x60;year&#x60;, defaults to &#x60;day&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getWebsiteMetricsAsync($org_id, $website_id, $start = null, $end = null, $granularity = null)
    {
        return $this->getWebsiteMetricsAsyncWithHttpInfo($org_id, $website_id, $start, $end, $granularity)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getWebsiteMetricsAsyncWithHttpInfo
     *
     * Get website metrics
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  string $website_id The id of the website. (required)
     * @param  \DateTime $start Start datetime UTC. (optional)
     * @param  \DateTime $end End datetime UTC. (optional)
     * @param  string $granularity Takes one of &#x60;hour&#x60;, &#x60;day&#x60;, &#x60;month&#x60; or &#x60;year&#x60;, defaults to &#x60;day&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getWebsiteMetricsAsyncWithHttpInfo($org_id, $website_id, $start = null, $end = null, $granularity = null)
    {
        $returnType = '\Upmind\EnhanceSdk\Model\WebsiteMetricsFullListing';
        $request = $this->getWebsiteMetricsRequest($org_id, $website_id, $start, $end, $granularity);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'getWebsiteMetrics'
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  string $website_id The id of the website. (required)
     * @param  \DateTime $start Start datetime UTC. (optional)
     * @param  \DateTime $end End datetime UTC. (optional)
     * @param  string $granularity Takes one of &#x60;hour&#x60;, &#x60;day&#x60;, &#x60;month&#x60; or &#x60;year&#x60;, defaults to &#x60;day&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getWebsiteMetricsRequest($org_id, $website_id, $start = null, $end = null, $granularity = null)
    {

        // verify the required parameter 'org_id' is set
        if ($org_id === null || (is_array($org_id) && count($org_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_id when calling getWebsiteMetrics'
            );
        }

        // verify the required parameter 'website_id' is set
        if ($website_id === null || (is_array($website_id) && count($website_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $website_id when calling getWebsiteMetrics'
            );
        }




        $resourcePath = '/orgs/{org_id}/websites/{website_id}/metrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $start,
            'start', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $end,
            'end', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $granularity,
            'granularity', // param base name
            'string', // openApiType
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


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
            'GET',
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
