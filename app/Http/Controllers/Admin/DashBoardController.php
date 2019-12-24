<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends BaseAdminController
{
    public function dashboard()
    {
        return view('admin.parts.index');
    }
}
