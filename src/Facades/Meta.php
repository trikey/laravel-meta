<?php

namespace Trikey\LaravelMeta\Facades;

use Illuminate\Support\Facades\Facade;

class Meta extends Facade
{
    protected static function getFacadeAccessor()
    {
        return '\Trikey\LaravelMeta\Meta';
    }
}
