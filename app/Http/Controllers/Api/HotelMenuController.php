<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

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

            if(!$menus) throw new \Exception('No menus are available',404);

            return $this->successResponse(['menus'=>$menus],'Hotel menu listing');
            
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),$th->getCode());
        }
    }
}
