<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodShop;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Validator;

class FoodShopController extends Controller
{
    protected $storageFolder;

    function __construct()
    {
        $this->storageFolder='/app/public/foodshop/';
    }

    public function index() {
        $foodshops = FoodShop::orderBy('created_at','desc')->get();
        return view('admin.parts.foodshop.index', compact('foodshops'));
    }

    public function create() {
        return view('admin.parts.foodshop.create');
    }

    public function store(Request $request) {
        try
        {
            $validator = Validator::make($request->all(),[
                'name' =>'required',
                'items' => 'required|array|min:1',
                'image' => 'mimes:png,jpg,jpeg'

            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first());

            $input = $request->all();

            $data=array();

            foreach($request->items as $item)
            {
                $data['items'][]=$item;
            }


            if($request->has('image'))
            {
                $input['image'] = Helper::upload_image($request->image, $this->storageFolder);
            }

            $input['items'] = $data['items'];

            FoodShop::create($input);

            return back()->with('success','Food Shop created');


        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }

    public function destroy(Foodshop $shop)
    {
        try {
            if($shop->delete()){
                Helper::delete_image(basename($shop->image),$this->storageFolder);
            }
            return back()->with('success','Food Shop is deleted');
        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }
}
