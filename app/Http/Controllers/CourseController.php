<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\file;

class CourseController extends Controller
{
    
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('auth:instructor');
     }
 
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getAllCourses() {
        $courses = DB::table('instructors')->leftjoin('courses', 'instructors.id', '=', 'courses.instructor_id')->where('instructors.id', auth()->user()->id)->orderBy('courses.created_at', 'desc')->paginate(10);
        return view('instructor.home', ['courses' => $courses]);
    }


    public function getCourse() {
        return view('instructor.course.step-one');
    }


    public function createCourse(Request $request)
    {
    request()->validate([
        'coursetitle' => 'required',
        'coursedescription' => 'required',
        'courseobjective' => 'required',
        'courselevel' => 'required',
        'category' => 'required',

    ]);
    $cover = $request->file('coursecover');
    $extension = $cover->getClientOriginalExtension();
    Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

    $course = new Course();

    $course->coursetitle = $request->coursetitle;
    $course->coursedescription = $request->coursedescription;
    $course->courseobjective = $request->courseobjective;
    $course->courselevel = $request->courselevel;
    $course->category = $request->category;
    $course->instructor_id = auth()->user()->id;

    $course->mime = $cover->getClientMimeType();
    $course->original_imagename = $cover->getClientOriginalName();
    $course->courseimg = $cover->getFilename().'.'.$extension;
    $course->save();

    return redirect('instructor/dashboard')->with('success', 'Course has been successfully created!');
    }


    // Upload Cover
    public function uploadCourseCover($id){
        $course = Course::find($id);
        return view('instructor.course.cover', ['course' => $course]);
    }


    //Get single Course 
    public function getSingleCourse($id){
        $course = Course::find($id);
        return view('instructor.course.single-course', compact('course'));
    }


    //Read Course 
    public function readCourse($id){
        $course = Course::find($id);
        return view('instructor.course.read', compact('course'));
    }


    //Create Course Section
    public function getSectionCreate($id) {
        $course = Course::find($id);
        return view('instructor.section.create', ['course' => $course]);
    }



    //Create Course Lesson 
    public function getLessonCreate($s_id) {
        $course = Course::find($S_id);
        return view('instructor.lesson.create', ['course' => $course]);
    }

    //Update Course


    //Delete Course
    public function deleteCourse($id) {
        $course = Course::find($id);
        $course->delete();
        return redirect('instructor/dashboard')->with('success', 'Course has been successfully deleted!');
    }


    //Get section for single course





    

}
