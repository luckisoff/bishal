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
Route::group(['prefix'=>'v1'],function(){
    Route::post('login/{type?}', 'Api\UserController@login');
    Route::post('register', 'Api\UserController@signup');
    Route::post('top-up', 'Api\UserController@sendTopUp');
    Route::post('password/reset', 'Api\UserController@changePassword');

    //api/v1/user/


    Route::group(['prefix'=>'user','middleware'=>'auth:api'],function(){

        Route::post('feedback','Api\FeedbackController@store');

        Route::get('post/{user_id}','Api\UserPostController@allPostOfSingleUser');

        Route::get('all','Api\UserController@getAllUsers');


        Route::post('post/store','Api\UserPostController@store');

        Route::get('post/comment/{post_id}','Api\UserPostController@getComment');

        Route::post('post/comment/store','Api\UserPostController@commentStore');


        Route::get('fetch/posts','Api\UserPostController@fetchPosts');

        Route::get('fetch/post/{id}','Api\UserPostController@fetchUniquePost');

        Route::get('check/like/{post_id}','Api\LikeController@isLiked');

        Route::get('post/like/{post_id}','Api\LikeController@likeDislike');


        Route::post('profile/update/{user_id}','Api\UserController@updateProfile');

        Route::get('profile/{user_id}','Api\UserController@getProfile');
    });

    //api/v1/birthdate
    Route::group(['prefix'=>'birthdate','middleware'=>'auth:api'],function(){
        //store
        Route::post('store','Api\BirthdateController@store');
        //list
        Route::get('list','Api\BirthdateController@getBirthdates');
        //delete/id
        Route::delete('delete/{id}','Api\BirthdateController@destroy');
    });

    //api/v1/location/
    Route::group(['prefix'=>'location','middleware'=>'auth:api'],function(){
        Route::get('hotels','Api\HotelController@addressWithHotels');

    });

    // api/v1/hotel
    Route::group(['prefix'=>'hotel'],function(){

        Route::get('posts','Api\HotelPostController@hotelPostsWithHotel');
        Route::get('indoor','Api\HotelController@indoorHotels');
        Route::get('outdoor','Api\HotelController@outdoorHotels');

        Route::group(['middleware' => 'auth:api'],function(){
            Route::get('post/toggle-like/{post_id}','Api\HotelPostController@toggleLike');
            Route::post('post/comment/delete','Api\HotelPostController@deleteComment');
            Route::post('post/comment','Api\HotelPostController@storeComment');
            Route::post('place/order','Api\OrderController@store');
            Route::post('confirm/order','Api\OrderController@confirmOrder');
            Route::get('orders/user/{user_id}','Api\OrderController@getUserOrders');
            Route::get('orders/{hotel_id}','Api\OrderController@getAllOrders');
        });

        Route::get('posts/{hotel_id}','Api\HotelPostController@getPosts');
        Route::post('post/comment/{post_id}','Api\HotelPostController@getComments');
        Route::get('menus/{hotel_id}','Api\HotelMenuController@getMenus');
        Route::get('packages/{hotel_id}','Api\HotelMenuController@getPackages');
        Route::get('/{id}','Api\HotelController@singleHotel');
    });

    Route::group(['prefix'=>'gift'],function(){
        Route::get('/categories','Api\GiftController@categories');
        Route::get('/category/{category}','Api\GiftController@gifts');
        Route::get('/top','Api\GiftController@giftForTop');
    });

    Route::group(['prefix'=>'card'],function(){
        Route::get('/','Api\CardController@cards');
    });

    Route::get('stories','Api\StoryController@stories');

});

