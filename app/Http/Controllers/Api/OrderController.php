<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
     * @bodyParam note string required note from the users
    */
    public function store(Request $request)
    {
        try
        {
            $validator = $this->validator::make($request->all(),[
                'hotel_id'=>'required',
                'items' =>'required|array',
                'amount' =>'required',
                'note' =>'required'
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

    /**
     * Get
     * @urlParam hotel_id required id of the hotel for orders
    */
    public function getAllOrders($hotel_id)
    {
        try {
            $orders = Order::where('hotel_id',$hotel_id)
                        ->where('confirm',0)
                        ->where('dispatched',0)
                        ->where('success',0)
                        ->with('user')
                        ->orderBy('created_at','desc')
                        ->get()
                        ->groupBy(function($date){
                            return Carbon::parse($date->created_at)->format('Y-m-d');
                        });;
            return $this->successResponse(['orders'=>$orders],'Hotel order listing');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 500);
        }
    }

    /**
     * Confirm
     * @bodyParam order_id integer required id of the order to be confirmed
     * @bodyParam message string required message to be sent to the user
    */
    public function confirmOrder(Request $request)
    {
        try {
            $validator = $this->validator::make($request->all(),[
                'order_id' => 'required',
                'message'  => 'required'
            ]);

            if($validator->fails()) throw new \Exception($validator->errors()->first());

            $order = Order::where('id',$request->order_id)->first();

            if(!$order) throw new \Exception('No order found');

            $order->confirm = true;
            $order->dispatched = true;

            if(!$order->update()) throw new \Excpetion('Order Confirmation failed');

            $not1 = Notify::confirmOrderToUser($order->user, $order, $request->message);

            return $this->successResponse(['orders'=>$order,'notif_user'=>$not1],'Hotel order listing');

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 500);
        }
    }

    /**
     * User Orders
     * @urlParam user_id required id of the user for orders
    */
    public function getUserOrders($user_id)
    {
        try {
            $orders = Order::where('user_id',$user_id)
                        ->with('hotel')
                        ->orderBy('created_at','desc')
                        ->get()
                        ->groupBy(function($date){
                            return Carbon::parse($date->created_at)->format('Y-m-d');
                        });
            
            $neworders = array();

            foreach($orders as $date => $items)
            {
                $neworders[] = [
                    'date'  => $date,
                    'items' => $items
                ];
            }
            return $this->successResponse(['orders' => $neworders],'Users order listing');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 500);
        }
    }
}
