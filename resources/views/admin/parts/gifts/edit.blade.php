@extends('layouts.admin')
@section('styles')
<style>
    #add-field,#cut-field
    {
        position: relative;
        right: -371px;
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
                <li class="active"><a href="#tab_edit_account" data-toggle="tab">Edit Gift</a></li>
            </ul>
            <div class="tab-content row">
                <!--=== Edit Account ===-->
                <div class="tab-pane active" id="tab_edit_account">
                    <form class="form-horizontal" action="{{route('dashboard.gift.update',$gift)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Item Name *: </label>
                                                <div class="input-group col-md-8">
                                                    <input name="name" id="name" class="form-control" value="{{$gift?$gift->name:old('name')}}" placeholder="Name of the item">
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
                                                <label class="col-md-4 control-label">Price *: </label>
                                                <div class="input-group col-md-8">
                                                    <input type="number" name="price" id="price" class="form-control" value="{{$gift?$gift->price:old('price')}}" placeholder="Current price of the item">
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
                                                <label class="col-md-4 control-label">Old Price *: </label>
                                                <div class="input-group col-md-8">
                                                    <input type="number" name="oldprice" id="oldprice" class="form-control" value="{{$gift?$gift->oldprice:old('oldprice')}}" placeholder="Old price of the item">
                                                    @error('oldprice')
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
                                                <label class="col-md-4 control-label">Cover Image *:</label>
                                                <div class="col-md-8">
                                                    <input type="file" name="cover_img" class="form-control">
                                                    @if($gift)
                                                    <img src="{{$gift->cover_img}}" alt="{{$gift->name}}" style="width:50px">
                                                    @endif
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
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Height *: </label>
                                                <div class="input-group col-md-8">
                                                    <input type="number" name="height" id="height" class="form-control" value="{{$gift?$gift->height:old('height')}}" placeholder="Height of the pic">
                                                    @error('height')
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
                                                <label class="col-md-4 control-label">Is Available *: </label>
                                                <div class="input-group col-md-8">
                                                    <select name="available" id="available" class="form-control">
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Category *: </label>
                                                <div class="input-group col-md-8">
                                                    <select name="category_id" id="category_id" class="form-control">
                                                        <option value="">Select</option>
                                                        @foreach($categories as $category)
                                                        <option value="{{$category->id}}" {{$gift->category_id==$category->id?'selected':''}}>{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Description *: </label>
                                                <div class="input-group col-md-8">
                                                    <textarea name="description" class="form-control" placeholder="Description of the item">{{$gift?$gift->description:old('description')}}</textarea>
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
                                                <label class="col-md-4 control-label">Highlights *: </label>
                                                <div class="input-group col-md-8">
                                                    <input type="text" name="highlights" id="highlights" class="form-control" value="{{$gift?implode(',',$gift->highlights):old('highlights')}}"  placeholder="Seperated by commas">
                                                    @error('Highlights')
                                                        <div style="margin-top: 10px;">
                                                            <span class="invalid-feedback alert-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        </div>
                                                    @enderror
                                                    <!-- @if($gift && $gift->collections)
                                                        @foreach($gift->collections as $gift)
                                                            <img src="{{$gift}}" alt="" style="width:50px">
                                                        @endforeach
                                                    @endif -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Collections (max:5):</label>
                                                <div class="col-md-8">
                                                <div id="images">
                                                    <div class="cut-field">
                                                        <input type="file" name="collections[]" class="form-control">
                                                        <span id="add-field" class="btn btn-success glyphicon glyphicon-plus"></span>
                                                    </div>
                                                </div>
                                                
                                                    @error('collections')
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