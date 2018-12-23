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
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="card">
                       
                        <div class="body">
                            <form action="{{ route('course.step-one') }}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}
                                <label for="email_address">Course title</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="coursetitle" value="{{{ $course->coursetitle or '' }}}"  class="form-control" name="coursetitle">
                                    </div>
                                </div>
                                
                                <label for="password">Description</label>
                                <div class="form-group">
                                        <div class="form-line">
                                            <textarea cols="30" rows="5" class="form-control no-resize" value="{{{ $course->coursedescription or '' }}}"  name="coursedescription" id="coursedescription"></textarea>
                                        </div>
                                </div>

                                <label for="password">Objective</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea  cols="30" rows="5"  class="form-control no-resize" value="{{{ $course->courseobjective or '' }}}" name="courseobjective"></textarea>
                                    </div>
                                </div>

                                <label for="password"></label>
                                <div class="row clearfix">
                                <div class="col-sm-6">

                                <label for="description">Course Category</label>
                                <select class="form-control" name="category">
                                   <option {{{ (isset($course->category) && $course->category == 'Business') ? "selected=\"selected\"" : "" }}}>Business</option>
                                   <option {{{ (isset($course->category) && $course->category == 'Tech') ? "selected=\"selected\"" : "" }}}>Tech</option>
                                   <option {{{ (isset($course->category) && $course->category == 'Entrepr.') ? "selected=\"selected\"" : "" }}}>Entrepr.</option>
                                   <option {{{ (isset($course->category) && $course->category == 'Comms') ? "selected=\"selected\"" : "" }}}>Comms</option>
                                 </select>
                                </div>
                                <div class="col-sm-6">
                                <label for="description">Course Level</label>
                                <select class="form-control" name="courselevel">
                                   <option {{{ (isset($course->courselevel) && $course->courselevel == 'Beginner') ? "selected=\"selected\"" : "" }}}>Beginner</option>
                                   <option {{{ (isset($course->courselevel) && $course->courselevel == 'Intermediate') ? "selected=\"selected\"" : "" }}}>Intermediate</option>
                                   <option {{{ (isset($course->courselevel) && $course->courselevel == 'Advanced') ? "selected=\"selected\"" : "" }}}>Advanced</option>
                                 </select>
                                </div>
                            </div>
                                  


                            <label for="email_address">Course cover</label>
                                <div class="form-group">
                                    <div class="">
                                        <input type="file" class="form-control" name="coursecover"/>
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
                                <button type="submit" class="btn btn-primary m-t-15  waves-effect">CREATE COURSE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
    </div>
  </section>
  @endsection




