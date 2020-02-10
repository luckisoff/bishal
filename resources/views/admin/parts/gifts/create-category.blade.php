@extends('layouts.admin')
@section('dashboard')
<div class="row">
    <div class="col-md-12">
        <!-- Tabs-->
        <div class="tabbable tabbable-custom tabbable-full-width">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_edit_account" data-toggle="tab">Create Category</a></li>
            </ul>
            <div class="tab-content row">
                <!--=== Edit Account ===-->
                <div class="tab-pane active" id="tab_edit_account">
                    <form class="form-horizontal" action="{{route('dashboard.category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Category name *: </label>
                                                <div class="input-group col-md-8">
                                                <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Name of the category">
                                                @error('name')
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
                            <input type="submit" value="Create" class="btn btn-primary pull-right">
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
