<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Auth;
class Handler extends ExceptionHandler
{
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        //   if ($request->is('teacher') || $request->is('teacher-Home')) {
        //     return redirect()->guest('teacher-login');
        // }
         if ($request->is('student') || $request->is('teacher-home')) {
            return redirect()->guest('teacher-login');
        }
         if ($request->is('studentid') || $request->is('nx-home')) {
            return redirect()->guest('nx-login');
        }
     else{
        return redirect()->guest('login');  
    }
} 
}

   


