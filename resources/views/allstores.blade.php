@extends('layouts.forntend')
  @section('title')
  PickiMarket | Online Shopping for Computers, Laptops, Phones, Accessories &amp; More
  @endsection
  @section('fcontent')   
  <main class="main">
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{url('/')}}"><i class="d-icon-home"></i></a></li>
                <li>Our Stores</li>
            </ul>
        </div>
    </nav>
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