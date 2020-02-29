<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Controllers\Api\NotificationController as Notify;

class OrderController extends BaseAdminController
{
    function __construct()
    {
        parent::__construct();
        Notify::setValues();

    }
    public function confirm(Order $order)
    {
        try {
            $order->confirm = true;

            if(!$order->update()) throw new \Exception('');

            Notify::confirmOrderToUser($order->user, $order, 'Thank you for the order. Your order has been confirmed.');

            return back()->with('success','Order has been confirmed');

        } catch (\Throwable $th) {
            return back()->withErrors(['Can not perform this action. Please try again'],'error');
        }
    }

    public function orderDispatch(Order $order)
    {
        try {
            $order->dispatched = true;

            if(!$order->update()) throw new \Exception();

            Notify::confirmOrderToUser($order->user, $order, 'Your order has been dispatched and its on the way.');

            return back()->with('success','Order has been dispatched.');

        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }

    public function success(Order $order)
    {
        try {

            $order->success = true;

            $order->invoice = $order->hotel_id.$order->user_id.$order->id;

            if(!$order->update()) throw new \Exception('');
            return back()->with('success','Order has been invoiced.');
        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()],'error');
        }
    }

    public function invoice(Order $order)
    {
        try {
            if(!$order) throw new \Exception('invoice not found!');

            return response()->json([
                'status' => true,
                'code'  =>200,
                'invoice'=>$order,
                'user'=>$order->user
            ]);
        } catch (\Throwable $th) {
            return trigger_error($th->getMessage());
        }
    }
}
