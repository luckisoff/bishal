@extends('layouts.admin')
@section('dashboard')
<div class="row">
    <div class="col-md-12">
        <div class="widget box">
            <div class="widget-header">
                <h4><i class="icon-reorder"></i> News</h4>
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
                            <th data-class="expand">Title</th>
                            <th data-hide="phone">Description</th>
                            <th data-hide="phone">Cover Image</th>
                            <th data-hide="phone">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $singleNews)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td>{{$singleNews->title}}</td>
                                <td>{{substr($singleNews->description, 0, 200).'...'}}</td>
                                <td>
                                    @if($singleNews->image)
                                    <img src="{{$singleNews->image}}" alt="{{$singleNews->title}}" style="width:55px">
                                    @endif
                                </td>


                                <td>
                                    @if(auth()->user()->can('delete news'))
                                        <a class="btn btn-danger btn-sm" href="#" onclick="newsDelete({{$singleNews->id}});">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <form id="news-delete{{$singleNews->id}}" action="{{route('dashboard.news.delete',$singleNews)}}" method="POST" style="display: none">
                                            @csrf
                                        </form>
                                    @endif
                                    @if(auth()->user()->can('view news'))
                                        <a href="{{route('dashboard.news.show',$singleNews)}}" class="btn btn-info btn-sm"><i class="icon-eye-open"></i></a>
                                    @endif
                                    @if(auth()->user()->can('update news'))
                                        <a href="{{route('dashboard.news.edit',$singleNews)}}" class="btn btn-warning btn-sm"><i class="icon-edit"></i></a>
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
    function newsDelete(id)
    {
        event.preventDefault();
        if(confirm('Are you sure?'))
        {
            document.getElementById('news-delete' + id).submit();
        }
        else
        {
            return false;
        }
    }
</script>
@endsection
