@include('FoodBusiness/header');

    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Navigation Bar-->
        @include('FoodBusiness/navigation')
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
                            <h4 class="page-title">Welcome : {{ $name }}</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                

                
                <div class="row"> 
                <div class="col-xl-12">
                    
                    <div class="card">
                    <div class="card-body"> 
                    <h2>All Events</h2>      
                   <br>
                    <div id="calendar"></div>
                    </div><!--end col-->  
                </div>
                </div>         
                </div> <!-- end row --> 

                <div class="row">
                    <div class="col-xl-12">
                   
                    </div><!--end col-->
                    

                <!-- COMPONENTS  -->
               
              
 
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


@include('FoodBusiness/footer');