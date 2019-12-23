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
Route::group(['prefix'=>'v1'],function(){
    Route::post('login', 'Api\UserController@login');
    Route::post('register', 'Api\UserController@signup');
    Route::post('top-up', 'Api\UserController@sendTopUp');
    Route::post('password/reset', 'Api\UserController@changePassword');


    Route::group(['middleware'=>'auth:api'],function(){

    });
});

