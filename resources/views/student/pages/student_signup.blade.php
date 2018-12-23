@extends('layouts.access_layout')

@section('content')

	<style>
	  @media screen and (max-width: 480px)
	  {
	     .sign-up-container{
	        width: 100%;
	     }
	  }

	  @media screen and (max-width: 600px)
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
	      <div class="card-panel z-depth-5 sign-up-container">
	         <div class="text-center">
	            <p>Sign Up with</p>
	            <a class="btn facebook-logo-btn" href="#"><img src="img/icons/facebook2.png" class="facebook-logo"><span>facebook</spa>
	            </a>	   
	            <a class="btn google-logo-btn" href="#"><img src="img/icons/google.png" class="google-logo"><span>Google</span></a>
	         </div>

	         <div class="text-center"><h6>or</h6></div>

	         <div class="row form-padding">
	            <form class="col s12">
	               <div class="row custom-input-field">
	                  <div class="input-field col s12">
	                     <input id="email" type="text" class="validate custom-input-field">
	                     <label for="email">Email</label>
	                  </div>
	               </div>
	               <div class="row custom-input-field">
	                  <div class="input-field col s12">
	                     <input id="password" type="password" class="validate custom-input-field">
	                     <label for="password">Password</label>
	                  </div>
	               </div>
	               <button class="waves-effect waves-light btn sign-up-button">SIGN UP</button>
	               <div class="signup-agreement text-center grey-color">By clicking Sign Up, you agree to our <a href="">Terms of Use</a> and our <a href="#">Privacy Policy. </a></div>
	               <div class="sign-up-link">Already have an account? <a href="student_signin">Sign In</a></div>
	            </form>
	         </div>
	      </div>
	   </div>

	</div>


@stop