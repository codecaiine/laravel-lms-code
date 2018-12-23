@extends('instructor.layout.main')

@section('content')
<section class="content">
        
  
 <div class="container-fluid">
       
      @if(Session::has('success'))
         <div class="alert bg-green alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            {{ Session::get('success') }}  
        </div>
       @endif
     
    @if($courses) 
   <div class="row clearfix">
                
               @foreach($courses as $course)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header" style="border-bottom:0px;">
                            <h2>
                                <a href="{{ route('instructor.course.single-course', ['id' => $course->id]) }}">{{ $course->coursetitle }}</a>
                               <small>Created: {{ Carbon\Carbon::parse($course->created_at)->toDayDateTimeString()  }}</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{ route('instructor.course.delete', ['id' => $course->id]) }}" class=" waves-effect waves-block">Delete</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body" style="padding-top:0px;">
                            Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                        </div>
                        
                            
                            <li class="list-group-item clearfix" style="border:0px;">
                                
                                <a href="{{ route('instructor.course.read', ['id' => $course->id]) }}" class="btn btn-default btn-circle waves-effect waves-circle waves-float" title="View Lesson">
                                    <i class="material-icons">pageview</i>
                                </a>
                                
                                <!--<a href="{{ route('instructor.course.single-course', ['id' => $course->id]) }}" class="btn btn-default btn-circle waves-effect waves-circle waves-float pull-right" title="Edit Lesson">
                                    <i class="material-icons" style="color:#4CAF50;">mode_edit</i>
                                </a>
                                
                                    <a type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float pull-right" data-toggle="modal" data-target="#addAudio-2" title="Add Audio" style="margin-left:5px">
                                        <i class="material-icons" style="color:#4CAF50;">audiotrack</i>
                                    </a>

                                    <a type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float pull-right" data-toggle="modal" data-target="#addVideo-2" title="Add Video" style="margin-left:5px">
                                        <i class="material-icons" style="color:#4CAF50;">video_call</i>
                                    </a>
                                    
                                    <a type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float pull-right" data-toggle="modal" data-target="#addPdf-2" title="Add PDF">
                                        <i class="material-icons" style="color:#4CAF50;">picture_as_pdf</i>
                                    </a>-->

                               </li>
                        
                             
                    </div>
                </div>
        
              @endforeach
            </div>
            @else
                       <p class="text-center text-primary">No Course created Yet!</p>
                     @endif 
    
    </div>
</section>
@endsection