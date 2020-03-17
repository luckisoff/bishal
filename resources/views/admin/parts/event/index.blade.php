@extends('layouts.admin')
@section('dashboard')
<div class="row">
    <div class="col-md-12">
        <div class="widget box">
            <div class="widget-header">
                <h4><i class="icon-reorder"></i> Event</h4>
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
                            <th data-hide="phone">Place At Top</th>
                            <th data-hide="phone">Event Date</th>
                            <th data-hide="phone">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td>{{$event->title}}</td>
                                <td>
                                    @if($event->image)
                                    <img src="{{$event->image}}" alt="{{$event->title}}" style="width:55px">
                                    @endif
                                </td>
                                <td>
                                    {!! $event->top == 1?"<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>" !!}

                                    @if($event->top)
                                        <a href="{{route('dashboard.event.top', $event)}}" class="label label-warning pull-right"> Unplace</a>
                                    @else
                                        <a href="{{route('dashboard.event.top', $event)}}" class="label label-info pull-right">Place</a>
                                    @endif

                                </td>
                                <td>{{$event->event_date}}</td>
                                <td>
                                    @if(auth()->user()->can('delete event'))
                                        <a class="btn btn-danger btn-sm" href="#" onclick="eventDelete({{$event->id}});">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <form id="event-delete{{$event->id}}" action="{{route('dashboard.event.delete',$event)}}" method="POST" style="display: none">
                                            @csrf
                                        </form>
                                    @endif
                                    @if(auth()->user()->can('view event'))
                                        <a href="{{route('dashboard.event.show',$event)}}" class="btn btn-info btn-sm"><i class="icon-eye-open"></i></a>
                                    @endif
                                    @if(auth()->user()->can('update event'))
                                        <a href="{{route('dashboard.event.edit',$event)}}" class="btn btn-warning btn-sm"><i class="icon-edit"></i></a>
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
    function eventDelete(id)
    {
        event.preventDefault();
        if(confirm('Are you sure?'))
        {
            document.getElementById('event-delete' + id).submit();
        }
        else
        {
            return false;
        }
    }
</script>
@endsection
