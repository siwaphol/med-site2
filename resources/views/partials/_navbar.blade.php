<nav class="navbar navbar-inverse navbar-default navbar-fixed-top navbar-xs">

    <div class="container-fluid">
          <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{url('ball2')}}">Home</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Faculty & Staff<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('browse')}}">Staff</a></li>
                            <li><a href="#">Graduate Student</a></li>
                            <li><a href="#">Visiting Scholar & Postdocs</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Curriculum<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Undergraduate</li>
                                <li><a href="#">Medilicine</a></li>
                            <li class="dropdown-header">Graduate</li>
                                <li><a href="#">Master of Science (M.Sc.)</a></li>
                                <li><a href="#">Doctor of Philosophy (Ph.D.)</a></li>
                                <li><a href="#">International Program</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Undergraduate</li>
                                <li><a href="#">Medicine</a></li>
                                <li><a href="#">Dentistry</a></li>
                                <li><a href="#">Pharmacy</a></li>
                                <li><a href="#">Pharmacy</a></li>
                                <li><a href="#">Nurse</a></li>
                            <li class="dropdown-header">Graduate</li>
                        </ul>
                    </li>

                    <li><a href="{{url("research")}}">Research</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </ul>
          </div><!--/.nav-collapse -->
        </div>

</nav>





<!--Odler-->

<!-- Fixed navbar -->
<!--<nav class="navbar navbar-default navbar-fixed-top navbar-xs">
    <div class="container" >
        <div id="navbar" class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="{{url("browse")}}">Browse</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="{{url("research")}}">Research</a></li>
                <li><a href="#research">Education</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    <!--</div>
</nav> <!-- end fixed navbar -->