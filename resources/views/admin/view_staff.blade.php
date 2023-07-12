
<html lang="en">

<head>
    @include('admin.css')
    <script>
        function confirmDelete() {
        return confirm('Are you sure you want to delete this Staff?');
    }
    function approve() {
        return confirm('Are you sure you want to Approve this Staff?');
    }
    function reject() {
        return confirm('Are you sure you want to reject this Staff?');
    }
        </script>
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
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Table-Export</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
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
                                                    <th></th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>City</th>
                                                    <th>Pin</th>
                                                    <th>DOB</th>
                                                    <th>Email</th>
                                                    
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                    <th>Approve</th>
                                                    <th>Reject</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $product)
                                                <tr>
                                                    <td><img src="/productimage/{{$product->image}}" alt="Product image" heigh="150px" width="150px" class="product-image"></td>
                                                    <td>{{$product->name}}</td>
                                                    <td>{{$product->phone}}</td>
                                                    <td>{{$product->address}}</td>
                                                    <td>{{$product->city}}</td>
                                                    <td>{{$product->pin}}</td>
                                                    <td>{{$product->dob}}</td>
                                                    <td>{{$product->email}}</td>
                                                    <!-- <td>{{$product->updated_at}}</td> -->
                                                    <td><a href="{{url('staff_edit',$product->id)}}" class="btn btn-outline-success">Edit</a></td>
                                                    <td><a href="{{url('staff_delete',$product->id)}}" onclick="return confirmDelete()" class="btn btn-danger">Delete</a></td>
@if ($product->status == 1)
    <td>Approved</td>
    <td><a href="{{url('staff_reject',$product->id)}}" onclick="return reject()" class="btn btn-outline-danger">Reject</a></td>                               
    
@elseif($product->status == 0)   
<td><a href="{{url('staff_approve',$product->id)}}" onclick="return approve()" class="btn btn-success">Approve</a></td>                          
    
    <td>Rejected</td>
@endif
                                                    
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

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
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