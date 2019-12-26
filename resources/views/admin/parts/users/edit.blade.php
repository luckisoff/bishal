@extends('layouts.admin')
@section('dashboard')
<div class="row">
    <div class="col-md-12">
        <!-- Tabs-->
        <div class="tabbable tabbable-custom tabbable-full-width">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_edit_account" data-toggle="tab">Edit User</a></li>
            </ul>
            <div class="tab-content row">
                <!--=== Edit Account ===-->
                <div class="tab-pane active" id="tab_edit_account">
                    <form class="form-horizontal" action="{{route('dashboard.user.update',$user)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-header">
                                    <h4>General Information</h4>
                                </div>
                                <div class="widget-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Name:</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                                                    @error('name')
                                                        <div style="margin-top: 10px;">
                                                            <span class="invalid-feedback alert-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Email:</label>
                                                <div class="col-md-8">
                                                    <input disabled="disabled" type="text" name="email" class="form-control" value="{{$user->email}}">
                                                    @error('email')
                                                        <div style="margin-top: 10px;">
                                                            <span class="invalid-feedback alert-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Mobile: </label>
                                                <div class="input-group col-md-8">
                                                    <input id="user-mobile" disabled="disabled" type="text" name="mobile" class="form-control" value="{{$user->mobile}}">
                                                    <span class="input-group-addon" id="user-mobile-edit" style="cursor:pointer"><i class="icon-pencil"></i></span>
                                                </div>
                                                @error('mobile')
                                                    <div>
                                                        <span class="invalid-feedback alert-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Gender:</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="gender">
                                                        <option value="male" {{$user->gender=='male'?'selected':''}}>Male</option>
                                                        <option value="female" {{$user->gender=='female'?'selected':''}}>Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">DOB:</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="dob" class="form-control input-width-small" value="{{$user->dob}}">
                                                    @error('dob')
                                                        <div style="margin-top: 10px;">
                                                            <span class="invalid-feedback alert-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Address:</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="address" class="form-control" value="{{$user->address}}">
                                                    @error('address')
                                                        <div style="margin-top: 10px;">
                                                            <span class="invalid-feedback alert-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.row -->
                                </div> <!-- /.widget-content -->
                            </div> <!-- /.widget -->
                        </div> <!-- /.col-md-12 -->

                        <div class="col-md-12 form-vertical no-margin">
                            <div class="widget">
                                <div class="widget-header">
                                    <h4>Settings</h4>
                                </div>
                                <div class="widget-content">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-2">
                                            <strong class="subtitle padding-top-10px">Permanent username</strong>
                                        </div>

                                        <div class="col-md-8 col-lg-10">
                                            <div class="form-group">
                                                <label class="control-label padding-top-10px">Username:</label>
                                                <input type="text" name="username" class="form-control" value="{{$user->username}}" disabled="disabled">
                                                @error('username')
                                                    <div style="margin-top: 10px;">
                                                        <span class="invalid-feedback alert-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div> <!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-4 col-lg-2">
                                            <strong class="subtitle">Change password</strong>
                                        </div>

                                        <div class="col-md-8 col-lg-10">
                                            <div class="form-group">
                                                <label class="control-label">Old password:</label>
                                                <input type="password" name="old_password" class="form-control" placeholder="Leave empty for no password-change">

                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">New password:</label>
                                                <input type="password" name="password" class="form-control" placeholder="Leave empty for no password-change">
                                            </div>
                                            @error('password')
                                                <div>
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                <label class="control-label">Repeat new password:</label>
                                                <input type="password" name="password_confirmation" class="form-control" placeholder="Leave empty for no password-change">
                                            </div>
                                        </div>
                                    </div> <!-- /.row -->
                                </div> <!-- /.widget-content -->
                            </div> <!-- /.widget -->
                            @if(auth()->user()->can('update permission'))
                            <div class="widget">
                                <div class="widget-header">
                                    <h4>Permissions and Roles</h4>
                                </div>
                                <div class="widget-content">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-2">
                                            <strong class="subtitle padding-top-10px">Permissions</strong>
                                        </div>

                                            <div class="form-group">
                                                <label class="control-label" for="input18">Select that applies</label>
                                                    <select class="col-md-10" multiple size="5" name="permissions[]" id="input18" class="select2-select-00 col-md-12 full-width-fix">
                                                        <option value="">None</option>
                                                        @foreach($permissions as $permission)
                                                            <option value="{{$permission->name}}" {{auth()->user()->can($permission->name)?'selected':''}}>{{$permission->name}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                    </div> <!-- /.row -->
                                </div> <!-- /.widget-content -->
                            </div> <!-- /.widget -->
                            @endif
                            <div class="form-actions">
                                <input type="submit" value="Update" class="btn btn-primary pull-right">
                            </div>
                        </div> <!-- /.col-md-12 -->

                    </form>
                </div>
                <!-- /Edit Account -->
            </div> <!-- /.tab-content -->
        </div>
        <!--END TABS-->
    </div>
</div> <!-- /.row -->

<script>
    var $toggle=document.getElementById("user-mobile");
    document.getElementById("user-mobile-edit").onclick = function fun()
    {
        if($toggle.disabled)
            $toggle.disabled=false;
        else
            $toggle.disabled=true;
    }
</script>
@endsection
