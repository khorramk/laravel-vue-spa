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

Route::patch('/generateTokens/{user}', 'api\TokenController@generate')->middleware('auth:api');
/**
 * these routes are for getting clients info to show to dashboard
 */
