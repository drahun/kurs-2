<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        $this->app->bind('App\Classes\AwesomeClass', function ($app) use ($request) {
            var_dump($request);
            $instance = new \App\Classes\AwesomeClass();
            $instance->incCounter();
            return $instance;
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {


        $this->app->bind('App\Classes\AwesomeClass', function ($app) {
            $instance = new \App\Classes\AwesomeClass();
            $instance->incCounter();
            return $instance;
            //return new \App\Classes\AwesomeClass();
        });
    }
}
