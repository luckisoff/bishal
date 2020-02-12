@extends('layouts.admin')
@section('dashboard')
<div class="row">
    <div class="col-md-12">
        <div class="widget box">
            <div class="widget-header">
                <h4><i class="icon-reorder"></i> Stories</h4>
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
                            <th data-hide="phone">Cover Image</th>
                            <th data-hide="phone,tablet">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stories as $story)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td>{{$story->name}}</td>
                                
                                <td>
                                    @if($story->cover_img)
                                    <img src="{{$story->cover_img}}" alt="{{$story->name}}" style="width:55px">
                                    @endif
                                </td>
                                
                                
                                
                                <td>
                                    @if(auth()->user()->can('delete story'))
                                        <a class="btn btn-danger btn-sm" href="#" onclick="storyDelete({{$story->id}});">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <form id="story-delete{{$story->id}}" action="{{route('dashboard.story.delete',$story)}}" method="POST" style="display: none">
                                            @csrf
                                        </form>
                                    @endif
                                    @if(auth()->user()->can('view story'))
                                        <a href="{{route('dashboard.story.show',$story)}}" class="btn btn-info btn-sm"><i class="icon-eye-open"></i></a>
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
    function storyDelete(id)
    {
        event.preventDefault();
        if(confirm('Are you sure?'))
        {
            document.getElementById('story-delete' + id).submit();
        }
        else
        {
            return false;
        }
    }
</script>
@endsection
