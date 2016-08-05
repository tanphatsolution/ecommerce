<div id="header" class="header">
	<div class="top-header">
        <div class="container">
            <div class="nav-top-links hidden-xs">
                <a class="first-item" href="#"><i class="fa fa-phone"></i> {{ $configs['phone'] }}</a>
                <a href="#"><i class="fa fa-map-marker"></i> {{ $configs['address'] }}</a>
            </div>
            <div class="support-link">
                <a href="#">Services</a>
                <a href="#">Support</a>
            </div>

            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="#">Compare</a></li>
                        <li><a href="#">Wishlists</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="/"><img alt="{{ $configs['name'] }}" src="{{ route('image',$configs['logo']) }}" /></a>
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <form class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control"  placeholder="Keyword here...">
                    </div>
                    <button type="submit" class="pull-right btn-search"></button>
                </form>
            </div>
            <div class="col-xs-5 col-sm-2 group-button-header">
                <a title="Compare" href="#" class="btn-compare">compare</a>
                <a title="My wishlist" href="#" class="btn-heart">wishlist</a>
                <div class="btn-cart" id="cart-block">
                    <a title="My cart" href="cart.html">Cart</a>
                    <span class="notify notify-right">{{ Cart::count() }}</span>
                    <div class="cart-block">
                        <div class="cart-block-content">
                            <p>Nothing items</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="nav-top-menu" class="nav-top-menu">
    	<div class="container">
            <div class="row">
            	<div class="col-sm-3" id="box-vertical-megamenus">
            		<div class="box-vertical-megamenus">
	            		<h4 class="title">
	                        <span class="title-menu">Categories</span>
	                        <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
	                    </h4>
	                    <div class="vertical-menu-content is-home">
                            @if (count($_menus))
	                    	<ul class="vertical-menu-list">
                                @foreach ($_menus as $_menu)
		                    	<li>
                                    <a @if ($isMenuChildren = count($_menu->children)) class="parent" @endif  href="{{$_menu->src}}">
                                        <img class="icon-menu" src="/assets/img/frontend/12.png">{{$_menu->name}}
                                    </a>
                                    @if ($isMenuChildren)
                                    <div class="vertical-dropdown-menu">
                                        <div class="vertical-groups">
                                            <ul class="group-link-default">
                                                @foreach ($_menu->children as $_menuChildren)
                                                    <li><a href="{{$_menuChildren->src}}">{{$_menuChildren->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                </li>
	                    	    @endforeach
                            </ul>
                            @endif
	                    </div>
            		</div>
            	</div>
            	<div id="main-menu" class="col-sm-9 main-menu">
            		<nav class="navbar navbar-default">
            			<div class="container-fluid">
            				<div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                	<li class="active"><a href="#">Home</a></li>
                                    <li ><a href="#">About us</a></li>
                                    <li ><a href="#">Products</a></li>
                                	<li ><a href="#">Blogs</a></li>
                                    <li ><a href="#">Services</a></li>
                                    <li ><a href="#">Customers</a></li>
                                	<li ><a href="#">Contact us</a></li>
                                </ul>
                            </div>
            			</div>
            		</nav>
            	</div>
            </div>
        </div>
    </div>
</div>