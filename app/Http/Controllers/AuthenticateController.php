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
        $user->api_token = Str::random(60);
        $user->save();

        Auth::user($user,true);
        dd(Auth::user()->id);
        return redirect('/token');
    }

    public function getToken(User $user)
    {
        dd(Auth::getAuthIdentifier());
        return $user;
       
    }

    public function updateToken(Request $request)
    {
        $token = Str::random(60);

        $request->user()->forceFill([
            'api_token' => hash('sha256', $token),
        ])->save();

        return ['token' => $token];
       
    }
}
