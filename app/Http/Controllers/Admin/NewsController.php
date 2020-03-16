<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends BaseAdminController
{
    private $storageFolder, $publicFolder, $news;
    function __construct(News $news)
    {
        parent::__construct();

        $this->news = $news;

        $this->storageFolder = '/app/public/news';

        $this->publicFolder = 'storage/news/';
    }

    public function index()
    {
        $news = News::orderBy('created_at','desc')->get();

        return view('admin.parts.news.index',compact('news'));
    }

    public function create()
    {
        return view('admin.parts.news.create');
    }

    public function store(Request $request)
    {
        try {
            $validator = $this->validator::make($request->all(),[
                'title' => 'required|max:255',
                'description' => 'required',
                'image' => 'required|mimes:jpg,jpeg,png'
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first());

            $input = $request->all();

            if($request->has('image'))
            {
                $imageName = $this->helper::upload_image($request->image,$this->storageFolder);

                $input['image']=\URL::to($this->publicFolder.$imageName);
            }

            $this->news::create($input);

            return redirect()->route('dashboard.news')->with('success','News created');


        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage],'error');
        }
    }

    public function destroy(News $news)
    {
        try {
            if($news->delete())
            {
                $this->helper::delete_image(basename($news->image), $this->storageFolder);
            }

            return back()->with('success','News deleted');
        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage],'error');
        }
    }

    public function show(News $news)
    {
        return $news;
    }

    public function edit(News $news)
    {
        return $news;
    }
}
