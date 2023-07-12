<!DOCTYPE html>
<html>

<!-- molla/index-21.html  22 Nov 2019 10:01:31 GMT -->
<head>
    <title>Eshopify</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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

</style>
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
    <link rel="stylesheet" href="home/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="home/assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="home/assets/css/style.css">
    <link rel="stylesheet" href="home/assets/css/skins/skin-demo-21.css">
    <link rel="stylesheet" href="home/assets/css/demos/demo-21.css">


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<style>
        .swiper-slide {
            text-align: center;
        }

        .swiper-slide img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="page-wrapper">
        <!-- <div class="notification" style="background-image: url(home/assets/images/demos/demo-21/notification-back.jpg)">
            <div class="notify-content">
                <h3>FREE SHIPPING FOR ALL ORDERS OVER $50</h3>
            </div>
            <div class="notify-action">
                <a href="#"><i class="icon-close"></i></a>
            </div>
        </div> -->
       




        @include('home.header');
        <main class="main">
       
        @if(session('messagee'))
    <div class="alert alert-danger">
        {{ session('messagee') }}
    </div>
@endif
<div class="intro-slider-container mb-5">
<div class="swiper-container" id="gallerySlider">
    <div class="swiper-wrapper">
        @foreach($gallery as $galleryy)
        <div class="swiper-slide">
            <img src="/productimage/{{$galleryy->image}}" alt="Gallery Image" height="100%" width="100%">
            <div class="intro-content">
                <div class="title">
                    <h3>NEW OFFERS</h3>
                </div>
                <div class="content">
                    <h3>OFFER VALID TILL {{$galleryy->validity}}</h3>
                    
                </div>
                <div class="price">
                    <h3>SAVE UP TO {{$galleryy->offer}}%</h3>
                </div>
                <div class="action">
                    <a href="{{url('view_more')}}" class="btn btn-primary">
                        <span>DISCOVER NOW</span>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>


    <div class="swiper-pagination"></div>
</div>

</div><!-- End .intro-slider-container -->




            @include('home.product');

            <div class="container category-banner">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <a href="#">
                            <img src="home/assets/images/demos/demo-21/banner/footware.jpg">
                        </a>
                        <div class="banner-content">
                            <a href="#"><h3 class="category"> FOOTWEAR </h3></a>
                            <a href="#" class="action">SHOP NOW</a>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <a href="#">
                            <img src="home/assets/images/demos/demo-21/banner/accessories.jpg">
                        </a>
                        <div class="banner-content">
                            <a href="#"><h3 class="category"> ACCESSORIES </h3></a>
                            <a href="#" class="action">SHOP NOW</a>
                        </div>
                        
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6" >
                        <a href="#">
                            <img src="home/assets/images/demos/demo-21/banner/mens.jpg">
                        </a>
                        <div class="banner-content">
                             <a href="#"><h3 class="category"> MEN'S </h3></a>
                            <a href="#" class="action">SHOP NOW</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <a href="#">
                            <img src="home/assets/images/demos/demo-21/banner/womens.jpg">
                        </a>
                        <div class="banner-content">
                             <a href="#"><h3 class="category"> WOMEN'S </h3></a>
                            <a href="#" class="action">SHOP NOW</a>
                        </div>
                        
                    </div>
                </div>
            </div>



            <div class="container service mt-4">
                <div class="col-sm-6 col-lg-3 col-noPadding">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-truck"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Payment &amp; Delivery</h3><!-- End .icon-box-title -->
                            <p>Free shipping for orders over $50</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-4 -->
                
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rotate-left"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Return &amp; Refund</h3><!-- End .icon-box-title -->
                            <p>Free 100% money back guarantee</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-4 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-life-ring"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Quality Support</h3><!-- End .icon-box-title -->
                            <p>Alway online feedback 24/7</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-4 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-envelope"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">JOIN OUR NEWSLETTER</h3><!-- End .icon-box-title -->
                            <p>10% off by subscribing to our newsletter</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-4 -->
            </div>

           
        </main>
        @include('home.footer');
</body>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var gallerySwiper = new Swiper('#gallerySlider', {
        slidesPerView: 1,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
<!-- molla/index-21.html  22 Nov 2019 10:01:54 GMT -->
</html>