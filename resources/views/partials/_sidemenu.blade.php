<!-- List Manu Left-->
<!--<h4 style="font-size: 18px;">MICROBIOLOGY
</h4>

<ul class="nav panel-list">
    <li class="hoe-has-menu">
        <a href="{{url('/')}}">
            <span class="menu-text">Home</span>
            <span class="selected"></span>
        </a>
    </li>

    <li class="hoe-has-menu">
        <a href="javascript:void(0)">
            <span class="menu-text">Faculty & Staff</span>
            <span class="selected"></span>
        </a>
        <ul class="hoe-sub-menu" style="display: none;">
            <li>
                <a href="javascript:void(0)">
                    <span class="menu-text">Faculty</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li>
                <a href="{{url('browse')}}">
                    <span class="menu-text">Staff</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <span class="menu-text">Graduate Student</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <span class="menu-text">Visiting Scholar & Postdocs</span>
                    <span class="selected"></span>
                </a>
            </li> 
        </ul>
    </li>

    <li class="hoe-has-menu">
        <a href="javascript:void(0)">
            <span class="menu-text">Curriculum</span>
            <span class="selected"></span>
        </a>
        <ul class="hoe-sub-menu" style="display: none;">
            <li class="hoe-has-menu">
                <a href="javascript:void(0)">
                    <span class="menu-text">Undergraduate</span>
                    <span class="selected"></span>
                </a>
                <ul class="hoe-sub-menu" style="display: none;">
                    <li class="hoe-has-menu">
                        <a href="javascript:void(0)">
                            <span class="menu-text">Medilicine</span>
                            <span class="selected"></span>
                        </a>    
                    </li>                                         
                </ul>
            </li>
            <li class="hoe-has-menu">
                <a href="javascript:void(0)">
                    <span class="menu-text">Graduate</span>
                    <span class="selected"></span>
                </a>
                <ul class="hoe-sub-menu" style="display: none;">
                    <li class="hoe-has-menu">
                        <a href="javascript:void(0)">
                            <span class="menu-text">Master of Science (M.Sc.)</span>
                            <span class="selected"></span>
                        </a>    
                    </li>
                    <li class="hoe-has-menu">
                        <a href="javascript:void(0)">
                            <span class="menu-text">Doctor of Philosophy (Ph.D.)</span>
                            <span class="selected"></span>
                        </a>    
                    </li> 
                    <li class="hoe-has-menu">
                        <a href="javascript:void(0)">
                            <span class="menu-text">International Program</span>
                            <span class="selected"></span>
                        </a>    
                    </li>                                          
                </ul>
            </li>  
        </ul>
    </li>

    <li class="hoe-has-menu">
        <a href="javascript:void(0)">
            <span class="menu-text">Courses</span>
            <span class="selected"></span>
        </a>
        <ul class="hoe-sub-menu" style="display: none;">
            <li class="hoe-has-menu">
                <a href="javascript:void(0)">
                    <span class="menu-text">Undergraduate</span>
                    <span class="selected"></span>
                </a>
                <ul class="hoe-sub-menu" style="display: none;">
                    <li class="hoe-has-menu">
                        <a href="{{url('courses')}}">
                            <span class="menu-text">Medicine</span>
                            <span class="selected"></span>
                        </a>    
                    </li>
                    <li class="hoe-has-menu">
                        <a href="javascript:void(0)">
                            <span class="menu-text">Dentistry</span>
                            <span class="selected"></span>
                        </a>    
                    </li> 
                    <li class="hoe-has-menu">
                        <a href="javascript:void(0)">
                            <span class="menu-text">Pharmacy</span>
                            <span class="selected"></span>
                        </a>    
                    </li> 
                    <li class="hoe-has-menu">
                        <a href="javascript:void(0)">
                            <span class="menu-text">Nurse</span>
                            <span class="selected"></span>
                        </a>    
                    </li>                                          
                </ul>
            </li>
            <li class="hoe-has-menu">
                <a href="javascript:void(0)">
                    <span class="menu-text">Graduate</span>
                    <span class="selected"></span>
                </a>
            </li>  
        </ul>
    </li>


    <li class="hoe-has-menu">
        <a href="{{url('research')}}">
            <span class="menu-text">Research</span>
            <span class="selected"></span>
        </a>
    </li>

    <li class="hoe-has-menu">
        <a href="javascript:void(0)">
            <span class="menu-text">Contact Us</span>
            <span class="selected"></span>
        </a>
    </li>  
</ul>-->
<!--End List-->



<h4 style="font-size: 18px;">MICROBIOLOGY
</h4>
<div class="nav-side-menu">
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="{{url('/')}}">Home</a>
                </li>

                <li  data-toggle="collapse" data-target="#faculty_Staff" class="collapsed">
                Faculty & Staff<span class="arrow"></span>
                </li>
                <ul class="sub-menu collapse" id="faculty_Staff">
                    <li><a href="#">Faculty</a></li>
                    <li><a href="{{url('browse')}}">Staff</a></li>
                    <li><a href="#">Graduate Student</a></li>
                    <li><a href="#">Visiting Scholar & Postdocs</a></li>
                </ul>

                <li  data-toggle="collapse" data-target="#curriculum" class="collapsed">
                Curriculum<span class="arrow"></span>
                </li>
                <ul class="sub-menu collapse" id="curriculum">
                    <li  data-toggle="collapse" data-target="#curriculum_undergraduate" class="collapsed">
                    Undergraduate<span class="arrow"></span>
                    </li>
                    <ul class="sub-menu collapse" id="curriculum_undergraduate">
                        <li><a href="{{url('curriculum')}}">Medilicine</a></li>
                    </ul>
                    <li  data-toggle="collapse" data-target="#curriculum_graduate" class="collapsed">
                    Graduate<span class="arrow"></span>
                    </li>
                    <ul class="sub-menu collapse" id="curriculum_graduate">
                        <li><a href="{{url('curriculum')}}">Master of Science (M.Sc.)</a></li>
                        <li><a href="{{url('curriculum')}}">Doctor of Philosophy (Ph.D.)</a></li>
                        <li><a href="{{url('curriculum')}}">International Program</a></li>
                    </ul>
                </ul>

                <li  data-toggle="collapse" data-target="#courses" class="collapsed">
                Courses<span class="arrow"></span>
                </li>
                <ul class="sub-menu collapse" id="courses">
                    <li  data-toggle="collapse" data-target="#courses_undergraduate" class="collapsed">
                    Undergraduate<span class="arrow"></span>
                    </li>
                    <ul class="sub-menu collapse" id="courses_undergraduate">
                        <li><a href="{{url('courses')}}">Medilicine</a></li>
                        <li><a href="{{url('courses')}}">Dentistry</a></li>
                        <li><a href="{{url('courses')}}">Pharmacy</a></li>
                        <li><a href="{{url('courses')}}">Nurse</a></li>
                    </ul>

                    <li><a href="{{url('courses')}}">Graduate</a></li>
                </ul>

                <li>
                  <a href="{{url('research')}}">Research</a>
                </li>

                <li>
                  <a href="#">Contact Us</a>
                </li>
            </ul>
     </div>
</div>