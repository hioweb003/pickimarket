<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Login | Picki Market Online Shopping</title>

    <meta name="keywords" content="Picki Market" />
    <meta name="description" content="Picki Market">
    <meta name="author" content="Picki Market">

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

<body>

    
    <div class="page-wrapper">
        <main class="main">
            <div class="page-content mt-6 pb-2 mb-10">
                <div class="container">
                    <div class="login-popup">
                        <div class="form-box">
                    <div class="row justify-content-center mb-4">
                        <a href="{{url('/')}}" class="logo">
                        <img src="{{asset('images/Picki Market color.png')}}" alt="logo"  width="153" height="43" >
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            @if (session()->has('success'))
                                <strong style="color: rgb(35, 122, 35);margin:5px 0">{{session()->get('success')}}</strong>   
                            @endif
                            @if (session()->has('error'))
                                <strong style="color: rgb(212, 22, 22);margin:5px 0">{{session()->get('error')}}</strong>   
                            @endif
                            <form action="{{route('user.login')}}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="singin-email" name="email" placeholder="Email Address *" required value="{{old('email')}}"/>
                                    @error('email')
                                    <span  style="color:rgb(212, 22, 22)">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="singin-password2" name="password" placeholder="Password *" required />
                                    @error('password')
                                    <span style="color:rgb(212, 22, 22)">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="form-footer">
                                    
                                    <a href="{{route('forgetpass')}}" class="lost-link">Lost your password?</a>
                                </div>
                                <button class="btn btn-block btn-rounded cbtn mb-2" type="submit">Login</button>
                                 <div class="row justify-content-center">
                                    <span class="text-center">Don't have an Account?</span>
                                 </div>
                                <button type="button" onclick="window.location.href='{{route('register')}}'" class="btn btn-block btn-rounded cbtn2">Register</button>
                            </form>
                        </div>
                    </div>
                   </div>
                  </div>
                </div>
            </div>
        </main>
     </div>
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