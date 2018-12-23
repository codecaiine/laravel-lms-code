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

 

     

<style type="text/css">
      @media  screen and (max-width: 993px) {
         .custom-button{
            width: 150px
         }

         .register-button{
            width: 150px;
         }

      }


      @media  screen and (max-width: 752px) {
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

      @media  screen and (max-width: 1176px) {
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

      .select-dropdown{
         border: 1px solid #fff8dc !important;
         margin-top: 20px !important;
      }

      .cpd-search-input-field{
         border: 1px solid #fff8dc !important;
      }

      .search-button{
         width: inherit;
         color: black;
         background-color: white;
         border: 1px solid #fff8dc !important;
         text-transform: none;
         box-shadow: none;
         text-align: center;
         margin-bottom: 10px;
         margin-top: 20px;
      }

      .search-button:hover{
         background-color: white;
      }
   </style>

@include('learner.partials.nav')

@yield('content')

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
               <li><a class="footer-text grey-text" href="#!">About Us</a></li>
               <li><a class="footer-text grey-text" href="#!">Sectors</a></li>
               <li><a class="footer-text grey-text" href="#!">Categories</a></li>
               <li><a class="footer-text grey-text" href="#!">Partners</a></li>
               <li><a class="footer-text grey-text" href="#!">CPD Providers</a></li>
            </ul>
         </div>
         <div class="col l2 s12 footer-content">
            <ul>
               <li><a class="footer-text grey-text" href="#!">Short Courses</a></li>
               <li><a class="footer-text grey-text" href="#!">Conferences</a></li>
               <li><a class="footer-text grey-text" href="#!">Master Class</a></li>
               <li><a class="footer-text grey-text" href="#!">Seminars</a></li>
               <li><a class="footer-text grey-text" href="#!">Updates</a></li>
            </ul>
         </div>
         <div class="col l2 s12 footer-content footer-contact">
            <ul>
               <li><i class="material-icons grey-text">location_on</i><span class="footer-text grey-text">20 Aluguntugui street East-Legon. Accra, Ghana</span></li>
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
            Copyright © 2018 - eduAfric.
         </div>
         <div class="col s12 m6 l6">
            <a href="#"><span class="grey-text footer-end-text">Terms of Service</span></a>          
            <a href="#"><span class="grey-text footer-end-text">Privacy</span></a>         
         </div>
      </div>
   </div>
</footer>

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
      if ($(window).scrollTop() > 400) {
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