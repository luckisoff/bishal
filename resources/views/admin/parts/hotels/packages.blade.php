@extends('admin.parts.hotels.main')
@section('hotelsection')
<div class="row">
    <div class="col-md-12">
        <div class="widget box">
            <div class="widget-header">
                <h4><i class="icon-reorder"></i> Packages </h4>
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
                            <th data-class="expand">Package Name</th>
                            <th data-hide="phone">Total Price</th>
                            <th data-hide="phone">Type</th>
                            <th data-hide="phone">Items</th>
                            <th data-hide="phone">Image</th>
                            <th data-hide="phone,tablet">Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        @foreach($hotel->packages as $package)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td>{{$package->name}}</td>
                                <td>{{$package->price}}</td>
                                <td>{{$package->type}}</td>
                                <td>
                                @foreach($package->items as $item)
                                    <ul>
                                        <li>
                                            <span>{{$item['name']}}</span>
                                            <span>({{'Rs. '.$item['price']}})</span>
                                        </li>
                                    </ul>
                                    <br>
                                @endforeach
                                </td>
                                <td>
                                    <img src="{{$package->image}}" alt="{{$package->name}}" class="img-responsive" style="width:50px">
                                </td>
                                <td>
                                    @if(auth()->user()->can('delete package'))
                                        <a class="btn btn-danger btn-sm" href="#" onclick="packageDelete({{$package->id}});">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <form id="package-delete{{$package->id}}" action="{{route('dashboard.package.delete',$package)}}" method="POST" style="display: none">
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