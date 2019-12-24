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

Route::get('/', function () {
    \Artisan::call('migrate');
    return view('welcome');
});


Route::group(['prefix'=>'dashboard'],function(){
    Route::get('/','Admin\DashBoardController@dashboard')->name('dashboard');
});


Route::get('/documentation',function(){
    return view('apidoc.index');
})->name('apidoc');
