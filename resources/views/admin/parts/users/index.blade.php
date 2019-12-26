@extends('layouts.admin')
@section('dashboard')
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
                            <th data-hide="phone">Username</th>
                            <th data-hide="phone">Gender</th>
                            <th data-class="expand">Email</th>
                            <th data-hide="phone">Mobile</th>
                            <th data-hide="phone,tablet">Country</th>
                            <th data-hide="phone">DOB</th>
                            <th data-hide="phone">Address</th>
                            <th data-hide="phone,tablet">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->gender}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->mobile}}</td>
                                <td>{{$user->country}}</td>
                                <td>{{$user->dob}}</td>
                                <td>{{$user->address}}</td>
                                <td>
                                    @if(auth()->user()->can('update user'))
                                        <a href="{{route('dashboard.user.edit',$user)}}" class="btn btn-warning btn-sm"><i class="icon-pencil"></i></a>
                                    @endif
                                    @if(auth()->user()->can('delete user'))
                                        <a class="btn btn-danger btn-sm" href="{{route('dashboard.user.delete',$user)}}" onclick="userDelete({{$user->id}});">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <form id="user-delete{{$user->id}}" action="{{route('dashboard.user.delete',$user)}}" method="POST" style="display: none">
                                            @csrf
                                        </form>
                                    @endif
                                    @if(auth()->user()->can('view user'))
                                        <a href="#" class="btn btn-info btn-sm"><i class="icon-eye-open"></i></a>
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
    function userDelete(id)
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
