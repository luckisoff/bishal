@extends('layouts.admin')
@section('dashboard')

<div id="processing" style="display:none;text-align:center;position:absolute;top: 240px;z-index: 999;width: 90%;background: #07a245;color: #fff;">
    <h5>Processing......</h5>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="widget box">
            <div class="widget-header">
                <h4><i class="icon-reorder"></i> Hotels </h4>
                <div class="toolbar no-padding">
                    <div class="btn-group">
                        <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                    </div>
                </div>
            </div>
            <div class="widget-header">
                <h4>
                     <a href="{{route('dashboard.hotel.create')}}"><i class="icon-plus"></i>New</a>
                </h4>
            </div>
            <div class="widget-content no-padding">
                <table class="table table-striped table-bordered table-hover table-checkable table-responsive datatable">
                    <thead>
                        <tr>
                            <th class="checkbox-column">
                                <input type="checkbox" class="uniform">
                            </th>
                            <th data-class="expand">Name</th>
                            <th data-hide="phone">Phone</th>
                            <th data-hide="phone">Location</th>
                            <th data-hide="phone">Address</th>
                            <th data-hide="phone">Logo</th>
                            <th data-hide="phone">Website</th>
                            <th data-hide="phone">Type</th>
                            <th data-hide="phone,tablet">Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        @foreach($hotels as $hotel)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td>{{$hotel->name}}</td>
                                <td>{{$hotel->phone}}</td>
                                <td>{{$hotel->addressLocation->name}}</td>
                                <td>{{$hotel->address}}</td>
                                <td><img class="img-responsive" style="height:28px" src="{{$hotel->logo_url}}" alt="{{$hotel->name}}"></td>
                                <td>{{$hotel->website}}</td>
                                <td>
                                    <span class="label label-info">{{$hotel->type}}</span>
                                </td>
                                <td>
                                    @if(auth()->user()->can('delete userpost'))
                                        <a href="{{route('dashboard.hotel.create',$hotel)}}" class="btn btn-warning btn-sm"><i class="icon-edit"></i></a>
                                    @endif
                                    @if(auth()->user()->can('delete userpost'))
                                        <a class="btn btn-danger btn-sm" href="#" onclick="hotelDelete({{$hotel->id}});">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <form id="hotel-delete{{$hotel->id}}" action="{{route('dashboard.hotel.delete',$hotel)}}" method="POST" style="display: none">
                                            @csrf
                                        </form>
                                    @endif
                                    @if(auth()->user()->can('view userpost'))
                                        <a href="{{route('dashboard.hotel.show',$hotel)}}" class="btn btn-info btn-sm"><i class="icon-eye-open"></i></a>
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
<!-- Modal dialog -->
<script>
    function hotelDelete(id)
    {
        event.preventDefault();
        if(confirm('Are you sure?'))
        {
            document.getElementById('hotel-delete'+id).submit();
        }
        else
        {
            return false;
        }
    }
</script>
@endsection
