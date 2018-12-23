<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});


Route::group(['prefix' => 'instructor'], function () {
  Route::get('/login', 'InstructorAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'InstructorAuth\LoginController@login');
  Route::post('/logout', 'InstructorAuth\LoginController@logout')->name('instructor.logout');

  Route::get('/register', 'InstructorAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'InstructorAuth\RegisterController@register');

  Route::post('/password/email', 'InstructorAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'InstructorAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'InstructorAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'InstructorAuth\ResetPasswordController@showResetForm');

    
    
  //get form and Create Course
  Route::get('/create/step-one', 'CourseController@getCourse')->name('course.step-one');
  Route::post('/create/step-one', 'CourseController@createCourse')->name('course.step-one');


  //get all course
  Route::get('/dashboard', 'CourseController@getAllCourses');

  //get all course
  Route::get('/back', 'CourseController@getDashboard')->name('instructor.dashboard');


  //get & upload cover picture
  Route::get('/cover/{id}', 'CourseController@uploadCourseCover')->name('instructor.course.cover');

  //get single course
  Route::get('/course/{id}', 'CourseController@getSingleCourse')->name('instructor.course.single-course');

  //Delete Course
  Route::get('/course/delete/{id}', 'CourseController@deleteCourse')->name('instructor.course.delete');




  //get section create
  Route::get('/section/{id}', 'CourseController@getSectionCreate')->name('instructor.section.create');
  Route::post('/section/{id}', 'SectionController@createSection')->name('instructor.section.create');
    
    
  Route::get('/section/{id}', 'SectionController@deleteSection')->name('instructor.section.delete');

  //Get single section
  Route::get('/details/{s_id}', 'SectionController@getSingleSection')->name('instructor.section.show');




  //get lesson create

  //Route::get('/lesson/{id}', 'CourseController@getLessonCreate')->name('instructor.lesson.create');

  //Route::post('/lesson/{id}', 'LessonController@createLesson')->name('instructor.lesson.create');

  Route::get('/create/lesson/{id}', 'SectionController@getLessonForm')->name('instructor.lesson.create');
  Route::post('/create/lesson/{id}', 'LessonController@createLesson')->name('instructor.lesson.create');

  //Read All Lecture
  Route::get('/read_lesson/all/{id}', 'SectionController@readAllLecture')->name('instructor.lesson.watch-lessons');


  //Delete Lesson
  Route::get('/create/delete/{id}', 'LessonController@deleteLesson')->name('instructor.lesson.delete');


  //Go to Lecture
  Route::get('/lecture/{id}', 'LessonController@goToLecture')->name('instructor.lesson.lecture');

  //Read Lecture
  Route::get('/read_lesson/{id}', 'LessonController@goReadLecture')->name('instructor.lesson.read');

  //Read Course
  Route::get('/read_course/{id}', 'CourseController@readCourse')->name('instructor.course.read');
 //Read Course
 Route::get('/course/delete/{id}', 'CourseController@deleteCourse')->name('instructor.course.delete');

  
});




Route::group(['prefix' => 'student'], function () {
  Route::get('/login', 'StudentAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'StudentAuth\LoginController@login');
  Route::post('/logout', 'StudentAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'StudentAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'StudentAuth\RegisterController@register');

  Route::post('/password/email', 'StudentAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'StudentAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'StudentAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'StudentAuth\ResetPasswordController@showResetForm');

  Route::get('/home', 'CourseController@index')->name('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'learner'], function () {
  Route::get('/login', 'LearnerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'LearnerAuth\LoginController@login');
  Route::post('/logout', 'LearnerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'LearnerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'LearnerAuth\RegisterController@register');

  Route::post('/password/email', 'LearnerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'LearnerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'LearnerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'LearnerAuth\ResetPasswordController@showResetForm');


  //Get Account Edit
  Route::get('/edit', 'LearnerController@getAccountEdit')->name('learner.account.edit');
  Route::post('/edit', 'LearnerController@updateAccountInfo')->name('learner.account.edit');

  Route::get('/dashboard', 'LearnerController@getDashboard')->name('learner.dashboard');


  //Get all course
  Route::get('/courses', 'Learner\CourseController@getAllCourses')->name('learner.class.offering');

  //Get single course
  Route::get('/details/{id}', 'Learner\CourseController@getDetails')->name('learner.class.details');

 //Get Classroom
  Route::get('/classroom/{id}', 'Learner\CourseController@getClassroom')->name('learner.class.room');


});
