<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Hotel;
use App\Http\Controllers\Api\NotificationController as Notify;
/**
 * @group Orders
 *
 * APIs for orders
 */
class OrderController extends BaseApiController
{
    protected $manager;

    function __construct()
    {
        parent::__construct();
        Notify::setValues();
    }

    /**
     * Store
     * @bodyParam hotel_id integer required id of the hotel for order
     * @bodyParam items array required items array
     * @bodyParam amount integer required total order amount of the user
    */
    public function store(Request $request)
    {
        try
        {
            $validator = $this->validator::make($request->all(),[
                'hotel_id'=>'required',
                'items' =>'required|array',
                'amount' =>'required'
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first());

            $input = $request->all();

            $input['user_id'] = app()->request->user()->id;

            $order = Order::create($input);

            $this->setManager($request->hotel_id);

            //sends order info to user
            $not1 = Notify::orderUser(app()->request->user(), $order);

            //sends order placement to hotel manger
            $not2 = '';
            if($this->manager)
            {
                $not2 = Notify::orderHotel($this->manager, $order);
            }

            return $this->successResponse(['order' => $order,'notif_user'=>$not1, 'notif_hotel' => $not2],'Order placed!');

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 500);
        }
    }

    protected function setManager($hotel_id)
    {
        $hotel = Hotel::where('id',$hotel_id)->first();

        $this->manager = $hotel ? $hotel->managers->first():'';
    }
}
