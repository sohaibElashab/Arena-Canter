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

        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Reset password</label>
            
            <div class="login-form">
                
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="group">
                            <label for="pass" class="label">Email adress</label>
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
                            <input type="submit" class="button" value="Reset password">
                        </div>
                    </form>

                
            </div>
     </div>
  </div>
</section>

</main>
@endsection('main')