<!DOCTYPE html>
<html lang="en">


<!-- molla/category.html  22 Nov 2019 10:02:48 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eshopify</title>
    <meta name="keywords" content="HTML5 Template">
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
.product-container {
    height: 90%;
}
</style>
      
      
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
    <link rel="stylesheet" href="{{asset('home/assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/plugins/nouislider/nouislider.css')}}">
</head>

<body>
    <div class="page-wrapper">


    @include('home.header')



        <main class="main">
        	<div class="page-header text-center" style="background-image: url('home/assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">New Arrivals<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/redirect">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container" >
               
                	<div class="row" style="display: flex; justify-content: center; align-items: center;">
                		<div class="col-lg-9">
                			<div class="toolbox">
                				
                				<div class="toolbox-right">
                					
                					<div class="toolbox-layout">
                					
<div class="header-search">
    <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
    <form action="{{ url('search_product') }}" method="GET" class="header-search-wrapper">
        <label for="q" class="sr-only">Search</label>
        <input type="search" class="form-control" name="search" id="q" placeholder="Search in..." required>
        <button type="submit" class="btn btn-success"><i class="icon-search"></i></button>
    </form>
</div>

                						

                				
                					</div><!-- End .toolbox-layout -->
                				</div><!-- End .toolbox-right -->
                			</div><!-- End .toolbox -->

                            <div class="products mb-3">
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





<div class="heading heading-center mb-3">
    <h2 class="title">NEW ARRIVALS </h2><!-- End .title -->

    <ul class="nav nav-pills justify-content-center" role="tablist">


    @if (Route::has('login'))
                                @auth
                                    
                                <li class="nav-item">
                                    <a class="nav-link active"  href="{{url('/redirect')}}" >All</a>
                                </li>

                                @else
                                    
                                    <li class="nav-item">
                                    <a class="nav-link active"  href="{{url('/')}}" >All</a>
                                </li>

                                @endauth
                                @endif
            @foreach($data as $category)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('product_category', $category->category_name) }}" >{{ $category->category_name }}</a>
                </li>
            @endforeach



        


    </ul>
</div><!-- End .heading -->

                                
<div class="row">
    @foreach($products as $product)
        <div class="col-6 col-md-4 col-lg-4">
            <div class="product product-7 text-center product-container" style="height: 100%;">
                <figure class="product-media">
                    <span class="product-label label-new">New</span>
                    <a href="{{ url('productinfo', $product->id) }}">
                    <img src="/productimage/{{$product->image}}" height="120" width="120" alt="Product image" class="product-imagee">
                    </a>

                    <div class="product-action-vertical">
                        <!-- <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a> -->
                        <a href="popup/{{ url('productinfo', $product->id) }}" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        <!-- <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a> -->
                    </div><!-- End .product-action-vertical -->

                    <div class="product-action">
                        <form action="{{url('addcart',$product->id)}}" method="POST">
                            @csrf
                            <table>
                                <tr>
                                    <td>
                                        <input type="number" id="qty"  name="quantity" class="form-control" value="1" min="1" style="width:100px" required>
                                    </td>
                                    <td>
                                        <input class="btn-product btn-cart" type="submit" value="ADD TO CART">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div><!-- End .product-action -->
                </figure><!-- End .product-media -->

                <div class="product-body">
                    <div class="product-cat">
                        <a href="#">{{$product->category}}</a>
                    </div><!-- End .product-cat -->
                    <h3 class="product-title"><a href="product.html">{{$product->title}}</a></h3><!-- End .product-title -->
                    <div class="product-price">
                        ₹{{$product->price}}
                    </div>
                    <div class="product">
                        Was MRP :<s>₹{{$product->mrp}}</s>
                    </div><!-- End .product-price -->
                    <div class="ratings-container">
                        Available Stock:{{$product->quantity}}
                    </div><!-- End .rating-container -->
                    <div class="product-nav product-nav-thumbs">
                                                    <a href="#" class="active">
                                                        <img src="/productimage/{{$product->image1}}" alt="product desc">
                                                    </a>
                                                    <a href="#">
                                                        <img src="/productimage/{{$product->image2}}" alt="product desc">
                                                    </a>

                                                    <a href="#">
                                                        <img src="/productimage/{{$product->image3}}" alt="product desc">
                                                    </a>
                                                </div><!-- End .product-nav -->
                </div><!-- End .product-body -->
            </div><!-- End .product -->
        </div><!-- End .col-6 col-md-4 col-lg-4 -->
    @endforeach
</div><!-- End .row -->




                               
                           

                			<nav aria-label="Page navigation">
							
							</nav>
                		</div><!-- End .col-lg-9 -->





                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->





        </main><!-- End .main -->

        @include('home.footer');