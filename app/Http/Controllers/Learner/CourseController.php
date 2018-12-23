<?php

namespace App\Http\Controllers\Learner;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    
    
    /**
* Create a new controller instance.
*
* @return void
*/
public function __construct()
{
    $this->middleware('auth:learner');
}


/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getAllCourses() {
        $courses = DB::table('instructors')->leftjoin('courses', 'instructors.id', '=', 'courses.instructor_id')->orderBy('courses.created_at', 'desc')->paginate(10);
        return view('learner.class.offering', ['courses' => $courses]);
    }


    //Get single Course 
    public function getDetails($id){
        $course = Course::find($id);
        return view('learner.class.details', compact('course'));
    }


    //
    public function getClassroom($id) {
        $course = Course::find($id); 
        return view('learner.class.room', compact('course'));
    }



}
