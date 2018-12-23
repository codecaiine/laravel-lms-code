<!--Beginning of sidebar-->
<div class="col s12 m4 l3">
      <ul id="slide-out" class="side-nav fixed side-nav-custom">
         <li>
             <div class="user-view profile-data-background">
              <form action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
             
            
            <input id="upload" type="file" onchange="readURL(this)"/>
               <a href="#!user"><img class="circle image-user-view" src="{{ URL::to('zfrontend/img/user.png') }}"></a>
                 
               <a class="white-text change-user-image" id="upload_link">Change Image <i class="tiny material-icons">edit</i></a>
           
            <a href="#!name"><span class="white-text name name-user-view">J{{ Auth::user()->l_lastname }}</span></a>
                  
              
            </form>
             </div>
          
          </li>
         <li class="no-padding navbar-color">
            <ul class="collapsible collapsible-accordion">
               <li>
                  <a class="collapsible-header">Account<i class="material-icons">arrow_drop_down</i></a>
                  <div class="collapsible-body">
                     <ul>
                        <li class="profile-sub-menu"><a href="{{ route('learner.account.edit') }}">Edit Profile</a></li>
                        <li class="profile-sub-menu"><a href="#!">Payments</a></li>
                        <li class="profile-sub-menu"><a href="#">Setting</a></li>
                     </ul>
                  </div>
               </li>
            </ul>
         </li>
         <li class="no-padding navbar-color">
            <ul class="collapsible collapsible-accordion">
               <li>
                  <a class="collapsible-header">Courses<i class="material-icons">arrow_drop_down</i></a>
                  <div class="collapsible-body">
                     <ul>
                        <li class="profile-sub-menu"><a href="#!">Completed</a></li>
                        <li class="profile-sub-menu"><a href="#!">In Progress</a></li>
                     </ul>
                  </div>
               </li>
            </ul>
         </li>
         <li class="navbar-color"><div class="divider"></div></li>
         <li class="navbar-color"><a class="waves-effect" href="#!">Logout</a></li>
      </ul>
      <!-- <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a> -->

   </div>
   <!--End of sidebar-->