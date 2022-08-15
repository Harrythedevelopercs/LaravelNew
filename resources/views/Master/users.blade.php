@include('Master/header');

    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Navigation Bar-->
        @include('Master/navigation')
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
                                    <li class="breadcrumb-item active">Users</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Kitchen Owners</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-xl-8">
                        
                    @include('/Master/kitchenownercounter' ,['ownerCount' => $ownerCount])
                      
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

                
                @include('Master/userlistC',['userdata'=>$userslist]);

             
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


@include('Master/footer');