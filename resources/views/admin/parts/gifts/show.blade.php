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
                <li class="active"><a href="#tab_edit_account" data-toggle="tab">Gift Detail</a></li>
            </ul>
            <div class="tab-content row">
                <!--=== Edit Account ===-->
                <div class="tab-pane active" id="tab_edit_account">
                    <div class="detail">
                        <h3>{{$gift->name}}</h3>
                        <a href="{{route('dashboard.gift.edit',$gift)}}" class="label label-default">Edit</a>
                        <hr>
                        <span class="label label-success">Price: Rs. {{$gift->price.' ( Old: Rs.'.$gift->oldprice.')'}}</span>
                        <span class="label label-info">Height: {{$gift->height}}</span>
                        <span class="label label-warning">Available: {{$gift->available==1?'Yes':'No'}}</span>
                        <hr>
                        <p>{{$gift->description}}</p>
                        <hr>
                        <span class="label label-info">Cover Image</span>
                        <hr>
                        <img src="{{$gift->cover_img}}" alt="{{$gift->name}}" style="height:160px">
                        <hr>
                        <span class="label label-info">Collection Images</span>
                        <hr>
                        @foreach($gift->collections as $key=>$image)
                        <img src="{{$image}}" alt="{{$gift->name.'-collection-'.$key}}" style="height:160px">
                        @endforeach
                        <hr>
                    </div>
                </div>
                <!-- /Edit Account -->
            </div> <!-- /.tab-content -->
        </div>
        <!--END TABS-->
    </div>
</div> <!-- /.row -->
@endsection