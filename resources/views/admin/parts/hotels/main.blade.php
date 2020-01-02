@extends('layouts.admin')
@section('dashboard')
@include('admin.parts.hotels.menu')
<div class="row">
    <!--=== Invoice ===-->
    <div class="col-md-12">
        <div class="widget invoice">
            <div class="widget-header" style="widht:100%;padding-top: 10px;">
                <div class="text-center">
                    <img src="{{$hotel->logo_url}}" alt="{{$hotel->name}}" class="img-responsive align-center hotel-logo">
                    <h2>{{$hotel->name}}</h2>
                </div>
            </div>
        </div> <!-- /.widget box -->
    </div> <!-- /.col-md-12 -->
    @yield('hotelsection')
</div>
@endsection
