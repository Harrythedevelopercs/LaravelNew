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
<body style="background-image:url(https://imagedelivery.net/nJwaBs__P2JfMUeYJ4vmjQ/05dd6bb4-2e55-4449-13c5-264ee1216200/public);">
    <header id="header"><!-- Header Render Here --></header>
    <main>
        <section>
            <div class="login-and-registration">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-6">
                            <div class="login-and-registration-wrapper">
                                <div class="head">
                                    <h2>LOGIN TO YOUR ACCOUNT</h2>
                                </div>
                                @if(session('status'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('status') }}
                                        </div>
                                @endif
                                <form action="/alllogin" autocomplete="off" method="post">
                                    @csrf
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <label for="" class="d-block mb-2">EMAIL ADDRESS <span>*</span></label>
                                            <input type="email" required="" name="useremail" />
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-3">
                                            <label for="" class="d-block mb-2">PASSWORD <span>*</span></label>
                                            <input type="password" required="" name="userpassword"/>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-3 mb-3">
                                            <div class="row">
                                                
                                                <div class="col-12 ">
                                                    <p>LOST YOUR PASSWORD? <a href="/forgetpassword">CLICK HERE</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <button type="submit">LOGIN</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-6 mt-5 mt-lg-0">
                            <div class="login-and-registration-wrapper">
                                <div class="head">
                                    <h2>SIGNUP FOR KROWD KTCHEN</h2>
                                </div>
                                <div class="inner-btn">
                                    <p>I OPERATE A SHARED KITCHEN</p>
                                    <a href="/kitchen-registration" class="mt-3 mb-3">KITCHEN SIGN UP</a>
                                    <p>I RUN A FOOD BUSSINESS</p>
                                    <a href="/business-signup/" class="mt-3">FOOD BUSSINESS SIGN UP</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
</body>
</html>