<?php

namespace App\Http\Controllers\Api;

use App\NoPermissionModels\Address;
use App\Models\HotelPost;
use App\Models\Hotel;


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

    /**
     * Indoor Hotels
     * get all indoor type hotels
    */
    public function indoorHotels()
    {
        try {
            $hotels = Hotel::orderBy('name','asc')->where('type','indoor')->with(['addressLocation','galleries'])
            ->get();

            return $this->successResponse(['hotels'=>$hotels],'Indoor hotel listing');
        } catch (\Throwable $th) {
            return $th->getMessage();
            return $this->errorResponse('Internal server error',500);
        }
    }

    /**
     * Outdoor Hotels
     * get all outdoor type hotels
    */
    public function outdoorHotels()
    {
        try {
            $hotels = Hotel::orderBy('name','asc')->where('type','outdoor')->with(['addressLocation','galleries'])
            ->get();

            return $this->successResponse(['hotels'=>$hotels],'Outdoor hotel listing');
        } catch (\Throwable $th) {
            return $th->getMessage();
            return $this->errorResponse('Internal server error',500);
        }
    }

    /**
     * Single Hotel
     * Informations about single hotel
     * @urlParam id required integer type id of the hotel
    */
    public function singleHotel($id=null)
    {
        try {
            $hotel = Hotel::find($id);
            if(!$hotel) throw new \Exception('No hotel found',404);

            return $this->successResponse(['hotel'=>$hotel],'Hotel Information');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),500);
        }
    }

}
