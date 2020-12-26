@extends('layout.center')

@section('header')
@php
$about=1; 
@endphp
@include('layout.header',['about' => $about])
@endsection('header')

@section('main')
<main id="main">
      <!-- ======= About Section ======= -->
      <section class="about" data-aos="fade-up">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <img src="assets/assetsCENTER/img/bg4.jpg" style="background-size: cover;" class="img-fluid" alt="" />
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <h3>
               Arena center the website website where you can get a meal ,a shirt and a movie ticket with just one click
              </h3>
              <p class="font-italic">
                Arena center is a shopping center that contains restaurants and clothing shops plus a movie theater 
                with daily new movies on top of that it only hosts multiple events and has a space for kid's activities

              </p>
              <ul>
                <li>
                  <i class="icofont-check-circled"></i>Easy to use
                </li>
                <li>
                  <i class="icofont-check-circled"></i>Multiple choices
                </li>
                <li>
                  <i class="icofont-check-circled"></i>A great customer service working 24/7 for your comfort
                </li>
              </ul>
              <p>
                You can contact us if you have any questions or complaints and our team would be happy to help you any time of the day
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Facts Section ======= -->
      <section class="facts section-bg">
        <div class="container">
          <div class="row counters">
            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">11,223</span>
              <p>Clients</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">1,463</span>
              <p>Products</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">360</span>
              <p>Hours Of Support</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">234</span>
              <p>CUSTOMER SUPPORT</p>
            </div>
          </div>
        </div>
      </section>
      <!-- DARK SECTION -->
      <section class="darkSection clearfix">
        <div class="container">
          <h3>Our Store Locations</h3>
          <div class="row">
            <div class="col-md-3">
              <div class="thumbnail">
                <div class="caption">
                  <h5>New York</h5>
                  <address>
                    Krakovská 1307/22, 110 00 N,Y <br />
                    Vězeňská 910/2, 110 00 N,Y-Staré <br />
                    Město Na Hřebenkách 2, 150 00 <br />
                    N,Y
                  </address>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <div class="caption">
                  <h5>Paris</h5>
                  <address>
                    Bebelpl. 1, 10117 Paris <br />
                    Jablonskistraße 16, 10405 Paris <br />
                    Rigaer Str. 9, 10247 Paris
                  </address>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <div class="caption">
                  <h5>New York</h5>
                  <address>
                    Krakovská 1307/22, 110 00 N,Y <br />
                    Vězeňská 910/2, 110 00 N,Y-Staré <br />
                    Město Na Hřebenkách 2, 150 00 <br />
                    N,Y
                  </address>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <div class="caption">
                  <h5>Paris</h5>
                  <address>
                    Bebelpl. 1, 10117 Paris <br />
                    Jablonskistraße 16, 10405 Paris <br />
                    Rigaer Str. 9, 10247 Paris
                  </address>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <a href="/contact" class=" animated fadeInUp btn-cnt btn-cnt1"
                >Contact Us
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Facts Section -->
    </main>
    @endsection('main')
 