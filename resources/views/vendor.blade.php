<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Riode - Ultimate eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Riode - Ultimate eCommerce Template">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: { families: [ 'Poppins:300,400,500,600,700,800' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>


    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/owl-carousel/owl.carousel.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="css/market1.min.css">
</head>

<body class="vendor market">
    <div class="page-wrapper">
        <h1 class="d-none">Riode - Responsive eCommerce HTML Template</h1>
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg ls-normal">Welcome to Riode store message or remove it!</p>
                    </div>
                    <div class="header-right">
                        <div class="dropdown">
                            <a href="#currency">USD</a>
                            <ul class="dropdown-box">
                                <li><a href="#USD">USD</a></li>
                                <li><a href="#EUR">EUR</a></li>
                            </ul>
                        </div>
                        <!-- End DropDown Menu -->
                        <div class="dropdown ml-5">
                            <a href="#language">ENG</a>
                            <ul class="dropdown-box">
                                <li>
                                    <a href="#USD">ENG</a>
                                </li>
                                <li>
                                    <a href="#EUR">FRH</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End DropDown Menu -->
                        <span class="divider"></span>
                        <a href="store-listing.html" class="contact d-lg-show"><i class="d-icon-map"></i>Vendors</a>
                        <a href="#" class="help d-lg-show"><i class="d-icon-info"></i> My Account</a>
                        <a class="login-link" href="ajax/login.html" data-toggle="login-modal"><i
                                class="d-icon-user"></i>Sign in</a>
                        <span class="delimiter">/</span>
                        <a class="register-link ml-0" href="ajax/login.html" data-toggle="login-modal">Register</a>
                        <!-- End of Login -->
                    </div>
                </div>
            </div>
            <!-- End HeaderTop -->
            <div class="header-middle sticky-header fix-top sticky-content">
                <div class="container">
                    <div class="header-left mr-4">
                        <a href="#" class="mobile-menu-toggle">
                            <i class="d-icon-bars2"></i>
                        </a>
                        <a href="market1.html" class="logo">
                            <img src="images/demos/demo-market1/logo.png" alt="logo" width="153" height="44" />
                        </a>
                        <!-- End Logo -->

                        <div class="header-search hs-expanded">
                            <form action="#" class="input-wrapper">
                                <div class="select-box">
                                    <select name="cat" class="cat">
                                        <option value="all-cat" selected>All Categories</option>
                                        <option value="travel">Travel</option>
                                        <option value="shopping">Shopping</option>
                                        <option value="fashion">Fashion</option>
                                        <option value="lifestyle">Lifestyle</option>
                                    </select>
                                </div>
                                <input type="text" class="form-control" name="search" autocomplete="off"
                                    placeholder="Search..." required />
                                <button class="btn btn-search" type="submit">
                                    <i class="d-icon-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- End Header Search -->
                    </div>
                    <div class="header-right">
                        <div class="icon-box icon-box-side">
                            <div class="icon-box-icon mr-0 mr-lg-2">
                                <i class="d-icon-phone"></i>
                            </div>
                            <div class="icon-box-content d-lg-show">
                                <h4 class="icon-box-title text-dark text-normal">
                                    <a href="mailto:riode@mail.com" class="text-primary d-inline-block">Live chat</a> or:</h4>
                                <p><a href="tel:#">0(800) 123-456</a></p>
                            </div>
                        </div>
                        <span class="divider mr-4"></span>
                        <a href="#" class="compare">
                            <i class="d-icon-compare"></i>
                        </a>
                        <a href="wishlist.html" class="wishlist">
                            <i class="d-icon-heart"></i>
                        </a>
                        <span class="divider"></span>
                        <div class="dropdown cart-dropdown type2 cart-offcanvas mr-0 mr-lg-2">
                            <a href="#" class="cart-toggle label-block link">
                                <div class="cart-label d-lg-show">
                                    <span class="cart-name">Shopping Cart:</span>
                                    <span class="cart-price">$0.00</span>
                                </div>
                                <i class="d-icon-bag"><span class="cart-count">2</span></i>
                            </a>
                            <div class="cart-overlay"></div>
                            <!-- End Cart Toggle -->
                            <div class="dropdown-box">
                                <div class="cart-header">
                                    <h4 class="cart-title">Shopping Cart</h4>
                                    <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
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
                                                Leom
                                                ora Hat</a>
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
                                    <a href="cart.html" class="btn btn-dark btn-link">View Cart</a>
                                    <a href="checkout.html" class="btn btn-dark"><span>Go To Checkout</span></a>
                                </div>
                                <!-- End of Cart Action -->
                            </div>
                            <!-- End Dropdown Box -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-bottom pb-0">
                <div class="container">
                    <nav class="menu category-menu">
                        <div class="category category-icon">
                            <a href="market1-shop.html">
                                <figure class="categroy-media">
                                    <i class="d-icon-desktop"></i>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">Office Computers</h4>
                                </div>
                            </a>
                        </div>
                        <div class="category category-icon">
                            <a href="market1-shop.html">
                                <figure class="categroy-media">
                                    <i class="d-icon-handbag"></i>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">Women’s Bag</h4>
                                </div>
                            </a>
                        </div>
                        <div class="category category-icon">
                            <a href="market1-shop.html">
                                <figure class="categroy-media">
                                    <i class="d-icon-t-shirt2"></i>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">Men's Clothings</h4>
                                </div>
                            </a>
                        </div>
                        <div class="category category-icon">
                            <a href="market1-shop.html">
                                <figure class="categroy-media">
                                    <i class="d-icon-camera2"></i>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">Electronics</h4>
                                </div>
                            </a>
                        </div>
                        <div class="category category-icon">
                            <a href="market1-shop.html">
                                <figure class="categroy-media">
                                    <i class="d-icon-gamepad2"></i>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">Game Consoles</h4>
                                </div>
                            </a>
                        </div>
                        <div class="category category-icon">
                            <a href="market1-shop.html">
                                <figure class="categroy-media">
                                    <i class="d-icon-officebag"></i>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">Office Solution</h4>
                                </div>
                            </a>
                        </div>
                        <div class="category category-icon">
                            <a href="market1-shop.html">
                                <figure class="categroy-media">
                                    <i class="d-icon-mobile"></i>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">SmartPhone</h4>
                                </div>
                            </a>
                        </div>
                        <div class="category category-icon">
                            <a href="market1-shop.html">
                                <figure class="categroy-media">
                                    <i class="d-icon-bridge-lamp"></i>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">Industrial</h4>
                                </div>
                            </a>
                        </div>
                        <div class="category category-icon">
                            <a href="market1-shop.html">
                                <figure class="categroy-media">
                                    <i class="d-icon-headphone"></i>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">Headphones</h4>
                                </div>
                            </a>
                        </div>
                        <div class="category category-icon">
                            <a href="market1-shop.html">
                                <figure class="categroy-media">
                                    <i class="d-icon-memory"></i>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">Accessories</h4>
                                </div>
                            </a>
                        </div>
                        <div class="category category-icon">
                            <a href="market1-shop.html">
                                <figure class="categroy-media">
                                    <i class="d-icon-cook"></i>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">Rice Cooker</h4>
                                </div>
                            </a>
                        </div>
                        <div class="category category-icon">
                            <a href="market1-shop.html">
                                <figure class="categroy-media">
                                    <i class="d-icon-category"></i>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">All Categories</h4>
                                </div>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <main class="main">
            <div class="page-content mb-10">
                <div class="container">
                    <nav class="breadcrumb-nav">
                        <ul class="breadcrumb">
                            <li><a href="market1.html"><i class="d-icon-home"></i></a></li>
                            <li><a href="store-listing.html">Store</a></li>
                            <li>vendor1</li>
                        </ul>
                    </nav>
                    <div class="row gutter-lg">
                        <aside class="col-xl-3 col-lg-4 sidebar left-sidebar sidebar-fixed sticky-sidebar-wrapper">
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                            <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-right"></i></a>
                            <div class="sidebar-content">
                                <div class="sticky-sidebar">
                                    <div class="widget widget-collapsible">
                                        <h2 class="widget-title">Store Product Category</h2>
                                        <ul class="widget-body filter-items search-ul">
                                            <li>
                                                <a href="#">Speakers</a>
                                                <ul>
                                                    <li><a href="#">5G</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Clothing &amp; Apparal</a></li>
                                            <li>
                                                <a href="#">SmartPhone</a>
                                                <ul>
                                                    <li><a href="#">Samsung</a></li>
                                                    <li><a href="#">Arcade1UP</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Healthy &amp; Beauty</a></li>
                                            <li><a href="#">Watches &amp; Accessories</a></li>
                                            <li><a href="#">Home Audio &amp; Accessories</a></li>
                                            <li><a href="#">Office Computers</a></li>
                                            <li><a href="#">Headphones</a></li>
                                            <li><a href="#">Game Consoles</a></li>
                                            <li><a href="#">Rice Cooker</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget widget-collapsible widget-contact-vendor">
                                        <h3 class="widget-title">Contact Vendor</h3>
                                        <div class="widget-body">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="">
                                            <input type="text" class="form-control" id="address" name="address" placeholder="you@example.com" required="">
                                            <textarea id="message" cols="30" rows="6" class="form-control" placeholder="Type your message..." required=""></textarea>
                                            <a href="#" class="btn btn-dark btn-rounded">Send Message</a>
                                        </div>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h2 class="widget-title">Store Time</h2>
                                        <ul class="widget-body widget-store-time">
                                            <li>
                                                <label>Sunday</label><span>6:00 am - 10:00 pm</span>
                                            </li>
                                            <li>
                                                <label>Monday</label><span>6:00 am - 10:00 pm</span>
                                            </li>
                                            <li>
                                                <label>Tuesday</label><span>6:00 am - 10:00 pm</span>
                                            </li>
                                            <li>
                                                <label>Wednesday</label><span>6:00 am - 10:00 pm</span>
                                            </li>
                                            <li>
                                                <label>Thursday</label><span>6:00 am - 10:00 pm</span>
                                            </li>
                                            <li>
                                                <label>Friday</label><span>6:00 am - 10:00 pm</span>
                                            </li>
                                            <li>
                                                <label>Saturday</label><span>6:00 am - 10:00 pm</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h2 class="widget-title">Best Selling Product</h2>
                                        <div class="widget-body mt-2 mb-6">
                                            <div class="product product-list-sm">
                                                <figure class="product-media">
                                                    <a href="market1-product.html">
                                                        <img src="images/demos/demo-market1/product/5.jpg" alt="product"
                                                            width="165" height="184">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="market1-product.html">Fashionable Pro
                                                            Hairdye Black</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$36.00</ins><del class="old-price">$210.00</del>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="market1-product.html" class="rating-reviews">( 6 reviews )</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product product-list-sm">
                                                <figure class="product-media">
                                                    <a href="market1-product.html">
                                                        <img src="images/demos/demo-market1/product/9.jpg" alt="product"
                                                            width="165" height="184">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="market1-product.html">Processed Foodstuffs
                                                        </a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <span class="price">$25.00</span>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:60%"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="market1-product.html" class="rating-reviews">( 6 reviews )</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product product-list-sm mb-0">
                                                <figure class="product-media">
                                                    <a href="market1-product.html">
                                                        <img src="images/demos/demo-market1/product/6.jpg" alt="product"
                                                            width="165" height="184">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="market1-product.html">Fashionable Hand
                                                            Bag</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$198.00</ins><del class="old-price">$270.00</del>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="market1-product.html" class="rating-reviews">( 6 reviews )</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h2 class="widget-title">Top Rated Product</h2>
                                        <div class="widget-body mt-2">
                                            <div class="product product-list-sm">
                                                <figure class="product-media">
                                                    <a href="market1-product.html">
                                                        <img src="images/demos/demo-market1/product/5.jpg" alt="product"
                                                            width="165" height="184">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="market1-product.html">Fashionable Pro
                                                            Hairdye Black</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$36.00</ins><del class="old-price">$210.00</del>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="market1-product.html" class="rating-reviews">( 6 reviews )</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product product-list-sm">
                                                <figure class="product-media">
                                                    <a href="market1-product.html">
                                                        <img src="images/demos/demo-market1/product/9.jpg" alt="product"
                                                            width="165" height="184">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="market1-product.html">Processed Foodstuffs
                                                        </a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <span class="price">$25.00</span>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:60%"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="market1-product.html" class="rating-reviews">( 6 reviews )</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product product-list-sm mb-0">
                                                <figure class="product-media">
                                                    <a href="market1-product.html">
                                                        <img src="images/demos/demo-market1/product/6.jpg" alt="product"
                                                            width="165" height="184">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="market1-product.html">Fashionable Hand
                                                            Bag</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$198.00</ins><del class="old-price">$270.00</del>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="market1-product.html" class="rating-reviews">( 6 reviews )</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <div class="col-xl-9 col-lg-8 main-content">
                            <div class="vendor-store-banner banner banner-fixed banner-radius">
                                <figure>
                                    <img src="images/vendor/store/7.jpg" alt="Vendor" width="1030" height="500" />
                                </figure>
                                <div class="vendor-store-content banner-content">
                                    <figure>
                                        <img src="images/vendor/store/vendor.png" alt="Vendor avatar" width="80" height="80" />
                                    </figure>
                                    <h2 class="vendor-store-title">Sterling Captial Group</h2>
                                    <ul>
                                        <li>
                                            <i class="d-icon-map"></i>
                                            <span class="street"> Steven Street,</span> 
                                            <span class="city"> El Carjon,</span> 
                                            <span class="state"> California,</span>
                                            <span class="country"> United States (US) </span>                                
                                        </li>
                                        <li>
                                            <i class="d-icon-phone"></i>
                                            <a href="tel:123456789">123456789</a>
                                        </li>
                                        <li>
                                            <i class="d-icon-star-full"></i>
                                            <span>4.67 rating from 9 reviews</span>
                                        </li>
                                        <li>
                                            <i class="d-icon-bag"></i>
                                            <span>Store Open</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row product-wrapper cols-xl-3 cols-lg-3 cols-md-3 cols-2 mt-6">
                                <div class="product-wrap">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="market1-product.html">
                                                <img src="images/demos/demo-market1/product/10.jpg" alt="Product"
                                                    width="238" height="267" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                        class="d-icon-heart"></i></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="d-icon-compare"></i>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Electronics</a>
                                            </div>
                                            <h4 class="product-name">
                                                <a href="market1-product.html">Blutooth Keyboard</a>
                                            </h4>
                                            <div class="product-price">
                                                <span class="price">$98.00</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="market1-product.html" class="rating-reviews">( 6 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="market1-product.html">
                                                <img src="images/demos/demo-market1/product/11.jpg" alt="Product"
                                                    width="238" height="267" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                        class="d-icon-heart"></i></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="d-icon-compare"></i>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Electronics</a>
                                            </div>
                                            <h4 class="product-name">
                                                <a href="market1-product.html">Professional Pixel Camera</a>
                                            </h4>
                                            <div class="product-price">
                                                <span class="price">$210.00</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="market1-product.html" class="rating-reviews">( 6 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="market1-product.html">
                                                <img src="images/demos/demo-market1/product/18.jpg" alt="Product"
                                                    width="238" height="267" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                        class="d-icon-heart"></i></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="d-icon-compare"></i>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Bags</a>
                                            </div>
                                            <h4 class="product-name">
                                                <a href="market1-product.html">Professional Pixel Camera</a>
                                            </h4>
                                            <div class="product-price">
                                                <ins class="new-price">$198.00</ins><del class="old-price">$210.00</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:80%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="market1-product.html" class="rating-reviews">( 9 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="market1-product.html">
                                                <img src="images/demos/demo-market1/product/19.jpg" alt="Product"
                                                    width="238" height="267" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                        class="d-icon-heart"></i></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="d-icon-compare"></i>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Clothing</a>
                                            </div>
                                            <h4 class="product-name">
                                                <a href="market1-product.html">Women’s Original Trucker</a>
                                            </h4>
                                            <div class="product-price">
                                                <ins class="new-price">$98.00</ins><del class="old-price">$120.00</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="market1-product.html" class="rating-reviews">( 2 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="market1-product.html">
                                                <img src="images/demos/demo-market1/product/20.jpg" alt="Product"
                                                    width="238" height="267" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                        class="d-icon-heart"></i></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="d-icon-compare"></i>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Shoes</a>
                                            </div>
                                            <h4 class="product-name">
                                                <a href="market1-product.html">Bule Training Shoes</a>
                                            </h4>
                                            <div class="product-price">
                                                <ins class="new-price">$68.00</ins><del class="old-price">$80.00</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:40%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="market1-product.html" class="rating-reviews">( 5 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="market1-product.html">
                                                <img src="images/demos/demo-market1/product/33.jpg" alt="Product"
                                                    width="238" height="267" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                        class="d-icon-heart"></i></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="d-icon-compare"></i>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Grocery</a>
                                            </div>
                                            <h4 class="product-name">
                                                <a href="market1-product.html">Protective Foods</a>
                                            </h4>
                                            <div class="product-price">
                                                <span class="price">$101.00</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="market1-product.html" class="rating-reviews">( 5 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="market1-product.html">
                                                <img src="images/demos/demo-market1/product/27.jpg" alt="Product"
                                                    width="238" height="267" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                        class="d-icon-heart"></i></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="d-icon-compare"></i>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Grocery</a>
                                            </div>
                                            <h4 class="product-name">
                                                <a href="market1-product.html">Cups of Tea</a>
                                            </h4>
                                            <div class="product-price">
                                                <ins class="new-price">$68.00</ins><del class="old-price">$75.00</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="market1-product.html" class="rating-reviews">( 5 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="market1-product.html">
                                                <img src="images/demos/demo-market1/product/24.jpg" alt="Product"
                                                    width="238" height="267" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                        class="d-icon-heart"></i></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="d-icon-compare"></i>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Clothing</a>
                                            </div>
                                            <h4 class="product-name">
                                                <a href="market1-product.html">Fashionable Hooded Coat</a>
                                            </h4>
                                            <div class="product-price">
                                                <ins class="new-price">$96.00</ins><del class="old-price">$134.05</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:80%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="market1-product.html" class="rating-reviews">( 9 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="market1-product.html">
                                                <img src="images/demos/demo-market1/product/15.jpg" alt="Product"
                                                    width="238" height="267" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                        class="d-icon-heart"></i></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="d-icon-compare"></i>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Electronics</a>
                                            </div>
                                            <h4 class="product-name">
                                                <a href="market1-product.html">Apple Super Notecom</a>
                                            </h4>
                                            <div class="product-price">
                                                <span class="price">$990.00</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="market1-product.html" class="rating-reviews">( 3 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="market1-product.html">
                                                <img src="images/demos/demo-market1/product/31.jpg" alt="Product"
                                                    width="238" height="267" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                        class="d-icon-heart"></i></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="d-icon-compare"></i>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Grocery</a>
                                            </div>
                                            <h4 class="product-name">
                                                <a href="market1-product.html">Wholesome Food  Walnut</a>
                                            </h4>
                                            <div class="product-price">
                                                <span class="price">$100.00</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="market1-product.html" class="rating-reviews">( 10 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="market1-product.html">
                                                <img src="images/demos/demo-market1/product/23.jpg" alt="Product"
                                                    width="238" height="267" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                        class="d-icon-heart"></i></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="d-icon-compare"></i>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Clothing</a>
                                            </div>
                                            <h4 class="product-name">
                                                <a href="market1-product.html">Fashionable Blue Towel</a>
                                            </h4>
                                            <div class="product-price">
                                                <ins class="new-price">$23.00</ins><del class="old-price">$41.05</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="market1-product.html" class="rating-reviews">( 8 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="market1-product.html">
                                                <img src="images/demos/demo-market1/product/17.jpg" alt="Product"
                                                    width="238" height="267" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                        class="d-icon-heart"></i></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="d-icon-compare"></i>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Electronics</a>
                                            </div>
                                            <h4 class="product-name">
                                                <a href="market1-product.html">Fashionable Smart Speaker</a>
                                            </h4>
                                            <div class="product-price">
                                                <span class="price">$500.00</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="market1-product.html" class="rating-reviews">( 8 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="toolbox justify-content-center">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                            <i class="d-icon-arrow-left"></i>Prev
                                        </a>
                                    </li>
                                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item">
                                        <a class="page-link page-link-next" href="#" aria-label="Next">
                                            Next<i class="d-icon-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- End Main -->

        <footer class="footer">
            <div class="container">
                <div class="footer-top">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <a href="market1.html" class="logo-footer">
                                <img src="images/demos/demo-market1/footer-logo.png" alt="logo-footer" width="153" height="44" />
                            </a>
                            <!-- End FooterLogo -->
                        </div>
                        <div class="col-lg-4 widget-newsletter mb-4 mb-lg-0">
                            <h4 class="widget-title ls-m">Subscribe to our Newsletter</h4>
                            <p>Get all the latest information on Events, Sales and Offers.</p>
                        </div>
                        <div class="col-lg-5 widget-newsletter">
                            <form action="#" class="input-wrapper-inline mx-auto mx-lg-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email address here..." required />
                                <button class="btn btn-primary btn-rounded ml-2" type="submit">subscribe<i
                                        class="d-icon-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End FooterTop -->
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget-info">
                                <h4 class="widget-title">Contact Info</h4>
                                <ul class="widget-body">
                                    <li>
                                        <label>Phone:</label>
                                        <a href="tel:#">Toll Free (123) 456-7890</a>
                                    </li>
                                    <li>
                                        <label>Email:</label>
                                        <a href="mailto:mail@riode.com">riode@mail.com</a>
                                    </li>
                                    <li>
                                        <label>Address:</label>
                                        <a href="#">123 Street, City, Country</a>
                                    </li>
                                    <li>
                                        <label>WORKING DAYS / HOURS:</label>
                                    </li>
                                    <li>
                                        <a href="#">Mon - Sun / 9:00 AM - 8:00 PM</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4>
                                <ul class="widget-body">
                                    <li>
                                        <a href="about-us.html">Track My Order</a>
                                    </li>
                                    <li>
                                        <a href="#">View Cart</a>
                                    </li>
                                    <li>
                                        <a href="#">Sign in</a>
                                    </li>
                                    <li>
                                        <a href="#">My Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="widget">
                                <h4 class="widget-title">About Us</h4>
                                <ul class="widget-body">
                                    <li>
                                        <a href="about-us.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Order History</a>
                                    </li>
                                    <li>
                                        <a href="#">Returns</a>
                                    </li>
                                    <li>
                                        <a href="#">Custom Service</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms &amp; Condition</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4>
                                <ul class="widget-body">
                                    <li>
                                        <a href="#">Payment Methods</a>
                                    </li>
                                    <li>
                                        <a href="#">Money-back Guarantee!</a>
                                    </li>
                                    <li>
                                        <a href="#">Products Returns</a>
                                    </li>
                                    <li>
                                        <a href="#">Support Center</a>
                                    </li>
                                    <li>
                                        <a href="#">Shipping</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget-instagram pl-lg-10 mb-0 mb-md-6">
                                <h4 class="widget-title">Instagram</h4>
                                <figure class="widget-body row">
                                    <div class="col-3">
                                        <img src="images/instagram/01.jpg" alt="instagram 1" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="images/instagram/02.jpg" alt="instagram 2" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="images/instagram/03.jpg" alt="instagram 3" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="images/instagram/04.jpg" alt="instagram 4" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="images/instagram/05.jpg" alt="instagram 5" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="images/instagram/06.jpg" alt="instagram 6" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="images/instagram/07.jpg" alt="instagram 7" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="images/instagram/08.jpg" alt="instagram 8" width="64" height="64" />
                                    </div>
                                </figure>
                            </div>
                            <!-- End Instagram -->
                        </div>
                    </div>
                </div>
                <!-- End FooterMiddle -->
                <div class="footer-main">
                    <div class="widget widget-category">
                        <div class="category-box">
                            <h6 class="category-name">Clothing & Apparel:</h6>
                            <a href="#">Boots</a>
                            <a href="#">Dresses</a>
                            <a href="#">Jeans</a>
                            <a href="#">Leather Backpack</a>
                            <a href="#">Men's Sneaker</a>
                            <a href="#">Men's T-shirt</a>
                            <a href="#">Peter England Shirts</a>
                            <a href="#">Rayban</a>
                            <a href="#">Sunglasses</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Computer & Technologies:</h6>
                            <a href="#">Apple</a>
                            <a href="#">Drone</a>
                            <a href="#">Game Controller</a>
                            <a href="#">iMac</a>
                            <a href="#">Laptop</a>
                            <a href="#">Smartphone</a>
                            <a href="#">Tablet</a>
                            <a href="#">Wireless Speaker</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Consumer Electric:</h6>
                            <a href="#">Air Condition</a>
                            <a href="#">Audio Speaker</a>
                            <a href="#">Refrigerator</a>
                            <a href="#">Security Camera</a>
                            <a href="#">TV Television</a>
                            <a href="#">Washing Machine</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Jewellery & Watches:</h6>
                            <a href="#">Ammolite</a>
                            <a href="#">Australian Opal</a>
                            <a href="#">Diamond Ring</a>
                            <a href="#">Faceted Carnelian</a>
                            <a href="#">Gucci</a>
                            <a href="#">Leather Watcher</a>
                            <a href="#">Necklace</a>
                            <a href="#">Pendant</a>
                            <a href="#">Rolex</a>
                            <a href="#">Silver Earing</a>
                            <a href="#">Sun Pyrite</a>
                            <a href="#">Watches</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Healthy & Beauty:</h6>
                            <a href="#">Body Shower</a>
                            <a href="#">Hair Care</a>
                            <a href="#">LipStick</a>
                            <a href="#">Makeup</a>
                            <a href="#">Perfume</a>
                            <a href="#">Skin Care</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Home, Garden & Kitchen:</h6>
                            <a href="#">Bed Room</a>
                            <a href="#">Blender</a>
                            <a href="#">Chair</a>
                            <a href="#">Cookware</a>
                            <a href="#">Decor</a>
                            <a href="#">Garden Equipments</a>
                            <a href="#">Library</a>
                            <a href="#">Living Room</a>
                            <a href="#">Shield-Oval</a>
                            <a href="#">Sofa</a>
                            <a href="#">Utensil</a>
                            <a href="#">Wayfarer</a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="footer-left">
                        <figure class="payment">
                            <img src="images/payment.png" alt="payment" width="159" height="29" />
                        </figure>
                    </div>
                    <div class="footer-center">
                        <p class="copyright">Riode eCommerce &copy; 2021. All Rights Reserved</p>
                    </div>
                    <div class="footer-right">
                        <div class="social-links">
                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                            <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                        </div>
                    </div>
                </div>
                <!-- End FooterBottom -->
            </div>
        </footer>
        <!-- End Footer -->
    </div>

    <!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="market1.html" class="sticky-link active">
            <i class="d-icon-home"></i>
            <span>Home</span>
        </a>
        <a href="market1-shop.html" class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>Categories</span>
        </a>
        <a href="wishlist.html" class="sticky-link">
            <i class="d-icon-heart"></i>
            <span>Wishlist</span>
        </a>
        <a href="account.html" class="sticky-link">
            <i class="d-icon-user"></i>
            <span>Account</span>
        </a>
        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="d-icon-search"></i>
                <span>Search</span>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End of Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End of CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="market1.html">Home</a>
                </li>
                <li>
                    <a href="market1-shop.html">Categories</a>
                    <ul>
                        <li>
                            <a href="#">
                                Variations 1
                            </a>
                            <ul>
                                <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                <li><a href="shop-infinite-scroll.html">Infinite Ajaxscroll</a></li>
                                <li><a href="shop-horizontal-filter.html">Horizontal Filter</a></li>
                                <li><a href="shop-navigation-filter.html">Navigation Filter<span
                                            class="tip tip-hot">Hot</span></a></li>

                                <li><a href="shop-off-canvas.html">Off-Canvas Filter</a></li>
                                <li><a href="shop-right-sidebar.html">Right Toggle Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Variations 2
                            </a>
                            <ul>

                                <li><a href="shop-grid-3cols.html">3 Columns Mode<span
                                            class="tip tip-new">New</span></a></li>
                                <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                <li><a href="shop-list.html">List Mode</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="market1-product.html">Products</a>
                    <ul>
                        <li>
                            <a href="#">Product Pages</a>
                            <ul>
                                <li><a href="product-simple.html">Simple Product</a></li>
                                <li><a href="product.html">Variable Product</a></li>
                                <li><a href="product-sale.html">Sale Product</a></li>
                                <li><a href="product-featured.html">Featured &amp; On Sale</a></li>

                                <li><a href="product-left-sidebar.html">With Left Sidebar</a></li>
                                <li><a href="product-right-sidebar.html">With Right Sidebar</a></li>
                                <li><a href="product-sticky-cart.html">Add Cart Sticky<span
                                            class="tip tip-hot">Hot</span></a></li>
                                <li><a href="product-tabinside.html">Tab Inside</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Layouts</a>
                            <ul>
                                <li><a href="product-grid.html">Grid Images<span class="tip tip-new">New</span></a></li>
                                <li><a href="product-masonry.html">Masonry</a></li>
                                <li><a href="product-gallery.html">Gallery Type</a></li>
                                <li><a href="product-full.html">Full Width Layout</a></li>
                                <li><a href="product-sticky.html">Sticky Info</a></li>
                                <li><a href="product-sticky-both.html">Left &amp; Right Sticky</a></li>
                                <li><a href="product-horizontal.html">Horizontal Thumb</a></li>

                                <li><a href="#">Build Your Own</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul>
                        <li><a href="about-us.html">About</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="account.html">Login</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="error-404.html">Error 404</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blog-classic.html">Blog</a>
                    <ul>
                        <li><a href="blog-classic.html">Classic</a></li>
                        <li><a href="blog-listing.html">Listing</a></li>
                        <li>
                            <a href="#">Grid</a>
                            <ul>
                                <li><a href="blog-grid-2col.html">Grid 2 columns</a></li>
                                <li><a href="blog-grid-3col.html">Grid 3 columns</a></li>
                                <li><a href="blog-grid-4col.html">Grid 4 columns</a></li>
                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Masonry</a>
                            <ul>
                                <li><a href="blog-masonry-2col.html">Masonry 2 columns</a></li>
                                <li><a href="blog-masonry-3col.html">Masonry 3 columns</a></li>
                                <li><a href="blog-masonry-4col.html">Masonry 4 columns</a></li>
                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Mask</a>
                            <ul>
                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="post-single.html">Single Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">ELements</a>
                    <ul>
                        <li><a href="element-products.html">Products</a></li>
                        <li><a href="element-typography.html">Typography</a></li>
                        <li><a href="element-titles.html">Titles</a></li>
                        <li><a href="element-categories.html">Product Category</a></li>
                        <li><a href="element-buttons.html">Buttons</a></li>
                        <li><a href="element-accordions.html">Accordions</a></li>
                        <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                        <li><a href="element-tabs.html">Tabs</a></li>
                        <li><a href="element-testimonials.html">Testimonials</a></li>
                        <li><a href="element-blog-posts.html">Blog Posts</a></li>
                        <li><a href="element-instagrams.html">Instagrams</a></li>
                        <li><a href="element-cta.html">Call to Action</a></li>
                        <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                        <li><a href="element-icons.html">Icons</a></li>
                    </ul>
                </li>
                <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Riode!</a></li>
            </ul>
        </div>
    </div>
    <!-- Plugins JS File -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendor/photoswipe/photoswipe.min.js"></script>
    <script src="vendor/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="vendor/sticky/sticky.min.js"></script>
    <script src="vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
    <!-- Main JS File -->
    <script src="js/main.min.js"></script>
</body>

</html>