<?php

namespace App\Repository;

use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repository\Base\BaseInterface',
            'App\Repository\Base\BaseRepository'
        );


        $this->app->bind(
            'App\Repository\Setting\LocationInterface',
            'App\Repository\Setting\LocationRepository'
        );
        $this->app->bind(
            'App\Repository\Setting\CarTypeInterface',
            'App\Repository\Setting\CarTypeRepository'
        );
//        $this->app->bind(
//            'App\Repository\Setting\CarBrandInterface',
//            'App\Repository\Setting\CarBrandRepository'
//        );
//        $this->app->bind(
//            'App\Repository\Setting\CarModelInterface',
//            'App\Repository\Setting\CarModelRepository'
//        );
        $this->app->bind(
            'App\Repository\Setting\AreaInterface',
            'App\Repository\Setting\AreaRepository'
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
