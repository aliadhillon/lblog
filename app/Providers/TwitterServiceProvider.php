<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Twitter\Twitter;

class TwitterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Twitter::class, function(){
            return new Twitter('Api Key');
        });
    }

    public function provides()
    {
        return [Twitter::class];
    }
}
