<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HotelPost;
use App\Models\Hotel;
use Illuminate\Support\Facades\Validator;
use App\Helpers\Helper;

class HotelPostController extends BaseAdminController
{
    protected $model,$storageFolder;
    
    function __construct(HotelPost $model)
    {
        $this->model=$model;
        $this->storageFolder='/app/public/hotels/post';
    }

    public function store(Request $request, Hotel $hotel)
    {
        try {

            $validator=Validator::make($request->all(),[
                'post'=>'required',
                'images'=>'required|array|min:1|max:10',
                'images.*' => 'image|mimes:jpg,jpeg,png'
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first());
            
            $input = $request->all();
            $data=array();
            if($request->has('images'))
            {
                foreach($request->images as $image)
                {
                    $imageName=Helper::upload_image($image,$this->storageFolder);
                    $data['images'][]=\URL::to('/storage/hotel/post/'.$imageName);
                }
            }

            $input['images']=$data['images'];
            $hotel->posts()->create($input);
            return back()->with('success',"Post Created");
        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }

    public function destroy(HotelPost $post)
    {
        try {
            $post->delete();
            foreach($post->images as $image)
            {
                Helper::delete_image(basename($image),$this->storageFolder);
            }
            return back()->with('success','Post deleted');
        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }


}
