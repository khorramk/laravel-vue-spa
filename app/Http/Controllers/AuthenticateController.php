<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    /*
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        
        $credentials = $request->only('name', 'password');
        dd($credentials);
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            dd('success');
            return redirect()->intended('/home');
        }
        dd('failed');
    }

}
