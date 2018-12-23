<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\file;

class LessonController extends Controller
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


     public function createLesson(Request $request)
    {
    request()->validate([
        'lessontitle' => 'required',
        'lessoncontent' => 'required',
        'videourl' => 'required',

    ]);

    //pdf upload Step1
    $lessonpdf = $request->file('lessonpdf');
    $extension = $lessonpdf->getClientOriginalExtension();
    Storage::disk('public')->put($lessonpdf->getFilename().'.'.$extension,  File::get($lessonpdf));

    //Video upload Step1
    $lessonvideo = $request->file('lessonvideo');
    $extension = $lessonvideo->getClientOriginalExtension();
    Storage::disk('public')->put($lessonvideo->getFilename().'.'.$extension,  File::get($lessonvideo));

    $lesson = new Lesson();

    $lesson->lessontitle = $request->lessontitle;
    $lesson->lessoninfo = $request->lessoninfo;
    $lesson->lessoncontent = $request->lessoncontent;
    $lesson->videourl = $request->videourl;
    $lesson->section_id = $request->section_id;
    $lesson->course_id = $request->course_id;

    //pdf upload Step2
    $lesson->mimepdf = $lessonpdf->getClientMimeType();
    $lesson->original_pdfname = $lessonpdf->getClientOriginalName();
    $lesson->lessonpdf = $lessonpdf->getFilename().'.'.$extension;

   //VIDEO upload Step2
   $lesson->mimevideo = $lessonvideo->getClientMimeType();
   $lesson->original_videoname = $lessonvideo->getClientOriginalName();
   $lesson->lessonvideo = $lessonvideo->getFilename().'.'.$extension;

    $lesson->save();

    

    return back()->with('success', 'Lesson has been successfully created!');
    }



    
    
     public function createLessonTwo(Request $request)
    {
        $section = Lesson::create(array(
            'lessontitle' => Input::get('lessontitle'),
            'lessondescription' => Input::get('lessondescription'),
            'lessoncontent' => Input::get('lessoncontent'),
            'section_id' => Input::get('section_id'),
        ));

    return redirect('instructor/dashboard')->with('success', 'Lesson has been successfully created!');
    }


    //Go to Lecture
    public function goToLecture($id){
        $lesson = Lesson::find($id);
        return view('instructor.lesson.lecture', compact('lesson'));
    }


     //Read Lecture
     public function goReadLecture($id){
        $lesson = Lesson::find($id);
        return view('instructor.lesson.read', compact('lesson'));
    }


    //Delete Lesson
    public function deleteLesson($id) {
        $lesson = Lesson::find($id);
        $lesson->delete();
        return back()->with('success', 'The lesson has been successfully deleted!');
    }
    
}
