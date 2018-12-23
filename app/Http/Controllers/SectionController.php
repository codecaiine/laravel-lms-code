<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SectionController extends Controller
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



     public function getSectionCreate() {
        return view('instructor.section.create');
    }


    public function createSection(Request $request){
        $section = Section::create(array(
            'sectiontitle' => Input::get('sectiontitle'),
            'sectiondescrinfo' => Input::get('sectiondescrinfo'),
            'course_id' => Input::get('course_id'),
        ));
        return back()->with('success', 'Section has been successfully added!');
    }


    //Get single Section
    public function getSingleSection($s_id){
        $section = Section::find($s_id);
        return view('instructor.section.show', compact('section'));
    }


    //Create Section
    public function getLessonForm($id){
        $section = Section::find($id);
        return view('instructor.lesson.create', compact('section'));
    }


    //get All lecture for particular Section
    public function readAllLecture($id){
        $section = Section::find($id);
        return view('instructor.lesson.watch-lessons', compact('section'));
    }


     //Delete Section
     public function deleteSection($id) {
        $section = Section::find($id);
        $section->delete();
        return back()->with('success', 'The section has been successfully deleted!');
    }




}
