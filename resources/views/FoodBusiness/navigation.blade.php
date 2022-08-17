<header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">
                    <div class="logo">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('logo.png') }}" alt="" height="200" class="logo-large">
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
                            

                            

                            
                            <!-- User-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>{{ $name }}</h5>
                                    </div>
                                    <a class="dropdown-item" href="/Subscriber/profile"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i> My Wallet</a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/Subscriber/logout"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
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
                                <a href="/Subscriber/dashboard"><i class="mdi mdi-airplay"></i>Dashboard</a>
                            </li>

                            <li class="has-submenu ">
                                <a href="/Subscriber/bookings"><i class="mdi mdi-counter"></i>Bookings</a>
                                <!-- <ul class="submenu">
                                    <li><a href="/Master/users/">Users</a></li>
                                    <li><a href="/Master/user/kitchen/add">Kitchen</a></li>
                                    <li><a href="advanced-alertify.html">Ads</a></li>
                                    <li><a href="advanced-rangeslider.html">Reports</a></li>
                                </ul> -->
                            </li>

                            <li class="has-submenu">
                                <a href="/Subscriber/calendar"><i class="mdi mdi-food"></i>Calendar</a>
                                <!-- <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="ui-buttons.html">Users</a></li>
                                            <li><a href="ui-cards.html">Business Informations</a></li>
                                            <li><a href="ui-tabs-accordions.html">Reports</a></li>
                                        </ul>
                                    </li>
                                   
                                   
                                </ul> -->
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-gauge"></i>Billing</a>
                                <!-- <ul class="submenu">
                                   
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
                                </ul> -->
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-google-pages"></i>More</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="/Subscriber/documents">Documents</a></li>
                                            <li><a href="/Subscriber/documents">Reports</a></li>
                                            <li><a href="/Subscriber/community">Community</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="pages-500.html">Payments</a></li>
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