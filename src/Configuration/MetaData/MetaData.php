<?php

namespace LaravelDoctrine\ODM\Configuration\MetaData;

use Doctrine\ORM\Mapping\ClassMetadataFactory;
use LaravelDoctrine\ODM\Configuration\Driver;

abstract class MetaData implements Driver
{
    /**
     * @return string
     */
    public function getClassMetadataFactoryName()
    {
        return ClassMetadataFactory::class;
    }
}
