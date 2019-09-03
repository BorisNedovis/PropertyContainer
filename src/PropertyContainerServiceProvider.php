<?php

namespace BorisNedovis\PropertyContainer;

use Illuminate\Support\ServiceProvider;

class PropertyContainerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['property-container'] = $this->app->share(function(){

            return new PropertyContainer();

        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
