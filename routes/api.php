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

Route::get('movie','MovieController@index');
Route::get('movie/{id}','MovieController@show');

Route::group(['middleware'=>'auth.basic.once'],function(){
    Route::post('movie','MovieController@store');
    Route::put('movie/{id}','MovieController@update');
    Route::delete('movie/{id}','MovieController@delete');
    Route::put('movie/{id}/rent','MovieController@putRent');
    Route::put('movie/{id}/return','MovieController@putReturn');
});