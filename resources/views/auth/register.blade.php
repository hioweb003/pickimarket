<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Register | Picki Market Online Shopping</title>

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
                            {{-- @include('includes.errors') --}}
                            <form action="{{route('user.register')}}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="singin-fist" name="firstname" placeholder="First Name *" required value="{{old('firstname')}}"/>
                                  @error('firstname')
                                       <span style="color:rgb(212, 22, 22)">{{$message}}</span>
                                   @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="singin-last" name="lastname" placeholder="Last Name *" required value="{{old('lastname')}}"/>
                                 @error('lastname')
                                       <span style="color:rgb(212, 22, 22)">{{$message}}</span>
                                   @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="singin-email" name="email" placeholder="Email Address *" required value="{{old('email')}}"/>
                                    @error('email')
                                    <span style="color:rgb(212, 22, 22)">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="singin-phone" name="phone_number" placeholder="Phone Number *" required value="{{old('phone_number')}}"/>
                                    @error('phone_number')
                                    <span style="color:rgb(212, 22, 22)">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="singin-password" name="password" placeholder="Password *" required />
                                   @error('password')
                                       <span style="color:rgb(212, 22, 22)">{{$message}}</span>
                                   @enderror
                                </div>
                                
                                <button class="btn btn-block btn-rounded cbtn2 mb-2" type="submit">Register</button>
                                 <div class="row justify-content-center">
                                    <span class="text-center">Already have an Account?</span>
                                 </div>
                                <button type="button" onclick="window.location.href='{{route('login')}}'" class="btn btn-block btn-rounded cbtn">Login</button>
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