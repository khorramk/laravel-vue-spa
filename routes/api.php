<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * these routes are for authenticating controllers
 * 
 */
Route::post('/registerUsers', 'api\RegisterController@register');
Route::get('/fetchAcheivements', 'FetchUserController@fetch');
Route::get('stats', function(){
    return [
        'series' => 200,
        'lessons' => 1300
    ];
});
Route::middleware('auth:api')->get('/achievements', function(Request $request){
        return [
            'gold',
            'silver',
            'bronze',
        ];
});

Route::get('/generateTokens', function(){
    return ['token' => str_random(60)];
});

/**
 * these routes are for getting clients info to show to dashboard
 */
