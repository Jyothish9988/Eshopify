<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>

  
    @include('admin.sidebar')

    @include('admin.navbar')




<div class="content-wrap">
    <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Add Staff Here</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
<!-- ------------------alert------------------------- -->
@if(session()->has('message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->



<form action="{{url('staff_edit_upload',$data->id)}}" method="POST" enctype="multipart/form-data">
@csrf
<table align="center">

    <tr>
        <th>Name</th><td><input type="text" name="name" placeholder="Enter Name....." value="{{$data->name}}" required="" class="form-control"></td>
    </tr>

    <tr>
        <th>Phone</th><td><input type="number" name="phone" placeholder="Enter Phone Number....." value="{{$data->phone}}" required="" class="form-control"></td>
    </tr>

  


    
   
    <tr>
        <th>Address</th>
        <td>
        <textarea name="address"  class="form-control" id="t13" height="100%" >{{$data->address}}</textarea>
        </td>
    </tr>
    <tr>
        <th>City</th>
        <td>
        <textarea name="city"  class="form-control"  id="t13" height="100%" >{{$data->city}}</textarea>
        </td>
    </tr>

    <tr>
        <th>Pin</th>
        <td>
        <input type="number" name="pin" placeholder="Give a Pin Code....." required="" value="{{$data->pin}}" class="form-control">
        </td>
    </tr>

    <tr>
        <th>Date Of Birth</th><td><input type="date" name="dob" placeholder="Give a Product Quantity....."  value="{{$data->dob}}" required="" class="form-control"></td>
    </tr>

    <tr>
        <td><img src="/productimage/{{$data->image}}" alt="Product image" heigh="150px" width="150px" class="product-image"></td>
        <th>Staff Image</th><td><input type="file" name="file" placeholder="Give a Product Image....."  class="form-control"></td>
    </tr>

    <tr>
        <td><img src="/productimage/{{$data->image1}}" alt="Product image" heigh="150px" width="150px" class="product-image"></td>
        <th>Aadhar Image</th><td><input type="file" name="file1" placeholder="Give a Product Image....."  class="form-control"></td>
    </tr>

    <tr>
        <th>Email</th><td><input type="email" name="email" placeholder="Enter Email....."  value="{{$data->email}}" required="" class="form-control"></td>
    </tr>
    <!-- <tr>
        <th>Password</th><td><input type="text" name="password" placeholder="Change Password....."   required="" class="form-control"></td>
    </tr> -->

   


<tr><td><input type="submit"  class="btn btn-success"></td></tr>

</table>

</form>





            </div>
        </div>
    </div>
</div>



@include('admin.footer')

 
   
</body>
@include('admin.script') 
</html>