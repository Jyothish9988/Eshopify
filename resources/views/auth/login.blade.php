<!DOCTYPE html>
<html lang="en">


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="home/assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="home/assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="home/assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="home/assets/images/icons/site.html">
    <link rel="mask-icon" href="home/assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="home/assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="home/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="home/assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="home/assets/css/style.css">
</head>

<body>
    <div class="page-wrapper">

@include('home.header');





@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


        <main class="main">
          

            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('home/assets/images/backgrounds/login-bg.jpg')">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
	            			<ul class="nav nav-pills nav-fill" role="tablist">
							    <li class="nav-item">
							        <a class="nav-link" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="true">Sign In</a>
							    </li>
							    <li class="nav-item">
							        <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="tfalseue">Signup</a>
							    </li>
							</ul>
							<div class="tab-content">
							    
							    <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
							    	
                                    
                                    
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




                                <div class="tab-pane fade" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">


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
							</div><!-- End .tab-content -->
						</div><!-- End .form-tab -->
            		</div><!-- End .form-box -->
            	</div><!-- End .container -->
            </div><!-- End .login-page section-bg -->
        </main><!-- End .main -->

        <footer class="footer footer-2">
            
            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p><!-- End .footer-copyright -->
                    <ul class="footer-menu">
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul><!-- End .footer-menu -->

                    <div class="social-icons social-icons-color">
                        <span class="social-label">Social Media</span>
                        <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                        <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                        <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                        <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                        <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                    </div><!-- End .soial-icons -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->


     
    
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



    
                                                        </body>
                                            </html>