<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') </title>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      
      <!-- Favicon icon -->
      <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap/css/bootstrap.min.css')}}">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{asset('assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
      <!-- datatables -->
      <link href="{{asset('css/jquery.dataTables.css')}}" rel="stylesheet" />
      <link href="{{asset('css/dataTables.bootstrap4.css')}}" rel="stylesheet" />
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/themify-icons/themify-icons.css')}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/font-awesome/css/font-awesome.min.css')}}">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
        <!-- am chart export.css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/page.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/dropzone.css')}}">
  </head>

  <body>
        <!-- preloader image start-->

  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#">
                          <i class="ti-menu"></i>
                      </a>
                      
                      <a href="#">
                          <img class="img-fluid" src="{{asset('images/logo-footer.png')}}"  width="120"
                          height="30"  alt="Theme-Logo" />
                      </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
                
                  <div class="navbar-container container-fluid">
                      <ul class="nav-left">
                          <li>
                              <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                          </li>
                          
                          <li>
                              <a href="#" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                  <i class="ti-fullscreen"></i>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav-right">
                          <li class="header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  <i class="ti-bell"></i>
                                  <span class="badge bg-c-red"></span>
                              </a>
                              <ul class="show-notification">
                                  <li>
                                      <h6>Notifications</h6>
                                      <label class="label label-danger">New</label>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <div class="media">
                                          <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <h5 class="notification-user">John Doe</h5>
                                              <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class="notification-time">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <div class="media">
                                          <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <h5 class="notification-user">Joseph William</h5>
                                              <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class="notification-time">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <div class="media">
                                          <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <h5 class="notification-user">Sara Soudein</h5>
                                              <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class="notification-time">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </li>
                          <li class="user-profile header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  <img src="{{asset('images/favicon.png')}}" class="img-radius" alt="User-Profile-Image">
                                  <span>{{Auth::guard('admin')->user()->name}}</span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              <ul class="show-notification profile-notification">
                                  <li class="waves-effect waves-light">
                                      <a href="{{route('admin.password.change')}}">
                                          <i class="ti-key"></i> Change Password
                                      </a>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <a href="{{route('admin.profile')}}">
                                          <i class="ti-user"></i> Profile
                                      </a>
                                  </li>
                                  
                                  <li class="waves-effect waves-light">
                                      <a href="{{route('admin.logout')}}">
                                          <i class="ti-lock"></i> Logout
                                      </a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

                @include('includes.admin_nav')

          <div class="pcoded-content">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="page-header-title">
                                <h5 class="m-b-10">@yield('adpagename')</h5>
                                {{-- <p class="m-b-0">Welcome to Mega Able</p> --}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            {{-- <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="#"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
              <div class="pcoded-inner-content">

                    @yield('admincontent')
                  
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
              <!-- Required Jquery -->
    <script type="text/javascript" src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}} "></script>
    <script type="text/javascript" src="{{asset('assets/js/popper/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap/js/bootstrap.min.js')}} "></script>
    <script type="text/javascript" src="{{asset('assets/pages/widget/excanvas.js')}}"></script>
    <!--datatables -->
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.js') }}"></script>
    <!-- waves js -->
    <script src="{{asset('assets/pages/waves/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('assets/js/jquery-slimscroll/jquery.slimscroll.js')}} "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('assets/js/modernizr/modernizr.js')}} "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="{{asset('assets/js/SmoothScroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}} "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{asset('assets/js/chart.js/Chart.js')}}"></script>
   
    <!-- menu js -->
    <script src="{{asset('assets/js/pcoded.min.js')}}"></script>
    <script src="{{asset('assets/js/vertical-layout.min.js')}} "></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{asset('assets/pages/dashboard/custom-dashboard.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/script.js')}} "></script>
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/page.js') }}"></script>
    <script src="{{ asset('js/dropzone.js') }}"></script>
    

    @yield('script')
  <script>
    function thisForm(){
        $("#btns").text('Please Wait...');
        $("#btns").attr('disabled', true);
    }
  </script>
       <script>
        $(document).ready(function() {
          //  setTimeout(function() {
          //    $("#alert").fadeOut();
          //  },1000);
          setInterval(() => {
        $.get('{{route("getord")}}',(data) => {
         //  console.log(data);
            $(".ordnum").text(data);
            //$(".ordnumda").text(data);
        });
    },2000);
    
           $(".pfeatured_image").change(function(){
    let file = $(".pfeatured_image").get(0).files[0];
    let reader = new FileReader();
    reader.onload = function(){
      $(".passimg").show();
    $(".passimg").attr('src', reader.result);
    }
    reader.readAsDataURL(file);
  });
  $("#images").change(function(){
    // let file = $("#images").get(0).files[0];
    if (this.files && this.files[0]) {
  for (var i = 0; i < this.files.length; i++) {
    var reader = new FileReader();
    reader.onload = imageIsLoaded;
    reader.readAsDataURL(this.files[i]);
  }
}
function imageIsLoaded(e) {
    console.log(e);
    let exp = new Date().getTime();  
    $('#gimg').append('<img src=' + e.target.result + ' id="rmimg'+exp+'" class="mx-2 my-2"  style="cursor:pointer;" title="remove" width="60px" height="60px">');
   
    $(document).on("click","#rmimg"+exp, function(){
        $(this).remove();
    });
    // $("#remove"+exp).click(function(){
    //     $("#rmimg"+exp).remove();
    // });
    // <sup id="remove'+exp+'" class="badge badge-danger">&times;</sup>
}   
  });
        });
       </script>
</body>
</html>