<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
               <img src='/img/d8-icon-header-white.png' style="display: inline-block; padding-bottom: 4px;" > <span class="white">IntrigueCon</span>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav"></ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                
                <li><a href="/articles">Articles</a></li>
                <!-- <li><a href="/games">Games</a></li> -->
         
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Convention<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/events/{{ config('constants.active_con') }}">Info</a></li>
                            <li><a href="/locations/{{ config('constants.active_con') }}">Location</a></li>
                            <li><a href="/schedule/show/{{ config('constants.active_con') }}">Schedule</a></li>
                            <li><a href="/reserve">Register</a></li>
                        </ul>
                    </li>
            </ul> -->
        </div>
    </div>
</nav>