<?php

namespace Cyclonecode\Plugin\Http;

interface ResponseInterface
{
    public function getHeaders(): array;
    public function getHeader(string $name);
    public function getBody(): string;
    public function toJSON();
    public function getHttpCode(): int;
}
