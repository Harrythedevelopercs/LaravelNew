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
                    <div class="col-xl-12">
                     @include('/Master/kitchencounter' ,['ownerCount' => $ownerCount])  
                    </div><!--end col-->

                    

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">                                 
                                <div class="row">
                                    <div class="col-12">
                                        <h3> Add Kitchen  </h3>
                                        <form id="addkit" class="form-horizontal"  method='post' action="{{ url('/Master/add/kitchen')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-4">
                                                    <label>Name</label>
                                                    <input type="text" name="kitchenname" class="form-control"/>
                                                </div>
                                                <div class="form-group col-4">
                                                    <label>Website <small>(OPTIONAL)</small></label>
                                                    <input type="url" name="websiteurl" class="form-control"/>
                                                </div>
                                                <div class="form-group col-4">
                                                    <label>Describe Your Kitchen</label>
                                                    <input type="text" name="Description" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-4">
                                                    <label>Kitchen Type</label>
                                                    <select class="form-control" name="kitchenType">
                                                        <option value="Commissary or Shared Kitchen">Commissary or Shared Kitchen</option>
                                                        <option value="Incubator Kitchen">Incubator Kitchen</option>
                                                        <option value="Community Kitchen (church, school, etc.)">Community Kitchen (church, school, etc.)</option>
                                                        <option value="Underutilized Kitchen (restaurant, bakery, etc.)">Underutilized Kitchen (restaurant, bakery, etc.)</option>
                                                        <option value="Ghost / Cloud Kitchen (delivery only)">Ghost / Cloud Kitchen (delivery only)</option>
                                                    </select>
                                                </div>
                
                                                <div class="form-group col-4">
                                                    <label>What is the max number of renters your kitchen can support?</label>
                                                    <select class="form-control" name="Renters">
                                                        <option value="1-10">1 - 10</option>
                                                        <option value="10-40">10 - 40</option>
                                                        <option value="40-80">40 - 80</option>
                                                        <option value="80-200">80-200</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-4">
                                                    <label>Zip Code</label>
                                                    <input type="text" name="zipcode" placeholder="Zip Code" class="form-control"/>
                                                </div>
                                                <div class="form-group col-12">
                                                    <label>Street Address</label>
                                                    <input type="text" name="kitaddress" placeholder="Address " class="form-control"/>
                                                </div>
                                                
                                                <div class="form-group col-4">
                                                    <label>longitude</label>
                                                    <input type="text" name="longitude" placeholder="longitude" class="form-control"/>
                                                </div>
                                                <div class="form-group col-4">
                                                    <label>latitude</label>
                                                    <input type="text" name="latitude" placeholder="longitude" class="form-control"/>
                                                </div>
                                                <div class="form-group col-4">
                                                    <label>Logo</label>
                                                    <input type="file" name="logo" class="form-control" required="required"/>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" id='bar' aria-valuenow="40"
                                                        aria-valuemin="0" aria-valuemax="100" style="width:50%;display:none">
                                                             <span id="bar2">40% </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-4">
                                                @if(session('successmessageSK'))
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    {{ session('successmessageSK') }}
                                                    </div>
                                                @endif
                                                </div>
                                                <div class="form-group col-12">
                                                    <input type="submit" name="submit" value="Add Kitchen" class="btn btn-primary"/>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                                                                  
                                </div>
                            </div><!--end card-body-->
                           
                        </div><!--end card-->
                    </div><!--end col-->



                    <div class="col-12">
                        @include('/Master/Kitchenlist',[
                            'userdata'=> $kitchens
                            ])
                    </div>
                </div><!--end row-->
                
                
                

             
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


@include('Master/footer');