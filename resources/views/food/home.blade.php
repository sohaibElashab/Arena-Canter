@extends('layout.food')

@section('main')
<main class="page-content">
        <!-- Swiper variant 3-->
        <section class="bg-gray-darker">
          <div class="swiper-variant-1">
            <div
              class="swiper-container swiper-slider"
              data-slide-effect="fade"
              data-min-height="600px"
            >
              <div class="swiper-wrapper">
                <div
                  class="swiper-slide"
                  data-slide-bg="../images/imagesFOOD/home-slide-1-1920x800.jpg"
                >
                  <div class="swiper-slide-caption text-center">
                    <div class="container">
                      <div class="row align-items-sm-center">
                        <div class="col-sm-6 col-md-5 col-lg-4 text-uppercase">
                          <div class="group-sm">
                            <div
                              class="label-swiper h4 text-italic text-white"
                              data-caption-animate="fadeInLeftSm"
                              data-caption-delay="200"
                            >
                              <span>new</span><span>menu</span>
                            </div>
                            <h1
                              class="text-italic text-white"
                              data-caption-animate="fadeInRightSm"
                              data-caption-delay="100"
                            >
                              Pizza
                            </h1>
                          </div>
                          <h3
                            class="text-primary-lighter offset-top-5"
                            data-caption-animate="fadeInUpSmall"
                            data-caption-delay="600"
                          >
                            with seafood
                          </h3>
                          <a
                            class="btn btn-burnt-sienna btn-md btn-shape-circle offset-top-20"
                            href="/contact"
                            data-caption-animate="fadeInUpSmall"
                            data-caption-delay="800"
                            >Contact Us</a
                          >
                        </div>
                        <div
                          class="col-sm-6 col-md-7 col-lg-8 text-lg-right veil reveal-sm-inline-block"
                        >
                          <div style="position:relative;z-index:2;">
                            <div
                              data-caption-animate="fadeInLeftSm"
                              data-caption-delay="1500"
                            >
                              <img
                                class="img-caption-5 img-responsive veil reveal-lg-inline-block"
                                src="../images/imagesFOOD/slide-caption-image-6-100x118.png"
                                alt=""
                                width="100"
                                height="118"
                              />
                            </div>
                            <div
                              data-caption-animate="fadeInRotate"
                              data-caption-delay="100"
                            >
                              <img
                                class="img-responsive reveal-inline-block"
                                src="../images/imagesFOOD/slide-caption-image-1-599x596.png"
                                alt=""
                                width="599"
                                height="596"
                              />
                            </div>
                          </div>
                          <div
                            class="img-caption-1"
                            data-caption-animate="fadeInRightSm"
                            data-caption-delay="600"
                          >
                            <img
                              class="img-responsive veil reveal-lg-inline-block"
                              src="../images/imagesFOOD/slide-caption-image-2-346x336.png"
                              alt=""
                              width="346"
                              height="336"
                            />
                          </div>
                          <div
                            class="img-caption-2"
                            data-caption-animate="fadeInRightSm"
                            data-caption-delay="900"
                          >
                            <img
                              class=" img-responsive veil reveal-lg-inline-block"
                              src="../images/imagesFOOD/slide-caption-image-3-228x310.png"
                              alt=""
                              width="228"
                              height="310"
                            />
                          </div>
                          <div
                            class="img-caption-3"
                            data-caption-animate="fadeInLeftSm"
                            data-caption-delay="800"
                          >
                            <img
                              class=" img-responsive veil reveal-lg-inline-block"
                              src="../images/imagesFOOD/slide-caption-image-4-179x213.png"
                              alt=""
                              width="179"
                              height="213"
                            />
                          </div>
                          <div
                            class="img-caption-4"
                            data-caption-animate="fadeInLeftSm"
                            data-caption-delay="1000"
                          >
                            <img
                              class="img-responsive veil reveal-lg-inline-block"
                              src="../images/imagesFOOD/slide-caption-image-5-522x343.png"
                              alt=""
                              width="522"
                              height="343"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="swiper-slide"
                  data-slide-bg="../images/imagesFOOD/home-slide-2-1920x800.jpg"
                >
                  <div class="swiper-slide-caption slide-caption-2 text-center">
                    <div class="container">
                      <div class="row align-items-sm-center">
                        <div class="col-sm-6 col-md-5 col-lg-4">
                          <h5
                            class="text-italic font-secondary text-white"
                            data-caption-animate="fadeInUpSmall"
                            data-caption-delay="100"
                          >
                            From Our Chef
                          </h5>
                          <h2
                            class="text-uppercase text-white offset-top-0"
                            data-caption-animate="fadeInUpSmall"
                            data-caption-delay="400"
                          >
                            Meet the
                          </h2>
                          <h1
                            class="text-white offset-top-0"
                            data-caption-animate="fadeInUpSmall"
                            data-caption-delay="700"
                          >
                            legend
                          </h1>
                          <h5
                            class="text-primary-lighter offset-top-10"
                            data-caption-animate="fadeInUpSmall"
                            data-caption-delay="1000"
                          >
                            California Burger
                          </h5>
                          <a
                            class="btn btn-burnt-sienna btn-md btn-shape-circle offset-top-20"
                            href="/contact"
                            data-caption-animate="fadeInUpSmall"
                            data-caption-delay="800"
                            >Contact Us</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="swiper-slide"
                  data-slide-bg="../images/imagesFOOD/home-slide-3-1920x800.jpg"
                >
                  <div class="swiper-slide-caption text-uppercase text-center">
                    <div class="container">
                      <div class="row align-items-sm-center">
                        <div class="col-sm-6 col-md-5 col-lg-4">
                          <div
                            class="label-swiper label-swiper-var-2"
                            data-caption-animate="fadeInUpSmall"
                            data-caption-delay="100"
                          >
                            <h5 class="text-italic">hot stuff</h5>
                          </div>
                          <h1
                            class="small text-white"
                            data-caption-animate="fadeInUpSmall"
                            data-caption-delay="400"
                          >
                            Mexican
                          </h1>
                          <h3
                            class="text-primary-lighter offset-top-0"
                            data-caption-animate="fadeInUpSmall"
                            data-caption-delay="700"
                          >
                            Burger
                          </h3>
                          <a
                            class="btn btn-burnt-sienna btn-md btn-shape-circle offset-top-20"
                            href="/contact"
                            data-caption-animate="fadeInUpSmall"
                            data-caption-delay="800"
                            >Contact Us</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section-50 section-sm-100">
          <div class="container-wide">
            <div class="row justify-content-xs-center">
              <div class="col-sm-6 col-md-4 view-animate zoomInSmall delay-04">
                <div class="thumbnail-variant-3">
                  <img
                    class="img-responsive"
                    src="../images/imagesFOOD/index-01-566x401.jpg"
                    alt=""
                    width="566"
                    height="401"
                  />
                  <div class="caption text-center">
                    <h3 class="text-italic">For Vegans</h3>
                    <p class="big">Burger + French Fries + Drink</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 view-animate zoomInSmall delay-06">
                <div class="thumbnail-variant-3">
                  <img
                    class="img-responsive"
                    src="../images/imagesFOOD/index-02-566x401.jpg"
                    alt=""
                    width="566"
                    height="401"
                  />
                  <div class="caption text-center">
                    <h3 class="text-italic">Order Online</h3>
                    <p class="big">Available Every Day 9 AM - 11 PM</p>
                  </div>
                </div>
              </div>
              <div
                class="col-sm-6 col-md-4 offset-sm-top-30 offset-md-top-0 view-animate zoomInSmall delay-02"
              >
                <div class="thumbnail-variant-3">
                  <img
                    class="img-responsive"
                    src="../images/imagesFOOD/index-03-566x401.jpg"
                    alt=""
                    width="566"
                    height="401"
                  />
                  <div class="caption text-center">
                    <h3 class="text-italic">Cake Specials</h3>
                    <p class="big">Every Friday Only $0.99</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="section-50 section-sm-top-80 section-sm-bottom-100 bg-gray-lighter"
        >
          <h3>Our Menu</h3>
          <div class="responsive-tabs responsive-tabs-button responsive-tabs-horizontal responsive-tabs-carousel offset-top-40">
            <ul class="resp-tabs-list">
              @if($burgers->isNotEmpty())
              <li>Burgers</li>
              @endif
              @if($toasts->isNotEmpty())
              <li>Toasts</li>
              @endif
              @if($pizzas->isNotEmpty())
              <li>Pizzas</li>
              @endif
              @if($salads->isNotEmpty())
              <li>Salads</li>
              @endif
              @if($drinks->isNotEmpty())
              <li>Drinks</li>
              @endif
              @if($desserts->isNotEmpty())
              <li>Desserts</li>
              @endif
            </ul>
            <div class="resp-tabs-container text-left">
              <!--hamburger-->
              @if($burgers->isNotEmpty())
              <div>
                <!-- Slick Carousel-->
                <div
                  class="slick-slider slick-tab-centered"
                  data-arrows="true"
                  data-loop="true"
                  data-dots="false"
                  data-swipe="true"
                  data-items="1"
                  data-xs-items="1"
                  data-sm-items="2"
                  data-md-items="3"
                  data-lg-items="3"
                  data-xl-items="5"
                  data-center-mode="true"
                  data-center-padding="10">
                  @foreach ($burgers as $produit)
                  <div class="item">
                    <div class="thumbnail-menu-modern">
                      <figure>
                        <img
                          class="img-responsive"
                          src="../images/imagesFOOD/{{$produit->picture}}"
                          alt=""
                          width="310"
                          height="260"
                        />
                      </figure>
                      <div class="caption">
                        <h5>
                          <a class="link link-default" href="{{ route('food.show',$produit->id)}}">
                          {{$produit->name}}</a>
                        </h5>
                        <p class="text-italic">
                        {{$produit->description_short}}
                        </p>
                        <p class="price">{{$produit->price}}</p>

                        <a class="btn btn-shape-circle btn-burnt-sienna offset-top-15"
                          href="{{ route('food.show',$produit->id)}}">Order Online
                        </a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              @endif
              <!--Toasts-->
              @if($toasts->isNotEmpty())
              <div>
                <!-- Slick Carousel-->
                <div
                  class="slick-slider slick-tab-centered"
                  data-arrows="true"
                  data-loop="true"
                  data-dots="false"
                  data-swipe="true"
                  data-items="1"
                  data-xs-items="1"
                  data-sm-items="2"
                  data-md-items="3"
                  data-lg-items="3"
                  data-xl-items="5"
                  data-center-mode="true"
                  data-center-padding="10">
                  @foreach ($toasts as $produit)
                  <div class="item">
                    <div class="thumbnail-menu-modern">
                      <figure>
                        <img
                          class="img-responsive"
                          src="../images/imagesFOOD/{{$produit->picture}}"
                          alt=""
                          width="310"
                          height="260"
                        />
                      </figure>
                      <div class="caption">
                        <h5>
                          <a class="link link-default" href="{{ route('food.show',$produit->id)}}">
                          {{$produit->name}}</a>
                        </h5>
                        <p class="text-italic">
                        {{$produit->description_short}}
                        </p>
                        <p class="price">{{$produit->price}}</p>

                        <a class="btn btn-shape-circle btn-burnt-sienna offset-top-15"
                          href="{{ route('food.show',$produit->id)}}">Order Online
                        </a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              @endif
              <!--Pizzas-->
              @if($pizzas->isNotEmpty())
              <div>
                <!-- Slick Carousel-->
                <div
                  class="slick-slider slick-tab-centered"
                  data-arrows="true"
                  data-loop="true"
                  data-dots="false"
                  data-swipe="true"
                  data-items="1"
                  data-xs-items="1"
                  data-sm-items="2"
                  data-md-items="3"
                  data-lg-items="3"
                  data-xl-items="5"
                  data-center-mode="true"
                  data-center-padding="10">
                  @foreach ($pizzas as $produit)
                  <div class="item">
                    <div class="thumbnail-menu-modern">
                      <figure>
                        <img
                          class="img-responsive"
                          src="../images/imagesFOOD/{{$produit->picture}}"
                          alt=""
                          width="310"
                          height="260"
                        />
                      </figure>
                      <div class="caption">
                        <h5>
                          <a class="link link-default" href="{{ route('food.show',$produit->id)}}">
                          {{$produit->name}}</a>
                        </h5>
                        <p class="text-italic">
                        {{$produit->description_short}}
                        </p>
                        <p class="price">{{$produit->price}}</p>

                        <a class="btn btn-shape-circle btn-burnt-sienna offset-top-15"
                          href="{{ route('food.show',$produit->id)}}">Order Online
                        </a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              @endif
              <!--Salads-->
              @if($salads->isNotEmpty())
              <div>
                <!-- Slick Carousel-->
                <div
                  class="slick-slider slick-tab-centered"
                  data-arrows="true"
                  data-loop="true"
                  data-dots="false"
                  data-swipe="true"
                  data-items="1"
                  data-xs-items="1"
                  data-sm-items="2"
                  data-md-items="3"
                  data-lg-items="3"
                  data-xl-items="5"
                  data-center-mode="true"
                  data-center-padding="10">
                  @foreach ($salads as $produit)
                  <div class="item">
                    <div class="thumbnail-menu-modern">
                      <figure>
                        <img
                          class="img-responsive"
                          src="../images/imagesFOOD/{{$produit->picture}}"
                          alt=""
                          width="310"
                          height="260"
                        />
                      </figure>
                      <div class="caption">
                        <h5>
                          <a class="link link-default" href="{{ route('food.show',$produit->id)}}">
                          {{$produit->name}}</a>
                        </h5>
                        <p class="text-italic">
                        {{$produit->description_short}}
                        </p>
                        <p class="price">{{$produit->price}}</p>

                        <a class="btn btn-shape-circle btn-burnt-sienna offset-top-15"
                          href="{{ route('food.show',$produit->id)}}">Order Online
                        </a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              @endif
              <!--Drinks-->
              @if($drinks->isNotEmpty())
              <div>
                <!-- Slick Carousel-->
                <div
                  class="slick-slider slick-tab-centered"
                  data-arrows="true"
                  data-loop="true"
                  data-dots="false"
                  data-swipe="true"
                  data-items="1"
                  data-xs-items="1"
                  data-sm-items="2"
                  data-md-items="3"
                  data-lg-items="3"
                  data-xl-items="5"
                  data-center-mode="true"
                  data-center-padding="10">
                  @foreach ($drinks as $produit)
                  <div class="item">
                    <div class="thumbnail-menu-modern">
                      <figure>
                        <img
                          class="img-responsive"
                          src="../images/imagesFOOD/{{$produit->picture}}"
                          alt=""
                          width="310"
                          height="260"
                        />
                      </figure>
                      <div class="caption">
                        <h5>
                          <a class="link link-default" href="{{ route('food.show',$produit->id)}}">
                          {{$produit->name}}</a>
                        </h5>
                        <p class="text-italic">
                        {{$produit->description_short}}
                        </p>
                        <p class="price">{{$produit->price}}</p>

                        <a class="btn btn-shape-circle btn-burnt-sienna offset-top-15"
                          href="{{ route('food.show',$produit->id)}}">Order Online
                        </a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              @endif
              <!--deserts-->
              @if($desserts->isNotEmpty())
              <div>
                <!-- Slick Carousel-->
                <div
                  class="slick-slider slick-tab-centered"
                  data-arrows="true"
                  data-loop="true"
                  data-dots="false"
                  data-swipe="true"
                  data-items="1"
                  data-xs-items="1"
                  data-sm-items="2"
                  data-md-items="3"
                  data-lg-items="3"
                  data-xl-items="5"
                  data-center-mode="true"
                  data-center-padding="10">
                  @foreach ($desserts as $produit)
                  <div class="item">
                    <div class="thumbnail-menu-modern">
                      <figure>
                        <img
                          class="img-responsive"
                          src="../images/imagesFOOD/{{$produit->picture}}"
                          alt=""
                          width="310"
                          height="260"
                        />
                      </figure>
                      <div class="caption">
                        <h5>
                          <a class="link link-default" href="{{ route('food.show',$produit->id)}}">
                          {{$produit->name}}</a>
                        </h5>
                        <p class="text-italic">
                        {{$produit->description_short}}
                        </p>
                        <p class="price">{{$produit->price}}</p>

                        <a class="btn btn-shape-circle btn-burnt-sienna offset-top-15"
                          href="{{ route('food.show',$produit->id)}}">Order Online
                        </a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              @endif
            </div>
          </div>
        </section>
        <!--banner-->

        <!--services-->
        <section class="section-50 section-sm-130">
          <div class="container">
            <div class="row justify-content-xs-center">
              <div
                class="col-sm-6 col-md-3 view-animate fadeInUpBigger delay-04"
              >
                <!-- Box icon-->
                <article class="box-icon box-icon-variant-1">
                  <div class="icon-wrap">
                  <span
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="100" height="100"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ee8374"><path d="M48.32461,18.85281c-5.56248,0 -10.09156,4.524 -10.09156,10.0882v3.90359c0,5.5642 4.52908,10.0882 10.09156,10.0882h0.22844v10.70969c0,0.06364 0.0032,0.1262 0.01008,0.18812c0.0516,0.48848 1.40992,12.05785 9.91016,20.18313l11.96945,11.43867c0.19092,0.19608 0.68219,0.84353 0.67188,1.47476c-0.00344,0.14276 -0.01392,0.57722 -0.63828,1.17578l-11.18,10.68617c-0.37496,0.35432 -9.1712,8.84682 -9.02328,22.4675v5.95617h-1.94844c-5.56248,0 -10.09156,4.524 -10.09156,10.0882v3.90359c0,5.5642 4.52908,10.0882 10.09156,10.0882h76.13688c5.5642,0 10.08984,-4.52572 10.09156,-10.0882v-3.90359c0,-5.5642 -4.52572,-10.0882 -10.0882,-10.0882h-1.9518v-5.94274c0.07224,-13.57424 -8.64499,-22.0511 -9.09047,-22.47422l-11.18672,-10.69289c-0.62436,-0.59856 -0.63148,-1.03302 -0.63492,-1.17578c-0.01204,-0.63296 0.47832,-1.27941 0.63828,-1.44453l11.99969,-11.46891c8.49508,-8.12184 9.9273,-19.68457 9.98406,-20.17305c0.0086,-0.06536 0.01008,-0.13284 0.01008,-0.1982l0.00336,-10.83398c4.85626,-0.72573 8.59508,-4.9101 8.59664,-9.96391v-3.90359c0,-5.5642 -4.52572,-10.0882 -10.0882,-10.0882zM48.32461,22.29281h74.42023c3.66704,0 6.6482,2.98116 6.6482,6.6482v3.90359c0,3.66704 -2.98116,6.6482 -6.6482,6.6482h-74.42023c-3.66704,0 -6.65156,-2.98116 -6.65156,-6.6482v-3.90359c0,-3.66704 2.98452,-6.6482 6.65156,-6.6482zM70.05305,25.73281c-0.47472,0 -0.86,0.38528 -0.86,0.86c0,0.47472 0.38528,0.86 0.86,0.86h6.88c0.47644,0 0.86,-0.38528 0.86,-0.86c0,-0.47472 -0.38528,-0.86 -0.86,-0.86zM80.37305,25.73281c-0.47472,0 -0.86,0.38528 -0.86,0.86c0,0.47472 0.38528,0.86 0.86,0.86h3.44c0.47644,0 0.86,-0.38528 0.86,-0.86c0,-0.47472 -0.38528,-0.86 -0.86,-0.86zM87.25305,25.73281c-0.47472,0 -0.86,0.38528 -0.86,0.86c0,0.47472 0.38528,0.86 0.86,0.86h30.6207c2.55764,0 4.6393,1.84811 4.6393,4.12195v5.33805c0,0.47472 0.38528,0.86 0.86,0.86c0.47644,0 0.86,-0.38528 0.86,-0.86v-5.33805c0,-3.22156 -2.85222,-5.84195 -6.3593,-5.84195zM51.99305,42.93281h4.14883c0.48887,2.80603 1.80355,7.3071 5.40187,10.535l15.39266,13.80367c1.51016,1.39664 4.34996,5.73322 4.29664,12.1643l-0.0907,30.01602l-21.10359,17.76102h-6.3257v-5.97297c-0.13072,-12.09332 7.87072,-19.88056 7.955,-19.96141l11.18336,-10.68953c1.3932,-1.32956 1.69632,-2.71776 1.7032,-3.64828c0.0172,-2.18784 -1.50892,-3.75471 -1.69984,-3.94391l-11.99969,-11.4689c-7.21884,-6.90236 -8.72615,-16.97293 -8.86203,-17.98945zM57.88539,42.93281h56.29305c-0.47152,2.56854 -1.67619,6.45413 -4.82742,9.27859l-15.24484,13.67266c-1.8232,1.68388 -6.05505,6.37408 -5.99313,13.55508v30.4225c0,0.25284 0.1129,0.49676 0.31242,0.65844l20.59633,16.69274h-46.33586l19.87406,-16.72297c0.19092,-0.15996 0.30234,-0.39568 0.30234,-0.64164l0.0907,-30.40234c0.05848,-7.0004 -3.01406,-11.72142 -4.84758,-13.41734l-15.40273,-13.81375c-3.09992,-2.78137 -4.32884,-6.71353 -4.81734,-9.28195zM115.91859,42.93281h4.87781l-0.00336,10.59547c-0.1462,1.04576 -1.7189,11.10577 -8.93258,17.99953l-12.01648,11.4857c-0.17372,0.172 -1.69853,1.73927 -1.68305,3.92711c0.00688,0.93052 0.31172,2.317 1.7032,3.64828l11.18,10.69289c0.00172,0.00172 0.00328,0.00164 0.00672,0.00336c0.08084,0.0774 8.08583,7.80584 8.02219,19.97484v5.95281h-7.3436l-21.8964,-17.75094v-30.02945c-0.05332,-6.5188 3.79443,-10.78147 5.44219,-12.30539l15.23477,-13.65922c3.62817,-3.25195 4.9287,-7.72429 5.40859,-10.535zM48.32461,130.65281h76.14023c3.66704,0 6.6482,2.98116 6.6482,6.6482v3.90359c0,3.66704 -2.98116,6.6482 -6.6482,6.6482h-76.14023c-3.66704,0 -6.65156,-2.98116 -6.65156,-6.6482v-3.90359c0,-3.66704 2.98452,-6.6482 6.65156,-6.6482zM51.13305,142.69281c-0.47472,0 -0.86,0.38528 -0.86,0.86c0,0.47472 0.38528,0.86 0.86,0.86h5.16c0.47644,0 0.86,-0.38528 0.86,-0.86c0,-0.47472 -0.38528,-0.86 -0.86,-0.86zM59.73305,142.69281c-0.47472,0 -0.86,0.38528 -0.86,0.86c0,0.47472 0.38528,0.86 0.86,0.86h6.88c0.47644,0 0.86,-0.38528 0.86,-0.86c0,-0.47472 -0.38528,-0.86 -0.86,-0.86zM70.05305,142.69281c-0.47472,0 -0.86,0.38528 -0.86,0.86c0,0.47472 0.38528,0.86 0.86,0.86h53.32c0.47644,0 0.86,-0.38528 0.86,-0.86c0,-0.47472 -0.38528,-0.86 -0.86,-0.86z"></path></g></g></svg>
                    </span>
                  </div>
                  <div class="box-icon-header">
                    <h5>Fast Delivery</h5>
                  </div>
                  <hr class="divider-xs bg-accent" />
                  <p>
                    Everything you order at Arena food will be quickly delivered
                    to your door.
                  </p>
                </article>
              </div>
              <div
                class="col-sm-6 col-md-3 offset-top-50 offset-sm-top-0 view-animate fadeInUpBigger delay-08"
              >
                <!-- Box icon-->
                <article class="box-icon box-icon-variant-1">
                  <div class="icon-wrap">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="100" height="100"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ee8374"><path d="M78.26,25.8c-0.47495,0.00005 -0.85995,0.38505 -0.86,0.86v21.81914l-4.47469,0.15453l-2.36164,-18.55719c-0.05746,-0.44704 -0.45028,-0.7739 -0.90031,-0.74914c-0.02023,0.00153 -0.0404,0.00377 -0.06047,0.00672l-15.35906,1.95851c-0.47124,0.0594 -0.80512,0.48954 -0.74578,0.96078l3.25523,25.68914l-2.04922,0.44008l-3.1007,-16.16531c-0.08009,-0.41108 -0.44465,-0.70471 -0.86336,-0.69539c-0.04844,0.0004 -0.09677,0.0049 -0.14445,0.01344l-15.18773,2.92601c-0.46516,0.08985 -0.77008,0.53896 -0.68195,1.00445l4.15891,21.61422h-2.76477c-0.51711,-0.00041 -1.00696,0.23183 -1.33395,0.63243c-0.32699,0.4006 -0.45642,0.92704 -0.35245,1.43359l15.48,75.68c0.09261,0.45194 0.36287,0.84773 0.75008,1.09851c0.38721,0.25077 0.85893,0.3355 1.30921,0.23516c0,0 15.31559,-3.39969 34.02711,-3.39969c18.71152,0 34.02711,3.39969 34.02711,3.39969c0.45028,0.10034 0.922,0.01561 1.30921,-0.23516c0.38721,-0.25077 0.65747,-0.64657 0.75008,-1.09851l15.48,-75.68c0.10397,-0.50655 -0.02546,-1.03299 -0.35245,-1.43359c-0.32699,-0.4006 -0.81685,-0.63284 -1.33395,-0.63243h-3.37281l4.6393,-19.06109c0.11172,-0.46097 -0.17083,-0.92537 -0.63156,-1.03805l-15.0332,-3.66508c-0.05617,-0.01357 -0.11357,-0.02145 -0.17133,-0.02352c-0.0291,-0.00148 -0.05825,-0.00148 -0.08734,0c-0.37628,0.02321 -0.69359,0.28877 -0.78273,0.65508l-3.52735,14.46883l-2.41875,-0.60469l2.32133,-20.51234c0.05308,-0.47105 -0.28497,-0.89624 -0.75586,-0.9507l-15.39601,-1.7368c-0.02787,-0.00361 -0.0559,-0.00585 -0.08399,-0.00672c-0.44308,-0.00608 -0.81825,0.32548 -0.86672,0.76594l-1.20602,10.69289l-3.90695,-0.56102v-18.84273c-0.00005,-0.47495 -0.38505,-0.85995 -0.86,-0.86zM79.12,27.52h13.76v17.73414l-2.50609,-0.36953c-0.05663,-0.00906 -0.11403,-0.01244 -0.17133,-0.01008c-0.40986,0.02146 -0.74746,0.32951 -0.80625,0.7357l-5.63367,38.63953l-1.18586,-35.08531c-0.00703,-0.22872 -0.10491,-0.44521 -0.27198,-0.60156c-0.16707,-0.15636 -0.38957,-0.23969 -0.61825,-0.23156l-2.56656,0.0907zM68.96461,31.14813l2.23398,17.54266l-4.97187,0.15789c-0.22812,0.00704 -0.44408,0.10446 -0.60034,0.2708c-0.15626,0.16634 -0.24,0.38797 -0.23278,0.61608l0.95742,28.30273l-4.45117,-20.34437c-0.08943,-0.40819 -0.45931,-0.69303 -0.8768,-0.67523c-0.04976,0.00242 -0.09922,0.00917 -0.14781,0.02015l-2.43219,0.5375l-3.13094,-24.68469zM101.32547,36.41898l13.6861,1.54195l-2.20039,19.43063l-1.42437,-0.34938c-0.08345,-0.02055 -0.16951,-0.02848 -0.25531,-0.02351c-0.37659,0.02136 -0.69532,0.28561 -0.78609,0.65172l-8.73773,35.31711c-0.6023,0.27642 -1.21941,0.53455 -1.8443,0.77938l6.66164,-45.6707c0.03363,-0.22589 -0.02397,-0.45588 -0.16009,-0.63927c-0.13612,-0.18338 -0.33958,-0.3051 -0.56554,-0.33831l-5.48922,-0.80625zM50.07484,43.38633l2.94953,15.35906l-7.26633,1.5957c-0.22334,0.04828 -0.41828,0.18346 -0.54182,0.37569c-0.12353,0.19223 -0.16549,0.42571 -0.11662,0.64892l1.25305,5.7143h-5.7143l-4.06148,-21.09352zM121.90836,45.19031l13.36359,3.25859l-4.53515,18.63109h-5.00211l1.29672,-5.26414c0.11405,-0.46104 -0.16719,-0.92726 -0.6282,-1.04141l-7.82063,-1.94508zM90.97523,46.71211l2.50273,0.36953c0.09524,0.0317 0.19529,0.04648 0.29563,0.04367l5.36492,0.7693l5.45898,0.80289l-6.66836,45.73117c-3.68643,1.21756 -7.70644,1.89133 -11.92914,1.89133c-0.61899,0 -1.22093,-0.04885 -1.83086,-0.07727l-0.07727,-2.26422c0.00011,-0.00784 0.00011,-0.01568 0,-0.02352v-0.01344zM80.88703,50.08156l1.48484,43.79617v0.03359l0.07727,2.2407c-5.09706,-0.46248 -9.80858,-1.92368 -13.90781,-4.11523l-0.15117,-4.52508c0.00241,-0.05161 0.00016,-0.10333 -0.00672,-0.15453l-1.23961,-36.81539l4.76695,-0.15453c0.19327,0.0634 0.40275,0.05626 0.59125,-0.02016l5.65047,-0.19148c0.09728,0.01335 0.19613,0.00994 0.29227,-0.01008zM60.40492,58.90328l6.26523,28.65211l0.11758,3.47695c-8.17873,-5.02869 -13.46773,-13.14838 -13.46773,-22.23234c-0.00009,-0.94989 -0.77011,-1.71991 -1.72,-1.72h-3.48703l-1.1489,-5.24398l6.97406,-1.52852c0.18573,0.02098 0.37323,-0.01912 0.53414,-0.11422l3.27539,-0.70547c0.08979,-0.00522 0.17821,-0.02449 0.26203,-0.05711zM111.81008,58.92008l1.49156,0.36617c0.00447,0.00116 0.00895,0.00228 0.01344,0.00336l0.0336,0.00672c0.01666,0.00499 0.03346,0.00947 0.05039,0.01344l3.93719,0.9843c0.01004,0.00242 0.02012,0.00466 0.03023,0.00672l7.79039,1.93836l-1.19258,4.84086h-3.5643c-0.94989,0.00009 -1.71991,0.77011 -1.72,1.72c0,9.65511 -5.96786,18.22627 -15.03992,23.14609zM38.22969,70.52h11.85188c1.06495,16.40797 16.80647,29.24 35.91844,29.24c19.11196,0 34.85348,-12.83203 35.91844,-29.24h11.85188l-1.05485,5.16h-5.50265c-0.31015,-0.00439 -0.59863,0.15856 -0.75498,0.42645c-0.15635,0.26789 -0.15635,0.59921 0,0.8671c0.15635,0.26789 0.44484,0.43084 0.75498,0.42645h5.14992l-13.31656,65.10469c-2.34227,-0.4933 -15.53502,-3.18469 -33.04617,-3.18469c-17.51115,0 -30.70391,2.69138 -33.04617,3.18469l-13.31656,-65.10469h4.53852c0.97256,3.68157 2.5013,7.16045 4.59227,10.33008c0.93432,1.42749 1.97268,2.78202 3.09734,4.06485c2.12733,2.44348 4.56937,4.64103 7.28984,6.55414v-0.00336c7.37209,5.19565 16.7107,8.2943 26.84477,8.2943c3.18128,0 6.29349,-0.31315 9.26852,-0.90703l0.0168,-0.00336c0.77431,-0.14133 1.52798,-0.31736 2.27094,-0.50727l0.01008,-0.00336c2.36195,-0.57794 4.63946,-1.33224 6.82961,-2.26086c0.29413,-0.1123 0.50339,-0.37633 0.54556,-0.68833c0.04216,-0.312 -0.08952,-0.62211 -0.34329,-0.80845c-0.25377,-0.18634 -0.58908,-0.21913 -0.87414,-0.08549c-2.10662,0.89321 -4.29934,1.61995 -6.57766,2.17687c-0.00224,-0.00001 -0.00448,-0.00001 -0.00672,0c-0.72747,0.1861 -1.44715,0.35443 -2.17687,0.48711c-0.00561,0.00106 -0.01121,0.00218 -0.0168,0.00336c-2.86812,0.57369 -5.87232,0.8768 -8.94602,0.8768c-9.78353,0 -18.77784,-2.99168 -25.85375,-7.97852c-0.00112,0 -0.00224,0 -0.00336,0c-2.61075,-1.836 -4.94945,-3.9413 -6.98414,-6.27867c-1.0759,-1.2272 -2.06804,-2.51926 -2.95625,-3.87672c0,-0.00112 0,-0.00224 0,-0.00336c-2.11552,-3.20677 -3.67426,-6.70875 -4.57883,-10.4443c-0.09319,-0.3864 -0.43901,-0.65861 -0.83649,-0.65844h-5.50265zM122.70117,85.98992c-0.28363,0.01296 -0.54259,0.16507 -0.69203,0.40648c-0.74198,1.15809 -1.57235,2.27337 -2.45906,3.35938c-0.30056,0.36828 -0.24567,0.91049 0.12262,1.21105c0.36828,0.30056 0.91049,0.24567 1.21105,-0.12262c0.91929,-1.12591 1.7879,-2.29479 2.57328,-3.52062c0.17847,-0.26986 0.1904,-0.61705 0.03088,-0.89853c-0.15953,-0.28148 -0.46352,-0.44962 -0.78674,-0.43514zM117.03727,92.86992c-0.2241,0.0018 -0.43864,0.09099 -0.59797,0.24859c-2.26953,2.17699 -4.83997,4.1105 -7.65266,5.75461c-0.27597,0.14946 -0.44863,0.43737 -0.45049,0.75121c-0.00186,0.31384 0.16738,0.60378 0.44157,0.75649c0.27419,0.15271 0.60979,0.14395 0.87564,-0.02286c2.92523,-1.70989 5.60748,-3.72212 7.97852,-5.99648c0.26139,-0.24166 0.3469,-0.61937 0.21507,-0.95004c-0.13182,-0.33067 -0.45373,-0.54597 -0.80968,-0.54152z"></path></g></g></svg>
                    </span>
                  </div>
                  <div class="box-icon-header">
                    <h5>fresh food</h5>
                  </div>
                  <hr class="divider-xs bg-accent" />
                  <p>
                    We use only the best ingredients to cook the tasty fresh
                    food for you.
                  </p>
                </article>
              </div>
              <div
                class="col-sm-6 col-md-3 offset-top-50 offset-md-top-0 view-animate fadeInUpBigger delay-04"
              >
                <!-- Box icon-->
                <article class="box-icon box-icon-variant-1">
                  <div class="icon-wrap">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="100" height="100"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ee8374"><path d="M86,12.9c-7.82734,0 -14.36973,4.79551 -17.40156,11.52266c-2.43555,-1.69648 -5.22383,-2.92266 -8.39844,-2.92266c-8.28926,0 -15.05,6.76074 -15.05,15.05c0,5.00547 2.6707,9.22149 6.45,11.95938v26.74063h0.03359c0.06719,1.20937 0.41992,2.27598 0.73066,3.32578c0.16797,0.58789 0.33594,1.13379 0.44512,1.54531c0.10918,0.41152 0.13437,0.81465 0.13437,0.50391c0,2.92266 2.45234,5.20703 5.34141,5.30781c0.39473,8.33125 4.40918,15.68828 10.51484,20.53418v5.87051c-3.09902,0.94062 -10.54004,3.34258 -18.11543,6.92031c-4.94668,2.33477 -9.91855,5.14824 -13.79024,8.48242c-3.87168,3.33418 -6.79434,7.32344 -6.79434,12.00976v12.9h111.8v-12.9c0,-4.68633 -2.92266,-8.67559 -6.79434,-12.00976c-3.87168,-3.33418 -8.84355,-6.14766 -13.79024,-8.48242c-7.57539,-3.57773 -15.01641,-5.97969 -18.11543,-6.92031v-5.86211c6.10566,-4.8459 10.12012,-12.20293 10.51484,-20.54258c2.88906,-0.10078 5.34141,-2.38516 5.34141,-5.30781c0,0.31074 0.0252,-0.09238 0.13438,-0.50391c0.10918,-0.41152 0.27715,-0.95742 0.44512,-1.54531c0.31074,-1.0498 0.66348,-2.11641 0.73066,-3.32578h0.03359v-26.74062c3.7793,-2.73789 6.45,-6.95391 6.45,-11.95938c0,-8.28926 -6.76074,-15.05 -15.05,-15.05c-3.17461,0 -5.96289,1.22617 -8.39844,2.92266c-3.03184,-6.72715 -9.57422,-11.52266 -17.40156,-11.52266zM86,17.2c6.86992,0 12.60605,4.58555 14.42012,10.84238c-0.89863,0.27715 -1.52012,1.10859 -1.52012,2.05762c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-0.03359 0,-0.06719 0,-0.10078l0.88184,-0.92383c1.96524,-2.02403 4.67793,-3.27539 7.71816,-3.27539c5.96289,0 10.75,4.78711 10.75,10.75c0,3.98926 -2.1668,7.44102 -5.375,9.30547l-1.075,0.61309v13.73145h-60.2v-13.73145l-1.075,-0.61309c-3.2082,-1.86445 -5.375,-5.31621 -5.375,-9.30547c0,-5.96289 4.78711,-10.75 10.75,-10.75c3.04024,0 5.75293,1.25137 7.71816,3.27539l2.59512,2.6791l1.01621,-3.59453c1.78047,-6.31562 7.55859,-10.95996 14.47051,-10.95996zM66.65,32.25c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM96.75,34.4c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM60.2,51.6c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM68.8,51.6c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM77.4,51.6c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM86,51.6c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM94.6,51.6c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM103.2,51.6c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM111.8,51.6c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM55.9,64.5h2.7127c-0.34434,1.36895 -0.5459,2.82187 -0.5543,4.36719c-0.11758,-0.0168 -0.08398,-0.06719 -0.27715,-0.06719c-0.65508,0 -1.28496,0.12598 -1.88125,0.31914zM63.06387,64.5h45.81348c0.45352,1.25977 0.77266,2.7043 0.77266,4.3v7.10508l3.2334,-1.89805c0.5543,-0.31914 1.0666,-0.60469 1.42774,-0.78945c0.04199,-0.0252 0.05879,-0.0252 0.10078,-0.05039c0.98262,0.10078 1.68809,0.78945 1.68809,1.65449c0,0.15957 -0.25195,1.41934 -0.57949,2.54473c-0.16797,0.5543 -0.33594,1.11699 -0.47871,1.6293c-0.14278,0.5123 -0.28555,0.87344 -0.28555,1.6293c0,0.57109 -0.47031,1.075 -1.20937,1.075h-3.89688v2.93945c0,11.65703 -8.40684,21.29004 -19.47598,23.26367l-0.61309,0.10078l-0.46191,0.42832c-0.83984,0.76426 -1.89805,1.21777 -3.09902,1.21777c-1.20098,0 -2.25918,-0.45351 -3.09902,-1.21777l-0.46191,-0.42832l-0.61309,-0.10078c-11.06914,-1.97363 -19.47598,-11.60664 -19.47598,-23.26367v-2.93945h-3.89687c-0.73906,0 -1.20938,-0.50391 -1.20938,-1.075c0,-0.75586 -0.14277,-1.11699 -0.28555,-1.6293c-0.14278,-0.51231 -0.31074,-1.075 -0.47871,-1.6293c-0.32754,-1.12539 -0.57949,-2.38516 -0.57949,-2.54473c0,-0.86504 0.70547,-1.55371 1.68809,-1.65449c0.04199,0.0252 0.05879,0.0252 0.10078,0.05039c0.36113,0.18476 0.87344,0.47031 1.42774,0.78945l3.2334,1.89805v-6.9959c0,-1.63769 0.26035,-3.09063 0.71387,-4.40918zM113.3873,64.5h2.7127v4.61914c-0.59629,-0.19316 -1.22617,-0.31914 -1.88125,-0.31914c-0.18476,0 -0.15117,0.04199 -0.26875,0.05879v-0.05879c0,-1.55371 -0.21836,-2.99824 -0.5627,-4.3zM74.175,73.1c-1.78047,0 -3.225,1.44453 -3.225,3.225c0,1.78047 1.44453,3.225 3.225,3.225c1.78047,0 3.225,-1.44453 3.225,-3.225c0,-1.78047 -1.44453,-3.225 -3.225,-3.225zM97.825,73.1c-1.78047,0 -3.225,1.44453 -3.225,3.225c0,1.78047 1.44453,3.225 3.225,3.225c1.78047,0 3.225,-1.44453 3.225,-3.225c0,-1.78047 -1.44453,-3.225 -3.225,-3.225zM73.1,109.27207c2.29277,1.20098 4.77031,2.1248 7.39902,2.65391c1.52012,1.20937 3.40137,2.02402 5.50098,2.02402c2.09121,0 3.96406,-0.81465 5.47578,-2.01562c2.63711,-0.5207 5.12305,-1.44453 7.42422,-2.65391v6.81953c0,2.51113 -1.37734,5.8957 -3.7373,8.49922c-2.36836,2.60352 -5.57656,4.40078 -9.1627,4.40078c-7.525,0 -12.9,-5.375 -12.9,-12.9zM68.83359,116.84746c0.38633,9.30547 7.74336,16.45254 17.16641,16.45254c5.01387,0 9.33066,-2.50273 12.3373,-5.81172c2.82188,-3.10742 4.60234,-6.92871 4.8207,-10.64082c3.44336,1.0834 9.79258,3.2166 16.32656,6.30723c4.72832,2.23399 9.43145,4.92988 12.81601,7.84414c3.38457,2.91426 5.29941,5.9125 5.29941,8.75117v8.6h-103.2v-8.6c0,-2.83867 1.91484,-5.83691 5.29941,-8.75117c3.38457,-2.91426 8.0877,-5.61016 12.81601,-7.84414c6.53399,-3.08223 12.87481,-5.22383 16.31816,-6.30723zM43,139.75c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM51.6,139.75c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM60.2,139.75c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM68.8,139.75c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM77.4,139.75c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM86,139.75c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM94.6,139.75c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM103.2,139.75c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM111.8,139.75c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM120.4,139.75c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM129,139.75c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15z"></path></g></g></svg>
</span>
                  </div>
                  <div class="box-icon-header">
                    <h5>experienced chefs</h5>
                  </div>
                  <hr class="divider-xs bg-accent" />
                  <p>
                    Our staff consists of chefs and cooks with years of
                    experience.
                  </p>
                </article>
              </div>
              <div
                class="col-sm-6 col-md-3 offset-top-50 offset-md-top-0 view-animate fadeInUpBigger delay-06"
              >
                <!-- Box icon-->
                <article class="box-icon box-icon-variant-1">
                  <div class="icon-wrap">
                  <span
                      
                      ><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
  width="100" height="100"
  viewBox="0 0 172 172"
  style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ee8374"><path d="M13.4375,13.4375c-4.44512,0 -8.0625,3.61737 -8.0625,8.0625v21.5c0,7.48383 4.40564,13.94267 10.75,16.97009v85.15491c0,4.44513 3.61737,8.0625 8.0625,8.0625c4.44513,0 8.0625,-3.61737 8.0625,-8.0625v-11.77881c13.20558,15.92598 32.7266,25.21631 53.75,25.21631c21.01033,0 40.5446,-9.29988 53.75,-25.22681v11.78931c0,4.44513 3.61737,8.0625 8.0625,8.0625c4.44513,0 8.0625,-3.61737 8.0625,-8.0625v-47.03125l7.5271,-5.64795c2.021,-1.51037 3.2229,-3.92224 3.2229,-6.4458v-48.375c0,-13.33806 -10.84944,-24.1875 -24.1875,-24.1875c-1.48619,0 -2.6875,1.20131 -2.6875,2.6875v27.95105c-13.22264,-15.89945 -32.9196,-25.26355 -53.75,-25.26355c-15.70795,0 -30.75511,5.22254 -43,14.80224v-12.11474c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625zM13.4375,18.8125h2.6875v18.8125c0,1.48619 1.20131,2.6875 2.6875,2.6875c1.48619,0 2.6875,-1.20131 2.6875,-2.6875v-18.8125h5.375v18.8125c0,1.48619 1.20131,2.6875 2.6875,2.6875c1.48619,0 2.6875,-1.20131 2.6875,-2.6875v-18.8125h2.6875c1.4835,0 2.6875,1.204 2.6875,2.6875v21.5c0,7.40944 -6.02806,13.4375 -13.4375,13.4375c-7.40944,0 -13.4375,-6.02806 -13.4375,-13.4375v-21.5c0,-1.4835 1.204,-2.6875 2.6875,-2.6875zM145.125,19.00146c9.10525,1.30881 16.125,9.16085 16.125,18.62354h-5.375c-1.48619,0 -2.6875,1.20131 -2.6875,2.6875c0,1.48619 1.20131,2.6875 2.6875,2.6875h5.375v8.0625h-5.375c-1.48619,0 -2.6875,1.20131 -2.6875,2.6875c0,1.48619 1.20131,2.6875 2.6875,2.6875h5.375v8.0625h-5.375c-1.48619,0 -2.6875,1.20131 -2.6875,2.6875c0,1.48619 1.20131,2.6875 2.6875,2.6875h5.375v8.0625h-5.375c-1.48619,0 -2.6875,1.20131 -2.6875,2.6875c0,1.48619 1.20131,2.6875 2.6875,2.6875h5.375v2.6875c0,0.84119 -0.40149,1.64685 -1.07605,2.1521l-8.5979,6.4458c-0.67725,0.50794 -1.07605,1.30822 -1.07605,2.1521v48.375c0,1.4835 -1.204,2.6875 -2.6875,2.6875c-1.4835,0 -2.6875,-1.204 -2.6875,-2.6875zM86,24.1875c20.82544,0 40.44616,10.12133 52.54797,27.09021l1.20203,2.98669v70.04822c-12.00669,18.08816 -32.02339,28.87488 -53.75,28.87488c-21.74505,0 -41.74135,-10.78116 -53.75,-28.87488v-64.34253c6.34436,-3.02743 10.75,-9.48626 10.75,-16.97009v-2.36206c11.83941,-10.60989 27.04963,-16.45044 43,-16.45044zM86,45.6875c-23.70912,0 -43,19.29088 -43,43c0,23.70913 19.29088,43 43,43c23.70913,0 43,-19.29087 43,-43c0,-4.72731 -0.76527,-9.37299 -2.26758,-13.81543c-0.47837,-1.40287 -1.99837,-2.16331 -3.40662,-1.68494c-1.40287,0.47837 -2.16062,2.0063 -1.68494,3.41186c1.31688,3.88075 1.98413,7.94975 1.98413,12.0885c0,20.7475 -16.8775,37.625 -37.625,37.625c-20.7475,0 -37.625,-16.8775 -37.625,-37.625c0,-20.7475 16.8775,-37.625 37.625,-37.625c4.31075,0 8.53504,0.7226 12.56091,2.1416c1.39213,0.49719 2.9358,-0.23751 3.42761,-1.6377c0.49719,-1.3975 -0.23751,-2.93311 -1.6377,-3.42761c-4.601,-1.62862 -9.43002,-2.45129 -14.35083,-2.45129zM109.45789,53.54004c-0.67927,0.1038 -1.31902,0.46368 -1.75842,1.0603c-0.87881,1.19594 -0.62111,2.87949 0.57214,3.7583c3.36206,2.46981 6.27195,5.46016 8.65039,8.88135c0.52137,0.75519 1.35534,1.15479 2.20459,1.15479c0.52675,0 1.06778,-0.14979 1.53271,-0.47766c1.22013,-0.84656 1.51844,-2.52512 0.67188,-3.74255c-2.71437,-3.91031 -6.03566,-7.32449 -9.87341,-10.14636c-0.60066,-0.43941 -1.32061,-0.59196 -1.99988,-0.48816zM21.5,61.8125h5.375v83.3125c0,1.4835 -1.204,2.6875 -2.6875,2.6875c-1.4835,0 -2.6875,-1.204 -2.6875,-2.6875zM57.24585,81.31262c-1.48888,-0.23919 -2.84468,0.76346 -3.08118,2.23084c-0.2365,1.46469 0.7609,2.83943 2.22559,3.07593l5.30676,0.85559c0.14781,0.02419 0.28798,0.03149 0.43042,0.03149c1.29806,0 2.43844,-0.94008 2.65076,-2.26233c0.2365,-1.46469 -0.7609,-2.84468 -2.22559,-3.08118zM63.46069,94.39319c-0.34929,-0.01545 -0.70501,0.03763 -1.05505,0.16797l-5.03906,1.8634c-1.39212,0.51331 -2.10121,2.05905 -1.58521,3.45386c0.40312,1.08307 1.42841,1.75317 2.51953,1.75317c0.31175,0 0.6227,-0.05241 0.92908,-0.16797l5.03906,-1.8634c1.39213,-0.51331 2.10645,-2.05904 1.59045,-3.45386c-0.38498,-1.04409 -1.35093,-1.70682 -2.3988,-1.75317zM70.17419,104.48181c-0.68498,0.05845 -1.34572,0.38301 -1.82141,0.95007l-3.46436,4.10473c-0.95944,1.13413 -0.81918,2.8278 0.31494,3.78455c0.50794,0.42731 1.11943,0.63513 1.73218,0.63513c0.76594,0 1.53087,-0.3212 2.05762,-0.95007l3.46436,-4.10474c0.95944,-1.13413 0.81918,-2.83304 -0.31494,-3.78979c-0.57109,-0.48375 -1.28341,-0.68834 -1.96838,-0.62988zM94.01526,108.89624c-0.34862,-0.02486 -0.70824,0.01755 -1.0603,0.13647c-1.40287,0.48106 -2.1555,2.01424 -1.67444,3.41712l1.73743,5.0863c0.37894,1.118 1.42253,1.81616 2.54053,1.81616c0.28756,0 0.5784,-0.04229 0.87134,-0.14172c1.40287,-0.48106 2.1555,-2.00899 1.67444,-3.41186l-1.73743,-5.09155c-0.35878,-1.05417 -1.30571,-1.73633 -2.35156,-1.81091zM82.02124,109.79907c-1.48888,-0.258 -2.86479,0.69547 -3.13892,2.1521l-0.98682,5.28052c-0.26875,1.45931 0.69279,2.86479 2.1521,3.13891c0.16931,0.02956 0.33472,0.04724 0.49866,0.04724c1.2685,0 2.39314,-0.90666 2.63501,-2.19934l0.98682,-5.28052c0.26875,-1.45931 -0.68754,-2.86479 -2.14685,-3.13892z"></path></g></g></svg>
                      </span>
                  </div>
                  <div class="box-icon-header">
                    <h5>a variety of dishes</h5>
                  </div>
                  <hr class="divider-xs bg-accent" />
                  <p>
                    In our menu you’ll find a wide variety of dishes, desserts,
                    and drinks.
                  </p>
                </article>
              </div>
            </div>
          </div>
        </section>
        <!--section gallery-->
        <section>
          <div class="row no-gutters" data-lightgallery="group">
            <div class="col-xs-6 col-md-3">
              <a
                class="thumbnail-gallery"
                data-lightgallery="item"
                href="../images/imagesFOOD/index-gallery-1-1200x800_original.jpg"
                ><img
                  src="../images/imagesFOOD/index-gallery-1-480x394.jpg"
                  alt=""
                  width="480"
                  height="394"
              /></a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a
                class="thumbnail-gallery"
                data-lightgallery="item"
                href="../images/imagesFOOD/index-gallery-2-1200x800_original.jpg"
                ><img
                  src="../images/imagesFOOD/index-gallery-2-480x394.jpg"
                  alt=""
                  width="480"
                  height="394"
              /></a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a
                class="thumbnail-gallery"
                data-lightgallery="item"
                href="../images/imagesFOOD/index-gallery-3-1200x800_original.jpg"
                ><img
                  src="../images/imagesFOOD/index-gallery-3-480x394.jpg"
                  alt=""
                  width="480"
                  height="394"
              /></a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a
                class="thumbnail-gallery"
                data-lightgallery="item"
                href="../images/imagesFOOD/index-gallery-4-1200x800_original.jpg"
                ><img
                  src="../images/imagesFOOD/index-gallery-4-480x394.jpg"
                  alt=""
                  width="480"
                  height="394"
              /></a>
            </div>
          </div>
        </section>
      </main>
      <script src="{{asset('assets/assetsCENTER/vendor/jquery/jquery.min.js')}}"></script>

      <script>
      $(document).ready(function () {
/*         $('.cat').click(function () {
          $('.myForm').submit();
        }); */

      })
      </script>
@endsection('main')