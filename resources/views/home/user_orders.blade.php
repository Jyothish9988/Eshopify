<!DOCTYPE html>
<html lang="en">


<!-- molla/dashboard.html  22 Nov 2019 10:03:13 GMT -->
<head>
<script>
        function cancel() {
        return confirm('Are you sure you want to Delete this order?');
    }
    function return() {
        return confirm('Are you sure you want to return this order?');
    }
</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('home/assets//icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('home/assets//icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/assets//icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('home/assets//icons/site.html')}}">
    <link rel="mask-icon" href="{{asset('home/assets//icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="shortcut icon" href="{{asset('home/assets//icons/favicon.ico')}}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
  
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{asset('home/assets//icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}">
    <!-- Main CSS File -->
    <style>
    .order-table {
        margin-top: 20px;
        width: 100%;
        border-collapse: collapse;
    }

    .order-table th,
    .order-table td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ccc;
    }

    .order-table th {
        background-color: #f2f2f2;
    }

    .order-table img {
        height: 150px;
        width: 150px;
    }
</style>
    <link rel="stylesheet" href="{{asset('home/assets/css/style.css')}}">
</head>

<body>
    <div class="page-wrapper">
      @include('home.header');

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('home/assets//page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">My Account Orders<span>Orders</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
          

 <!-- ------------------alert------------------------- -->
@if(session()->has('message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->
 <!-- ------------------alert------------------------- -->
 @if(session()->has('alert'))
<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('alert')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->
                
<table class="order-table" align="center">

<tr>
    <th></th>
    <th>Name</th>
    <th>Amount</th>
    <th>Quantity</th>
    <th>Total Amount</th>
    <th>Payment Method</th>
    <th>Status</th>
    <th>Action</th>

</tr>
@foreach($orders as $order)
<tr>

    <td><img src="/productimage/{{$order->image}}"heigh="150px" width="150px"  alt="Product image" ></td>
    <td>{{$order->product_title}}</td>
    <td>{{$order->price}}</td>
    <td>{{$order->quantity}}</td>
    <td>{{$order->total_price}}</td>
    <td>{{$order->payment_status}}</td>

        @if($order->delivery_status == '1')
            <td>Ordered</td>
        @elseif($order->delivery_status == '2')
            <td>Order Accepted</td>
        @elseif($order->delivery_status == '3')
            <td>Cancelled by {{$order->name}} </td>
        @elseif($order->delivery_status == '4')
            <td> Cancelled By Admin</td>
        @elseif($order->delivery_status == '6')
            <td> Delivered</td>
        @elseif($order->delivery_status == '7')
            <td>Cancelled by {{$order->name}} </td>
        @elseif($order->delivery_status == '9')
            <td>Order Returned </td>
        
        @endif
    
                                                    @if($order->delivery_status == '1')
                                                       <td> <a href="{{url('user_order_cancell',$order->id)}}" class="btn-product btn-danger btn-cart"><span>Cancel Order</span></a></td>
                                                    @elseif($order->delivery_status == '2')
                                                       <td> <a href="{{url('user_order_cancell',$order->id)}}" class="btn-product btn-warning btn-cart"><span>Order Accepted Cancel Order</span></a></td>
                                                    @elseif($order->delivery_status == '3')
                                                    <td>Order Cancelled Action Pending</td>
                                                    @elseif($order->delivery_status == '4')
                                                   <td> <a href="{{url('user_order_delete',$order->id)}}"  onclick="return cancel()" class="btn-product btn-info btn-cart"><span>Cancelled By Admin Click to delete </span></a></td>
                                                   @elseif($order->delivery_status == '6')
                                                   <td> 
                                                        <a href="{{url('user_order_delete',$order->id)}}" class="btn-product btn-success btn-cart" onclick="return return()"><span>Delivered Click to delete </span></a>
                                                        
                                                    </td>
                                                    @elseif($order->delivery_status == '9')
                                                   <td> 
                                                          Reson:{{$order->return_details}}
                                                    </td>
                                                   @elseif($order->delivery_status == '7')
                                                   <td> <a href="{{url('user_order_delete',$order->id)}}"  class="btn-product btn-danger btn-cart" onclick="return cancel()">Click to delete </span></a></td>
                                                   @elseif($order->delivery_status == '8')
                                                    <td>Order Returned Cancelled Action Pending</td>
                                                    @elseif($order->delivery_status == '9')
                                                    <td>{{$order->return_details}}</td>
                                                    @endif


                                                    @if($order->delivery_status == '6')
                                                    <td><a href="{{url('user_return',$order->id)}}" class="btn-product btn-warning btn-cart" onclick="return cancel()"><span>Return</span></a></td>
                                                 
                                                    @endif

</tr>
@endforeach
</table>

								  
								    

								  
                          

            </div><!-- End .page-content -->





        </main><!-- End .main -->

        @include('home.footer');