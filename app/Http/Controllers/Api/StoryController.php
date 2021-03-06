<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Story;
/**
     * @group Stories
     * Story management api
    */
class StoryController extends BaseApiController
{
    /**
     * Stories
     * get stories listing
    */
    public function stories()
    {
        try {
            $stories = Story::orderBy('created_at','desc')->get();
            return $this->successResponse(['stories'=>$stories],'Stories listing');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),500);
        }
    }
}
