<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





// Route::get('/{any}', function () {
//     return view('layouts.app');
// })->where('any', '.*');

/**back end testing */
// Route::get('/form-requests', function(){
//     return view('form');
// });
// /**
//  * gets the token from the database
//  * @return view with $token
//  */
// Route::get('/getToken', function(){
//     return view('getToken');
// });
Route::get('/', function(){
    return view('register-form');
})->name('register');

Route::get('/getToken/{user}', function($user){
    return view('getToken')->with('user', $user);
})->name('getToken');
