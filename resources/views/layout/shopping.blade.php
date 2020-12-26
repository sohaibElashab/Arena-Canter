<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arena shopping</title>

    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('plugins/pluginsSHOPPING/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/pluginsSHOPPING/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/pluginsSHOPPING/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/pluginsSHOPPING/selectbox/select_option1.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/pluginsSHOPPING/fancybox/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/pluginsSHOPPING/iziToast/css/iziToast.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/pluginsSHOPPING/prismjs/prism.css')}}" rel="stylesheet">
    <link href="{{asset('assets/assetsCENTER/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/assetsCENTER/vendor/icofont/icofont.min.css')}}" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{asset('plugins/pluginsSHOPPING/rs-plugin/css/settings.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/pluginsSHOPPING/slick/slick.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/pluginsSHOPPING/slick/slick-theme.css')}}" media="screen">


    <!-- CUSTOM CSS -->
    <link href="{{asset('assets/assetsCENTER/css/haja.sass')}}" rel="stylesheet" />
    <link href="{{asset('assets/assetsCENTER/css/flyover.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/cssSHOPPING/default.css')}}" id="option_color">
    <link href="{{asset('css/cssSHOPPING/style.css')}}" rel="stylesheet">


    <!-- Icons -->
    <link rel="shortcut icon" href="/images/imgSHOPPING/favicon.png">

  </head>

  <body class="body-wrapper version1">


    <div class="main-wrapper">
        <!-- ======= HeaderS ======= -->
        <header id="headerS" class="fixed-top header-transparent">
          <div class="container">
            <a class="navbar-brand" href="/shopping">
              <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              width="50px" height="31px">
             <path class="logo-pf" fill-rule="evenodd"  opacity="0.6" fill="rgb(71, 186, 193)"
              d="M18.000,9.000 L10.000,9.000 L6.000,9.000 L2.000,9.000 C0.900,9.000 -0.000,9.900 -0.000,11.000 L-0.000,23.000 C-0.000,27.400 3.600,31.000 8.000,31.000 L20.000,31.000 C24.400,31.000 28.000,27.400 28.000,23.000 L28.000,11.000 C28.000,9.900 27.100,9.000 26.000,9.000 L22.000,9.000 L18.000,9.000 ZM22.000,13.000 L24.000,13.000 L24.000,23.000 C24.000,25.206 22.205,27.000 20.000,27.000 L8.000,27.000 C5.794,27.000 4.000,25.206 4.000,23.000 L4.000,13.000 L6.000,13.000 L10.000,13.000 L18.000,13.000 L22.000,13.000 Z"/>
             <path class="logo-pf" fill-rule="evenodd"  opacity="0.6" fill="rgb(71, 186, 193)"
              d="M6.000,10.334 L6.000,14.000 L6.000,16.000 C6.000,17.103 6.896,18.000 8.000,18.000 C9.104,18.000 10.000,17.103 10.000,16.000 L10.000,14.000 L10.000,10.000 L10.000,8.000 C10.000,5.791 11.791,4.000 14.000,4.000 C16.209,4.000 18.000,5.791 18.000,8.000 L18.000,10.000 L18.000,14.000 L18.000,16.000 C18.000,17.103 18.896,18.000 20.000,18.000 C21.103,18.000 22.000,17.103 22.000,16.000 L22.000,14.000 L22.000,10.000 L22.000,8.000 C22.000,3.582 18.418,-0.000 14.000,-0.000 C9.582,-0.000 6.000,3.582 6.000,8.000 L6.000,10.000 "/>
             </svg>
             <span class="logoText">SHOP<span id="logoTextPing">PING</span></span>
            </a>
    
            <nav class="nav-menu float-right d-none d-lg-block">
              <ul>
                <li ><a href="/">HOME <i class="la la-angle-down"></i></a></li>
                <li><a href="/food">FOOD</a></li>
                <li class="active"><a href="/shopping">SHOPPING</a></li>
                    <li><a href="/ent">ENTERTAINMENT</a></li>
                <li><a href="/about">ABOUT US</a></li>
                @if(Auth::check())
                  <li class="{{isset($profile) ? 'active' : ''}}"> 
                  <a href="" onclick="$('.mini_profile').fadeToggle(500);">PROFILE</a>
                  </li>
                @else
                  <li class="{{isset($sign) ? 'active' : ''}}"><a href="signIn">SIGN IN</a></li>
                @endif       
                <li>
                  <a href="/cart_page" class="pb-1">
                  <div id="imgShop">
                      <div class="contCart">
                        <div id="P-shop" class="P-cart"><span>{{Cart::count()}}</span></div>
                      </div>
                    </div>
                    </a>
                </li>                
              </ul>
            </nav><!-- .nav-menu -->
            @include('layout.mini_prof')
          </div>
        </header><!-- End Header -->
          <!-- Start Search Flyover -->
          @include('layout.showcart')
          <!-- End Search Flyover -->
          @yield('main')


  <!-- ======= Footer ======= -->
  <footer id="footerS" >
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ARENA CENTER</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       Designed by <a href="https://SOHAIB&AYOUB.com/">SOHAIB&AYOUB</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

		
		<script src="{{asset('plugins/pluginsSHOPPING/jquery/jquery.min.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
		<script src="{{asset('plugins/pluginsSHOPPING/jquery/jquery-migrate-3.0.0.min.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
		<script src="{{asset('plugins/pluginsSHOPPING/jquery-ui/jquery-ui.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
		<script src="{{asset('plugins/pluginsSHOPPING/bootstrap/js/popper.min.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
		<script src="{{asset('plugins/pluginsSHOPPING/bootstrap/js/bootstrap.min.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
		<script src="{{asset('plugins/pluginsSHOPPING/rs-plugin/js/jquery.themepunch.tools.min.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
		<script src="{{asset('plugins/pluginsSHOPPING/rs-plugin/js/jquery.themepunch.revolution.min.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
		<script src="{{asset('plugins/pluginsSHOPPING/slick/slick.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
		<script src="{{asset('plugins/pluginsSHOPPING/fancybox/jquery.fancybox.min.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
		<script src="{{asset('plugins/pluginsSHOPPING/iziToast/js/iziToast.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
		<script src="{{asset('plugins/pluginsSHOPPING/prismjs/prism.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
		<script src="{{asset('plugins/pluginsSHOPPING/selectbox/jquery.selectbox-0.1.3.min.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
		<script src="{{asset('plugins/pluginsSHOPPING/countdown/jquery.syotimer.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
		<script src="{{asset('plugins/pluginsSHOPPING/velocity/velocity.min.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
		<script src="{{asset('js/jsSHOPPING/custom.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
        <script src="{{asset('assets/assetsCENTER/js/main.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
        <script src="{{asset('plugins/pluginsSHOPPING/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="dd3d900a0cfc60362b51d7be-|49" defer="">
</script>
</body>
</html>

     