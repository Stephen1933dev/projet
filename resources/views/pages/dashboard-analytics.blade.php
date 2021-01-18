@extends('layouts.master', ['title' => 'dashboard-analytics'])

@section('content')
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard sale</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard sale</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- widget-statstic start -->
            <div class="col-md-12 col-xl-4">
                <div class="card widget-statstic-card card-border-c-yellow">
                    <div class="card-body">
                        <div class="card-header-left mb-3">
                            <h5 class="mb-0">Statistics</h5>
                            <p class="p-t-10 m-b-0 text-c-yellow">Compared to last week</p>
                        </div>
                        <i class="feather icon-sliders st-icon bg-c-yellow"></i>
                        <div class="text-left">
                            <h3 class="d-inline-block">5,456</h3>
                            <i class="feather icon-arrow-up f-30 text-c-green"></i>
                            <span class="float-right bg-c-yellow">23%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card widget-statstic-card card-border-c-red">
                    <div class="card-body">
                        <div class="card-header-left mb-3">
                            <h5 class="mb-0">Unique Visitor</h5>
                            <p class="p-t-10 m-b-0 text-c-red">55% From last 28 hours</p>
                        </div>
                        <i class="feather icon-users st-icon bg-c-red txt-lite-color"></i>
                        <div class="text-left">
                            <h3 class="d-inline-block">3,874</h3>
                            <i class="feather icon-arrow-down text-c-red f-30 "></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card widget-statstic-card card-border-c-blue">
                    <div class="card-body">
                        <div class="card-header-left mb-3">
                            <h5 class="mb-0">New Orders</h5>
                            <p class="p-t-10 m-b-0 text-c-blue">54% From last month</p>
                        </div>
                        <i class="feather icon-shopping-cart st-icon bg-c-blue"></i>
                        <div class="text-left">
                            <h3 class="d-inline-block">5,456</h3>
                            <i class="feather icon-arrow-up text-c-green f-30 "></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- widget-statstic end -->

            <!-- Realtime Data of Visits end -->
            <div class="col-xl-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Realtime Data of Visits</h5>
                    </div>
                    <div class="card-body">
                        <div class="row my-2">
                            <div class="col-auto">
                                <h4 class="m-0">563,756<i class="feather icon-arrow-up text-c-green"></i></h4>
                                <span>Visits per Day</span>
                            </div>
                            <div class="col-auto">
                                <h4 class="m-0">78,569<i class="feather icon-arrow-down text-c-red"></i></h4>
                                <span>Total Visitors</span>
                            </div>
                            <div class="col">
                                <h4 class="m-0">40.05%<i class="feather icon-arrow-up text-c-green"></i></h4>
                                <span>Bounce Rate</span>
                            </div>
                        </div>
                        <div id="realtime-visit-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>20500</h3>
                        <p class="text-muted">Site Analysis</p>
                        <div id="seo-anlytics51"></div>
                    </div>
                </div>
                <div class="card bg-c-blue text-white widget-visitor-card borderless">
                    <div class="card-body text-center">
                        <h2 class="text-white">5,678</h2>
                        <h6 class="text-white">Daily visitor</h6>
                        <i class="feather icon-file-text"></i>
                    </div>
                </div>
                <div class="card bg-c-yellow text-white widget-visitor-card borderless">
                    <div class="card-body text-center">
                        <h2 class="text-white">5,678</h2>
                        <h6 class="text-white">Last month visitor</h6>
                        <i class="feather icon-award"></i>
                    </div>
                </div>
            </div>
            <!-- Realtime Data of Visits end -->
            <!-- Traffic-section start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Marketing campaign</h5>
                    </div>
                    <div class="card-body">
                        <div id="traffic-chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3>$16,756</h3>
                                <h6 class="text-muted m-b-0">Visits<i class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                            </div>
                            <div class="col-6">
                                <div id="seo-chart1" class="d-flex align-items-end"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3>49.54%</h3>
                                <h6 class="text-muted m-b-0">Bounce Rate<i class="fa fa-caret-up text-c-green m-l-10"></i></h6>
                            </div>
                            <div class="col-6">
                                <div id="seo-chart2" class="d-flex align-items-end"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3>1,62,564</h3>
                                <h6 class="text-muted m-b-0">Products<i class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                            </div>
                            <div class="col-6">
                                <div id="seo-chart3" class="d-flex align-items-end"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Traffic-section end -->

        </div>
        <!-- [ Main Content ] end -->

    </div>
</div>
<!-- [ Main Content ] end -->

@stop