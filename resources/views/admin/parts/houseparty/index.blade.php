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
                            <th data-class="expand">Name</th>
                            <th data-hide="phone">Items</th>
                            <th data-hide="phone">Cover Image</th>
                            <th data-hide="phone">Created At</th>
                            <th data-hide="phone">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($houseparties as $party)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td>{{$party->name}}</td>
                                <td>
                                    @foreach($party->items as $item)
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
                                    @if($party->image)
                                    <img src="{{$party->image}}" alt="{{$party->name}}" style="width:55px">
                                    @endif
                                </td>
                                <td>{{$party->created_at->format('m-d H:m')}}</td>


                                <td>
                                    @if(auth()->user()->can('delete houseparty'))
                                        <a class="btn btn-danger btn-sm" href="#" onclick="partyDelete({{$party->id}});">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <form id="party-delete{{$party->id}}" action="{{route('dashboard.houseparty.delete',$party)}}" method="POST" style="display: none">
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
    function partyDelete(id)
    {
        event.preventDefault();
        if(confirm('Are you sure?'))
        {
            document.getElementById('party-delete' + id).submit();
        }
        else
        {
            return false;
        }
    }
</script>
@endsection
