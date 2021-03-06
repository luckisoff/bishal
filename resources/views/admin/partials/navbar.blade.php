@if(!auth()->user()->hasRole('manager'))
<div id="sidebar" class="sidebar-fixed">
    <div id="sidebar-content">

        <!-- Search Input -->
        <!-- <form class="sidebar-search">
            <div class="input-box">
                <button type="submit" class="submit">
                    <i class="icon-search"></i>
                </button>
                <span>
                    <input type="text" placeholder="Search...">
                </span>
            </div>
        </form> -->

        <!-- Search Results -->
        <!-- <div class="sidebar-search-results">

            <i class="icon-remove close"></i>
            <div class="title">
                Documents
            </div>
            <ul class="notifications">
                <li>
                    <a href="javascript:void(0);">
                        <div class="col-left">
                            <span class="label label-info"><i class="icon-file-text"></i></span>
                        </div>
                        <div class="col-right with-margin">
                            <span class="message"><strong>John Doe</strong> received $1.527,32</span>
                            <span class="time">finances.xls</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <div class="col-left">
                            <span class="label label-success"><i class="icon-file-text"></i></span>
                        </div>
                        <div class="col-right with-margin">
                            <span class="message">My name is <strong>John Doe</strong> ...</span>
                            <span class="time">briefing.docx</span>
                        </div>
                    </a>
                </li>
            </ul>

            <div class="title">
                Persons
            </div>
            <ul class="notifications">
                <li>
                    <a href="javascript:void(0);">
                        <div class="col-left">
                            <span class="label label-danger"><i class="icon-female"></i></span>
                        </div>
                        <div class="col-right with-margin">
                            <span class="message">Jane <strong>Doe</strong></span>
                            <span class="time">21 years old</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div> -->
        <!--=== Navigation ===-->
        <ul id="nav">
            <li class="{{Request::url()==route('dashboard')?'current':''}}">
                <a href="{{route('dashboard')}}">
                    <i class="icon-dashboard"></i>
                    Dashboard
                </a>
            </li>
            @if(auth()->user()->can('view user'))
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-group"></i>
                    User Management
                    <!-- <span class="label label-info pull-right">6</span> -->
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('dashboard.users')}}">
                        <i class="icon-angle-right"></i>
                        List Users
                        </a>
                    </li>
                    <!-- <li>
                        <a href="ui_buttons.html">
                        <i class="icon-angle-right"></i>
                        Buttons
                        </a>
                    </li>
                    <li>
                        <a href="ui_tabs_accordions.html">
                        <i class="icon-angle-right"></i>
                        Tabs &amp; Accordions
                        </a>
                    </li>
                    <li>
                        <a href="ui_sliders.html">
                        <i class="icon-angle-right"></i>
                        Sliders
                        </a>
                    </li>
                    <li>
                        <a href="ui_nestable_list.html">
                        <i class="icon-angle-right"></i>
                        Nestable List
                        </a>
                    </li>
                    <li>
                        <a href="ui_typography.html">
                        <i class="icon-angle-right"></i>
                        Typography / Icons
                        </a>
                    </li>
                    <li>
                        <a href="ui_google_maps.html">
                        <i class="icon-angle-right"></i>
                        Google Maps
                        </a>
                    </li>
                    <li>
                        <a href="ui_grid.html">
                        <i class="icon-angle-right"></i>
                        Grid
                        </a>
                    </li> -->
                </ul>
            </li>
            @endif

            @if(auth()->user()->can('view userpost'))
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-file-alt"></i>
                    Post Management
                    <span class="label label-info pull-right"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('dashboard.user.posts')}}">
                        <i class="icon-angle-right"></i>
                        List Post
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            @if(auth()->user()->can('view hotel'))
            <li class="{{Request::url() == route('dashboard.hotels') ? 'current':''}}">
                <a href="{{route('dashboard.hotels')}}">
                    <i class="icon-home"></i>
                    Hotels
                </a>
            </li>
            @endif

            @if(auth()->user()->can('view category'))
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-file-alt"></i>
                    Categories
                    <span class="label label-info pull-right"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('dashboard.categories')}}">
                        <i class="icon-angle-right"></i>
                        List Category
                        </a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.category.create')}}">
                        <i class="icon-angle-right"></i>
                        Create Category
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            @if(auth()->user()->can('view gift'))
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-file-alt"></i>
                   Gifts
                    <span class="label label-info pull-right"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('dashboard.gifts')}}">
                        <i class="icon-angle-right"></i>
                        List Gift
                        </a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.gift.create')}}">
                        <i class="icon-angle-right"></i>
                        Create Gift
                        </a>
                    </li>
                </ul>
            </li>
            @endif

            @if(auth()->user()->can('view story'))
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-file-alt"></i>
                   Stories
                    <span class="label label-info pull-right"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('dashboard.stories')}}">
                        <i class="icon-angle-right"></i>
                        List Stories
                        </a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.story.create')}}">
                        <i class="icon-angle-right"></i>
                        Create Story
                        </a>
                    </li>
                </ul>
            </li>
            @endif

            @if(auth()->user()->can('view card'))
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-file-alt"></i>
                   Cards
                    <span class="label label-info pull-right"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('dashboard.cards')}}">
                        <i class="icon-angle-right"></i>
                        List Cards
                        </a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.card.create')}}">
                        <i class="icon-angle-right"></i>
                        Create Card
                        </a>
                    </li>
                </ul>
            </li>
            @endif



            @if(auth()->user()->can('view news'))
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-file-alt"></i>
                   News
                    <span class="label label-info pull-right"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('dashboard.news')}}">
                        <i class="icon-angle-right"></i>
                        List News
                        </a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.news.create')}}">
                        <i class="icon-angle-right"></i>
                        Create News
                        </a>
                    </li>
                </ul>
            </li>
            @endif

            @if(auth()->user()->can('view event'))
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-file-alt"></i>
                   Events
                    <span class="label label-info pull-right"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('dashboard.event')}}">
                        <i class="icon-angle-right"></i>
                        List Events
                        </a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.event.create')}}">
                        <i class="icon-angle-right"></i>
                        Create Event
                        </a>
                    </li>
                </ul>
            </li>
            @endif

            @if(auth()->user()->can('view houseparty'))
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-file-alt"></i>
                   House Party
                    <span class="label label-info pull-right"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('dashboard.houseparty')}}">
                        <i class="icon-angle-right"></i>
                        List House Party
                        </a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.houseparty.create')}}">
                        <i class="icon-angle-right"></i>
                        Create House Party
                        </a>
                    </li>
                </ul>
            </li>
            @endif

            @if(auth()->user()->can('view foodshop'))
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-file-alt"></i>
                    Food Shop
                    <span class="label label-info pull-right"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('dashboard.foodshop')}}">
                        <i class="icon-angle-right"></i>
                        List Food Shop
                        </a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.foodshop.create')}}">
                        <i class="icon-angle-right"></i>
                        Create Food Shop
                        </a>
                    </li>
                </ul>
            </li>
            @endif

            @if(auth()->user()->can('view allorder'))
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-file-alt"></i>
                   Orders
                    <span class="label label-info pull-right"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('dashboard.orders')}}">
                        <i class="icon-angle-right"></i>
                        List Orders
                        </a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.orders.confirm')}}">
                        <i class="icon-angle-right"></i>
                        Confirmed Orders
                        </a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.orders.invoiced')}}">
                        <i class="icon-angle-right"></i>
                        Invoiced Orders
                        </a>
                    </li>
                </ul>
            </li>
            @endif

            @if(auth()->user()->can('view setting'))
            <li>
                <a href="{{route('dashboard.setting.create')}}">
                    <i class="icon-cog"></i>
                        Settings
                    <span class="label label-info pull-right"></span>
                </a>
            </li>
            @endif

            <!-- <li>
                <a href="javascript:void(0);">
                    <i class="icon-edit"></i>
                    Form Elements
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="form_components.html">
                        <i class="icon-angle-right"></i>
                        Form Components
                        </a>
                    </li>
                    <li>
                        <a href="form_layouts.html">
                        <i class="icon-angle-right"></i>
                        Form Layouts
                        </a>
                    </li>
                    <li>
                        <a href="form_validation.html">
                        <i class="icon-angle-right"></i>
                        Form Validation
                        </a>
                    </li>
                </ul>
            </li> -->
            <!-- <li>
                <a href="javascript:void(0);">
                    <i class="icon-table"></i>
                    Tables
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="tables_static.html">
                        <i class="icon-angle-right"></i>
                        Static Tables
                        </a>
                    </li>
                    <li>
                        <a href="tables_dynamic.html">
                        <i class="icon-angle-right"></i>
                        Dynamic Tables (DataTables)
                        </a>
                    </li>
                    <li>
                        <a href="tables_responsive.html">
                        <i class="icon-angle-right"></i>
                        Responsive Tables
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="charts.html">
                    <i class="icon-bar-chart"></i>
                    Charts &amp; Statistics
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-folder-open-alt"></i>
                    Pages
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="login.html">
                        <i class="icon-angle-right"></i>
                        Login
                        </a>
                    </li>
                    <li>
                        <a href="pages_user_profile.html">
                        <i class="icon-angle-right"></i>
                        User Profile
                        </a>
                    </li>
                    <li>
                        <a href="pages_calendar.html">
                        <i class="icon-angle-right"></i>
                        Calendar
                        </a>
                    </li>
                    <li>
                        <a href="pages_invoice.html">
                        <i class="icon-angle-right"></i>
                        Invoice
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-list-ol"></i>
                    4 Level Menu
                </a>
                <ul class="sub-menu">
                    <li class="open-default">
                        <a href="javascript:void(0);">
                            <i class="icon-cogs"></i>
                            Item 1
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="open-default">
                                <a href="javascript:void(0);">
                                    <i class="icon-user"></i>
                                    Sample Link 1
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="current"><a href="javascript:void(0);"><i class="icon-remove"></i> Sample Link 1</a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-pencil"></i> Sample Link 1</a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-edit"></i> Sample Link 1</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);"><i class="icon-user"></i>  Sample Link 1</a></li>
                            <li><a href="javascript:void(0);"><i class="icon-external-link"></i>  Sample Link 2</a></li>
                            <li><a href="javascript:void(0);"><i class="icon-bell"></i>  Sample Link 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="icon-globe"></i>
                            Item 2
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="javascript:void(0);"><i class="icon-user"></i>  Sample Link 1</a></li>
                            <li><a href="javascript:void(0);"><i class="icon-external-link"></i>  Sample Link 1</a></li>
                            <li><a href="javascript:void(0);"><i class="icon-bell"></i>  Sample Link 1</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="icon-folder-open"></i>
                            Item 3
                        </a>
                    </li>
                </ul>
            </li> -->
        </ul>

        <!-- /Navigation -->
        <!-- <div class="sidebar-title">
            <span>Notifications</span>
        </div>
        <ul class="notifications demo-slide-in">
            <li style="display: none;">
                <div class="col-left">
                    <span class="label label-danger"><i class="icon-warning-sign"></i></span>
                </div>
                <div class="col-right with-margin">
                    <span class="message">Server <strong>#512</strong> crashed.</span>
                    <span class="time">few seconds ago</span>
                </div>
            </li>
            <li style="display: none;">
                <div class="col-left">
                    <span class="label label-info"><i class="icon-envelope"></i></span>
                </div>
                <div class="col-right with-margin">
                    <span class="message"><strong>John</strong> sent you a message</span>
                    <span class="time">few second ago</span>
                </div>
            </li>
            <li>
                <div class="col-left">
                    <span class="label label-success"><i class="icon-plus"></i></span>
                </div>
                <div class="col-right with-margin">
                    <span class="message"><strong>Emma</strong>'s account was created</span>
                    <span class="time">4 hours ago</span>
                </div>
            </li>
        </ul> -->

        <div class="sidebar-widget align-center">
            <div class="btn-group" data-toggle="buttons" id="theme-switcher">
                <label class="btn active">
                    <input type="radio" name="theme-switcher" data-theme="bright"><i class="icon-sun"></i> Bright
                </label>
                <label class="btn">
                    <input type="radio" name="theme-switcher" data-theme="dark"><i class="icon-moon"></i> Dark
                </label>
            </div>
        </div>
        @if(auth()->user()->can('update permission'))
        <div class="sidebar-widget align-center">
            <div class="btn-group">
                <a href="{{route('dashboard.user.permission')}}">
                    <label class="btn btn-success btn-sm">
                        <i class="icon-cog"></i> Create Permissions
                    </label>
                </a>
            </div>
        </div>
        @endif
    </div>
    <div id="divider" class="resizeable"></div>
</div>
@endif
<!-- /Sidebar -->
