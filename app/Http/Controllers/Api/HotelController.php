<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\NoPermissionModels\Address;
use Illuminate\Http\Request;

/**
 * @group Hotel Apis
 *
 * APIs for hotel related things
 */
class HotelController extends BaseApiController
{
    /**
     * Hotel management for apis
     * get all locations with hotels and galleries
    */
    public function addressWithHotels()
    {
        try {
            $address=Address::orderBy('name','asc')->withCount('hotels')->with(['hotels'=>function($query){
                $query->with('galleries');
            }])
            ->get();
            return $this->successResponse(['locations'=>$address],'Locations with hotel listing');
        } catch (\Throwable $th) {
            return $th->getMessage();
            return $this->errorResponse('Internal server error',500);
        }
    }
}
