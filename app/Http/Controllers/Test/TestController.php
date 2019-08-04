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
        // Log::emergency('System is down', ['controller' => 'TestController']);
        // Log::channel('syslog')->info('This is for the syslog');
        Log::stack(['daily', 'errorlog'])->emergency('There is some emergency here');
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
