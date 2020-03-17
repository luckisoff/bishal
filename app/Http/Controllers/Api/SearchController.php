<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hotel;

/**
 * @group Search
 *
 * APIs for searching
 */
class SearchController extends BaseApiController
{
    /**
    *User
    *Get users
    *@bodyParam string string required search string for user
    */
    public function users(Request $request)
    {
        try {

            $validator = $this->validator::make($request->all(), [
                'string' => 'required|max:255'
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first());

            $string = $request->string;

            $users = User::where('name','LIKE', '%'.$string.'%')
                    ->orWhere('email','LIKE', '%'.$string.'%')
                    ->orWhere('address','LIKE', '%'.$string.'%')
                    ->orWhere('country','LIKE', '%'.$string.'%')
                    ->orderBy('name','asc')->get();

            return $this->successResponse(['users' => $users],'Users search listing');

        } catch (\Throwable $th) {
            return $this->errorResponse('Internal server error', 500);
        }
    }

    /**
    *Hotel
    *Get Hotels
    *@bodyParam string string required search string for hotels
    */
    public function hotels(Request $request)
    {
        try {

            $validator = $this->validator::make($request->all(), [
                'string' => 'required|max:255'
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first());

            $string = $request->string;

            $hotels = Hotel::where('name','LIKE', '%'.$string.'%')
                    ->orWhere('address','LIKE', '%'.$string.'%')
                    ->orWhere('description','LIKE', '%'.$string.'%')
                    ->orWhere('website','LIKE', '%'.$string.'%')
                    ->orWhere('type','LIKE', '%'.$string.'%')
                    ->orWhere('open_time','LIKE', '%'.$string.'%')
                    ->orderBy('name','asc')->get();

            return $this->successResponse(['hotels' => $hotels],'Hotels search listing');

        } catch (\Throwable $th) {
            return $this->errorResponse('Internal server error', 500);
        }
    }
}
