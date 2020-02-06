<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Hotel;

class HotelPackageController extends BaseAdminController
{
    protected $storageFolder,$model;

    function __construct(Package $model)
    {
        parent::__construct();
        $this->storageFolder='/app/public/hotels/packages/';
        $this->model=$model;
    }

    public function store(Request $request,Hotel $hotel)
    {
        try {
            $validator=$this->validator::make($request->all(),[
                'name'=>'required',
                'price'=>'required',
                'items'=>'required|array|min:1',
                'image'=>'mimes:jpg,jpeg,png'
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first());

            $input=$request->all();

            $data = array();

            if($request->has('image'))
            {
                $input['image']=$this->helper::upload_image($request->image,$this->storageFolder);
            }

            foreach($request->items as $item)
            {
                $data['items'][]=$item;
            }

            $input['items']=$data['items'];
            
            $hotel->packages()->create($input);

            return back()->with('success','Package created');
        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }

    public function destroy(Package $package)
    {
        try {
            
            if($package->delete())

                if($package->image) $this->helper::delete_image(basename($package->image),$this->storageFolder);

            return back()->with('success','Package is deleted');
        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }
}
