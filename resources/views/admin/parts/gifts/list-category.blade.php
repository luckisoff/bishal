@extends('layouts.admin')
@section('dashboard')
<div class="row">
    <div class="col-md-12">
        <div class="widget box">
            <div class="widget-header">
                <h4><i class="icon-reorder"></i> Categories</h4>
                (<a href="{{route('dashboard.category.create')}}">New</a>)
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
                            <th data-hide="phone,tablet">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td>{{$category->name}}</td>
                                <td>
                                    @if(auth()->user()->can('delete category'))
                                        <a class="btn btn-danger btn-sm pull-right" href="#" onclick="categoryDelete({{$category->id}});">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <form id="category-delete{{$category->id}}" action="{{route('dashboard.category.delete',$category)}}" method="POST" style="display: none">
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
<script>
    function categoryDelete(id)
    {
        event.preventDefault();
        if(confirm('Are you sure?'))
        {
            document.getElementById('category-delete' + id).submit();
        }
        else
        {
            return false;
        }
    }
</script>
@endsection
