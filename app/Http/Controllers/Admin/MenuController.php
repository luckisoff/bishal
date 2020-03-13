<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;
use Illuminate\Support\Facades\Validator;
use App\Helpers\Helper;
use App\Models\Menu;

class MenuController extends Controller
{
    protected $storageFolder;

    function __construct()
    {
        $this->storageFolder='/app/public/hotels/menus/';
    }

    public function store(Request $request,Hotel $hotel)
    {
        try
        {
            $validator = Validator::make($request->all(),[
                'name' =>'required',
                'items' => 'required|array|min:1',
                'image' => 'required|mimes:png,jpg,jpeg'

            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first());

            $input=$request->all();

            $data=array();

            foreach($request->items as $item)
            {
                $data['items'][]=$item;
            }


            if($request->has('image'))
            {
                $input['image'] = Helper::upload_image($request->image,$this->storageFolder);
            }

            $input['items'] = $data['items'];

            $hotel->menus()->create($input);

            return back()->with('success','Menu created');


        } catch (\Throwable $th) {
            return $th->getMessage();
            return back()->withErrors([$th->getMessage()],'error');
        }

    }

    public function destroy(Menu $menu)
    {
        try {
            if($menu->delete()){
                Helper::delete_image(basename($menu->image),$this->storageFolder);
            }
            return back()->with('success','Menu deleted');
        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }
}
