<!DOCTYPE html>
<html lang="en">


<!-- molla/product-centered.html  22 Nov 2019 10:03:13 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/images/icons/apple-touch-icon.png')}}">
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

    
    <link rel="stylesheet" href="{{asset('home/assets/css/plugins/owl-carousel/owl.carousel.css')}} ">

    <link rel="stylesheet" href="{{asset('home/assets/css/plugins/magnific-popup/magnific-popup.css')}}">

    <!-- Main CSS File -->
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
  border-radius: 60%;
}

</style>
    <link rel="stylesheet" href="{{asset('home/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/plugins/nouislider/nouislider.css')}}">
</head>

<body>
    <div class="page-wrapper">

    

    @include('home.header')


        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Centered</li>
                    </ol>

                    <nav class="product-pager ml-auto" aria-label="Product">
                        <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">
                            <i class="icon-angle-left"></i>
                            <span>Prev</span>
                        </a>

                        <a class="product-pager-link product-pager-next" href="#" aria-label="Next" tabindex="-1">
                            <span>Next</span>
                            <i class="icon-angle-right"></i>
                        </a>
                    </nav><!-- End .pager-nav -->
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="product-details-top mb-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery product-gallery-vertical">
                                    <div class="row">
                                        <figure class="product-main-image">
                                            <img id="product-zoom" src="/productimage/{{$data->image}}" data-zoom-image="/productimage/{{$data->image}}" alt="product image">

                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                <i class="icon-arrows"></i>
                                            </a>
                                        </figure><!-- End .product-main-image -->

                                        <div id="product-zoom-gallery" class="product-image-gallery">
                                            <a class="product-gallery-item active" href="/productimage/{{$data->image1}}" data-image="/productimage/{{$data->image1}}" data-zoom-image="/productimage/{{$data->image1}}">
                                                <img src="/productimage/{{$data->image1}}" alt="product side">
                                            </a>

                                            <a class="product-gallery-item" href="#" data-image="/productimage/{{$data->image2}}" data-zoom-image="/productimage/{{$data->image3}}">
                                                <img src="/productimage/{{$data->image1}}" alt="product cross">
                                            </a>

                                            <a class="product-gallery-item" href="#" data-image="/productimage/{{$data->image3}}" data-zoom-image="/productimage/{{$data->image3}}">
                                                <img src="/productimage/{{$data->image3}}" alt="product with model">
                                            </a>

                                            <a class="product-gallery-item" href="#" data-image="/productimage/{{$data->image}}" data-zoom-image="/productimage/{{$data->image}}">
                                                <img src="/productimage/{{$data->image}}" alt="product back">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="product-details product-details-centered">
                                    <h1 class="product-title">{{$data->title}}</h1>

                                <!-- End .ratings -->
                                    <!-- <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div>
                                        </div>
                                        <a class="ratings-text" href="#product-review-link" id="review-link">( Reviews )</a>
                                    </div> -->
                                <!-- End .rating-container -->
                                
                                    <div class="product-price">
                                        ₹{{$data->price}}

                                        
                                    </div>
                                    <div class="product-price">
                                    <span class="old-price"><s>Was MRP :{{$data->mrp}}</s></span><!-- End .product-price -->
                                    </div>


                                    <!-- <div class="product-content">
                                        <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero.</p>
                                    </div>

                                    <div class="details-filter-row details-row-size">
                                        <label>Color:</label>

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #cc9966;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        </div>
                                    </div> -->

                                    <div class="details-filter-row details-row-size">
                                        <label for="size">Size:</label>
                                        <div class="select-custom">
                                            <select name="size" id="size" class="form-control">
                                                <option value="#" selected="selected">{{$data->size}}</option>
                                            </select>
                                        </div>

                                        <a href="#" class="size-guide"><i class="icon-th-list"></i>size guide</a>
                                    </div>

                                    <div class="product-details-action">
                                        <!-- <div class="details-action-col">
                                            <div class="product-details-quantity">
                                                <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div> -->


                                     
                                        <div class="product-details-action">

                                            <form action="{{url('addcart',$data->id)}}" method="POST">
                                                @csrf
                                                <input type="number" id="qty"  name="quantity" class="form-control" value="1" min="1" style="width:100px" required>
                                                <br>
                                                <input class="btn-product btn-cart" type="submit" value="ADD TO CART">
                                            <!-- <a href="#" class="btn-product btn-cart" title="Add to cart"><span></span></a> -->
                                            </form>
                                            <br>
                                            <br>
<!-- ------------------alert------------------------- -->
@if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
    </div>
@endif
<!-- -------------------------alert end--------------- -->

<!-- ------------------error alert------------------------- -->
@if(session()->has('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('error')}}
    </div>
@endif
<!-- -------------------------error alert end--------------- -->

                                    </div>
                                    
                                    </div>
                                    

                                   


                                    
                                    <!-- End .product-details-action -->

                                    <!-- <div class="product-details-footer">
                                        <div class="product-cat">
                                            <span>Category:</span>
                                            <a href="#">Women</a>,
                                            <a href="#">Dresses</a>,
                                            <a href="#">Yellow</a>
                                        </div>

                                        <div class="social-icons social-icons-sm">
                                            <span class="social-label">Share:</span>
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                        </div>

                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-details-tab">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews ({{$review_count}} )</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                <div class="product-desc-content">
                                    <h3>Product Information</h3>
                                    <p>{{$data->description}} </p>
                                    

                                    
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->


                            <!-- <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                                <div class="product-desc-content">
                                    <h3>Information</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>

                                    <h3>Fabric & care</h3>
                                    <ul>
                                        <li>Faux suede fabric</li>
                                        <li>Gold tone metal hoop handles.</li>
                                        <li>RI branding</li>
                                        <li>Snake print trim interior </li>
                                        <li>Adjustable cross body strap</li>
                                        <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>
                                    </ul>

                                    <h3>Size</h3>
                                    <p>one size</p>
                                </div>
                            </div> -->


                            <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                                <div class="product-desc-content">
                                    <h3>Delivery & returns</h3>
                                    <p>We deliver to over 100 countries around the world. For full details of the delivery options we offer, please view our <a href="#">Delivery information</a><br>
                                    We hope you’ll love every purchase, but if you ever need to return an item you can do so within a month of receipt. For full details of how to make a return, please view our <a href="#">Returns information</a></p>
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                                <div class="reviews">
                                    <h3>Reviews </h3>
                                    @foreach($review as $reviews)
                                    <div class="review">
                                        <div class="row no-gutters">
                                            <div class="col-auto">
                                                <h4><a href="#">{{$reviews->name}}</a></h4>
                                                <!-- <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div>
                                                    </div>
                                                </div> -->
                                                <span class="review-date">{{$reviews->created_at}}</span>
                                            </div><!-- End .col -->
                                            <div class="col">
                                                <h4>{{$reviews->review}}</h4>

                                                <div class="review-content">
                                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum dolores assumenda asperiores facilis porro reprehenderit animi culpa atque blanditiis commodi perspiciatis doloremque, possimus, explicabo, autem fugit beatae quae voluptas!</p> -->
                                                </div><!-- End .review-content -->

                                                <div class="review-action">
                                                    <a href="{{url('review_helpful',$reviews->id)}}"><i class="icon-thumbs-up"></i>Helpful ({{$reviews->helpful}})</a>
                                                    <a href="{{url('review_unhelpful',$reviews->id)}}"><i class="icon-thumbs-down"></i>Unhelpful ({{$reviews->unhelpful}})</a>
                                                    @if($reviews->loginid == Auth::id())
                                                    <a href="{{url('review_delete',$reviews->id)}}">Delete</a>
                                                    @endif

                                                </div><!-- End .review-action -->
                                            </div><!-- End .col-auto -->
                                        </div><!-- End .row -->
                                    </div><!-- End .review -->
                                @endforeach


                                    @if (Route::has('login'))
                               
                                    @auth
                                    <form action="{{url('add_review',$data->id)}}" method="POST">
                                                @csrf
                                                <table>
                                                    <tr>
                                                        <td>
                                                <input type="text" id="qty"  name="review" class="form-control" required>
</td>
<td>
                                                
                                                <input class="btn btn-success form-control" style="width: 80%;" type="submit" value="ADD REVIEW">
</td>
</tr>
</table>
                                            <!-- <a href="#" class="btn-product btn-cart" title="Add to cart"><span></span></a> -->
                                    </form>

                                    @endauth
                                    @endif


                                </div><!-- End .reviews -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .product-details-tab -->

                    <!-- <h2 class="title text-center mb-4">You May Also Like</h2>
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-new">New</span>
                                <a href="product.html">
                                    <img src="home/assets/images/products/product-4.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                </div>

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Women</a>
                                </div>
                                <h3 class="product-title"><a href="product.html">Brown paperbag waist <br>pencil skirt</a></h3>
                                <div class="product-price">
                                    $60.00
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div>
                                    </div>
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div>

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #cc9966;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #806b3e;"><span class="sr-only">Color name</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-out">Out of Stock</span>
                                <a href="product.html">
                                    <img src="home/assets/images/products/product-6.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                </div>

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                            </figure>

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Jackets</a>
                                </div>
                                <h3 class="product-title"><a href="product.html">Khaki utility boiler jumpsuit</a></h3>
                                <div class="product-price">
                                    <span class="out-price">$120.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div>
                                    <span class="ratings-text">( 6 Reviews )</span>
                                </div>
                            </div>
                        </div>

                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-top">Top</span>
                                <a href="product.html">
                                    <img src="home/assets/images/products/product-11.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                </div>

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                            </figure>

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Shoes</a>
                                </div>
                                <h3 class="product-title"><a href="product.html">Light brown studded Wide fit wedges</a></h3>
                                <div class="product-price">
                                    $110.00
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div>
                                    </div>
                                    <span class="ratings-text">( 1 Reviews )</span>
                                </div>

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #8b513d;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #d2b99a;"><span class="sr-only">Color name</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="home/assets/images/products/product-10.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                </div>

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                            </figure>

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Jumpers</a>
                                </div>
                                <h3 class="product-title"><a href="product.html">Yellow button front tea top</a></h3>
                                <div class="product-price">
                                    $56.00
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 0%;"></div>
                                    </div>
                                    <span class="ratings-text">( 0 Reviews )</span>
                                </div>
                            </div>
                        </div>

                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="home/assets/images/products/product-7.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                </div>

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                            </figure>

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Jeans</a>
                                </div>
                                <h3 class="product-title"><a href="product.html">Blue utility pinafore denim dress</a></h3>
                                    $76.00
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div>
                                    </div>
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div>
                            </div>
                        </div>
                    </div> -->







                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <footer class="footer">
        	
	        <div class="footer-bottom">
	        	<div class="container">
	        		<p class="footer-copyright">Copyright © 2023 Eshopify. All Rights Reserved.</p><!-- End .footer-copyright -->
	        		<figure class="footer-payments">
	        			<img src="home/assets/images/payments.png" alt="Payment methods" width="272" height="20">
	        		</figure><!-- End .footer-payments -->
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="{{url('search')}}" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
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
                </nav>

           
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

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
    <script src="{{asset('home/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('home/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('home/assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{asset('home/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('home/assets/js/superfish.min.js')}}"></script>
    <script src="{{asset('home/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('home/assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{asset('home/assets/js/jquery.elevateZoom.min.js')}}"></script>
    <script src="{{asset('home/assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{asset('home/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('home/assets/js/main.js')}}"></script>
</body>


<!-- molla/product-centered.html  22 Nov 2019 10:03:20 GMT -->
</html>