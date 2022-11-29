<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <p class="welcome-msg">Welcome to Pick market!</p>
            </div>
            <div class="header-right">
                <a href="{{route('sellepoit')}}">Sell on Pickimarket</a>
                
                <span class="divider"></span>
                <div class="dropdown">
                    <a href="#currency">Need Help?</a>
                    <ul class="dropdown-box w-100">
                        <li><a href="{{route('faq')}}">faq</a></li>
                        <li><a href="{{route('contact')}}">contact us</a></li>
                    </ul>
                </div>
                <a href="{{route('about')}}" class="contact d-lg-show">About us</a>
                <a href="{{route('trms')}}" class="contact d-lg-show">Terms and Conditions</a>
                <a href="{{route('trms')}}" class="contact d-lg-show">Privacy Policy</a>
                
                <a  href="{{route('login')}}">Sign in</a>
                <span class="delimiter">/</span>
                <a class="register-link ml-0" href="{{route('register')}}">Register</a>
                <!-- End DropDownExpanded Menu -->
            </div>
        </div>
    </div>
    <!-- End HeaderTop -->
    <div class="header-middle sticky-header fix-top sticky-content">
        <div class="container">
            <div class="header-left">
                <a href="#" class="mobile-menu-toggle">
                    <i class="d-icon-bars2"></i>
                </a>
                <a href="{{url('/')}}" class="logo mr-4">
                    <img src="{{asset('images/logo.png')}}" alt="logo" />
                </a>
            </div>
            <div class="header-center mr-xl-6 ml-xl-8">
                <!-- End Logo -->
                <div class="header-search hs-simple">
                    <form action="#" method="post" class="input-wrapper">
                        <input type="text" class="form-control" name="search" id="search"
                            placeholder="Search for products and brands" required="">
                        <button class="btn btn-sm btn-search" type="submit"><i
                                class="d-icon-search"></i></button>
                    </form>
                </div>
                <!-- End Header Search -->
            </div>
            <div class="header-right">
                <a href="tel:#" class="icon-box icon-box-side mr-lg-3">
                    <div class="icon-box-icon mr-0 mr-lg-2">
                        <i class="d-icon-phone"></i>
                    </div>
                    <div class="icon-box-content d-lg-show">
                        <h4 class="icon-box-title">Call Us Now:</h4>
                        <p>0(800) 123-456</p>
                    </div>
                </a>
                {{-- <span class="divider"></span> --}}
                {{-- <a href="#" class="compare mr-xl-7 mr-4">
                    <i class="d-icon-compare"></i>
                </a>
                <a href="wishlist.html" class="wishlist">
                    <i class="d-icon-heart"></i>
                </a> --}}
                <span class="divider"></span>
                <div class="dropdown cart-dropdown type2 cart-offcanvas mr-0 mr-lg-2">
                    <a href="#" class="cart-toggle label-block link">
                        <div class="cart-label d-lg-show ls-normal">
                            <span class="cart-name">Shopping Cart:</span>
                            <span class="cart-price">$42.00</span>
                        </div>
                        <i class="d-icon-bag"><span class="cart-count">2</span></i>
                    </a>
                    <div class="cart-overlay"></div>
                    <!-- End Cart Toggle -->
                    <div class="dropdown-box">
                        <div class="cart-header">
                            <h4 class="cart-title">Shopping Cart</h4>
                            <a href="#" class="btn btn-dark btn-link btn-icon-right  btn-close">close<i
                                    class="d-icon-arrow-right"></i><span class="sr-only">Cart</span></a>
                        </div>
                        <div class="products scrollable">
                            <div class="product product-cart">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="images/cart/product-1.jpg" alt="product" width="80"
                                            height="88" />
                                    </a>
                                    <button class="btn btn-link btn-close">
                                        <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                    </button>
                                </figure>
                                <div class="product-detail">
                                    <a href="product.html" class="product-name">Riode White Trends</a>
                                    <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">$21.00</span>
                                    </div>
                                </div>

                            </div>
                            <!-- End of Cart Product -->
                            <div class="product product-cart">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="images/cart/product-2.jpg" alt="product" width="80"
                                            height="88" />
                                    </a>
                                    <button class="btn btn-link btn-close">
                                        <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                    </button>
                                </figure>
                                <div class="product-detail">
                                    <a href="product.html" class="product-name">Dark Blue Women’s
                                        Leomora Hat</a>
                                    <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">$118.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Cart Product -->
                        </div>
                        <!-- End of Products  -->
                        <div class="cart-total">
                            <label>Subtotal:</label>
                            <span class="price">$139.00</span>
                        </div>
                        <!-- End of Cart Total -->
                        <div class="cart-action">
                            <a href="cart.html" class="btn btn-link">View Cart</a>
                            <a href="checkout.html" class="btn btn-dark"><span>Checkout</span></a>
                        </div>
                        <!-- End of Cart Action -->
                    </div>
                    <!-- End Dropdown Box -->
                </div>

            </div>
        </div>
    </div>
  <!-- mobile header search -->
  <div class="header-search hs-simple d-none d-sm-block">
    <form action="#" method="post" class="input-wrapper">
        <input type="text" class="form-control" name="search" id="search"
            placeholder="Search for products and brands" required="">
        <button class="btn btn-sm btn-search" type="submit"><i
                class="d-icon-search"></i></button>
    </form>
</div>
<!-- End Header Search -->
    <div class="header-bottom">
        <div class="container">
            <div class="header-category-menu row gutter-no text-white w-100">
                <div class="category-menu-content scrollable scrollable-light">
                    <div class="category category-icon">
                        <a href="">
                            {{-- <figure class="category-media">
                                <i class="d-icon-category"></i>
                            </figure> --}}
                            <div class="category-content">
                                <h4 class="category-name">All Categories</h4>
                            </div>
                        </a>
                    </div>
                    <div class="category category-icon">
                        <a href="demo29-shop.html">
                            {{-- <figure class="category-media">
                                <i class="d-icon-desktop"></i>
                            </figure> --}}
                            <div class="category-content">
                                <h4 class="category-name">Computers</h4>
                            </div>
                        </a>
                    </div>
                    
                    <div class="category category-icon">
                        <a href="demo29-shop.html">
                            {{-- <figure class="category-media">
                                <i class="d-icon-camera2"></i>
                            </figure> --}}
                            <div class="category-content">
                                <h4 class="category-name">Electronics</h4>
                            </div>
                        </a>
                    </div>
                    <div class="category category-icon">
                        <a href="demo29-shop.html">
                            {{-- <figure class="category-media">
                                <i class="d-icon-gamepad2" style="font-size: 3.3rem; margin-bottom: 4px;"></i>
                            </figure> --}}
                            <div class="category-content">
                                <h4 class="category-name">Game consoles</h4>
                            </div>
                        </a>
                    </div>
                    <div class="category category-icon">
                        <a href="demo29-shop.html">
                            {{-- <figure class="category-media">
                                <i class="d-icon-wifi" style="font-size: 4rem; margin: -7px auto 3px;"></i>
                            </figure> --}}
                            <div class="category-content">
                                <h4 class="category-name">Networks</h4>
                            </div>
                        </a>
                    </div>
                    <div class="category category-icon">
                        <a href="demo29-shop.html">
                            {{-- <figure class="category-media">
                                <i class="d-icon-officebag"></i>
                            </figure> --}}
                            <div class="category-content">
                                <h4 class="category-name">Office Solution</h4>
                            </div>
                        </a>
                    </div>
                    <div class="category category-icon">
                        <a href="demo29-shop.html">
                            {{-- <figure class="category-media">
                                <i class="d-icon-mobile" style="font-size: 3.7rem; margin: -3px auto 2px;"></i>
                            </figure> --}}
                            <div class="category-content">
                                <h4 class="category-name">SmartPhone</h4>
                            </div>
                        </a>
                    </div>
                    <div class="category category-icon">
                        <a href="demo29-shop.html">
                            {{-- <figure class="category-media">
                                <i class="d-icon-bridge-lamp"></i>
                            </figure> --}}
                            <div class="category-content">
                                <h4 class="category-name">Industrial</h4>
                            </div>
                        </a>
                    </div>
                    <div class="category category-icon">
                        <a href="demo29-shop.html">
                            {{-- <figure class="category-media">
                                <i class="d-icon-headphone"></i>
                            </figure> --}}
                            <div class="category-content">
                                <h4 class="category-name">Headphones</h4>
                            </div>
                        </a>
                    </div>
                    <div class="category category-icon">
                        <a href="demo29-shop.html">
                            {{-- <figure class="category-media">
                                <i class="d-icon-memory" style="font-size: 3.6rem; margin: -5px auto 4px;"></i>
                            </figure> --}}
                            <div class="category-content">
                                <h4 class="category-name">Accessories</h4>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</header>