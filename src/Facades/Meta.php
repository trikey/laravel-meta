<?php

namespace Trikey\Meta\Facades;

use Illuminate\Support\Facades\Facade;

class Meta extends Facade
{
    protected static function getFacadeAccessor()
    {
        return '\Trikey\Meta\Meta';
    }
}
