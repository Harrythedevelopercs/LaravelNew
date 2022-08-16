<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/Home/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Home/stylesheet/style.css') }}">
</head>
<body>
    <header id="header"><!-- Header Render Here --></header>
    <main>
        <section>
            <div class="bussiness-signup pt-5 pb-5">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12">
                               <h1>Your Profile Verification Link Has Been Send To Your Email</h1>
                               <small>This Link was expired in 12 Hours</small> 
</br>
                               <a href='/business-signup/verification/{{$encrypt}}' class="btn btn-primary mt-3" id="sendmailbtn" disabled >Send Mail Again</a>
                               <a href='/login' class="btn btn-success mt-3" id="sendmailbtn" disabled >Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer"><!-- Footer Render Here --></footer>
    <script src="{{ asset('assets/Home/javascript/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('assets/Home/bootstrap/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/Home/javascript/header-render.js') }}"></script>
    <script src="{{ asset('assets/Home/javascript/footer-render.js') }}"></script>
    <script src="{{ asset('assets/Home/javascript/script.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        setTimeout(function() {
            $('#sendmailbtn').removeAttr('disabled');
        },10000)
    </script>
</body>
</html>