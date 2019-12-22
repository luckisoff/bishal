<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class BaseApiController extends Controller
{
    public function successResponse($data = array(), string $message = 'Successful', int $code = 200, array $header = []) {
        $dat['status']=true;
        $dat['message']=$message;
        $dat['code']=$code;

	    $res = response()->json(array_merge($dat,$data), $code);

	    if($header && is_array($header)) {
	    	foreach ($header as $key => $value) {
		    	$res->header($key, $value);
	    	}
	    }
	    return $res;
	}

	public function errorResponse(string $message = 'error', int $code = 404) {
	    return response()->json([
	        'status' => false,
	        'code' => $code,
            'message' => $message,
	    ], $code);
	}
}
