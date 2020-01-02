<div class="navbar hotel-nav" role="banner">
    <!-- Top Navigation Bar -->
    <div class="container">
        <!-- Only visible on smartphones, menu toggle -->
        <ul class="nav navbar-nav">
            <li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
        </ul>
        <!-- Logo -->
			<a class="navbar-brand" href="index.html">
				<img src="{{$hotel->logo_url}}" alt="logo" />
				<strong>{{$hotel->name}}</strong>
			</a>
			<!-- /logo -->
        <!-- Top Left Menu -->
        <ul id="nav" class="nav navbar-nav navbar-left hidden-xs hidden-sm">
            <li>
                <a href="{{route('dashboard.hotel.show',$hotel->id)}}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{route('dashboard.hotel.show',$hotel->id.'/gallery')}}">
                    Gallery
                </a>
            </li>
            <li>
                <a href="#">
                    Story
                </a>
            </li>
            <li>
                <a href="#">
                    Menu
                </a>
            </li>

        </ul>
        <!-- /Top Left Menu -->
    </div>
</div> <!-- /.header -->
