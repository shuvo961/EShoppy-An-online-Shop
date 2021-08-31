<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/stylereg.css">
</head>
<body>

<div class="main">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <a href="{{route('/')}}">                    <img class="" style="position: relative; right: 15px" width="250px" src="{{asset('/')}}/img/logo.png">
                    </a>
                    <h3 style="text-decoration: underline;  font-size: 18px">Sign up</h3>

                    {{Form::open(['route'=>'customer-signup','method'=>'post','class'=>'register-form','id'=>'register-form'])}}
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email"/>
                            <span class="pl-lg-5 ml-lg-5" style="color: red ;" id="res"></span>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="pass" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                        </div>




                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-home"></i></label>
                        <input class="form-control"  type="text" name="address" required placeholder="Address" />
                    </div>


                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-phone"></i></label>
                        <input class="form-control"  type="number" minlength="11" maxlength="11" name="phone" required title="Phone number" placeholder="01XXX-XXXXX" />
                    </div>




                        <div class="form-group form-button">
                            <input type="submit" class="form-submit" name="signup"  id="reg"  value="Register"/>
                        </div>
                    {{Form::close()}}
                </div>
                <div class="signup-image">
                    <figure><img src="{{asset('/')}}images/signup-image.jpg" alt="sing up image"></figure>
                    <a href="{{route('checkout')}}" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>


</div>

<!-- JS -->
<script src="{{asset('/')}}vendor/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}js/main.js"></script>
<script>
    var email_address = document.getElementById('email');

    email_address.onblur = function () {

        var email = document.getElementById('email').value;
        var xmlHttp = new XMLHttpRequest();
        var ServerPage = 'http://localhost/EShop/public/ajax/email/check/'+email;
        xmlHttp.open('GET',ServerPage);
        xmlHttp.onreadystatechange =function () {
            if( xmlHttp.readyState == 4 && xmlHttp.status == 200){
                document.getElementById('res').innerHTML= xmlHttp.responseText;
                if( xmlHttp.responseText == 'Already Exist' ){

                    document.getElementById('reg').disabled = true;
                }
                else{
                    document.getElementById('reg').disabled = false;
                }
            }
        }
        xmlHttp.send(null);
    }

</script>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>






