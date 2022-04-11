<nav id="sidebar">
            <div class="sidebar-header">
                <div class="logo-image">
                <img src="{{url('img/noti_png.png')}}" alt=""/>
                </div>
                <h3>Online Notice Board</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Leaders</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{url('all_leaders')}}">All leaders</a>
                        </li>
                        <!-- <li>
                            <a href="{{url('pending_leaders')}}">Pending request</a>
                        </li>
                        <li>
                            <a href="{{url('denied_leaders')}}">Denied request</a> -->
                        </li>
                    </ul>
                </li>
                <li>
                <a href="{{url('add_posts')}}">Posts</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Students</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="{{url('current_students')}}">Current Students</a>
                        </li>
                        <li>
                            <a href="{{url('finished_student')}}">Finished students</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Emails</a>
                </li>
                <li>
                    <a href="#">SMS</a>
                </li>
            </ul>

            <ul class="list-unstyled about">
                <li>
                    <a href="" class="aboutbtn" data-toggle="modal" data-target="#exampleModalLong">About</a>
                </li>
            </ul>
        </nav>