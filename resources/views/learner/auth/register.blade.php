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


    
	<style>
	  @media  screen and (max-width: 480px)
	  {
	     .sign-up-container{
	        width: 100%;
	     }
	  }

	  @media  screen and (max-width: 600px)
	  {
	     .sign-up-text{
	        margin-top: 10px;
	        margin-left: 0;
	        font-size: medium;
	     }
	  }

	  body{
	  	background-color: #f7f7f7;
	  }

	</style>

		
	<div class="row">

	   <div class="col s12 m4 l6">
	      <div class="center-align">
	         <h4 class="sign-up-text">Manage your profile, enroll for courses and see your progress</h4>
	      </div>
	   </div>

	   <div class="col s12 m8 l6">
	      <div class="card-panel z-depth-1 sign-up-container">
            <div class="text-center">
              <p class="grey-color">Sign in with</p>
                    <a class="btn facebook-logo-btn" href="#"><img src="{{ URL::to('zfrontend/img/icons/facebook2.png') }}" class="facebook-logo"><span>facebook</span>
                        </a>	   
                    <a class="btn google-logo-btn" href="#"><img src="{{ URL::to('zfrontend/img/icons/google.png') }}" class="google-logo"><span>Google</span></a>
               </div>

	         <div class="text-center grey-color"><h6 class="credentials-text">Or create account below</h6></div>

	         <div class="row form-padding">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/learner/register') }}">
            {{ csrf_field() }}
                 
	            <div class="col s12">	              
	               <div class="row">
	               	 <div class="input-field{{ $errors->has('l_firstname') ? ' has-error' : '' }} col s12">
	                     <input type="text" id="l_firstname" name="l_firstname" value="{{ old('l_firstname') }}" class="validate custom-input-field change-placeholder" placeholder="Firstname">	
                         @if ($errors->has('l_firstname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('l_firstname') }}</strong>
                        </span>
                        @endif
	                  </div>
                       
                       
                       <div class="input-field{{ $errors->has('l_lastname') ? ' has-error' : '' }} col s12">
	                     <input type="text" id="l_lastname" name="l_lastname" value="{{ old('l_lastname') }}" class="validate custom-input-field change-placeholder" placeholder="Lastname">	
                         @if ($errors->has('l_lastname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('l_lastname') }}</strong>
                        </span>
                        @endif
	                  </div>
                       
	                  <div class="input-fieldrow{{ $errors->has('email') ? ' has-error' : '' }} col s12">
	                     <input  id="email" type="email" name="email" value="{{ old('email') }}" class="validate custom-input-field change-placeholder" placeholder="Email">
                        
                         @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
	                  </div>
                       
                       
                       <div class="input-field{{ $errors->has('password') ? ' has-error' : '' }} col s12">
	                     <input id="password" type="password" name="password"  class="validate custom-input-field change-placeholder" placeholder="Password">
                           @if ($errors->has('password'))
                          <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                          </span>
                          @endif 
                           
	                  </div>
                       
	                  <div class="input-fieldrow{{ $errors->has('password_confirmation') ? ' has-error' : '' }} col s12">
	                     <input id="password-confirm" type="password" name="password_confirmation"  class="validate custom-input-field change-placeholder" placeholder="Confirm Password">	     
                          
                        @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
	                  </div>
                       
	               </div>
                    
	               <!--<div class="signup-agreement text-center grey-color">By clicking Sign Up, you agree to our <a href="">Terms of Use</a> and our <a href="#">Privacy Policy. </a></div>-->
                    
	               <button class="waves-effect waves-light btn sign-up-button">SIGN UP</button>
	               
	               <div class="sign-up-link"><span class="grey-color">Already have an account? </span><a href="student_signin">Sign In</a></div>
                 </div>
                 
              </form>  
	         </div>
	      </div>
	   </div>

	</div>
 
</body>
 
</html>