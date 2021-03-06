<?php

namespace LaravelDoctrine\ODM\Configuration\Cache;

use LaravelDoctrine\ODM\Configuration\Manager;

class CacheManager extends Manager
{
    /**
     * Get the default driver name.
     * @return string
     */
    public function getDefaultDriver()
    {
        return $this->container->make('config')->get('doctrine.cache.default', 'array');
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return __NAMESPACE__;
    }

    /**
     * @return string
     */
    public function getClassSuffix()
    {
        return 'CacheProvider';
    }
}
