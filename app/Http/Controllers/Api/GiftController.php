<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gift;
use App\Models\Category;
/**
 * @group Gift Apis
 *
 * APIs for management of the gift items
 */
class GiftController extends BaseApiController
{
    
    /**
     * Categories
     * get categories, name appear if it has at list one gift item
    */
    public function categories()
    {
        try {
            $categories = Category::whereHas('gifts')->select('id','name')->orderBy('name','asc')->get();
            return $this->successResponse(['categories'=>$categories],'Categories listing');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),500);
        }
    }

    /**
     * Gifts
     * get gifts for specific category
     * @urlParam category required id integer of the category
    */
    public function gifts(Category $category)
    {
        try {
            $gifts = $category->gifts;
            return $this->successResponse(['gifts'=>$gifts],'Gifts listing');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),500);
        }
    }

    /**
     * Gifts For Top
     * get gifts for top position
    */
    public function giftForTop()
    {
        try {
            $gifts = Gift::where('placeat_top',1)->orderBy('created_at','desc')->get();
            return $this->successResponse(['gifts'=>$gifts],'Gifts listing');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),500);
        }
    }
}
