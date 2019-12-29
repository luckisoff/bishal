<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\NoPermissionModels\Like;
use Illuminate\Http\Request;
/**
 * @group User post like api
 *
 * APIs for managing users post liked
 */
class LikeController extends BaseApiController
{
    /**
     * Like or dislike the user post
     * @bodyParam post_id integer required id of the post to be liked or disliked
    */
    public function likeDislike($postId)
    {
        try {
                $user=app()->request->user();
                $isLiked=Like::where('likeable_id',$postId)->where('user_id',$user->id)->first();

                if((bool) $isLiked)
                {
                    $isLiked->delete();
                }
                else
                {
                    Like::create([
                        'user_id'=>$user->id,
                        'likeable_id',$postId,
                        'likeable_type'=>\get_class(Like::class)
                    ]);
                }

        } catch (\Throwable $th) {
            return $this->errorResponse('Could not like this time.',500);
        }

    }

    /**
     * Like or dislike the user post
     * @bodyParam post_id integer required id of the post to check if user has liked the post or not
    */
    public function isLiked($postId)
    {
        try {
            $user=app()->request->user();
            $isLiked=(bool) Like::where('likeable_id',$postId)->where('user_id',$user->id)->first();
            return $this->successResponse(['isLiked'=>$isLiked],'Like status');
        } catch (\Throwable $th) {
            return $this->errorResponse('Internal server error',501);
        }
    }
}
