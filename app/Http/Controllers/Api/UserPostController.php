<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserPost;
use Log;
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

        try {
            $input=$request->all();
            $input['user_id']=app()->request->user()->id;

            $data=array();

            if($request->has('images'))
            {
                $validator=Validator::make($request->all(),[
                    'images'=>'array'
                ]);

                if($validator->fails())
                {
                    return $this->errorResponse($validator->errors()->first(),501);
                }

                foreach($request->file('images') as $image)
                {
                    $imageName=Helper::upload_image($image);

                    $data['images'][]=$imageName;
                    $data['urls'][]=env('APP_URL')."/storage/user/post/".$imageName;
                }

                $input['images']=$data['images'];
                $input['image_url']=$data['urls'];
            }
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
            $input['user_id']=app()->request->user()->id;
            $input['commentable_id']=$request->user_post_id;
            $input['commentable_type']=\get_class(new UserPost());
            $input['comment']=$request->comment;
            
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
    *post with like and comment counts and comments
    *@bodyParam id integer required post id to get post with comments
    */
    public function fetchUniquePost($postId)
    {
        try {
            $post=UserPost::where('id',$postId)->withCount(['comments','likes'])
            ->with(['user'=>function($query){
                $query->select('id','name');
            }])
            ->with(['comments'=>function($query){
                $query->with(['user'=>function($q){
                    $q->select('id','name');
                }]);
            }])
            ->first();
            return $this->successResponse(['post'=>$post],'Single post listing');
        } catch (\Throwable $th) {
            Log::debug('Single post fetch log:'.$th->getMessage());
            return $this->errorResponse('Internal serve error',500);
        }
    }

}
