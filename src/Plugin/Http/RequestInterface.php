<?php

namespace Cyclonecode\Plugin\Http;

interface RequestInterface
{
    const CURL_TIMEOUT = 10000;
    const VERB_HEAD = 'HEAD';
    const VERB_GET = 'GET';
    const VERB_POST = 'POST';
    const VERB_PUT = 'PUT';
    const VERB_PATCH = 'PATCH';
    const VERB_OPTIONS = 'OPTIONS';

    public function head($url, array $args = []);
    public function get($url, array $args = []);
    public function post($url, array $args = []);
    public function put($url, array $args = []);
    public function patch($url, array $args = []);
    public function execute($url, array $args = []);
}
