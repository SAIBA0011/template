@extends('master')

@section('content')
    @include('profile.includes.header')

    <section class="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="avatar-acount">
                        <div class="changes-avatar">
                            <div class="img-acount">
                                <img src="/images/team-13.jpg" alt="">
                            </div>
                            <div class="choses-file up-file">
                                <input type="file">
                                <input type="hidden">
                                <a href="" class="mc-btn btn-style-6">Changes image</a>
                            </div>
                        </div>
                        <div class="info-acount">
                            <h3 class="md black">Anna Molly</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                            <div class="security">
                                <div class="tittle-security">
                                    <h5>Email</h5>
                                    <input type="text">
                                    <h5>Password</h5>
                                    <input type="password" placeholder="Current password">
                                    <input type="password" placeholder="New password">
                                    <input type="password" placeholder="Confirm password">
                                </div>
                            </div>
                        </div>
                        <div class="input-save">
                            <input type="submit" value="Save changes" class="mc-btn btn-style-1">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="social-connect">
                        <h5>Social connect</h5>
                        <ul>
                            <li>
                                <a href="#" class="twitter">
                                    <i class="icon md-twitter"></i>
                                    <p>https://www.facebook.com/</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="facebook">
                                    <i class="icon md-facebook-1"></i>
                                    <p>https://www.facebook.com/</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="gg-plus">
                                    <i class="icon md-google-plus"></i>
                                    <p>https://www.facebook.com/</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="printerest">
                                    <i class="icon md-pinterest-1"></i>
                                    <p>https://www.facebook.com/</p>
                                </a>
                            </li>
                        </ul>
                        <div class="add-link">
                            <i class="icon md-plus"></i>
                            <input type="text" placeholder="paste link here">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop