@extends('instructor.layout.main')
@section('content')

<section class="content">

<div class="container-fluid">

<div class="row clearfix">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="card">
                       
                        <div class="body">
                            <form action="{{ route('instructor.section.create', ['id' => $course->id]) }}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}
                        
                                <div class="form-group">
                                    <div class="">
                                        <input type="hidden" id="courseid" value="{{ $course->id }}"  class="form-control" name="course_id">
                                    </div>
                                </div>

                                <label for="email_address">Section Title</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="sectiontitle"  class="form-control" name="sectiontitle">
                                    </div>
                                </div>
                                
                                <label for="">Description</label>
                                <div class="form-group">
                                        <div class="form-line">
                                            <textarea cols="30" rows="5" class="form-control no-resize"  name="sectiondescription" id="sectiondescription"></textarea>
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
  </section>
  @endsection




