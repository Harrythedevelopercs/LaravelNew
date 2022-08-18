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
                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-body">
                            <style>
                                .chat-box {
                                    width: 100%;
                                    height: 400px;
                                    border: 1px solid #ccc;
                                    padding: 10;
                                    box-shadow: 0px 10px 10px #ccc;
                                    overflow:hidden;
                                    overflow-y: scroll;
                                }

                                
                                .message-l {
                                    width: fit-content;
                                    background: #2829798a;
                                    padding: 0.5em 0.5em 0.5em;
                                    border-radius: 5px;
                                    margin: 0.5em;
                                    color: #FFFFFF;
                                }

                                .dialog-2{
                                    
    display: flex;
    flex-direction: column;
    align-items: flex-end;

                                }

                                .dialog-1{
                                    
                                    display: flex;
                                    flex-direction: column;
                                    align-items: flex-start;
                                
                                                                }
                               
                                .deleteMessage{
                                    display:none ;
                                }
                                .right-point:hover .deleteMessage {
                                    display: block;
                                    color :red;
                                }
                            </style>
                            <div class="chat-box" id="chatbox" resizable>
                            @foreach($chats as $chat)
                                @if($chat->user_id == $userID)
                                <div class="dialog-2">
                                    <div class="right-point" >
                                        <div class="message-l">
                                            {{ $chat->message }}
                                            </br>
                                            <small>Hamza Farooq : 10:00pm </small>
                                            <br>
                                            <small class="deleteMessage">Delete Message</small>
                                        </div>

                                    </div>
                                </div>
                                @else
                                <div class="dialog-1">
                                    <div class="left-point">
                                        <div class="message-l">
                                            {{ $chat->message }}
                                            </br>
                                            <small>Hamza Farooq : 10:00pm</small>
                                        </div>

                                    </div>
                                </div>
                                @endif
                                
                                   
                                @endforeach    
                           
                                
                                
                                   
                    
                                 
                               
                               

                            </div>
                            <textarea class="form-control mt-3 mb-2" id="message">Type Your Message</textarea>
                            <button class="btn btn-outline-success" id="sendmessage">Enter Message</button>

                            <script type="text/javascript">


                                $(document).ready(function(){
                                    setInterval(()=>{
                                            $('#chatbox').load('/Subscriber/getmessage');
                                           
                                    },1000);

                                    $('#sendmessage').click(function(){
                                        
                                        let message = $("#message").val();
                                        if(message == ""){
                                            alert("Please Enter Message First"); 
                                        }
                                        else{
                                            $.ajax({
                                                type: 'POST',
                                                url: "/Subscriber/community/message",
                                                data: {
                                                    'message' : message,
                                                    '_token' : "{{ csrf_token() }}"
                                                },
                                                beforeSend: function(){
                                                    $("#message").val("SENDING....");
                                                },
                                                success: function(Response){
                                                    $('#chatbox').load('/Subscriber/getmessage');
                                                   $("#message").val("");
                                                },
                                                error: function(){

                                                }
                                            });
                                        }
                                    })
                                });
                            </script>
                        </div>
                    </div> <!-- end row -->

                    <div class="row m-5">

                    </div>
                </div>
                <!-- end wrapper -->


                @include('FoodBusiness/footer')