@extends('layouts.forntend')
  @section('title')
  PickiMarket | Online Shopping for Computers, Laptops, Phones, Accessories &amp; More
  @endsection
  @section('fcontent')   
  <main class="main">
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('vendor.login')}}"><i class="d-icon-home"></i></a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </nav>
    <div class="page-header" style="background-image: url({{asset('images/contact-us.jpg')}})">
        <h1 class="page-title font-weight-bold text-capitalize ls-l">Contact Us</h1>
    </div>
    <div class="page-content mt-10 pt-7">
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 ls-m mb-4">
                        <div class="grey-section d-flex align-items-center h-100">
                            <div>
                                <h4 class="mb-2 ml-2 text-capitalize">Headquarters</h4>
                                <p>{{$contpg ? $contpg->address : ''}}</p>

                                <h4 class="mb-2 ml-2 text-capitalize">Phone Number</h4>
                                <p>
                                    <?php 
                                      $phs = $contpg ? explode(',',$contpg->phone) : '';
                                      $ems = $contpg ? explode(',',$contpg->email) : '';
                                    ?>
                                    @if (!empty($phs))
                                    @foreach ($phs as $ph)
                                    <a href="tel:{{$ph}}">{{$ph}}</a><br>
                                    @endforeach
                                    @endif
                                    {{-- <a href="tel:#">1.800.458.56</a> --}}
                                </p>

                                <h4 class="mb-2 ml-2 text-capitalize">Support</h4>
                                <p class="mb-4">
                                   @if (!empty($ems))
                                   @foreach ($ems as $em)
                                   <a href="mailto:{{$em}}">{{$em}}</a><br>
                                   @endforeach
                                   @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6 d-flex align-items-center mb-4">
                        <div class="w-100">
                            @include('includes.errors')
                            @include('includes.success')
                            <form class="pl-lg-2" action="{{route('contactsend')}}" method="post">
                                @csrf
                                <h4 class="ls-m font-weight-bold">Let’s Connect</h4>
                                <p>Your email address will not be published. Required fields are
                                    marked *</p>
                                <div class="row mb-2">
                                    <div class="col-12 mb-4">
                                        <textarea class="form-control" name="message" required
                                            placeholder="Message*">{{old('message')}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input class="form-control" name="name" type="text" placeholder="Name *" required value="{{old('name')}}">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input class="form-control" name="email" type="email" placeholder="Email *" required value="{{old('email')}}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-rounded cbtn">Submit<i
                                        class="d-icon-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section-->

        <section class="store-section mt-6 pt-10 pb-8">
            <div class="container">
                <h2 class="title title-center mb-7 text-normal">Our store</h2>
                <div class="row cols-sm-2 cols-lg-4">
                    @foreach ($allstores as $item)
                    <div class="store">
                        <figure class="banner-radius" style="cursor: pointer" onclick="window.location.href='#'">
                            <img src="images/subpages/store-1.jpg" alt="store" width="280" height="280">
                            <h4 class="overlay-visible text-center">{{$item->store_name}}</h4>
                            <div class="overlay overlay-transparent">
                                <a class="mt-8 text-center" href="mailto:{{$item->email}}">{{$item->email}}</a>
                                <a href="tel:#" class="text-center">Phone: {{$item->phone}}</a>
                                <div class="social-links mt-1">
                                    <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                    <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                    <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    <a href="#" class="social-link fab fa-instagram"></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </section>
        <!-- End Store Section -->

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div class="grey-section google-map" id="googlemaps" style="height: 386px"></div>
        <!-- End Map Section -->
    </div>
</main>
<!-- End Main -->
@endsection