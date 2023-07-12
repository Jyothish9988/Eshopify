@include('staff.header');

					<div class="services-section">
						<div class="wrap_view_agileits">
							<h3 class="head">Single Page</h3>
							<p class="head_para">Add Some Description</p>
							<div class="inner_section_wthree">
<!-- ------------------alert------------------------- -->
@if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
    </div>
@endif
<!-- -------------------------alert end--------------- -->

<!-- ------------------error alert------------------------- -->
@if(session()->has('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('error')}}
    </div>
@endif
<!-- -------------------------error alert end--------------- -->








    




    <!-- ------------------alert------------------------- -->
    @if(session()->has('message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->


<div class="container-fluid">


<div class="row">
@foreach($data as $product)
   

<div class="col-sm-3">
      <div class="card">
<div class="container-fluid">

<div class="item popular-item">
                    <div class="thumb">
                        <img src="/productimage/{{$product->image}}"  height="150px" width="150px"> 
                        <div class="text-content">
                            <h4>{{$product->name}}</h4>
                            <h5>{{$product->house}}</h5><br>
                            <span>{{$product->address}},{{$product->pin}}</span><br>
                            <span>{{$product->dphone}}</span>
                            <br>
                            <span>{{$product->payment_status}}</span>

                        </div>
                        
                            <a href="{{ url('scan',$product->id) }}" class="btn btn-success">SCAN</a> &nbsp; &nbsp;

<a class="btn btn-info"
    href="{{ url('staff_order_reject',$product->id) }}">
    <span>Return</span>
</a>



     
                    </div>
                </div>
</div>
</div>
</div>

@endforeach
 </div>
</div>
					<!--//blog-->

@include('staff.footer');