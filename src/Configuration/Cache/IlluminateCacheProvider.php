<?php

namespace LaravelDoctrine\ODM\Configuration\Cache;

use Illuminate\Contracts\Cache\Factory;
use LaravelDoctrine\ODM\Configuration\Driver;

abstract class IlluminateCacheProvider implements Driver
{
    /**
     * @var Factory
     */
    protected $cache;

    /**
     * @var string
     */
    protected $store;

    /**
     * @param Factory $cache
     */
    public function __construct(Factory $cache)
    {
        $this->cache = $cache;
    }

    /**
     * @param array $settings
     *
     * @return MemcachedCache
     */
    public function resolve(array $settings = [])
    {
        return new IlluminateCacheAdapter(
            $this->cache->store($this->store)
        );
    }
}
