<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AllOrder;

/**
 * @group Gifts Orders
 *
 * APIs for event
 */
class GiftOrderController extends BaseApiController
{

    function __construct()
    {
        parent::__construct();
        NotificationController::setValues();
    }
    /**
     * Gift Order placement
     * @bodyParam items array required details of items ordered name,unit price, quantity etc
     * @bodyParam deliver_address string required address of the users to be delivered
     * @bodyParam total_price integer required total price of the order
    */
    public function placeOrder(Request $request)
    {
        try {

            $validator = $this->validator::make($request->all(),[
                'items' => 'required|array',
                'delivery_address' => 'required',
                'total_price' => 'required'
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first());

            $user = app()->request->user();

            $input = $request->all();

            $input['user_id'] = $user->id;

            $order = AllOrder::create($input);

            if($user->device_token)
            {
                NotificationController::orderUser($user, $order);
            }

            return $this->successResponse(['order' => $order], 'Order placed successfully');

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 500);
        }
    }

    /**
     * Get all users order
    */
    public function getUsersOrder()
    {
        try {

            $user = app()->request->user();

            $orders = AllOrder::where('user_id', $user->id)->orderBy('created_at','desc')->get();

            return $this->successResponse(['orders'=>$orders],'Users order listing');

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 500);
        }
    }
}
