<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserPost;
use App\Models\Hotel;
use App\Models\Category;

class DashBoardController extends BaseAdminController
{
    protected $limit;
    public function __construct()
    {
        parent::__construct();
        $this->limit = 10;
    }

    public function dashboard()
    {
        $dashboard = new Self();
        $user = auth()->user();

        if($user->hasRole('manager'))
        {
            return redirect()->route('dashboard.hotel.show',$user->hotels()->first());
        }

        if(!$user->can('view dashboard'))
        {
            Auth::logout();
            return redirect()->back()->withErrors("Access denied",'error');;
        }

        return view('admin.parts.index',compact('dashboard'));
    }

    // all latest

    public function totalUsers()
    {
        return User::count();
    }

    public function recentUsers()
    {
        return User::orderBy('updated_at','desc')->limit($this->limit)->get();
    }

    public function newUsers()
    {
        return User::orderBy('created_at','desc')->limit($this->limit)->get();
    }

    public function posts()
    {
        return UserPost::orderBy('created_at','desc')->limit($this->limit)->get();
    }

    public function totalHotels()
    {
        return Hotel::count();
    }

    public function totalCategory()
    {
        return Category::count();
    }

}
