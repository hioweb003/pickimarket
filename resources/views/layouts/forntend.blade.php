<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>@yield('title')</title>

    <meta name="keywords" content="Picki Market" />
    <meta name="description" content="Picki Market">
    <meta name="author" content="Crested5">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">

    <script>
        WebFontConfig = {
            google: { families: [ 'Poppins:400,500,600,700,800' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>



    <link rel="stylesheet" type="text/css" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.min.css')}}">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/owl-carousel/owl.carousel.min.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/demo29.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/page.css')}}">
</head>

<body style="background-image: url(); background-postion:center;background-size:cover;background-repeat:no-repeat">

    <div class="page-wrapper">
       <!-- Header -->
        @include('includes.header')
        <!-- End Header -->
        <!-- Main -->
        @yield('fcontent')
        <!-- End Main -->
        <!-- Footer-->
        @include('includes.footer')
        <!-- End Footer -->
    </div>

    <!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="{{url('/')}}" class="sticky-link active">
            <i class="d-icon-home"></i>
            <span>Home</span>
        </a>
        <a href="demo29-shop.html" class="sticky-link">
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
            <form action="#" class="input-wrapper w-100">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search for products and brands" required />
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
        <!-- End Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End CloseButton -->
        @include('includes.mobilenav')
    </div>

  

    <!-- Plugins JS File -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/sticky/sticky.min.js')}}"></script>
    <script src="{{asset('vendor/elevatezoom/jquery.elevatezoom.min.js')}}"></script>
    <script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('vendor/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.plugin/jquery.plugin.min.js')}}"></script>
    <script src="{{asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('vendor/photoswipe/photoswipe.min.js')}}"></script>
	<script src="{{asset('vendor/photoswipe/photoswipe-ui-default.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('js/main.min.js')}}"></script>
</body>

</html>