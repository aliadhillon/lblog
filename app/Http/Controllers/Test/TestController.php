<?php

namespace App\Http\Controllers\Test;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\TestStoreRequest;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::emergency('This is a sample emergnecy message');
        return view('test.index');
    }

    public function form()
    {
        return view('test.form');
    }

    public function store(TestStoreRequest $request)
    {
        dd($request->all());
    }

}
