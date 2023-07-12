<!DOCTYPE html>
<html>
<head>
    <link href="{{asset('payment/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('payment/css/creditly.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('payment/css/easy-responsive-tabs.css')}}">
    <link href="{{asset('payment/css/font-awesome.css')}}" rel="stylesheet"> 
    <style>
        body {
            background-image: url("path/to/your/image.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .main {
    width: 600px; /* Set the width to a fixed value */
    min-height: 600px; /* Set the minimum height to 600px */
    height: auto; /* Allow the height to adjust automatically */
    background-color: #fff;
    padding: 20px;
    text-align: center;
    display: flex;
    flex-direction: row;
    border: 2px solid #ccc;
}

        
        .left-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-right: 2px solid #ccc;
            padding: 20px;
        }
        
        .right-container {
            flex: 2;
            padding: 20px;
            
        }

        
        
        .radio-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            text-align: left;
        }
        
        .radio-image {
            width: 70px;
            height: auto;
            margin-right: 10px;
        }
        
        .form-container {
            display: none;
            margin-top: 20px;
        }
    </style>
    <script>
        function handleRadioButtonChange(option) {
            var formContainers = document.getElementsByClassName("form-container");
        
            // Hide all form containers
            for (var i = 0; i < formContainers.length; i++) {
                formContainers[i].style.display = "none";
            }
        
            // Show the selected form container
            var selectedFormContainer = document.getElementById("form-container-" + option);
            if (selectedFormContainer) {
                selectedFormContainer.style.display = "block";
            }
        }
    </script>
</head>
<body>
    <div class="main">
          
        <div class="left-container">
            <h2>Payment Options</h2>
            <br>
            <br>
            <br>
            
            
            <div class="radio-container">
                <img src="{{asset('payment/images/visa.png')}}" alt="Image 1" class="radio-image">
                <input type="radio" name="option" value="option1" onchange="handleRadioButtonChange(1)">
            </div>
            <br>
            <br>
            <div class="radio-container">
                <img src="{{asset('payment/images/upi.png')}}" alt="Image 2" class="radio-image">
                <input type="radio" name="option" value="option2" onchange="handleRadioButtonChange(2)">
            </div>
            <br>
            <br>
            <div class="radio-container">
                <img src="{{asset('payment/images/cod.png')}}" alt="Image 3" class="radio-image">
                <input type="radio" name="option" value="option3" onchange="handleRadioButtonChange(3)">
            </div>
            <br>
            <br>
            <div class="radio-container">
                <a href="{{url('showcart')}}">
                    <img src="{{asset('payment/images/back.png')}}" alt="Image 3" class="radio-image">
                </a>
            </div>
            
        </div>
        <div class="right-container">
            <div id="form-container-1" class="form-container">
                <form action="#" method="post" class="creditly-card-form agileinfo_form">
                    <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                        <div class="credit-card-wrapper">
                            <div class="first-row form-group">
                                <div class="controls">
                                    <label class="control-label">Name on Card</label>
                                    <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
                                </div>
                                <div class="w3_agileits_card_number_grids">
                                    <div class="w3_agileits_card_number_grid_left">
                                        <div class="controls">
                                            <label class="control-label">Card Number</label>
                                            <input class="number credit-card-number form-control" type="text" name="number"
                                                          inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
                                                          placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                        </div>
                                    </div>
                                    <div class="w3_agileits_card_number_grid_right">
                                        <div class="controls">
                                            <label class="control-label">CVV</label>
                                            <input class="security-code form-control"
                                                          inputmode="numeric"
                                                          type="text" name="security-code"
                                                          placeholder="&#149;&#149;&#149;">
                                        </div>
                                    </div>
                                    <div class="clear"> </div>
                                </div>
                                <div class="controls">
                                    <label class="control-label">Expiration Date</label>
                                    <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                </div>
                            </div>
                            <button class="submit"><span>Make a payment <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></button>
                        </div>
                    </section>
                </form>
            </div>
            <div id="form-container-2" class="form-container">
                <form action="#" method="post" class="creditly-card-form agileinfo_form">
                    <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                        <div class="credit-card-wrapper">
                            <div class="first-row form-group">
                                <div class="controls">
                                    <label class="control-label">UPI ID</label>
                                    <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
                                </div>
                            </div>
                            <button class="submit"><span>Make a payment <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></button>
                        </div>
                    </section>
                </form>
            </div>
            <div id="form-container-3" class="form-container">
                <form action="#" method="post" class="creditly-card-form agileinfo_form">
                    <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                        <div class="credit-card-wrapper">
                            <br>
            
                            
                        </div>
                    </section>
                    <a href="{{ url('cod') }}" class="submit"><span>Order Now<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>

                </form>
            </div>
        </div>
        <div class="right-container">
            <h2>Products</h2>
        </div>
    </div>
</body>
</html>
