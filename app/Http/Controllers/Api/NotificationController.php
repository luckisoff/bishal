<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\User;

class NotificationController extends BaseApiController
{
    protected static $firebase_key, $site_name, $url;

    function __construct()
    {
        parent::__construct();

        self::$firebase_key = Helper::setting('firebase_key');

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
            ]
        );
        return self::curlInit($fields);
    }


    protected static function curlinit($fields)
    {
        $headers = array(
            'Authorization: key='. self::$firebase_key,
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

        $res=curl_exec($ch);

        curl_close($ch);

        return $res;
    }
}
