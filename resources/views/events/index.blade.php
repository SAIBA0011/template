@extends('master')

@section('content')
    <section class="sub-banner sub-banner-course">
        <div class="awe-static bg-sub-banner-course"></div>
        <div class="container">
            <div class="sub-banner-content">
                <h2 class="text-center">Upcoming Events</h2>
            </div>
        </div>
    </section>

    <section class="blog">

        <div class="container">
            <div class="row">

                <!-- BLOG LIST -->
                <div class="col-md-8">
                    <div class="blog-list-content">
                        <!-- POST -->
                        @for($i=0;$i<2;$i++)
                        <div class="post">
                                <div class="post-media">
                                    <div class="image-thumb">
                                        <img src="images/blog/1.jpg" alt="">
                                    </div>
                                </div>

                                <div class="post-body">
                                    <div class="post-title">
                                        <h3 class="md"><a href="#">CIPC Update</a></h3>
                                    </div>
                                    <div class="post-meta">
                                        <a href="#">Webinaar</a> &dash; October 7, 2014 &dash; <i class="fa fa-plus"></i> 2 Hours CPD

                                    </div>
                                    <div class="post-content">
                                        <p>In sed pellentesque leo. Nunc non ipsum ex. Sed mattis sem sit amet orci dapibus, eget feugiat urna porttitor. Etiam tincidunt at ex quis</p>
                                    </div>
                                    <div class="post-link">
                                        <a href="blog-single.html">
                                            <i class="fa fa-ticket"></i>
                                            View Event
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endfor

                        <ul class="pager">
                            <li class="pager-current">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">next ›</a></li>
                            <li><a href="#">last »</a></li>
                        </ul>
                    </div>
                </div>
                <!-- END / BLOG LIST -->

                <!-- SIDEBAR -->
                <div class="col-md-3 col-md-offset-1">
                    <aside class="blog-sidebar">

                        <!-- WIDGET SEARCH -->
                        <div class="widget widget_search">
                            <h4 class="sm">Search for Events</h4>
                            <form>
                                <div class="form-item">
                                    <input type="text">
                                </div>
                                <div class="form-actions">
                                    <input type="submit">
                                </div>
                            </form>
                        </div>
                        <!-- END / WIDGET SEARCH -->

                        <!-- WIDGET CATEGORIES -->
                        <div class="widget widget_categories">
                            <h4 class="sm">Categories</h4>
                            <ul>
                                <li><a href="#">All</a></li>
                                <li><a href="#">Webinar</a></li>
                                <li><a href="#">Seminar</a></li>
                                <li><a href="#">E-Learning</a>
                                </li>
                                <li><a href="#">Uncategorized</a></li>
                            </ul>
                        </div>
                        <!-- END / WIDGET CATEGORIES -->

                        <!-- WIDGET RECENT POST -->
                        <div class="widget widget_recent_post">
                            <h4 class="sm">Recent Events</h4>
                            <ul>
                                <li>
                                    <a href="#">How to Create Course in this theme?</a>
                                </li>
                                <li>
                                    <a href="#">Top 10 Design courses of October 2013</a>
                                </li>
                                <li>
                                    <a href="#">Top 10 Design courses of October 2014</a>
                                </li>
                            </ul>
                        </div>
                        <!-- END / WIDGET RECENT POST -->

                        <!-- WIDGET TAG CLOUD -->
                        <div class="widget widget_tag_cloud">
                            <h4 class="sm">Tags</h4>
                            <div class="tagcloud">
                                <a href="#">tag 1</a>
                                <a href="#">tag 2</a>
                                <a href="#">tag 3</a>
                                <a href="#">tag 4</a>
                                <a href="#">tag 5</a>
                            </div>
                        </div>
                        <!-- END / WIDGET TAG CLOUD -->

                    </aside>
                </div>
                <!-- END / SIDEBAR -->


            </div>
        </div>

    </section>
@stop