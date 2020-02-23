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
            $address=Address::orderBy('name','asc')->whereHas('hotels')->withCount('hotels')->with(['hotels'=>function($query){
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
            $addresses=Address::orderBy('name','asc')->withCount('hotels')->whereHas(['hotels',function($query){
                $query->where('type','indoor');
            }])
            ->get();

            foreach($addresses as $address)
            {
                if(empty($address->hotels))
                {
                    unset($address->hotels);
                }
            }


            return $this->successResponse(['locations'=>$addresses],'Indoor hotel listing');
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

            $address = Address::orderBy('name','asc')->whereHas('hotels')->withCount('hotels')->with(['hotels'=>function($query){
                $query->where('type','outdoor')->with('galleries');
            }])
            ->get();

            return $this->successResponse(['locations'=>$address],'Outdoor hotel listing');
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
            $hotel = Hotel::where('id',$id)->with('galleries')->get();

            if(!$hotel) throw new \Exception('No hotel found',404);

            return $this->successResponse(['hotel'=>$hotel],'Hotel Information');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),500);
        }
    }

}
