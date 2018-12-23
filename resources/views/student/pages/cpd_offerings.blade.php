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



<!--main body-->
<div class="row institution-background">
   <div class="container">
      <div class="col s12">
         <div class="inherit-width text-center">
            <i class="medium material-icons color-gray">check_circle</i>
            <h5 class="eduafric-green">Accredited Continuing Professional Development Courses</h5>
         </div>
      </div>
   </div>
</div>


<!-- Page search here -->
<div class="row display-cpd-row">

   <div class="col s12 m4 l3">

      <div class="row cpd-select-card">

         <h6 class="text-center">Filter Search</h6>

         <div class="input-field col s12 search-field-height">
            <input type="text"  class="black-text cpd-search-input-field autocomplete" placeholder="Search Courses">
            <i class="small material-icons right filter-search-icon">search</i>
         </div>

         <div class="input-field col s12 search-field-height">
            <select>
               <option value="">Health</option>
               <option value="">Design</option>
               <option value="">Engineering</option>
               <option value="">Finance</option>
            </select>
            <label class="search-label-text">Sector</label>
         </div>

         <div class="input-field col s12 search-field-height">
            <select multiple>               
               <option value="">Option 1</option>
               <option value="">Option 2</option>
               <option value="">Option 3</option>
            </select>
            <label class="search-label-text">Sub-Sector</label>
         </div>

         <div class="input-field col s12 search-field-height">
            <select>               
               <option value="">Short Course</option>
               <option value="">Updates</option>
               <option value="">Conferences</option>
               <option value="">Workshop</option>
               <option value="">Master Class</option>
               <option value="">e-Seminar</option>
            </select>
            <label class="search-label-text">Program</label>
         </div>

         <div class="col s12"><a class="waves-effect waves-light btn z-depth-4 search-button">Submit</a></div>

      </div>

   </div>

   <div class="col s12 m8 l9 cpd-offerings-display-section">

      <div class="col s12 m5 l3 cpd-course-card-row">
         <div class="card cpd-course-card">
            <span class="new badge red floating-badge">Free</span>
            <div class="card-image cpd-course-image-card">
               <img src="img/architectural_building.png" class="cpd-course-image">
            </div>
            <a href="course_details"><span class="badge blue white-text z-depth-4 enrol-badge">Enrol Course</span></a>
            <div class="card-content">
               <h6>Architectural Design</h6>
            </div>
         </div>
      </div>
   </div>

</div>





@stop