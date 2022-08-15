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
                                    <li class="breadcrumb-item"><a href="#">Kitchen</a></li>
                                    <li class="breadcrumb-item active">{{$name}}</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Kitchen Owner : {{$name}}</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-xl-8">
                     

                      
                    </div><!--end col-->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">                                 
                                <div class="row">
                                    <div class="col-12">
                                        <h3> PROFILE  </h3>
                                        <form class="form-horizontal" method='post' action="/Master/user/profile/edit">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-4">
                                                    <label>Username</label>
                                                    <input type="text" name="name" value="{{$name}}" class="form-control" disabled='true'/>
                                                    <input type="hidden" name="name" value="{{$name}}" class="form-control" />
                                                </div>
                                                <div class="form-group col-4">
                                                    <label>Website</label>
                                                    <input type="url" name="website" value="{{ $website }}" class="form-control"/>
                                                </div>
                                                <div class="form-group col-4">
                                                    <label>description</label>
                                                    <input type="text" name="description" value="{{ $description }}" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="row">
                
                                                <div class="form-group col-4">
                                                    <label>Address</label>
                                                    <input type="text" name="address"  placeholder="{{ $address }}" class="form-control"/>
                                                </div>
                                                <div class="form-group col-4">
                                                    <label>Zip Code</label>
                                                    <input type="text" name="zipcode"  placeholder="{{ $zipcode }}" class="form-control"/>
                                                </div>

                                                <div class="form-group col-4">
                                                    <label>Created Date</label>
                                                    <input type="text" name="createddate"  placeholder="{{ $create_date }}" class="form-control"/>

                                                </div>
                                                <div class="form-group col-4">
                                                    
                                                    <a class="btn btn-primary" href='{{$map}}'>See Map</a>
                                                </div>


                                                </div>
                                                
                                            </div>
                                        </form>
                                    
                                        
                                    </div>
                                                                                  
                                </div>
                            </div><!--end card-body-->
                           
                        </div><!--end card-->

                        
                    </div><!--end col-->

                    <div class="card">
                            <div class="card-body">                                 
                                <div class="row">
                                    <div class="col-12">
                                        <h3> Features  </h3>
                                        
                                        <form class="form-horizontal" id="equipmentsform" method='post' >
                                            @csrf
                                        <div class="row">
                                            <div class="col-12">
                                            <label>Features
                                                <br>
                                                <small>Select which features, services, and equipment you have.</small>
                                            </label>
                                            </div>
                                            <div class="col-6">
                                           
                                            <input type="checkbox" name="Equipments[]" value="1" 
                                                @if(in_array("1",$equip))
                                                    checked="checked"
                                                @endif
                                               
                                            /> Event Space <br>
                                            <input type="checkbox" name="Equipments[]" value="2" 
                                                
                                                @if(in_array("2",$equip))
                                                    checked="checked"
                                                @endif
                                                    
                                             
                                             /> Gluten-Free Facility <br>
                                            <input type="checkbox" name="Equipments[]" value="3"
                                            @if(in_array("3",$equip))
                                                    checked="checked"
                                            @endif
                                            
                                            /> Retail Outlet<br>
                                            <input type="checkbox" name="Equipments[]" value="4" 
                                            @if(in_array("4",$equip))
                                                    checked="checked"
                                            @endif
                                            
                                            /> 24/7 Access <br>
                                            <input type="checkbox" name="Equipments[]" value="5" 
                                            
                                            @if(in_array("5",$equip))
                                                    checked="checked"
                                                @endif
                                            /> Retail Outlet<br>
                                            <input type="checkbox" name="Equipments[]" value="6"
                                            @if(in_array("6",$equip))
                                                    checked="checked"
                                                @endif
                                            
                                            /> Temperature Controlled <br>
                                            </div>
                                            <div class="col-6">
                                            <input type="checkbox" name="Equipments[]" value="7" 
                                            @if(in_array("7",$equip))
                                                    checked="checked"
                                                @endif
                                            /> Demo Kitchen <br>
                                            <input type="checkbox" name="Equipments[]" value="8" 
                                            @if(in_array("8",$equip))
                                                    checked="checked"
                                                @endif
                                            /> Vegan Friendly <br>
                                            <input type="checkbox" name="Equipments[]" value="9" 
                                            @if(in_array("9",$equip))
                                                    checked="checked"
                                                @endif
                                            /> Teaching Kitchen<br>
                                            <input type="checkbox" name="Equipments[]" value="10" 
                                            
                                            @if(in_array("10",$equip))
                                                    checked="checked"
                                                @endif/> Parking <br>
                                            <input type="checkbox" name="Equipments[]" value="11" 
                                            
                                            @if(in_array("11",$equip))
                                                    checked="checked"
                                                @endif/> USDA Certified Room <br>
                                            <input type="checkbox" name="Equipments[]" value="12" 
                                            
                                            @if(in_array("12",$equip))
                                                    checked="checked"
                                                @endif
                                            /> Allergen-Free Facility <br>
                                            <input type="checkbox" name="Equipments[]" value="13" 
                                            @if(in_array("13",$equip))
                                                    checked="checked"
                                                @endif
                                            
                                            /> Wifi <br>
                                            </div>
                                            <div class="col-6">
                                            <button  id="equipmentbutton" class="btn btn-warning">Update</button>
                                            </div>
                                        </div> 
                                        </form>
                                    
                                        
                                    </div>
                                                                                  
                                </div>
                            </div><!--end card-body-->
                           
                        </div><!--end card-->



                        <div class="card">
                            <div class="card-body">                                 
                                <div class="row">
                                    <div class="col-12">
                                        <h3> Additional Services  </h3>
                                        
                                        <form class="form-horizontal" id="additionalform" method='post' >
                                            @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <label>Additional Services  </label>
                                            </div>
                                            <div class="col-6">
                                            
                                                <input type="checkbox" name="Additional[]" value="1" 
                                                @if(in_array("1",$additional))
                                                    checked="checked"
                                                @endif
                                                /> Incubation <br>
                                                <input type="checkbox" name="Additional[]" value="2" 
                                                @if(in_array("2",$additional))
                                                    checked="checked"
                                                @endif
                                                /> Cold Storage <br>
                                                <input type="checkbox" name="Additional[]" value="3" 
                                                @if(in_array("3",$additional))
                                                    checked="checked"
                                                @endif
                                                /> Distribution Support <br>
                                                <input type="checkbox" name="Additional[]" value="4" 
                                                @if(in_array("4",$additional))
                                                    checked="checked"
                                                @endif
                                                /> Co-Packing <br>
                                            </div>
                                            <div class="col-6">
                                                <input type="checkbox" name="Additional[]" value="5" 
                                                @if(in_array("5",$additional))
                                                    checked="checked"
                                                @endif
                                                /> Freezer Storage <br>
                                                <input type="checkbox" name="Additional[]" value="6" 
                                                @if(in_array("6",$additional))
                                                    checked="checked"
                                                @endif
                                                /> Cold Storage <br>
                                                <input type="checkbox" name="Additional[]" value="7" 
                                                @if(in_array("7",$additional))
                                                    checked="checked"
                                                @endif
                                                /> Warehouse Storage <br>
                                                <input type="checkbox" name="Additional[]" value="8" 
                                                @if(in_array("8",$additional))
                                                    checked="checked"
                                                @endif
                                                /> Dry Storage <br>
                                            </div>
                                            <div class="col-6">
                                                <button  id="additionservice" class="btn btn-warning">Update</button>
                                            </div>
                                        </div>
                                        </form>
                                    
                                        
                                    </div>
                                                                                  
                                </div>
                            </div><!--end card-body-->
                           
                        </div><!--end card-->




                        <div class="card">
                            <div class="card-body">                                 
                                <div class="row">
                                    <div class="col-12">
                                        <h3> Equipment  </h3>
                                        
                                        <form class="form-horizontal" id="equipmentformdata" method='post' >
                                            @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <label>Equipment  </label>
                                            </div>
                                            <div class="col-6">
                                            
                                                <input type="checkbox" name="EquipmentsData[]" value="1" 
                                                @if(in_array("1",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Range <br>
                                                <input type="checkbox" name="EquipmentsData[]" value="2" 
                                                @if(in_array("2",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Commercial Oven <br>
                                                <input type="checkbox" name="EquipmentsData[]" value="3" 
                                                @if(in_array("3",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Rack Oven <br>
                                                <input type="checkbox" name="EquipmentsData[]" value="4" 
                                                @if(in_array("4",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Steam Kettle <br>
                                                <input type="checkbox" name="EquipmentsData[]" value="5" 
                                                @if(in_array("5",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Fryer <br>
                                                <input type="checkbox" name="EquipmentsData[]" value="6" 
                                                @if(in_array("6",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Mixer <br>
                                                <input type="checkbox" name="EquipmentsData[]" value="7" 
                                                @if(in_array("7",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Dough Sheeter <br>
                                                <input type="checkbox" name="EquipmentsData[]" value="8" 
                                                @if(in_array("8",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Proofer<br>
                                                <input type="checkbox" name="EquipmentsData[]" value="9" 
                                                @if(in_array("9",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Food Mixer<br>
                                                <input type="checkbox" name="EquipmentsData[]" value="10" 
                                                @if(in_array("10",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Vacuum Sealer<br>
                                                <input type="checkbox" name="EquipmentsData[]" value="11" 
                                                @if(in_array("11",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Food Dehydrator<br>
                                                <input type="checkbox" name="EquipmentsData[]" value="12" 
                                                @if(in_array("12",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Water Chiller<br>
                                                <input type="checkbox" name="EquipmentsData[]" value="13" 
                                                @if(in_array("13",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Canning Line<br>
                                                <input type="checkbox" name="EquipmentsData[]" value="14" 
                                                @if(in_array("14",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Industrial Coffee Maker<br>
                                                <input type="checkbox" name="EquipmentsData[]" value="15" 
                                                @if(in_array("15",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Prep Tables<br>
                                            </div>
                                            <div class="col-6">
                                            
                                                <input type="checkbox" name="EquipmentsData[]" value="16" 
                                                @if(in_array("16",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Induction Cooktop <br>
                                                <input type="checkbox" name="EquipmentsData[]" value="17" 
                                                @if(in_array("17",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Convection Oven <br>
                                                <input type="checkbox" name="EquipmentsData[]" value="18" 
                                                @if(in_array("18",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Commercial Grinder <br>
                                                <input type="checkbox" name="EquipmentsData[]" value="19" 
                                                @if(in_array("19",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Tilt Skillet <br>
                                                <input type="checkbox" name="EquipmentsData[]" value="20" 
                                                @if(in_array("20",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Deck Oven <br>
                                                <input type="checkbox" name="EquipmentsData[]" value="21" 
                                                @if(in_array("21",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Griddle <br>
                                                <input type="checkbox" name="EquipmentsData[]" value="22" 
                                                @if(in_array("22",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Vertical Cutter/Mix <br>
                                                <input type="checkbox" name="EquipmentsData[]" value="23" 
                                                @if(in_array("23",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Food Processor<br>
                                                <input type="checkbox" name="EquipmentsData[]" value="24" 
                                                @if(in_array("24",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Food Slicer<br>
                                                <input type="checkbox" name="EquipmentsData[]" value="25" 
                                                @if(in_array("25",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Packaging Heal Seal<br>
                                                <input type="checkbox" name="EquipmentsData[]" value="26" 
                                                @if(in_array("26",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Charbroiler <br>
                                                <input type="checkbox" name="EquipmentsData[]" value="27" 
                                                @if(in_array("27",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Blast Freezer<br>
                                                <input type="checkbox" name="EquipmentsData[]" value="28" 
                                                @if(in_array("28",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Bottling Line<br>
                                                <input type="checkbox" name="EquipmentsData[]" value="29" 
                                                @if(in_array("29",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Ice Cream Maker<br>
                                                <input type="checkbox" name="EquipmentsData[]" value="30" 
                                                @if(in_array("30",$additionall))
                                                    checked="checked"
                                                @endif
                                                /> Members Must Provide Own Equipments<br>
                                            </div>
                                            
                                            <div class="col-6">
                                                <button  id="equipmentformdatabutton" class="btn btn-warning">Update</button>
                                            </div>
                                        </div>
                                        </form>
                                    
                                        
                                    </div>
                                                                                  
                                </div>
                            </div><!--end card-body-->
                           
                        </div><!--end card-->




                        <div class="card">
                            <div class="card-body">                                 
                                <div class="row">
                                    <div class="col-12">
                                        <h3> Requirements  
                                            <br>
                                            <small>
                                            Select which businesses you accept and your contract offerings and terms.
                                            </small>
                                        </h3>
                                        
                                        <form class="form-horizontal" id="businessstagesform" method='post' >
                                            @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <label>Accepted Business Stages  </label>
                                            </div>
                                            
                                            <div class="col-6">
                                                <input type="checkbox" name="businessstages[]" value="1" 
                                                @if(in_array("1",$businessstages))
                                                    checked="checked"
                                                @endif
                                                /> Pre-venture (idea phase, limited sales)<br>
                                                <input type="checkbox" name="businessstages[]" value="2" 
                                                @if(in_array("2",$businessstages))
                                                    checked="checked"
                                                @endif
                                                /> Part-Time<br>
                                                <input type="checkbox" name="businessstages[]" value="3" 
                                                @if(in_array("3",$businessstages))
                                                    checked="checked"
                                                @endif
                                                /> New (1st Year)<br>
                                                <input type="checkbox" name="businessstages[]" value="4" 
                                                @if(in_array("4",$businessstages))
                                                    checked="checked"
                                                @endif
                                                /> Existing (3-5 Year)<br>
                                                <input type="checkbox" name="businessstages[]" value="5" 
                                                @if(in_array("5",$businessstages))
                                                    checked="checked"
                                                @endif
                                                />Other<br>
                                            </div>
                                            
                                            <div class="col-12">
                                                <button  id="businessstagesformbutton" class="btn btn-warning">Update</button>
                                            </div>
                                        </div>
                                        </form>
                                    
                                        
                                    </div>
                                                                                  
                                </div>
                            </div><!--end card-body-->
                           
                        </div><!--end card-->

                        <div class="card">
                            <div class="card-body">                                 
                                <div class="row">
                                    <div class="col-12">
                                        
                                        
                                        <form class="form-horizontal" id="acceptedbusinesstypesform" method='pomust' >
                                            @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <label>Accepted Business Types  </label>
                                            </div>
                                            
                                            <div class="col-6">
                                                <input type="checkbox" name="acceptedbusinesstypes[]" value="1" 
                                                @if(in_array("1",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Baker<br>
                                                <input type="checkbox" name="acceptedbusinesstypes[]" value="2" 
                                                @if(in_array("2",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Beverage<br>
                                                <input type="checkbox" name="acceptedbusinesstypes[]" value="3" 
                                                @if(in_array("3",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Body Care<br>
                                                <input type="checkbox" name="acceptedbusinesstypes[]" value="4" 
                                                @if(in_array("4",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Caterer<br>
                                                <input type="checkbox" name="acceptedbusinesstypes[]" value="5" 
                                                @if(in_array("5",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Chef<br>
                                                <input type="checkbox" name="acceptedbusinesstypes[]" value="6" 
                                                @if(in_array("6",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Packaged Goods (CPG)<br>
                                                <input type="checkbox" name="acceptedbusinesstypes[]" value="7" 
                                                @if(in_array("7",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Delivery-Only<br>
                                                <input type="checkbox" name="acceptedbusinesstypes[]" value="8" 
                                                @if(in_array("8",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Farmer<br>
                                            </div>
                                            <div class="col-6">
                                            <input type="checkbox" name="acceptedbusinesstypes[]" value="9" 
                                                @if(in_array("9",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Food Truck / Mobile Vendor<br>
                                            <input type="checkbox" name="acceptedbusinesstypes[]" value="10" 
                                                @if(in_array("10",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Gluten-Free<br>
                                            <input type="checkbox" name="acceptedbusinesstypes[]" value="11" 
                                                @if(in_array("11",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Instructor / Educator<br>
                                            <input type="checkbox" name="acceptedbusinesstypes[]" value="12" 
                                                @if(in_array("12",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Meal Prep<br>
                                            <input type="checkbox" name="acceptedbusinesstypes[]" value="13" 
                                                @if(in_array("13",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Pet Food<br>
                                            <input type="checkbox" name="acceptedbusinesstypes[]" value="14" 
                                                @if(in_array("14",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Restaurateur<br>
                                            <input type="checkbox" name="acceptedbusinesstypes[]" value="15" 
                                                @if(in_array("15",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Vegan<br>
                                            <input type="checkbox" name="acceptedbusinesstypes[]" value="16" 
                                                @if(in_array("16",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Wellness<br>
                                            <input type="checkbox" name="acceptedbusinesstypes[]" value="17" 
                                                @if(in_array("17",$acceptedbusinesstypes))
                                                    checked="checked"
                                                @endif
                                                /> Other<br>
                                            </div>
                                            
                                            <div class="col-12">
                                                <button  id="acceptedbusinesstypesformbutton" class="btn btn-warning">Update</button>
                                            </div>
                                        </div>
                                        </form>
                                    
                                        
                                    </div>
                                                                                  
                                </div>
                            </div><!--end card-body-->
                           
                        </div><!--end card-->


                        <div class="card">
                        
                            <div class="card-body">                                 
                                <div class="row">
                                    <div class="col-12">
                                        
                                      <a href='/Master/attach/kitchen/images/{{$id}}' class='btn btn-info'  >Upload Imagaes</a>
                                     
                                        
                                    </div>
                                                                                  
                                </div>
                            </div><!--end card-body-->
                           
                        </div><!--end card-->

                </div><!--end row-->
    
                
                
		<script type="text/javascript">
          $(document).ready(function(){
                        $('#equipmentbutton').click((e)=>{
                           e.preventDefault();
                        var sList = [];
                        $('#equipmentsform input[type=checkbox]').each(function () {
                             if(this.checked){
                                sList.push($(this).val()) ;
                                
                             }
                        });
                        
                           $.ajax({
                            type: "get",
                            url: '/Master/attach/equipments/',
                            data: {
                                'data' :sList,
                                'kitid' :"{{$id}}"
                            },
                            success: function(data){
                                alert(data);
                                window.location.reload();
                            }
                           });
                        });



                        $('#additionservice').click((e)=>{
                           e.preventDefault();
                        var asList = [];
                        $('#additionalform input[type=checkbox]').each(function () {
                             if(this.checked){
                                asList.push($(this).val()) ;
                                
                             }
                        });
                        
                           $.ajax({
                            type: "get",
                            url: '/Master/attach/equipments/additional',
                            data: {
                                'data' :asList,
                                'kitid' :"{{$id}}"
                            },
                            success: function(data){
                                alert(data);
                                window.location.reload();
                            }
                           });
                        });



                        $('#equipmentformdatabutton').click((e)=>{
                           e.preventDefault();
                        var asList = [];
                        $('#equipmentformdata input[type=checkbox]').each(function () {
                             if(this.checked){
                                asList.push($(this).val()) ;
                                
                             }
                        });
                        
                           $.ajax({
                            type: "get",
                            url: '/Master/attach/equipments/add',
                            data: {
                                'data' :asList,
                                'kitid' :"{{$id}}"
                            },
                            success: function(data){
                                alert(data);
                                window.location.reload();
                            }
                           });
                        });



                        $('#businessstagesformbutton').click((e)=>{
                           e.preventDefault();
                        var asList = [];
                        $('#businessstagesform input[type=checkbox]').each(function () {
                             if(this.checked){
                                asList.push($(this).val()) ;
                                
                             }
                        });
                        
                           $.ajax({
                            type: "get",
                            url: '/Master/attach/requirements/',
                            data: {
                                'data' :asList,
                                'kitid' :"{{$id}}"
                            },
                            success: function(data){
                                alert(data);
                                window.location.reload();
                            }
                           });
                        });



                        $('#acceptedbusinesstypesformbutton').click((e)=>{
                           e.preventDefault();
                        var asList = [];
                        $('#acceptedbusinesstypesform input[type=checkbox]').each(function () {
                             if(this.checked){
                                asList.push($(this).val()) ;
                                
                             }
                        });
                        
                           $.ajax({
                            type: "get",
                            url: '/Master/attach/business/',
                            data: {
                                'data' :asList,
                                'kitid' :"{{$id}}"
                            },
                            success: function(data){
                                alert(data);
                                window.location.reload();
                            }
                           });
                        });


                        $('#leasetypesprovidedformbutton').click((e)=>{
                           e.preventDefault();
                        var asList = [];
                        $('#leasetypesprovidedform input[type=checkbox]').each(function () {
                             if(this.checked){
                                asList.push($(this).val()) ;
                                
                             }
                        });
                        
                           $.ajax({
                            type: "get",
                            url: '/Master/attach/lease/',
                            data: {
                                'data' :asList,
                                'kitid' :"{{$id}}"
                            },
                            success: function(data){
                                alert(data);
                                window.location.reload();
                            }
                           });
                        });

			
                   
                
          
          });
               
        
          
          

                    
					   
          
          
          				
</script>
             
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


@include('Master/footer');