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



<form action="{{url('upload_gallery')}}" method="POST" enctype="multipart/form-data">
@csrf
<table align="center">

    <tr>
        <th>Offer</th><td><input type="text" name="offer" placeholder="Enter Name....." required="" class="form-control"></td>
    </tr>

    <tr>
        <th>Validity</th><td><input type="date" name="validity" placeholder="Enter Name....." required="" class="form-control"></td>
    </tr>

   
    <tr>
        <th>Banner</th><td><input type="file" name="file" placeholder="Give a Product Image....."  class="form-control"></td>
    </tr>


    <tr>
        <td>
            <input type="submit"  class="btn btn-success">
        </td>
    </tr>

</table>

</form>


<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <!-- ------------------------------------------------------------------------ -->
                                @if(session()->get('messagee'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    {{session()->get('messagee')}}
                                 </div>
                                @endif
                                <!-- --------------------------------------------------------------------------------- -->
                                <!-- ------------------error alert------------------------- -->
                                @if(session()->has('errore'))
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        {{session()->get('errore')}}
                                    </div>
                                @endif
                                <!-- -------------------------error alert end--------------- -->
                                    <div style="overflow-x:auto">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Offer</th>
                                                    <th>Created Date</th>
                                                    <th>Validity</th>
                                                    <th>Action</th>
                                                    
                                              
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($datas as $data)
                                                <tr>
                                                <td><img src="/productimage/{{$data->image}}" alt="Product image" heigh="250px" width="250px" class="product-image"></td>
                                                <td>{{$data->offer}}</td>
                                                <td>{{$data->created_at}}</td>
                                                <td>{{$data->validity}}</td>
                                                <td><a href="{{url('gallery_delete',$data->id)}}" class="btn btn-danger" onclick="return confirmDelete()">Delete</a></td>
                                                </tr>
                                                @endforeach
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                









            </div>
        </div>
    </div>
</div>

                    



    






                


























    @include('admin.script')
</body>

</html>