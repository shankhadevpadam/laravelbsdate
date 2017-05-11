<?php

namespace Shankhadev\Bsdate;

use Illuminate\Support\ServiceProvider;

class BsdateServiceProvider extends ServiceProvider
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
        $this->app->make('Shankhadev\Bsdate\BsdateController');
        $this->app->bind('bsdate', function () {
            return new \Shankhadev\Bsdate\BsdateController();
        });
    }
}
