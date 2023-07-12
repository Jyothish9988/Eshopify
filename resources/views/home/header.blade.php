<header class="header">
           

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="#" class="logo">
                            <img src="home/assets/images/demos/demo-21/logo.png" alt="Molla Logo" width="120px" height="120px">
                        </a>

                        
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                @if (Route::has('login'))
                                @auth
                                    <a href="{{url('/redirect')}}">Home</a>
                                @else
                                    <a href="{{url('/')}}">Home</a>
                                @endauth
                                @endif


                                    


                                </li>
                                @if (Route::has('login'))
                                @auth
                                <li>
                                    <a href="{{ url('address') }}">My Account</a>
                                </li>
                                @endauth
                                @endif
                                <li>
                                    <a href="{{ url('view_more') }}">Products</a>
                                </li>

                                <li>
                                    <a href="{{ url('contact') }}" >Contact</a>
                                    
                                </li>


                                @if (Route::has('login'))
                                @auth
                                <li>
                                    <a href="{{ url('user_orders') }}" >Orders</a>


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


                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->

                        
                    </div><!-- End .header-left -->

                    <div class="header-right">
                            <div class="header-search">
                                <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                                <form action="{{ url('search_product') }}" method="GET" class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="search" id="q" placeholder="Search in..." required>
                                    <button type="submit" class="btn btn-success"><i class="icon-search"></i></button>
                                </form>                           
                            </div>
                            @if (Route::has('login'))
                                @auth
                            <!-- <div class="wishlist">
                                <a href="wishlist.html" title="Wishlist">
                                    <i class="icon-heart-o"></i>
                                    <span class="wishlist-count">3</span>
                                </a>
	                         </div> -->

                             <div class="wishlist">
                                <a href="{{ url('showcart') }}" title="Wishlist">
                                <i class="icon-shopping-cart"></i>
	                            <span class="wishlist-count">{{$count}}</span>
                                </a>
	                         </div>
                             @endauth
                                @endif


                             
                        



                        <!-- <nav class="main-nav"> -->
                        <ul class="menu ">
                            @if (Route::has('login'))
                               
                                    @auth
                                        <li>
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
    @csrf
</form>
                                        
                                        </li> 

                                    @else
                                        <!-- <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li> -->
                                        <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>

                                        @if (Route::has('register'))
                                        <!-- <li><a href="register" data-toggle="modal">Signup</a></li> -->
                                        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Signup</a></li>
                                        @endif
                                    @endauth
                                
                            @endif
                             </ul>
                        <!-- </nav>  -->

                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif