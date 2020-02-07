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
        });
            Route::get('/posts','Admin\UserPostController@index')->name('dashboard.user.posts');
            Route::get('/post/view/{post}','Admin\UserPostController@show')->name('dashboard.user.post');
            Route::post('/post/delete/{post}','Admin\UserPostController@destroy')->name('dashboard.user.post.delete');
        
        Route::group(['prefix'=>'hotel'],function(){

            Route::get('/','Admin\HotelController@index')->name('dashboard.hotels')->middleware('permission:create hotel');
            Route::get('/create/{id?}','Admin\HotelController@create')->name('dashboard.hotel.create')->middleware('permission:create hotel');
            Route::post('/store/{id?}','Admin\HotelController@store')->name('dashboard.hotel.store')->middleware('permission:create hotel');
            Route::post('/delete/{id}','Admin\HotelController@destroy')->name('dashboard.hotel.delete')->middleware('permission:delete hotel');
            
            Route::get('/gallery/{hotel}','Admin\HotelController@gallery')->name('dashboard.hotel.gallery');
            Route::post('/gallery/store/{hotel}','Admin\HotelController@galleryStore')->name('dashboard.hotel.gallery.store');
            Route::get('/gallery/delete/{gallery?}','Admin\HotelController@galleryDelete')->name('dashboard.hotel.gallery.delete');

            Route::get('manager/store/{user}/{hotel}','Admin\HotelManagerController@store')->name('dashboard.manager.store')->middleware('permission:create hotel');
            Route::get('manager/delete/{user}/{hotel}','Admin\HotelManagerController@destroy')->name('dashboard.manager.delete')->middleware('permission:view hotel');
            
            Route::get('/show/{hotel}/{page?}','Admin\HotelController@show')->name('dashboard.hotel.show')->middleware('permission:view hotel');

            Route::post('/create/post/store/{hotel}','Admin\HotelPostController@store')->name('dashboard.hotel.post.store')->middleware('permission:view hotel');
            Route::post('/delete/post/{post}','Admin\HotelPostController@destroy')->name('dashboard.hotel.post.delete')->middleware('permission:view hotel');

            Route::group(['prefix'=>'menu'],function(){
                Route::post('store/{hotel}','Admin\MenuController@store')->name('dashboard.menu.store')->middleware('permission:view hotel');
                Route::post('delete/{menu}','Admin\MenuController@destroy')->name('dashboard.menu.delete')->middleware('permission:view hotel');
            });

            Route::group(['prefix'=>'package'],function(){
                Route::post('store/{hotel}','Admin\HotelPackageController@store')->name('dashboard.package.store')->middleware('permission:view hotel');
                Route::post('delete/{package}','Admin\HotelPackageController@destroy')->name('dashboard.package.delete')->middleware('permission:view hotel');
            });

        });


    });


    Route::post('/address/store','Admin\AddressController@store')->name('dashboard.address.store');
    Route::get('/address','Admin\AddressController@get')->name('dashboard.address.get');

    Route::get('/address/delete/{address}','Admin\AddressController@destroy')->name('dashboard.address.delete');
    Route::get('/login','Admin\AdminAuthController@showLoginForm')->name('dashboard.login');
    Route::post('/login','Admin\AdminAuthController@login')->name('dashboard.login.post');
    Route::post('/logout','Admin\AdminAuthController@logout')->name('dashboard.logout');
});
//dashboard group ends


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
