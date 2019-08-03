<?php

namespace App\Http\Controllers;

use App\Exceptions\CustomException;

class ExceptionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        throw new CustomException('This is CustomException', 500);
    }
}
