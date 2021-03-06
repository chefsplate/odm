<?php

use Doctrine\Common\Cache\ArrayCache;
use LaravelDoctrine\ODM\Configuration\Cache\ArrayCacheProvider;

class ArrayCacheProviderTest extends AbstractCacheProviderTest
{
    public function getProvider()
    {
        return new ArrayCacheProvider;
    }

    public function getExpectedInstance()
    {
        return ArrayCache::class;
    }
}
