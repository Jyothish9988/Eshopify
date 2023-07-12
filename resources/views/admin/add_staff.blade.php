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


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}<button type="button" class="close" data-dismiss="alert">x</butto</li>
            @endforeach
        </ul>
    </div>
@endif



<form action="{{url('upload_staff')}}" method="POST" enctype="multipart/form-data">
@csrf
<table align="center">

    <tr>
        <th>Name</th><td><input type="text" name="name" placeholder="Enter Name....." required="" class="form-control"></td>
    </tr>

    <tr>
        <th>Phone</th><td><input type="number" name="phone" placeholder="Enter Phone Number....." required="" class="form-control"></td>
    </tr>

  


    
   
    <tr>
        <th>Address</th>
        <td>
        <textarea name="address"  class="form-control" id="t13" height="100%" ></textarea>
        </td>
    </tr>

    <tr>
        
        <th>City</th><td><input type="text" name="city" placeholder="Enter City....." required="" class="form-control"></td>
        
    </tr>

    <tr>
        <th>Pin</th>
        <td>
        <input type="number" name="pin" placeholder="Give a Pin Code....." required="" class="form-control">
        </td>
    </tr>

    <tr>
        <th>Date Of Birth</th><td><input type="date" name="dob" placeholder="Give a Product Quantity....." required="" class="form-control"></td>
    </tr>

    <tr>
        <th>Staff Image</th><td><input type="file" name="file" placeholder="Give a Product Image....."  class="form-control"></td>
    </tr>

    <tr>
        <th>Aadhar Image</th><td><input type="file" name="file1" placeholder="Give a Product Image....."  class="form-control"></td>
    </tr>

    <tr>
        <th>Email</th><td><input type="email" name="email" placeholder="Enter Email....." required="" class="form-control"></td>
    </tr>
    <tr>
        <th>Password</th><td><input type="text" name="password" placeholder="Enter Password....." required="" class="form-control"></td>
    </tr>

   


<tr><td><input type="submit"  class="btn btn-success"></td></tr>

</table>

</form>





            </div>
        </div>
    </div>
</div>





    @include('admin.script')

</body>
@include('admin.footer')
</html>