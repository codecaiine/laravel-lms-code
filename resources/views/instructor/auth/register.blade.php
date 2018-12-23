<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Register | EduAfric</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ URL::to('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ URL::to('plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ URL::to('plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ URL::to('css/style.css') }}" rel="stylesheet">
</head>

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
          <center>
            <img src="{{ URL::to('images/eduafric_logo_white.png') }}" width="150" height="50" alt="User">
           </center>
        </div>
        <div class="card">
            <div class="body">

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/instructor/register') }}">
                    {{ csrf_field() }}


                    <div class="msg"></div>
                    <div class="input-group{{ $errors->has('i_firstname') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="i_firstname" value="{{ old('i_firstname') }}" placeholder="Firstname">
                        
                            @if ($errors->has('i_firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('i_firstname') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    
                    <div class="input-group{{ $errors->has('i_lastname') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="i_lastname" value="{{ old('i_lastname') }}" placeholder="Lastname">
                        
                            @if ($errors->has('i_lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('i_lastname') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    
                    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                        
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password">
                            
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="input-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" minlength="6" placeholder="Confirm Password">
                        
                            @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    

                    <button class="btn btn-block btn-lg bg-green waves-effect" type="submit">SIGN UP</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="{{ url('/instructor/login') }}">You already register ? Login now .</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

     <!-- Jquery Core Js -->
     <script src="{{ URL::to('plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ URL::to('plugins/bootstrap/js/bootstrap.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ URL::to('plugins/node-waves/waves.js') }}"></script>

<!-- Validation Plugin Js -->
<script src="{{ URL::to('plugins/jquery-validation/jquery.validate.js') }}"></script>

<!-- Custom Js -->
<script src="{{ URL::to('js/admin.js') }}"></script>
<script src="{{ URL::to('js/pages/examples/sign-in.js') }}"></script>
</body>

</html>