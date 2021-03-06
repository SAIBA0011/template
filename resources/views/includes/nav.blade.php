<header id="header" class="header">
    <div class="container">

        <div class="logo"><a href="/"><img src="/images/logo.png" alt=""></a></div>

        <nav class="navigation">
            <div class="open-menu">
                <span class="item item-1"></span>
                <span class="item item-2"></span>
                <span class="item item-3"></span>
            </div>

            <ul class="menu">
                <li class="{{isActive('/')}}"><a href="/">Home</a></li>
                <li class="{{isActive('courses')}}"><a href="{{route('courses./')}}">Online Courses</a></li>
                <li class="{{isActive('events')}}"><a href="{{route('events')}}">Upcoming Events</a></li>
                <li><a href="#">Membership</a></li>
                <li><a href="#">Contact Us</a></li>

                <li class="menu-item-has-children">
                    <a href="#">My Account</a>
                    <ul class="sub-menu">
                        <li class="{{isActive('profile')}}"><a href="{{ route('profile./') }}">Dahboard</a></li>
                        <li class="{{isActive('profile.inbox')}}"><a href="{{route('profile.inbox')}}">My Inbox</a></li>
                        <li class="{{isActive('profile.cpd')}}"><a href="{{route('profile.cpd')}}">My CPD</a></li>
                        <li class="{{isActive('profile.courses')}}"><a href="{{route('profile.courses')}}">My Courses</a></li>
                        <li class="{{isActive('profile.assignments')}}"><a href="{{route('profile.assignments')}}">My Assignments</a></li>
                        <li class="{{isActive('profile.events')}}"><a href="{{route('profile.events')}}">My Events</a></li>
                        <li class="{{isActive('profile.membership')}}"><a href="{{route('profile.membership')}}">Membership Options</a></li>
                        <li class="{{isActive('profile.edit')}}"><a href="{{route('profile.edit')}}">Edit Profile</a></li>
                        <li><a href="#">Sign Out</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="list-account-info">
                <li class="list-item messages">
                    <div class="message-info item-click">
                        <i class="icon md-email"></i>
                        <span class="itemnew"></span>
                    </div>
                    <div class="toggle-message toggle-list">
                        <div class="list-profile-title">
                            <h4>Inbox message</h4>
                            <span class="count-value">3</span>
                            <a href="#" class="new-message"><i class="icon md-pencil"></i></a>
                        </div>
                        <ul class="list-message">

                            <!-- LIST ITEM -->
                            <li class="ac-new">
                                <a href="#">
                                    <div class="image">
                                        <img src="/images/team-13.jpg" alt="">
                                    </div>
                                    <div class="list-body">
                                        <div class="author">
                                            <span>Megacourse</span>
                                            <div class="div-x"></div>
                                        </div>
                                        <p>Welcome message</p>
                                        <div class="time">
                                            <span>12:53</span>
                                        </div>
                                        <div class="indicator">
                                            <i class="icon md-paperclip"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- END / LIST ITEM -->

                            <!-- LIST ITEM -->
                            <li class="ac-new">
                                <a href="#">
                                    <div class="image">
                                        <img src="/images/team-13.jpg" alt="">
                                    </div>
                                    <div class="list-body">
                                        <div class="author">
                                            <span>Name of sender</span>
                                            <div class="div-x"></div>
                                        </div>
                                        <p>Message title</p>
                                        <div class="time">
                                            <span>5 days ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- END / LIST ITEM -->

                            <!-- LIST ITEM -->
                            <li class="ac-new">
                                <a href="#">
                                    <div class="image">
                                        <img src="/images/team-13.jpg" alt="">
                                    </div>
                                    <div class="list-body">
                                        <div class="author">
                                            <span>Sasha Grey</span>
                                            <div class="div-x"></div>
                                        </div>
                                        <p>Maecenas sodales, nisl eget dign...</p>
                                        <div class="time">
                                            <span>5 days ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- END / LIST ITEM -->

                            <!-- LIST ITEM -->
                            <li>
                                <a href="#">
                                    <div class="image">
                                        <img src="/images/team-13.jpg" alt="">
                                    </div>
                                    <div class="list-body">
                                        <div class="author">
                                            <span>Amanda Gleam</span>
                                            <div class="div-x"></div>
                                        </div>
                                        <p>Message title</p>
                                        <div class="time">
                                            <span>5 days ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- END / LIST ITEM -->

                            <!-- LIST ITEM -->
                            <li>
                                <a href="#">
                                    <div class="image">
                                        <img src="/images/team-13.jpg" alt="">
                                    </div>
                                    <div class="list-body">
                                        <div class="author">
                                            <span>Amanda Gleam</span>
                                            <div class="div-x"></div>
                                        </div>
                                        <p>Message title</p>
                                        <div class="time">
                                            <span>5 days ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- END / LIST ITEM -->

                            <!-- LIST ITEM -->
                            <li>
                                <a href="#">
                                    <div class="image">
                                        <img src="/images/team-13.jpg" alt="">
                                    </div>
                                    <div class="list-body">
                                        <div class="author">
                                            <span>Amanda Gleam</span>
                                            <div class="div-x"></div>
                                        </div>
                                        <p>Message title</p>
                                        <div class="time">
                                            <span>5 days ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- END / LIST ITEM -->

                        </ul>
                        <div class="viewall">
                            <a href="#">view all 80 messages</a>
                        </div>
                    </div>
                </li>
                <!-- END / MESSAGE INFO -->

                <!-- NOTIFICATION -->
                <li class="list-item notification">
                    <div class="notification-info item-click">
                        <i class="icon md-bell"></i>
                        <span class="itemnew"></span>
                    </div>
                    <div class="toggle-notification toggle-list">
                        <div class="list-profile-title">
                            <h4>Notification</h4>
                            <span class="count-value">2</span>
                        </div>

                        <ul class="list-notification">

                            <!-- LIST ITEM -->
                            <li class="ac-new">
                                <a href="#">
                                    <div class="list-body">
                                        <div class="author">
                                            <span>Megacourse</span>
                                            <div class="div-x"></div>
                                        </div>
                                        <p>attend Salary for newbie course</p>
                                        <div class="image">
                                            <img src="/images/feature/img-1.jpg" alt="">
                                        </div>
                                        <div class="time">
                                            <span>5 minutes ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- END / LIST ITEM -->

                            <!-- LIST ITEM -->
                            <li class="ac-new">
                                <a href="#">
                                    <div class="list-body">
                                        <div class="author">
                                            <span>Megacourse</span>
                                            <div class="div-x"></div>
                                        </div>
                                        <p>attend Salary for newbie course</p>
                                        <div class="image">
                                            <img src="/images/feature/img-1.jpg" alt="">
                                        </div>
                                        <div class="time">
                                            <span>5 minutes ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- END / LIST ITEM -->

                            <!-- LIST ITEM -->
                            <li>
                                <a href="#">
                                    <div class="list-body">
                                        <div class="author">
                                            <span>Megacourse</span>
                                            <div class="div-x"></div>
                                        </div>
                                        <p>attend Salary for newbie course</p>
                                        <div class="image">
                                            <img src="/images/feature/img-1.jpg" alt="">
                                        </div>
                                        <div class="time">
                                            <span>5 minutes ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- END / LIST ITEM -->

                            <!-- LIST ITEM -->
                            <li>
                                <a href="#">
                                    <div class="list-body">
                                        <div class="author">
                                            <span>Megacourse</span>
                                            <div class="div-x"></div>
                                        </div>
                                        <p>attend Salary for newbie course</p>
                                        <div class="image">
                                            <img src="/images/feature/img-1.jpg" alt="">
                                        </div>
                                        <div class="time">
                                            <span>5 minutes ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- END / LIST ITEM -->

                            <!-- LIST ITEM -->
                            <li>
                                <a href="#">
                                    <div class="list-body">
                                        <div class="author">
                                            <span>Megacourse</span>
                                            <div class="div-x"></div>
                                        </div>
                                        <p>attend Salary for newbie course</p>
                                        <div class="image">
                                            <img src="/images/feature/img-1.jpg" alt="">
                                        </div>
                                        <div class="time">
                                            <span>5 minutes ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- END / LIST ITEM -->

                            <!-- LIST ITEM -->
                            <li>
                                <a href="#">
                                    <div class="list-body">
                                        <div class="author">
                                            <span>Megacourse</span>
                                            <div class="div-x"></div>
                                        </div>
                                        <p>attend Salary for newbie course</p>
                                        <div class="image">
                                            <img src="/images/feature/img-1.jpg" alt="">
                                        </div>
                                        <div class="time">
                                            <span>5 minutes ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- END / LIST ITEM -->



                        </ul>
                    </div>
                </li>
                <!-- END / NOTIFICATION -->

                <li class="list-item account">
                    <div class="account-info item-click">
                        <img src="/images/team-13.jpg" alt="">
                    </div>
                    <div class="toggle-account toggle-list">
                        <ul class="list-account">
                            <li><a href="setting.html"><i class="icon md-config"></i>Setting</a></li>
                            <li><a href="login.html"><i class="icon md-arrow-right"></i>Sign Out</a></li>
                        </ul>
                    </div>
                </li>


            </ul>
            <!-- END / LIST ACCOUNT INFO -->

        </nav>
        <!-- END / NAVIGATION -->

    </div>
</header>