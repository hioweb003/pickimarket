<!DOCTYPE html>
<html lang="en">

<head>
    <title>Seller Point | Register</title>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="keywords" content="Picki Market, Seller Point" />
      <meta name="description" content="Picki Market">
      <meta name="author" content="Picki Market">
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form action="" method="post" class="md-float-material">
                        @csrf
                        <div class="text-center">
                            <img src="{{asset('images/favicon.png')}}" alt="logo.png">
                            <h4>SellerPoint</h4>
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Create A SellerPoint Account</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="user-name" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Choose Username</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="email" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Your Email Address</label>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="confirm-password" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">I read and accept <a href="#">Terms &amp; Conditions.</a></span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success btn-md btn-block waves-effect text-center m-b-20">Register and Continue</button>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="button" onclick="window.location.href='{{route('vendor.login')}}'" class="btn btn-outline-success btn-md btn-block waves-effect waves-light text-center m-b-20">Login</button>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left"><a href="{{url("/")}}"><b>Back to main website</b></a></p>
                                    </div>
                                    <div class="col-md-2">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
  
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
<script type="text/javascript" src="{{asset('assets/js/common-pages.js')}}"></script>
</body>

</html>
