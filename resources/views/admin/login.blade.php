<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{asset('css/cssADMIN/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/cssADMIN/loginAdmin.css')}}" />
    <title>Login Admin</title>
  </head> 
  <body>
    <main class="LoginPageAdmin">
      <h1 class="titreLogin">Arena Center</h1>
      <form class="was-validated login" method="post" action="{{ route('admin.login.submit') }}">
      @csrf
        <div class="form-group">
          <label for="uname">Username:</label>
          <input type="email" class="form-control" id="uname" placeholder="Enter email" name="email" value="{{ old('email') }}" />
          {{$errors->first('email')}}
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password"/>
          {{$errors->first('password')}}
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </main>
  </body>
</html>
