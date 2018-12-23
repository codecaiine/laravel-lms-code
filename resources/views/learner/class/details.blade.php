@extends('learner.layout.cpd')

@section('content')

<div class="enroll-course-section">

<div class="row course-overview-container">
            
         <div class="col s12 m12 l12 course-details-background">
             <div class="course-title-section">
                 <h5 class="eduafric-green">{{ $course->coursetitle}}</h5>
                 <div><a href="{{ route('learner.class.room', ['id' => $course->id]) }}" class="btn enroll-course-section-btn">Enroll Now</a></div>
             </div>
             
         </div>
         <div class="col s12 m12 l12 card-tabs course-details-tab">
            <ul class="row tabs tabs-fixed-width">
               <li class="tab"><a class="active" href="#overview">Overview</a></li>
               <li class="tab"><a href="#course_outline">Course Outline</a></li>
               <li class="tab"><a href="#course_instructor">Instructor</a></li>
            <li class="indicator" style="right: 786px; left: 0px;"></li></ul>
         </div>
         <div class="col s12 m12 l12 card-content grey lighten-4">
            <div id="overview" class="active">
               <h5>Description</h5>
               <p>
                  {{ $course->coursedescription}}
               </p>
                
                <br>
                <h5>Objective</h5>
               <p>
                  {{ $course->courseobjective}}
               </p>
                
              <br>
                
            </div>
            <div id="course_outline" style="display: none;">
                
                 
                  <ul>
                  @foreach ($course->sections as $section)
                   <h5>{{$section->sectiontitle}}</h5>
                      
                      <ul>
                        @foreach ($section->lessons as $lesson)
                         <li>{{ $lesson->lessontitle}}</li>
                        @endforeach
                      </ul>
                         
                  @endforeach
                 </ul>
                
            </div>
            <div id="course_instructor" style="display: none;">
               <h5>{{ $course->i_firstname}} {{ $course->i_lastname}}</h5>
               <span>{{ $course->i_institution}}</span>
               <span>{{ $course->i_bio}}</span>
            </div>
         </div>
 
</div>

</div>

@endsection
