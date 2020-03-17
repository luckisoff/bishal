<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends BaseAdminController
{
    private $storageFolder, $publicFolder;
    
    function __construct()
    {
        parent::__construct();

    }
    public function index() 
    {
        $events = Event::orderBy('created_at','desc')->get();

        return view('admin.parts.event.index', compact('events'));
    }

    public function store(Request $request)
    {
        try {
            $validator = $this->validator::make($request->all(), [
                'title' =>'required',
                'image' => 'required|mimes:jpg,jpeg,png'
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first());

        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }
}
