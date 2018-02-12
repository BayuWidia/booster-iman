<!DOCTYPE html>
<html>
<title>BOOSTER IMAN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
<body background="images/login.jpg">
<!-- Page content -->
<div class="w3-content" style="width:40%;padding-top: 10%">
  <!-- Newsletter -->
  <div class="w3-container" style="border-style: solid; border-radius: 5px; background-color: #35495D; color: #FFFFFF">
    <div>
      <h3 style="text-align: center;">BOOSTER IMAN</h3>
      <p style="text-align: center;">Management</p>
        @if(Session::has('failedLogin'))
          <p class="login-box-msg" style="text-align: center; color: red">{{ Session::get('failedLogin') }}</p>
        @endif
          <form action="{{ route('login') }}" method="post">
             {!! csrf_field() !!}
              <label>E-mail</label>
              <br>
              @if($errors->has('email'))
                 <strong class="label" style="color: red">{{ $errors->first('email')}}
                 </strong>
              @endif
              <input class="w3-input w3-border" type="text" placeholder="Ketikkan Email Anda..." name="email" value="{{ old('email') }}">
              
              <label>Password</label>
              <br>
              @if($errors->has('password'))
                 <strong class="label" style="color: red">{{ $errors->first('password')}}
                 </strong>
              @endif
              <input class="w3-input w3-border" type="password" name="password" placeholder="Ketikkan Password Anda...">
              <button type="submit" class="w3-button w3-green w3-margin-top" style="text-align: center;">Submit</button>
          </form>
    </div><br>
  </div>
</div>

</body>
</html>
