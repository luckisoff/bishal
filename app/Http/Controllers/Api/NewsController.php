<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

/**
 * @group News
 *
 * APIs for managing news
 */
class NewsController extends BaseApiController
{
    /**
     * Get
     * Get all news items
    */
    public function getNews()
    {
        try {
            $news = News::orderBy('created_at', 'desc')->paginate(10);
            return $this->successResponse(['news' => $news],'News listing with pagination');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),500);
        }
    }
}
