<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Dashboard | Melon - Flat &amp; Responsive Admin Template</title>

	<!--=== CSS ===-->

	<!-- Bootstrap -->
	<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

	<!-- jQuery UI -->
	<!--<link href="plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
	<![endif]-->

	<!-- Theme -->
	<link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="{{asset('assets/css/fontawesome/font-awesome.min.css')}}">
	{{-- <link rel="stylesheet" href="{{asset('assets/css/simple-sidebar.css')}}"> --}}
	<!--[if IE 7]>
		<link rel="stylesheet" href="{{asset('assets/css/fontawesome/font-awesome-ie7.min.css')}}">
	<![endif]-->

	<!--[if IE 8]>
		<link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>


	@yield('styles')

    <script type="text/javascript" src="{{asset('assets/js/libs/jquery-1.10.2.min.js')}}"></script>

</head>

<body>
	<!-- Header -->
	<header class="header navbar navbar-fixed-top" role="banner">
		<!-- Top Navigation Bar -->
		<div class="container">

			<!-- Only visible on smartphones, menu toggle -->
			<ul class="nav navbar-nav">
				<li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
			</ul>

			<!-- Logo -->
			<a class="navbar-brand" href="index.html">
				<img src="{{asset('assets/img/logo.png')}}" alt="logo" />
				<strong>ME</strong>LON
			</a>
			<!-- /logo -->

			<!-- Sidebar Toggler -->
			<a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
				<i class="icon-reorder"></i>
			</a>
			<!-- /Sidebar Toggler -->

			<!-- Top Left Menu -->
			<ul class="nav navbar-nav navbar-left hidden-xs hidden-sm">
				<li>
					<a href="#">
						Dashboard
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Dropdown
						<i class="icon-caret-down small"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="icon-user"></i> Example #1</a></li>
						<li><a href="#"><i class="icon-calendar"></i> Example #2</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-tasks"></i> Example #3</a></li>
					</ul>
				</li>
			</ul>
			<!-- /Top Left Menu -->

			<!-- Top Right Menu -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Notifications -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-warning-sign"></i>
						<span class="badge">5</span>
					</a>
					<ul class="dropdown-menu extended notification">
						<li class="title">
							<p>You have 5 new notifications</p>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-success"><i class="icon-plus"></i></span>
								<span class="message">New user registration.</span>
								<span class="time">1 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-danger"><i class="icon-warning-sign"></i></span>
								<span class="message">High CPU load on cluster #2.</span>
								<span class="time">5 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-success"><i class="icon-plus"></i></span>
								<span class="message">New user registration.</span>
								<span class="time">10 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-info"><i class="icon-bullhorn"></i></span>
								<span class="message">New items are in queue.</span>
								<span class="time">25 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-warning"><i class="icon-bolt"></i></span>
								<span class="message">Disk space to 85% full.</span>
								<span class="time">55 mins</span>
							</a>
						</li>
						<li class="footer">
							<a href="javascript:void(0);">View all notifications</a>
						</li>
					</ul>
				</li>

				<!-- Tasks -->
				<li class="dropdown hidden-xs hidden-sm">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-tasks"></i>
						<span class="badge">7</span>
					</a>
					<ul class="dropdown-menu extended notification">
						<li class="title">
							<p>You have 7 pending tasks</p>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="task">
									<span class="desc">Preparing new release</span>
									<span class="percent">30%</span>
								</span>
								<div class="progress progress-small">
									<div style="width: 30%;" class="progress-bar progress-bar-info"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="task">
									<span class="desc">Change management</span>
									<span class="percent">80%</span>
								</span>
								<div class="progress progress-small progress-striped active">
									<div style="width: 80%;" class="progress-bar progress-bar-danger"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="task">
									<span class="desc">Mobile development</span>
									<span class="percent">60%</span>
								</span>
								<div class="progress progress-small">
									<div style="width: 60%;" class="progress-bar progress-bar-success"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="task">
									<span class="desc">Database migration</span>
									<span class="percent">20%</span>
								</span>
								<div class="progress progress-small">
									<div style="width: 20%;" class="progress-bar progress-bar-warning"></div>
								</div>
							</a>
						</li>
						<li class="footer">
							<a href="javascript:void(0);">View all tasks</a>
						</li>
					</ul>
				</li>

				<!-- Messages -->
				<li class="dropdown hidden-xs hidden-sm">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-envelope"></i>
						<span class="badge">1</span>
					</a>
					<ul class="dropdown-menu extended notification">
						<li class="title">
							<p>You have 3 new messages</p>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="photo"><img src="assets/img/demo/avatar-1.jpg" alt="" /></span>
								<span class="subject">
									<span class="from">Bob Carter</span>
									<span class="time">Just Now</span>
								</span>
								<span class="text">
									Consetetur sadipscing elitr...
								</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="photo"><img src="assets/img/demo/avatar-2.jpg" alt="" /></span>
								<span class="subject">
									<span class="from">Jane Doe</span>
									<span class="time">45 mins</span>
								</span>
								<span class="text">
									Sed diam nonumy...
								</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="photo"><img src="assets/img/demo/avatar-3.jpg" alt="" /></span>
								<span class="subject">
									<span class="from">Patrick Nilson</span>
									<span class="time">6 hours</span>
								</span>
								<span class="text">
									No sea takimata sanctus...
								</span>
							</a>
						</li>
						<li class="footer">
							<a href="javascript:void(0);">View all messages</a>
						</li>
					</ul>
				</li>

				<!-- .row .row-bg Toggler -->
				{{-- <li>
					<a href="#" class="dropdown-toggle row-bg-toggle">
						<i class="icon-resize-vertical"></i>
					</a>
				</li> --}}

				<!-- Project Switcher Button -->
				{{-- <li class="dropdown">
					<a href="#" class="project-switcher-btn dropdown-toggle">
						<i class="icon-folder-open"></i>
						<span>Projects</span>
					</a>
				</li> --}}

				<!-- User Login Dropdown -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img alt="{{auth()->user()->name}}" src="{{auth()->user()->image_url}}" style="height: 20px;border-radius: 50%;width: 20px;"/>
						<span class="username">{{ucfirst(auth()->user()->username)}}</span>
						<i class="icon-caret-down small"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="{{route('dashboard.user.edit',auth()->user())}}"><i class="icon-user"></i> My Profile</a></li>
						<li><a href="pages_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
						<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
						<li class="divider"></li>
                        <li>
                            <a href="{{ route('dashboard.logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="icon-key">
                                </i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('dashboard.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
					</ul>
				</li>
				<!-- /user login dropdown -->
			</ul>
			<!-- /Top Right Menu -->
		</div>
		<!-- /top navigation bar -->

		<!--=== Project Switcher ===-->
		<div id="project-switcher" class="container project-switcher">
			<div id="scrollbar">
				<div class="handle"></div>
			</div>

			<div id="frame">
				<ul class="project-list">
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-desktop"></i></span>
							<span class="title">Lorem ipsum dolor</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-compass"></i></span>
							<span class="title">Dolor sit invidunt</span>
						</a>
					</li>
					<li class="current">
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-male"></i></span>
							<span class="title">Consetetur sadipscing elitr</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-thumbs-up"></i></span>
							<span class="title">Sed diam nonumy</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-female"></i></span>
							<span class="title">At vero eos et</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-beaker"></i></span>
							<span class="title">Sed diam voluptua</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-desktop"></i></span>
							<span class="title">Lorem ipsum dolor</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-compass"></i></span>
							<span class="title">Dolor sit invidunt</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-male"></i></span>
							<span class="title">Consetetur sadipscing elitr</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-thumbs-up"></i></span>
							<span class="title">Sed diam nonumy</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-female"></i></span>
							<span class="title">At vero eos et</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-beaker"></i></span>
							<span class="title">Sed diam voluptua</span>
						</a>
					</li>
				</ul>
			</div> <!-- /#frame -->
		</div> <!-- /#project-switcher -->
	</header> <!-- /.header -->

	<div id="container" class="sidebar-closed">
        @include('admin.partials.navbar')
        <div id="content">
            <div class="container">
                <!-- Breadcrumbs line -->
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="{{route('dashboard')}}">Dashboard</a>
                        </li>
                        <li class="current">
                            <a href="pages_calendar.html" title="">Calendar</a>
                        </li>
                    </ul>

                    <ul class="crumb-buttons">
                        <li><a href="charts.html" title=""><i class="icon-signal"></i><span>Statistics</span></a></li>
                        <li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="icon-tasks"></i><span>Users <strong>(+3)</strong></span><i class="icon-angle-down left-padding"></i></a>
                            <ul class="dropdown-menu pull-right">
                            <li><a href="form_components.html" title=""><i class="icon-plus"></i>Add new User</a></li>
                            <li><a href="tables_dynamic.html" title=""><i class="icon-reorder"></i>Overview</a></li>
                            </ul>
                        </li>
                        <li class="range"><a href="#">
                            <i class="icon-calendar"></i>
                            <span></span>
                            <i class="icon-angle-down"></i>
                        </a></li>
                    </ul>
                </div>
                <!-- /Breadcrumbs line -->

                <!--=== Page Header ===-->
                <div class="page-header">
                    <div class="page-title">
                        <h3>Dashboard</h3>
                        <span>Good {{\App\Helpers\Helper::wish()}}, {{ucfirst(auth()->user()->name)}}</span>
                    </div>

                    <!-- Page Stats -->
                    {{-- <ul class="page-stats">
                        <li>
                            <div class="summary">
                                <span>New orders</span>
                                <h3>17,561</h3>
                            </div>
                            <div id="sparkline-bar" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
                            <!-- Use instead of sparkline e.g. this:
                            <div class="graph circular-chart" data-percent="73">73%</div>
                            -->
                        </li>
                        <li>
                            <div class="summary">
                                <span>My balance</span>
                                <h3>$21,561.21</h3>
                            </div>
                            <div id="sparkline-bar2" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
                        </li>
                    </ul> --}}
                    <!-- /Page Stats -->
                </div>
                @if(session()->exists('success')||session()->get('errors'))
                    <div class="alert alert-{{session()->exists('success')?'success':'danger'}} fade in">
                        <i class="icon-remove close" data-dismiss="alert"></i>
                        <strong>{{session()->exists('success')?session()->get('success'):$errors->error->first()}}</strong>
                    </div>
                @endif
                <!-- /Page Header -->

                <!--=== Page Content ===-->
                <!--=== Statboxes ===-->
                {{-- <div class="row row-bg"> <!-- .row-bg -->
                    <div class="col-sm-6 col-md-3">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content">
                                <div class="visual cyan">
                                    <div class="statbox-sparkline">30,20,15,30,22,25,26,30,27</div>
                                </div>
                                <div class="title">Clients</div>
                                <div class="value">4 501</div>
                                <a class="more" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
                            </div>
                        </div> <!-- /.smallstat -->
                    </div> <!-- /.col-md-3 -->

                    <div class="col-sm-6 col-md-3">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content">
                                <div class="visual green">
                                    <div class="statbox-sparkline">20,30,30,29,22,15,20,30,32</div>
                                </div>
                                <div class="title">Feedbacks</div>
                                <div class="value">714</div>
                                <a class="more" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
                            </div>
                        </div> <!-- /.smallstat -->
                    </div> <!-- /.col-md-3 -->

                    <div class="col-sm-6 col-md-3 hidden-xs">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content">
                                <div class="visual yellow">
                                    <i class="icon-dollar"></i>
                                </div>
                                <div class="title">Total Profit</div>
                                <div class="value">$42,512.61</div>
                                <a class="more" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
                            </div>
                        </div> <!-- /.smallstat -->
                    </div> <!-- /.col-md-3 -->

                    <div class="col-sm-6 col-md-3 hidden-xs">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content">
                                <div class="visual red">
                                    <i class="icon-user"></i>
                                </div>
                                <div class="title">Visitors</div>
                                <div class="value">2 521 719</div>
                                <a class="more" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
                            </div>
                        </div> <!-- /.smallstat -->
                    </div> <!-- /.col-md-3 -->
                </div> <!-- /.row --> --}}
                <!-- /Statboxes -->
                @yield('dashboard')
            </div>
        </div>
    </div>
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->
    <!--=== JavaScript ===-->

    <script type="text/javascript" src="{{asset('plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/libs/lodash.compat.min.js')}}"></script>
	<!-- Smartphone Touch Events -->
	<script type="text/javascript" src="{{asset('plugins/touchpunch/jquery.ui.touch-punch.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/event.swipe/jquery.event.move.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/event.swipe/jquery.event.swipe.js')}}"></script>

	@yield('scripts')
	<!-- General -->
	<script type="text/javascript" src="{{asset('assets/js/libs/breakpoints.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/respond/respond.min.js')}}"></script> <!-- Polyfill for min/max-width CSS3 Media Queries (only for IE8) -->
	<script type="text/javascript" src="{{asset('plugins/cookie/jquery.cookie.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/slimscroll/jquery.slimscroll.horizontal.min.js')}}"></script>

	<!-- Page specific plugins -->
	<!-- Charts -->
	<!--[if lt IE 9]>
		<script type="text/javascript" src="plugins/flot/excanvas.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/flot/jquery.flot.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/flot/jquery.flot.resize.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/flot/jquery.flot.time.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/flot/jquery.flot.growraf.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('plugins/daterangepicker/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/blockui/jquery.blockUI.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('plugins/fullcalendar/fullcalendar.min.js')}}"></script>

	<!-- Noty -->
	<script type="text/javascript" src="{{asset('plugins/noty/jquery.noty.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/noty/promise.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/noty/layouts/top.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/noty/themes/default.js')}}"></script>

	<!-- Forms -->
	<script type="text/javascript" src="{{asset('plugins/uniform/jquery.uniform.min.js')}}"></script> <!-- Styled radio and checkboxes -->
	<script type="text/javascript" src="{{asset('plugins/select2/select2.min.js')}}"></script> <!-- Styled select boxes -->
	<script type="text/javascript" src="{{asset('plugins/fileinput/fileinput.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/bootstrap-multiselect/bootstrap-multiselect.min.js')}}"></script>

	<!-- App -->
	<script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/plugins.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/plugins.form-components.js')}}"></script>

    <!-- DataTables -->
	<script type="text/javascript" src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/datatables/DT_bootstrap.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/datatables/responsive/datatables.responsive.js')}}"></script> <!-- optional -->
	<script>
	$(document).ready(function(){
		"use strict";

		App.init(); // Init layout and core plugins
		Plugins.init(); // Init all plugins
		FormComponents.init(); // Init all form-specific plugins
    });
	</script>

	<!-- Demo JS -->
    <script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/demo/form_components.js')}}"></script>

	<script type="text/javascript" src="{{asset('assets/js/demo/pages_calendar.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/demo/charts/chart_filled_blue.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/demo/charts/chart_simple.js')}}"></script>
	{{-- <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}

</body>
</html>
