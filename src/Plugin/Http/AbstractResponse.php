<?php

namespace Cyclonecode\Plugin\Http;

abstract class AbstractResponse implements ResponseInterface
{
    /** @var array */
    private $headers = [];

    /** @var string */
    private $body;

    /** @var int */
    private $httpCode;

    public function __construct(string $body, array $headers, int $httpCode)
    {
        $this->body = $body;
        $this->headers = $headers;
        $this->httpCode = $httpCode;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getHeader(string $name)
    {
        return $this->headers[$name] ?? null;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function toJSON()
    {
        return json_decode($this->body);
    }

    public function getHttpCode(): int
    {
        return $this->httpCode;
    }
}
