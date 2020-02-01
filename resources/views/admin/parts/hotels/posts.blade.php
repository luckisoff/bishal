@extends('admin.parts.hotels.main')
@section('hotelsection')
<div class="row">
    <div class="col-md-12">
        <div class="widget box">
            <div class="widget-header">
                <h4><i class="icon-reorder"></i> Posts </h4>
                <div class="toolbar no-padding">
                    <div class="btn-group">
                        <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                    </div>
                </div>
            </div>
            <div class="widget-header">
                <h4>
                     <a href="{{route('dashboard.hotel.show',[$hotel->id,'create-post'])}}"><i class="icon-plus"></i>New</a>
                </h4>
            </div>
            <div class="widget-content no-padding">
                <table class="table table-striped table-bordered table-hover table-checkable table-responsive datatable">
                    <thead>
                        <tr>
                            <th class="checkbox-column">
                                <input type="checkbox" class="uniform">
                            </th>
                            <th data-class="expand">Post</th>
                            <th data-hide="phone">Hotel</th>
                            <th data-hide="phone,tablet">Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        @foreach($hotel->posts as $post)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td>{{substr($post->post,0,100)}}</td>
                                <td>{{$post->hotel->name}}</td>
                                <td>
                                    @if(auth()->user()->can('delete userpost'))
                                        <a class="btn btn-danger btn-sm" href="#" onclick="postDelete({{$post->id}});">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <form id="post-delete{{$post->id}}" action="{{route('dashboard.hotel.post.delete',$post)}}" method="POST" style="display: none">
                                            @csrf
                                        </form>
                                    @endif
                                    @if(auth()->user()->can('view userpost'))
                                        <a href="{{route('dashboard.hotel.show',$post)}}" class="btn btn-info btn-sm"><i class="icon-eye-open"></i></a>
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
            document.getElementById('post-delete'+id).submit();
        }
        else
        {
            return false;
        }
    }
</script>
@endsection