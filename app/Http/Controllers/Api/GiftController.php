<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gift;
/**
 * @Gift Apis
 *
 * APIs for management of the gift items
 */
class GiftController extends BaseApiController
{
    /**
     * Get all gifts
     * get all gifts items
    */
    public function gifts()
    {
        try {
            $gifts = Gift::with('category')->get();
            return $this->successResponse(['gifts'=>$gifts],'Locations with hotel listing');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),500);
        }
    }
}
