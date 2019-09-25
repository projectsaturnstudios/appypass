<?php

namespace ProjectSaturn\Facades;

use Illuminate\Support\Facades\Facade;

class AppyPass extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'appypass';
    }
}
