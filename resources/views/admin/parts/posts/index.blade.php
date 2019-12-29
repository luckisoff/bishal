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
                            <th data-class="expand">User</th>
                            <th data-hide="phone">Title</th>
                            <th data-hide="phone">Comments/Likes</th>
                            <th data-hide="phone">Date/Time</th>
                            <th data-hide="phone,tablet">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($userposts as $post)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->title}}</td>
                                <td>
                                    {!!"<icon class='icon-comment'></icon> ".$post->comments->count()!!}|
                                    {!!"<icon class='icon-thumbs-up'></icon> ".$post->likes->count()!!}
                                </td>
                                <td>{{$post->created_at}}</td>
                                <td>
                                    @if(auth()->user()->can('delete userpost'))
                                        <a class="btn btn-danger btn-sm" href="#" onclick="postDelete({{$post->id}});">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <form id="user-delete{{$post->id}}" action="{{route('dashboard.user.post.delete',$post)}}" method="POST" style="display: none">
                                            @csrf
                                        </form>
                                    @endif
                                    @if(auth()->user()->can('view userpost'))
                                        <a href="{{route('dashboard.user.post',$post)}}" class="btn btn-info btn-sm"><i class="icon-eye-open"></i></a>
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
    function postDelete(id)
    {
        event.preventDefault();
        if(confirm('Are you sure?'))
        {
            document.getElementById('user-delete'+id).submit();
        }
        else
        {
            return false;
        }
    }
</script>
@endsection
