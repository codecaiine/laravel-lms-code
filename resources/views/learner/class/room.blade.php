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


<!-- favourite icon -->
<link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/icons/favicon.ico" type="image/x-icon">

 
</head>
 
<body>

    <!-- Sign_In and Sign_Up Navbar -->
    

   <style type="text/css">
         body{
            background-color: #000000;
         }

         .classroom-div{
            margin-bottom: 0px;
         }

         .section-div{
            border: 0;
             background-color: #191919;
         }

         .collapse-div{
             border: 0;
         }

         @media  only screen and (max-width : 480px) {
            .side-nav.fixed.side-nav-custom{
               overflow: scroll;
            }
            .col.s4.card-image{
               width: 100%;
            }

         }

         @media  only screen and (max-width : 600px) {

            #video-frame{
               margin-left: 0;
            }

            .video-next-button{
               margin-right: 0px;
            }

         }

      </style>
    
    
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



   <div class="row classroom-div">

      <!--Main content beginning-->
      <div class="col s12 m7 l8">

          <div id="video-frame" class="video-container responsive-video video-frame-custom">
              <iframe src="https://www.youtube.com/embed/AhPQta6dJZs" frameborder="0" allowfullscreen></iframe>
          </div>

         <a class="waves-effect waves-light btn video-next-button">Next</a>

         <!--End of main content-->
      </div>

      <!--Beginning of sidebar-->
      <div class="col s12 m5 l4 classroom-side-nav">
            <div class="card classroom-card">
               <div class="card-tabs">
                  <ul class="tabs tabs-fixed-width ">
                     <li class="tab black-background">
                        <a class="active" href="#video"><span class="mix-white">Sections</span></a>
                     </li>
                     <li class="tab black-background"><a href="#test5"><span class="mix-white">Transcripts</span></a></li>
                     <li class="tab black-background"><a href="#test6"><span class="mix-white">Resources</span></a></li>
                  </ul>
               </div>
               <div class="card-content black-background">
                  <div id="video">
                     <ul class="collapsible collapsible-accordion video-section">          
                         
                         @foreach ($course->sections as $section) 
                         
                         <li>
                           <a class="collapsible-header section-div mix-white">{{$section->sectiontitle}}</a>
                           <div class="collapsible-body collapse-div">
                              <ul>
                                
                                  @foreach ($section->lessons as $lesson)
                                  
                                  <li><a href="#video_1"><i class="material-icons course-progress-icon">check_circle</i>
                                    <span class="section-text mix-white">{{ $lesson->lessontitle}} 1</span>
                                 </a>
                                  </li>
                                  @endforeach
                                 
                              </ul>
                           </div>
                        </li>
                         
                          @endforeach
                         
                       
                     </ul>

                  </div>
                  <div id="test5">Test 2</div>
                  <div id="test6">Test 3</div>
               </div>
            </div>

      </div>
      <!--End of sidebar-->

   </div>

   <!--Import Script-->
<script src="{{ URL::to('zfrontend/js/script.js') }}"></script>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script type="text/javascript">

   // Initialize collapse button
   $(".button-collapse").sideNav();
   // Initialize collapsible (uncomment the line below if you use the dropdown variation)
   //$('.collapsible').collapsible();
   $(document).ready(function () {
      $('.collapsible-body').show();

   })

</script>



 
</body>
 
</html>