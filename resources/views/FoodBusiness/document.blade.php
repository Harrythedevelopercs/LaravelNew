@include('FoodBusiness/header');

<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

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

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="d_head">

                                <h2>Verification Documents</h2>
                                <p>You will need to upload all three documents to be a verified food business.</p>
                            </div>
                            <div class="table-responsive no-display-mobile">
                                <table class="table table-striped makeStrongEasy margin-bottom-32">
                                    <tbody>
                                        <tr>
                                            <th>TITLE</th>
                                            <th>Expiration</th>
                                            <th>Action</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                        @if(sizeof($documents) != 0)
                                        @foreach($documents as $doc)
                                        <tr>
                                            <td>

                                                <a href="{{ URL::asset('uploads/'.$doc->documenturl)}}">{{ $doc->title }}</a>
                                            </td>
                                            <td>
                                                {{ $doc->expirations }}
                                            </td>
                                            <td>
                                                <a href="/Subscriber/image/delete/{{ $doc->id }}/{{ $doc->documenturl }}" class="btn btn-danger">-</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif

                                        <tr>
                                            <td class="add-new-space-calendar" colspan="4">
                                                <form action="/Subscriber/documents/verify/upload" method="post" enctype="multipart/form-data">

                                                    @csrf

                                                    <input type="file" name="files[]" multiple class="form-control">

                                                    <br>

                                                    <input type="submit" value="Uploads" class="btn btn-outline-primary btn-sm" />
                                                    <br>
                                                </form>

                                                @if(session('documentuploaded'))
                                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                    {{ session('documentuploaded') }}
                                                </div>
                                                <script>
                                                    $('.fade').fadeOut(5000);
                                                </script>
                                                @endif

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            </hr>

                            <!-------step-2----->
                            <div class="d_head">


                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped scheduling-submited-booking-table-1 margin-bottom-32">
                                    <tbody>
                                        <tr class="tfc-fees-empty-state">
                                            <th>TITLE</th>
                                            <th>Expiration</th>
                                            <th>Action</th>

                                        </tr>
                                        @if(sizeof($documentsp) != 0)
                                        @foreach($documentsp as $doc)
                                        <tr>
                                            <td>

                                                <a href="{{ URL::asset('uploads/'.$doc->documenturl)}}">{{ $doc->title }}</a>
                                            </td>
                                            <td>
                                                {{ $doc->expirations }}
                                            </td>
                                            <td>
                                                <a href="/Subscriber/image/vdelete/{{ $doc->id }}/{{ $doc->documenturl }}" class="btn btn-danger">-</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                        <tr>
                                            <td >
                                                <form action="/Subscriber/documents/own/upload" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" name="files[]" class="form-control" />
                                                    <br>
                                                    <input type="submit" value="upload" class="btn btn-outline-info" />
                                                    @if(session('vdocumentuploaded'))
                                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                        {{ session('vdocumentuploaded') }}
                                                    </div>
                                                    <script>
                                                        $('.fade').fadeOut(10000);
                                                    </script>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>

            </div> <!-- end row -->



            <!-- COMPONENTS  -->



        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->


    @include('FoodBusiness/footer');