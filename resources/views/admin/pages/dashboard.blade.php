@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Welcome {{$admin->username}}</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-comman w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-info">
                            <h6>Students</h6>
                            <h3>50055</h3>
                        </div>
                        <div class="db-icon">
                            <img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-comman w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-info">
                            <h6>Awards</h6>
                            <h3>50+</h3>
                        </div>
                        <div class="db-icon">
                            <img src="assets/img/icons/dash-icon-02.svg" alt="Dashboard Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-comman w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-info">
                            <h6>Department</h6>
                            <h3>30+</h3>
                        </div>
                        <div class="db-icon">
                            <img src="assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-comman w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-info">
                            <h6>Revenue</h6>
                            <h3>$505</h3>
                        </div>
                        <div class="db-icon">
                            <img src="assets/img/icons/dash-icon-04.svg" alt="Dashboard Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-6">

            <div class="card card-chart">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title">Overview</h5>
                        </div>
                        <div class="col-6">
                            <ul class="chart-list-out">
                                <li><span class="circle-blue"></span>Teacher</li>
                                <li><span class="circle-green"></span>Student</li>
                                <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apexcharts-area"></div>
                </div>
            </div>

        </div>
        <div class="col-md-12 col-lg-6">

            <div class="card card-chart">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title">Number of Students</h5>
                        </div>
                        <div class="col-6">
                            <ul class="chart-list-out">
                                <li><span class="circle-blue"></span>Girls</li>
                                <li><span class="circle-green"></span>Boys</li>
                                <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="bar"></div>
                </div>
            </div>

        </div>
    </div>
    

    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card flex-fill fb sm-box">
                <div class="social-likes">
                    <p>Like us on facebook</p>
                    <h6>50,095</h6>
                </div>
                <div class="social-boxs">
                    <img src="assets/img/icons/social-icon-01.svg" alt="Social Icon">
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card flex-fill twitter sm-box">
                <div class="social-likes">
                    <p>Follow us on twitter</p>
                    <h6>48,596</h6>
                </div>
                <div class="social-boxs">
                    <img src="assets/img/icons/social-icon-02.svg" alt="Social Icon">
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card flex-fill insta sm-box">
                <div class="social-likes">
                    <p>Follow us on instagram</p>
                    <h6>52,085</h6>
                </div>
                <div class="social-boxs">
                    <img src="assets/img/icons/social-icon-03.svg" alt="Social Icon">
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card flex-fill linkedin sm-box">
                <div class="social-likes">
                    <p>Follow us on linkedin</p>
                    <h6>69,050</h6>
                </div>
                <div class="social-boxs">
                    <img src="assets/img/icons/social-icon-04.svg" alt="Social Icon">
                </div>
            </div>
        </div>
    </div>
@endsection
