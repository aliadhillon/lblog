<?php

namespace App\Providers;

use App\Twitter\Twitter;
use Illuminate\Support\ServiceProvider;

class SocialServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $twitter = new Twitter(config('services.twitter.apikey'));
        // $this->app->instance(Twitter::class, $twitter);

        // $this->app->when(Twitter::class)
            // ->needs('$apiKey')
            // ->give(bcrypt(config('services.twitter.apikey')));

        $this->app->extend(Twitter::class, function($twitter){
            $twitter->additional = 'Additionanl Value';
            return $twitter;
        });
    }
}
