<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NxtSquare Software Development Company</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('dist/img/nxtsquare-logo.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('dist/img/nxtsquare-logo.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('dist/img/nxtsquare-logo.png')}}">
<link rel="apple-touch-icon-precomposed" href="{{asset('dist/img/nxtsquare-logo.png')}}">
    <!-- CSS -->
    <link rel="stylesheet" href="dist/css/owl.carousel.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/animate.css">
    <link rel="stylesheet" href="dist/css/responsive.css">
    
    <!-- Js -->
    <script src="dist/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/owl.carousel.min.js"></script>
    <script src="dist/js/plugins.js"></script>
    <script src="dist/js/min/waypoints.min.js"></script>
    <script src="dist/js/jquery.counterup.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="dist/js/google-map-init.js"></script>


    <script src="dist/js/main.js"></script>


  </head>
  <body>



    <!-- Header Start -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- header Nav Start -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                  <img src="dist/img/logo-nxt.png" style="width:171px;height:51px;" alt="Logo">
                </a>
              </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="/services">Services</a></li>
<!--                    <li><a href="#">Support</a></li>
                    <li><a href="#">Service</a></li>
-->
                    <li><a href="/contact">Contact</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </header><!-- header close -->
   
@yield('content');
    
    <!-- footer Start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-manu">
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact us</a></li>
<!--                <li><a href="#">How it works</a></li>-->
                <li><a href="#">Support</a></li>
<!--
                  
                <li><a href="#">Terms</a></li>
-->
              </ul>
            </div>
            <p>Copyright &copy; Crafted by <a href="https://nxtsquare.com/">NxtSquare</a>.</p>
          </div>
        </div>
      </div>
    </footer>
            
            
  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
            
    
    </body>
</html>