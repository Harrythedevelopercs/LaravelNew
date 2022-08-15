@include('Master/header')

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

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">                                 
                                <div class="row">
                                    <div class="col-12">
                                        <h3> Add Kitchen Owner </h3>
                                        <form class="form-horizontal" method='post' action="/Master/add/user">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-4">
                                                    <label>Username</label>
                                                    <input type="text" name="username" class="form-control"/>
                                                </div>
                                                <div class="form-group col-4">
                                                    <label>Password</label>
                                                    <input type="password" name="password" class="form-control"/>
                                                </div>
                                                <div class="form-group col-4">
                                                    <label>Email</label>
                                                    <input type="email" name="email" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-4">
                                                    <label>Full Name</label>
                                                    <input type="text" name="fullname" class="form-control"/>
                                                </div>
                
                                                <div class="form-group col-4">
                                                    <label>Work Email</label>
                                                    <input type="email" name="workemail" class="form-control"/>
                                                </div>
                                                <div class="form-group col-4">
                                                @if(session('successmessageSK'))
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    {{ session('successmessageSK') }}
                                                    </div>
                                                @endif
                                                </div>
                                                <div class="form-group col-12">
                                                    <input type="submit" name="submit" value="Add User" class="btn btn-primary"/>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                                                                  
                                </div>
                            </div><!--end card-body-->
                           
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
    
                
                

             
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


@include('Master/footer');