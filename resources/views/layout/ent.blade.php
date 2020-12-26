<!DOCTYPE html>
<html>


<head>
	<!-- Meta Data -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arena Entertainment</title>

	<!-- Fav Icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/assetsENT/img/fav-icons/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/assetsENT/img/fav-icons/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/assetsENT/img/fav-icons/favicon-16x16.png')}}">


	<!-- Dependency Styles -->
	<link rel="stylesheet" href="{{asset('dependencies/dependenciesENT/bootstrap/css/bootstrap.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('dependencies/dependenciesENT/fontawesome/css/fontawesome-all.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('dependencies/dependenciesENT/slick-carousel/css/slick.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('dependencies/dependenciesENT/slick-carousel/css/slick-theme.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('dependencies/dependenciesENT/simplebar/css/simplebar.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('dependencies/dependenciesENT/aos/css/aos.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('dependencies/dependenciesENT/vegas/css/vegas.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('dependencies/dependenciesENT/malihu-custom-scrollbar-plugin/css/jquery.mCustomScrollbar.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('dependencies/dependenciesENT/venobox/css/venobox.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('dependencies/dependenciesENT/jQuery-Simple-MobileMenu/css/jquery-simple-mobilemenu.css')}}" type="text/css">
    <link href="{{asset('assets/assetsCENTER/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />

	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="{{asset('assets/assetsENT/css/app.css')}}" type="text/css">

	<!-- San Fransisco Fonts -->
	<link href="{{asset('dependencies/dependenciesENT/SanFrasiscoPro/css/stylesheet.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/assetsCENTER/css/haja.sass')}}" rel="stylesheet" />
    <link href="{{asset('assets/assetsCENTER/css/flyover.css')}}" rel="stylesheet" />

</head>

<body id="home-version-1" class="home-version-1" data-style="default">

	<div id="site">
		<!-- ======= Header ======= -->
		<header id="header" class="fixed-top header-transparent">
			<div class="container">
			  <div id="logoTitle" class="float-left">
				<a href="/ent">
				  <div id="logoTitle" class="float-left">
					<img src="/assets/assetsENT/img/logo.png" alt="" class="logoimg">
				  </div>
				</a>
			  </div>
	  
			  <nav class="nav-menu float-right d-none d-lg-block">
				<ul>
				  <li >
					<a href="/">HOME <i class="la la-angle-down"></i></a>
				  </li>
				  <li><a href="/food">FOOD</a></li>
				  <li><a href="/shopping">SHOPPING</a></li>
				  <li class="active"><a href="/ent">ENTERTAINMENT</a></li>
				  <li><a href="/about">ABOUT US</a></li>
				  @if(Auth::check())
                  <li class="{{isset($profile) ? 'active' : ''}}"> 
                  <a href="" onclick="$('.mini_profile').fadeToggle(500);">PROFILE</a>
                  </li>
                @else
                  <li class="{{isset($sign) ? 'active' : ''}}"><a href="/signIn">SIGN IN</a></li>
                @endif 
				  <li>
					<a href="/cart_page" class="pb-1">
					  <div id="imgShop">
						  <div class="contCart">
							 <div id="P-shop" class="P-cart"><span>{{Cart::count()}}</span>
						  </div>
						</div>
					  </div>
					  </a>
				  </li>
				</ul>
			  </nav>
			  <!-- .nav-menu -->
			  @include('layout.mini_prof')
			</div>
		  </header>
		  <!-- End Header -->
        <!-- Start Search Flyover -->
        @include('layout.showcart')
        <!-- End Search Flyover -->
        @yield('main')

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

		<div class="backtotop">
			<i class="fas fa-angle-double-up"></i>
		</div>


	</div>
	<!-- /#site -->

	<!-- Dependency Scripts -->
	<script src="{{asset('dependencies/dependenciesENT/popper.js/popper.min.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/slick-carousel/js/slick.min.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/masonry-layout/js/masonry.pkgd.min.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/imagesloaded/js/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/aos/js/aos.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/AvarageColor/js/jquery.fillcolor.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/vegas/js/vegas.min.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/gmap3/js/gmap3.min.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/simplebar/js/simplebar.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/jquery.countdown/js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/waypoints/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/typed.js/js/typed.min.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/malihu-custom-scrollbar-plugin/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/isotope-layout/js/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/venobox/js/venobox.js')}}"></script>
	<script src="{{asset('dependencies/dependenciesENT/jQuery-Simple-MobileMenu/js/jquery-simple-mobilemenu.min.js')}}"></script>
	
	<script src="assets/js/ajax-mail.js')}}"></script>
	<!-- Site Scripts -->

	<script src="{{asset('assets/assetsENT/js/app.js')}}"></script>
    <script src="{{asset('assets/assetsCENTER/js/main.js')}}"></script>

</body>
</html>