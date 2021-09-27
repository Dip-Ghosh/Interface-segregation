<?php

namespace App\Service;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Service\Settings\AreaServiceInterface',
            'App\Service\Settings\AreaServiceImplementation'
        );
        $this->app->bind(
            'App\Service\Settings\LocationServiceInterface',
            'App\Service\Settings\LocationServiceImplementation'
        );
        $this->app->bind(
            'App\Service\Settings\CarTypeService',
            'App\Service\Settings\CarTypeServiceImplementation'
        );
        $this->app->bind(
            'App\Service\Settings\CarBrandService',
            'App\Service\Settings\CarBrandServiceImplementation'
        );
        $this->app->bind(
            'App\Service\Settings\CarModelService',
            'App\Service\Settings\CarModelServiceImplementation'
        );



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