<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $pages = collect(Storage::disk('views')->files('pages'))->map(function($file){
            return explode('.', $file, 2)[0];
        });

        return view('page')->with('pages', $pages);
    }
}
