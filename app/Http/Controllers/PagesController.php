<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;


class PagesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($page)
    {
        return View::first([
            "pages.{$page}",
            'default'
        ])->with('page', str_replace('-', ' ', $page));
    }
}
