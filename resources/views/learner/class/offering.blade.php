@extends('learner.layout.cpd')

@section('content')

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

<!-- -->

 <div class="row display-cpd-row">

<div class="col s12 m4 l3">

   <div class="row cpd-select-card">

      <h6 class="text-center">Filter Search</h6>

      <div class="input-field col s12 search-field-height">
         <input class="black-text cpd-search-input-field autocomplete" placeholder="Search Courses" type="text">
         <i class="small material-icons right filter-search-icon">search</i>
      </div>

      <div class="input-field col s12 search-field-height">
         <div class="select-wrapper"><span class="caret">▼</span><input class="select-dropdown" readonly="true" data-activates="select-options-6e400f0f-983d-9e7f-dd63-f92e063386e2" value="Health" type="text"><ul id="select-options-6e400f0f-983d-9e7f-dd63-f92e063386e2" class="dropdown-content select-dropdown "><li class=""><span>Health</span></li><li class=""><span>Design</span></li><li class=""><span>Engineering</span></li><li class=""><span>Finance</span></li></ul><select data-select-id="6e400f0f-983d-9e7f-dd63-f92e063386e2" class="initialized">
            <option value="">Health</option>
            <option value="">Design</option>
            <option value="">Engineering</option>
            <option value="">Finance</option>
         </select></div>
         <label class="search-label-text">Sector</label>
      </div>

      <div class="input-field col s12 search-field-height">
         <div class="select-wrapper"><span class="caret">▼</span><input class="select-dropdown" readonly="true" data-activates="select-options-8ae92ada-3eec-6dbe-4c54-b5ce7beb739c" value="Option 1" type="text"><ul id="select-options-8ae92ada-3eec-6dbe-4c54-b5ce7beb739c" class="dropdown-content select-dropdown multiple-select-dropdown"><li class=""><span><input type="checkbox"><label></label>Option 1</span></li><li class=""><span><input type="checkbox"><label></label>Option 2</span></li><li class=""><span><input type="checkbox"><label></label>Option 3</span></li></ul><select multiple="" data-select-id="8ae92ada-3eec-6dbe-4c54-b5ce7beb739c" class="initialized">               
            <option value="">Option 1</option>
            <option value="">Option 2</option>
            <option value="">Option 3</option>
         </select></div>
         <label class="search-label-text">Sub-Sector</label>
      </div>

      <div class="input-field col s12 search-field-height">
         <div class="select-wrapper"><span class="caret">▼</span><input class="select-dropdown" readonly="true" data-activates="select-options-c2e6499f-307b-773a-8f93-eabf88675293" value="Short Course" type="text"><ul id="select-options-c2e6499f-307b-773a-8f93-eabf88675293" class="dropdown-content select-dropdown "><li class=""><span>Short Course</span></li><li class=""><span>Updates</span></li><li class=""><span>Conferences</span></li><li class=""><span>Workshop</span></li><li class=""><span>Master Class</span></li><li class=""><span>e-Seminar</span></li></ul><select data-select-id="c2e6499f-307b-773a-8f93-eabf88675293" class="initialized">               
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

<div class="col s12 m8 l9 cpd-offerings-display-section">

   @foreach($courses as $course)
    
    <a href="{{ route('learner.class.details', ['id' => $course->id]) }}">
    <div class="col s12 m5 l3 cpd-course-card-row">
      <div class="card cpd-course-card">
         <span class="new badge red floating-badge">Free</span>
         <div class="card-image cpd-course-image-card">
            <img src="{{url('uploads/'.$course->courseimg)}}" class="cpd-course-image">
         </div>
          <div class="card-content">
            <h6>{{ $course->coursetitle}}</h6>
         </div>
         
      </div>
   </div>
   </a>
    
   @endforeach 
    
</div>

</div>

@endsection
