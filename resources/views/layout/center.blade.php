<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Arena center</title>
    <meta content="" name="descriptison" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{asset('assets/assetsCENTER/img/logo_ARENA_CENTER-2.png')}}" rel="icon" />
    <link href="{{asset('assets/assetsCENTER/img/apple-touch-icon.png')}}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/fc9be21c0d.js"
      crossorigin="anonymous"
    ></script>
    <!-- Vendor CSS Files -->
    <link
      href="{{asset('assets/assetsCENTER/vendor/bootstrap/css/bootstrap.min.css')}}"
      rel="stylesheet"
    />
    <link href="{{asset('assets/assetsCENTER/vendor/animate.css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/assetsCENTER/vendor/icofont/icofont.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/assetsCENTER/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/assetsCENTER/vendor/venobox/venobox.css')}}" rel="stylesheet" />
    <link
      href="{{asset('assets/assetsCENTER/vendor/owl.carousel/assets/owl.carousel.min.css')}}"
      rel="stylesheet"
    />
    <link href="{{asset('assets/assetsCENTER/vendor/aos/aos.css')}}" rel="stylesheet" />

    @yield('style')

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/assetsCENTER/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/assetsCENTER/css/haja.sass')}}" rel="stylesheet" />
    <link href="{{asset('assets/assetsCENTER/css/flyover.css')}}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: ARENA CENTER - v2.0.0
  * Template URL: https://SOHAIB&AYOUB.com/free-bootstrap-template-corporate-ARENA CENTER/
  * Author: SOHAIB&AYOUB.com
  * License: https://SOHAIB&AYOUB.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    @yield('header')
    <!-- End Header -->

        <!-- Start Search Flyover -->
        @include('layout.showcart')
        <!-- End Search Flyover -->

    @yield('main')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>ARENA CENTER</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://SOHAIB&AYOUB.com/">SOHAIB&AYOUB</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/assetsCENTER/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/assetsCENTER/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/assetsCENTER/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/assetsCENTER/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/assetsCENTER/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('assets/assetsCENTER/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/assetsCENTER/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/assetsCENTER/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/assetsCENTER/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/assetsCENTER/vendor/aos/aos.js')}}"></script>

    @yield('script')

    <!-- Template Main JS File -->
    <script src="{{asset('assets/assetsCENTER/js/main.js')}}"></script>
  </body>
</html>
