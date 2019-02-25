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

Route::get('users','UserApiController@index');

Route::get('user/{id}','UserApiController@show');

//create New user
Route::post('user/store','UserApiController@store');

//Update user account
Route::put('user','UserApiController@update');

//Delete account
Route::delete('user/{id}','UserApiController@destroy');


