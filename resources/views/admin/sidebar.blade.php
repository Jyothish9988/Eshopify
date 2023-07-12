<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="index.html">
                            <!-- <img src="admin/assets/images/logo.png" alt="" /> --><span>Focus</span></a></div>
                    <!-- <li class="label">Main</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span
                                class="badge badge-primary">2</span> <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="index.html">Dashboard 1</a></li>
                            <li><a href="index1.html">Dashboard 2</a></li>
                        </ul>
                    </li> -->

                    <li class="label">Apps</li>
                  

                    <li><a href="{{url('view_category')}}"><i class="ti-layout-grid2-alt"></i>View Category</a></li>

                      <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Products <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="{{url('product')}}">Add New Products</a></li>
                            <li><a href="{{url('product_view')}}">Show all Products</a></li>
                            
                        </ul>
                    </li>

                    
                    <li><a href="{{url('admin_order_view')}}"><i class="ti-user"></i> Orders</a></li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Staff <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="{{url('add_staff')}}">Add New Staff</a></li>
                            <li><a href="{{url('view_staff')}}">Show all Staff</a></li>
                            
                        </ul>
                    </li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> Customers <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <!-- <li><a href="{{url('add_staff')}}">Add New Staff</a></li> -->
                            <li><a href="{{url('view_customer')}}">Show all Customers</a></li>
                            
                        </ul>
                    </li>


                    <li><a href="{{url('contact_view')}}"><i class="ti-email"></i> Contact View</a></li>



                    
                    <li><a class="sidebar-sub-toggle"><i class="ti-file"></i> Gallery <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="{{url('gallery')}}">Add Gallery</a></li>
                            
                            
                        </ul>
                    </li>
                    
            



                    <li> <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
    @csrf
</form></li>
                </ul>
            </div>
        </div>
    </div>