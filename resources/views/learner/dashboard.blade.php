@extends('learner.layout.main')

@section('content')

 <!--Main content beginning-->
   <div class="col s12 m8 l9">
      <div class="row">
         <div class="col s12 m7 course-in-progress">
            <h6 class="header">Courses In Progress</h6>
            <div class="row card horizontal z-depth-1 course-card">
               <div class="col s4 card-image">
                  <img class="course-image" src="{{ URL::to('zfrontend/img/design_thinking.png') }}" height="10" width="10">
               </div>
               <div class="col s8 card-stacked">
                  <div class="card-content continue-course-card-text">
                     <h6>Master Class: Application of design thinking for sustainable growth in business</h6>
                     <a class="waves-effect waves-light btn z-depth-2 button-radius continue-course-card-button">Continue</a>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!--End of main content-->

@endsection
