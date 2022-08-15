<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ secure_asset('assets/Home/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/Home/stylesheet/style.css') }}">
</head>
<body>
    <header id="header"><!-- Header Render Here --></header>
    <main>
        <section>
            <div class="bussiness-signup pt-5 pb-5">
                <div class="container">
                    <form action="/business-signup" method="post" autocomplete="off">
                    @csrf
                        <div class="row">
                            <div class="d-none d-lg-block d-xl-block d-xxl-block col-lg-2 col-xl-2 col-xxl-2">
                                <a href="javascript:;" class="f-16 f-500 f-primary-color" onclick="window.history.go(-1);"><i class="fa-solid fa-arrow-left"></i>&nbsp; Go Back</a>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                                <h2 class="f-26 f-500 f-black f-height-36 mb-3">Create Your Food Bussiness Account</h2>
                                <div class="row mb-3">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <label for="">Eamil</label>
                                        <input type="email" name="useremail" id="email"  required />
                                        <div class="alert alert-danger" style="display:none" role="alert">
                                            <span id="alerttextemail"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="">First Name</label>
                                        <input type="text" name="first_name" id="first_name" required />
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 mt-3 mt-lg-0">
                                        <label for="">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="">Password</label>
                                        <input type="password" required id="password" name="password"/>
                                        <span id="passwordmatch" style="display:none;color:red">
                                            <small id="passwordmatchtext">Password Not Match Please Retype Your Passowrd</small>
                                        </span>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 mt-3 mt-lg-0">
                                        <label for="">Confirm Password</label>
                                        <input type="password" required id="confrimpassword" name="confrimpassword"/>
                                    </div>
                                </div>
                                <p>Must be at least 8 Characters</p>
                                <div class="row mb-3 mt-3">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <input type="checkbox" value="" id="">
                                        <label for="">I agree to the <a href="#">Terms and Conditions</a></label>
                                    </div>
                                </div>
                                <div class="g-recaptcha mb-3" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                                <button type="submit">Create My Account</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer"><!-- Footer Render Here --></footer>
    <script src="{{ secure_asset('assets/Home/javascript/jquery-3.6.0.js') }}"></script>
    <script src="{{ secure_asset('assets/Home/bootstrap/bootstrap.bundle.js') }}"></script>
    <script src="{{ secure_asset('assets/Home/javascript/header-render.js') }}"></script>
    <script src="{{ secure_asset('assets/Home/javascript/footer-render.js') }}"></script>
    <script src="{{ secure_asset('assets/Home/javascript/script.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        $(document).ready(function() {
            $('form').submit((e)=>{
                e.preventDefault();
                var password = $('#password').val();
                var confrimpassword = $('#confrimpassword').val();
                if(password != confrimpassword){
                    $('#password').css({
                        'border':'red 1px solid'
                    });
                    $('#confrimpassword').css({
                        'border':'red 1px solid'
                    });
                    $('#passwordmatch').show();
                    $('#passwordmatchtext').html('Password Not Match With Confirm Password');
                    return;
                }
                if(password.length < 8){
                    $('#passwordmatch').show();
                    $('#passwordmatchtext').html('Password Length Is Greater Then 8');
                    return;
                }
               
    
                $.ajax({
                    type: 'POST',
                    url: '/business-signup',
                    data: $('form').serialize(),
                    success: function(data){
                        if(data == '23000' ){
                            $('.alert').show();
                            $('#alerttextemail').html('Email Already Exists Please Enter New Email');
                            $('.alert').fadeOut(5000);
                            return;
                        }
                        window.location.replace('/business-signup/verification/'+data);
                    },
                    catch:function(data){
                        if(data == '23000'){
                            $('.alert').show();
                            $('#alerttextemail').html('Email Already Exists Please Enter New Email');
                            $('.alert').fadeOut(2000);
                        }
                    }
                })

                
            });
        });
    </script>
</body>
</html>