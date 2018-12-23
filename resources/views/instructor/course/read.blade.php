@extends('instructor.layout.main')
@section('content')

<section class="content">

    <div class="container-fluid">

   
        <div class="row clearfix">

                <!-- Full Body Examples -->
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <div class="row">
                     

                     
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="card">
                        
                        <div class="header">
                            <h2>
                            {{ $course->coursetitle }}
                                <small></small>
                            </h2>
                            <!--<ul class="header-dropdown m-r--5">
                                 <li>
                                    <a href="#" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                        <i class="material-icons" style="color:#4CAF50;">mode_edit</i>
                                    </a>
                                </li>
                            </ul>-->
                        </div>
                       <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group" id="accordion_9" role="tablist" aria-multiselectable="true">
                                
                                        
                                       <div class="panel">         
                                        <div class="panel-body">
                                        {{ $course->coursedescription }}
                                        
                                        </div>
                                      </div>
                                        
                                       <br><br> 
                                        
                                    <div class="panel">         
                                        <div class="panel-body">
                                        {{ $course->objective }}
                                        
                                        </div>
                                      </div>
                                        
                        
                                        
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    </div>

                  </div>
                </div>
                <!-- #END# Full Body Examples -->
                
                      
                <!-- Full Body Colorful Panel Items With Icon -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group full-body" id="accordion_18" role="tablist" aria-multiselectable="true">
                                     
                                       @foreach ($course->sections as $section)
                                        <div class="panel">
                                            
                                            <div class="panel-heading" role="tab" id="headingFour_{{$section->id}}">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_{{$section->id}}" href="#collapseFour_{{$section->id}}" aria-expanded="false"
                                                       aria-controls="collapseFour_{{$section->id}}">
                                                        <i class="material-icons">note_add</i> {{$section->sectiontitle}}
                                                    </a>
                                                </h4>
                                            </div>
                                            
                                            
                                            <div id="collapseFour_{{$section->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_{{$section->id}}">
                                        
                                                  <div class="list-group">
                                                      
                                                      @foreach ($section->lessons as $lesson)
                                                        <a href="javascript:void(0);" class="list-group-item">
                                                            <span class="badge bg-pink"></span> {{$lesson->lessontitle}}
                                                        </a>
                                                        @endforeach
                                                      
                                                     </div>
                                                
                                            </div>
                                            
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Full Body Colorful Panel Items With Icon -->
                
            </div>
          </div>
            
</section>

@endsection


