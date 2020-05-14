<?php

namespace :uc:vendor\:uc:package\Facades;

use Illuminate\Support\Facades\Facade;

class Field:uc:package extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'field:uc:package';
    }
}
