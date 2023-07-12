<!DOCTYPE html>
<html lang="en">

<head>
<script>
        function cancel() {
        return confirm('Are you sure you want to Cancel this order?');
    }
    function cancel1() {
        return confirm('Are you sure you want to Cancel this order?');
    }
</script>
    @include('admin.css')
    <script src="{{asset('qrcode.min.js')}}"></script>
    <script src="{{asset('axios.min.js')}}"></script>

    <style>
    @media print {
        tr.print-row {
            display: flex;
            flex-direction: column;
        }

        tr.print-row td {
            padding: 5px;
        }

        .product-image {
            display: block;
            margin-bottom: 10px;
        }

        .table-responsive {
            overflow: visible !important;
        }
    }
    </style>


    <script>
function generateAndStoreQRCode(orderId) {
  // Check if the QR code is already generated
  var qrCodeDiv = document.getElementById("qrcode-" + orderId);
  if (qrCodeDiv.firstChild) {
    return; // QR code is already generated, exit the function
  }

  // Generate the QR code using qrcode.js
  var qrCodeData = "" + orderId;
  //text""
  var qrCode = new QRCode(qrCodeDiv, {
    text: qrCodeData,
    width: 200,
    height: 200
  });

  // Get the QR code as a data URL
  var qrCodeDataURL = qrCodeDiv.firstChild.toDataURL("image/png");

  // Create a new image element
  var qrCodeImage = new Image();
  qrCodeImage.src = qrCodeDataURL;

  // Create a canvas element to draw the image
  var canvas = document.createElement("canvas");
  canvas.width = qrCodeImage.width;
  canvas.height = qrCodeImage.height;
  var context = canvas.getContext("2d");
  context.drawImage(qrCodeImage, 0, 0);

  // Convert the canvas to a data URL (PNG)
  var qrCodeImageDataURL = canvas.toDataURL("image/png");

  // Send the QR code image data URL and order ID to your Laravel backend for storage
  axios.post('{{ route("store.qrcode") }}', {
      orderId: orderId,
      qrCodeImageDataURL: qrCodeImageDataURL
    })
    .then(function(response) {
      // Handle the response from the server
      console.log(response.data.message);
    })
    .catch(function(error) {
      // Handle any errors that occur during the request
      console.error(error);
    });
}


function printTableRow(rowId) {
  var dropdownContent = document.getElementById(rowId).querySelector('.dropdown-content-body').innerHTML;
  var qrCodeImage = document.getElementById('qrcode-' + rowId.slice(4)).getElementsByTagName('img')[0].src;
  var printContents = `
    <div class="dropdown-content-body">
      <img src="${qrCodeImage}" alt="QR Code" class="qr-code-image" />
      ${dropdownContent}
    </div>
  `;
  
  var originalContents = document.body.innerHTML;

  document.body.innerHTML = printContents;
  window.print();
  document.body.innerHTML = originalContents;
}




        document.addEventListener("DOMContentLoaded", function() {
            var deliverButtons = document.getElementsByClassName("deliver-button");

            Array.from(deliverButtons).forEach(function(button) {
                button.addEventListener("click", function() {
                    var orderId = this.getAttribute("data-order-id");
                    generateAndStoreQRCode(orderId);
                });
            });
        });
    </script>
</head>

<body>
    @include('admin.sidebar')
    @include('admin.navbar')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <!-- ... page header column ... -->
                </div>
                <section id="main-content">
                    <!-- ... alert section ... -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        
 <!-- ------------------alert------------------------- -->
@if(session()->has('message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->
                                        <div style="overflow-x:auto">
                                            <table id="bootstrap-data-table-export"
                                                class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Image/Product Id</th>
                                                        <th>Item Name</th>
                                                        <th>Name</th>
                                                        <th>House</th>
                                                        <th>Address</th>
                                                        <th>Pin</th>
                                                        <th>City</th>
                                                        <th>Landmark</th>
                                                        <th>Phone</th>
                                                        <th>Amount</th>
                                                        <th>Quantity</th>
                                                        <th>Total Amount</th>
                                                        <th>Payment Method</th>
                                                        <th>Status</th>
                                                        
                                                        <th>Action</th>
                                                        <th>Print</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data as $product)
                                                    <tr id="row-{{ $product->id }}" class="print-row">
                                                        <td>
                                                            <img src="/productimage/{{$product->image}}"
                                                                alt="Product image" height="200px" width="200px"
                                                                class="product-image">
                                                                {{$product->product_id}}
                                                            </td>
                                                        <td>{{$product->product_title}}</td>
                                                        <td>{{$product->name}}</td>
                                                        <td>{{$product->house}}</td>
                                                        <td>{{$product->address}}</td>
                                                        <td>{{$product->pin}}</td>
                                                        <td>{{$product->city}}</td>
                                                        <td>{{$product->landmark}}</td>
                                                        <td>{{$product->dphone}}</td>
                                                        <td>{{$product->price}}</td>
                                                        <td>{{$product->quantity}}</td>
                                                        <td>{{$product->total_price}}</td>
                                                        <td>{{$product->payment_status}}</td>
                                                        <td>
                                                            @if($product->delivery_status == 1)
                                                            Processing
                                                            
                                                            @elseif($product->delivery_status == 2)
                                                            Order accepted
                                                            
                                                            @elseif($product->delivery_status == 3)

                                                            Cancelled By User

                                                            @elseif($product->delivery_status == 4)

                                                            Cannot Deliver

                                                            @elseif($product->delivery_status == 5)

                                                            Delivered

                                                            @elseif($product->delivery_status == 8)

                                                            Returned

                                                            @elseif($product->delivery_status == 9)

                                                            Product returned by user
                                                           
                                                            @endif
                                                        </td>
                                                       
                                                        <td>
                                                            @if($product->delivery_status == 1)
                                                             
                                                            <a class="btn btn-success"
                                                                href="{{ url('deliver_order', [$product->id, $product->city]) }}">
                                                                <span>Deliver</span>
                                                            </a>
                                                            &nbsp; &nbsp; &nbsp; &nbsp;
                                                            <a class="btn btn-danger"
                                                                href="{{url('admin_order_cancel',$product->id)}}" onclick="return cancel()">
                                                                <span>Cancel</span>
                                                            </a>
                    
                                                            @elseif($product->delivery_status == 2)
                                                           
                                                            <a class="btn btn-danger"
                                                                href="{{url('delete_order_admin',$product->id)}}" onclick="return cancell()">
                                                                <span>Cancel Order Click to delete</span>
                                                            </a>
                                                            @elseif($product->delivery_status == 3)

                                                            <a class="btn btn-info"
                                                                href="{{url('order_delete_approve',$product->id)}}" >
                                                                <span>Order Deleted By User Approve </span>
                                                            </a>
                                                            @elseif($product->delivery_status == 6)

                                                            <a class="btn btn-info"
                                                               >
                                                                <span>Delivered Agent Accepted</span>
                                                            </a>
                                                            @elseif($product->delivery_status == 5)

                                                            <a class="btn btn-primary"
                                                                href="{{url('delete_order',$product->id)}}">
                                                                <span>Delivered Delete</span>
                                                            </a>
                                                            @elseif($product->delivery_status == 8)

                                                            <a class="btn btn-danger"
                                                                href="{{url('admin_order_cancel',$product->id)}}" onclick="return cancel()">
                                                                <span>Order Returned Cancel</span>
                                                            </a>
                                                            @elseif($product->delivery_status == 9)
                                                             
                                                            <a class="btn btn-success"
                                                                href="{{ url('deliver_order', [$product->id, $product->city]) }}">
                                                                <span>Returned product deliver</span>
                                                            </a>
                                                            &nbsp; &nbsp; &nbsp; &nbsp;
                                                            <a class="btn btn-danger"
                                                                href="{{url('admin_order_cancel',$product->id)}}" onclick="return cancel()">
                                                                <span>Cancel</span>
                                                            </a>
                                                            @endif
                                                        </td>
                                                       
                                                        <td>
                                                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                            <button class="btn btn-primary deliver-button"
                                                                data-order-id="{{$product->id}}">
                                                                View QR CODE
                                                            </button>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                <div style="overflow-y:auto" auto; height: 200px;>
                                    <div class="dropdown-content-heading">
                                    <div id="qrcode-{{ $product->id }}"></div>
                                         
                                    </div>
                                    <div class="dropdown-content-body ">
                                        <ul>
                                        
                                        <li class="notification-unread">

                                            {{$product->name}}<br>
                                            {{$product->house}}<br>
                                            {{$product->address}}<br>
                                            {{$product->city}}<br>
                                            {{$product->dphone}}
                                        </li>

                                        
                                        <li>
                                           Landmark:  {{$product->landmark}}
                                        </li>
                                        <li>
                                            Amount Payable : {{$product->total_price}}
                                        </li>
                                            {{$product->payment_status}}
                                           
                                            <li class="">

                                            <a class="btn btn-primary" onclick="printTableRow('row-{{ $product->id }}')">Print </a>

                                            </a>
                                            
                                            </li>
                                        </ul>
                                    </div>
                                </div>
    </div>
                            </div>
                        </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
   
</body>
@include('admin.script')
</html>
