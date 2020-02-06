@extends('admin.parts.hotels.main')
@section('styles')
<style>
    #item .form-group
    {  
        margin-left:3px;
    }
    #add-field{
        position: relative;
        top: -32px;
        height: 31px;
        right: -93.7%;
    }
    #cut-field{
        position: relative;
        top: -46px;
        height: 31px;
        right: -96.2%;
    }
</style>
@endsection
@section('hotelsection')
<div class="row">
    <div class="col-md-12">
        <!-- Tabs-->
        <div class="tabbable tabbable-custom tabbable-full-width">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_edit_account" data-toggle="tab">Create Package</a></li>
            </ul>
            <div class="tab-content row">
                <!--=== Edit Account ===-->
                <div class="tab-pane active" id="tab_edit_account">
                    <form class="form-horizontal" action="{{route('dashboard.package.store',$hotel)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Package Name *: </label>
                                                <div class="input-group col-md-8">
                                                    <input name="name" id="name" class="form-control">
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Image *:</label>
                                                <div class="col-md-8">
                                                <div id="images">
                                                    <div class="cut-field">
                                                        <input type="file" name="image" class="form-control">
                                                    </div>
                                                </div>
                                                    @error('image')
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
                                                <label class="col-md-4 control-label">Package Price *: </label>
                                                <div class="input-group col-md-8">
                                                    <input name="price" id="price" type="number" class="form-control">
                                                    @error('price')
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
                                                <label class="col-md-4 control-label">Package Type *: </label>
                                                <div class="input-group col-md-8">
                                                    <select name="type" id="type">
                                                        <option value="indoor">Indoor</option>
                                                        <option value="outdoor">Outdoor</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Items</h3>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="items" style="padding:10px">
                                                <div id="item" class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="name">Name *</label>
                                                        <input type="text" name="items[0][name]" class="form-control" placeholder="Name of menu item">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="name">Price *</label>
                                                        <input type="number" name="items[0][price]" class="form-control" placeholder="Price of the item">
                                                        <span id="add-field" class="btn btn-success glyphicon glyphicon-plus"></span>
                                                    </div>
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
        let i=1;
        
        $("#add-field").click(function(){
            let template =
                        `
                            <div id="item" class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name *</label>
                                    <input type="text" name="items[${i}][name]" class="form-control" placeholder="Name of menu item">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="name">Price *</label>
                                    <input type="number" name="items[${i}][price]" class="form-control" placeholder="Price for the item">
                                </div>
                                <span id="cut-field" class="btn btn-success glyphicon glyphicon-minus"></span>
                            </div>
                        `
            $("#items").append(template);
           i++;
        });

        $("#items").on('click','#cut-field',function(){
            $(this).parent('div').remove();
        });
    });
</script>
@endsection