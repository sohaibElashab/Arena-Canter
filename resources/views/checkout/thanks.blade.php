@extends('layout.center')

@section('style')
    :<link href="{{asset('css/cssSHOPPING/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/cssSHOPPING/default.css')}}" rel="stylesheet" id="option_color">
@endsection('style')

@section('header')
@php
$cart=1; 
@endphp
@include('layout.header',['cart' => $cart])
@endsection('header')

@section('main')
      <!-- LIGHT SECTION -->
      <section class="lightSection clearfix pageHeader">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="page-title">
                <h2>review</h2>
              </div>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb float-right">
                <li>
                  <a href="/">Home</a>
                </li>
                <li > <a href="" class="active">Finalisation</a> </li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix stepsWrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="innerWrapper clearfix stepsPage">
                <div class="row justify-content-center order-confirm">
                  <div class="col-md-8 col-lg-6 text-center">
                    <h2>Thank You For Your Order</h2>
                    <span>Check your profile for more details about your order</span>
                    <br>
                    <a href="/" class="btn btn-primary btn-default" style="background-color: #3C2A84;">Back to shop</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection('main')

@section('script')
        <script src="{{asset('js/jsSHOPPING/custom.js')}}" type="dd3d900a0cfc60362b51d7be-text/javascript"></script>
        <script src="{{asset('plugins/pluginsSHOPPING/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="dd3d900a0cfc60362b51d7be-|49" defer=""></script>
@endsection('script')
