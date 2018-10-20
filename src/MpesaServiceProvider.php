<?php

namespace Safaricom\Mpesa;

use Illuminate\Support\ServiceProvider;

class MpesaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //boot any routes, event listeners, or any other functionality you want to add to your package
        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //bind any classes or functionality into the app container
        $this->app->make('Safaricom\Mpesa\MpesaController');//registering a controller
        $this->loadViewsFrom(__DIR__.'/views','mpesa');
    }
}
