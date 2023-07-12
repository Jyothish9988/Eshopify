<!DOCTYPE html>
<html lang="en">


<!-- molla/contact.html  22 Nov 2019 10:04:01 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eshopify</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('home/assets/images/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('home/assets/images/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/assets/images/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('home/assets/images/icons/site.html')}}">
    <link rel="mask-icon" href="{{asset('home/assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="shortcut icon" href="{{asset('home/assets/images/icons/favicon.ico')}}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{asset('home/assets/images/icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('home/assets/css/style.css')}}">
</head>

<body>
    <div class="page-wrapper">


    @include('home.header')


        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="container">
	        	<div class="page-header page-header-big text-center" style="background-image: url('home/assets/images/contact-header-bg.jpg')">
        			<h1 class="page-title text-white">Contact us<span class="text-white">keep in touch with us</span></h1>
	        	</div><!-- End .page-header -->
            </div><!-- End .container -->

            <div class="page-content pb-0">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-6 mb-2 mb-lg-0">
                			<h2 class="title mb-1">Contact Information</h2><!-- End .title mb-2 -->
                			<p class="mb-3">Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
                			<div class="row">
                				<div class="col-sm-7">
                					<div class="contact-info">
                						<h3>The Office</h3>

                						<ul class="contact-list">
                							<li>
                								<i class="icon-map-marker"></i>
	                							70 Washington Square South New York, NY 10012, United States
	                						</li>
                							<li>
                								<i class="icon-phone"></i>
                								<a href="tel:#">+92 423 567</a>
                							</li>
                							<li>
                								<i class="icon-envelope"></i>
                								<a href="mailto:#">info@Molla.com</a>
                							</li>
                						</ul><!-- End .contact-list -->
                					</div><!-- End .contact-info -->
                				</div><!-- End .col-sm-7 -->

                				<div class="col-sm-5">
                					<div class="contact-info">
                						<h3>The Office</h3>

                						<ul class="contact-list">
                							<li>
                								<i class="icon-clock-o"></i>
	                							<span class="text-dark">Monday-Saturday</span> <br>11am-7pm ET
	                						</li>
                							<li>
                								<i class="icon-calendar"></i>
                								<span class="text-dark">Sunday</span> <br>11am-6pm ET
                							</li>
                						</ul><!-- End .contact-list -->
                					</div><!-- End .contact-info -->
                				</div><!-- End .col-sm-5 -->
                			</div><!-- End .row -->
                		</div><!-- End .col-lg-6 -->
                		<div class="col-lg-6">
                			<h2 class="title mb-1">Got Any Questions?</h2><!-- End .title mb-2 -->
                			<p class="mb-2">Use the form below to get in touch with the sales team</p>


<!-- ------------------alert------------------------- -->
@if(session()->has('message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->


<!-- ------------------------------------------------------------------------------------------------------------ -->
                                <form action="{{url('uploadcontact')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                				<div class="row">
                					<div class="col-sm-6">
                                        <label for="cname" class="sr-only">Name</label>
                						<input type="text" name="name" class="form-control" id="cname" placeholder="Name *" required>
                					</div><!-- End .col-sm-6 -->

                					<div class="col-sm-6">
                                        <label for="cemail" class="sr-only">Email</label>
                						<input type="email" class="form-control" name="email" id="cemail" placeholder="Email *" required>
                					</div><!-- End .col-sm-6 -->
                				</div><!-- End .row -->

                				<div class="row">
                					<div class="col-sm-6">
                                        <label for="cphone" class="sr-only">Phone</label>
                						<input type="tel" class="form-control" name="phone" id="cphone" placeholder="Phone">
                					</div><!-- End .col-sm-6 -->

                					<div class="col-sm-6">
                                        <label for="csubject" class="sr-only">Subject</label>
                						<input type="text" class="form-control" name="subject" id="csubject" placeholder="Subject">
                					</div><!-- End .col-sm-6 -->
                				</div><!-- End .row -->

                                <label for="cmessage" class="sr-only">Message</label>
                				<textarea class="form-control" cols="30" rows="4" id="cmessage" name="message" required placeholder="Message *"></textarea>

                				<button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                					<span>SUBMIT</span>
            						<i class="icon-long-arrow-right"></i>
                				</button>
                			</form><!-- End .contact-form -->
<!-- -------------------------------------------------------------------------------------------------------------->





                		</div><!-- End .col-lg-6 -->
                	</div><!-- End .row -->

                	<hr class="mt-4 mb-5">

                	<div class="stores mb-4 mb-lg-5">
	                	<h2 class="title text-center mb-3">Our Stores</h2><!-- End .title text-center mb-2 -->

	                	<div class="row">
	                		<div class="col-lg-6">
	                			<div class="store">
	                				<div class="row">
	                					<div class="col-sm-5 col-xl-6">
	                						<figure class="store-media mb-2 mb-lg-0">
	                							<img src="home/assets/images/stores/img-1.jpg" alt="image">
	                						</figure><!-- End .store-media -->
	                					</div><!-- End .col-xl-6 -->
	                					<div class="col-sm-7 col-xl-6">
	                						<div class="store-content">
	                							<h3 class="store-title">Wall Street Plaza</h3><!-- End .store-title -->
	                							<address>88 Pine St, New York, NY 10005, USA</address>
	                							<div><a href="tel:#">+1 987-876-6543</a></div>

	                							<h4 class="store-subtitle">Store Hours:</h4><!-- End .store-subtitle -->
                								<div>Monday - Saturday 11am to 7pm</div>
                								<div>Sunday 11am to 6pm</div>

                								<a href="#" class="btn btn-link" target="_blank"><span>View Map</span><i class="icon-long-arrow-right"></i></a>
	                						</div><!-- End .store-content -->
	                					</div><!-- End .col-xl-6 -->
	                				</div><!-- End .row -->
	                			</div><!-- End .store -->
	                		</div><!-- End .col-lg-6 -->

	                		<div class="col-lg-6">
	                			<div class="store">
	                				<div class="row">
	                					<div class="col-sm-5 col-xl-6">
	                						<figure class="store-media mb-2 mb-lg-0">
	                							<img src="home/assets/images/stores/img-2.jpg" alt="image">
	                						</figure><!-- End .store-media -->
	                					</div><!-- End .col-xl-6 -->

	                					<div class="col-sm-7 col-xl-6">
	                						<div class="store-content">
	                							<h3 class="store-title">One New York Plaza</h3><!-- End .store-title -->
	                							<address>88 Pine St, New York, NY 10005, USA</address>
	                							<div><a href="tel:#">+1 987-876-6543</a></div>

	                							<h4 class="store-subtitle">Store Hours:</h4><!-- End .store-subtitle -->
												<div>Monday - Friday 9am to 8pm</div>
												<div>Saturday - 9am to 2pm</div>
												<div>Sunday - Closed</div>

                								<a href="#" class="btn btn-link" target="_blank"><span>View Map</span><i class="icon-long-arrow-right"></i></a>
	                						</div><!-- End .store-content -->
	                					</div><!-- End .col-xl-6 -->
	                				</div><!-- End .row -->
	                			</div><!-- End .store -->
	                		</div><!-- End .col-lg-6 -->
	                	</div><!-- End .row -->
                	</div><!-- End .stores -->




                    
                </div><!-- End .container -->
            	
            </div><!-- End .page-content -->
        </main><!-- End .main -->

    
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
                           <img src="home/home/assets/images/popup/newsletter/logo.png" class="logo" alt="logo" width="60" height="15">
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
                       <img src="home/home/assets/images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
                   </div>
               </div>
           </div>
       </div>
   </div> -->
<!-- ===================Popup============================ -->



   <!-- Plugins JS File -->
   <script src="home/home/assets/js/jquery.min.js"></script>
   <script src="home/home/assets/js/bootstrap.bundle.min.js"></script>
   <script src="home/home/assets/js/jquery.hoverIntent.min.js"></script>
   <script src="home/home/assets/js/jquery.waypoints.min.js"></script>
   <script src="home/home/assets/js/superfish.min.js"></script>
   <script src="home/home/assets/js/owl.carousel.min.js"></script>
   <script src="home/home/assets/js/jquery.magnific-popup.min.js"></script>
   <!-- Main JS File -->
   <script src="home/home/assets/js/main.js"></script>
   <script src="home/home/assets/js/demos/demo-21.js"></script>



   
</html>