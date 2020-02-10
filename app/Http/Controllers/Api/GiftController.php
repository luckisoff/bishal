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
     * Get
     * get all gifts items
    */
    public function gifts()
    {
        try {
            $gifts = Category::with('gifts')->whereHas('gifts')->get();
            return $this->successResponse(['data'=>$gifts],'Categories with gifts');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),500);
        }
    }
}
