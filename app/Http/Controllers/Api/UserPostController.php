<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserPost;
/**
 * @group User Post Management
 *
 * APIs for managing users post
 */
class UserPostController extends BaseApiController
{
    /**
    *Create user post
    *@bodyParam title string required title of the post or description
    *@bodyParam user_id integer required user id of online user
    *@bodyParam images array required array of the images max 5
    */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'user_id'=>'required',
            'images'=>'required|array|min:1|max:5',
            'title'=>'required'
        ]);
        if($validator->fails())
        {
            return $this->errorResponse($validator->errors()->first(),501);
        }

        try {
            $input=$request->all();
            $data=array();

            foreach($request->file('images') as $image)
            {
                $imageName=Helper::upload_image($image);

                $data['images'][]=$imageName;
                $data['urls'][]=env('APP_URL')."/storage/user/post/".$imageName;
            }

            $input['images']=$data['images'];
            $input['image_url']=$data['urls'];

            if($post=UserPost::create($input))
            {
                return $this->successResponse(['post'=>$post],'Post inserted');
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
            return $this->errorResponse('Post can not be created.',400);
        }

    }

}
