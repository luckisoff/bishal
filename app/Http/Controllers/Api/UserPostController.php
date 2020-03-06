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
                    $data['urls'][]=\URL::to("/storage/user/post/".$imageName);
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
                $query->select('id','name','image_url','works_at','bio','gender');
            }])->paginate(7);

            return $this->successResponse(['posts'=>$posts],'User posts');
        } catch (\Throwable $th) {
            Log::debug('post fetch log:'.$th->getMessage());
            return $this->errorResponse($th->getMessage(),500);
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

    /**
    *Posts of Single user
    *post with like and comment counts and comments
    *@urlParam id required user id for the posts
    */
    public function allPostOfSingleUser($user_id)
    {
        try {
            $posts = UserPost::where('user_id',$user_id)->orderBy('created_at','desc')
                    ->withCount(['likes','comments'])->with(['user'=>function($q){
                        $q->select('id','name','image_url','works_at','bio','gender');
                    }])->get();

            return $this->successResponse(['posts'=>$posts],'Single user posts listing');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage());
        }
    }

    /**
    *Comments of Post
    *Comments of User post
    *@urlParam post_id required post id of the post
    */

    public function getComment($post_id)
    {
        try {

            $comments = Comment::where('commentable_id', $post_id)
                        ->where('commentable_type', \get_class(new UserPost()))
                        ->with(['user'=>function($q){
                            $q->select('id','name','image_url','works_at','bio','gender');
                        }])
                        ->orderBy('created_at','desc')->get();

            return $this->successResponse(['comments'=>$comments],'Single user comments listing');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage());
        }
    }

}
