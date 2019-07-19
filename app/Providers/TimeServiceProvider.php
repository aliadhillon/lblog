<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class TimeServiceProvider extends ServiceProvider
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
        $time = Carbon::now()->isoFormat('h:mm A');
        $date = Carbon::now()->isoFormat('dddd, D MMMM, YYYY');
        View::share(compact('time', 'date'));
    }
}
