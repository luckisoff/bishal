<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;
/**
 * @group Cards
 *
 * APIs for cards
 */
class CardController extends BaseApiController
{
    /**
    *Get
    *Get the cards
    */
    public function cards()
    {
        try {
            $cards = Card::orderBy('created_at','desc')->get();

            return $this->successResponse(['cards' => $cards],'Cards listing');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),300);
        }
    }
}
