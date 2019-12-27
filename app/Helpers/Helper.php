<?php
namespace App\Helpers;

class Helper
{
    public static function wish()
    {
        $hour=now()->format("H");
        return ($hour<12)?'Morning':($hour<16?'Afternoon':'Evening');
    }

    public static function upload_image($file,$path='/app/public/user/post')
    {
        $name = rand(15,1500).time().'.'.$file->getClientOriginalExtension();
        $file->move(storage_path().$path, $name);
        return $name;
    }
}
