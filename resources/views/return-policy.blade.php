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
                        <li>Return Policy</li>
                    </ul>
                </div>
            </nav>
            <div class="page-header pl-4 pr-4" style="background-image: url({{asset('images/about-us.jpg')}})">
                {{-- <h3 class="page-subtitle font-weight-bold">About Us</h3> --}}
                <h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">Return Policy</h1>
                {{-- <p class="page-desc text-white mb-0">Lorem quis bibendum auctor, nisi elit consequat ipsum,<br> nec
                    sagittis sem nibh id elit.</p> --}}
            </div>
            <div class="page-content mt-10 pt-10">
               
                <section class="about-section pb-10 appear-animate" id="about">
                    <div class="container">
                        <h2 class="text-center">Return Policy</h2>
                       {!!$retp ? $retp->content : ''!!}
                    </div>
                </section>
               
                <!-- End About Section-->

            </div>
        </main>
       
    @endsection