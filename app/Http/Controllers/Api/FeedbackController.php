<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;

/**
 * @group Feedback
 *
 * APIs for user feedback
 */
class FeedbackController extends BaseApiController
{
    /**
    *Create
    *@bodyParam feedback string required feedback of user
    *@bodyParam rating integer optional number of app rating by user default 0
    */
    public function store(Request $request)
    {
        try {
            $validator = $this->validator::make($request->all(),[
                'feedback' => 'required'
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first());

            $input = $request->all();

            $input['user_id'] = app()->request->user()->id;

            $feedback = Feedback::create($input);

            return $this->successResponse(['feedback'=>$feedback],'Feedback received');

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(),409);
        }
    }
}
