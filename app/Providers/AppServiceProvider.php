<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->isLocal()) {
            $this->app->register(TelescopeServiceProvider::class);
        }

        Response::macro('myview', function($contents){
            return Response::make(strtoupper($contents));
        });

        Validator::extend('lowercase', function($attribute, $value){
            return strtolower($value) === $value;
        }, ':attribute should be lowercase');
    }
}
