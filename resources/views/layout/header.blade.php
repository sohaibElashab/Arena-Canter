<header id="header" class="fixed-top">
      <div class="container">
        <div id="logoTitle" class="float-left">
          <a href="/">
            <div class="fogo"></div>
            <div id="logoTitle" class="float-left">
              <span id="logoTitle1">Arena</span>
              <span id="logoTitle2">center</span>
            </div>
          </a>
        </div>

        <nav class="nav-menu float-right d-none d-lg-block">
          <ul>
            <li class="{{isset($home) ? 'active' : ''}}">
              <a href="/">HOME <i class="la la-angle-down"></i></a>
            </li>
            <li class="{{isset($food) ? 'active' : ''}}">
              <a href="/food">FOOD</a>
            </li>
            <li class="{{isset($shopping) ? 'active' : ''}}">
              <a href="/shopping">SHOPPING</a>
            </li>
            <li class="{{isset($ent) ? 'active' : ''}}">
              <a href="/ent">ENTERTAINMENT</a>
            </li>
            <li class="{{isset($about) ? 'active' : ''}}">
              <a href="/about">ABOUT US</a>
            </li>
            @if(Auth::check())
                <li class="{{isset($profile) ? 'active' : ''}}"> 
                <a href="" onclick="$('.mini_profile').fadeToggle(500);">PROFILE</a>
                </li>
            @else
                <li class="{{isset($sign) ? 'active' : ''}}"><a href="/signIn">SIGN IN</a></li>
            @endif
            <li>
              <a href="/cart_page" class="pb-1">
                <div id="{{isset($cart) ? 'shop_img' : 'imgShop'}}">
                    <div class="contCart">
                       <div id="P-shop" class="P-cart"><span>{{Cart::count()}}</span>
                    </div>
                  </div>
                </div>
                </a>
            </li>
          </ul>
        </nav>
        @include('layout.mini_prof')
        <!-- .nav-menu -->
      </div>
    </header>