<!DOCTYPE html>
<html lang="en">

<head>
    <title>Picki Market | Admin</title>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="pickimarket" />
      <!-- Favicon icon -->

      <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
      <!-- Google font-->     
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap/css/bootstrap.min.css')}}">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{asset('assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/themify-icons/themify-icons.css')}}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/icofont/css/icofont.css')}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/font-awesome/css/font-awesome.min.css')}}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  </head>

  <body>
  

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    
                        <form action="{{route('admin.login')}}" method="post" class="md-float-material form-material" onsubmit="thisForm()">
                            @csrf
                            <div class="text-center">
                                <img src="{{asset('images/favicon.png')}}" alt="logo"  />
                                <h4>{{config('app.name')}} Admin</h4>
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Admin</h3>
                                        </div>
                                    </div>
                                    @include('includes.errors')
                                    @include('includes.success')
                                    <div class="form-group form-primary">
                                        <input type="text" name="username" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Username</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Password</label>
                                    </div>
                                   
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" id="btns" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-10">
                                            {{-- <p class="text-inverse text-left m-b-0">Thank you.</p> --}}
                                            <p class="text-inverse text-left"><a href="{{url("/")}}"><b>Go to main website</b></a></p>
                                        </div>
                                        <div class="col-md-2">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
  
<!-- Warning Section Ends -->
<!-- Required Jquery -->
    <script type="text/javascript" src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>    
     <script type="text/javascript" src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}} "></script>   
       <script type="text/javascript" src="{{asset('assets/js/popper.js/popper.min.js')}}"></script>    
        <script type="text/javascript" src="{{asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- waves js -->
<script src="{{asset('assets/pages/waves/js/waves.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
    <script type="text/javascript" src="{{asset('assets/js/SmoothScroll.js')}}"></script>     
    <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- i18next.min.js -->
{{-- <script type="text/javascript" src="bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="text/javascript" src="assets/js/common-pages.js"></script> --}}
<script>
    function thisForm(){
        $("#btns").text('Signing in...');
        $("#btns").attr('disabled', true);
    }
  </script>
</body>

</html>
