@extends('layouts.admin')
@section('styles')
<style>
    #add-field,#cut-field
    {
        position: relative;
        right: -377px;
        top: -34px;
        height: 33px;
    }
</style>
@endsection
@section('dashboard')
<div class="row">
    <div class="col-md-12">
        <!-- Tabs-->
        <div class="tabbable tabbable-custom tabbable-full-width">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_edit_account" data-toggle="tab">Add Story</a></li>
            </ul>
            <div class="tab-content row">
                <!--=== Edit Account ===-->
                <div class="tab-pane active" id="tab_edit_account">
                    <form class="form-horizontal" action="{{route('dashboard.story.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Story Name *: </label>
                                                <div class="input-group col-md-8">
                                                    <input name="name" id="name" class="form-control" value="{{old('name')}}" placeholder="Name of the item">
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

                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Cover Image *:</label>
                                                <div class="col-md-8">
                                                    <input type="file" name="cover_img" class="form-control">
                                                    @error('cover-img')
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
                                                <label class="col-md-4 control-label">Images (max:5):</label>
                                                <div class="col-md-8">
                                                <div id="images">
                                                    <div class="cut-field">
                                                        <input type="file" name="images[]" class="form-control">
                                                        <span id="add-field" class="btn btn-success glyphicon glyphicon-plus"></span>
                                                    </div>
                                                </div>
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
@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $("#add-field").click(function(){
            $("#images").append(
                `
                <div class="cut-field">
                    <input type="file" name="images[]" class="form-control">
                    <span id="cut-field" class="btn btn-success glyphicon glyphicon-minus"></span>
                </div>
                `
            );
            addToggle();
        });

        $("#images").on('click','#cut-field',function(){
            $(this).parent('div').remove();
            addToggle();
        });

        function addToggle()
        {
            if($("#images > div").length>=5)
                $("#add-field").hide();
            else
                $("#add-field").show();
        }
    });
</script>
@endsection