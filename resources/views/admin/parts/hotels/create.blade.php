@extends('layouts.admin')
@section('dashboard')
<div class="row">
    <div class="col-md-12">
        <!-- Tabs-->
        <div class="tabbable tabbable-custom tabbable-full-width">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_edit_account" data-toggle="tab">{{$edit?'Edit':'Create'}} Hotel</a></li>
            </ul>
            <div class="tab-content row">
                <!--=== Edit Account ===-->
                <div class="tab-pane active" id="tab_edit_account">
                    <form class="form-horizontal" action="{{route('dashboard.hotel.store',$edit?$hotel:'')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="widget">
                                {{-- <div class="widget-header">
                                    <h4>General Information</h4>
                                </div> --}}
                                <div class="widget-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Name *:</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="name" class="form-control" value="{{$edit?$hotel->name:''}}">
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
                                                <label class="col-md-4 control-label">Location *:
                                                    (<a data-toggle="modal" href="#addLocation" > <i class="icon-location-arrow"></i>New</a>)
                                                </label>
                                                <div class="col-md-8">
                                                    <select name="location" id="location" class="form-control">
                                                    </select>
                                                    @error('location')
                                                        <div style="margin-top: 10px;">
                                                            <span class="invalid-feedback alert-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Open Hours *:</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="open_time" class="form-control" value="{{$edit?$hotel->open_time:''}}">
                                                    @error('open_time')
                                                        <div style="margin-top: 10px;">
                                                            <span class="invalid-feedback alert-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Phone *: </label>
                                                <div class="input-group col-md-8">
                                                    <input id="phone" type="text" name="phone" class="form-control" value="{{$edit?$hotel->phone:''}}">
                                                    @error('phone')
                                                        <div style="margin-top: 10px;">
                                                            <span class="invalid-feedback alert-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Address *:</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="address" class="form-control" value="{{$edit?$hotel->address:''}}">
                                                    @error('address')
                                                        <div style="margin-top: 10px;">
                                                            <span class="invalid-feedback alert-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Website *:</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="website" class="form-control" value="{{$edit?$hotel->website:''}}">
                                                    @error('website')
                                                        <div style="margin-top: 10px;">
                                                            <span class="invalid-feedback alert-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Description *: </label>
                                                <div class="input-group col-md-8">
                                                <textarea name="description" id="description" class="form-control">{{$edit?$hotel->description:''}}</textarea>
                                                @error('description')
                                                    <div style="margin-top: 10px;">
                                                        <span class="invalid-feedback alert-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    </div>
                                                @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Business Logo:</label>
                                                <div class="col-md-8">
                                                    <input type="file" name="logo" class="form-control">
                                                    @if($edit)
                                                        <img style="height:35px;margin:10px" src="{{$hotel->logo_url}}" alt="{{$hotel->name}}">
                                                    @endif
                                                    @error('logo')
                                                        <div style="margin-top: 10px;">
                                                            <span class="invalid-feedback alert-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div> <!-- /.row -->
                                </div> <!-- /.widget-content -->
                            </div> <!-- /.widget -->
                            <div class="form-actions">
                                <input type="submit" value="{{$edit?'Update':'Create'}}" class="btn btn-primary pull-right">
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
<div class="modal fade" id="addLocation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Location</h4>
            </div>
            <div class="modal-body">
                <form id="addLocationForm">
                    <div class="form-group">
                        <label for="hotel name">Location Name *</label>
                        <input type="text" id="locationName" name="locationname" placeholder="Enter business location" class="form-control" required>
                        <span style="font-size:10px">(eg.New Baneshwor)</span>
                    </div>
                    <span id="locProcess" style="display:none">Processing...</span>
                </div>
                {{-- <div class="table table-bordered">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>New Baneshwor</td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-dismiss="" id="locSubmit">Add</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    addOption();
    $(document).ready(function(){
        $('#addLocationForm').on('submit',function(event) {
            event.preventDefault();
            $('#locProcess').show();
            var name = $('#locationName').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN':'{{csrf_token()}}'
                }
            });
            $.ajax({
                type: "POST",
                url: '{{route("dashboard.address.store")}}',
                data: {name:name},
                success: function( msg ) {
                    addOption();
                    $('#addLocation').modal('hide');
                    $('#locProcess').hide();
                    $('#locationName').val('');
                },
                error:function(error){
                    $('#addLocation').modal('hide');
                    $('#locProcess').hide();
                    alert('Something went wrong! Try again')
                }
            });
        });
    });

    function addOption()
    {
        $.ajax({
                type: "GET",
                url: '{{route("dashboard.address.get")}}',
                success: function(data) {
                    $('#location').empty();
                    $('#location').append(`<option value="">Select Location</option>`);

                    $.each(data.locations,function(index,location){
                        $('#location')
                        .append(`<option value="${location.id}" @if($edit) {{$hotel->location=='${location.id}'?'selected':''}} @endif>${location.name}</option>`);
                    });
                },
                error:function(error){
                    console.log(error);
                }
            });
    }
</script>
@endsection
