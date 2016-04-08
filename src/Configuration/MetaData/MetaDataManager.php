<?php

namespace LaravelDoctrine\ODM\Configuration\MetaData;

use LaravelDoctrine\ODM\Configuration\Manager;

class MetaDataManager extends Manager
{
    /**
     * Get the default driver name.
     * @return string
     */
    public function getDefaultDriver()
    {
        return 'annotations';
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
        return null;
    }
}
