<?php

namespace Cyclonecode\Plugin\Cache;

use Cyclonecode\Plugin\Common\Singleton;

class Transient extends Singleton implements CacheInterface
{
    public function get(string $key)
    {
        return get_transient($key);
    }

    public function set(string $key, $value, int $ttl = 0)
    {
        return set_transient($key, $value, $ttl);
    }

    public function delete(string $key)
    {
        return delete_transient($key);
    }

    public function exists(string $key)
    {
        $foo = !!$this->get($key);
        return $foo;
    }
}
