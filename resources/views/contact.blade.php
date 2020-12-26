@extends('layout.center')

@section('header')
@php
$home=1; 
@endphp
@include('layout.header',['home' => $home])
@endsection('header')

@section('main')
<main id="main">
      <!-- ======= Contact Section ======= --> 
      @if (session('sent'))
        <div class="toast" style="position: absolute; top: 12vh; right: 2vw; z-index:200; color:white; background:#4F9E51; ">
          <div class="toast-body">
            {{ session('sent') }}
          </div>
        </div>
      @endif
      <section
        class="contact"
        data-aos="fade-up"
        data-aos-easing="ease-in-out"
        data-aos-duration="500"
      >
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-12">
                  <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>A108 Adam Street, Marrakech, NY 535022</p>
                  </div>
                </div> 
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>arena@contact.com <br />arenacenter@contact.com</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>+212 697 851 121<br />+212 634 843 893</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <form
                action="/contact"
                method="post"
                role="form"
                class="php-email-form"
              >
              @csrf
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      value="{{ old('name') }}"
                    />
                    <div class="validate">{{ $errors->first('name') }}</div>
                  </div>
                  <div class="col-md-6 form-group">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"

                      value="{{ old('email') }}"
                    />
                    <div class="validate">{{ $errors->first('email') }}</div>
                  </div>
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    placeholder="Subject"

                    value="{{ old('subject') }}"
                  />
                  <div class="validate">{{ $errors->first('subject') }}</div>
                </div>
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="5"
                    placeholder="Message"
                  >{{ old('message') }}</textarea>
                  <div class="validate">{{ $errors->first('message') }}</div>
                </div>
                  <br>
                <div class="text-center">
                  <button type="submit">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
 
      <!--            data-toast
                              data-toast-type="success"
                              data-toast-position="topRight"
                              data-toast-icon="icon-circle-check"
                              data-toast-title="Product"
                              data-toast-message="{{ session('sent') }}"         -->
      <!-- End Contact Section -->

      <!-- ======= Map Section ======= -->
      <section class="map mt-2">
        <div class="container-fluid p-0">
          <iframe
            src="https://maps.google.com/maps?q=ista%20ofppt%20syba&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0"
            style="border:0;"
            allowfullscreen=""
          ></iframe>
        </div>
      </section>
      <!-- End Map Section -->
    </main>
@endsection('main')