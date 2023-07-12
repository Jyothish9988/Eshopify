<!DOCTYPE html>
<html lang="en">


<!-- molla/dashboard.html  22 Nov 2019 10:03:13 GMT -->
<head>
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
    <style>
    .form-control {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    small.form-text {
        color: #777;
        font-size: 12px;
    }

    .btn-outline-primary-2 {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 10px;
        border: 1px solid #007bff;
        border-radius: 4px;
        color: #007bff;
        text-transform: uppercase;
        font-weight: bold;
        cursor: pointer;
    }

    .btn-outline-primary-2 span {
        margin-right: 5px;
    }

    .icon-long-arrow-right {
        margin-left: 5px;
    }
</style>

    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{asset('home/assets//icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('home/assets/css/style.css')}}">
</head>

<body>
    <div class="page-wrapper">
      @include('home.header');

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('home/assets//page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">My Account<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
          
<br
<br>
<br><br>
<br>
            <div class="page-content">
      
            <div class="container-fluid">
                <div class="row justify-content-center">
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                             
                                    <form class="form-valide" action="{{url('return_details_add',$id)}}" method="POST">
                                    @csrf
                                        <input type="hidden" name="hidden" value='h'>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="return_details" placeholder="Enter product returning reson.." >
                                            </div>
                                        </div>

                                       

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<br>
								  
								    

								  
                          


								    </div><!-- .End .tab-pane -->
								</div>





	                		</div><!-- End .col-lg-9 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .dashboard -->
            </div><!-- End .page-content -->





        </main><!-- End .main -->

        @include('home.footer');