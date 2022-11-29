<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img class="img-80 img-radius" src="{{asset('images/favicon.png')}}" alt="User-Profile-Image">
                <div class="user-details">
                    <span id="more-details">{{Auth::guard('admin')->user()->name}}<i class="fa fa-caret-down"></i></span>
                </div>
            </div>

            <div class="main-menu-content">
                <ul>
                    <li class="more-details">
                        <a href="{{route('admin.profile')}}"><i class="ti-user"></i>View Profile</a>
                        <a href="{{route('admin.password.change')}}"><i class="ti-key"></i>Change Password</a>
                        <a href="{{route('admin.logout')}}"><i class="ti-lock"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="pcoded-navigation-label" data-i18n="nav.category.navigation"></div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{URL::current() == route('admin.dashboard') ? 'active' : ''}}">
                <a href="{{route('admin.dashboard')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-dashboard"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{URL::current() == route('admin.mstores') ? 'active' : ''}}">
                <a href="{{route('admin.mstores')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Manage Store</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{URL::current() == route('admin.slide.index') ? 'active' : ''}}">
                <a href="{{route('admin.slide.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-image"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Manage Slide</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{URL::current() == route('admin.customers') ? 'active' : ''}}">
                <a href="{{route('admin.customers')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-user"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Manage Customers</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{URL::current() == route('admin.order.index') ? 'active' : ''}}">
                <a href="{{route('admin.order.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-shopping-cart"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Manage Order <div class="badge badge-danger ml-5 ordnum">0</div></span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{URL::current() == route('admin.coupon.index') ? 'active' : ''}}">
                <a href="{{route('admin.coupon.index')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-gift"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Coupon</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
           
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-shopping-cart-full"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Products</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li>
                        <a href="{{route('admin.product.index')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">All Products</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.product.create')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add New Product</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    @if (Auth::guard('admin')->user()->roles == 1)
                    <li>
                        <a href="{{route('admin.category.index')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Category</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    @endif
                </ul>
            </li>
        </ul>
        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Settings &amp; Policies</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-microphone"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Policies</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li>
                        <a href="{{route('term')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Terms & conditions</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('privacypg')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Privacy Policy</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('deliverypg')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Delivery Policy</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.refundpolicy')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Return Policy</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.shippolicy')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Shipping Policy</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                   
                    
                </ul>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-settings"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Settings</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li>
                        <a href="{{route('admin.contact')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Contact</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.about')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">About Us</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{route('admin.vision')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Vision</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                   
                </ul>
            </li>

        </ul>

        @if (Auth::guard('admin')->user()->roles == 1)
        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Accounts</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-user"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Users Accounts</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('admin.user')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Users</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{route('admin.user.create')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Add Account</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    
                </ul>
            </li>
        </ul>
        @endif
        <ul class="pcoded-item pcoded-left-item">
        <li>
            <a href="{{route('admin.logout')}}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-lock"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.main">Logout</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        </ul>
    </div>
</nav>