<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Auth;
class BaseAdminController extends Controller
{
    protected $validator,$helper;

    function __construct()
    {
        $this->setValues();

        $this->middleware(function ($request, $next) {

            Auth::user()->updated_at = new \DateTime();
            Auth::user()->update();

            return $next($request);
        });
    }

    protected function setValues()
    {
        $this->validator = new Validator();
        $this->helper = new Helper();
    }
}
