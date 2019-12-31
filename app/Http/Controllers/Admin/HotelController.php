<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Requests\HotelRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    public function index()
    {
        $hotels=Hotel::orderBy('name','asc')->get();
        return view('admin.parts.hotels.index',compact('hotels'));
    }

    public function create(Hotel $id=null)
    {
        $id?$edit=true:$edit=false;
        $hotel=$id;
        return view('admin.parts.hotels.create',compact('hotel','edit'));
    }

    public function store(Request $request,Hotel $id=null)
    {
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'open_time'=>'required',
            'description'=>'required',
            'location'=>'required'
            ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors([$validator->errors()->first()],'error');
        }
        $input=$request->all();
        $hotel=$id;

        try {

            if($request->has('logo'))
            {
                if(!empty($request->logo))
                    $logo=Helper::upload_image($request->logo,'/app/public/hotels/logo');
                    $input['logo']=$logo;
                    $input['logo_url']=env('APP_URL').'/storage/hotels/logo/'.$logo;
                    if($hotel)
                    {
                        Helper::delete_image($hotel->logo,'/app/public/hotels/logo/');
                    }
            }

            if($hotel?$hotel->update($input):Hotel::create($input))
            {
                return redirect()->route('dashboard.hotels')->with('success',$hotel?"Update successful":"Create successful");
            }
            return redirect()->back()->withErrors(['Something went wrong'],'error');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors([$th->getMessage()],'error');
        }
    }

    public function destroy(Hotel $id)
    {
        $hotel=$id;
        if($hotel->delete())
        {
            Helper::delete_image($hotel->logo,'/app/public/hotels/logo/');
            return redirect()->back()->with('success',$hotel->name.' is deleted');
        }
        return redirect()->back()->withErrors(['Can not delete this time'],'error');
    }


}
