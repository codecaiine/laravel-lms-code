@extends('layouts.classroom_layout')

@section('content')


   <style type="text/css">
         body{
            background-color: #ffff;
         }
         @media only screen and (max-width : 480px) {
            .side-nav.fixed.side-nav-custom{
               overflow: scroll;
            }
            .col.s4.card-image{
               width: 100%;
            }

         }

         @media only screen and (max-width : 600px) {

            #video-frame{
               margin-left: 0;
            }

            .video-next-button{
               margin-right: 29px;
            }

         }
      </style>


   <div class="row">

      <!--Main content beginning-->
      <div class="col s12 m7 l8">

         <video id="video-frame" class="responsive-video" controls>
            <source id="video_1" src="movie.mp4" type="video/mp4">
            <source id="video_2" src="movie.mp4" type="video/mp4">
         </video>
         <a class="waves-effect waves-light btn video-next-button">Next</a>

         <!--End of main content-->
      </div>

      <!--Beginning of sidebar-->
      <div class="col s12 m5 l4 classroom-side-nav">
            <div class="card classroom-card">
               <div class="card-tabs">
                  <ul class="tabs tabs-fixed-width">
                     <li class="tab">
                        <a class="active" href="#video">Sections</a>
                     </li>
                     <li class="tab"><a href="#test5">Transcripts</a></li>
                     <li class="tab"><a href="#test6">Resources</a></li>
                  </ul>
               </div>
               <div class="card-content">
                  <div id="video">
                     <ul class="collapsible collapsible-accordion video-section">
                        <li>
                           <a class="collapsible-header">Section 1</a>
                           <div class="collapsible-body">
                              <ul>
                                 <li><a href="#video_1"><i class="material-icons course-progress-icon">check_circle</i>
                                    <span class="section-text">Intro to design thinking 1</span>
                                 </a></li>
                                 <div class="divider section-divider"></div>

                                 <li><a href="#video_2"><i class="material-icons course-progress-icon">check_circle</i>
                                    <span class="section-text">Intro to design thinking 2</span>
                                 </a></li>
                              </ul>
                           </div>
                        </li>
                        <li>
                           <a class="collapsible-header">Section 2</a>
                           <div class="collapsible-body">
                              <ul>
                                 <li><a href="#video_1"><i class="material-icons course-progress-icon">check_circle</i>
                                    <span class="section-text">Intro to design thinking 1</span>
                                 </a></li>
                                 <div class="divider section-divider"></div>
                                 <li><a href="#video_2"><i class="material-icons course-progress-icon">check_circle</i>
                                    <span class="section-text">Intro to design thinking 1</span>
                                 </a></li>
                              </ul>
                           </div>
                        </li>
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
<script src="js/script.js"></script>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script type="text/javascript">

   // Initialize collapse button
   $(".button-collapse").sideNav();
   // Initialize collapsible (uncomment the line below if you use the dropdown variation)
   //$('.collapsible').collapsible();


</script>

@stop
