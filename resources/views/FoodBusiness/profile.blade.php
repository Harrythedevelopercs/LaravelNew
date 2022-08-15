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
                    <div class="col-xl-8">
                        <div class="row">
                           

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
                                                    <h5 class="mt-0">10</h5>
                                                    <p class="mb-0 text-muted">Total Requests</p>
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
                                                    <h5 class="mt-0">10</h5>
                                                    <p class="mb-0 text-muted">Stars Ads</p>
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
                                        <h3>$40214.00</h3>
                                        <h6 class="text-lightdark">Total Credit</h6>
                                    </div>
                                                                                  
                                </div>
                            </div><!--end card-body-->
                           
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                
        <div class="row mb-5"> 
                    <div class="col-12">
                        <div class="card">
                           
                            <div class="card-body">
                            
                            <div class="row">
                 <div class="col-md-3">
                <!-- Tabs nav -->
                    <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        
                        <span class="font-weight-bold small text-uppercase">Personal Information</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        
                        <span class="font-weight-bold small text-uppercase">Business Information</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                    
                        <span class="font-weight-bold small text-uppercase">Payment Method</span></a>
                    
                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <i class="fa fa-lock mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Security</span></a>
                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-media-tab" data-toggle="pill" href="#v-pills-media" role="tab" aria-controls="v-pills-media" aria-selected="false">
                       
                        <span class="font-weight-bold small text-uppercase">Social Media</span></a>
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h4 class="  mb-4"> {{ $name }} </h4>
                        <form id="personalinformation">
                           @csrf
                            <div class="row">
                                <div class="col-6">
                                    <lable>Your Email</lable>
                                    <input type="email" name="email" disabled value="{{$email}}" class="form-control" placeholder="Your Email"/>
                                </div>
                                <div class="col-6">
                                    <lable>Your Username</lable>
                                    <input type="text" name="username" disabled value="{{$username}}" class="form-control" placeholder="Your Username"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <lable>Good Name</lable>
                                    <input type="text" name="fname" value="{{$name}}" class="form-control" placeholder="Your Good Name"/>
                                </div>
                                <div class="col-6">
                                    <lable>Joing Date</lable>
                                    <input type="text" name="jdate" value="{{$joinD}}" class="form-control" disabled />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-8">
                                    <lable>User Salt</lable>
                                    <input type="text" name="salt" value="{{$salt}}" class="form-control" disabled/>
                                </div>
                                <div class="col-4">
                                    <lable>Role</lable>
                                    <input type="text" name="role" value="{{$role}}" class="form-control" disabled/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-8">
                                    
                                    <input type="submit" class="btn btn-success" name="submit" value="Update"/>
                                </div>
                               
                            </div>
                        </form>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="  mb-4">Business Infomation</h4>
                        <form id="businessinformation" action="/Subscriber/profile/updatebusiness" enctype="multipart/form-data" method="post" >
                          @csrf
                            <div class="row">
                                <div class="col-6">
                                    <lable>Business Name</lable>
                                    <input type="text" name="bname" value="{{ $bname }}" class="form-control" placeholder="Business Name"/>
                                </div>
                                <div class="col-6">
                                    <lable>Business Category</lable>
                                    <select class="form-control" name="bcategory">
                                        <option value="0">Select Category</option>    
                                        <option value="1232">Baker</option>
                                        <option value="292">Beverage manufacturer </option>
                                        <option value="1">Caterer</option>
                                        <option value="2">Chef</option>
                                        <option value="282">Educator or cooking instructor </option>
                                        <option value="852">Farmer</option>
                                        <option value="302">Food artisan or value added producer (not a baker) </option>
                                        <option value="3">Food truck, cart, or mobile food vendor</option>
                                        <option value="1242">Pet food maker</option>
                                        <option value="9">Restauranteur</option>
                                        <option selected="selected" value="862">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <lable>Description (Optional)
                                        </br>   
                                        <small>Tell your kitchen community about your business! What products do you make? What makes your business standout? And where can people buy what you make?</small>
                                    </lable>
                                    <textarea class="form-control" name="descriptionbusinesss">...</textarea>
                                </div>
                                <div class="col-12">
                                    <h5>Types of Product</h5>
                                    
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="checkbox" name="typesofproduct[]" value="1" /> Baby Foods<br>
                                            <input type="checkbox" name="typesofproduct[]" value="2" /> Baked goods<br>
                                            <input type="checkbox" name="typesofproduct[]" value="3" /> Baking or ingredient Mix (Dry)<br>
                                            <input type="checkbox" name="typesofproduct[]" value="4" /> Beverages<br>
                                            <input type="checkbox" name="typesofproduct[]" value="5" /> Candies & Confectionery<br>
                                            <input type="checkbox" name="typesofproduct[]" value="6" /> Condiments<br>
                                            <input type="checkbox" name="typesofproduct[]" value="7" /> Consumer Packaged Goods<br>
                                            <input type="checkbox" name="typesofproduct[]" value="8" /> Dairy & Eggs<br>
                                            <input type="checkbox" name="typesofproduct[]" value="9" /> Frozen Foods<br>
                                            <input type="checkbox" name="typesofproduct[]" value="10" /> Grains/cereal/pastas<br>
                                            <input type="checkbox" name="typesofproduct[]" value="11" /> jams/jellies<br>
                                            <input type="checkbox" name="typesofproduct[]" value="12" /> Lifestyle<br>
                                            <input type="checkbox" name="typesofproduct[]" value="11" /> Meat/jerky/pates<br>
                                        </div>
                                        <div class="col-6">
                                            <input type="checkbox" name="typesofproduct[]" value="12" /> Meal or box Foods<br>
                                            <input type="checkbox" name="typesofproduct[]" value="12" /> Non-food products<br>
                                            <input type="checkbox" name="typesofproduct[]" value="13" /> Oils or Vinegars<br>
                                            <input type="checkbox" name="typesofproduct[]" value="14" /> Raw agriculture processing<br>
                                            <input type="checkbox" name="typesofproduct[]" value="15" /> Ready-to-eat foods<br>
                                            <input type="checkbox" name="typesofproduct[]" value="16" /> Sauces/seasonings<br>
                                            <input type="checkbox" name="typesofproduct[]" value="17" /> Seafoods<br>
                                            <input type="checkbox" name="typesofproduct[]" value="18" /> Snacks<br>
                                            <input type="checkbox" name="typesofproduct[]" value="19" /> Soup/stews/beans<br>
                                            <input type="checkbox" name="typesofproduct[]" value="20" /> Spreads/syrups<br>
                                            <input type="checkbox" name="typesofproduct[]" value="21" /> Vegetables/fruits<br>
                                            <input type="checkbox" name="typesofproduct[]" value="22" /> Others<br>
                                        </div>
                                    </div>        
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <lable>Business Stage</lable>
                                    <select class="form-control" name="business_stage">
                                        <option value="">Select One   </option>
                                        <option value="1072">Community group</option>
                                        <option selected="selected" value="11">Novice</option>
                                        <option value="12">Pre-venture (idea phase, no legal documents)</option>
                                        <option value="13">New (1st year) (secured legal documents)</option>
                                        <option value="14">Existing (2-3 years)</option>
                                        <option value="1082">Growing &amp; scaling up production</option>
                                        <option value="16">Other</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <lable>Logo </lable>
                                    <input type="file" name="logofile"  class="form-control" accept="image/*"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-8">
                                    
                                    <input type="submit" class="btn btn-success" name="submit" value="Update"/>
                                </div>
                               
                            </div>
                        </form>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h4 class="  mb-4">Add Payment Card</h4> 
                        <form id="paymentinformation">
                        @csrf
                            <div class="row">
                                <div class="col-12">
                                <lable>Card Number</lable>
                                <input type="text" name="cardnumber" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Enter Your Card Number" />
                                </div>
                                <div class="col-5 mt-3">
                                    <lable>Card Expiry Month</lable>
                                    <input type="text" name="cardmonth" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" placeholder="Card Expiry Month" />
                                </div>
                                <div class="col-5 mt-3">
                                    <lable>Card Expiry Year</lable>
                                    <input type="text" name="cardyear" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" placeholder="Card Expiry Year" />
                                </div>
                                <div class="col-2 mt-3">
                                    <lable>Card CSV</lable>
                                    <input type="text" name="cardcsv"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" placeholder="Card CSV" />
                                    
                                </div>
                                <div class="row mt-3">
                                <div class="col-8">
                                    
                                    <input type="submit" class="btn btn-success" name="submit" value="Update"/>
                                </div>
                                </div>
                               
                            </div>
                            
                        </form>
                        
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h4 class="  mb-4">Security</h4>
                        <form id="securitypass">
                        @csrf
                            <div class="row">
                                <div class="col-6 ">
                                <lable>New Password</lable>
                                <input type="text" name="newpassword" class="form-control"  placeholder="Enter Your New Password" />
                                </div>
                                <div class="col-6">
                                <lable>Confirm Password</lable>
                                <input type="text" name="confirmpassword" class="form-control"  placeholder="Enter Your Confirm Password" />
                                </div>
                                <div class="row mt-3">
                                <div class="col-8">  
                                    <input type="submit" class="btn btn-success" name="submit" value="Update"/>
                                </div>
                              
            
                                </div>
                               
                            </div>
                            
                        </form>
                        
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-media" role="tabpanel" aria-labelledby="v-pills-media-tab">
                        <h4 class="  mb-4">Social Media</h4>
                        <form id="socailmedia">
                        @csrf
                        <div class="col-12 mt-3">
                                <lable>Instagram</lable>
                                <input type="text" name="instagram" class="form-control"  placeholder="Enter Your Instagram link here" />
                                </div>
                                <div class="col-12 mt-3">
                                <lable>Facebook</lable>
                                <input type="text" name="Facebook" class="form-control"  placeholder="Enter Your Facebook link here" />
                                <div class="col-12 mt-3" >
                                <lable>Twitter</lable>
                                <input type="text" name="twitter" class="form-control"  placeholder="Enter Your Twitter link here" />
                                </div>
                                <div class="col-12 mt-3">
                                <lable>Website</lable>
                                <input type="text" name="Website" class="form-control"  placeholder="Enter Your Website link here" />
                                </div>
                                <div class="row mt-3">
                                <div class="col-8">  
                                    <input type="submit" class="btn btn-success" name="submit" value="Update"/>
                                </div>
                              
            
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                            </div>
                        </div>
                    </div>
                </div> <!-- end row --> 


                    

                <!-- COMPONENTS  -->
               
              
 
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

<script>
    $('#personalinformation').submit((e)=>{
        e.preventDefault();
        var form = $('#personalinformation').serialize();
        $.ajax({
            type : 'post',
            url : '/Subscriber/profile/updateprofile',
            data : form,
            success:function(Response){
                alert(Response);
                window.location.reload();

            },
            error:function(Response){
                alert(Response);
                window.location.reload();
            }
        })
    });

    
    // $('#paymentinformation').submit((e)=>{
    //     e.preventDefault();
    //     var form = $('#paymentinformation').serialize();
    //     console.log(form);
        // $('#paymentinformation').submit((e)=>{
        // e.preventDefault();
        // var form = $('#paymentinformation').serialize();
        // console.log(form);
        // $.ajax({
        //     type : 'post',
        //     url : '/Subscriber/profile/updatebusiness',
        //     data : form,
        //     success:function(Response){
        //         console.log(Response);
        //     },
        //     error:function(Response){
        //         console.log(Response);
        //     }
        // })
    // });
    $('#securitypass').submit((e)=>{
        e.preventDefault();
        var form = $('#securitypass').serialize();
        console.log(form);
        // $.ajax({
        //     type : 'post',
        //     url : '/Subscriber/profile/updatebusiness',
        //     data : form,
        //     success:function(Response){
        //         console.log(Response);
        //     },
        //     error:function(Response){
        //         console.log(Response);
        //     }
        // })
    });
    $('#socailmedia').submit((e)=>{
        e.preventDefault();
        var form = $('#socailmedia').serialize();
        console.log(form);
        // $.ajax({
        //     type : 'post',
        //     url : '/Subscriber/profile/updatebusiness',
        //     data : form,
        //     success:function(Response){
        //         console.log(Response);
        //     },
        //     error:function(Response){
        //         console.log(Response);
        //     }
        // })
    });
</script>
@include('FoodBusiness/footer');