<?php

namespace App\Http\Controllers;

use App\learner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class LearnerController extends Controller
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


public function getAccountEdit() {
        return view('learner.account.edit');
}


public function getDashboard() {
    return view('learner.dashboard');
}




public function updateAccountInfo(Request $request) {

     $request->validate([
            'l_firstname' => 'string',
            'l_lastname' => 'string',
            'l_profession' => 'string',
            'l_sector' => 'string',
            'l_gender' => 'string',
            'l_country' => 'string',
            'l_city' => 'string',
            'l_dob' => 'string',
            'l_contact' => 'string',
            'email' => 'string',
            'other_profession' => 'string',
            'professional_association' => 'string',
        ]);


    $learner = Auth::user();


    $learner->l_firstname = $request->l_firstname;
    $learner->l_lastname = $request->l_lastname;
    $learner->l_profession = $request->l_profession;
    $learner->l_sector = $request->l_sector;
    $learner->l_city = $request->l_city;
    $learner->l_gender = $request->l_gender;
    $learner->l_country = $request->l_country;
    $learner->l_dob = $request->l_dob;
    $learner->l_contact = $request->l_contact;
    $learner->professional_association = $request->professional_association;
    $learner->email = $request->email;
    $learner->other_profession = $request->other_profession;

    $learner->save();
    return redirect('learner/edit')->with('success', 'Post has been updated successfully!');
}






}
