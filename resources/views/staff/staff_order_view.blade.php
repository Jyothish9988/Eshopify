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
                                                        <th>Action</th>
                                                
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data as $product)
                                                    <tr id="row-{{ $product->id }}" class="print-row">
                                                        <td>
                                                            <img src="/productimage/{{$product->image}}"
                                                                alt="Product image" height="200px" width="200px"
                                                                class="product-image">
                                                               
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
                                                            @if($product->delivery_status == 2)
                                                             
                                                            <a class="btn btn-primary"
                                                                href="{{ url('staff_order_accept',$product->id) }}">
                                                                <span>Accept</span>
                                                            </a>
                    
                                                            @elseif($product->delivery_status == 5)

                                                            <a class="btn btn-info"
                                                                href="{{ url('staff_order_reject',$product->id) }}">
                                                                <span>Return</span>
                                                            </a>
                                                            @elseif($product->delivery_status == 6)

                                                            
                                                                <span>Delivered</span>
                                                           

                                                           
                                                            
                                                            @endif
                                                        </td>
                                                    
                                                       
                                                      
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>


							

							</div>
						</div>
					</div>
					<!--//blog-->

@include('staff.footer');