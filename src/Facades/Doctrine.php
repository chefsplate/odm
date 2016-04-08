<?php

namespace LaravelDoctrine\ODM\Facades;

use Illuminate\Support\Facades\Facade;
use LaravelDoctrine\ODM\DoctrineManager;

class Doctrine extends Facade
{
    /**
     * Get the registered name of the component.
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return DoctrineManager::class;
    }
}
