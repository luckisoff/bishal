@extends('admin.parts.hotels.main')
@section('hotelsection')
<div class="row">
    <div class="col-md-12">
        <div class="widget box">
            <div class="widget-header">
                <h4><i class="icon-reorder"></i> Users</h4>
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
                            <th data-class="expand">Email</th>
                            <th data-hide="phone">Mobile</th>
                            <th data-hide="phone">Address</th>
                            <th data-hide="phone,tablet">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            @if(!$hotel->managers->contains($user->id))
                                <tr>
                                    <td class="checkbox-column">
                                        <input type="checkbox" class="uniform">
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>
                                        @if($hotel->managers->contains($user->id)&&auth()->user()->can('delete user'))
                                            <a class="btn btn-danger btn-sm" href="{{route('dashboard.manager.delete',[$user,$hotel])}}">
                                                <i class="icon-minus"></i>
                                            </a>
                                        @else
                                            <a href="{{route('dashboard.manager.store',[$user,$hotel])}}" class="btn btn-success btn-sm"><i class="icon-plus"></i></a>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection