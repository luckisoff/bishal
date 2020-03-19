@extends('layouts.admin')
@section('dashboard')

     <!--=== Page Header ===-->
                <div class="page-header">
                    <div class="page-title">
                        <h3>Dashboard</h3>
                        <span>Good {{\App\Helpers\Helper::wish()}}, {{ucfirst(auth()->user()->name)}}</span>
                    </div>
                </div>
                <div class="row row-bg"> <!-- .row-bg -->
                    <div class="col-sm-6 col-md-4">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content">
                                <div class="visual cyan">
                                    <div class="statbox-sparkline">30,20,15,30,22,25,26,30,27</div>
                                </div>
                                <div class="title">New Orders</div>
                                <div class="value">{{$dashboard->newOrders()}}</div>
                                <a class="more" href="{{route('dashboard.orders')}}">View More <i class="pull-right icon-angle-right"></i></a>
                            </div>
                        </div> <!-- /.smallstat -->
                    </div> <!-- /.col-md-3 -->

                    <div class="col-sm-6 col-md-4">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content">
                                <div class="visual green">
                                    <div class="statbox-sparkline">20,30,30,29,22,15,20,30,32</div>
                                </div>
                                <div class="title">Confirmed Orders</div>
                                <div class="value">{{$dashboard->confirmedOrders()}}</div>
                                <a class="more" href="{{route('dashboard.orders.confirm')}}">View More <i class="pull-right icon-angle-right"></i></a>
                            </div>
                        </div> <!-- /.smallstat -->
                    </div> <!-- /.col-md-3 -->

                    <div class="col-sm-6 col-md-4 hidden-xs">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content">
                                <div class="visual blue">
                                    <div class="statbox-sparkline">20,30,30,29,22,15,20,30,32</div>
                                </div>
                                <div class="title">Invoiced Orders</div>
                                <div class="value">{{$dashboard->invoicedOrders()}}</div>
                                <a class="more" href="{{route('dashboard.orders.invoiced')}}">View More <i class="pull-right icon-angle-right"></i></a>
                            </div>
                        </div> <!-- /.smallstat -->
                    </div> <!-- /.col-md-3 -->

                    <!-- <div class="col-sm-6 col-md-3 hidden-xs">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content">
                                <div class="visual red">
                                    <i class="icon-user"></i>
                                </div>
                                <div class="title">Visitors</div>
                                <div class="value">2 521 719</div>
                                <a class="more" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
                            </div>
                        </div>
                    </div>  -->
                </div> <!-- /.row -->
        <!--=== Blue Chart ===-->
        <div class="row">
            <div class="col-md-12">
                <div class="widget box">
                    <div class="widget-header">
                        <h4><i class="icon-reorder"></i> Insights</h4>
                        <div class="toolbar no-padding">
                            <div class="btn-group">
                                <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="widget-content">
                        <div id="chart_filled_blue" class="chart"></div>
                    </div> -->
                    <!-- <div class="divider"></div> -->
                    <div class="widget-content">
                        <ul class="stats"> <!-- .no-dividers -->
                            <li>
                                <strong>{{$dashboard->totalUsers()}}</strong>
                                <small>Total Users</small>
                            </li>
                            <li class="light hidden-xs">
                                <strong>{{$dashboard->posts()->count()}}</strong>
                                <small>Total Posts</small>
                            </li>
                            <li>
                                <strong>{{$dashboard->totalHotels()}}</strong>
                                <small>Total Hotels</small>
                            </li>
                            <li class="light hidden-xs">
                                <strong>{{$dashboard->totalCategory()}}</strong>
                                <small>Categories</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
        <!-- /Blue Chart -->

        <div class="row">

            <!--=== Static Table ===-->
            <div class="col-md-6">
                <div class="widget box">
                    <div class="widget-header">
                        <h4><i class="icon-reorder"></i> New Users</h4>
                        <div class="toolbar no-padding">
                            <div class="btn-group">
                                <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content no-padding">
                        <table class="table table-striped table-checkable table-hover">
                            <thead>
                                <tr>
                                    <th class="checkbox-column">
                                        <input type="checkbox" class="uniform">
                                    </th>
                                    <th class="hidden-xs">Full Name</th>
                                    <th>Mobile No.</th>
                                    <th>Address</th>
                                    <th class="align-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dashboard->newUsers() as $user)
                                    <tr>
                                        <td class="checkbox-column">
                                            <input type="checkbox" class="uniform">
                                        </td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->mobile}}</td>
                                        <td>{{$user->address}}</td>
                                        <td>{{$user->created_at->diffForHumans()}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <!-- <div class="table-footer">
                                <div class="col-md-12">
                                    <div class="table-actions">
                                        <label>Apply action:</label>
                                        <select class="select2" data-minimum-results-for-search="-1" data-placeholder="Select action...">
                                            <option value=""></option>
                                            <option value="Edit">Edit</option>
                                            <option value="Delete">Delete</option>
                                            <option value="Move">Move</option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->
                            <!-- /.table-footer -->
                        </div> <!-- /.row -->
                    </div> <!-- /.widget-content -->
                </div> <!-- /.widget -->
            </div> <!-- /.col-md-6 -->

            <div class="col-md-6">
                    <div class="widget box">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Recent Users</h4>
                            <div class="toolbar no-padding">
                                <div class="btn-group">
                                    <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content no-padding">
                            <table class="table table-striped table-checkable table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column">
                                            <input type="checkbox" class="uniform">
                                        </th>
                                        <th class="hidden-xs">Full Name</th>
                                        <th>Mobile No.</th>
                                        <th>Image</th>
                                        <th class="align-center">Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dashboard->recentUsers() as $user)
                                        <tr>
                                            <td class="checkbox-column">
                                                <input type="checkbox" class="uniform">
                                            </td>
                                            <td>
                                                <span class="icon-circle" style="color:{{$user->online()?'green':''}}"></span>
                                                {{$user->name}}
                                            </td>
                                            <td>{{$user->mobile}}</td>
                                            <td>
                                                @if($user->image_url)
                                                    <img src="{{$user->image_url}}" alt="{{$user->name}}" style="width:50px">
                                                @else
                                                    <img src="https://via.placeholder.com/150" alt="{{$user->name}}" style="width:50px">
                                                @endif
                                            </td>
                                            <td>
                                                {{$user->updated_at->diffForHumans()}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <!-- <div class="table-footer">
                                    <div class="col-md-12">
                                        <div class="table-actions">
                                            <label>Apply action:</label>
                                            <select class="select2" data-minimum-results-for-search="-1" data-placeholder="Select action...">
                                                <option value=""></option>
                                                <option value="Edit">Edit</option>
                                                <option value="Delete">Delete</option>
                                                <option value="Move">Move</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- /.table-footer -->
                            </div> <!-- /.row -->
                        </div> <!-- /.widget-content -->
                    </div> <!-- /.widget -->
                </div> <!-- /.col-md-6 -->
            </div>


            <div class="col-md-6">
                <div class="widget">
                    <div class="widget-header">
                        <h4><i class="icon-reorder"></i> Feeds</h4>
                        <div class="toolbar no-padding">
                            <div class="btn-group">
                                <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                                <span class="btn btn-xs widget-refresh"><i class="icon-refresh"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content">
                        <div class="tabbable tabbable-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_feed_1" data-toggle="tab">Posts</a></li>
                                <li><a href="#tab_feed_2" data-toggle="tab">Activities</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_feed_1">
                                    <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible="0">
                                        <ul class="feeds clearfix">
                                            @foreach($dashboard->posts() as $post)
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                                @if($post->user->image_url)
                                                                    <img src="{{$post->user->image_url}}" alt="{{$post->user->name}}" style="width:30px">
                                                                @else
                                                                    <img src="https://via.placeholder.com/150" alt="{{$user->name}}" style="width:30px">
                                                                @endif
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">{{$post->title}}</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">
                                                        {{$post->created_at->diffForHumans()}}
                                                    </div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            @endforeach
                                        </ul> <!-- /.feeds -->
                                    </div> <!-- /.scroller -->
                                </div> <!-- /#tab_feed_1 -->

                                <div class="tab-pane" id="tab_feed_2">
                                    <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible="0">
                                        <ul class="feeds clearfix">
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-success"><i class="icon-plus"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">New user registered.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">1 min ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-success"><i class="icon-plus"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">New user registered.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">5 mins ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-info"><i class="icon-plus"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">New order received.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">10 mins ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-success"><i class="icon-plus"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">New user registered.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">20 mins ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-info"><i class="icon-plus"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">New order received.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">30 mins ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-success"><i class="icon-plus"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">New user registered.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">40 mins ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-info"><i class="icon-plus"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">New order received.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">50 mins ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-success"><i class="icon-plus"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">New user registered.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">1 hour ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-info"><i class="icon-plus"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">New order received.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">1.5 hours ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                        </ul> <!-- /.feeds -->
                                    </div> <!-- /.scroller -->
                                </div> <!-- /#tab_feed_1 -->
                            </div> <!-- /.tab-content -->
                        </div> <!-- /.tabbable tabbable-custom-->
                    </div> <!-- /.widget-content -->
                </div> <!-- /.widget .box -->
            </div> <!-- /.col-md-6 -->
            <!-- /Static Table -->
        </div> <!-- /.row -->

        <div class="row">

        </div>
        <!-- /Page Content -->
@endsection
