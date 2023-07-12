<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	
	<title>Privy App A Mobile App Bootstrap Responsive WebTemplate | Single :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Privy App Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<meta charset utf="8">
	<!--font-awsome-css-->
	<link rel="stylesheet" href="{{asset('staff/css/font-awesome.min.css')}}">
	<!--bootstrap-->
	<link href="{{asset('staff/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<!--custom css-->
	<link href="{{asset('staff/css/blog.css')}}" rel="stylesheet" type='text/css' media="all" />
	<link href="{{asset('staff/css/single.css')}}" rel="stylesheet" type='text/css' media="all" />
	<link href="{{asset('staff/css/style.css')}}" rel="stylesheet" type="text/css" />
	<!--component-css-->
	<!-- web-fonts -->
	
	<link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<!-- //web-fonts -->


</head>

<body>
	<div class="body-back">
		<div class="masthead pdng-stn1">
			<div id="menu" class="panel" role="navigation">
				<div class="wrap-content">
					<!-- /menu -->
					<div class="profile-menu text-center">
						<h3>MENU</h3>
						<div class="pro-menu">
							<ul>
								<!-- <li class="active"><a href="main.html">Home</a></li> -->
								<li><a href="services.html">Account</a></li>
								<li><a href="{{ url('staff_order_view') }}">Orders</a></li>
								<li><a href="{{ url('staff_deliveries_view') }}">Deliveries</a></li>
								
								<li><a href="contact.html">Contact</a></li>
								<li>
								    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
									<form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">@csrf</form>
								</li>
							</ul>
						</div>
					</div>
					<!-- //menu -->
				</div>
			</div>
			<div class="phone-box wrap push" id="home">
				<div class="menu-notify">
					<div class="profile-left">
						<a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
					</div>
					<div class="Profile-mid">
						<h5 class="pro-link"><a href="main.html">Staff APP</a></h5>
					</div>
					<div class="Profile-right">
						<a href="#small-dialog" class="sign-in popup-top-anim"> <i class="fa fa-user"></i></a>
						<!-- modal -->
						<div id="small-dialog" class="mfp-hide">
							<div class="login-modal">
								<div class="booking-info">
									<h3><a href="main.html">Privy App</a></h3>

								</div>
								<div class="login-form_agile">
									<form action="#" method="post">
										<p>User Name </p>
										<input type="text" name="Name" required="" />
										<p>User Password</p>
										<input type="password" name="Password" required="" />
										<div class="check-text">
											<ul>
												<li>
													<input type="checkbox" id="brand" value="">
													<label for="brand"><span></span> Remember me ?</label>
												</li>
												<li> <a href="#">Forgot password?</a> </li>
											</ul>
											<div class="clearfix"> </div>
										</div>
										<input type="submit" value="Sign In">
									</form>
									<p>Don’t have an account ?<a href="#small-dialog1" class="sign-in popup-top-anim"> Sign Up</a></p>
								</div>
							</div>
						</div>
						<!-- //modal -->
						<!-- modal-two -->
						<div id="small-dialog1" class="mfp-hide">
							<div class="login-modal">
								<div class="booking-info">
									<h3><a href="main.html">Privy App</a></h3>

								</div>
								<div class="login-form_agile signup-form">
									<form action="#" method="post">
										<p>User Name </p>
										<input type="text" name="Name" required="" />
										<p>User Email </p>
										<input type="text" name="Email" required="" />
										<p>User Password</p>
										<input type="password" name="Password" placeholder="" required="" />
										<div class="check-text">
											<input type="checkbox" id="brand1" value="">
											<label for="brand1"><span></span>I accept the terms of use</label>
										</div>
										<input type="submit" value="Sign Up">
									</form>
								</div>
							</div>
						</div>
						<!-- //modal-two -->

					</div>
					<div class="clearfix"></div>
				</div>
				<!-- /banner -->
				<div class="banner_inn_sec">
				</div>
				<!-- //banner -->
				<!--/blog-->
                