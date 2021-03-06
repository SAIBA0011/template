@extends('master')

@section('content')
    <section class="sub-banner section">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="sub-banner-content">
                <h2 class="big">This is banner for promoted course</h2>
                <p>this is not only an elegant theme but also a course management system for wordpress and drupal</p>
                <a href="#" class="mc-btn btn-style-3">See course</a>
            </div>
        </div>
    </section>

    <section class="page-control">
        <div class="container">
            <div class="page-info">
                <a href="index.html"><i class="icon md-arrow-left"></i>Back to home</a>
            </div>
            <div class="page-view">
                View
                <span class="page-view-info view-grid active" title="View grid"><i class="icon md-ico-2"></i></span>
                <span class="page-view-info view-list" title="View list"><i class="icon md-ico-1"></i></span>
                <div class="mc-select">
                    <select class="select" name="" id="all-categories">
                        <option value="">All level</option>
                        <option value="">2</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <section id="categories-content" class="categories-content">
        <div class="container">
            <div class="row">

                <div class="col-md-9 col-md-push-3">
                    <div class="content grid">
                        <div class="row">
                            <!-- ITEM -->
                            @for($i=0;$i<5;$i++)
                                <div class="col-sm-6 col-md-4">
                                    <div class="mc-item mc-item-2">
                                        <div class="image-heading">
                                            <img src="images/feature/img-1.jpg" alt="">
                                        </div>
                                        <div class="meta-categories"><a href="{{route('courses.course-intro')}}">Web design</a></div>
                                        <div class="content-item">
                                            <div class="image-author">
                                                <img src="images/avatar-1.jpg" alt="">
                                            </div>
                                            <h4><a href="{{route('courses.course-intro')}}">The Complete Digital Photography Course Amazon Top Seller</a></h4>
                                            <div class="name-author">
                                                <span>By <a href="{{route('courses.course-intro')}}">Name of Mr or Mrs</a></span>
                                            </div>
                                        </div>
                                        <div class="ft-item">
                                            <div class="rating">
                                                <a href="#" class="active"></a>
                                                <a href="#" class="active"></a>
                                                <a href="#" class="active"></a>
                                                <a href="#"></a>
                                                <a href="#"></a>
                                            </div>
                                            <div class="view-info">
                                                <i class="icon md-users"></i>
                                                2568
                                            </div>
                                            <div class="comment-info">
                                                <i class="icon md-comment"></i>
                                                25
                                            </div>
                                            <div class="price">
                                                $123
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            <!-- END / ITEM -->

                        </div>
                    </div>
                </div>

                <!-- SIDEBAR CATEGORIES -->
                <div class="col-md-3 col-md-pull-9">
                    <aside class="sidebar-categories">
                        <div class="inner">

                            <!-- WIDGET TOP -->
                            <div class="widget">
                                <ul class="list-style-block">
                                    <li class="current"><a href="#">Featured</a></li>
                                    <li><a href="#">Free courses</a></li>
                                    <li><a href="#">Top paid courses</a></li>
                                </ul>
                            </div>
                            <!-- END / WIDGET TOP -->

                            <!-- WIDGET CATEGORIES -->
                            <div class="widget widget_categories">
                                <ul class="list-style-block">
                                    <li><a href="#">Category</a></li>
                                    <li><a href="#">Category</a></li>
                                    <li><a href="#">Category</a></li>
                                    <li><a href="#">Category</a></li>
                                    <li><a href="#">Category</a></li>
                                    <li><a href="#">Category</a></li>
                                    <li><a href="#">Category</a></li>
                                    <li><a href="#">Category</a></li>
                                    <li><a href="#">Category</a></li>
                                </ul>
                            </div>
                            <!-- END / WIDGET CATEGORIES -->

                            <!-- BANNER ADS -->
                            <div class="mc-banner">
                                <a href="#"><img src="images/banner-ads-1.jpg" alt=""></a>
                            </div>
                            <!-- END / BANNER ADS -->

                            <!-- BANNER ADS -->
                            <div class="mc-banner">
                                <a href="#"><img src="images/banner-ads-2.jpg" alt=""></a>
                            </div>
                            <!-- END / BANNER ADS -->
                        </div>
                    </aside>
                </div>
                <!-- END / SIDEBAR CATEGORIES -->

            </div>
        </div>
    </section>
@endsection