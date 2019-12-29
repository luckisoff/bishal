<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Comment;
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
    *@bodyParam images array required array of the images max 5
    */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'images'=>'required|array|min:1|max:5',
            'title'=>'required'
        ]);
        if($validator->fails())
        {
            return $this->errorResponse($validator->errors()->first(),501);
        }

        try {
            $input=$request->all();
            $input['user_id']=app()->request->user()->id;

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
            return $this->errorResponse('Post can not be created.',400);
        }

    }

    /**
    *Create post comment
    *@bodyParam user_post_id integer required current post id to be commented
    *@bodyParam comment string required comment text
    */
    public function commentStore(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'user_post_id'=>'required',
            'comment'=>'required'
        ]);
        if($validator->fails())
        {
            return $this->errorResponse($validator->errors()->first(),501);
        }

        try {
            $input=$request->all();
            $input['user_id']=app()->request->user()->id;
            if(Comment::create($input))
            {
                return $this->successResponse([],'commenting successful');
            }
        } catch (\Throwable $th) {
            Log::debug('comment log:'.$th->getMessage());
            return $this->errorResponse('Internal server error',500);
        }
    }

    /**
    *Fetch all posts
    */
    public function fetchPosts()
    {
        try {
            $posts=UserPost::orderBy('created_at','desc')->withCount(['comments','likes'])->with(['user'=>function($query){
                $query->select('id','name','username');
            }])->get();

            return $this->successResponse(['posts'=>$posts],'User posts');
        } catch (\Throwable $th) {
            Log::debug('post fetch log:'.$th->getMessage());
            return $this->errorResponse('Internal server error',500);
        }
    }

    /**
    *Fetch unique posts
    */
    public function fetchUniquePost($postId)
    {
        try {
            $post=UserPost::where('id',$postId)->withCount(['comments','likes'])->with('comments')
            ->with(['user'=>function($query){
                $query->select('id','name');
            }])
            ->first();
            return $this->successResponse(['post'=>$post],'Single post listing');
        } catch (\Throwable $th) {
            return $this->errorResponse('Something went wrong!',500);
        }
    }

}
