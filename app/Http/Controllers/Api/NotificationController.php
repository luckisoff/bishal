<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\User;
use App\Models\Order;

class NotificationController
{
    protected static $firebase_key_user, $firebase_key_hotel, $site_name, $url;

    function __construct()
    {
        parent::__construct();

        self::$firebase_key_user = Helper::setting('firebase_key');

        self::$firebase_key_hotel = Helper::setting('firebase_key_hotel');

        self::$site_name = Helper::setting('name');

        self::$url = Helper::setting('firebase_url');
    }

    public static function newUserWelcome(User $user)
    {
        $fields = array(

            'to' => $user->device_token,

            'notification'=>[

                'title'=>'Welcome Message',

                'text'=>'Dear '.$user->name.'. Welcome to '.self::$site_name.'.'
            ],

            // 'data'=>array(
            //     'type'=>'claim' //extra data payload
            // )
        );
        return self::curlInit($fields);
    }

    public static function orderUser(User $user, Order $order)
    {
        $fields = array(

            'to' => $user->device_token,

            'notification'=>[

                'title'=>'Order Placed!!',

                'text'=>'Dear '.$user->name.'. Your order has been placed. \n Thank you for using our service.'
            ],


            'data'=>array(
                'order'=> $order //extra data payload
            )
        );
        return self::curlInit($fields, self::$firebase_key_user);
    }

    public static function orderHotel(User $user, Order $order)
    {
        $fields = array(

            'to' => $user->device_token,

            'notification'=>[

                'title'=>'New Order!',

                'text'=>'Dear '.$user->name.' A new order has been placed in your hotel. Please confirm it from the system.\n Thank you.'
            ],

            'priority'=>'high',

            'data'=>array(
                'order'=> $order //extra data payload
            )
        );
        return self::curlInit($fields, self::$firebase_key_hotel);
    }


    protected static function curlInit($fields, $firebase_key)
    {
        $headers = array(
            'Authorization:key='. $firebase_key,
            'Content-type: Application/json'
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, self::$url);

        curl_setopt($ch, CURLOPT_POST, true);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        $res = curl_exec($ch);

        curl_close($ch);

        return $res;
    }
}
