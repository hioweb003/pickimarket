<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="owl-carousel owl-theme owl-middle row cols-xl-4 cols-md-3 cols-sm-2 cols-2"
                data-owl-options="{
                'items': 1,
                'margin': 0,
                'dots': false,
                'autoplay': true,
                'responsive': {
                    '0': {
                        'items': 1
                    },
                    '576': {
                        'items': 1
                    },
                    '768': {
                        'items': 2
                    },
                    '992': {
                        'items': 3
                    }
                }
            }">
                <div class="icon-box icon-box-side slide-icon-box justify-content-center">
                    <i class="icon-box-icon d-icon-truck" style="font-size: 46px;">
                    </i>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">Shipping &amp; Return</h4>
                        <p>Seamless Shipping</p>
                    </div>
                </div>
                <div class="icon-box icon-box-side slide-icon-box justify-content-center">
                    <i class="icon-box-icon d-icon-service">
                    </i>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">Customer Support 24/7</h4>
                        <p>Instant access to perfect support</p>
                    </div>
                </div>
                <div class="icon-box icon-box-side slide-icon-box justify-content-center">
                    <i class="icon-box-icon d-icon-secure">
                    </i>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">100% Secure Payment</h4>
                        <p>We ensure secure payment!</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-middle">
            <div class="container p-0">
                <div class="row">
                    <div class="col-lg-2 col-md-12">
                        <div class="widget widget-about">
                            <a href="{{url('/')}}" class="logo-footer">
                                <img src="{{asset('images/logo-footer.png')}}" alt="logo-footer" width="154"
                                    height="43" />
                            </a>
                            {{-- <div class="widget-body">
                                <p>
                                </p>
                                <a href="mailto:mail@example.com">Riode@example.com</a>
                            </div> --}}
                        </div>
                        <!-- End Widget -->
                    </div>
                    <div class="col-lg-10 col-md-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="widget">
                                    <h4 class="widget-title">Help Center</h4>
                                    <ul class="widget-body">
                                        <li>
                                            <a href="{{route('faq')}}">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="{{route('shpoli')}}">Shipping Policy</a>
                                        </li>
                                        <li>
                                            <a href="{{route('trms')}}">Terms and Conditions</a>
                                        </li>
                                        <li>
                                            <a href="{{route('delip')}}">Delivery Policy</a>
                                        </li>
                                        <li>
                                            <a href="{{route('priv')}}">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="{{route('rfudppoi')}}">Return Policy</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Widget -->
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="widget">
                                    <h4 class="widget-title text-uppercase">Make Money with picki Market</h4>
                                    <ul class="widget-body">
                                        <li>
                                            <a href="#">Sell on Pickimarket</a>
                                        </li>
                                        <li>
                                            <a href="#">Become a Sales Consultant</a>
                                        </li>
                                        <li>
                                            <a href="#">Become a Logistics Partner</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Widget -->
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="widget">
                                    <h4 class="widget-title text-uppercase">Connect with Us</h4>
                                    <ul class="widget-body">
                                        <li class="d-flex">
                                            <a href="https://web.facebook.com/pickimarket" class="social-link social-facebook fab fa-facebook-f"></a>
                                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                            <a href="#" class="social-link social-linkedin fab fa-linkedin-in mr-0"></a>
                                        </li>
                                    </ul>
                                    <h4 class="widget-title text-uppercase mt-1">Download our app</h4>
                                    <ul class="widget-body">
                                        <li class="d-flex">
                                            <a href="#" id="appstore" title="Get it on the App Store">
                                                <div class="d-flex apstore">
                                                    <i class="fab fa-apple mr-2 py-2 mt-3 text-white"></i>
                                                <span class="mt-1">
                                                    <small class="text-white">Download on the</small>
                                                    <h6 class="text-white">App Store</h6>
                                                </span>
                                            </div>
                                            </a>
                                            <a href="#" id="googleplay" title="Get it on Google Play">
                                                <div class="d-flex gplay">
                                                        <i class="fab fa-google-play mr-2 py-2 mt-3 text-white"></i>
                                                    <span class="mt-1">
                                                        <small class="text-white">GET IT ON</small>
                                                        <h6 class="text-white">Google Play</h6>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Widget -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Footer Middle -->
        <div class="footer-bottom">
            <div class="container p-0">
                <div class="footer-left">
                    <figure class="payment">
                        <img src="images/payment.png" alt="payment" width="159" height="29" />
                    </figure>
                </div>
                <div class="footer-center">
                    <p class="copyright">Picki Market &copy; {{date('Y')}}. All Rights Reserved</p>
                </div>
                <div class="footer-right">
                    {{-- <div class="social-links">
                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in mr-0"></a>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- End FooterBottom -->
    </div>
</footer>