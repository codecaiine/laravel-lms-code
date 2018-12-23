@extends('layouts.index_layout')

@section('content')
 
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
         <img src="img/e-learning.png" class="grid-featured-image hoverable z-depth-5">
      </div>
   </div>

</div>

<div class="row section-row section-2">

   <div class="row container">
      <div class="col col s12 m6 l6 item-grid">
         <img src="img/cpd2.jpg" class="grid-featured-image hoverable z-depth-5">

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
         <img src="img/expert.jpg" class="grid-featured-image hoverable z-depth-5">
      </div>
   </div>

</div>

 
 
@stop