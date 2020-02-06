<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Helpers\Helper;

class BaseAdminController extends Controller
{
    protected $validator,$helper;

    function __construct()
    {
        $this->setValues();
    }

    protected function setValues()
    {
        $this->validator=new Validator();
        $this->helper=new Helper();
    }
}
