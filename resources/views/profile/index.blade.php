@extends('master')

@section('content')
    @include('profile.includes.header')

    <section class="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="text-align: center; background-color: #012340;"><a href="#" style="color: white!important;">CPD Hours</a></h4>
                            <div class="white-box">
                                <table class="table table-responsive">
                                    <thead>
                                    <th>Source</th>
                                    <th>CPD Hours</th>
                                    <th>File</th>
                                    <th>Verifiable</th>
                                    </thead>
                                    <tbody>
                                    @for($i=0;$i<3;$i++)
                                        <tr>
                                            <td>Some Source</td>
                                            <td><i class="fa fa-plus"></i> 2 Hours</td>
                                            <td><a href="#"> View File</a></td>
                                            <td>Yes</td>
                                        </tr>
                                    @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 style="text-align: center; background-color: #012340; "><a href="#" style="color: white!important;">Latest Invoices</a></h4>
                            <div class="white-box">
                                <table class="table table-responsive">
                                    <thead>
                                    <th>Invoice Number</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>View Invoice</th>
                                    </thead>
                                    <tbody>
                                    @for($i=0;$i<3;$i++)
                                        <tr>
                                            <td>Xxxx-Xxxx-Xxx</td>
                                            <td style="color: red">Unpaid</td>
                                            <td>R 100.00</td>
                                            <td><a href="#">View Invoice</a></td>
                                        </tr>
                                    @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <section id="course-concern" class="course-concern">
                        <h4 style="text-align: center; background-color: #012340;"><a href="#" style="color: white!important;">New Courses</a></h4>
                        <div class="table-asignment">
                            <div class="tab-content">
                                <div id="studentssubmissions">
                                    <div class="table-wrap">
                                        <div class="item">
                                            <div class="submissions"><a href="#">Title of online course</a></div>
                                            <div class="total-subm">Modules</div>
                                            <div class="replied">Lessons</div>
                                            <div class="latest-reply">Date</div>
                                            <div class="link tb-icon">
                                                <a href="#"><i class="fa fa-play-circle-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="table-body">

                                            <div class="table-item new">
                                                <div class="thead">
                                                    <div class="submissions"><a href="#">Course Title Here</a></div>
                                                    <div class="total-subm">20</div>
                                                    <div class="replied">55</div>
                                                    <div class="latest-reply">14. May , 2014</div>
                                                    <div class="toggle tb-icon">
                                                        <a href="#"><i class="fa fa-angle-down"></i></a>
                                                    </div>
                                                </div>

                                                <div class="tbody">
                                                    <!-- ITEM -->
                                                    <div class="item">
                                                        <div class="submissions"><a href="#">Course Introduction</a></div>
                                                        <div class="total-subm"><i class="fa fa-clock-o"></i> 20 Min</div>
                                                        <div class="replied"><div class="label-success" style="color: white">Completed</div></div>
                                                    </div>
                                                    <!-- END / ITEM -->
                                                </div>
                                            </div>
                                            <!-- END / TABLE ITEM -->

                                            <!-- TABLE ITEM -->
                                            <div class="table-item">
                                                <div class="thead">
                                                    <div class="submissions"><a href="#">Course Title Here</a></div>
                                                    <div class="total-subm">20</div>
                                                    <div class="replied">55</div>
                                                    <div class="latest-reply">14. May , 2014</div>
                                                    <div class="toggle tb-icon">
                                                        <a href="#"><i class="fa fa-angle-down"></i></a>
                                                    </div>
                                                </div>

                                                <div class="tbody">
                                                    <!-- ITEM -->
                                                    <div class="item">
                                                        <div class="submissions"><a href="#">Course Introduction</a></div>
                                                        <div class="total-subm"><i class="fa fa-clock-o"></i> 20 Min</div>
                                                        <div class="replied"><div class="label-success" style="color: white">Completed</div></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
    </section>
@stop

@section('scripts')
<script type="text/javascript">
    $.each($('.table-wrap'), function() {
        $(this)
                .find('.table-item')
                .children('.thead:not(.active)')
                .next('.tbody').hide();
        $(this)
                .find('.table-item')
                .delegate('.thead', 'click', function(evt) {
                    evt.preventDefault();
                    if ($(this).hasClass('active')==false) {
                        $('.table-item')
                                .find('.thead')
                                .removeClass('active')
                                .siblings('.tbody')
                                .slideUp(200);
                    }
                    $(this)
                            .toggleClass('active')
                            .siblings('.tbody')
                            .slideToggle(200);
                });
    });
</script>
@stop

