@extends('admin.parts.hotels.main')
@section('hotelsection')
<div class="row">
    <div class="col-md-12">
        <div class="widget box">
            <div class="widget-header">
                <h4><i class="icon-reorder"></i> Menu Items </h4>
                <div class="toolbar no-padding">
                    <div class="btn-group">
                        <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                    </div>
                </div>
            </div>
            <div class="widget-header">
                <h4>
                     <a href="{{route('dashboard.hotel.show',[$hotel->id,'create-menu'])}}"><i class="icon-plus"></i>New</a>
                </h4>
            </div>
            <div class="widget-content no-padding">
                <table class="table table-striped table-bordered table-hover table-checkable table-responsive datatable">
                    <thead>
                        <tr>
                            <th class="checkbox-column">
                                <input type="checkbox" class="uniform">
                            </th>
                            <th data-class="expand">Menu Name</th>
                            <th data-hide="phone">Items</th>
                            <th data-hide="phone">Image</th>
                            <th data-hide="phone,tablet">Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        @foreach($hotel->menus as $menu)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td>{{$menu->name}}</td>
                                <td>
                                @foreach($menu->items as $item)
                                    <ul>
                                        <li>
                                            <span>{{$item['name']}}</span>
                                            <span>({{'Rs. '.$item['price'].'/'.$item['unit']}})</span>
                                        </li>
                                    </ul>
                                    <br>
                                @endforeach
                                </td>
                                <td>
                                    <img src="{{$menu->image}}" alt="{{$menu->name}}" class="img-responsive" style="width:50px">
                                </td>
                                <td>
                                    @if(auth()->user()->can('delete userpost'))
                                        <a class="btn btn-danger btn-sm" href="#" onclick="postDelete({{$menu->id}});">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <form id="menu-delete{{$menu->id}}" action="{{route('dashboard.menu.delete',$menu)}}" method="POST" style="display: none">
                                            @csrf
                                        </form>
                                    @endif
                                    @if(auth()->user()->can('view userpost'))
                                        <a href="{{route('dashboard.hotel.show',$menu)}}" class="btn btn-info btn-sm"><i class="icon-eye-open"></i></a>
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
    function postDelete(id)
    {
        event.preventDefault();
        if(confirm('Are you sure?'))
        {
            document.getElementById('menu-delete'+id).submit();
        }
        else
        {
            return false;
        }
    }
</script>
@endsection