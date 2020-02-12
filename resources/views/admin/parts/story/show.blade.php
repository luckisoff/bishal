@extends('layouts.admin')
@section('styles')
<style>
    .detail{
        padding: 0px 0px 0px 30px;
    }
</style>
@endsection
@section('dashboard')
<div class="row">
    <div class="col-md-12">
        <!-- Tabs-->
        <div class="tabbable tabbable-custom tabbable-full-width">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_edit_account" data-toggle="tab">Story Detail</a></li>
            </ul>
            <div class="tab-content row">
                <!--=== Edit Account ===-->
                <div class="tab-pane active" id="tab_edit_account">
                    <div class="detail">
                        <h3>{{$story->name}}</h3>
                        <hr>
                        <span class="label label-info">Cover Image</span><br><br>
                        <img src="{{$story->cover_img}}" alt="{{$story->name}}" style="height:160px">
                        <hr>
                        <span class="label label-info">Collection Images</span><br><br>
                        @foreach($story->images as $key=>$image)
                        <img src="{{$image}}" alt="{{$story->name.'-collection-'.$key}}" style="height:160px">
                        @endforeach
                    </div>
                </div>
                <!-- /Edit Account -->
            </div> <!-- /.tab-content -->
        </div>
        <!--END TABS-->
    </div>
</div> <!-- /.row -->
@endsection