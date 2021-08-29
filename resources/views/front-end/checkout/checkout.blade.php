<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!--//tags -->

    <link href="{{asset('/')}}/front-end/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

    <link href="{{asset('/')}}/front-end/css/customer.css" rel='stylesheet' type='text/css'/>





    <link href="{{asset('/')}}/front-end/css/font-awesome.css" rel="stylesheet">


</head>


  <body>


  <div class="col-md-4 logo_agile " style="margin-top: 10px ; padding-top: 10px; padding-bottom: 5px">
      <h1><a href="{{route('/')}}"><span>E</span>lite Shoppy <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
  </div>

      <p class="text-success" style="margin:auto ; padding-bottom: 5px" id="al">You have to login to complete your valuable order. If you are not registered please register first</p>


  <div class="container" id="fcontainer">
      <div class="form-container sign-up-container">

          {{Form::open(['route'=>'customer-signup','method'=>'post'])}}

              <h2>Create Account</h2>
              <div class="social-container ">
                  <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="social"><i class="fa fa-google"></i></a>
                  <a href="#" class="social"><i class="fa fa-twitter"></i></a>
              </div>
              <span>or use your email for registration</span>
              <input class="form-control"  type="text" name="name" required placeholder="Name" />
              <input class="form-control" id="email"  type="email" name="email" required placeholder="Email" />
               <span class="bg-alert text-danger" id="res"></span>
              <input class="form-control"  type="password" name="password" required placeholder="Password" />
              <input class="form-control"  type="text" name="address" required placeholder="Address" />
              <input class="form-control"  type="text" name="phone" required title="Phone number" placeholder="01XXX-XXXXX" />
              <button type="submit"  id="reg">Sign Up</button>
          {{Form::close()}}
      </div>
      <div class="form-container sign-in-container">
          {{Form::open(['route'=>'customer-login','method'=>'post'])}}

              <h2>Login</h2>
              <div class="social-container">
                  <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="social"><i class="fa fa-google"></i></a>
                  <a href="#" class="social"><i class="fa fa-twitter"></i></a>
              </div>
              <span>or use your account</span>
              <h5 class="text-warning bg-warning">{{Session::get('message')}}</h5>
              <input class="form-control" name="email" type="email" required placeholder="Email" />
              <input class="form-control" name="password" type="password" required placeholder="Password" />
              <a style="color: #FF4B2B" href="#">Forgot your password?</a>
              <button>Sign In</button>
          {{Form::close()}}
      </div>
      <div class="overlay-container">
          <div class="overlay">
              <div class="overlay-panel overlay-left">
                  <h1>Welcome Back!</h1>
                  <p>If you've already registered please login here</p>
                  <button class="ghost" id="signIn">Login</button>
              </div>
              <div class="overlay-panel overlay-right">
                  <h1>Dear, Customer!</h1>
                  <p>If you are new please register below with your details</p>
                  <button class="ghost" id="signUp">Register</button>
              </div>
          </div>
      </div>
  </div>


  </body>



    <script src="{{asset('/')}}/front-end/js/customer.js"></script>
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
                     var data = xmlHttp.responseText;
                     if( xmlHttp.responseText === data ){
                         document.getElementById('reg').disabled = true;
                         document.getElementById('reg').style.textDecoration = 'line-through';
                         document.getElementById('reg').style.backgroundColor = 'grey';

                     }
                 }
             }
             xmlHttp.send(null);
         }

     </script>



