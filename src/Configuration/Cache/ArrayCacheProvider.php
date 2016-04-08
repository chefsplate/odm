<?php

namespace LaravelDoctrine\ODM\Configuration\Cache;

use Doctrine\Common\Cache\ArrayCache;
use LaravelDoctrine\ODM\Configuration\Driver;

class ArrayCacheProvider implements Driver
{
    /**
     * @param array $settings
     *
     * @return ArrayCache
     */
    public function resolve(array $settings = [])
    {
        return new ArrayCache();
    }
}
