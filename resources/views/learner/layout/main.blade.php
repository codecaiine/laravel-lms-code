<html>
 
<head>
 
<meta charset="UTF-8">
<title>@yield('title')</title>
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
    
<style type="text/css">
      @media only screen and (max-width : 480px) {
         .side-nav.fixed.side-nav-custom{
            overflow-y: scroll;

         }
      }

      @media only screen and (max-width : 988px) {
         .form-custom{
            padding-left: 0px !important;
         }
      }


      body{
      	background-color: #f7f7f7;
      }

      #upload_link{
          text-decoration:none;
      }
      #upload{
          display:none
      }

      .select-dropdown{
        border: 1px solid #bdbdbd !important;        
      }

      .select-option{
        padding-right: 0 !important;
      }

      .dropdown-content{
        z-index: 2 !important;
        overflow-y: auto !important;
        max-height: 300px !important;
      }

      .edit-icon{
           position: absolute;
           right: 0;
           top: 0;
           display: none;
      }

      .change-image-text{
          display: none;
          position: center;
          color: #ffffff;
      }

      .image-view:hover {
          opacity:0.5;
      }
       .image-view:hover .change-image-text{
           display: contents;
       }

       .upload-image-button{
           display: none;
           margin-top: 5px;

       }

      .upload-image-button:hover{
          background-color: white !important;
      }


</style>
 
</head>
 
<body>

  
@include('learner.partials.nav')

<div class="row">
 @include('learner.partials.sidebar')

 @yield('content')

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

   // Image form upload
   $("#profileImage").click(function(e) {
      $("#imageUpload").click();
   });

   // Select form option
   $(document).ready(function() {
      $('select').material_select();
   });

   // Birth date picker
   $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15, // Creates a dropdown of 15 years to control year,
      today: 'Today',
      clear: 'Clear',
      close: 'Ok',
      closeOnSelect: false, // Close upon selecting a date,
      container: undefined, // ex. 'body' will append picker to body
   });

</script>
<script type="text/javascript">

  function readURL(input) {
      var url = input.value;
      var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
      if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#img').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
      }else{
           $('#img').attr('src', './img/no_preview.png');
      }
  }


  $(function(){
    $("#upload_link").on('click', function(e){
        e.preventDefault();
        $("#upload:hidden").trigger('click');
    });
  });
</script>

 
</body>
 
</html>