<?php

declare(strict_types=1);

namespace Abryb\ENadawca;

/**
 * @author Błażej Rybarkiewicz <b.rybarkiewicz@gmail.com>
 */
final class RequestInfo
{
    /**
     * @var string
     */
    protected $requestBody;
    /**
     * @var string
     */
    protected $responseBody;
    /**
     * @var string
     */
    protected $requestHeaders;
    /**
     * @var string
     */
    protected $responseHeaders;

    public function __construct(
        string $requestBody,
        string $responseBody,
        string $requestHeaders,
        string $responseHeaders
    )
    {
        $this->requestBody     = $requestBody;
        $this->responseBody    = $responseBody;
        $this->requestHeaders  = $requestHeaders;
        $this->responseHeaders = $responseHeaders;
    }

    public function getRequestBody(): string
    {
        return $this->requestBody;
    }

    public function getResponseBody(): string
    {
        return $this->responseBody;
    }

    public function getRequestHeaders(): string
    {
        return $this->requestHeaders;
    }

    public function getResponseHeaders(): string
    {
        return $this->responseHeaders;
    }
}
