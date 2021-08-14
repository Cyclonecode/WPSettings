<?php

namespace Cyclonecode\Plugin\Cache;

interface CacheInterface
{
    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key);

    /**
     * @param string $key
     * @param mixed $value
     * @param int $ttl
     * @return mixed
     */
    public function set(string $key, $value, int $ttl = 0);

    /**
     * @param string $key
     * @return mixed
     */
    public function delete(string $key);

    /**
     * @param string $key
     * @return mixed
     */
    public function exists(string $key);
}
