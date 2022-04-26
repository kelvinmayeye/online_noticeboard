<nav id="sidebar">
            <div class="sidebar-header">
                <div class="logo-image">
                <img src="{{url('img/noti_png.png')}}" alt=""/>
                </div>
                <h3>Online Notice Board</h3>
            </div>

            <ul class="list-unstyled components">
                @if(Auth::user()->role=="admin")
                <li <?php if($page=="home"){echo 'class="active"';}?>>
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
                @endif

                
                <li <?php if($page=="kdkd"){echo 'class="active"';}?>>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Post</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        @if(Auth::user()->role=="leader")
                        <li>
                            <a href="{{url('add_posts')}}">Add New Post</a>
                        </li>
                        @endif
                        <li>
                            <a href="{{url('allpost/show')}}">All Posts</a>
                        </li>
                        <!-- <li>
                            <a href="{{url('denied_leaders')}}">Denied request</a> -->
                        </li>
                    </ul>
                </li>
                
                
                @if(Auth::user()->role=='leader')
                <li <?php if($page=="student"){echo 'class="active"';}?>>
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
                @endif
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