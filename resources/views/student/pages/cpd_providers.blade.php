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
            <h5 class="eduafric-green">Authorized CPD Providers</h5>
            <h6>Make CPD course available online and reach more professionals</h6>
            <div><a class="waves-effect waves-light btn cpd-contact-us-button">Contact Us</a></div>

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
            <input type="text"  class="black-text cpd-search-input-field autocomplete" placeholder="Search CPD Provider">
            <i class="small material-icons right filter-search-icon">search</i>
         </div>

         <div class="input-field col s12 search-field-height">
            <select>               >
               <option value="">Health</option>
               <option value="">Design</option>
               <option value="">Engineering</option>
               <option value="">Finance</option>
            </select>
            <label class="search-label-text">Sector</label>
         </div>

         <div class="input-field col s12 search-field-height">
            <select multiple>               >
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

   <div class="col s12 m8 l9 cpd-providers-display-section">
      <div class="card-stacked col s12 m5 l3 hoverable cpd-card-custom">
         <a href="cpd_offerings">
            <div class="card-content text-center">
               <img src="img/cpd-logo.png" id="cpd-logos">
               <p class="color-gray">Ghana specialist hospital</p>
            </div>
         </a>
      </div>

   </div>

</div>




@stop