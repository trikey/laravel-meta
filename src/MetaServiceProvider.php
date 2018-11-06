<?php

namespace Trikey\LaravelMeta;

use Illuminate\Support\ServiceProvider;

class MetaServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton('\Trikey\LaravelMeta\Meta', function ($app) {
            return new Meta();
        });
    }

    public function provides()
    {
        return ['\Trikey\LaravelMeta\Meta'];
    }
}
