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
    return view('welcome');
});

Route::group(['middleware'=>'web'],function(){
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

                Route::group(['prefix'=>'order'],function(){
                    Route::get('confirm/{order}','Admin\OrderController@confirm')->name('dashboard.order.confirm');
                    Route::get('dispatch/{order}','Admin\OrderController@orderDispatch')->name('dashboard.order.dispatch');
                    Route::get('success/{order}','Admin\OrderController@success')->name('dashboard.order.success');
                    Route::get('invoice/{order}','Admin\OrderController@invoice')->name('dashboard.order.invoice');
                });
            });

            Route::group(['prefix'=>'gift'],function(){
                Route::get('/','Admin\GiftController@viewGifts')->name('dashboard.gifts');
                Route::get('/create/{category?}','Admin\GiftController@createGift')->name('dashboard.gift.create');
                Route::get('/show/{gift}','Admin\GiftController@showGift')->name('dashboard.gift.show');
                Route::get('/edit/{gift}','Admin\GiftController@editGift')->name('dashboard.gift.edit');
                Route::post('/update/{gift}','Admin\GiftController@updateGift')->name('dashboard.gift.update');

                Route::get('toggle/{gift}','Admin\GiftController@toggleOnOff')->name('dashboard.gift.toggle');

                Route::post('/store','Admin\GiftController@storeGift')->name('dashboard.gift.store');
                Route::post('/delete/{gift}','Admin\GiftController@deleteGift')->name('dashboard.gift.delete');
            });

            Route::group(['prefix'=>'category'],function(){
                Route::get('/','Admin\GiftController@viewCategory')->name('dashboard.categories');
                Route::get('/create','Admin\GiftController@createCategory')->name('dashboard.category.create');
                Route::post('/store','Admin\GiftController@storeCategory')->name('dashboard.category.store');
                Route::post('/delete/{category}','Admin\GiftController@deleteCategory')->name('dashboard.category.delete');
            });

            Route::group(['prefix'=>'story'],function(){
                Route::get('/','Admin\StoryController@index')->name('dashboard.stories');
                Route::get('/create','Admin\StoryController@create')->name('dashboard.story.create');
                Route::get('/show/{story}','Admin\StoryController@show')->name('dashboard.story.show');
                Route::post('/store','Admin\StoryController@store')->name('dashboard.story.store');
                Route::post('/delete/{story}','Admin\StoryController@destroy')->name('dashboard.story.delete');
            });

            Route::group(['prefix'=>'card'],function(){
                Route::get('/','Admin\CardController@index')->name('dashboard.cards');
                Route::get('/create','Admin\CardController@create')->name('dashboard.card.create');
                Route::post('/store','Admin\CardController@store')->name('dashboard.card.store');
                Route::post('/delete/{card}','Admin\CardController@destroy')->name('dashboard.card.delete');
            });

            Route::group(['prefix' => 'news'], function(){
                Route::get('/', 'Admin\NewsController@index')->name('dashboard.news');
                Route::get('create', 'Admin\NewsController@create')->name('dashboard.news.create');
                Route::post('store', 'Admin\NewsController@store')->name('dashboard.news.store');
                Route::post('delete/{news}', 'Admin\NewsController@destroy')->name('dashboard.news.delete');

                Route::get('show/{news}', 'Admin\NewsController@show')->name('dashboard.news.show');
                Route::get('edit/{news}', 'Admin\NewsController@edit')->name('dashboard.news.edit');
            });

            Route::group(['prefix' => 'events'], function(){
                Route::get('/', 'Admin\EventController@index')->name('dashboard.event');
                Route::get('create', 'Admin\EventController@create')->name('dashboard.event.create');
                Route::post('store', 'Admin\EventController@store')->name('dashboard.event.store');
                Route::post('delete/{event}', 'Admin\EventController@destroy')->name('dashboard.event.delete');

                Route::get('place/top/{event}', 'Admin\EventController@placeTop')->name('dashboard.event.top');

                Route::get('show/{event}', 'Admin\EventController@show')->name('dashboard.event.show');
                Route::get('edit/{event}', 'Admin\EventController@edit')->name('dashboard.event.edit');
            });


            Route::get('setting','Admin\SettingController@setting')->name('dashboard.setting.create');
            Route::post('setting','Admin\SettingController@store')->name('dashboard.setting.store');
        });


        Route::post('/address/store','Admin\AddressController@store')->name('dashboard.address.store');
        Route::get('/address','Admin\AddressController@get')->name('dashboard.address.get');

        Route::get('/address/delete/{address}','Admin\AddressController@destroy')->name('dashboard.address.delete');
        Route::get('/login','Admin\AdminAuthController@showLoginForm')->name('dashboard.login');
        Route::post('/login','Admin\AdminAuthController@login')->name('dashboard.login.post');
        Route::post('/logout','Admin\AdminAuthController@logout')->name('dashboard.logout');
    });
    //dashboard group ends
});



Route::get('/home', 'HomeController@index')->name('home');
