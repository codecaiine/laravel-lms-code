@extends('layouts.access_layout')

@section('content')

	<style type="text/css">
		body{
			background-color: #f7f7f7;
		}

	</style>

	<div class="card-panel z-depth-5 login-container">
	   <div class="text-center">
	      	<p>Sign in with</p>
	      	<a class="btn facebook-logo-btn" href="#"><img src="img/icons/facebook2.png" class="facebook-logo"><span>facebook</spa>
	            </a>	   
	       	<a class="btn google-logo-btn" href="#"><img src="img/icons/google.png" class="google-logo"><span>Google</span></a>
	   </div>

	   <div class="text-center"><h6>or</h6></div>

	   <div class="row form-padding">
	      <form class="col s12">
	         <div class="row">
	            <div class="input-field col s12">
	               <input id="user_name" type="text" class="validate">
	               <label for="user_name">Email</label>
	            </div>
	         </div>
	         <div class="row">
	            <div class="input-field col s12">
	               <input id="password" type="password" class="validate">
	               <label for="password">Password</label>
	            </div>
	         </div>
	         <button class="waves-effect waves-light btn login-button">SIGN IN</button>
	         <div class="forget-password"><a href="#">Forget password?</a></div>
	         <div class="sign-in-link">Do not have account?<a href="student_signup">Sign Up</a></div>
	      </form>
	   </div>
	</div>


@stop