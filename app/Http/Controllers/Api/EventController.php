<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

/**
 * @group Events
 *
 * APIs for event
 */
class EventController extends BaseApiController
{
    /**
    *Get
    *Get the events
    */
    public function all()
    {
        try {

            $events = Event::orderBy('created_at', 'desc')->where('event_date','>=', Carbon::now())->get();

            return $this->successResponse(['events' => $events], 'Event Listing');

        } catch (\Throwable $th) {
            return $this->errorResponse('Internal server error', 500);
        }
    }

    /**
    *Get for Top
    *Get the events
    */

    public function getForTop()
    {
        try {

            $events = Event::orderBy('created_at', 'desc')->where('top', 1)->where('event_date','>=', Carbon::now())->get();

            return $this->successResponse(['events' => $events], 'Event Listing for top');

        } catch (\Throwable $th) {
            return $this->errorResponse('Internal server error', 500);
        }
    }
}
