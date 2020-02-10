@extends('layouts.admin')
@section('dashboard')
<div class="row">
    <div class="col-md-12">
        <div class="widget box">
            <div class="widget-header">
                <h4><i class="icon-reorder"></i> Posts</h4>
                <div class="toolbar no-padding">
                    <div class="btn-group">
                        <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                    </div>
                </div>
            </div>
            <div class="widget-content no-padding">
                <table class="table table-striped table-bordered table-hover table-checkable table-responsive datatable">
                    <thead>
                        <tr>
                            <th class="checkbox-column">
                                <input type="checkbox" class="uniform">
                            </th>
                            <th data-class="expand">Name</th>
                            <th data-hide="phone">Price</th>
                            <th data-hide="phone">Category</th>
                            <th data-hide="phone">Cover Image</th>
                            <th data-hide="phone">Status</th>
                            <th data-hide="phone,tablet">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gifts as $gift)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td>{{$gift->name}}</td>
                                <td>{{$gift->price}}</td>
                                <td>{{$gift->category->name}}</td>
                                <td>
                                    @if($gift->cover_img)
                                    <img src="{{$gift->cover_img}}" alt="{{$gift->name}}" style="width:55px">
                                    @endif
                                </td>
                                <td>{{$gift->status ? 'Available' : 'Not Available'}}</td>
                                <td>
                                    @if(auth()->user()->can('delete gift'))
                                        <a class="btn btn-danger btn-sm" href="#" onclick="giftDelete({{$gift->id}});">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <form id="gift-delete{{$gift->id}}" action="{{route('dashboard.gift.delete',$gift)}}" method="POST" style="display: none">
                                            @csrf
                                        </form>
                                    @endif
                                    @if(auth()->user()->can('view gift'))
                                        <a href="{{route('dashboard.gift.show',$gift)}}" class="btn btn-info btn-sm"><i class="icon-eye-open"></i></a>
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
<script>
    function giftDelete(id)
    {
        event.preventDefault();
        if(confirm('Are you sure?'))
        {
            document.getElementById('gift-delete' + id).submit();
        }
        else
        {
            return false;
        }
    }
</script>
@endsection
