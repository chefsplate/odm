<?php

use Illuminate\Contracts\Cache\Factory;
use Illuminate\Contracts\Cache\Repository;
use LaravelDoctrine\ODM\Configuration\Cache\IlluminateCacheAdapter;
use LaravelDoctrine\ODM\Configuration\Cache\MemcachedCacheProvider;
use Mockery as m;

class MemcachedCacheProviderTest extends AbstractCacheProviderTest
{
    public function getProvider()
    {
        $repo    = m::mock(Repository::class);
        $manager = m::mock(Factory::class);
        $manager->shouldReceive('store')
                ->with('memcached')
                ->once()->andReturn($repo);

        return new MemcachedCacheProvider(
            $manager
        );
    }

    public function getExpectedInstance()
    {
        return IlluminateCacheAdapter::class;
    }
}
