<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login" background="images/background.jpg">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            @if(Session::has('failedLogin'))
              <p class="login-box-msg" style="color: red">{{ Session::get('failedLogin') }}</p>
            @endif
            <form action="{{ url('login') }}" method="post">
               {!! csrf_field() !!}
              <h1>Login Form</h1>
              <div >
                @if($errors->has('email'))
                   <strong class="label" style="color: red">{{ $errors->first('email')}}
                   </strong>
                @endif
                <input type="text" name="email" class="form-control" placeholder="Nomor Induk Pegawai" value="{{ old('email') }}"/>
              </div>
              <div>
                @if($errors->has('password'))
                   <strong class="label" style="color: red">{{ $errors->first('password')}}
                   </strong>
                @endif
                <input type="password" name="password" class="form-control" placeholder="Password"/>
              </div>
              <div>
                <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
              </div>
              <div class="separator">
                <br />
                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>