<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('/')}}/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">

    <div class="container-login100">

        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="images/img-01.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="post" action="{{route('customer-login')}}">
                @csrf
                     <span class="login100-form-logo">
                         <a href="{{route('/')}}"><img width="300px" src="{{asset('/')}}/img/logo.png"></a>
                     </span>
                    <span class="login100-form-title-one">
						Please login to continue Shopping
					</span>
					<span class="login100-form-title">
						Customer Login
					</span>


                    <div>


                           <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                               <input class="input100" type="text" name="email" placeholder="Email">
                               <span class="focus-input100"> </span>
                               <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                           </div>
                        <span ><h6 class="text-center text-danger">{{Session::get('message')}}</h6></span>
                           <div class="wrap-input100 validate-input" data-validate = "Password is required">
                               <input class="input100" type="password" name="password" placeholder="Password">
                               <span class="focus-input100"></span>
                               <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                           </div>

                           <div class="container-login100-form-btn">
                               <button type="submit" class="login100-form-btn">
                                   Login
                               </button>
                           </div>

                    </div>


                <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>

                <div class="text-center p-t-12">
                    <a class="txt2" href="{{route('register')}}">
                        <span class="text-primary" style="font-size: 16px">Create your Account</span>
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="{{asset('/')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="{{asset('/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{asset('/')}}/js/main.js"></script>

</body>
</html>
