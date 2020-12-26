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
    <script src="https://js.stripe.com/v3/"></script>
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
                <h2>Shipping method</h2>
              </div>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb float-right">
                <li>
                  <a href="index.html">Home</a>
                </li>
                <li ><a href="" class="active">Review</a> </li>
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
                  <div class="col-4 progress-wizard-step complete fullBar">
                    <div class="text-center progress-wizard-stepnum">Shipping Method</div>
                    <div class="progress"><div class="progress-bar" style="background-color: #3C2A84;"></div></div>
                    <div style="background-color: #3C2A84;" class="progress-wizard-dot"></div>
                  </div>

                  <div class="col-4 progress-wizard-step active">
                    <div class="text-center progress-wizard-stepnum">Review and Confirm</div>
                    <div class="progress"><div class="progress-bar" style="background-color: #3C2A84;"></div></div>
                    <div style="background-color: #3C2A84;" class="progress-wizard-dot"></div>
                  </div>

                  <div class="col-4 progress-wizard-step disabled">
                    <div class="text-center progress-wizard-stepnum">Done</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <div  class="progress-wizard-dot"></div>
                  </div>
                </div>

                <div class="page-header">
                  <h4>Shipping Information</h4>
                </div>

                <div class="row shipping-info">
                  <div class="col-6">
                    <h5>Shipping Address</h5>
                    <address>
                      {{Auth::user()->first_name}} {{Auth::user()->last_name}} <br>
                      {{Auth::user()->adress}} <br>
                      {{Auth::user()->phone}} <br>
                      {{Auth::user()->email}} <br>
                    </address>
                  </div>
                  <div class="col-6">
                    <h5>Payment Method</h5>
                    <p>
                       with Paypal
                    </p>
                  </div>
                </div>

                
                <div class="page-header mb-4">
                  <h4>Order Review</h4>
                </div>

                <div class="page-header mb-4">
                  <h5>shopping</h5>
                </div>

                <div class="cartListInner review-inner row">
                  <form action="#" class="col-sm-12">
                    <div class="table-responsive">
                      
                      <table class="table">
                        <thead>
                          <tr>
                            <th style="background-color: #3C2A84;"></th>
                            <th style="background-color: #3C2A84;">Product Name</th>
                            <th style="background-color: #3C2A84;"></th>
                            <th style="background-color: #3C2A84;">Quantity</th>
                            <th style="background-color: #3C2A84;">Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach(Cart::content() as $item)
                          @if($item->options->type == 'shopping')
                            <tr>
                              <td class="">
                                <span class="cartImage"><img src="/images/imgSHOPPING/products/{{$item->PictureShopping($item->id)}}" alt="image" style = "width:100px;height:100px;border-radius:5px;"></span>
                              </td>
                              <td class="">{{$item->name}}</td>
                              <td class=""></td>
                              <td class="count-input"><strong>{{$item->qty}}</strong></td>
                              <td class="">${{$item->price}}</td>
                            </tr>
                          @endif
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </form>
                </div>
                <div class="page-header mb-4">
                  <h5>Food</h5>
                </div>

                <div class="cartListInner review-inner row">
                  <form action="#" class="col-sm-12">
                    <div class="table-responsive">
                      
                      <table class="table">
                        <thead>
                          <tr>
                            <th style="background-color: #3C2A84;"></th>
                            <th style="background-color: #3C2A84;">Product Name</th>
                            <th style="background-color: #3C2A84;"></th>
                            <th style="background-color: #3C2A84;">Quantity</th>
                            <th style="background-color: #3C2A84;">Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach(Cart::content() as $item)
                          @if($item->options->type == 'food')
                            <tr>
                              <td class="">
                                <span class="cartImage"><img src="../images/imagesFOOD/{{$item->PictureFood($item->id)}}" alt="image" style = "width:100px;height:100px;border-radius:5px;"></span>
                              </td>
                              <td class="">{{$item->name}}</td>
                              <td class=""></td>
                              <td class="count-input"><strong>{{$item->qty}}</strong></td>
                              <td class="">${{$item->price}}</td>
                            </tr>
                          @endif
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </form>
                </div>
                <div class="page-header mb-4">
                  <h5>Entertainment</h5>
                </div>

                <div class="cartListInner review-inner row">
                  <form action="#" class="col-sm-12">
                    <div class="table-responsive">
                      
                      <table class="table">
                        <thead>
                          <tr>
                            <th style="background-color: #3C2A84;"></th>
                            <th style="background-color: #3C2A84;">Product Name</th>
                            <th style="background-color: #3C2A84;"></th>
                            <th style="background-color: #3C2A84;">Quantity</th>
                            <th style="background-color: #3C2A84;">Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach(Cart::content() as $item)
                          @if($item->options->type == 'ent')
                            <tr>
                              <td class="">
                                <span class="cartImage"><img src="../images/imgENT/{{$item->PictureEnt($item->id)}}" alt="image" style = "width:100px;height:100px;border-radius:5px;"></span>
                              </td>
                              <td class="">{{$item->name}}</td>
                              <td class=""></td>
                              <td class="count-input"><strong>{{$item->qty}}</strong></td>
                              <td class="">${{$item->price}}</td>
                            </tr>
                          @endif
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </form>
                </div> 

                  <div class="col-sm-12">
                    <div class="well well-lg clearfix">
                      <ul class="pager">
                      <li class="previous float-left"><a class="btn btn-secondary btn-default float-left" href="/step1">back</a></li>
                      <li class="next">
                     <!--  <div id="paypal-button-container" class="float-right"></div> -->
                      <form class="w3-container w3-display-middle w3-card-4 w3-padding-16" method="POST" id="payment-form"
                            action="{{route('checkout.payment')}}">
                          @csrf
                          <li class="next"><button class="btn btn-primary btn-default float-right" style="background-color: #3C2A84;"  type="submit">Continue <i class="fa fa-angle-right"></i></button></li>
                      </form>
                       </li>
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
        <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD&disable-funding=credit,card"></script>
   <!--  <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({
          env: 'sandbox',
            // Set up the transaction
            payment:function(data, actions) {
          // 2. Make a request to your server
              return actions.request.post('/create-payment')
            .then(function(res) {
              // 3. Return res.id from the response
               console.log(res);
              return res.id;
            });
        },

            // Finalize the transaction
            onAuthorize: function(data, actions) {
          // 2. Make a request to your server
          return actions.request.post('/execute-payment', {
            paymentID: data.paymentID,
            payerID:   data.payerID
          })
            .then(function(res) {
              console.log(res);
              alert('PAYMENT WENT THROUGH!!');
              // 3. Show the buyer a confirmation message.
            });
        }


        }).render('#paypal-button-container');
    </script> -->
@endsection('script')