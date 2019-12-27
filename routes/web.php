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
    \Artisan::call('db:seed');
    return view('welcome');
});

//dashboard group starts
Route::group(['prefix'=>'dashboard'],function(){
    Route::group(['middleware'=>'dashboard'],function(){
        Route::get('/','Admin\DashBoardController@dashboard')->name('dashboard');
        Route::get('/documentation',function(){
            return view('apidoc.index');
        })->name('apidoc');
        // admin user management
        Route::group(['prefix'=>'user'],function(){
            Route::get('/','Admin\UserController@index')->name('dashboard.users');
            Route::get('/edit/{user}','Admin\UserController@edit')->name('dashboard.user.edit');
            Route::post('/update/{user}','Admin\UserController@update')->name('dashboard.user.update');
            Route::post('/delete/{user}','Admin\UserController@destroy')->name('dashboard.user.delete');
            Route::get('/update/permission','Admin\UserController@updatePermission')->name('dashboard.user.permission');
            Route::get('/posts','Admin\UserPostController@index')->name('dashboard.user.posts');
            Route::get('/post/view/{post}','Admin\UserPostController@show')->name('dashboard.user.post');
            Route::post('/post/delete/{post}','Admin\UserPostController@destroy')->name('dashboard.user.post.delete');
        });
    });
    Route::get('/login','Admin\AdminAuthController@showLoginForm')->name('dashboard.login');
    Route::post('/login','Admin\AdminAuthController@login')->name('dashboard.login.post');
    Route::post('/logout','Admin\AdminAuthController@logout')->name('dashboard.logout');

});
//dashboard group ends


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
