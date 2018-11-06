<?php

namespace Trikey\Meta;

use Illuminate\Support\ServiceProvider;

class MetaServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton('\Trikey\Meta\Meta', function ($app) {
            return new Meta();
        });
    }

    public function provides()
    {
        return ['\Trikey\Meta\Meta'];
    }
}
