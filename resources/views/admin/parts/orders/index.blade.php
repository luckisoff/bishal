@extends('layouts.admin')
@section('dashboard')
<div class="row">
    <div class="col-md-12">
        <div class="widget box">
            <div class="widget-header">
                <h4><i class="icon-reorder"></i> Orders</h4>
                <div class="toolbar no-padding">
                    <div class="btn-group">
                        <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                    </div>
                </div>
            </div>
            <div class="widget-header">

            </div>
            <div class="widget-content no-padding">
                <table class="table table-striped table-bordered table-hover table-checkable table-responsive datatable">
                    <thead>
                        <tr>
                            <th class="checkbox-column">
                                <input type="checkbox" class="uniform">
                            </th>
                            <th data-class="expand">Order No.</th>
                            <th data-class="expand">Ordered By</th>
                            <th data-hide="phone">Phone</th>
                            <th data-hide="phone">Address</th>
                            <th data-hide="phone">Delivery Address</th>
                            <th data-hide="phone">Items</th>
                            <th data-hide="phone">Total Amount</th>
                            <th data-hide="phone">Date/Time</th>
                            <th data-hide="phone,tablet">Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        @foreach($orders as $order)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td>{{$order->user_id.$order->id}}</td>
                                <td>{{$order->user->name}}</td>
                                <td>{{ $order->mobile?:$order->user->mobile }}</td>
                                <td>{{$order->user->address}}</td>
                                <td>{{$order->delivery_address}}</td>
                                <td>
                                    <table class="table table-bordered table-responsive">
                                        <tr style="text-decoration: underline;font-weight: bold;">
                                            <td>Name</td>
                                            <td>Qnt</td>
                                            <td>Rs</td>
                                            <td>Total</td>
                                        </tr>
                                        @foreach($order->items as $item)
                                        <tr>
                                            <td>{{$item['name']}}</td>
                                            <td>{{$item['quantity']}}</td>
                                            <td>{{$item['price']}}</td>
                                            <td>{{$item['quantity'] * $item['price']}}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    <br>
                                </td>
                                <td>{{'Rs. '.$order->total_price}}</td>
                                <td>{{$order->created_at}} ({{$order->created_at->diffForHumans()}})</td>
                                <td>
                                    @if(auth()->user()->hasRole('manager') || auth()->user()->can('update order'))

                                        <a class="btn btn-warning btn-sm" href="{{route('dashboard.orders.create-confirm',$order)}}">
                                            Confirm
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /Invoice -->
@endsection
@section('scripts')
@endsection
