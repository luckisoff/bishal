<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Requests\HotelRequest;
use App\Models\Gallery;
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class HotelController extends BaseAdminController
{

    function __construct()
    {
        parent::__construct();
    }
    
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
            'location'=>'required',
            'facilities'=>'required'
            ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors([$validator->errors()->first()],'error');
        }
        $input=$request->all();
        
        $hotel=$id;

        $input['facilities'] = explode(',',$request->facilities);

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

    public function show(Hotel $hotel,$page='show')
    {
        $users=null;

        if(!auth()->user()->can('create hotel'))
            if(!$hotel->managers->contains(auth()->user()->id)) abort(403,'Permission denied');
        
        if($page == 'create-manager')
        {
            if(!auth()->user()->can('create hotel')) abort(403,'Permission denied');

            $users=User::orderBy('name','asc')->get();
        }

        return view('admin.parts.hotels.'.$page,compact('hotel','users'));
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

    public function gallery(Hotel $hotel)
    {
        try {
            $galleries=Gallery::where('hotel_id',$hotel->id)->orderBy('created_at','desc')->get();
            return response()->json([
                'status'=>true,
                'message'=>'Gallery listing',
                'galleries'=>$galleries
            ]);
        } catch (\Throwable $th) {
            return trigger_error($th->getMessage());
        }
    }

    public function galleryStore(Request $request,Hotel $hotel)
    {
        $validator=Validator::make($request->all(),[
            'image'=>'required|mimes:jpg,gif,png,jpeg'
        ]);
        if($validator->fails())
        {
            return trigger_error($validator->errors()->first());
        }
        try
        {
            $input=$request->all();
            $input['hotel_id']=$hotel->id;
            $input['image']=Helper::upload_image($request->image,'/app/public/hotels/gallery');
            $input['image_url']=$input['image'];
            $input['name']=substr($request->image->getClientOriginalName(),0,-4);
            if(Gallery::create($input))
            {
                return response()->json([
                    'status'=>true,
                    'message'=>'Gallery Image uploaded'
                ]);
            }
        } catch (\Throwable $th) {
            return trigger_error($th->getMessage());
        }
    }

    public function galleryDelete(Gallery $gallery)
    {
        try {
            if($gallery->delete())
            {
                Helper::delete_image($gallery->image,'/app/public/hotels/gallery/');
            }
        } catch (\Throwable $th) {
            return trigger_error($th->getMessage());
        }
    }
}
