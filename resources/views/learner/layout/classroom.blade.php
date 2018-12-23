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


  @include('learner.partials.nav')

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
       @yield('content')
       
       
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