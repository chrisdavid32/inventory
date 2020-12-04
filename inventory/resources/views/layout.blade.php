<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta content="width=device-width, initial-scale=1.0" name="viewport">

 <title>Inventory Management System</title>
 <meta content="" name="descriptison">
 <meta content="" name="keywords">

 <!-- Favicons -->
 <link href="assets/img/favicon.png" rel="icon">
 <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

 <!-- Vendor CSS Files -->
 <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
 <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
 <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
 <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
 <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
 <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

 <header id="header" class="fixed-top">
  <div class="container">

   <div class="logo float-left">
    <!-- Uncomment below if you prefer to use an text logo -->
    <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
    <a href="#intro" class="scrollto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
   </div>

   <nav class="main-nav float-right d-none d-lg-block">
    <ul>
     @if(Request::is('login'))
     <li><a href="/">Home</a></li>
     <li><a href="login">Administrator Login</a></li>
     @else
     <li><a href="/">Home</a></li>
     <li><a href="#about">About Us</a></li>
     <li><a href="#contact">Contact Us</a></li>
     <li><a href="login">Administrator Login</a></li>
     @endif
    </ul>
   </nav><!-- .main-nav -->

  </div>
 </header><!-- #header -->

 @yield('content')
 <footer id="footer">
  <div class="container">
   <div class="copyright">
    &copy; Copyright <strong>Inventory System</strong>. All Rights Reserved
   </div>
   <div class="credits">
   </div>
  </div>
 </footer><!-- End Footer -->

 <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

 <!-- Vendor JS Files -->
 <script src="assets/vendor/jquery/jquery.min.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
 <script src="assets/vendor/php-email-form/validate.js"></script>
 <script src="assets/vendor/counterup/counterup.min.js"></script>
 <script src="assets/vendor/mobile-nav/mobile-nav.js"></script>
 <script src="assets/vendor/wow/wow.min.js"></script>
 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
 <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
 <script src="assets/vendor/venobox/venobox.min.js"></script>

 <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>

</body>

</html>