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

Route::get('/test', function(){
    return response()->json([
        'user'=>[
            'first_name' => 'salim ibrahim',
            'last_name' => 'panky'
        ]
    ]);
});



Route::post('register', 'RegistrationController@Register');
Route::get('getUser', 'RegistrationController@getUser');

Route::post('login', 'UsersController@Login');

Route::get('logout', 'LoginController@Logout');

Route::get('/salim', function (Request $request) {
    return ['salim', 'tahir', 'bola', 'tilewa'];
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
