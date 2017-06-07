<?php

namespace Laravelcustompackage\Timezonescustom;

use Illuminate\Support\ServiceProvider;

class TimezonescustomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/routes.php';
        $this->app->make('Laravelcustompackage\Timezonescustom\TimezonescustomController');
    }
}
