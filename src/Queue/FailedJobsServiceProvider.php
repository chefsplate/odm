<?php

namespace LaravelDoctrine\ODM\Queue;

use Illuminate\Support\ServiceProvider;
use LaravelDoctrine\ODM\DoctrineManager;

class FailedJobsServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->make(DoctrineManager::class)->addPaths([
            __DIR__,
        ]);
    }
}
