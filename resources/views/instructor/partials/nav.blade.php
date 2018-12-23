<!-- Top Bar -->
<nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{ url('/instructor/dashboard') }}"> <img src="{{ URL::to('images/eduafric_logo_white.png') }}" width="150" height="50" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                 
                     
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                           <!-- #END# Call Search -->

                          @guest

                           <li><a href="{{ route('login') }}">Login</a></li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                           @else


                    <li><a href="{{ route('course.step-one') }}" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons" style="color:#4CAF50;">note_add</i></a></li>

                    <!-- User -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">account_circle</i>
                        </a>
                       <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">brightness_high</i>Setting</a></li>
                            <li role="separator" class="divider"></li>
                           
                            <li class="nav-item dropdown">

                                    <a class="dropdown-item" href="{{ route('instructor.logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                     <i class="material-icons">input</i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('instructor.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    
                </ul>
            </div>
        </div>
    </nav>
  <!-- #Top Bar -->