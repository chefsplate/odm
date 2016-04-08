<?php

namespace LaravelDoctrine\ODM\Configuration\Cache;

class MemcachedCacheProvider extends IlluminateCacheProvider
{
    /**
     * @var string
     */
    protected $store = 'memcached';
}
