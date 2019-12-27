@extends('layouts.admin')
@section('dashboard')
<div class="row">
    <!--=== Invoice ===-->
    <div class="col-md-12">
        <div class="widget invoice">
            <div class="widget-header">
                <div class="pull-left">
                    <h2>{{'Post by '.$post->user->name}}</h2>
                </div>
                <div class="pull-right">
                    <p class="invoice-nr"><strong>{{$post->created_at->diffForHumans()}}</strong></h3></p>
                    <p class="invoice-date">{{$post->created_at->format('d M Y')}}</p>
                </div>
            </div>
            <div class="widget-content">
                <div class="row">
                    <!--=== Adresses ===-->
                    <div class="col-md-6">
                        <p>{{$post->title}}</p>

                        {{-- <address>
                            <strong>Twitter, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address> --}}
                    </div>
                    <div class="col-md-6 align-right">
                        {{-- <h3>Client Information</h3>

                        <address>
                            <strong>John Doe</strong><br>
                            1111 N. Sample<br>
                            Mt. Prospect, IL 60000<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address> --}}
                    </div>
                    <!-- /Adresses -->

                    <!--=== Table ===-->
                    <!-- /Table -->
                </div>


                {{-- <div class="row padding-top-10px">
                    <div class="col-md-6">
                        <div class="well">
                            <p><strong>Notes: </strong> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                    </div>

                    <div class="col-md-6 align-right">
                        <ul class="list-unstyled amount padding-bottom-5px">
                            <li><strong>Subtotal:</strong> $11,069</li>
                            <li><strong>Delivery:</strong> $5</li>
                            <li><strong>VAT (10%):</strong> $1107.40</li>
                            <li class="total"><strong>Total:</strong> $12,181.40</li>
                        </ul>

                        <div class="buttons">
                            <a class="btn btn-default btn-lg" href="javascript:void(0);" onclick="javascript:window.print();"><i class="icon-print"></i> Print</a>
                            <a class="btn btn-success btn-lg" href="javascript:void(0);">Proceed to Payment <i class="icon-angle-right"></i></a>
                        </div>
                    </div>
                </div> <!-- /.row --> --}}
            </div>
        </div> <!-- /.widget box -->
    </div> <!-- /.col-md-12 -->
    <div class="col-md-12">
        <div class="widget invoice">
            <div class="widget-header">
                <div class="pull-left">
                    <h2 class="text-left">Images</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        @foreach($post->image_url as $image)
            <img class="post-img img-responsive" src="{{$image}}" alt="{{$post->title}}">
        @endforeach
    </div>
    <!-- /Invoice -->
</div> <!-- /.row -->
@endsection
