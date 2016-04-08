<?php

namespace LaravelDoctrine\ODM\Configuration\Cache;

class ApcCacheProvider extends IlluminateCacheProvider
{
    /**
     * @var string
     */
    protected $store = 'apc';
}
