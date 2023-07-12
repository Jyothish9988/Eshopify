
<footer class="footer footer-2">
           

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright © 2023 Eshopify. All Rights Reserved.</p><!-- End .footer-copyright -->
                    <ul class="footer-menu">
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul><!-- End .footer-menu -->

                   
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->


        <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>


        <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->
        <div class="mobile-menu-container mobile-menu-light">
            <div class="mobile-menu-wrapper">
                <span class="mobile-menu-close"><i class="icon-close"></i></span>

                <form action="{{ url('search_product') }}" method="get" class="mobile-search">
                    <label for="mobile-search" class="sr-only">Search</label>
                    <input type="search" class="form-control" name="search"  placeholder="Search in..." required>
                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                </form>


           
                
                <nav class="mobile-nav">
                    <ul class="mobile-menu">

                        @if (Route::has('login'))
                        @auth
                        <li class="active">
                            <a href="{{url('/redirect')}}">Home</a>  
                        </li>
                        @else
                        <li class="active">
                            <a href="{{url('/')}}">Home</a>  
                        </li>
                        @endauth
                        @endif

                                @if (Route::has('login'))
                                @auth
                                <li>
                                    <a href="{{ url('address') }}">My Account</a>
                                </li>
                                @endauth
                                @endif

                                @if (Route::has('login'))
                                @auth
                                <li>
                                    <a href="" >Orders</a>


                                </li>
                                @endauth
                                @endif


                                @if (Route::has('login'))
                                @auth
                                <li>
                                    <a href="{{ url('showcart') }}" class="">Cart &nbsp;({{$count}})</a>

                                    
                                </li>
                                @endauth
                                @endif



                        <li>
                            <a href="">Shop</a>
                            
                            <ul>
                            @foreach($data as $category)
                                <li><a href="{{ url('product_category', $category->category_name) }}">{{ $category->category_name }}</a></li>
                            @endforeach
                            </ul>
                           
                        </li>
                    
                   
                       
                    </ul>
                </nav><!-- End .mobile-nav -->

                <!-- <div class="social-icons">
                    <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                </div> -->
            </div><!-- End .mobile-menu-wrapper -->
        </div><!-- End .mobile-menu-container -->
    </div>
    
    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group">
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
    </div>

    <div class="form-group">
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
    </div>

    <div class="form-group">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
            <label class="custom-control-label" for="remember_me">{{ __('Remember me') }}</label>
        </div>
    </div>

    <div class="form-footer">
        @if (Route::has('password.request'))
            <a class="forgot-link" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
        @endif

        <button type="submit" class="btn btn-outline-primary-2">
            <span>{{ __('Log in') }}</span>
            <i class="icon-long-arrow-right"></i>
        </button>
    </div>
</form>

                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <label for="name">{{ __('Name') }}</label>
        <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
    </div>

    <div class="form-group">
        <label for="email">{{ __('Email') }}</label>
        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required>
    </div>

    <div class="form-group">
        <label for="phone">{{ __('Phone') }}</label>
        <input id="phone" class="form-control" type="number" name="phone" :value="old('phone')" required>
    </div>

    <div class="form-group">
        <label for="password">{{ __('Password') }}</label>
        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
    </div>

    <div class="form-group">
        <label for="password_confirmation">{{ __('Confirm Password') }}</label>
        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
    </div>

    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="terms" name="terms" required>
                <label class="custom-control-label" for="terms">
                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                    ]) !!}
                </label>
            </div>
        </div>
    @endif

    <div class="form-footer">
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <button type="submit" class="btn btn-outline-primary-2">
            <span>{{ __('Register') }}</span>
            <i class="icon-long-arrow-right"></i>
        </button>
    </div>
</form>

                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->


    
<!-- ===================Popup============================ -->
    <!-- <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="home/assets/images/popup/newsletter/logo.png" class="logo" alt="logo" width="60" height="15">
                            <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                            <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products.</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>go</span></button>
                                    </div>
                                </div>
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="home/assets/images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- ===================Popup============================ -->



    <!-- Plugins JS File -->
    <script src="home/assets/js/jquery.min.js"></script>
    <script src="home/assets/js/bootstrap.bundle.min.js"></script>
    <script src="home/assets/js/jquery.hoverIntent.min.js"></script>
    <script src="home/assets/js/jquery.waypoints.min.js"></script>
    <script src="home/assets/js/superfish.min.js"></script>
    <script src="home/assets/js/owl.carousel.min.js"></script>
    <script src="home/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="home/assets/js/main.js"></script>
    <script src="home/assets/js/demos/demo-21.js"></script>



    