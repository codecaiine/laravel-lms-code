@extends('learner.layout.cpd')

@section('content')


<!--main body-->
<div class="row institution-background">
   <div class="container">
      <div class="col s12">
         <div class="inherit-width text-center">
            <h5 class="eduafric-green">Authorized CPD Providers</h5>
            <h6>Make CPD course available online and reach more professionals</h6>
            <!--<div><a class="waves-effect waves-light btn cpd-contact-us-button">Contact Us</a></div>-->

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
            <input class="black-text cpd-search-input-field autocomplete" placeholder="Search CPD Provider" type="text">
            <i class="small material-icons right filter-search-icon">search</i>
         </div>

         <div class="input-field col s12 search-field-height">
            <div class="select-wrapper"><span class="caret">▼</span><input class="select-dropdown" readonly="true" data-activates="select-options-0bf7abec-997c-856c-65f3-ace6a8706ced" value="Health" type="text"><ul id="select-options-0bf7abec-997c-856c-65f3-ace6a8706ced" class="dropdown-content select-dropdown "><li class=""><span>Health</span></li><li class=""><span>Design</span></li><li class=""><span>Engineering</span></li><li class=""><span>Finance</span></li></ul><select data-select-id="0bf7abec-997c-856c-65f3-ace6a8706ced" class="initialized">               &gt;
               <option value="">Health</option>
               <option value="">Design</option>
               <option value="">Engineering</option>
               <option value="">Finance</option>
            </select></div>
            <label class="search-label-text">Sector</label>
         </div>

         <div class="input-field col s12 search-field-height">
            <div class="select-wrapper"><span class="caret">▼</span><input class="select-dropdown" readonly="true" data-activates="select-options-c1abf44c-de9f-0fcf-16ec-1419c9a3725c" value="Option 1" type="text"><ul id="select-options-c1abf44c-de9f-0fcf-16ec-1419c9a3725c" class="dropdown-content select-dropdown multiple-select-dropdown"><li class=""><span><input type="checkbox"><label></label>Option 1</span></li><li class=""><span><input type="checkbox"><label></label>Option 2</span></li><li class=""><span><input type="checkbox"><label></label>Option 3</span></li></ul><select multiple="" data-select-id="c1abf44c-de9f-0fcf-16ec-1419c9a3725c" class="initialized">               &gt;
               <option value="">Option 1</option>
               <option value="">Option 2</option>
               <option value="">Option 3</option>
            </select></div>
            <label class="search-label-text">Sub-Sector</label>
         </div>

         <div class="input-field col s12 search-field-height">
            <div class="select-wrapper"><span class="caret">▼</span><input class="select-dropdown" readonly="true" data-activates="select-options-5d8c8753-f251-add5-24db-2541f90c6095" value="Short Course" type="text"><ul id="select-options-5d8c8753-f251-add5-24db-2541f90c6095" class="dropdown-content select-dropdown "><li class=""><span>Short Course</span></li><li class=""><span>Updates</span></li><li class=""><span>Conferences</span></li><li class=""><span>Workshop</span></li><li class=""><span>Master Class</span></li><li class=""><span>e-Seminar</span></li></ul><select data-select-id="5d8c8753-f251-add5-24db-2541f90c6095" class="initialized">
               <option value="">Short Course</option>
               <option value="">Updates</option>
               <option value="">Conferences</option>
               <option value="">Workshop</option>
               <option value="">Master Class</option>
               <option value="">e-Seminar</option>
            </select></div>
            <label class="search-label-text">Program</label>
         </div>

         <div class="col s12"><a class="waves-effect waves-light btn z-depth-4 search-button">Submit</a></div>

      </div>

   </div>

   <div class="col s12 m8 l9 cpd-providers-display-section">
      <div class="card-stacked col s12 m5 l3 hoverable cpd-card-custom">
         <a href="{{ route('learner.class.offering') }}">
            <div class="card-content text-center">
               <img src="{{ URL::to('zfrontend/img/cpd-logo.png') }}" id="cpd-logos">
               <p class="color-gray">Ghana specialist hospital</p>
            </div>
         </a>
      </div>

   </div>

</div>
@endsection
