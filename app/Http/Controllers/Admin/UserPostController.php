<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Models\UserPost;

class UserPostController extends BaseAdminController
{
    public function index()
    {
        $userposts=UserPost::orderBy('created_at','desc')->get();
        return view('admin.parts.posts.index',compact('userposts'));
    }

    public function show(UserPost $post)
    {
        return view('admin.parts.posts.show',compact('post'));
    }

    public function destroy(UserPost $post)
    {

        if($post->delete())
        {
            foreach($post->images as $image)
            {
               Helper::delete_image($image);
            }
            return redirect()->back()->with('success','Post delete successful');
        }
        return redirect()->back()->withErrors('Post delete error','error');

    }
}