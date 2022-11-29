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
</head>
    <body class="antialiased">
        <main class="main">
            <div class="page-content">
                <section class="error-section d-flex flex-column justify-content-center align-items-center text-center pl-3 pr-3" style="margin:80px 0;">
                    <h1 class="mb-2 ls-m">@yield('code')</h1>
                    <img src="{{asset('images/logo.png')}}" alt="error 404" width="609" height="131">
                    <h4 class="mt-7 mb-0 ls-m text-uppercase">@yield('message')</h4>
                    <p class="text-grey font-primary ls-m">It looks like nothing was found at this location.</p>
                    @if (Auth::guard('admin'))
                    <a href="{{route('admin.dashboard')}}" class="btn btn-primary btn-rounded mb-4">Go To Dashboard</a>
                    @elseif(Auth::guard('store'))
                    <a href="{{route('merchant.dashboard')}}" class="btn btn-primary btn-rounded mb-4">Go To Dashboard</a>
                    @else  
                    <a href="{{Route('homepage')}}" class="btn btn-primary btn-rounded mb-4">Go Back</a>  
                    @endif
                </section>
            </div>
        </main>
            <!-- Plugins JS File -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/elevatezoom/jquery.elevatezoom.min.js')}}"></script>
    <script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('vendor/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.plugin/jquery.plugin.min.js')}}"></script>
    <script src="{{asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('js/main.min.js')}}"></script>
    </body>
</html>
