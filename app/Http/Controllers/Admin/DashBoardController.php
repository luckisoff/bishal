<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends BaseAdminController
{
    public function __construct()
    {
        parent::__construct();
        //$this->middleware(['permission:view dashboard']);
    }
    public function dashboard()
    {
        $user = auth()->user();
        if($user->hasRole('manager'))
        {
            return redirect()->route('dashboard.hotel.show',$user->hotels()->first());
        }

        if(!auth()->user()->can('view dashboard'))
        {
            Auth::logout();
            return redirect()->back()->withErrors("Access denied",'error');;
        }
        return view('admin.parts.index');
    }
}
