<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\FoodShop;

/**
 * @group Food Shop
 *
 * APIs for food shops
 */
class FoodShopController extends BaseApiController
{
     /**
     * Food Shop
     * get all food shops
    */
    public function get()
    {
        try {
            $shops = FoodShop::orderBy('created_at','desc')->get();
            return $this->successResponse(['foodshops'=>$shops],'Food Shops listing');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),$th->getCode());
        }
    }

}
