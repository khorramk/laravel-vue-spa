<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\User;
class TokenController extends Controller
{
    /**
     * @param Request $request
     * @return $token
     */
    public function generate($id)
    {
        
       $token =  Str::random(60);
      

      

       User::find($id)->forceFill([
        'api_token' => hash('sha256', $token),
        ])->save();
        

        return Route::view('/getToken', 'getToken', ['token' => $token]);
    }
}
