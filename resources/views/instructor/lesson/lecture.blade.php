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

        <div class="row clearfix">

                <!-- Full Body Examples -->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                  <div class="row">
                     

                     
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="card">
                      <div class="header">
                           <h2>
                            {{ $lesson->lessontitle }}
                             <small>Created: {{ Carbon\Carbon::parse($lesson->created_at)->format("F j - Y, g:i a")  }}</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a href="#" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                                        <i class="material-icons" style="color:#4CAF50;">mode_edit</i>
                                    </a>
                                </li>
    
                            </ul>
                        </div>
                    </div>
                    
                    </div>
         
                      
                      
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                       
                             <div class="card">
                       
                        <div class="body">
                            <form action="{{ route('instructor.section.create', ['id' => $lesson->id]) }}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}
                        
                                <div class="form-group">
                                    <div class="">
                                        <input type="hidden" id="courseid" value="{{ $lesson->id }}"  class="form-control" name="course_id">
                                    </div>
                                </div>

                                <label for="email_address">Section Title</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="sectiontitle"  class="form-control" name="sectiontitle">
                                    </div>
                                </div>
                                
                                <label for="">Content</label>
                                <div class="form-group">
                                        <div class="form-line">
                                            <textarea cols="30" rows="5" class="form-control no-resize"  name="sectioncontent" id="sectioncontent"></textarea>
                                        </div>
                                </div>

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                                    </div>
                                    @endif

                                <br>
                                <button type="submit" class="btn btn-primary m-t-15  waves-effect">CREATE SECTION</button>
                            </form>
                        </div>
                    </div>
                          
                          
                    </div>



                         


                  </div>
                </div>
                <!-- #END# Full Body Examples -->
                <!-- Basic Examples-->
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                        <div class="thumbnail">
                    
                            <div class="caption">
                                <p>
                                   <a href="{{ route('instructor.lesson.read', ['id' => $lesson->id]) }}" class="btn btn-block btn-lg btn-primary waves-effect">READ</a>
                                   <button type="button" class="btn btn-block btn-lg btn-danger waves-effect">DELETE</button>
                                </p>
                            </div>

                            <!--<div class="list-group">
                                <a href="javascript:void(0);" class="list-group-item">
                                    <span class="badge bg-pink">14 New</span> Cras justo odio
                                </a>
                                <a href="javascript:void(0);" class="list-group-item">
                                    <span class="badge bg-cyan">99 Unread</span>Dapibus ac facilisis in
                                </a>
                                <a href="javascript:void(0);" class="list-group-item">
                                    <span class="badge bg-teal">99+</span>Morbi leo risus
                                </a>
                                <a href="javascript:void(0);" class="list-group-item">
                                    <span class="badge bg-orange">21</span>Porta ac consectetur ac
                                </a>
                                <a href="javascript:void(0);" class="list-group-item">
                                    <span class="badge bg-purple">18</span>Vestibulum at eros
                                </a>
                            </div>-->

                        </div>
                </div>
                <!-- #END# Basic Examples -->
                
            </div>
          </div>
            
</section>

@endsection


