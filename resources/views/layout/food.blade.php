<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Arena food</title>
    <meta name="format-detection" content="telephone=no" />
    <meta
      name="viewport"
      content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <script src="{{asset('js/jsFOOD/3ts2ksMwXvKRuG480KNifJ2_JNM.js')}}"></script>
    <link rel="icon" href="{{asset('images/imagesFOOD/favicon.ico')}}" type="image/x-icon" />
    <!-- Stylesheets-->
    <link
      rel="stylesheet"
      type="text/css"
      href="http://fonts.googleapis.com/css?family=Changa+One:400,400i%7CGrand+Hotel%7CLato:300,400,400italic,700"
    />

    <script
      src="http://kit.fontawesome.com/fc9be21c0d.js"
      crossorigin="anonymous"
    ></script>
    <link href="{{asset('/assets/assetsCENTER/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/cssFOOD/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/cssFOOD/fonts.css')}}" />
    <link rel="stylesheet" href="{{asset('css/cssFOOD/style.css')}}" />
    <link href="{{asset('assets/assetsCENTER/css/haja.sass')}}" rel="stylesheet" />
    <link href="{{asset('assets/assetsCENTER/css/flyover.css')}}" rel="stylesheet" />
    <style>
      .ie-panel {
        display: none;
        background: #212121;
        padding: 10px 0;
        box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, 0.3);
        clear: both;
        text-align: center;
        position: relative;
        z-index: 1;
      }
      html.ie-10 .ie-panel,
      html.lt-ie-10 .ie-panel {
        display: block;
      }
    </style>
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top header-transparent">
        <div class="container">
          <div id="logo" class="float-left">
            <a href="/food">
              <div></div>
            </a>
          </div>

          <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
              <li>
                <a href="/"
                  >HOME <i class="la la-angle-down"></i
                ></a>
              </li>
              <li class="active"><a href="/food">FOOD</a></li>
              <li><a href="/shopping">SHOPPING</a></li>
              <li><a href="/ent">ENTERTAINMENT</a></li>
              <li><a href="/about">ABOUT US</a></li>           
                @if(Auth::check())
                  <li class="{{isset($profile) ? 'active' : ''}}"> 
                  <a href="" onclick="$('.mini_profile').fadeToggle(500);">PROFILE</a>
                  </li>
                @else
                  <li class="{{isset($sign) ? 'active' : ''}}"><a href="/signIn">SIGN IN</a></li>
                @endif 
              <li>
                <a href="/cart_page" class="pb-1"
                  ><div id="imgShop">
                    <div class="contCart">
                      <div id="P-shop" class="P-cart"><span>{{Cart::count()}}</span></div>
                    </div>
                  </div></a
                >
              </li>
            </ul>
          </nav>
          @include('layout.mini_prof')
          <!-- .nav-menu -->
        </div>
      </header>
      <!-- End Header -->
      <!-- Start Search Flyover -->
      @include('layout.showcart')
      <!-- End Search Flyover -->

      <!-- Page Content-->
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
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Java script-->
    <script src="{{asset('js/jsFOOD/core.min.js')}}"></script>
    <script src="{{asset('js/jsFOOD/script.js')}}"></script>

    <!--LIVEDEMO_00 -->

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(["_setAccount", "UA-7078796-5"]);
      _gaq.push(["_trackPageview"]);
      (function() {
        var ga = document.createElement("script");
        ga.type = "text/javascript";
        ga.async = true;
        ga.src =
          ("https:" == document.location.protocol
            ? "https://ssl"
            : "http://www") + ".google-analytics.com/ga.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </body>
  <!-- Google Tag Manager -->
  <noscript>
      <iframe
      src="http://www.googletagmanager.com/ns.html?id=GTM-P9FT69"
      height="0"
      width="0"
      style="display:none;visibility:hidden"
    ></iframe
  ></noscript>
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != "dataLayer" ? "&l=" + l : "";
      j.async = true;
      j.src = "../../www.googletagmanager.com/gtm5445.html?id=" + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-P9FT69");
  </script>
  <!-- End Google Tag Manager -->
  <script src="{{asset('assets/assetsCENTER/js/main.js')}}"></script>
</html>
