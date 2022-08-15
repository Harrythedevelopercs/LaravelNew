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
        <!-- End Footer -->


        <!-- jQuery  -->
       
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
      
        <!-- Datatable init js -->
        <script src="{{ asset('assets/pages/datatables.init.js') }}"></script> 

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('assets/js/evo-calendar.min.js') }}"></script>
       
        <script>
            $(document).ready(function() {
                $('#datatable2').DataTable();  
            } );
        </script>
        <script type="text/javascript">
                    $(document).ready(function(){
                        $bar = $('#bar');
                        $('#addkit').ajaxForm({
                            beforeSend:function(){
                                var percentVal = '0%';
                                $('#bar').css('width',percentVal);
                            },
                            uploadProgress:function(event,position,total,percentComplete){
                                $('#bar').show();
                                var percentVal = percentComplete+'%';
                                $('#bar').css('width',percentVal);
                                $('#bar2').html(percentVal);
                                
                            },
                            success: function(res){
                                alert(res);
                                window.location.reload();
                            }
                            
                        });

                    });


                    $(document).ready(function(){
                        $('#searchkitchen').keyup(()=>{
                            var value = $('#searchkitchen').val();
                            $.ajax({
                                type: "get",
                                url: "{{ url('/Master/find/kitchen') }}",
                                data: {
                                    'stringval':value
                                },
                                success: function(data){
                                    $("#findKitch").html(data);
                                }
                            });
                        });
                    });

                    


                </script>
                <script>
        // initialize your calendar, once the page's DOM is ready
        $(document).ready(function() {
            $("#calendar").evoCalendar({
            
            calendarEvents: [
            {
                id: 'bHay68s', // Event's ID (required)
                name: "New Year", // Event name (required)
                date: "January/1/2022", // Event date (required)
                type: "POP", // Event type (required)
                badge: "PENDING", // Event badge (optional)
                description: "Vacation leave for 3 days.", // Event description (optional)
            
            },
            {
                id: 'news', // Event's ID (required)
                name: "New Year", // Event name (required)
                date: "January/1/2022", // Event date (required)
                type: "holiday", // Event type (required)
                description: "<a class='btn btn-primary' href='/Master'>gello</a>", // Event description (optional)
            
            },
            {
                name: "Vacation Leave",
                badge: "02/13 - 02/15", // Event badge (optional)
                date: ["February/13/2022", "February/15/2022"], // Date range
                description: "Vacation leave for 3 days.", // Event description (optional)
                type: "event",
                color: "#63d867" // Event custom color (optional)
            },
            {
                id: 'news1', // Event's ID (required)
                name: "Vacation Leave",
                badge: "Hamza Farooq", // Event badge (optional)
                date: ["December/13/2022", "December/15/2022"], // Date range
                description: "Vacation leave for 3 days.", // Event description (optional)
                type: "event",
                color: "#63d867" // Event custom color (optional)
            }
            ]
  });
        })
        </script>
                
    </body>
</html>