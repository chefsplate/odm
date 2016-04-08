<?php

namespace LaravelDoctrine\ODM\Configuration\Cache;

class RedisCacheProvider extends IlluminateCacheProvider
{
    /**
     * @var string
     */
    protected $store = 'redis';
}
