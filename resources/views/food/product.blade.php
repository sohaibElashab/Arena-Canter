@extends('layout.food')

@section('main')
<main class="page-content">
        <!-- Breadcrumbs & Page title-->
        <section
          class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image bg-image-breadcrumbs"
        >
          <div class="container">
            <div class="row no-gutters">
              <div class="col-xs-12 col-xl-preffix-1 col-xl-11">
                <p class="h3 text-white">Single Product</p>
                <ul class="breadcrumbs-custom offset-top-10">
                  <li><a href="/">Home</a></li>
                  <li><a href="/food">Food</a></li>
                  <li class="active">Single Product</li>
                </ul>
              </div>  
            </div>
          </div>
        </section>

        <section class="section-50 section-sm-100">
          <div class="container">
            <div class="row justify-content-xs-center">
              <div class="col-sm-6 text-lg-left">
                <!-- Slick Carousel-->
                <div
                  class="slick-slider carousel-parent"
                  data-arrows="false"
                  data-loop="false"
                  data-dots="false"
                  data-swipe="false"
                  data-items="1"
                  data-child="#child-carousel"
                  data-for="#child-carousel"
                >
                  <div class="item">
                    <img
                      class="img-responsive reveal-inline-block"
                      src="../images/imagesFOOD/{{$produit->picture}}"
                      alt=""
                      width="542"
                      height="448"
                    />
                  </div>
                </div>
                <div
                  class="slick-slider slick-slider-single-item align-center"
                  id="child-carousel"
                  data-for=".carousel-parent"
                  data-arrows="false"
                  data-loop="false"
                  data-dots="false"
                  data-swipe="true"
                  data-items="3"
                  data-xs-items="3"
                  data-sm-items="3"
                  data-md-items="4"
                  data-lg-items="5"
                  data-slide-to-scroll="1"
                >
                  <div class="item">
                    <div>
                      <img
                        src="../images/imagesFOOD/{{$produit->picture}}"
                        alt=""
                        width="84"
                        height="69"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="col-sm-6 col-lg-5 text-sm-left offset-top-60 offset-sm-top-0">
                <div
                  class="reveal-xs-flex justify-content-xs-center align-content-xs-center justify-content-sm-start">
                  <h3 class="font-default">{{$produit->name}}</h3>
                  <div class="inset-xs-left-50 offset-top-0">
                    <div class="team-member-position team-member-position-burnt-sienna">
                      <span class="big text-italic text-middle">{{$produit->ticket}}</span>
                    </div>
                  </div>
                </div>
                <div class="offset-top-15">
                  <p>{{$produit->ingredients}}</p>
                </div>

                <hr class="offset-top-30 veil reveal-sm-block" />
                <div class="offset-top-30">
                  <div class="responsive-tabs responsive-tabs-shop responsive-tabs-horizontal">
                    <ul class="resp-tabs-list">
                      <li>
                        <input type="radio" name="" id="big" style="display:none;">
                        <label for="big">
                        <span class="price">${{$big->price}}</span>
                        <span class="icon icon-circle">Big</span>
                        </label>
                      </li>
                      <li>
                        <input type="radio" name="" id="small" style="display:none;">
                        <label for="small">
                        <span class="price">${{$mini->price}}</span>
                        <span class="icon icon-circle">Mini</span>
                        </label>
                      </li>
                    </ul>
                    <div class="resp-tabs-container">
                      <div>
                        <div class="progress-linear" data-to="43">
                          <div class="progress-header clearfix">
                            <div class="text-left">
                              <p class="text-uppercase">energy value</p>
                            </div>
                          </div>
                          <div class="progress-bar-linear-wrap offset-top-5">
                            <div class="progress-bar-linear bg-primary" style="width: 43%;"></div>
                            <span class="progress-text">{{$big->energy_value}}kcal</span>
                            <span class="text-bold progress-value">43</span>
                          </div>
                        </div>
                        <div class="progress-linear" data-to="59">
                          <div class="progress-header clearfix">
                            <div class="text-left">
                              <p class="text-uppercase">proteins</p>
                            </div>
                          </div>
                          <div class="progress-bar-linear-wrap offset-top-5">
                            <div
                              class="progress-bar-linear bg-burnt-sienna"
                              style="width: 59%;"
                            ></div>
                            <span class="progress-text">{{$big->proteins}}g</span
                            ><span class="text-bold progress-value">59</span>
                          </div>
                        </div>
                        <div class="progress-linear" data-to="20">
                          <div class="progress-header clearfix">
                            <div class="text-left">
                              <p class="text-uppercase">carbohydrates</p>
                            </div>
                          </div>
                          <div class="progress-bar-linear-wrap offset-top-5">
                            <div class="progress-bar-linear bg-silver-tree"
                              style="width: 20%;"></div>
                            <span class="progress-text">{{$big->carbohidrats}}g</span
                            ><span class="text-bold progress-value">20</span>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="progress-linear" data-to="30">
                          <div class="progress-header clearfix">
                            <div class="text-left">
                              <p class="text-uppercase">energy value</p>
                            </div>
                          </div>
                          <div class="progress-bar-linear-wrap offset-top-5">
                            <div
                              class="progress-bar-linear bg-primary"
                              style="width: 30%;"
                            ></div>
                            <span class="progress-text">{{$mini->energy_value}}kcal</span
                            ><span class="text-bold progress-value">30</span>
                          </div>
                        </div>
                        <div class="progress-linear" data-to="39">
                          <div class="progress-header clearfix">
                            <div class="text-left">
                              <p class="text-uppercase">proteins</p>
                            </div>
                          </div>
                          <div class="progress-bar-linear-wrap offset-top-5">
                            <div
                              class="progress-bar-linear bg-burnt-sienna"
                              style="width: 39%;"
                            ></div>
                            <span class="progress-text">{{$mini->proteins}}g</span
                            ><span class="text-bold progress-value">39</span>
                          </div>
                        </div>
                        <div class="progress-linear" data-to="15">
                          <div class="progress-header clearfix">
                            <div class="text-left">
                              <p class="text-uppercase">carbohydrates</p>
                            </div>
                          </div>
                          <div class="progress-bar-linear-wrap offset-top-5">
                            <div
                              class="progress-bar-linear bg-silver-tree"
                              style="width: 15%;"
                            ></div>
                            <span class="progress-text">{{$mini->carbohidrats}}g</span
                            ><span class="text-bold progress-value">15</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="offset-top-45" id="big_f">
                  <form action="{{ route('cart.store') }}" method="post">
                  @csrf
                  <input type="hidden" name="id" value="{{$big->id}}">
                  <input type="hidden" name="name" value="{{$big->name}}">
                  <input type="hidden" name="price" value="{{$big->price}}">
                  <input type="hidden" name="type" value="food">
                  <input type="hidden" name="taille" value="big">
                  <div class="group-sm">
                    <div class="stepper-type-1">
                      <input
                        name="qty"
                        class="form-control"
                        type="number"
                        data-zeros="true"
                        value="1"
                        min="1"
                        max="20"
                        readonly/>
                    </div>
                    <button type="submit" class="text-top btn btn-burnt-sienna btn-shape-circle">
                    <span>Order Online</span></button>
                  </form>
                  </div>
                </div>
                <div class="offset-top-45" id="small_f">
                  <form action="{{ route('cart.store') }}" method="post">
                  @csrf
                  <input type="hidden" name="id" value="{{$mini->id}}">
                  <input type="hidden" name="name" value="{{$mini->name}}">
                  <input type="hidden" name="price" value="{{$mini->price}}">
                  <input type="hidden" name="type" value="food">
                  <input type="hidden" name="taille" value="mini">
                  <div class="group-sm">
                    <div class="stepper-type-1">
                      <input
                        name="qty"
                        class="form-control"
                        type="number"
                        data-zeros="true"
                        value="1"
                        min="1"
                        max="20"
                        readonly/>
                    </div>
                    <button type="submit" class="text-top btn btn-burnt-sienna btn-shape-circle">
                    <span>Order Online</span></button>
                  </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
        <section class="text-left">
          <div class="responsive-tabs responsive-tabs-horizontal responsive-tabs-horizontal-background">
            <ul class="resp-tabs-list container">
              <li>Description</li>
              <li>Delivery</li>
            </ul>
            <div class="resp-tabs-container">
              <div>
                <p class="text-base">
                {{$produit->description}}
                </p>
                <div class="unit unit-horizontal unit-spacing-xs offset-top-20">
                  <div class="unit-left">
                    <p class="h6">Ingredients:</p>
                  </div>
                  <div class="unit-body">
                    <p>{{$produit->ingredients}}</p>
                  </div>
                </div>
              </div>
              <div>
                <p class="text-base">
                  Here you can read some details about a nifty little lifecycle
                  of your order's journey from the time you place your order to
                  your new treasures arriving at your doorstep. At first, you
                  choose the product you like. Then you put into your shopping
                  cart and pass the checkout process in a few clicks. Our store
                  offers several payment and delivery methods, so after placing
                  your order, you'll have an opportunity to choose which one is
                  the most convenient for you.
                </p>
              </div>
            </div>
          </div>
        </section>
      </main>
      <script src="{{asset('assets/assetsCENTER/vendor/jquery/jquery.min.js')}}"></script>
        <script>
            $(document).ready(function () {
              $("#small_f").hide();
              $("#big").click(function () {
                if($(this).is(":checked"))
                {
                  $("#small_f").hide();
                  $("#big_f").show();
                }
              });

              $("#small").click(function () {
                if($(this).is(":checked"))
                {
                  $("#small_f").show();
                  $("#big_f").hide();
                }
              });
            });
        </script>
@endsection('main')