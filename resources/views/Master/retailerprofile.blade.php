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
                                    <li class="breadcrumb-item"><a href="#">users</a></li>
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
                                                    <input type="text" name="username" value="{{$username}}" class="form-control" disabled='true'/>
                                                    <input type="hidden" name="usernamehide" value="{{$username}}" class="form-control" />
                                                    <input type="hidden" id="userid" value="{{$id}}" class="form-control" />
                                                </div>
                                                <div class="form-group col-4">
                                                    <label>Password</label>
                                                    <input type="password" name="password" placeholder="Enter your password to update" class="form-control"/>
                                                </div>
                                                <div class="form-group col-4">
                                                    <label>Email</label>
                                                    <input type="email" name="email" value="{{ $email }}" disabled='true' class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-4">
                                                    <label>Full Name</label>
                                                    <input type="text" name="fullname" value="{{ $name }}" placeholder="Full Name"class="form-control"/>
                                                </div>
                
                                                <div class="form-group col-4">
                                                    <label>Work Email</label>
                                                    <input type="email" name="workemail"  placeholder="{{ $workEmail }}" class="form-control"/>
                                                </div>
                                                <div class="form-group col-4">
                                                @if(session('MailMessage'))
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    {{ session('MailMessage') }}
                                                </div>
                                                @endif
                                                </div>
                                                <div class="form-group col-4">
                                                @if(session('WorkEmail'))
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    {{ session('WorkEmail') }}
                                                </div>
                                                @endif
                                                </div>
                                                <div class="form-group col-12">
                                                    <input type="submit" name="submit" value="Update User" class="btn btn-info"/>
                                                </div>
                                            </div>
                                        </form>
                                    
                                        <ul class="list-group">
                                            <li class="list-group-item">Joining Date : {{ $joinD }}</li>
                                            <li class="list-group-item">Role : {{ $role }}</li>
                                            <li class="list-group-item">Status : 
                                            @if($status == "Active")
                                                <span class="badge  rounded-pill bg-success" style="color :white">{{ $status }}</span>
                                            @elseif($status == "Pending")
                                                <span class="badge  rounded-pill bg-warning" style="color :white">{{ $status }}</span>
                                            @elseif($status == "Deactivate")
                                                <span class="badge  rounded-pill bg-danger" style="color :white">{{ $status }}</span>
                                            @endif
                                            </li>
                                        <li class="list-group-item">Kitchen Own : 

                                       @if(sizeof($kitchens) == 0)
                                       <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Attach Kitchen</button>

                                       @else
                                            @foreach($kitchens as $kitchen)
                                                <a href="/Master/kitchen/profile/{{ $kitchen->id }}" >{{ $kitchen->name }}</a>
                                            @endforeach
                                       @endif

                                        </li>
                                            <li class="list-group-item"><button class="btn btn-info" onclick="print()">Download Profile </button> 
                                            <a href="/Master/user/profile/delete/{{ $username }}" class="btn btn-danger">Delete Profile</a>
                                            @if($status == "Active")
                                                <a href="/Master/user/profile/status/deactivate/{{ $username }}" class="btn btn-warning">Deactivate Profile</a>
                                            @elseif($status == "Pending" || $status == "Deactivate")
                                                 <a href="/Master/user/profile/status/activate/{{ $username }}" class="btn btn-success">Activate Profile</a>
                                            @endif
                                        </li>
                                        </ul>
                                        
                                    </div>
                                                                                  
                                </div>
                            </div><!--end card-body-->
                           
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
    
                <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Find Kitchen</h4>
        </div>
        <div class="modal-body">
          
            <div class="form-group">
            <label for="pwd">Enter Kitchen Name</label>
            <input type="text" id="searchkitchen" class="form-control" placeholder="Enter Kitchen Name">
            <br><br>
            <div id="findKitch"></div>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
                

             
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


@include('Master/footer');