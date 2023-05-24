<div id="main-wrapper">
                        <header class="topbar">
                            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                                <div class="navbar-collapse">
                                    <ul class="navbar-nav mr-auto mt-md-0">
                                        <li class="nav-item "> <a class="nav-link nav-toggler  hidden-md-up  waves-effect waves-dark" href="javascript:void(0)"><i class="fas  fa-bars"></i></a></li>
                                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-bars"></i></a> </li> 
                                    <li class="nav-item mt-3">ADMIN</li>
                                    </ul>
                                    <ul class="navbar-nav my-lg-0">
                                    <div class="dropdown">
  <button class="btn btn-muted dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
  {{ Auth::user()->name }}
  </button>
  <div class="dropdown-menu">
    <button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                  


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
</form>
  </div>
</div>
                                    </ul>
                                </div>
                            </nav>
                        </header>
                    <aside class="left-sidebar">
                        <div class="scroll-sidebar">
                            <nav class="sidebar-nav">
                                <ul id="sidebarnav">
                                    <li class="nav-devider mt-0" style="margin-bottom: 5px"></li>
                                    <li> <a href="{{route('admin')}}" ><span> <i class="fas fa-home"></i> </span><span class="hide-menu">Home</span></a></li>
                                   
                                    <li class="has-sub">
                                        <a class="js-arrow" href="#">
                                            <i class="fas fa-users"></i>Product</a>
                                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                        <li>
                                        <a href="{{route('add-product')}}">
                                            <i class="fas fa-table"></i>Add Products</a>
                                    </li>
                                            <li>
                                                <a href="{{route('admin')}}"><i class="fas fa-chart-bar"></i>Product Details</a>
                                            </li>
                                           
                                        </ul>
                                    </li>

                                    <li> <a href="service.html" ><span> <i class="fas fa-globe"></i> </span><span class="hide-menu">Services</span></a></li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </aside>
    <div class="page-wrapper">