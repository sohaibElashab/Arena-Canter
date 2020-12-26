@extends('layout.center')

@section('style')
<script src="https://kit.fontawesome.com/fc9be21c0d.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('assets/assetsCENTER/vendor/bootstrap/css/bootstrap.min.css')}}">
<script src="{{asset('assets/assetsCENTER/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/assetsCENTER/vendor/profil-files/csscss.css')}}">
<link rel="stylesheet" href="{{asset('assets/assetsCENTER/vendor/profil-files/bootstrap-material-design.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/assetsCENTER/vendor/profil-files/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/assetsCENTER/vendor/profil-files/css.css')}}">
<link rel="stylesheet" href="{{asset('assets/assetsCENTER/vendor/profil-files/material-kit.css')}}">
@endsection('style')

@section('header')
@php
$profile=1; 
@endphp
@include('layout.transparent_header',['profile' => $profile])
@endsection('header')

@section('main')
<div class="profile-page">
<div
      class="page-header header-filter"
      data-parallax="true"
      style="background-image:url('assets/assetsCENTER/img/profilbg2.jpg');"
    ></div>
    <div class="main main-raised">
      <div class="profile-content">
        <div class="container">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
              <div class="profile">
                <div class="avatar">
                  <img
                    src="assets/assetsCENTER/img/123.png"
                    alt="Circle Image"
                    class="img-raised rounded-circle img-fluid"
                    style="background:white;"
                  />
                
                </div>
                <div class="name">
                  <h3 class="title">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h3>
                  <h6>Client</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="description text-center">
            <p>
              Dear, thanks for choosing ARENA CENTER for your comfortable
              shopping. We would love to hear your thoughts on the service. Feel
              free to text back with any feedback. happy shopping!
            </p>
          </div>
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
              <div class="profile-tabs">
                <ul
                  class="nav nav-pills nav-pills-icons justify-content-center"
                  role="tablist"
                >
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      href="#studio"
                      role="tab"
                      data-toggle="tab"
                    >
                      <i class="material-icons">camera</i>
                      My info
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="#works"
                      role="tab"
                      data-toggle="tab"
                    >
                      <i class="material-icons">palette</i>
                      My command
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="#favorite"
                      role="tab"
                      data-toggle="tab"
                    >
                      <i class="material-icons">favorite</i>
                      My wishlist
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="tab-content tab-space">
            <div class="tab-pane active text-center gallery" id="studio">
              <form class="form" action="{{route('profile.editProfile')}}" method="post" id="registrationForm">
              @csrf
              @method('PUT')
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="user_name"><h6>Username</h6></label>
                            <input type="text" class="form-control text-center" name="username" id="user_name" value="{{Auth::user()->username}}"  title="enter your user name if any.">
                            {{ $errors->first('username') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="first_name"><h6>First name</h6></label>
                            <input type="text" class="form-control text-center" name="first_name" id="first_name" value="{{Auth::user()->first_name}}"  title="enter your first name if any.">
                            {{ $errors->first('first_name') }}
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <div class="col-xs-6">
                            <label for="last_name"><h6>Last name</h6></label>
                            <input type="text" class="form-control text-center" name="last_name" id="last_name" value="{{Auth::user()->last_name}}"  title="enter your last name if any.">
                            {{ $errors->first('last_name') }}
                        </div>
                    </div>
        
                    <div class="form-group">
                        
                        <div class="col-xs-6">
                            <label for="phone"><h6>Phone</h6></label>
                            <input type="text" class="form-control text-center" name="phone" id="phone" value="{{Auth::user()->phone}}"  title="enter your phone number if any.">
                            {{ $errors->first('phone') }}
                        </div>
                    </div>
        
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="Postal"><h6>Postal code</h6></label>
                            <input type="text" class="form-control text-center" name="zip_code" id="Postal" value="{{Auth::user()->zip_code}}"  title="enter your Postal code if any.">
                            {{ $errors->first('zip_code') }}
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <div class="col-xs-6">
                            <label for="email"><h6>Email</h6></label>
                            <input type="email" class="form-control text-center" name="email" id="email" value="{{Auth::user()->email}}"  title="enter your email.">
                            {{ $errors->first('email') }}
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <div class="col-xs-6">
                            <label for="Address"><h6>Address</h6></label>
                            <input type="text" class="form-control text-center" name="adress" id="adress" value="{{Auth::user()->adress}}"  title="enter a Address">
                            {{ $errors->first('adress') }}
                        </div>
                    </div>
                    <div class="form-group">
                    </form>  
                        <div class="col-xs-6 mt-5">
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                              Change Password
                            </button>
                          <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                              <form action="{{route('profile.resetPassword')}}" method="post">
                              @csrf
                                <label for="Opassword"><h6>Old Password</h6></label>
                                <input type="password" class="form-control text-center" name="old" id="Opassword"  title="enter your Old password.">
                                {{ $errors->first('old') }} {{session('errorMSG')}} <br>
                                <label for="Npassword"><h6>New Password</h6></label>
                                <input type="password" class="form-control text-center" name="password" id="Npassword"  title="enter new password.">
                                {{ $errors->first('password') }} <br>
                                <label for="RNpassword"><h6>Repeat New Password</h6></label>
                                <input type="password" class="form-control text-center" name="password_confirmation" id="RNpassword"  title="enter new password.">
                                {{ $errors->first('password_confirmation') }} <br>
                                <button class="btn btn-outline-primary mt-3" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>Save Changes</button>
                              </form>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                              <br>
                              <button class="btn btn-outline-info" onclick="document.getElementById('registrationForm').submit();"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                          </div>
                    </div>
              
            </div>
            <div class="tab-pane text-center gallery" id="works">
              <p>
                <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#food" aria-expanded="false" aria-controls="food"> Food Commande</button>
                <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#shopping" aria-expanded="false" aria-controls="shopping"> Shopping Commande</button>
                <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#entertainment" aria-expanded="false" aria-controls="entertainment"> Entertainment Commande</button>
              </p>
              <div class="row">
                <div class="col">
                  <div class="collapse " id="food">
                    @foreach($foods as $item)
                    <div class="card card-body">
                      <div class="p-2">
                        <img src="../images/imagesFOOD/{{$item->pic($item->product_id)}}" alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                          <h5 class="mb-0"> <a href="{{ route('food.show',$item->product_id)}}" class="text-dark d-inline-block align-middle">{{$item->name($item->product_id)}}</a></h5><span class="text-muted font-weight-normal font-italic d-block">PRICE : ${{$item->price($item->product_id)}} , QUANTITY : {{$item->qty}}</span>
                          <span class="text-muted font-weight-normal font-italic d-block">Etat: {{$item->state}}</span>
                          <span class="text-muted font-weight-normal font-italic d-block">Tracking Number : {{$item->track_number}}</span>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
                <div class="col">
                  <div class="collapse " id="shopping">
                    @foreach($shops as $item)
                    <div class="card card-body">
                      <div class="p-2">
                        <img src="/images/imgSHOPPING/products/{{$item->pic($item->product_id)}}" alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                          <h5 class="mb-0"> <a href="{{ route('shopping.show',$item->product_id)}}" class="text-dark d-inline-block align-middle">{{$item->name($item->product_id)}}</a></h5><span class="text-muted font-weight-normal font-italic d-block">PRICE : ${{$item->price($item->product_id)}} , QUANTITY : {{$item->qty}}</span>
                          <span class="text-muted font-weight-normal font-italic d-block">Etat: {{$item->state}}</span>
                          <span class="text-muted font-weight-normal font-italic d-block">Tracking Number : {{$item->track_number}}</span>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
                <div class="col">
                  <div class="collapse " id="entertainment">
                    @foreach($ents as $item)
                    <div class="card card-body">
                      <div class="p-2">
                        <img src="../images/imgENT/{{$item->pic($item->product_id)}}" alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                          <h5 class="mb-0"> <a href="{{ route('ent.show',$item->product_id)}}" class="text-dark d-inline-block align-middle">{{$item->name($item->product_id)}}</a></h5><span class="text-muted font-weight-normal font-italic d-block">PRICE : ${{$item->price($item->product_id)}} , QUANTITY : {{$item->qty}}</span>
                          <form action="{{route('profile.pdf')}}" method="get">
                           <input type="hidden" name="id" value="{{$item->product_id}}">
                           <input type="hidden" name="qty" value="{{$item->qty}}">
                          <input class="btn btn-outline-primary d-inline-block align-middle" type="submit" value="Download PDF">
                          </form>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane text-center gallery" id="favorite">
            <div class="row">
            @foreach($wishlist as $item)
                <div class="prod m-auto p-2">
                    <div class="card card-body">
                      <div class="p-2">
                        <img src="/images/imgSHOPPING/products/{{$item->pic($item->product_id)}}" alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                          <h5 class="mb-0"> <a href="{{ route('shopping.show',$item->product_id)}}" class="text-dark d-inline-block align-middle">{{$item->name($item->product_id)}}</a></h5>
                        </div>
                      </div>
                    </div>
                </div>
            @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>



@endsection('main')

@section('script')
    <script src="{{asset('assets/assetsCENTER/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/assetsCENTER/vendor/profil-files/popper.js')}}"></script>
    <script src="{{asset('assets/assetsCENTER/js/ProfilJs.js')}}"></script>
@endsection('script')
 