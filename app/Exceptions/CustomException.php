<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class CustomException extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
     public function report()
     {
        Log::debug($this->getMessage(), ['code' => $this->getCode()]);
    }

    /**
     * Render the exception as an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return response()->view('errors.custom', ['message' => $this->getMessage()], 500);
    }
}
