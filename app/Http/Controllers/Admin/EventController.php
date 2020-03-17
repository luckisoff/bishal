<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class EventController extends BaseAdminController
{
    private $storageFolder, $publicFolder, $event;

    function __construct(Event $event)
    {
        parent::__construct();

        $this->event = $event;

        $this->storageFolder = '/app/public/event';

        $this->publicFolder = 'storage/event/';
    }

    public function index()
    {
        $events = Event::orderBy('created_at','desc')->get();

        return view('admin.parts.event.index', compact('events'));
    }

    public function store(Request $request)
    {
        $validator = $this->validator::make($request->all(), [
            'title' =>'required',
            'image' => 'required|mimes:jpg,jpeg,png'
        ]);

        if($validator->fails()) throw new \Exception($validator->errors()->first());

        $input = $request->all();

        $input['event_date'] = new \DateTime($request->event_date);

        if($request->has('image'))
        {
            $imageName = $this->helper::upload_image($request->image, $this->storageFolder);

            $input['image'] = \URL::to($this->publicFolder.$imageName);
        }

        $this->event::create($input);

        return redirect()->route('dashboard.event')->with('success','event created');
        try {

        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }

    public function create()
    {
        return view('admin.parts.event.create');
    }

    public function destroy(Event $event)
    {
        try {
            if($event->delete())
            {
                $this->helper::delete_image(basename($event->image), $this->storageFolder);
            }

            return back()->with('success','Event deleted');
        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage],'error');
        }
    }

    public function show(Event $event)
    {
        return $event;
    }

    public function edit(Event $event)
    {
        return $event;
    }

    public function placeTop(Event $event)
    {
        try {

            if($event->top)
            {
                $event->top = 0;
            } else { $event->top = 1;}

            $event->update();
            return back()->with('success', 'Place changed');
        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage],'error');
        }
    }
}
