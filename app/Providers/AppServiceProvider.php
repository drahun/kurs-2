<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider{
    public function boot(){
        require_once(app_path() . '/Classes/helpers.php');
    }


    public function register(){

    }
}
