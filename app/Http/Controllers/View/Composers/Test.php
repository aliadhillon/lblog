<?php

namespace App\Http\Controllers\View\Composers;

use Illuminate\View\View;

class Test
{
    public function compose(View $view)
    {
        $view->with('data', 'This is the data has been added by View::composer from Service Provider.');
    }
    public function create(View $view)
    {
        $view->with('data', 'This is the data has been added by View::composer from Service Provider.');
    }
}
