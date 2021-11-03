<?php

namespace Dangkhiem\Helloworld;

use Illuminate\Support\ServiceProvider;

class HelloWorldProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('helloworld', function () {
            return new Hi();
        });
    }
}
