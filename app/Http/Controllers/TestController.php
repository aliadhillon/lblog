<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        // abort(403, 'This is a custom message');
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
