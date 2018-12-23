<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ URL::to('images/user.png') }}" width="48" height="48" alt="User">
                </div>
                <div class="info-container">
                    @guest 
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    @else

                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->i_lastname }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>

                    @endguest
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 135px;"><ul class="list" style="overflow: hidden; width: auto; height: 135px;">
            
                    <li class="active">
                        <a href="{{ url('/instructor/dashboard') }}" class="toggled waves-effect waves-block">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!--<li>
                        <a href="pages/typography.html" class=" waves-effect waves-block">
                            <i class="material-icons">show_chart</i>
                            <span>Stat</span>
                        </a>
                    </li>-->
            
                  
             </div>
            <!-- #Menu -->
            <!-- Footer -->
    
        </aside>

    </section>