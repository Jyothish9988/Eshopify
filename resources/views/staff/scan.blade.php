<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Scanner</title>
    <style>
        body {
            height: 100vh;
            background-image: url("{{asset('res/scan.jpg')}}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .col {
            padding: 20px;
            flex: 0 0 100%;
            max-width: 100%;
        }

        @media only screen and (min-width: 600px) {
            .col {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        #reader {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        #result {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        #result a {
            margin-top: 10px;
            margin-right: 10px;
        }

        #result img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col">
            <div id="reader"></div>
        </div>
        <div class="col">
            <h4>SCAN RESULT</h4>
            <div id="result">Result Here
                <button button onclick="goback()">
                    <img src="{{asset('payment/images/back.png')}}" alt="Image 3">
    </button>
            </div>
        </div>
    </div>

    <script src="{{asset('html5-qrcode.min.js')}}"></script>

    <script type="text/javascript">
        function onScanSuccess(qrCodeMessage) {
            document.getElementById('result').innerHTML = '<span class="result">' + qrCodeMessage + '</span>';

            // Check if scanned result matches a specific value
            if (qrCodeMessage === '{{$id}}') {
                // Redirect to a specific route
                window.location.href = '/delivered/{{$id}}';
            } else {
                // Show an alert for invalid product
                alert('Invalid product: {{$id}}');
            }
        }

        function onScanError(errorMessage) {
            // Handle scan error
            console.error(errorMessage);
        }

        var html5QrcodeScanner = new Html5QrcodeScanner("reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess, onScanError);

  function goback(){
    window.history.back();
  }
  </script> 
</body>

</html>
