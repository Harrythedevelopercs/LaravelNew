@include('Master/header');

    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">
                    <div class="logo">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('logo.png') }}" alt=""  height="80" class="logo-large">
                        </a>
                    </div>
                 


                    <div class="menu-extras topbar-custom">
                        <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item hide-phone app-search">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                            

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true">
                                    <i class="ti-email noti-icon"></i>
                                    <span class="badge badge-danger noti-icon-badge">5</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg" style="position: absolute; transform: translate3d(-222px, 70px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5><span class="badge badge-danger float-right">745</span>Messages</h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" alt="user-img" class="img-fluid rounded-circle"> </div>
                                        <p class="notify-details"><b>Charles M. Jones</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/avatar-3.jpg" alt="user-img" class="img-fluid rounded-circle"> </div>
                                        <p class="notify-details"><b>Thomas J. Mimms</b><small class="text-muted">You have 87 unread messages</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/avatar-4.jpg" alt="user-img" class="img-fluid rounded-circle"> </div>
                                        <p class="notify-details"><b>Luis M. Konrad</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                    </a>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        View All
                                    </a>

                                </div>
                            </li>

                            
                            <!-- User-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Welcome</h5>
                                    </div>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i> My Wallet</a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/Master/logout"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                </div>
                            </li>
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>
                        
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu text-center">

                            <li class="has-submenu ">
                                <a href="index.html"><i class="mdi mdi-airplay"></i>Dashboard</a>
                            </li>

                            <li class="has-submenu ">
                                <a href="#"><i class="mdi mdi-counter"></i>Shared Kitchens</a>
                                <ul class="submenu">
                                    <li><a href="advanced-highlight.html">Users</a></li>
                                    <li><a href="advanced-rating.html">Kitchen</a></li>
                                    <li><a href="advanced-alertify.html">Ads</a></li>
                                    <li><a href="advanced-rangeslider.html">Reports</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-food"></i>Food Business</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="ui-buttons.html">Users</a></li>
                                            <li><a href="ui-cards.html">Business Informations</a></li>
                                            <li><a href="ui-tabs-accordions.html">Reports</a></li>
                                        </ul>
                                    </li>
                                   
                                   
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-gauge"></i>Accounts</a>
                                <ul class="submenu">
                                   
                                    <li>
                                        <a href="calendar.html">Calendar</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Charts</a>
                                        <ul class="submenu">
                                            <li><a href="charts-morris.html">Morris Chart</a></li>
                                            <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                            <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                            <li><a href="charts-flot.html">Flot Chart</a></li>
                                            <li><a href="charts-c3.html">C3 Chart</a></li>
                                            <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Tables </a>
                                        <ul class="submenu">
                                            <li><a href="tables-basic.html">Basic Tables</a></li>
                                            <li><a href="tables-datatable.html">Data Table</a></li>
                                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                                            <li><a href="tables-editable.html">Editable Table</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Icons</a>
                                        <ul class="submenu">
                                            <li><a href="icons-material.html">Material Design</a></li>
                                            <li><a href="icons-ion.html">Ion Icons</a></li>
                                            <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                            <li><a href="icons-themify.html">Themify Icons</a></li>
                                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                                            <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Maps</a>
                                        <ul class="submenu">
                                            <li><a href="maps-google.html"> Google Map</a></li>
                                            <li><a href="maps-vector.html"> Vector Map</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-google-pages"></i>Pages</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="pages-login.html">Login</a></li>
                                            <li><a href="pages-register.html">Register</a></li>
                                            <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                            <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="pages-blank.html">Blank Page</a></li>
                                            <li><a href="pages-404.html">Error 404</a></li>
                                            <li><a href="pages-500.html">Error 500</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        
                        
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">krowdkitchen</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="col-3 align-self-center">
                                                <div class="round">
                                                    <i class="mdi mdi-eye"></i>
                                                </div>
                                            </div>
                                            <div class="col-9 align-self-center text-right">
                                                <div class="m-l-10">
                                                    <h5 class="mt-0">100</h5>
                                                    <p class="mb-0 text-muted">Total Kitchen </p>
                                                </div>
                                            </div>                                                                                          
                                        </div>
                                        <div class="progress mt-3" style="height:3px;">
                                            <div class="progress-bar  bg-success" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="col-3 align-self-center">
                                                <div class="round">
                                                    <i class="mdi mdi-account-multiple-plus"></i>
                                                </div>
                                            </div>
                                            <div class="col-9 text-right align-self-center">
                                                <div class="m-l-10 ">
                                                    <h5 class="mt-0">20</h5>
                                                    <p class="mb-0 text-muted">Total Users</p>
                                                </div>
                                            </div>                                                                                                                
                                        </div>
                                        <div class="progress mt-3" style="height:3px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 48%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="search-type-arrow"></div>
                                        <div class="d-flex flex-row">
                                            <div class="col-3 align-self-center">
                                                <div class="round ">
                                                    <i class="mdi mdi-star text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="col-9 align-self-center text-right">
                                                <div class="m-l-10 ">
                                                    <h5 class="mt-0">50</h5>
                                                    <p class="mb-0 text-muted">Total Ads</p>
                                                </div>
                                            </div>                                                                
                                        </div>
                                        <div class="progress mt-3" style="height:3px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                      
                    </div><!--end col-->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">                                 
                                <div class="row">
                                    <div class="col-8">
                                        <h3> $ 40214.00</h3>
                                        <h6 class="text-lightdark">Total Profit</h6>
                                    </div>
                                                                                  
                                </div>
                            </div><!--end card-body-->
                           
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                
                <div class="row"> 
                    
                                                 
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="header-title mt-0 mb-0">Weather</h5>
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 text-center align-self-center">    
                                        <h6 class="">San Francisco, California</h6>                                                      
                                        <p class="text-muted">SUNDAY <span>25<sup>th</sup> Jan</span></p>
                                        <canvas id="clear-day" width="50" height="50"></canvas>
                                        <h5 class="mt-0 "><b>32°</b></h5>
                                        <p class="text-muted  font-12">Clear Day</p>
                                        <p class="text-muted">There are many variations of passages of 
                                            Lorem Ipsum available, but the majority have suffered alteration.
                                        </p>
                                    </div> 
                                </div>
                                <div class="row ">
                                    <div class="col-4  text-center align-self-center">
                                        <h6 class="text-muted mt-0 font-14">MON</h6>
                                        <canvas id="rain" width="28" height="18"></canvas>
                                        <h6 class="text-muted font-14 mb-0">28°<i class="wi-degrees"></i></h6>
                                    </div>
                                    <div class="col-4  text-center align-self-center">
                                        <h6 class="text-muted mt-0 font-14">TUE</h6>
                                        <canvas id="wind" width="35" height="18"></canvas>
                                        <h6 class="text-muted font-14 mb-0">32°<i class="wi-degrees"></i></h6>
                                    </div>
                                    <div class="col-4  text-center align-self-center">
                                        <h6 class="text-muted mt-0 font-14">WEN</h6>
                                        <canvas id="snow" width="35" height="18"></canvas>
                                        <h6 class="text-muted font-14 mb-0">10°<i class="wi-degrees"></i></h6>
                                    </div>                               
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    
                    
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="header-title mt-0 mb-3">Calendar</h5>                                
                                <div id="v-cal">
                                    <div class="vcal-header">
                                        <button class="vcal-btn" data-calendar-toggle="previous">
                                            <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
                                            </svg>
                                        </button>
                        
                                        <div class="vcal-header__label" data-calendar-label="month">
                                            March 2017
                                        </div>
                        
                        
                                        <button class="vcal-btn" data-calendar-toggle="next">
                                            <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="vcal-week">
                                        <span>Mon</span>
                                        <span>Tue</span>
                                        <span>Wed</span>
                                        <span>Thu</span>
                                        <span>Fri</span>
                                        <span>Sat</span>
                                        <span>Sun</span>
                                    </div>
                                    <div class="vcal-body" data-calendar-area="month"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->           
                </div> <!-- end row --> 

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body new-user">
                                <h5 class="header-title mb-4 mt-0">New Users</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Users</th>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Country</th>                               
                                                <th class="border-top-0">Reviews</th>
                                                <th class="border-top-0">Socials</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle" src="assets/images/users/avatar-2.jpg" alt="user" width="30"> </td>
                                                <td>
                                                    <a href="javascript:void(0);">Ruby T. Curd</a>
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/us_flag.jpg" alt="" class="img-flag">
                                                </td>                           
                                                <td>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star-half text-warning"></i>
                                                        <i class="mdi mdi-star-outline text-warning"></i>
                                                </td>
                                                <td>
                                                    <ul class="list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"><i class="ti-facebook text-primary"></i></a></li>                                                    
                                                        <li class="list-inline-item"><a href="#"><i class="ti-linkedin text-danger"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt text-info"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle" src="assets/images/users/avatar-3.jpg" alt="user" width="30"> </td>
                                                <td>
                                                    <a href="javascript:void(0);">William A. Johnson</a>
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/french_flag.jpg" alt="" class="img-flag">
                                                </td>                            
                                                <td>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star-half text-warning"></i>
                                                        <i class="mdi mdi-star-outline text-warning"></i>
                                                </td>
                                                <td>
                                                    <ul class="list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"><i class="ti-facebook text-primary"></i></a></li>                                                    
                                                        <li class="list-inline-item"><a href="#"><i class="ti-linkedin text-danger"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt text-info"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle" src="assets/images/users/avatar-4.jpg" alt="user" width="30"> </td>
                                                <td>
                                                    <a href="javascript:void(0);">Bobby M. Gray</a>
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/spain_flag.jpg" alt="" class="img-flag">
                                                </td>                            
                                                <td>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star-half text-warning"></i>
                                                        <i class="mdi mdi-star-outline text-warning"></i>
                                                </td>
                                                <td>
                                                    <ul class="list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"><i class="ti-facebook text-primary"></i></a></li>                                                    
                                                        <li class="list-inline-item"><a href="#"><i class="ti-linkedin text-danger"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt text-info"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle" src="assets/images/users/avatar-5.jpg" alt="user" width="30"> </td>
                                                <td>
                                                    <a href="javascript:void(0);">Robert N. Carlile</a>
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/russia_flag.jpg" alt="" class="img-flag">
                                                </td>                               
                                                <td>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star-half text-warning"></i>
                                                        <i class="mdi mdi-star-outline text-warning"></i>
                                                </td>
                                                <td>
                                                    <ul class="list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"><i class="ti-facebook text-primary"></i></a></li>                                                    
                                                        <li class="list-inline-item"><a href="#"><i class="ti-linkedin text-danger"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt text-info"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle" src="assets/images/users/avatar-6.jpg" alt="user" width="30"> </td>
                                                <td>
                                                    <a href="javascript:void(0);">Ruby T. Curd</a>
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/italy_flag.jpg" alt="" class="img-flag">
                                                </td>                               
                                                <td>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star-half text-warning"></i>
                                                        <i class="mdi mdi-star-outline text-warning"></i>
                                                </td>
                                                <td>
                                                    <ul class="list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"><i class="ti-facebook text-primary"></i></a></li>                                                    
                                                        <li class="list-inline-item"><a href="#"><i class="ti-linkedin text-danger"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt text-info"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle" src="assets/images/users/avatar-2.jpg" alt="user" width="30"> </td>
                                                <td>
                                                    <a href="javascript:void(0);">Ruby T. Curd</a>
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/us_flag.jpg" alt="" class="img-flag">
                                                </td>                           
                                                <td>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star-half text-warning"></i>
                                                        <i class="mdi mdi-star-outline text-warning"></i>
                                                </td>
                                                <td>
                                                    <ul class="list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"><i class="ti-facebook text-primary"></i></a></li>                                                    
                                                        <li class="list-inline-item"><a href="#"><i class="ti-linkedin text-danger"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt text-info"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>                                                
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body new-user">
                                <h5 class="header-title mb-4 mt-0">Order List</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Product</th>
                                                <th class="border-top-0">Pro Name</th>
                                                <th class="border-top-0">Country</th>
                                                <th class="border-top-0">Order Date/Time</th>
                                                <th class="border-top-0">Pcs.</th>                                    
                                                <th class="border-top-0">Amount ($)</th>
                                                <th class="border-top-0">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img class="" src="assets/images/products/pro1.png" alt="user"> </td>
                                                <td>
                                                    Chair
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/us_flag.jpg" alt="" class="img-flag">
                                                </td>
                                                <td>3/09/2018 4:29 PM</td>
                                                <td>2</td>                                   
                                                <td> $ 50</td>
                                                <td>                                                                        
                                                    <span class="badge badge-boxed  badge-success">Shipped</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="" src="assets/images/products/pro2.png" alt="user"> </td>
                                                <td>
                                                    Mobile
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/french_flag.jpg" alt="" class="img-flag">
                                                </td>
                                                <td>3/15/2018 1:09 PM</td>
                                                <td>1</td>                                   
                                                <td> $ 70</td>
                                                <td>
                                                    <span class="badge badge-boxed  badge-danger">Delivered</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="" src="assets/images/products/pro3.png" alt="user"> </td>
                                                <td>
                                                    LED
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/spain_flag.jpg" alt="" class="img-flag">
                                                </td>
                                                <td>3/18/2018 12:09 PM</td>
                                                <td>3</td>                                   
                                                <td> $ 200</td>
                                                <td>
                                                    <span class="badge badge-boxed badge-warning">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="" src="assets/images/products/pro4.png" alt="user"> </td>
                                                <td>
                                                    Chair
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/russia_flag.jpg" alt="" class="img-flag">
                                                </td>
                                                <td>3/27/2018 8:27 PM</td>
                                                <td>2</td>                                   
                                                <td> $ 20</td>
                                                <td>                                                                                                                                              
                                                    <span class="badge badge-boxed  badge-success">Shipped</span>                                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="" src="assets/images/products/pro2.png" alt="user"> </td>
                                                <td>
                                                    Mobile
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/italy_flag.jpg" alt="" class="img-flag">
                                                </td>
                                                <td>4/01/2018 5:09 PM</td>
                                                <td>1</td>                                   
                                                <td> $ 150</td>
                                                <td>
                                                    <span class="badge badge-boxed badge-warning">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="" src="assets/images/products/pro1.png" alt="user"> </td>
                                                <td>
                                                    Chair
                                                </td>
                                                <td>                                                                
                                                    <img src="assets/images/flags/us_flag.jpg" alt="" class="img-flag">
                                                </td>
                                                <td>3/09/2018 4:29 PM</td>
                                                <td>2</td>                                   
                                                <td> $ 50</td>
                                                <td>                                                                        
                                                    <span class="badge badge-boxed  badge-success">Shipped</span>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>                                                
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div> <!--end row--> 
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


@include('Master/footer');