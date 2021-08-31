
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--//tags -->

    @yield('head')

    <link href="{{asset('/')}}/front-end/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/')}}/front-end/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/')}}/front-end/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/front-end/css/jquery-ui.css">
    <link href="{{asset('/')}}/front-end/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>

    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>


  @include('front-end.includes.header')

  @yield('body')

<!--/grids-->
<div class="coupons">
    <div class="coupons-grids text-center">
        <div class="w3layouts_mail_grid">
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>FREE SHIPPING</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-headphones" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>24/7 SUPPORT</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>MONEY BACK GUARANTEE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-gift" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>FREE GIFT COUPONS</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>
<!--grids-->

@include('front-end.includes.footer')

<!-- login -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">
                    <div class="login">
                        <div class="login-bottom">
                            <h3>Sign up for free</h3>
                            <form>
                                <div class="sign-up">
                                    <h4>Email :</h4>
                                    <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                </div>
                                <div class="sign-up">
                                    <h4>Password :</h4>
                                    <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                </div>
                                <div class="sign-up">
                                    <h4>Re-type Password :</h4>
                                    <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                </div>
                                <div class="sign-up">
                                    <input type="submit" value="REGISTER NOW" >
                                </div>

                            </form>
                        </div>
                        <div class="login-right">
                            <h3>Sign in with your account</h3>
                            <form>
                                <div class="sign-in">
                                    <h4>Email :</h4>
                                    <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                </div>
                                <div class="sign-in">
                                    <h4>Password :</h4>
                                    <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="single-bottom">
                                    <input type="checkbox"  id="brand" value="">
                                    <label for="brand"><span></span>Remember Me.</label>
                                </div>
                                <div class="sign-in">
                                    <input type="submit" value="SIGNIN" >
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


  <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"></script>

 {{-- Script--}}


  <!-- js -->

  <!-- //js -->
  <script src="{{asset('/')}}/front-end/js/modernizr.custom.js"></script>
  <!-- Custom-JavaScript-File-Links -->
  <!-- cart-js -->
  <script src="{{asset('/')}}/front-end/js/minicart.min.js"></script>
  <script>
      // Mini Cart
      paypal.minicart.render({
          action: '#'
      });

      if (~window.location.search.indexOf('reset=true')) {
          paypal.minicart.reset();
      }
  </script>

  <!-- //cart-js -->
  <!-- script for responsive tabs -->
  <script src="{{asset('/')}}/front-end/js/easy-responsive-tabs.js"></script>
  <script>
      $(document).ready(function () {
          $('#horizontalTab').easyResponsiveTabs({
              type: 'default', //Types: default, vertical, accordion
              width: 'auto', //auto or any width like 600px
              fit: true,   // 100% fit in a container
              closed: 'accordion', // Start closed if in accordion view
              activate: function(event) { // Callback function if tab is switched
                  var $tab = $(this);
                  var $info = $('#tabInfo');
                  var $name = $('span', $info);
                  $name.text($tab.text());
                  $info.show();
              }
          });
          $('#verticalTab').easyResponsiveTabs({
              type: 'vertical',
              width: 'auto',
              fit: true
          });
      });
  </script>
  <!-- //script for responsive tabs -->
  <!-- stats -->
  <script src="{{asset('/')}}/front-end/js/jquery.waypoints.min.js"></script>
  <script src="{{asset('/')}}/front-end/js/jquery.countup.js"></script>
  <script>
      $('.counter').countUp();
  </script>
  <!-- //stats -->
  <!-- start-smoth-scrolling -->
  <script type="text/javascript" src="{{asset('/')}}/front-end/js/move-top.js"></script>
  <script type="text/javascript" src="{{asset('/')}}/front-end/js/jquery.easing.min.js"></script>
  <script type="text/javascript">
      jQuery(document).ready(function($) {
          $(".scroll").click(function(event){
              event.preventDefault();
              $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
          });
      });
  </script>
  <!-- here stars scrolling icon -->
  <script type="text/javascript">
      $(document).ready(function() {
          /*
              var defaults = {
              containerID: 'toTop', // fading element id
              containerHoverID: 'toTopHover', // fading element hover id
              scrollSpeed: 1200,
              easingType: 'linear'
              };
          */

          $().UItoTop({ easingType: 'easeOutQuart' });

      });
  </script>
  <!-- //here ends scrolling icon -->


  <!-- for bootstrap working -->
  <script type="text/javascript" src="{{asset('/')}}/front-end/js/bootstrap.js"></script>


 {{-- Script--}}


  @yield('script')

</body>
</html>
