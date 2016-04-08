<?php

namespace LaravelDoctrine\ODM\Configuration\Cache;

use Doctrine\Common\Cache\VoidCache;
use LaravelDoctrine\ODM\Configuration\Driver;

class VoidCacheProvider implements Driver
{
    /**
     * @param array $settings
     *
     * @return VoidCache
     */
    public function resolve(array $settings = [])
    {
        return new VoidCache();
    }
}
