<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends BaseAdminController
{
    protected $storageFolder,$publicFolder;
    function __construct()
    {
        parent::__construct();
        $this->storageFolder='/app/public/setting';
        $this->publicFolder='/storage/setting/';
    }

    public function setting()
    {
        return view('admin.parts.setting.settings');
    }

    public function store(Request $request)
    {

        try
        {
            $validator = $this->validator::make($request->all(),[
                'logo'  => 'mimes:png,jpg,jpeg',
                'icon'  => 'mimes:png,jpg,jpeg,ico'
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first(),403);

            $settings = $request->all();

            foreach($settings as $key=>$value)
            {
                if($key !='logo' &&  $key!='icon' && $value != null)
                {
                    $setting=Setting::where('key',$key)->first();

                    if($setting)
                    {
                        $setting->value = $value;
                        $setting->update();
                    }
                    else
                    {
                        Setting::create(['key'=>$key,'value'=>$value]);
                    }
                }

            }

            if($request->has('logo'))
            {
                $setting=Setting::where('key','logo')->first();

                if($setting)
                {
                    $this->helper::delete_image(basename($setting->value), $this->storageFolder);

                    $logo = $this->helper::upload_image($request->logo, $this->storageFolder);

                    $setting->value = \URL::to($this->publicFolder.$logo);

                    $setting->update();
                }
                else
                {
                    $logo = $this->helper::upload_image($request->logo,$this->storageFolder);

                    Setting::create([
                        'key'=>'logo',
                        'value'=>\URL::to($this->publicFolder.$logo)
                        ]);
                }

            }

            if($request->has('icon'))
            {
                $setting=Setting::where('key','icon')->first();

                if($setting)
                {
                    $this->helper::delete_image(basename($setting->value),$this->storageFolder);

                    $icon = $this->helper::upload_image($request->icon,$this->storageFolder);

                    $setting->value = \URL::to($this->publicFolder.$icon);

                    $setting->update();
                }
                else
                {
                    $icon = $this->helper::upload_image($request->icon,$this->storageFolder);
                    Setting::create([
                        'key'=>'icon',
                        'value'=>\URL::to($this->publicFolder.$icon)]);
                }

            }


            return back()->with('success','Setting saved');

        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],300);
        }
    }
}
