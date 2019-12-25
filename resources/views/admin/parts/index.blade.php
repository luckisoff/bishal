@extends('layouts.admin')
@section('dashboard')

        <!--=== Blue Chart ===-->
        <div class="row">
            <div class="col-md-12">
                <div class="widget box">
                    <div class="widget-header">
                        <h4><i class="icon-reorder"></i> Total Clicks (<span class="blue">+29%</span>)</h4>
                        <div class="toolbar no-padding">
                            <div class="btn-group">
                                <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content">
                        <div id="chart_filled_blue" class="chart"></div>
                    </div>
                    <div class="divider"></div>
                    <div class="widget-content">
                        <ul class="stats"> <!-- .no-dividers -->
                            <li>
                                <strong>4,853</strong>
                                <small>Total Views</small>
                            </li>
                            <li class="light hidden-xs">
                                <strong>271</strong>
                                <small>Last 24 Hours</small>
                            </li>
                            <li>
                                <strong>1,025</strong>
                                <small>Unique Users</small>
                            </li>
                            <li class="light hidden-xs">
                                <strong>105</strong>
                                <small>Last 24 Hours</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
        <!-- /Blue Chart -->

        <div class="row">
            <!--=== Sin/Cos Chart ===-->
            <div class="col-md-6">
                <div class="widget box">
                    <div class="widget-header">
                        <h4><i class="icon-reorder"></i> Sine/ Cosine</h4>
                        <div class="toolbar no-padding">
                            <div class="btn-group">
                                <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content">
                        <div id="chart_simple" class="chart" style="height: 219px;"></div>
                    </div>
                </div>
            </div> <!-- /.col-md-6 -->
            <!-- /Sin/Cos Chart -->

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
                                    <th class="hidden-xs">First Name</th>
                                    <th>Last Name</th>
                                    <th>Status</th>
                                    <th class="align-center">Approve</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="checkbox-column">
                                        <input type="checkbox" class="uniform">
                                    </td>
                                    <td class="hidden-xs">Joey</td>
                                    <td>Greyson</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td class="align-center">
                                        <span class="btn-group">
                                            <a href="javascript:void(0);" title="Approve" class="btn btn-xs bs-tooltip"><i class="icon-ok"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox-column">
                                        <input type="checkbox" class="uniform">
                                    </td>
                                    <td class="hidden-xs">Wolf</td>
                                    <td>Bud</td>
                                    <td><span class="label label-info">Pending</span></td>
                                    <td class="align-center">
                                        <span class="btn-group">
                                            <a href="javascript:void(0);" title="Approve" class="btn btn-xs bs-tooltip"><i class="icon-ok"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox-column">
                                        <input type="checkbox" class="uniform">
                                    </td>
                                    <td class="hidden-xs">Darin</td>
                                    <td>Alec</td>
                                    <td><span class="label label-warning">Suspended</span></td>
                                    <td class="align-center">
                                        <span class="btn-group">
                                            <a href="javascript:void(0);" title="Approve" class="btn btn-xs bs-tooltip"><i class="icon-ok"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox-column">
                                        <input type="checkbox" class="uniform">
                                    </td>
                                    <td class="hidden-xs">Andrea</td>
                                    <td>Brenden</td>
                                    <td><span class="label label-danger">Blocked</span></td>
                                    <td class="align-center">
                                        <span class="btn-group">
                                            <a href="javascript:void(0);" title="Approve" class="btn btn-xs bs-tooltip"><i class="icon-ok"></i></a>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="table-footer">
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
                            </div> <!-- /.table-footer -->
                        </div> <!-- /.row -->
                    </div> <!-- /.widget-content -->
                </div> <!-- /.widget -->
            </div> <!-- /.col-md-6 -->
            <!-- /Static Table -->
        </div> <!-- /.row -->

        <div class="row">
            <!--=== Calendar ===-->
            <div class="col-md-6">
                <div class="widget">
                    <div class="widget-header">
                            <h4><i class="icon-calendar"></i> Calendar</h4>
                        </div>
                    <div class="widget-content">
                        <div id="calendar"></div>
                    </div>
                </div> <!-- /.widget box -->
            </div> <!-- /.col-md-6 -->
            <!-- /Calendar -->

            <!--=== Feeds (with Tabs) ===-->
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
                                <li class="active"><a href="#tab_feed_1" data-toggle="tab">System</a></li>
                                <li><a href="#tab_feed_2" data-toggle="tab">Activities</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_feed_1">
                                    <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible="0">
                                        <ul class="feeds clearfix">
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-success">
                                                                <i class="icon-bell"></i>
                                                            </div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">You have 2 puzzles to solve.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
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
                                            <li class="hoverable">
                                                <a href="javascript:void(0);">
                                                    <div class="col1">
                                                        <div class="content">
                                                            <div class="content-col1">
                                                                <div class="label label-info"><i class="icon-bullhorn"></i></div>
                                                            </div>
                                                            <div class="content-col2">
                                                                <div class="desc">New items are in queue.</div>
                                                            </div>
                                                        </div>
                                                    </div> <!-- /.col1 -->
                                                    <div class="col2">
                                                        <div class="date">25 mins ago</div>
                                                    </div> <!-- /.col2 -->
                                                </a>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-danger"><i class="icon-warning-sign"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">High CPU load on cluster #2. <span class="label label-danger label-mini">Fix it <i class="icon-share-alt"></i></span></div>
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
                                                            <div class="label label-warning"><i class="icon-bolt"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">Disk space to 85% full.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">45 mins ago</div>
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
                                                            <div class="label label-default"><i class="icon-time"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">Time successfully synced.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">1.5 hours ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-info"><i class="icon-bullhorn"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">Download finished.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">1.8 hours ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-success"><i class="icon-plus"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">New order received.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">2 hours ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-info"><i class="icon-bullhorn"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">Download finished.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">3 hours ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-success"><i class="icon-plus"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">New order received.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">5 hours ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-info"><i class="icon-bullhorn"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">Download finished.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">5.5 hours ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-success"><i class="icon-plus"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">New order received.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">7 hours ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-info"><i class="icon-bullhorn"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">Download finished.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">16 hours ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="content">
                                                        <div class="content-col1">
                                                            <div class="label label-success"><i class="icon-plus"></i></div>
                                                        </div>
                                                        <div class="content-col2">
                                                            <div class="desc">New order received.</div>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.col1 -->
                                                <div class="col2">
                                                    <div class="date">20 hours ago</div>
                                                </div> <!-- /.col2 -->
                                            </li>
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
            <!-- /Feeds (with Tabs) -->
        </div> <!-- /.row -->
        <!-- /Page Content -->
@endsection
