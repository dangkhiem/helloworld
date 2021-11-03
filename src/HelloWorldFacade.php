<?php

namespace Dangkhiem\Helloworld;

use Illuminate\Support\Facades\Facade;

class HelloWorldFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'helloworld';
    }
}
