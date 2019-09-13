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


Route::get('/register', function(){
    return view('register-form');
});
Route::get('/getToken', function(){
    return view('getToken');
})->name('getToken');

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');

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
// Route::get('/', function(){
//     return view('register-form');
// })->name('register');



// Route::get('/main', function(){
//     return view('app');
// });
