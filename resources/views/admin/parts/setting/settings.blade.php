@extends('layouts.admin')
@section('dashboard')
<div class="row">
    <div class="col-md-12">
        <!-- Tabs-->
        <div class="tabbable tabbable-custom tabbable-full-width">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_edit_account" data-toggle="tab">Site Settings</a></li>
            </ul>
            <div class="tab-content row">
                <!--=== Edit Account ===-->
                <div class="tab-pane active" id="tab_edit_account">
                    <form class="form-horizontal" action="{{route('dashboard.setting.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Site Name *: </label>
                                                <div class="input-group col-md-8">
                                                    <input name="name" id="name" class="form-control" value="{{Site::setting('name')?Site::setting('name'):old('name')}}" placeholder="Site or Company Name">

                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Site Logo:</label>
                                                <div class="col-md-8">
                                                    <input type="file" name="logo" class="form-control">
                                                    @if(Site::setting('logo'))
                                                        <img src="{{Site::setting('logo')}}" alt="{{Site::setting('name')}}" style="width:50px">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Site Icon :</label>
                                                <div class="col-md-8">
                                                <div id="images">
                                                    <div class="cut-field">
                                                        <input type="file" name="icon" class="form-control">
                                                        @if(Site::setting('icon'))
                                                            <img src="{{Site::setting('icon')}}" alt="{{Site::setting('name')}}" style="width:50px">
                                                        @endif
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Firebase Key: </label>
                                                <div class="input-group col-md-8">
                                                    <input name="firebase_key_hotel" id="firebase_key" class="form-control" value="{{Site::setting('firebase_key')?Site::setting('firebase_key'):old('firebase_key')}}" placeholder="Firebase Key">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Firebase Key Hotel: </label>
                                                <div class="input-group col-md-8">
                                                    <input name="firebase_key" id="firebase_key_hotel" class="form-control" value="{{Site::setting('firebase_key_hotel')?Site::setting('firebase_key_hotel'):old('firebase_key_hotel')}}" placeholder="Firebase Key for hotel">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Firebase Url: </label>
                                                <div class="input-group col-md-8">
                                                    <input name="firebase_url" id="firebase_url" class="form-control" value="{{Site::setting('firebase_url')?Site::setting('firebase_url'):old('firebase_url')}}" placeholder="Firebase Url">

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div> <!-- /.widget-content -->
                            </div> <!-- /.widget -->
                            <div class="form-actions">
                                <input type="submit" value="Save" class="btn btn-primary pull-right">
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
@endsection
