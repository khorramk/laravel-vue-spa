<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class RegisterController extends Controller
{
   /**
     * @param Request $request
     * @return store
     */
    public function register(Request $request)
    {
        $password = Hash::make($request->password);
        $user = new User;
        $user->name = $request->user;
        $user->password = $password;
        $user->email = $request->email; 
        $user->save();

       
         return view('/app', ['user' => $user]);
    }
}
