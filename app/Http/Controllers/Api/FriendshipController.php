<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
/**
 * @group Friendship
 *
 * APIs for friendships
 */
class FriendshipController extends BaseApiController
{
     /**
    *Get
    *Get all friends
    */
    public function getAllFriends() {
        try {
            $user = auth('api')->user();
            return $this->successResponse(['friends' => $user->getFriends()],'Friends listing');
        } catch (\Throwable $th) {
            return $this->errorResponse('Something went wrong', 500);
        }
    }

     /**
    *Request Cancel
    *@bodyParam user_id integer required user id for the friendship
    */
    public function sendCancelRequest(Request $request) {
        
        try {
            $user = auth('api')->user();
            $friend = User::find($request->user_id);
            if($user->hasSentFriendRequestTo($friend)) {
                $user->denyFriendRequest($friend);
            } else {
                $user->beFriend($friend);
            }
            return $this->successResponse([],'Action success');
        } catch (\Throwable $th) {
            return $this->errorResponse('Something went wrong', 500);
        }
    }
}
