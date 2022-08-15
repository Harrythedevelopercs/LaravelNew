<div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <h4 class="mt-0 header-title">New Users</h4>
                                
                        
                                <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th>Work Email</th>
                                        <th>Joining Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    
                                    @foreach($userdata as $component )
                                    <tr>
                                        <td> {{ $component->goodName}}</td>
                                        <td> {{ $component->role}}</td>
                                        <td> {{ $component->email}}</td>
                                        <td> {{ $component->workEmail}}</td>
                                        <td> {{ $component->joiningDate}}</td>
                                        <td> {{ $component->Status}}</td>
                                        <td> <a href='/Master/user/profile/{{ $component->id}}' class="btn btn-primary">GOTO PROFILE</a></td>
                                    </tr>
                                    @endforeach
                                   
                                    
                                  
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->

                </div> <!--end row--> 