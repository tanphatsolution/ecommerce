<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!!($me->image) ? route('image',$me->image_thumbnail) : asset('assets/img/backend/avatar.png')!!}" class="img-circle">
            </div>
            <div class="pull-left info">
                <p>{{str_limit($me->name,15)}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li @if (Request::is('backend')) class="active" @endif>
                <a href="/backend">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            @can('provider-read')
            <li @if (Request::is('backend/provider*')) class="active" @endif>
                <a href="{{route('backend.provider.index')}}">
                    <i class="fa fa-user-secret"></i> <span>Providers</span>
                </a>
            </li>
            @endcan
            @can('order-read')
            <li class="treeview @if (Request::is('backend/order*')) active @endif">
                <a href="{{route('backend.order.index')}}">
                    <i class="fa fa-cart-plus"></i> <span>Orders</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('backend.order.index')}}"><i class="fa fa-circle-o"></i> List</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Statistical</a></li>
                </ul>
            </li>
            @endcan
            @can('product-read')
            <li class="treeview @if (Request::is('backend/product*') || Request::is('backend/category/type/product*') || Request::is('backend/property*')) active @endif">
                <a href="#">
                    <i class="fa fa-cubes"></i> <span>Products</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    @can('product-read')
                    <li @if (Request::is('backend/product*')) class="active" @endif><a href="{{route('backend.product.index')}}"><i class="fa fa-circle-o"></i> List</a></li>
                    @endcan
                    @can('category-read')
                    <li @if (Request::is('backend/category/type/product*')) class="active" @endif><a href="{{route('backend.category.type','product')}}"><i class="fa fa-circle-o"></i> Categories</a></li>
                    @endcan
                    @can('property-read')
                    <li @if (Request::is('backend/property*')) class="active" @endif><a href="{{route('backend.property.index')}}"><i class="fa fa-circle-o"></i> Properties</a></li>
                    @endcan
                </ul>
            </li>
            @endcan
            @can('page-read')
            <li @if (Request::is('backend/page*')) class="active" @endif>
                <a href="{{route('backend.page.index')}}">
                    <i class="fa fa-file-text-o"></i> <span>Pages</span>
                </a>
            </li>
            @endcan
            @can('post-read')
            <li class="treeview @if (Request::is('backend/post*') || Request::is('backend/category/type/post*')) active @endif">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Posts</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    @can('post-read')
                    <li @if (Request::is('backend/post*')) class="active" @endif><a href="{{route('backend.post.index')}}"><i class="fa fa-circle-o"></i> List</a></li>
                    @endcan
                    @can('category-read')
                    <li @if (Request::is('backend/category/type/post*')) class="active" @endif><a href="{{route('backend.category.type','post')}}"><i class="fa fa-circle-o"></i> Categories</a></li>
                    @endcan
                </ul>
            </li>
            @endcan
            <li class="header">SYSTEMS</li>
            <li class="treeview @if (Request::is('backend/user*') || Request::is('backend/role*')) active @endif">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Users</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    @can('user-read')
                    <li @if (Request::is('backend/user*')) class="active" @endif><a href="{{route('backend.user.index')}}"><i class="fa fa-circle-o"></i> Users</a></li>
                    @endcan
                    @can('role-read')
                    <li @if (Request::is('backend/role*')) class="active" @endif><a href="{{route('backend.role.index')}}"><i class="fa fa-circle-o"></i> Roles</a></li>
                    @endcan
                </ul>
            </li>
            @can('menu-read')
            <li @if (Request::is('backend/menu*')) class="active" @endif>
                <a href="{{route('backend.menu.index')}}">
                    <i class="fa fa-th-large"></i> <span>Menu</span>
                </a>
            </li>
            @endcan
            @can('config-read')
            <li class="treeview @if (Request::is('backend/config*') || Request::is('backend/slide')) active @endif">
                <a href="#">
                    <i class="fa fa-cogs"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    @can('config-read')
                    <li @if (Request::is('backend/config*')) class="active" @endif><a href="{{route('backend.config.index')}}"><i class="fa fa-circle-o"></i> Configs</a></li>
                    @endcan
                    @can('slide-read')
                    <li @if (Request::is('backend/slide*')) class="active" @endif><a href="{{route('backend.slide.index')}}"><i class="fa fa-circle-o"></i> Slides</a></li>
                    @endcan
                </ul>
            </li>
            @endcan
        </ul>
        
    </section>
</aside>
