<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Story;

class StoryController extends BaseAdminController
{
    protected $story,$gift,$storageFolder,$publicFolder;

    function __construct(Story $story)
    {
        parent::__construct();
        $this->story = $story;
        $this->storageFolder = '/app/public/stories';
        $this->publicFolder = 'storage/stories/';
    }

    public function index()
    {
        $stories = Story::orderBy('created_at','desc')->get();
        return view('admin.parts.story.index',compact('stories'));
    }

    public function show(Story $story)
    {
        return view('admin.parts.story.show',compact('story'));
    }

    public function create()
    {
        return view('admin.parts.story.create');
    }


    public function store(Request $request)
    {
        try {
            
            $validator = $this->validator::make($request->all(),[
                'name'          =>'required',
                'images.*' =>'mimes:jpg,jpeg,png',
                'cover_img'     =>'required|mimes:jpg,jpeg,png'
            ]);
    
            if($validator->fails()) throw new \Exception($validator->errors()->first(),403);
            
            $input = $request->all();
    
            
            if($request->has('images'))
            {
                $images=array();
                foreach($request->images as $image)
                {
                    $imageName=$this->helper::upload_image($image,$this->storageFolder);
                    $images['images'][]=\URL::to($this->publicFolder.$imageName);
                }
                $input['images']=$images['images'];
            }
    
            if($request->has('cover_img'))
            {
                $imageName=$this->helper::upload_image($request->cover_img,$this->storageFolder);
    
                $input['cover_img']=\URL::to($this->publicFolder.$imageName);
            }
            
            $this->story::create($input);
            
            return redirect()->route('dashboard.stories')->with('success','Story added');

        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }

    public function destroy(Story $story)
    {
        try {
            if($story->delete())
            {
                $this->helper::delete_image(basename($story->cover_img),$this->storageFolder);
                foreach($story->images as $image)
                {
                    $this->helper::delete_image(basename($image),$this->storageFolder);
                }
                
            }
            return back()->with('success','Story is removed');
        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],505);
        }
    }
}

