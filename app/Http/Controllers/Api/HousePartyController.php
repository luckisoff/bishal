<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\HouseParty;

/**
 * @group House Party
 *
 * APIs for house party
 */
class HousePartyController extends BaseApiController
{
     /**
     * House Party
     * get all house parties
    */
    public function get()
    {
        try {

            $parties = HouseParty::orderBy('created_at','desc')->get();
            return $this->successResponse(['houseparties'=>$parties],'House party listing');

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),$th->getCode());
        }
    }

}
