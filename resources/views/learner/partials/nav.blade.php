<div class="navbar-fixed">
	<!--dropdown1 for nav-bar profile image-->
	<ul id="dropdown1" class="dropdown-content profile-custom-list">

	
	@if (Auth::guest())
		<li><a href="{{ url('/learner/login') }}">Login</a></li>
		<li><a href="{{ url('/learner/register') }}">Register</a></li>
	@else

    <li><a href="/student_profile" class="text-center">Account</a></li>
    <li class="divider"></li>
		<li><a href="{{ route('learner.account.edit') }}" class="text-center">Edit Profile</a></li>
		<li class="divider"></li>
		<li>
	
		 <a href="{{ url('/learner/logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
         </a>

            <form id="logout-form" action="{{ url('/learner/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>

		
		</li>
	</ul>
	@endif

   <nav class="dashboard-nav">
   	<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons black-text">menu</i></a>
      <div class="nav-wrapper navbar-color">
      	<a href="{{ url('/learner/home') }}" class="brand-logo"><img src="{{ URL::to('zfrontend/img/logo.png') }}" class="logo-image-dashboard-top-nav" alt=""></a>
        <ul class="right hide-on-med-and-down">

        	<li><a class="nav-profile-image dropdown-button" href="#!" data-activates="dropdown1">
			<img src="{{ URL::to('zfrontend./img/user.png') }}" class="main-profile-image"><i class="material-icons right black-text">arrow_drop_down</i></a></li>
     	</ul>
      </div>
   </nav>
</div>