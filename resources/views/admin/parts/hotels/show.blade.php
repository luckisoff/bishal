@extends('admin.parts.hotels.main')
@section('hotelsection')
<div class="col-md-12">
    <div class="widget invoice">
        <div class="widget-content">
            <div class="row">
                <!--=== Adresses ===-->
                <div class="col-md-6">
                    <p>{{$hotel->description}}</p>

                    <address>
                        <strong>{{$hotel->name}}</strong><br>
                        {{$hotel->addressLocation->name}}<br>
                        {{$hotel->address}}<br>
                        <abbr title="Phone">P:</abbr> {{$hotel->phone}}
                    </address>
                </div>
                <div class="col-md-6 align-right">
                </div>
                <!-- /Adresses -->

                <!--=== Table ===-->
                <!-- /Table -->
            </div>

        </div>
    </div> <!-- /.widget box -->
</div> <!-- /.col-md-12 -->
@endsection
