<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Package;

/**
 * @group Hotel Menus
 *
 * APIs for hotel menus
 */
class HotelMenuController extends BaseApiController
{
    /**
     * Menus
     * get all menus for related hotel
     * @bodyParam hotel_id integer required hotel id for the menus of hotels
    */
    public function getMenus($hotel_id)
    {
        try {

            $menus = Menu::where('hotel_id',$hotel_id)->orderBy('created_at','desc')->get();

            if($menus->count()==0) throw new \Exception('No menus are available',404);

            return $this->successResponse(['menus'=>$menus],'Hotel menu listing');

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),$th->getCode());
        }
    }

    /**
     * Packages
     * get all package for related hotel
     * @bodyParam hotel_id integer required hotel id for the packages of hotel
    */
    public function getPackages($hotel_id)
    {
        try {

            $packages = package::where('hotel_id',$hotel_id)->orderBy('created_at','desc')->get();

            if($packages->count()==0) throw new \Exception('No menus are available',404);

            return $this->successResponse(['packages'=>$packages],'Hotel menu listing');

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),$th->getCode());
        }
    }
}
