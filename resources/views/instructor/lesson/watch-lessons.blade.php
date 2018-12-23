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
                            {{ $section->sectiontitle }}
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
                                        <!--<video width="600" height="440" controls>
                                            <source src="{{ URL::to('uploads/nikon.mp4') }}" type="video/mp4">
                                            Your browser does not support HTML5 video.
                                         </video>-->


                                         <iframe width="560" height="315" src="https://www.youtube.com/embed/OWc9abx4rDU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        
                                        </div>
                                      </div>
                                        
                                        <div class="panel">
                                            <div class="panel-heading" role="tab" id="headingTwo_9">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_9" href="#collapseTwo_9" aria-expanded="false" aria-controls="collapseTwo_9">
                                                        Course transcrit
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo_9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_9">
                                                <div class="panel-body">
                                                 wwwwwwwwwwwwww
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
                </div>
                <!-- #END# Full Body Examples -->
                
                      
                <!-- Full Body Colorful Panel Items With Icon -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                   
                </div>
                <!-- #END# Full Body Colorful Panel Items With Icon -->
                
            </div>
          </div>
            
</section>

@endsection


