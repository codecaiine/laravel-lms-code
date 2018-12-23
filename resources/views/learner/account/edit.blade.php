@extends('learner.layout.main')

@section('content')
<div class="col s12 m8 l9">
   <!--Main content beginning-->
    
     @if(Session::has('success'))
         <div class="alert bg-green alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            {{ Session::get('success') }}  
        </div>
       @endif
     
    
    
    <div class="row form-container">
        <h5>Edit Profile</h5>
        
        <form action="{{ route('learner.account.edit') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
        
        <div class="col s12 form-color form-custom z-depth-1">
            
            <div class="edit-form-section">
                <div class="row">
                    <h6>Basic Information</h6>
                    
                    <div class="input-field col s12 m12 l5 profile-input-field">
                        <input type="text" name="l_firstname" class="validate custom-input-field change-placeholder" value="{{ Auth::user()->l_firstname }}">  
                    </div>
                    
                    <div class="input-field col s12 m12 l5 profile-input-field">
                        <input type="text" name="l_lastname" class="validate custom-input-field change-placeholder" value="{{ Auth::user()->l_lastname }}">
                    </div>
                    
                    <div class="input-field col s12 m12 l5 profile-input-field">
                        <input type="text" name="email" class="validate custom-input-field change-placeholder" value="{{ Auth::user()->email }}"> 
                    </div>
                    
                    <div class="input-field col s12 m12 l5 profile-input-field">
                        <input type="tel"  name="l_contact" class="validate custom-input-field change-placeholder" placeholder="Enter contact" value="{{ Auth::user()->l_contact }}"> 
                    </div>
                    
                    <div class="input-field col s12 m12 l5 profile-input-field select-option">
                        <select name="l_gender">
                               @if(Auth::user()->l_gender == 'Male') {
                            
                                  <option value="Male"> {{ Auth::user()->l_gender }} </option>
                                  <option value="Female"> Female </option>
                                  } 
                            @elseif(Auth::user()->l_gender == 'Female'){
                            
                                   <option value="Female"> {{ Auth::user()->l_gender }} </option>
                                   <option value="Male"> Male</option>
                                   }
                            @else{
                                    <option value="" disabled selected> Select Gender </option>
                                    <option value="Male"> Male </option>
                                    <option value="Female"> Female </option>
                                  }
                                @endif
                        </select> 
                    </div>
                    
                    <div class="input-field col s12 m12 l5 profile-input-field">
                        <input type="Date" name="l_dob" class="custom-input-field change-placeholder" placeholder="Birth Date">
                    </div>
                    
                </div>
                
                <div class="divider"></div>
                
                <h6 class="personal-information-text">Professional Information</h6>
                <div class="row">
                    
                    <div class="input-field col s12 m12 l5 profile-input-field select-option">
                        <select name="l_country" id="mySelect" class="select-option-label">
                            
                            
                            @if(Auth::user()->l_country == 'Ghana') {
                            
                                  <option value="Ghana"> {{ Auth::user()->l_country }} </option>
                                  <option value="Ivory Coast"> Ivory Coast </option>
                                  } 
                            @elseif(Auth::user()->l_country == 'Ivory Coast'){
                            
                                   <option value="Ivory Coast"> {{ Auth::user()->l_country }} </option>
                                   <option value="Ghana"> Ghana </option>
                                   }
                            @else{
                                     <option value="" disabled selected> Select Country</option>
                                     <option value="Ghana">Ghana</option>
                                     <option value="Ivory Coast">Ivory Coast</option>
                                  }
                                @endif
                                               
                        </select> 
                        <label class="select-label-text">Country</label>
                    </div>
                    
                    <div class="input-field col s12 m12 l5 profile-input-field select-option">
                        <input type="text" name="l_city" class="validate custom-input-field change-placeholder select-option-label" value="{{ Auth::user()->l_city }}" placeholder="e.g. Accra">
                        <label><span class="input-label">Location</span></label>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="input-field col s12 m12 l5 profile-input-field select-option">    
                        <select name="l_sector" class="select-option-label" id="mySector">
                             <option value="" disabled selected> Select Sector </option>
                             <option value="Health">Health</option>
                             <option value="Finance">Finance</option>
                             <option value="Engineering">Engineering</option>
                             <option value="Finance">Finance</option>
                             <option value="Others">Others</option>
                      </select>
                        <label class="select-label-text"> Sector </label>
                    </div>
                    
                    <div class="input-field col s12 m12 l5 profile-input-field select-option" id="sub-health">
                        <select name="l_profession" class="select-option-label" id="health">
                             
                          @if(Auth::user()->l_profession == 'Doctor') {
                            
                                  <option value="Doctor"> {{ Auth::user()->l_profession }} </option>
                                  <option value="Dentist"> Dentist </option>
                                  } 
                            @elseif(Auth::user()->l_profession == 'Dentist'){
                            
                                   <option value="Dentist"> {{ Auth::user()->l_profession }} </option>
                                   <option value="Doctor"> Doctor </option>
                                   }
                            @else{
                                     <option value="" disabled selected> Select Profession </option>
                                     <option value="Doctor"> Doctor </option>
                                     <option value="Dentist"> Dentist </option> 
                                  }
                                @endif
                        </select> 
                        <label class="select-label-text"> Profession </label>
                    </div>
                    
                    
                    <div class="input-field col s12 m12 l5 profile-input-field" id="sub-other">
                        <input type="text" name="other_profession" class="validate custom-input-field change-placeholder select-option-label" value="{{ Auth::user()->other_profession }}" placeholder="Specify other profession">
                        <label><span class="input-label"> Other profession (If not listed)</span></label>
                    </div>
                    
                    <div class="input-field col s12 m12 l5 profile-input-field">
                        <input type="tel" name="professional_association" class="validate custom-input-field change-placeholder select-option-label" value="{{ Auth::user()->professional_association }}" placeholder="e.g. Ghana Medical Association">
                        <label><span class="input-label"> Professional Body/Association</span></label>
                    </div>

                </div>
                <div class="save-changes-button-section">
                    <button type="submit" class="waves-effect waves-light btn save-changes-button button-radius">UPDATE</button>
                </div>

            </div>

        </div>
        </form>
        
    </div>
    


   <!--End of main content-->
  </div>
      
@endsection
