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
     * @param int $id
     * @return $token
     */
    public function generate(Request $request, $id)
    {
    //    dd($request);
       $token =  Str::random(60);
      
       
      

       User::find($id)->forceFill([
        'api_token' => hash('sha256', $token),
        ])->save();
        
     
        return  redirect()->route('/tokenizer', ['token' => $token]);
    }

    public function update(Request $request)
    {
       User::first()->fill([
           'api_token' => $token = str_random(60),
       ])->save();

       
       return view('getToken')->with('token', $token);
    }
}
