<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    
    
    <!-- Bootstrap Core Css -->
    <link href="{{ URL::to('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ URL::to('plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ URL::to('plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ URL::to('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ URL::to('css/style.css') }}" rel="stylesheet">

    <!-- Morris Chart Css-->
    <link href="{{ URL::to('plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ URL::to('plugins/waitme/waitMe.css') }}" rel="stylesheet" />

    <link href="{{ URL::to('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ URL::to('plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="{{ URL::to('plugins/nouislider/nouislider.min.css') }}" rel="stylesheet" />


     <!-- Dropzone Css -->
     <link href="{{ URL::to('plugins/dropzone/dropzone.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ URL::to('css/themes/all-themes.css') }}" rel="stylesheet" />

</head>

<body class="theme-green">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    
   @include('instructor.partials.nav')

   @include('instructor.partials.aside')
    
    @yield('content')


<!-- Jquery Core Js -->
<script src="{{ URL::to('plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ URL::to('plugins/bootstrap/js/bootstrap.js') }}"></script>

<!-- Select Plugin Js -->
<script src="{{ URL::to('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ URL::to('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ URL::to('plugins/node-waves/waves.js') }}"></script>


<script src="{{ URL::to('plugins/autosize/autosize.js') }}"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ URL::to('plugins/momentjs/moment.js') }}"></script>
<script src="{{ URL::to('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

<!-- ChartJs -->
<script src="{{ URL::to('plugins/chartjs/Chart.bundle.js') }}"></script>


<!-- Custom Js -->
<script src="{{ URL::to('js/admin.js') }}"></script>
<script src="{{ URL::to('js/pages/forms/advanced-form-elements.js') }}"></script>
<script src="{{ URL::to('js/pages/forms/form-validation.js') }}"></script>
<script src="{{ URL::to('plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ URL::to('plugins/tinymce/tinymce.js') }}"></script>
<script src="{{ URL::to('js/pages/ui/modals.js') }}"></script>


<!-- Demo Js -->
<script src="{{ URL::to('js/demo.js') }}"></script>


<script src="{{ URL::to('js/pages/forms/basic-form-elements.js') }}"></script>




<!-- Jquery CountTo Plugin Js -->
<script src="{{ URL::to('plugins/jquery-countto/jquery.countTo.js') }}"></script>

<!-- Morris Plugin Js -->
<script src="{{ URL::to('plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ URL::to('plugins/morrisjs/morris.js') }}"></script>

<!-- Flot Charts Plugin Js -->
<script src="{{ URL::to('plugins/flot-charts/jquery.flot.js') }}"></script>
<script src="{{ URL::to('plugins/flot-charts/jquery.flot.resize.js') }}"></script>
<script src="{{ URL::to('plugins/flot-charts/jquery.flot.pie.js') }}"></script>
<script src="{{ URL::to('plugins/flot-charts/jquery.flot.categories.js') }}"></script>
<script src="{{ URL::to('plugins/flot-charts/jquery.flot.time.js') }}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{ URL::to('plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

<!-- Custom Js -->
<script src="{{ URL::to('js/pages/index.js') }}"></script>

<script src="{{ URL::to('js/pages/forms/basic-form-elements.js') }}"></script>

 <!-- noUISlider Plugin Js -->
 <script src="{{ URL::to('plugins/nouislider/nouislider.js') }}"></script>

 <!-- Dropzone Plugin Js -->
 <script src="{{ URL::to('plugins/dropzone/dropzone.js') }}"></script>
    
</body>

</html>
