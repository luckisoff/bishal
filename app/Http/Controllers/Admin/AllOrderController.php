<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AllOrder;
use App\Http\Controllers\Api\NotificationController as Notify;

class AllOrderController extends BaseAdminController
{

    function __construct()
    {
        Notify::setValues();
    }

    public function index()
    {
        $orders = AllOrder::where('confirm', 0)->where('success', 0)->orderBy('created_at','desc')->get();
        return view('admin.parts.orders.index',compact('orders'));
    }

    public function confirmed()
    {
        $orders = AllOrder::where('confirm', 1)->where('success', 0)->orderBy('created_at','desc')->get();
        return view('admin.parts.orders.confirm',compact('orders'));
    }

    public function success()
    {
        $orders = AllOrder::where('confirm', 1)->where('success', 1)->orderBy('created_at','desc')->get();
        return view('admin.parts.orders.success',compact('orders'));
    }

    public function confirmTheOrder(AllOrder $order)
    {
        try {
            $order->confirm = 1;

            $order->update();

            Notify::confirmOrderToUser($order->user, $order, 'Dear user your order has been confirmed! Thank you.');

            return back()->with('success','Order has been confirmed');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage(),'error');
        }
    }

    public function successTheOrder(AllOrder $order)
    {
        try {
            $order->success = 1;

            $order->update();

            Notify::confirmOrderToUser($order->user, $order, 'Dear user your payment has been received. Thank you for shopping with us.');

            return back()->with('success','Order has been invoiced');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage(),'error');
        }
    }
}
