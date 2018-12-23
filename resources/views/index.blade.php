<!DOCTYPE html>
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
   <link rel="stylesheet" href="{{ URL::to('zfrontend/css/style.css') }}">
   <link rel="stylesheet" href="{{ URL::to('zfrontend/css/indexcss.css') }}">
   <style type="text/css">
      @media screen and (max-width: 993px) {
         .custom-button{
            width: 150px
         }

         .register-button{
            width: 150px;
         }

      }


      @media screen and (max-width: 752px) {
         .text-header1{
            font-size: 30px;
         }

         . .text-header5{
            font-size: 20px;
         }


         .grid-featured-image{
            width: 295px;
            height: 200px;
         }
      }
      
      @media screen and (max-width: 1176px) {
         .feature-card-content{
            width: 100px;
         }

         .feature-text{
            font-size: 15px;
         }

         .custom-row{
            width: auto;
         }

         .custom-button, .register-button{
            font-size: 8px;
            width: auto;
         }

      }
   </style>
</head>

<body>


<!--Dropdown Structures-->

<!--dropdown1 for programs-->
<ul id="dropdown1" class="dropdown-content custom-list">
   <li class="menu-item"><a class="link-item" href="#">Short Courses</a></li>
   <li class="menu-item"><a class="link-item" href="#">Updates</a></li>
   <li class="menu-item"><a class="link-item" href="#">Conferences</a></li>
   <li class="menu-item"><a class="link-item" href="#">Workshop</a></li>
   <li class="menu-item"><a class="link-item" href="#">Master Class</a>
   <li class="menu-item"><a class="link-item" href="#">e-Seminar</a></li>
</ul>

<!--dropdown2 for sectors-->
<ul id="dropdown2" class="dropdown-content custom-list">
   <!--Sub-Dropdown Triggers-->
   <li class="menu-item"><a class="sub-dropdown-button link-item" data-activates="sub-dropdown-health" href="#">Health<i class="material-icons right chevron-right-icon">chevron_right</i></a></li>
   <li class="menu-item"><a class="sub-dropdown-button link-item" data-activates="sub-dropdown-design" href="#">Design<i class="material-icons right chevron-right-icon">chevron_right</i></a></li>
   <li class="menu-item"><a class="sub-dropdown-button link-item" data-activates="sub-dropdown-engineering" href="#">Engineering<i class="material-icons right chevron-right-icon">chevron_right</i></a></li>
   <li class="menu-item"><a class="sub-dropdown-button link-item" data-activates="sub-dropdown-finance" href="#">Finance<i class="material-icons right chevron-right-icon">chevron_right</i></a></li>
</ul>

<!--sub-dropdown for Health-->
<ul id="sub-dropdown-health" class="dropdown-content dropdown-content-custom sub-custom-list">
   <li class="menu-item"><a class="link-item" href="#">Medical</a></li>
   <li class="menu-item"><a class="link-item" href="#">Dental</a></li>
   <li class="menu-item"><a class="link-item" href="#">Nursing</a></li>
   <li class="menu-item"><a class="link-item" href="#">Pharmacy</a></li>
   <li class="menu-item"><a class="link-item" href="#">Others</a></li>
</ul>

<!--sub dropdown for Design-->
<ul id="sub-dropdown-design" class="dropdown-content dropdown-content-custom sub-custom-list">
   <li class="menu-item"><a class="link-item" href="#">Architecture</a></li>
   <li class="menu-item"><a class="link-item" href="#">Others</a></li>
</ul>

<!--sub dropdown for Engineering-->
<ul id="sub-dropdown-engineering" class="dropdown-content dropdown-content-custom sub-custom-list">
   <li class="menu-item"><a class="link-item" href="#">Electrical</a></li>
   <li class="menu-item"><a class="link-item" href="#">Mechanical</a></li>
   <li class="menu-item"><a class="link-item" href="#">Chemical</a></li>
   <li class="menu-item"><a class="link-item" href="#">Civil</a></li>
   <li class="menu-item"><a class="link-item" href="#">Others</a></li>
</ul>

<!--sub dropdown for Finance-->
<ul id="sub-dropdown-finance" class="dropdown-content dropdown-content-custom sub-custom-list">
   <li class="menu-item"><a class="link-item" href="#">Banking</a></li>
   <li class="menu-item"><a class="link-item" href="#">Non-Banking</a></li>
   <li class="menu-item"><a class="link-item" href="#">Securities</a></li>
</ul>


<!--page navigation-->
<nav id="nav-bar" class="nav-extended navbar-color landing-page-nav stuck-nav-bar ">
   <div class="nav-wrapper container navbar-custom-container">
      <a href="{{ url('/') }}" class="brand-logo"><img class="logo-image-dashboard-top-nav" src="{{ URL::to('zfrontend/img/logo.png') }}" alt=""></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons menu-icon">menu</i></a>
      <ul class="right hide-on-med-and-down">
         <!-- Dropdown Trigger -->
         <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><span class="nav-text">Programs<i class="material-icons right arrow-drop-down-icon">arrow_drop_down</i></span></a></li>
         <li><a class="dropdown-button" href="#!" data-activates="dropdown2"><span class="nav-text">Sectors<i class="material-icons right arrow-drop-down-icon">arrow_drop_down</i></span></a></li>
         <li><a href="cpd_providers.html"><span class="nav-text">CPD Providers</span></a></li>
         <li>
            <form>
               <div class="row">
                  <div class="col s12">
                     <div class="row">
                        <div class="input-field col s12">
                           <input type="text"  class="input-field-size black-text  autocomplete" placeholder="Search Courses">
                           <i class="material-icons black-text prefix search-icon">search</i>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </li>
         <li><a class="btn z-depth-3 custom-button" href="{{ url('/learner/login') }}"><span class="eduafric-green transform-text">Logg In</span></a></li>
         <li><a class="btn z-depth-3 register-button" href="{{ url('/learner/register') }}"><span class="white-text transform-text">Sign Up</span></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
         <li>
            <ul class="collapsible" data-collapsible="accordion">
               <li>
                  <div class="collapsible-header collapsible-header-custom">Programs<i class="material-icons right arrow-drop-down-icon">arrow_drop_down</i></div>
                  <div class="collapsible-body no-padding">
                     <ul>
                        <li><a href="#">Short Courses</a></li>
                        <li><a href="#">Updates</a></li>
                        <li><a href="#">Conferences</a></li>
                        <li><a href="#">Workshop</a></li>
                        <li><a href="#">Master Class</a>
                        <li><a href="#">e-Seminar</a></li>
                     </ul>
               </li>
            </ul>
         </li>
         <li>
            <ul class="collapsible" data-collapsible="accordion">
               <li>
                  <div class="collapsible-header collapsible-header-custom">Sector<i class="material-icons right arrow-drop-down-icon">arrow_drop_down</i></div>
                  <div class="collapsible-body no-padding">
                     <ul>
                        <li>
                           <ul class="collapsible" data-collapsible="accordion">
                              <li>
                                 <div class="collapsible-header collapsible-header-custom"><span class="side-nav-text">Health</span><i class="material-icons right arrow-drop-down-icon">arrow_drop_down</i></div>
                                 <div class="collapsible-body no-padding">
                                    <ul>
                                       <li><a class="side-nav-text" href="#">Medical</a></li>
                                       <li><a class="side-nav-text" href="#">Dental</a></li>
                                       <li><a class="side-nav-text" href="#">Nursing</a></li>
                                       <li><a class="side-nav-text" href="#">Pharmacy</a></li>
                                       <li><a class="side-nav-text" href="#">Others</a></li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <ul class="collapsible" data-collapsible="accordion">
                              <li>
                                 <div class="collapsible-header collapsible-header-custom"><span class="side-nav-text">Design</span><i class="material-icons right arrow-drop-down-icon">arrow_drop_down</i></div>
                                 <div class="collapsible-body no-padding">
                                    <ul>
                                       <li><a class="side-nav-text" href="#">Architecture</a></li>
                                       <li><a class="side-nav-text" href="#">Others</a></li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <ul class="collapsible" data-collapsible="accordion">
                              <li>
                                 <div class="collapsible-header collapsible-header-custom"><span class="side-nav-text">Engineering</span><i class="material-icons right arrow-drop-down-icon">arrow_drop_down</i></div>
                                 <div class="collapsible-body no-padding">
                                    <ul>
                                       <li><a class="side-nav-text" href="#">Electrical</a></li>
                                       <li><a class="side-nav-text" href="#">Mechanical</a></li>
                                       <li><a class="side-nav-text" href="#">Chemical</a></li>
                                       <li><a class="side-nav-text" href="#">Civil</a></li>
                                       <li><a class="side-nav-text" href="#">Others</a></li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <ul class="collapsible" data-collapsible="accordion">
                              <li>
                                 <div class="collapsible-header collapsible-header-custom"><span class="side-nav-text">Finance</span><i class="material-icons right arrow-drop-down-icon">arrow_drop_down</i></div>
                                 <div class="collapsible-body no-padding">
                                    <ul>
                                       <li><a class="side-nav-text" href="#">Banking</a></li>
                                       <li><a class="side-nav-text" href="#">Non-Banking</a></li>
                                       <li><a class="side-nav-text" href="#">Securities</a></li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </li>
                     </ul>
               </li>
            </ul>
         </li>
         <li><a href="#">CPD Providers</a></li>
         <li><a class="btn z-depth-3 custom-button" href="student_login.html"><span class="nav-text transform-text">Log In</span></a></li>
         <li><a class="btn z-depth-3 register-button" href="student_signup.html"><span class="nav-text transform-text">Sign Up</span></a></li>
      </ul>
   </div>
</nav>



<!--main body-->
<div class="row first-background">
   <div class="container">
      <div class="col s7">
         <div class="main-page-header">
            <h3 class="eduafric-green">Platform for professionals in Africa</h3>
            <h5 class="eduafric-green text-header">Take CPD courses online</h5>
            <h5 class="eduafric-green text-header">Update your career with ease</h5>
            <h5 class="text-header-color text-header">Improve your skills and life</h5>
         </div>

      </div>
      <div class="col s5">

      </div>
   </div>
</div>

<div class="row custom-row">
   <div class="col s12 m4 l4">
      <div class="card horizontal feature-card">
         <div class="card-image">
            <i class="material-icons custom-icon">book</i>
         </div>
         <div class="card-stacked">
            <div class="card-content feature-card-content">
               <h5 class="feature-text">Explore CPD Courses that suit your career</h5>
            </div>
         </div>
      </div>
   </div>
   <div class="col s12 m4 l4">
      <div class="card horizontal feature-card">
         <div class="card-image">
            <i class="material-icons custom-icon">person_pin</i>
         </div>
         <div class="card-stacked">
            <div class="card-content feature-card-content">
               <h5 class="feature-text">Learn from Experts in your profession</h5>
            </div>
         </div>
      </div>
   </div>
   <div class="col s12 m4 l4">
      <div class="card horizontal feature-card">
         <div class="card-image">
            <i class="material-icons custom-icon">schedule</i>
         </div>
         <div class="card-stacked">
            <div class="card-content feature-card-content">
               <h5 class="feature-text">Take courses at your convenience, anytime</h5>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="row section-row section-1">

   <div class="row container">
      <div class="col s12 m6 l6 item-grid">
         <h5>Africa's e-learning platform for professional organizations and CPD providers</h5>
         <h6>Take your courses, seminars, conference from physical class to online</h6>
      </div>


      <div class="col s12 m6 l6 item-grid">
         <img src="{{ URL::to('zfrontend/img/e-learning.png') }}" class="grid-featured-image hoverable z-depth-5">
      </div>
   </div>

</div>

<div class="row section-row section-2">

   <div class="row container">
      <div class="col col s12 m6 l6 item-grid">
         <img src="{{ URL::to('zfrontend/img/cpd2.jpg') }}" class="grid-featured-image hoverable z-depth-5">

      </div>
      <div class="col col s12 m6 l6 item-grid">
         <h5>Continuous Professional Development (CPD) Programs</h5>
         <h6>We make it easy for organizations to reach out to their professionals with up-to-date trainings and resources</h6>
         <a class="waves-effect waves-light btn z-depth-5 custom-button">Get Started</a>
      </div>
   </div>

</div>


<div class="row section-row section-3">
   <div class="row container">
      <div class="col s12 m6 l6 item-grid">
         <h5>Master Class, Short Courses, Seminars</h5>
         <h6>Learn from experts in Africa in special domains.</h6>
         <a class="waves-effect waves-light btn z-depth-5 custom-button">See Courses</a>
      </div>


      <div class="col s12 m6 l6 item-grid">
         <img src="{{ URL::to('zfrontend/img/expert.jpg') }}" class="grid-featured-image hoverable z-depth-5">
      </div>
   </div>

</div>




<!--page footer-->
<footer class="page-footer footer-background">
   <div class="container footer-container">
      <div class="row">
         <div class="col l4 s12 footer-content">
            <img class="footer-logo" src="img/logo.png" alt="">
            <p class="grey-text">A platform for accredited professional courses in Africa anytime anywhere...</p>
         </div>
         <div class="col l2 s12 footer-content">
            <ul>
               <li><a class="footer-text grey-text" href="#!">Programs</a></li>
               <li><a class="footer-text grey-text" href="#!">Sectors</a></li>
               <li><a class="footer-text grey-text" href="#!">CPD Providers</a></li>
            </ul>
         </div>
         <div class="col l2 s12 footer-content">
            <ul>
               <li><a class="footer-text grey-text" href="#!">Professional Courses</a></li>
               <li><a class="footer-text grey-text" href="#!">Master Class</a></li>
               <li><a class="footer-text grey-text" href="#!">Short Courses</a></li>
               <li><a class="footer-text grey-text" href="#!">Instructor</a></li>
               <li><a class="footer-text grey-text" href="#!">Student</a></li>
            </ul>
         </div>
         <div class="col l2 s12 footer-content footer-contact">
            <h5 class="grey-text">Contact</h5>
            <ul>
               <li><i class="material-icons grey-text">location_on</i><span class="footer-text grey-text">20 Aluguntugui street East-Legon. Accra, Ghana</span><i class="material-icons"></i></li>
               <li><i class="material-icons grey-text">phone</i><span class="footer-text grey-text">+233 (0) 20 141 5046</span></li>
               <li><i class="material-icons grey-text">email</i><span class="footer-text grey-text">info@eduafric.com</span></li>
               <li>
                  <a class="grey-text text-lighten-3" href="#!"><img class="social-media-icon" src="img/icons/facebook.png" alt=""></a>
                  <a class="grey-text text-lighten-3" href="#!"><img class="social-media-icon" src="img/icons/linkedin.png" alt=""></a>
                  <a class="grey-text text-lighten-3" href="#!"><img class="social-media-icon" src="img/icons/twitter-logo-silhouette.png" alt=""></a>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <div class="footer-copyright">
      <div class="row footer-container">
         <div class="col s12 m6 l6">
            © 2018 Copyright eduAfric - all rights reserved.
         </div>
         <div class="col s12 m6 l6">
            <a href="#"><span class="grey-text footer-end-text">Terms of Service</span></a>
            <a href="#"><span class="grey-text footer-end-text">Guide</span></a>
            <a href="#"><span class="grey-text footer-end-text">Policy</span></a>
            <a href="#"><span class="grey-text footer-end-text">Press</span></a>
         </div>
      </div>
   </div>
</footer>






<!--Import Script-->
<script src="{{ URL::to('zfrontend/js/script.js') }}"></script>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script type="text/javascript">

   //Adding and removing fixed position property after scroll
   $(document).ready(function ()
                     {
                        $('#nav-bar').removeClass('stuck-nav-bar');
                     });
   $(window).scroll(function() {
      if ($(window).scrollTop() > 500) {
         $('#nav-bar').addClass('stuck-nav-bar');
      } else {
         $('#nav-bar').removeClass('stuck-nav-bar');
      }
   });


   // Select form option
   $(document).ready(function() {
      $('select').material_select();

      //Drop down initialization
      $('.dropdown-button').dropdown(
         {
           inDuration: 300,
           outDuration: 225,
           constrain_width: false, // Does not change width of dropdown to that of the activator
           hover: true, // Activate on hover
           // gutter: ($('.dropdown-content').width()*3)/2.5 + 2, // Spacing from edge
           belowOrigin: false, // Displays dropdown below the button
           alignment: 'left' // Displays dropdown with edge aligned to the left of button
        }
      );
      $('.sub-dropdown-button').dropdown(
         {
            inDuration: 300,
            outDuration: 225,
            constrain_width: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: ($('.dropdown-content').width()), // Spacing from edge
            belowOrigin: false, // Displays dropdown below the button
            alignment: 'left' // Displays dropdown with edge aligned to the left of button
         }
      );

   });

   // Initialize collapse button
   // Initialize collapsible (uncomment the line below if you use the dropdown variation)
   //$('.collapsible').collapsible();
   $('.button-collapse').sideNav({
      menuWidth: 180,
      edge: 'left',
      closeOnClick: false,
      draggable: true
    }
  );

</script>
</body>
</html>

