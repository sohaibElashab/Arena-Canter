@extends('layout.center')

@section('header')
@php
$sign=1; 
@endphp
@include('layout.header',['sign' => $sign])
@endsection('header')

@section('main')
<main id="mainSign">
<!-- =======login Section ======= -->
<section class="sectionLogin">

      @if (session('successMSG'))
        <div class="toast" style="position: absolute; top: 12vh; right: 2vw; z-index:200; color:white; background:#4F9E51; ">
          <div class="toast-body">
            {{ session('successMSG') }}
          </div>
        </div>
      @endif

  <div class="login-wrap">
    <div class="loginStyle"></div>
    <div class="login-html">
      
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label> 

      <div class="login-form">
        <div  class="sign-in-htm">
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <div class="group">
            <label for="user" class="label">Username</label>
            <input name="username" id="user" type="text" class="input">
            <span style="color:white;">{{ $errors->first('username') }} </span>  
          </div>
          <div class="group">
            <label for="pass" class="label">Password</label>
            <input name="password" id="pass" type="password" class="input" data-type="password">
            <span style="color:white;">{{ $errors->first('password') }} </span>  
          </div>
          <div class="group">
            <input type="submit" class="button" value="Sign In">
          </div>
          <div class="hr"></div>
          <div class="foot-lnk">
            <span href="#forgot" style="color:white; cursor:pointer;" onclick="$('.forgot').fadeToggle(100);">Forgot Password?</span>
          </div>
        </form>
        <br>
          <div class="forgot" style="display:none;">
          <form action="{{ route('password.email') }}" method="post">
          @csrf
            <div class="group">
              <label for="pass" class="label">Email adress</label>
              <input name="email" id="pass" type="text" class="input">
              <span style="color:white;">{{ $errors->first('email') }} </span>  
            </div>
            <div class="group">
              <input type="submit" class="button" value="Send">
            </div>
          </form>
          </div>
        </div>
        <form action="{{ route('register') }}" method="POST" class="sign-up-htm">          
          @csrf
          <div class="group">
            <label for="user" class="label">Username</label>
            <input name="username" id="user" type="text" class="input">
            <span style="color:white;">{{ $errors->first('username') }} </span>  
          </div>
          <div class="group">
            <label for="pass" class="label">Email Address</label>
            <input name="email" id="pass" type="text" class="input">
            <span style="color:white;">{{ $errors->first('email') }} </span> 
          </div>
          <div class="group">
            <label for="pass" class="label">Password</label>
            <input name="password" id="pass" type="password" class="input" data-type="password">
            <span style="color:white;">{{ $errors->first('password') }} </span>  
          </div>
          <div class="group">
            <label for="pass" class="label">Repeat Password</label>
            <input name="password_confirmation" id="pass" type="password" class="input" data-type="password">
            <span style="color:white;">{{ $errors->first('password_confirmation') }} </span>  
          </div>
          
          <div class="group">
            <input type="submit" class="button" value="Sign Up">
          </div>
          <div class="hr"></div>
          <div class="foot-lnk">
            <label for="tab-1" style="color:white; cursor:pointer;">Already Member?</label>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

</main>
@endsection('main')