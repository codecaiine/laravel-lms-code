@extends('instructor.layout.main')
@section('content')

<section class="content">

    <div class="container-fluid">

        <div class="row clearfix">
               <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="card">
                    <div class="header">
                            <h2>
                            Drop or upload course cover.
                           </h2>
                        </div>
                        <div class="body">
                          <form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}

                                  <input type="hidden" id="courseid" class="form-control"  name="courseid" value="{{ $course->id }}">


                                <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">picture_in_picture</i>
                                    </div>
                                    <h3>Drop or upload course cover.</h3>
                               </div>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
            
    </div>
</section>

@endsection


