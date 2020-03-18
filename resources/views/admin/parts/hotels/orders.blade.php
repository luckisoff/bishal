@extends('admin.parts.hotels.main')
@section('hotelsection')
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
                <h4>
                     <a href="{{route('dashboard.hotel.show',[$hotel->id,'orders'])}}"><i class="icon-eye-open"></i>New Orders</a> |
                     <a href="{{route('dashboard.hotel.show',[$hotel->id,'confirm-orders'])}}"><i class="icon-check"></i>Confirmed</a> |
                     <a href="{{route('dashboard.hotel.show',[$hotel->id,'success-orders'])}}"><i class="icon-rocket"></i>Dispatched</a>
                </h4>
            </div>
            <div class="widget-content no-padding">
                <table class="table table-striped table-bordered table-hover table-checkable table-responsive datatable">
                    <thead>
                        <tr>
                            <th class="checkbox-column">
                                <input type="checkbox" class="uniform">
                            </th>
                            <th data-class="expand">Order No.</th>
                            <th data-class="expand">Order Type.</th>
                            <th data-class="expand">Ordered By</th>
                            <th data-hide="phone">Phone</th>
                            <th data-hide="phone">Address</th>
                            <th data-hide="phone">Items</th>
                            <th data-hide="phone">Amount</th>
                            <th data-hide="phone">Date/Time</th>
                            <th data-hide="phone,tablet">Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        @foreach($hotel->newOrders as $order)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td>{{$order->hotel_id.$order->user_id.$order->id}}</td>
                                <td>{{$order->type}}</td>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->user->mobile}}</td>
                                <td>{{$order->user->address}}</td>
                                <td>
                                @foreach($order->items as $item)
                                    <ul>
                                        <li>
                                            <span>{{ $item['name'] }}</span>
                                            <span>({{'Rs. '.$item['price'] }})</span>
                                        </li>
                                    </ul>
                                    <br>
                                @endforeach
                                </td>
                                <td>{{$order->amount}}</td>
                                <td>{{$order->created_at}} ({{$order->created_at->diffForHumans()}})</td>
                                <td>
                                    @if(auth()->user()->hasRole('manager') || auth()->user()->can('update order'))

                                        <a class="btn btn-warning btn-sm" href="{{route('dashboard.order.confirm',$order)}}">
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
