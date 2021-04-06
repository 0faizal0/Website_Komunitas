<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;

class AuthFailedException extends Exception
{
    public function report($request)
    {
        return response()->json([
            'message'=>'Your credentails is incorrect'
        ],422);


        // if ($exception instanceof AuthFailedException) {
        //     return response()->view('errors.custom', [], 500);
        // }

        // return parent::render($request, $exception);
    }

}
