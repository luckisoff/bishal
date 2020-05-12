<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HouseParty;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Validator;

class HousePartyController extends Controller
{
    protected $storageFolder;

    function __construct()
    {
        $this->storageFolder='/app/public/houseparty/';
    }

    public function index() {
        $houseparties = HouseParty::orderBy('created_at','desc')->get();
        return view('admin.parts.houseparty.index', compact('houseparties'));
    }

    public function create() {
        return view('admin.parts.houseparty.create');
    }

    public function store(Request $request) {
        try
        {
            $validator = Validator::make($request->all(),[
                'name' =>'required',
                'items' => 'required|array|min:1',
                'image' => 'required|mimes:png,jpg,jpeg'

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

            HouseParty::create($input);

            return back()->with('success','House Party created');


        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }

    public function destroy(HouseParty $houseparty)
    {
        try {
            if($houseparty->delete()){
                Helper::delete_image(basename($houseparty->image),$this->storageFolder);
            }
            return back()->with('success','House Party is deleted');
        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }
}
