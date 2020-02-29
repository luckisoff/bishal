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
                     <a href="{{route('dashboard.hotel.show',[$hotel->id,'create-package'])}}"><i class="icon-plus"></i>New</a>
                </h4>
            </div>
            <div class="widget-content no-padding">
                <table class="table table-striped table-bordered table-hover table-checkable table-responsive datatable">
                    <thead>
                        <tr>
                            <th class="checkbox-column">
                                <input type="checkbox" class="uniform">
                            </th>
                            <th data-class="expand">Ordered By</th>
                            <th data-hide="phone">Phone</th>
                            <th data-hide="phone">Address</th>
                            <th data-hide="phone">Items</th>
                            <th data-hide="phone">Amount</th>
                            <th data-hide="phone,tablet">Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        @foreach($hotel->newOrders as $order)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td>{{$order->user()->name}}</td>
                                <td>{{$order->user()->mobile}}</td>
                                <td>{{$order->user()->address}}</td>
                                <td>
                                @foreach($order->items as $item)
                                    <ul>
                                        <li>
                                            <span>{{$item['name']}}</span>
                                            <span>({{'Rs. '.$item['price']}})</span>
                                        </li>
                                    </ul>
                                    <br>
                                @endforeach
                                </td>
                                <td>{{$order->amount}}</td>
                                <td>
                                    @if(auth()->user()->hasRole('manager'))
                                        <a class="btn btn-danger btn-sm" href="#" onclick="packageDelete({{$package->id}});">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <form id="package-delete{{$package->id}}" action="{{route('dashboard.package.delete',$order)}}" method="POST" style="display: none">
                                            @csrf
                                        </form>
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
<script>
    function packageDelete(id)
    {
        event.preventDefault();
        if(confirm('Are you sure?'))
        {
            document.getElementById('package-delete'+id).submit();
        }
        else
        {
            return false;
        }
    }
</script>
@endsection
