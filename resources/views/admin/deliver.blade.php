<!DOCTYPE html>
<html lang="en">

<head>
    
<script>
    function updateFormAction(selectElement) {
        var form = document.getElementById('deliverForm');
        var selectedId = selectElement.value;
        var id1 = '{{$id}}'; // Replace with the actual value of $id
        var id2 = selectedId;
        var actionUrl = "{{url('deliver/{$id1}/{$id2}')}}";
        actionUrl = actionUrl.replace('{$id1}', id1).replace('{$id2}', id2);
        form.action = actionUrl;
    }
</script>

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



<div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                
                                <form class="form-valide" action="{{url('deliver/{$id1}/{$id2}')}}" method="POST" id="deliverForm">
    @csrf
    <input type="hidden" name="hidden" value='h'>
    <div class="form-group row">
        <label class="col-lg-4 col-form-label" for="val-username">Select Delivery Agent <span class="text-danger">*</span>
        </label>
        <div class="col-lg-6">
            <select name="category" class="form-control" onchange="updateFormAction(this)">
                <option>Select category</option>
                @foreach($data as $datas)
                <option value="{{$datas->id}}">{{$datas->name}}&nbsp;,{{$datas->city}}&nbsp;,+91&nbsp{{$datas->phone}}</option>
                @endforeach
            </select>
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





            </div>
        </div>
    </div>
</div>





    @include('admin.script')

</body>
@include('admin.footer')
</html>