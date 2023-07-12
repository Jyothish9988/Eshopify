<div class="container new-arrivals">

<hr class="mb-5 mt-8">

<div class="heading heading-center mb-3">
    <h2 class="title">NEW ARRIVALS </h2><!-- End .title -->
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

<!-- ------------------error alert------------------------- -->
@if(session()->has('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('error')}}
    </div>
@endif
<!-- -------------------------error alert end--------------- -->
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

<div class="tab-content tab-content-carousel">

    <div class="tab-pane p-0 fade show active" id="arrivals-all-tab" role="tabpanel" aria-labelledby="arrivals-all-link">


        <div class="row">
            
           



            
            @foreach($products as $product)
    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
        <div class="product demo21">
            <figure class="product-media">
                <span class="product-label label-sale">Sale</span>
                <a href="{{ url('productinfo', $product->id) }}">
                <img src="/productimage/{{$product->image}}" height="120" width="120" alt="Product image" class="product-imagee">

                </a>
            </figure><!-- End .product-media -->

            <div class="product-body text-center">
                <div class="product-cat">
                    <a href="{{ url('productinfo', $product->id) }}">{{$product->category}}</a>
                </div><!-- End .product-cat -->
                <h3 class="product-title"><a href="{{ url('productinfo', $product->id) }}">{{$product->title}}</a></h3><!-- End .product-title -->
                <div class="product-price">
                    <span class="new-price">Price: ₹{{$product->price}}</span><br>
                    <span class="old-price"><s>Was MRP: ₹{{$product->mrp}}</s></span>
                    <span>Available Stock: {{$product->quantity}}</span>
                </div><!-- End .product-price -->

                <div class="product-action d-flex justify-content-between align-items-center">
                    <form action="{{url('addcart', $product->id)}}" method="POST" class="d-flex">
                        @csrf
                        <input type="number" id="qty" name="quantity" class="form-control input-field" value="1" min="1" required>&nbsp;
                        <button class="btn btn-primary btn-cartt" type="submit">&#128722; ADD TO CART</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

        </div>
    </div><!-- .End .tab-pane -->

</div><!-- End .tab-content -->




<div class="text-center">
    <a href="{{url('view_more')}}" class="btn btn-viewMore">
        <span>VIEW MORE PRODUCTS</span>
        <i class="icon-long-arrow-right"></i>
    </a>
</div>
</div><!-- End .container -->
