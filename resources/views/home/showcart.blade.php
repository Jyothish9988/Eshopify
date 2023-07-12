<!DOCTYPE html>
<html lang="en">


<!-- molla/cart.html  22 Nov 2019 09:55:06 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('home/assets/images/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('home/assets/images/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/assets/images/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('home/assets/images/icons/site.html')}}">
    <link rel="mask-icon" href="{{asset('home/assets/images/icons/safari-pinned-tab.svg" color="#666666')}}">
    <link rel="shortcut icon" href="{{asset('home/assets/images/icons/favicon.ico')}}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{asset('home/assets/images/icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <script>
        function confirmDelete() {
        return confirm('Are you sure you want to delete this category?');
    }
        </script>
    <style>

    @media (max-width: 767.98px) {
        .intro-slide {
            height: 300px; /* Adjust the height value as needed */
        }
    }

    .input-field {
        width: 60px !important;
        margin-right: 10px;
    }

    .btn-cartt {
        width: 90px;
        height: 40px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        cursor: pointer;
    }

    .product-imagee {
    display: block;
    width: 100%;
    height: 250px;
}


    

    .btn-cartt:hover {
        background-color: #555;
    }

    .btn-cartt:focus {
        outline: none;
    }

    .cart-count {
  display: inline-block;
  background-color: #ff0000;
  color: #ffffff;
  font-size: 12px;
  font-weight: bold;
  padding: 2px 6px;
  border-radius: 50%;
}

.order-button {
  width: 150px;
}

td{
    text-align:center;
}
t{
    text-align:center;
}


</style>
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('home/assets/css/style.css')}}">
</head>

<body>
    <div class="page-wrapper">


    @include('home.header')

    
        <main class="main">
        	<div class="page-header text-center" style="background-image: url('home/assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Shopping Cart<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="cart">
	                <div class="container">
 <!-- ------------------alert------------------------- -->
                         @if(session()->has('message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->

            <!-- ------------------alert------------------------- -->
            @if(session()->has('messages'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('messages')}}
    </div>
@endif
<!-- -------------------------alert end--------------- -->
	                	<div class="row">
	                		<div class="col-lg-9">
                            <table class="table table-cart table-mobile">
    <thead>
        <tr>
            
            <th>Product</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Cancel</th>
            
        </tr>
    </thead>

    <tbody>
        @foreach($cart as $carts)
        <tr>
            <td >
                <div >
                    <figure>
                        <a href="#">
                            <img src="/productimage/{{$carts->image}}" height="150px" width="150px">
                        </a>
                    </figure>
                </div><!-- End .product -->
            </td>
            <td>{{$carts->title}}</td>
            <td class="price-col">{{$carts->price}}</td>
            <td class="quantity-col">
                <div class="cart-product-quantity">
                    <input type="text" class="form-control" value="{{$carts->quantity}}" readonly data-decimals="0" required>
                </div>
            </td>
            <td class="total-col">{{$carts->total_price}}</td>
            <td class="remove-col" align="Center"><a href="{{url('delete_cart',$carts->id)}}" onclick="return confirmDelete()" class="btn-remove"><i class="icon-close"></i></a></td>
           
            <td class="order-button">
                <a href="{{url('order_now',$carts->id)}}" class="btn btn-outline-primary-2 btn-order btn-block">Order Now</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

	                			<div class="cart-bottom">
			            			<!-- <div class="cart-discount">
			            				<form action="#">
			            					<div class="input-group">
				        						<input type="text" class="form-control" required placeholder="coupon code">
				        						<div class="input-group-append">
													<button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
												</div>
			        						</div>
			            				</form>
			            			</div> -->

			            			<a href="#" onclick='window.location.reload()' class="btn btn-outline-dark-2"><span>UPDATE CART</span><i class="icon-refresh"></i></a>
		            			</div><!-- End .cart-bottom -->
	                		</div><!-- End .col-lg-9 -->
	                		<aside class="col-lg-3">
	                			<div class="summary summary-cart">
	                				<h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

	                				<table class="table table-summary">
	                					<tbody>
	                						<tr class="summary-subtotal">
	                							<td>Subtotal:</td>
	                							<td>₹{{$total_price}}</td>
	                						</tr><!-- End .summary-subtotal -->
	                						<tr class="summary-shipping">
	                							<td>Shipping:</td>
	                							<td>&nbsp;</td>
	                						</tr>

	                						<tr class="summary-shipping-row">
	                							<td>
													<div class="custom-control custom-radio">
														<input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
														<label class="custom-control-label" for="free-shipping">Free Shipping</label>
													</div><!-- End .custom-control -->
	                							</td>
	                							<td>$0.00</td>
	                						</tr><!-- End .summary-shipping-row -->

	                						<tr class="summary-shipping-row">
	                							<td>
	                								<div class="custom-control custom-radio">
														<input type="radio" id="standart-shipping" name="shipping" class="custom-control-input">
														<label class="custom-control-label" for="standart-shipping">Standart:</label>
													</div><!-- End .custom-control -->
	                							</td>
	                							<td>$10.00</td>
	                						</tr><!-- End .summary-shipping-row -->

	                						<tr class="summary-shipping-row">
	                							<td>
	                								<div class="custom-control custom-radio">
														<input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
														<label class="custom-control-label" for="express-shipping">Express:</label>
													</div><!-- End .custom-control -->
	                							</td>
	                							<td>$20.00</td>
	                						</tr><!-- End .summary-shipping-row -->
                                            
	                						<tr class="summary-shipping-estimate">
	                							<div class="card-body">
								    					<h3 class="card-title">Billing Address</h3><!-- End .card-title -->

														<p>{{$carts->name}}<br>
														{{$carts->house}}<br>
														{{$carts->address}}<br>
                                                        {{$carts->dphone}}<br>
														{{$carts->email}}<br>
														<a href="{{ url('address') }}">Edit <i class="icon-edit"></i></a></p>
								    				</div><!-- End .card-body -->
	                						</tr>
                                       
                                            <!-- End .summary-shipping-estimate -->

	                						<tr class="summary-total">
	                							<td>Total:</td>
	                							<td>₹{{$total_price}}</td>
	                						</tr><!-- End .summary-total -->
	                					</tbody>
	                				</table><!-- End .table table-summary -->

	                				@if(!empty($carts->address) && !empty($carts->pin))
                                        <a href="{{url('checkout_redirect')}}" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT CART</a>
                                    @else
                                    <a href="{{ url('address') }}" class="btn btn-outline-primary-2 btn-order btn-block">ADD ADDRESS TO CHECKOUT</a>
                                    @endif
	                			</div><!-- End .summary -->

		            			<a href="/redirect" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
	                		</aside><!-- End .col-lg-3 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .cart -->
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
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

   
    <!-- Plugins JS File -->
    <script src="{{asset('home/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('home/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('home/assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{asset('home/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('home/assets/js/superfish.min.js')}}"></script>
    <script src="{{asset('home/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('home/assets/js/bootstrap-input-spinner.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('home/assets/js/main.js')}}"></script>
</body>


<!-- molla/cart.html  22 Nov 2019 09:55:06 GMT -->
</html>