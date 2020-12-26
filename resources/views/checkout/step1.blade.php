@extends('layout.center')

@section('style')
    <link href="{{asset('plugins/pluginsSHOPPING/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/pluginsSHOPPING/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/pluginsSHOPPING/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/pluginsSHOPPING/selectbox/select_option1.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/pluginsSHOPPING/fancybox/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/pluginsSHOPPING/iziToast/css/iziToast.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/pluginsSHOPPING/prismjs/prism.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/pluginsSHOPPING/rs-plugin/css/settings.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/pluginsSHOPPING/slick/slick.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/pluginsSHOPPING/slick/slick-theme.css')}}" media="screen">
    <link href="{{asset('css/cssSHOPPING/style.css')}}" rel="stylesheet">
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
                <h2>billing &amp; Shipping address</h2>
              </div>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb">
                <li>
                  <a href="../CENTER.html">Home</a>
                </li>
                <li>
                  <a href="../cart-page.html">shop</a>
                </li>
                <li> <a href="" class="active">Shipping Information</a> </li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix stepsWrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="innerWrapper clearfix stepsPage">
                <div class="row progress-wizard" style="border-bottom:0;">

                  <div class="col-4 progress-wizard-step active">
                    <div class="text-center progress-wizard-stepnum">Shipping Method</div>
                    <div class="progress"><div class="progress-bar" style="background-color: #3C2A84;"></div></div>
                    <div style="background-color: #3C2A84;" class="progress-wizard-dot"></div>
                  </div>

                  <div class="col-4 progress-wizard-step disabled">
                    <div class="text-center progress-wizard-stepnum">Review and Confirm</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <div class="progress-wizard-dot"></div>
                  </div>

                  <div class="col-4 progress-wizard-step disabled">
                    <div class="text-center progress-wizard-stepnum">Done</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <div class="progress-wizard-dot"></div>
                  </div>
                </div>

                <form action="{{ route('checkout.UpdateUser') }}" class="row" method="POST" role="form">
                @csrf
                @method('PUT')
                  <div class="col-12">
                    <div class="page-header">
                      <h4>Shipping Address</h4>
                    </div>
                    <br>
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" id="">
                    {{ $errors->first('first_name') }} 
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" id="">
                    {{ $errors->first('last_name') }} 
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="">
                    {{ $errors->first('email') }} 
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label for="">Company</label>
                    <input type="text" class="form-control" name="company" value="{{ old('company') }}" id="">
                    {{ $errors->first('company') }} 
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="adress" value="{{ old('adress') }}" id="">
                    {{ $errors->first('adress') }} 
                  </div>
                  <div class="form-group col-md-6 col-12">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" id="">
                    {{ $errors->first('phone') }} 
                  </div>
               
                  <div class="form-group col-md-6 col-12">
                    <label for="">Zip Code</label>
                    <input type="text" class="form-control" name="zip_code" value="{{ old('zip_code') }}" id="">
                    {{ $errors->first('zip_code') }} 
                  </div>
                  
                  <div class="form-group col-md-6 col-12">
                    <label for="">Fax</label>
                    <input type="text" class="form-control" name="fax" value="{{ old('fax') }}" id="">
                    {{ $errors->first('fax') }} 
                  </div>
                  <form action="#" class="row" method="POST" role="form">
                    <div class=" checkboxArea card-check">
                      <div class="col-sm-12 mb-2">
                        <input id="checkbox1" type="radio" name="checkbox" value="1" checked="checked">
                        <label for="checkbox1" ><span style="
                          background-color: #3C2A84;
                      "></span>Pay with Paypal</label>
                      </div>
                    </div>
                  <div class="col-12">
                    <div class="well well-lg clearfix">
                      <ul class="pager">
                        <li class="next "><button class="btn btn-primary btn-default float-right" type="submit" style="background-color: #3C2A84;"> Continue <i class="fa fa-angle-right"></i></button></li>
                      </ul>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-4">
              <div class="summery-box">
                <ul class="list-unstyled">
                  <li class="d-flex justify-content-between">
                    <span class="tag">Subtotal</span>
                    <span class="val">${{Cart::subtotal()}}</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <span class="tag">Tax</span>
                    <span class="val">${{Cart::tax()}}</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <span class="tag">Delivery</span>
                    <span class="val">$0.00</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <span class="tag">Total</span>
                    <span class="val">${{Cart::total()}}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection('main')

@section('script')
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
        <script src="{{asset('plugins/pluginsSHOPPING/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="dd3d900a0cfc60362b51d7be-|49" defer=""></script>
@endsection('script')