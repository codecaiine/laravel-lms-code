<html>
 
<head>
 
   <meta charset="UTF-8">
<title>eduAfric</title>
<!--Browser is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

<!-- custom css -->
<link rel="stylesheet" type="text/css" href="{{ URL::to('zfrontend/css/style.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::to('zfrontend/css/indexcss.css') }}" /> 
</head>
 
<body>

    <!-- Sign_In and Sign_Up Navbar -->
<nav class="nav-custom ">
   <div class="nav-wrapper navbar-color">
     <a href="{{ url('/') }}" class="brand-logo center"><img class="responsive-img logo-img-top-nav" src="{{ URL::to('zfrontend/img/logo.png') }}"></a>
   </div>
</nav>


    
	<style type="text/css">
		body{
			background-color: #f7f7f7;
		}

	</style>

	<div class="card-panel z-depth-1 login-container">
	   <div class="text-center">
	      	<p class="grey-color">Sign in with</p>
	      	<a class="btn facebook-logo-btn" href="#"><img src="{{ URL::to('zfrontend/img/icons/facebook2.png') }}" class="facebook-logo"><span>facebook</span>
	            </a>	   
	       	<a class="btn google-logo-btn" href="#"><img src="{{ URL::to('zfrontend/img/icons/google.png') }}" class="google-logo"><span>Google</span></a>
	   </div>

	   <div class="text-center credentials-text"><h6 class="grey-color">Or with credentials below</h6></div>

	   <div class="row form-padding">
         <form class="form-horizontal" role="form" method="POST" action="{{ url('/learner/login') }}">
         {{ csrf_field() }} 
           
	      <div class="col s12">
	         <div class="row">
                 
	            <div class="input-field{{ $errors->has('email') ? ' has-error' : '' }} col s12">
	               <input id="email" type="email" class="validate custom-input-field change-placeholder" placeholder="Email" name="email" value="{{ old('email') }}" autofocus> 
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
	            </div>
                 

                <div class="input-field{{ $errors->has('password') ? ' has-error' : '' }} col s12">
	               <input id="password" type="password" name="password" class="validate custom-input-field change-placeholder" placeholder="Password">
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
	            </div>


	         </div>	        
	         <button class="waves-effect waves-light btn login-button">SIGN IN</button>
              
	         <div class="forget-password"><a href="#">Forget password?</a></div>
	         <div class="sign-in-link"><span class="grey-color">Do not have account ?</span><a href="{{ url('/learner/register') }}"> Sign Up</a></div>
	      </div>
           
        </form> 
	   </div>
	</div>

 
</body>
 
</html>