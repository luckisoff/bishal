<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HotelPost;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use App\NoPermissionModels\Like;
/**
 * @group Hotel post like api
 *
 * APIs for managing users post like and comment
 */
class HotelPostController extends BaseApiController
{
     /**
     * Like or dislike the hotel post
     * @bodyParam post_id integer required id of the hotel post to be liked or disliked
    */
    public function toggleLike($postId)
    {
        try {

            $user=app()->request->user();
            $isLiked=Like::where('likeable_id',$postId)
                        ->where('likeable_type',\get_class(new HotelPost()))
                        ->where('user_id',$user->id)
                        ->first();

            if((bool) $isLiked)
            {
                $isLiked->delete();
                return $this->successResponse([],'Dislike succesful');
            }
            else
            {
                if(Like::create([
                    'user_id'=>$user->id,
                    'likeable_id'=>$postId,
                    'likeable_type'=>\get_class(new HotelPost())
                ]))
                {
                    return $this->successResponse([],'Like succesful');
                }
            }

        } catch (\Throwable $th) {
            return $th->getMessage();
            return $this->errorResponse('Could not like this time.',500);
        }
    }

    /**
    *Create hotel post comment
    *@bodyParam post_id integer required current hotel post id to be commented
    *@bodyParam comment string required comment text
    */
    public function storeComment(Request $request)
    {
        try {

            $validator=Validator::make($request->all(),[
                'post_id'=>'required',
                'comment'=>'required'
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first());

            $input['user_id']=app()->request->user()->id;
            $input['commentable_id']=$request->post_id;
            $input['commentable_type']=\get_class(new HotelPost());
            $input['comment']=$request->comment;
            
            Comment::create($input);
            return $this->successResponse([],'commenting successful');

        } catch (\Throwable $th) {
            return $th->getMessage();
            return $this->errorResponse('Could not like this time.',500);
        }
    }

    /**
     * Check if user has liked the hotel post
     * @bodyParam post_id integer required id of the post to check if user has liked the post or not
    */
    public function isLiked($postId)
    {
        try {
            $user=app()->request->user();
            $isLiked=(bool) Like::where('likeable_id',$postId)
                                ->where('likeable_type',\get_class(new HotelPost()))
                                ->where('user_id',$user->id)->first();

            return $this->successResponse(['isLiked'=>$isLiked],'Like status');
        } catch (\Throwable $th) {
            return $this->errorResponse('Internal server error',501);
        }
    }

    /**
     * Delete hotel comment
     * @bodyParam commnet_id integer required id of the hotel post to be deleted
    */
    public function deleteComment(Request $request)
    {
        try {
            $comment = Comment::where('user_id',app()->request->user()->id)
                                ->where('id',$request->comment_id)
                                ->where('commentable_type',\get_class(new HotelPost()))
                                ->first();
            if(!$comment) throw new \Exception('Comment not found',404);

            $comment->delete();
            return $this->successResponse([],'Comment Deleted');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),$th->getCode());
        }
    }


    /**
     * Get hotel post comments
     * @bodyParam post_id integer required id of the hotel post
    */
    public function getComments($postId)
    {
        try {
            $comments=Comment::where('commentable_id',$postId)->where('commentable_type',\get_class(new HotelPost()))
                                ->orderBy('created_at','desc')->get();

            return $this->successResponse(['comments'=>$comments],'Comment listing');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),501);
        }
    }

    /**
     * Get all hotel posts
     * @bodyParam hotel_id integer required hotel id of the hotel
    */
    public function getPosts($hotelId)
    {
        try {
             $posts=HotelPost::where('hotel_id',$hotelId)->withCount(['comments','likes'])->orderBy('created_at','desc')->get();
             return $this->successResponse(['posts'=>$posts],'Hotel Post Listing');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),501);
        }
    }

    /**
     * Hotel posts listing
     * get hotel post with hotel
    */
    public function hotelPostsWithHotel()
    {
        try {
            $posts = HotelPost::with(['hotel'=>function($q){
                $q->select('id','name','logo_url');
            }])->withCount(['comments','likes'])->orderBy('created_at','desc')->get();

            if(!$posts) throw new \Exception('Not post available',404);

            return $this->successResponse(['posts'=>$posts],'Hotel posts listing');

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),500);
        }
    }
}
