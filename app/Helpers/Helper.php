<?php
namespace App\Helpers;

use Illuminate\Support\Facades\File;
use App\Models\Setting;

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

    public static function delete_image($file,$path='/app/public/user/post')
    {
        $file=storage_path($path.'/'.$file);

        if(File::exists($file))
        {
            File::delete($file);
        }
    }

    public static function setting($key = 'name')
    {
        $setting = Setting::where('key',$key)->first();
        return $setting?$setting->value:'';
    }
}
