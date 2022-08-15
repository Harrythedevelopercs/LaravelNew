<div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <h4 class="mt-0 header-title">Kitchens</h4>
                                
                        
                                <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                                    <thead>
                                    <tr>
                                        <th>Logo</th>
                                        <th>Name</th>
                                        <th>Kitchen Type</th>
                                        <th>Renters Limit</th>
                                        <th>Zip Code</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    
                                    @foreach($userdata as $component )
                                    <tr>
                                        <td> <img src="{{ asset('uploads/'.$component->kitchenLogo) }}" class="img-responsive" width="50" /></td>
                                        <td> {{ $component->name}}</td>
                                        <td> {{ $component->kitchenType}}</td>
                                        <td> {{ $component->renters}}</td>
                                        <td> {{ $component->zipCode}}</td>
                                        <td> {{ $component->status}}</td>
                                        <td> <a href='/Master/kitchen/profile/{{ $component->id}}' class="btn btn-primary">GOTO PROFILE</a></td>
                                    </tr>
                                    @endforeach
                                   
                                    
                                  
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->

                </div> <!--end row--> 