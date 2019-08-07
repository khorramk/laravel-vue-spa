<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class AuthenticateController extends Controller
{
    /**
     * @param Request $request
     * @return store
     */
    public function register(Request $request)
    {
        $password = Hash::make($request->password);
        ;
        $user = new User;
        $user->name = $request->user;
        $user->password = $password;
        $user->email = $request->email; 
        $user->save();
        
        Auth::login($user,true);
    }

}
