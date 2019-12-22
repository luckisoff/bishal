<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class BaseApiController extends Controller
{
    public function successResponse($data = array(), string $message = 'Successful', int $code = 200, array $header = []) {
	    $res = response()->json([
            'status' => true,
	        'message' => $message,
	        'code' => $code,
	        'data' => $data,
	    ], $code);

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
