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
                                <h1>Hello, <span>Add Products Here</span></h1>
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



<form action="{{url('uploadproduct')}}" method="POST" enctype="multipart/form-data">
@csrf
<table align="center">

    <tr>
        <th>Product Title</th><td><input type="text" name="title" placeholder="Give a Product Title....." required="" class="form-control"></td>
    </tr>

    <tr>
        <th>Price</th><td><input type="number" name="price" placeholder="Give a Product Price....." required="" class="form-control"></td>
    </tr>

    
    <tr>
        <th>MRP</th><td><input type="number" name="mrp" placeholder="Give a Product M R P....." required="" class="form-control"></td>
    </tr>

    <tr>
        <th>Description</th>
        <td>
        <textarea name="description"  class="form-control" id="t13" height="100%" ></textarea>
        </td>
    </tr>

    <tr>
        <th>Category</th>
        <td>
        <select name="category" class="form-control">
					<option>Select category</option>
                    @foreach($datas as $data)
					<option>{{$data->category_name}}</option>
					@endforeach

        </select>
        </td>
    </tr>
    
    <tr>
        <th>Size</th>
        <td>
        <select name="size" class="form-control">
					<option>Select Size</option>
					<option>XS</option>
					<option>S</option>
					<option>M</option>
                    <option>XL</option>
                    <option>XXL</option>

        </select>
        </td>
    </tr>

    <tr>
        <th>Quantity</th><td><input type="number" name="quantity" placeholder="Give a Product Quantity....." required="" class="form-control"></td>
    </tr>

    <tr>
        <th>Main Image</th><td><input type="file" name="file" placeholder="Give a Product Image....."  class="form-control"></td>
    </tr>

    <tr>
        <th>Image left</th><td><input type="file" name="file1" placeholder="Give a Product Image....."  class="form-control"></td>
    </tr>

    <tr>
        <th>Image Right</th><td><input type="file" name="file2" placeholder="Give a Product Image....."  class="form-control"></td>
    </tr>

    <tr>
        <th>Image Back</th><td><input type="file" name="file3" placeholder="Give a Product Image....."  class="form-control"></td>
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