<!-- <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Krowd Kitchen Master</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body> -->

@include('Master/header')

    <body>
        
        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Navigation Bar-->
        @include('Master/navigation')
        <!-- End Navigation Bar-->
<div class="container" style="margin-top:15%"></div>
<div class="container mt-5">
  <h1>
    Upload Images For Your Kitchen
  </h1>
    <form  id="upload-image-form" method="POST" enctype="multipart/form-data" action="{{ url('/Master/attach/kitchen/images/upload/') }}">
        @csrf
        <div class="form-group">
            <input type="file" name="files[]" multiple="multiple" class="form-control" id="image-input">
            
            <input type="hidden" name="kitchenid" value="{{ $kitid }}" id="kitchenname">
            <span class="text-danger" id="image-input-error"></span>
        </div>
        <div class="progress">
            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" id='bar1' aria-valuenow="40"
            aria-valuemin="0" aria-valuemax="100" style="width:50%;display:none">
                    <span id="bar3">40% </span> 
            </div>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-success">Upload</button>
        </div>

    </form>

    <div class="container" style="background:#28317942;padding:10px 10px ">
        <div class="row">
            @php
                $counter = 0;
            @endphp
            @foreach($images as $image => $item)

            <div class="col-4 p-3" >
                
                <img src="{{ asset('uploads/'.$item) }}" width="100%" />
                <a class="btn btn-info" href="/Master/attach/kitchen/images/delete/" style="position:relative;top:-10%;left:10px;border-radius:60px;color:white">X</a>
                
            </div>
            @endforeach
           
        </div>
    </div>
</div>
 <!-- Footer -->
 <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © 2022 krowdkitchen by HarryKennedy.
                    </div>
                </div>
            </div>
        </footer>


        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js')}}"></script>

        <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- Required datatable js -->
        <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Buttons examples -->
        <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>

        

        <script src="{{ asset('assets/plugins/skycons/skycons.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/fullcalendar/vanillaCalendar.js') }}"></script>
        <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>
        <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script> 
        <script src="{{ asset('assets/pages/dashborad.js') }}"></script>


        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <!-- Datatable init js -->
        <script src="{{ asset('assets/pages/datatables.init.js') }}"></script> 

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
       
      

<script type="text/javascript">
  
 $(document).ready(function(){
                        $bar = $('#bar1');
                        $('#upload-image-form').ajaxForm({
                            beforeSend:function(){
                                var percentVal = '0%';
                                $('#bar1').css('width',percentVal);
                            },
                            uploadProgress:function(event,position,total,percentComplete){
                                $('#bar1').show();
                                var percentVal = percentComplete+'%';
                                $('#bar1').css('width',percentVal);
                                $('#bar3').html(percentVal);
                                
                            },
                            success: function(res){
                                $('#bar3').html("Completed");
                                console.log(res);
                                window.location.reload();
                            }
                            
                        });

                    });


</script>

</body>
</html>