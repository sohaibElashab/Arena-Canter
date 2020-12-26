@extends('layout.center')

@section('header')
@php
$home=1; 
@endphp
@include('layout.transparent_header',['home' => $home])
@endsection('header')

@section('main')
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-ride="carousel"
    >
      <ol class="carousel-indicators">
        <li
          data-target="#carouselExampleIndicators"
          data-slide-to="0"
          class="active"
          style="background-color: #c84771;"
        ></li>
        <li
          data-target="#carouselExampleIndicators"
          data-slide-to="1"
          style="background-color: #c84771;"
        ></li>
        <li
          data-target="#carouselExampleIndicators"
          data-slide-to="2"
          style="background-color: #c84771;"
        ></li>
        <li
          data-target="#carouselExampleIndicators"
          data-slide-to="3"
          style="background-color: #c84771;"
        ></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div
          class="carousel-item active"
          style="  background: linear-gradient(to right, rgba(60, 42, 132, 0.3), rgba(37, 37, 37, 0.3)), url('{{asset('assets/assetsCENTER/img/bg4.jpg')}}'), center;   background-size: cover; background-repeat: no-repeat;"
        >
          <div class="carousel-caption d-md-block">
            <h2 class="display-4 animated fadeInDown">ARENA CENTER</h2>
            <a href="contact" class="animated fadeInUp btn-cnt"
              >Contact Us
            </a>
          </div>
        </div>
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div
          class="carousel-item "
          style="  background: linear-gradient(to right, rgba(60, 42, 132, 0.3), rgba(60, 42, 132, 0.3)), url('{{asset('assets/assetsCENTER/img/bg1.jpg')}}'), center; background-size: cover; background-repeat: no-repeat;"
        >
          <div class="carousel-caption d-md-block">
            <h2 class="display-4 animated fadeInDown">ARENA ENTERTAINMENT</h2>
            <a href="contact" class=" animated fadeInUp btn-cnt"
              >Contact Us
            </a>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div
          class="carousel-item"
          style="  background: linear-gradient(to right, rgba(60, 42, 132, 0.3), rgba(60, 42, 132, 0.3)), url('{{asset('assets/assetsCENTER/img/bg2.jpg')}}'), center ;background-size: cover; background-repeat: no-repeat;"
        >
          <div class="carousel-caption d-md-block">
            <h2 class="display-4 animated fadeInDown">ARENA FOOD</h2>
            <a href="contact" class=" animated fadeInUp btn-cnt"
              >Contact Us
            </a>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div
          class="carousel-item"
          style="  background: linear-gradient(to right, rgba(60, 42, 132, 0.3), rgba(60, 42, 132, 0.3)), url('{{asset('assets/assetsCENTER/img/bg3.jpg')}}'), center ;background-size: cover; background-repeat: no-repeat;"
        >
          <div class="carousel-caption d-md-block">
            <h2 class="display-4 animated fadeInDown">ARENA SHOPPING</h2>
            <a href="contact" class=" animated fadeInUp btn-cnt"
              >Contact Us
            </a>
          </div>
        </div>

        <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= Services Section ======= -->
      <section class="services">
        <div class="container">
          <div class="row">
            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch"
              data-aos="fade-up"
            >
              <div class="icon-box icon-box-pink">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h3 class="title"><a href="">Diversity</a></h3>
                <p class="description">
                  Arena center gives you the opportunity to buy miltiple kinds of products all at once 
                </p>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="icon-box icon-box-cyan">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h3 class="title"><a href="">Free Delivery</a></h3>
                <p class="description">
                  Our shopping center offers free delivery on all your orders
                </p>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="icon-box icon-box-green">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h3 class="title"><a href="">Fast replies</a></h3>
                <p class="description">
                  Our team of admins will reply to your emails as soon as possible and listen to your complaints
                </p>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="icon-box icon-box-blue">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h3 class="title"><a href="">Shipping worldwide</a></h3>
                <p class="description">
                  We pick the best delivery companies to deliver your orders 
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->


      <!-- End Why Us Section -->

      <!-- ======= Features Section ======= -->
 <!--      <section class="features">
        <div class="container">
          <div class="section-title">
            <h2>Features</h2>
            <p>
              Arena center offers many features like food orders and shopping orders and buying tickets to movies and activities and also events
            </p>
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-md-5">
              <img src="assets/assetsCENTER/img/restaurant.jpg" style="background-size: cover; width:500px; border-radius:5px;" class="img-fluid" alt="" />
            </div>
            <div class="col-md-7 pt-4">
              <h3>
                Arena food
              </h3>
              <p class="font-italic" style="font-size:30px;"> 
                Gives you the chance to browse a diverse menu of our best food products and drinks and desserts available in all sizes to and place as many 
                products as you want to form your desired meal 
              </p>
            </div>
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2">
              <img src="assets/assetsCENTER/img/clothing.jpg" style="background-size: cover; width:500px; height:300px; border-radius:5px;" class="img-fluid" alt="" />
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1">
              <h3>Arena shopping</h3>
              <p class="font-italic" style="font-size:30px;">
                Gives you the chance to browse a diverse catalogue of our best clothing products and accessorie available in all sizes and colors for women and men and also kids to and place as many 
                products as you want to form your wardrobe
              </p>
            </div>
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-md-5">
              <img src="assets/assetsCENTER/img/cinema.jpg" style="background-size: cover; width:500px; border-radius:5px;" class="img-fluid" alt="" />
            </div>
            <div class="col-md-7 pt-5">
              <h3>
                Arena Entertainment
              </h3>
              <p class="font-italic" style="font-size:30px;">
              Gives you the chance to browse a diverse catalogue of our current and upcoming events and also give your kids a safe place to have fun while you watch the latest movies
              in our teather
              </p>
            </div>
          </div>
        </div>
      </section>
 -->
      <section class="features">
        <div class="container">
          <div class="section-title">
            <h2>Features</h2>
            <p>
              Arena center offers many features like food orders and shopping orders and buying tickets to movies and activities and also events
            </p>
          </div>

          <div class="row mb-5 mt-5" data-aos="fade-up">
            <div class="col-md-5">
              <img src="assets/assetsCENTER/img/restaurant.jpg" style="background-size: cover; width:500px; border-radius:5px;" class="img-fluid" alt="" />
            </div>
            <div class="col-md-7 pt-4 ">
              <h2>
                Arena food
              </h2>
              <p class="font-italic" style="font-size: 25px;font-family: Candara;"> 
                Gives you the chance to browse a diverse menu of our best food products and drinks and desserts available in all sizes to and place as many 
                products as you want to form your desired meal 
              </p>
            </div>
          </div>

          <div class="row mb-5 mt-5" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2 ">
              <img src="assets/assetsCENTER/img/clothing.jpg" style="background-size: cover; width:500px; height:300px; border-radius:5px;" class="img-fluid" alt="" />
            </div>
            <div class="col-md-7 order-2 order-md-1 pt-4">
              <h2>Arena shopping</h2>
              <p class="font-italic" style="font-size: 25px;font-family: Candara;">
                Gives you the chance to browse a diverse catalogue of our best clothing products and accessorie available in all sizes and colors for women and men and also kids to and place as many 
                products as you want to form your wardrobe
              </p>
            </div>
          </div>

          <div class="row mb-5 mt-5" data-aos="fade-up">
            <div class="col-md-5 ">
              <img src="assets/assetsCENTER/img/cinema.jpg" style="background-size: cover; width:500px; border-radius:5px;" class="img-fluid" alt="" />
            </div>
            <div class="col-md-7 pt-4">
              <h2>
                Arena Entertainment
              </h2>
              <p class="font-italic" style="font-size: 25px;font-family: Candara;">
              Gives you the chance to browse a diverse catalogue of our current and upcoming events and also give your kids a safe place to have fun while you watch the latest movies
              in our teather
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Features Section -->
    </main>
    @endsection('main')
 