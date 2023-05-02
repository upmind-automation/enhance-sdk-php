<?php
/**
 * InvitesApi
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
 * The version of the OpenAPI document: 9.1.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
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
 * InvitesApi Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InvitesApi
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

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'acceptInvite' => [
            'application/json',
        ],
        'createInvite' => [
            'application/json',
        ],
        'validateInvite' => [
            'application/json',
        ],
    ];

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
     * Operation acceptInvite
     *
     * Accept invite
     *
     * @param  string $invite_id The id of the invite. (required)
     * @param  \Upmind\EnhanceSdk\Model\AcceptInviteBody $accept_invite_body Login credentials. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['acceptInvite'] to see the possible values for this operation
     *
     * @throws \Upmind\EnhanceSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function acceptInvite($invite_id, $accept_invite_body = null, string $contentType = self::contentTypes['acceptInvite'][0])
    {
        $this->acceptInviteWithHttpInfo($invite_id, $accept_invite_body, $contentType);
    }

    /**
     * Operation acceptInviteWithHttpInfo
     *
     * Accept invite
     *
     * @param  string $invite_id The id of the invite. (required)
     * @param  \Upmind\EnhanceSdk\Model\AcceptInviteBody $accept_invite_body Login credentials. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['acceptInvite'] to see the possible values for this operation
     *
     * @throws \Upmind\EnhanceSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function acceptInviteWithHttpInfo($invite_id, $accept_invite_body = null, string $contentType = self::contentTypes['acceptInvite'][0])
    {
        $request = $this->acceptInviteRequest($invite_id, $accept_invite_body, $contentType);

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
     * Operation acceptInviteAsync
     *
     * Accept invite
     *
     * @param  string $invite_id The id of the invite. (required)
     * @param  \Upmind\EnhanceSdk\Model\AcceptInviteBody $accept_invite_body Login credentials. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['acceptInvite'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function acceptInviteAsync($invite_id, $accept_invite_body = null, string $contentType = self::contentTypes['acceptInvite'][0])
    {
        return $this->acceptInviteAsyncWithHttpInfo($invite_id, $accept_invite_body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation acceptInviteAsyncWithHttpInfo
     *
     * Accept invite
     *
     * @param  string $invite_id The id of the invite. (required)
     * @param  \Upmind\EnhanceSdk\Model\AcceptInviteBody $accept_invite_body Login credentials. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['acceptInvite'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function acceptInviteAsyncWithHttpInfo($invite_id, $accept_invite_body = null, string $contentType = self::contentTypes['acceptInvite'][0])
    {
        $returnType = '';
        $request = $this->acceptInviteRequest($invite_id, $accept_invite_body, $contentType);

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
     * Create request for operation 'acceptInvite'
     *
     * @param  string $invite_id The id of the invite. (required)
     * @param  \Upmind\EnhanceSdk\Model\AcceptInviteBody $accept_invite_body Login credentials. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['acceptInvite'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function acceptInviteRequest($invite_id, $accept_invite_body = null, string $contentType = self::contentTypes['acceptInvite'][0])
    {

        // verify the required parameter 'invite_id' is set
        if ($invite_id === null || (is_array($invite_id) && count($invite_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invite_id when calling acceptInvite'
            );
        }



        $resourcePath = '/invites/{invite_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($invite_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invite_id' . '}',
                ObjectSerializer::toPathValue($invite_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($accept_invite_body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($accept_invite_body));
            } else {
                $httpBody = $accept_invite_body;
            }
        } elseif (count($formParams) > 0) {
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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('id0');
        if ($apiKey !== null) {
            
        }
        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createInvite
     *
     * Create invite
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  \Upmind\EnhanceSdk\Model\NewInvite $new_invite Invite details. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvite'] to see the possible values for this operation
     *
     * @throws \Upmind\EnhanceSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createInvite($org_id, $new_invite, string $contentType = self::contentTypes['createInvite'][0])
    {
        $this->createInviteWithHttpInfo($org_id, $new_invite, $contentType);
    }

    /**
     * Operation createInviteWithHttpInfo
     *
     * Create invite
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  \Upmind\EnhanceSdk\Model\NewInvite $new_invite Invite details. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvite'] to see the possible values for this operation
     *
     * @throws \Upmind\EnhanceSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createInviteWithHttpInfo($org_id, $new_invite, string $contentType = self::contentTypes['createInvite'][0])
    {
        $request = $this->createInviteRequest($org_id, $new_invite, $contentType);

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
     * Operation createInviteAsync
     *
     * Create invite
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  \Upmind\EnhanceSdk\Model\NewInvite $new_invite Invite details. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvite'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInviteAsync($org_id, $new_invite, string $contentType = self::contentTypes['createInvite'][0])
    {
        return $this->createInviteAsyncWithHttpInfo($org_id, $new_invite, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createInviteAsyncWithHttpInfo
     *
     * Create invite
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  \Upmind\EnhanceSdk\Model\NewInvite $new_invite Invite details. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvite'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInviteAsyncWithHttpInfo($org_id, $new_invite, string $contentType = self::contentTypes['createInvite'][0])
    {
        $returnType = '';
        $request = $this->createInviteRequest($org_id, $new_invite, $contentType);

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
     * Create request for operation 'createInvite'
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  \Upmind\EnhanceSdk\Model\NewInvite $new_invite Invite details. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvite'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createInviteRequest($org_id, $new_invite, string $contentType = self::contentTypes['createInvite'][0])
    {

        // verify the required parameter 'org_id' is set
        if ($org_id === null || (is_array($org_id) && count($org_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_id when calling createInvite'
            );
        }

        // verify the required parameter 'new_invite' is set
        if ($new_invite === null || (is_array($new_invite) && count($new_invite) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $new_invite when calling createInvite'
            );
        }


        $resourcePath = '/orgs/{org_id}/invites';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($org_id !== null) {
            $resourcePath = str_replace(
                '{' . 'org_id' . '}',
                ObjectSerializer::toPathValue($org_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($new_invite)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($new_invite));
            } else {
                $httpBody = $new_invite;
            }
        } elseif (count($formParams) > 0) {
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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('id0');
        if ($apiKey !== null) {
            
        }
        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation validateInvite
     *
     * Validate invite
     *
     * @param  string $invite_id The id of the invite. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['validateInvite'] to see the possible values for this operation
     *
     * @throws \Upmind\EnhanceSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Upmind\EnhanceSdk\Model\InviteValidation
     */
    public function validateInvite($invite_id, string $contentType = self::contentTypes['validateInvite'][0])
    {
        list($response) = $this->validateInviteWithHttpInfo($invite_id, $contentType);
        return $response;
    }

    /**
     * Operation validateInviteWithHttpInfo
     *
     * Validate invite
     *
     * @param  string $invite_id The id of the invite. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['validateInvite'] to see the possible values for this operation
     *
     * @throws \Upmind\EnhanceSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Upmind\EnhanceSdk\Model\InviteValidation, HTTP status code, HTTP response headers (array of strings)
     */
    public function validateInviteWithHttpInfo($invite_id, string $contentType = self::contentTypes['validateInvite'][0])
    {
        $request = $this->validateInviteRequest($invite_id, $contentType);

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
                    if ('\Upmind\EnhanceSdk\Model\InviteValidation' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Upmind\EnhanceSdk\Model\InviteValidation' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Upmind\EnhanceSdk\Model\InviteValidation', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Upmind\EnhanceSdk\Model\InviteValidation';
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
                        '\Upmind\EnhanceSdk\Model\InviteValidation',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation validateInviteAsync
     *
     * Validate invite
     *
     * @param  string $invite_id The id of the invite. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['validateInvite'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function validateInviteAsync($invite_id, string $contentType = self::contentTypes['validateInvite'][0])
    {
        return $this->validateInviteAsyncWithHttpInfo($invite_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation validateInviteAsyncWithHttpInfo
     *
     * Validate invite
     *
     * @param  string $invite_id The id of the invite. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['validateInvite'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function validateInviteAsyncWithHttpInfo($invite_id, string $contentType = self::contentTypes['validateInvite'][0])
    {
        $returnType = '\Upmind\EnhanceSdk\Model\InviteValidation';
        $request = $this->validateInviteRequest($invite_id, $contentType);

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
     * Create request for operation 'validateInvite'
     *
     * @param  string $invite_id The id of the invite. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['validateInvite'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function validateInviteRequest($invite_id, string $contentType = self::contentTypes['validateInvite'][0])
    {

        // verify the required parameter 'invite_id' is set
        if ($invite_id === null || (is_array($invite_id) && count($invite_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invite_id when calling validateInvite'
            );
        }


        $resourcePath = '/invites/{invite_id}/validate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($invite_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invite_id' . '}',
                ObjectSerializer::toPathValue($invite_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('id0');
        if ($apiKey !== null) {
            
        }
        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'POST',
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
