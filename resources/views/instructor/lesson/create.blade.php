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
                            <button type="button" class="btn bg-green waves-effect">CREATE</button> LESSON
                          </h2>
                     </div>
                       
                    </div>
                    
                    </div>



                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                       
                    
                       @foreach ($section->lessons as $lesson)
                        <div class="card" style="margin-bottom:5px;">
                    
                        <div class="body">

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="home_with_icon_title">
                                    <b>{{$lesson->lessontitle}}</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid.
                                    </p>
                                </div>
                            </div>
                            
                            
                             <ul class="list-group">
                            
                            <li class="list-group-item clearfix" style="border:0px;">
                                
                                <a href="{{ route('instructor.lesson.read', ['id' => $lesson->id]) }}" class="btn btn-default btn-circle waves-effect waves-circle waves-float" Title="View Lesson">
                                    <i class="material-icons">pageview</i>
                                </a>
                                
                                <a href="{{ route('instructor.lesson.lecture', ['id' => $lesson->id]) }}" class="btn btn-default btn-circle waves-effect waves-circle waves-float pull-right" Title="Edit Lesson" style="margin-left:5px">
                                    <i class="material-icons" style="color:#4CAF50;">mode_edit</i>
                                </a>
                                
                                <a href="{{ route('instructor.lesson.delete', ['id' => $lesson->id]) }}" class="btn btn-default btn-circle waves-effect waves-circle waves-float pull-right" Title="Add Lesson" style="margin-left:5px">
                                        <i class="material-icons" style="color:red;">delete</i>
                                    </a>
                                    <!--<a type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float pull-right" data-toggle="modal" data-target="#addAudio-{{ $lesson->id }}"   Title="Add Audio" style="margin-left:5px">
                                        <i class="material-icons" style="color:#4CAF50;">audiotrack</i>
                                    </a>-->

                                    <!--<a type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float pull-right" data-toggle="modal" data-target="#addVideo-{{ $lesson->id }}"   Title="Add Video" style="margin-left:5px">
                                        <i class="material-icons" style="color:#4CAF50;">video_call</i>
                                    </a>-->
                                
                                    <!--<a href="{{url('uploads/'.$lesson->lessonpdf)}}" class="btn btn-default btn-circle waves-effect waves-circle waves-float pull-right" Title="Add Video" style="margin-left:5px">
                                        <i class="material-icons" style="color:#4CAF50;">video_call</i>
                                    </a>-->
                                    
                                    <!--<a type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float pull-right" data-toggle="modal" data-target="#addPdf-{{ $lesson->id }}"   Title="Add PDF">
                                        <i class="material-icons" style="color:#4CAF50;">picture_as_pdf</i>
                                    </a>-->
                                      
                                     <a href="{{url('uploads/'.$lesson->lessonpdf)}}" class="btn btn-default btn-circle waves-effect waves-circle waves-float pull-right">
                                        <i class="material-icons" style="color:#4CAF50;">picture_as_pdf</i>
                                    </a>

                                    
                               </li>
                        
                             </ul>
                    
                            
                    
                        
                        
                        </div>
                    </div>


                    <!-- Modal  PDF

                    <div class="modal fade" id="addPdf-{{ $lesson->id }}" tabindex="-1" role="dialog" style="display: none;">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                            <form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                       
                                <div class="modal-body">

                                   <div class="dz-message">
                                            <div class="drag-icon-cph">
                                                <i class="material-icons">picture_as_pdf</i>
                                            </div>
                                            <h3>Drop your PDF File here or click to upload. {{ $lesson->id }}</h3>
                                        </div>
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
        
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link waves-effect">UPLOAD PDF</button>
                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Video 

                    <div class="modal fade" id="addVideo-{{ $lesson->id }}" tabindex="-1" role="dialog" style="display: none;">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="smallModalLabel">Add Video {{ $lesson->id }}</h4>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                                    vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                                    Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                                    nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                                    Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modale Audio

                    <div class="modal fade" id="addAudio-{{ $lesson->id }}" tabindex="-1" role="dialog" style="display: none;">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="smallModalLabel">Add Audio {{ $lesson->id }}</h4>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                                    vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                                    Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                                    nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                                    Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                        </div>
                    </div>-->
                        
                    @endforeach 
                    
                    

                    </div>
         
                      
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                       
                        <div class="card">
                            
                          <div class="body">
                            <form action="{{ route('instructor.lesson.create', ['id' => $section->id]) }}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}
                        
                                <div class="form-group">
                                    <div class="">
                                        <input type="hidden" id="course_id" value="{{ $section->course_id }}"  class="form-control" name="course_id">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="">
                                        <input type="hidden" id="section_id" value="{{ $section->id }}"  class="form-control" name="section_id">
                                    </div>
                                </div>

                                <label for="email_address">Lesson Title</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="lessontitle"  class="form-control" name="lessontitle">
                                    </div>
                                </div>
                                
                                
                                <label for="">Content</label>
                                <div class="form-group">
                                        <div class="form-line">
                                            <textarea cols="30" rows="5" class="form-control no-resize"  name="lessoncontent" id="lessoncontent"></textarea>
                                        </div>
                                 </div>
                                
                                <label for="">Add video</label>
                                <div class="form-group">
                                    <div class="">
                                        <input type="text" id="videourl" placeholder="Paste youtube URL"  class="form-control" name="videourl">
                                    </div>
                                </div>
                                
                                <label for="">Add pdf</label>
                                <div class="form-group">
                                     <input name="lessonpdf" type="file" multiple />
                                </div>
                                
                                <label for="">Add Video</label>
                                <div class="form-group">
                                     <input name="lessonvideo" type="file" multiple />
                                </div>
                                
                                <label for="">Additional info(Optional)</label>
                                <div class="form-group">
                                        <div class="form-line">
                                            <textarea cols="30" rows="3" class="form-control no-resize"  name="lessoninfo" id="lessoninfo"></textarea>
                                        </div>
                                </div>
                                
                                
                                
                                 <!--<label for="">Add Slide</label>
                                <div class="form-group">
                                     <input name="lessonslide" type="file" multiple />
                                </div>-->

                    

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
                                <button type="submit" class="btn btn-primary m-t-15  waves-effect">CREATE LESSON</button>
                            </form>
                        </div>
                    </div>
                             
                    </div>

                  </div>
                </div>

                <!-- #END# Full Body Examples -->
                <!-- Basic Examples-->
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                    <div class="card">
                       <div class="header">
                           <h2>
                           <!--<a href="{{ route('instructor.lesson.watch-lessons', ['id' => $section->id]) }}"></a>-->
                              {{ $section->sectiontitle }} 
                           </h2>
                        </div>
                       
                    </div>

                </div>
                <!-- #END# Basic Examples -->
                
            </div>
          </div>
            
</section>


@endsection


