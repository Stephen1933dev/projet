@extends('layouts.master', ['title' => 'dashboard-crm'])

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
            <!-- subscribe start -->
            <div class="col-md-12 col-lg-4">
                <div class="card card-border-c-blue">
                    <div class="card-body text-center">
                        <i class="feather icon-mail text-c-blue d-block f-40"></i>
                        <h4 class="m-t-20"><span class="text-c-blue">8.62k</span> Subscribers</h4>
                        <p class="m-b-20">Your main list is growing</p>
                        <button class="btn btn-primary btn-sm btn-round">Manage List</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card card-border-c-green">
                    <div class="card-body text-center">
                        <i class="feather icon-twitter text-c-green d-block f-40"></i>
                        <h4 class="m-t-20"><span class="text-c-green">+40</span> Followers</h4>
                        <p class="m-b-20">Your main list is growing</p>
                        <button class="btn btn-success btn-sm btn-round">Check them out</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card card-border-c-red">
                    <div class="card-body text-center">
                        <i class="feather icon-briefcase text-c-red d-block f-40"></i>
                        <h4 class="m-t-20">Business Plan</h4>
                        <p class="m-b-20">This is your current active plan</p>
                        <button class="btn btn-danger btn-sm btn-round">Upgrade to VIP</button>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->
            <!-- income start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">Total Leads</h5>
                        <p class="text-c-green f-w-500"><i class="fa fa-caret-up m-r-15"></i> 18% High than last month</p>
                        <div class="row">
                            <div class="col-4 b-r-default">
                                <p class="text-muted m-b-5">Overall</p>
                                <h5>76.12%</h5>
                            </div>
                            <div class="col-4 b-r-default">
                                <p class="text-muted m-b-5">Monthly</p>
                                <h5>16.40%</h5>
                            </div>
                            <div class="col-4">
                                <p class="text-muted m-b-5">Day</p>
                                <h5>4.56%</h5>
                            </div>
                        </div>
                    </div>
                    <div id="tot-lead" style="height:150px"></div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">Total Vendors</h5>
                        <p class="text-c-red f-w-500"><i class="fa fa-caret-down m-r-15"></i> 24% High than last month</p>
                        <div class="row">
                            <div class="col-4 b-r-default">
                                <p class="text-muted m-b-5">Overall</p>
                                <h5>68.52%</h5>
                            </div>
                            <div class="col-4 b-r-default">
                                <p class="text-muted m-b-5">Monthly</p>
                                <h5>28.90%</h5>
                            </div>
                            <div class="col-4">
                                <p class="text-muted m-b-5">Day</p>
                                <h5>13.50%</h5>
                            </div>
                        </div>
                    </div>
                    <div id="tot-vendor" style="height:150px"></div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">Invoice Generate</h5>
                        <p class="text-c-green f-w-500"><i class="fa fa-caret-up m-r-15"></i> 20% High than last month</p>
                        <div class="row">
                            <div class="col-4 b-r-default">
                                <p class="text-muted m-b-5">Overall</p>
                                <h5>68.52%</h5>
                            </div>
                            <div class="col-4 b-r-default">
                                <p class="text-muted m-b-5">Monthly</p>
                                <h5>28.90%</h5>
                            </div>
                            <div class="col-4">
                                <p class="text-muted m-b-5">Day</p>
                                <h5>13.50%</h5>
                            </div>
                        </div>
                    </div>
                    <div id="invoice-gen" style="height:150px"></div>
                </div>
            </div>
            <!-- income end -->
            <!-- Latest Activity, Feeds, Upcoming Deadlines start -->
            <div class="col-xl-8 col-md-12">
                <div class="card latest-activity-card">
                    <div class="card-header">
                        <h5>Latest Activity</h5>
                        <div class="card-header-right">
                            <div class="btn-group dropdown card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="latest-update-box">
                            <div class="row p-t-20 p-b-30">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">just now</p>
                                    <i class="feather icon-sunrise bg-c-blue update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6>John Deo</h6>
                                    </a>
                                    <p class="text-muted m-b-15">The trip was an amazing and a life changing experience!!</p>
                                    <img src="assets/images/widget/dashborad-1.jpg" alt="" class="img-fluid wid-100 m-r-15 m-b-10">
                                    <img src="assets/images/widget/dashborad-3.jpg" alt="" class="img-fluid wid-100 m-r-15 m-b-10">
                                </div>
                            </div>
                            <div class="row p-b-30">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">5 min ago</p>
                                    <i class="feather icon-file-text bg-c-blue update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6>Administrator</h6>
                                    </a>
                                    <p class="text-muted m-b-0">Free courses for all our customers at A1 Conference Room - 9:00 am tomorrow!</p>
                                </div>
                            </div>
                            <div class="row p-b-30">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">3 hours ago</p>
                                    <i class="feather icon-map-pin bg-c-blue update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6>Jeny William</h6>
                                    </a>
                                    <p class="text-muted m-b-15">Happy Hour! Free drinks at <span> <a href="#!" class="text-c-blue">Cafe-Bar all </a> </span>day long!</p>
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.961710410607!2d72.86204201533417!3d21.233366886136675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f1c84348989%3A0xfb5817a0f069bfe5!2sCodedthemes!5e0!3m2!1sen!2sin!4v1562323931692!5m2!1sen!2sin"
                                        style="width: 100%;height:270px" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="#!" class=" b-b-primary text-primary">View all Activity</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card feed-card">
                    <div class="card-header">
                        <h5>Feeds</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-auto p-r-0">
                                <i class="feather icon-bell bg-c-blue feed-icon"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-right f-13">Just Now</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="row m-b-30">
                            <div class="col-auto p-r-0">
                                <i class="feather icon-shopping-cart bg-c-red feed-icon"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">New order received <span class="text-muted float-right f-13">Just Now</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="row m-b-30">
                            <div class="col-auto p-r-0">
                                <i class="feather icon-file-text bg-c-green feed-icon"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-right f-13">Just Now</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="row m-b-20">
                            <div class="col-auto p-r-0">
                                <i class="feather icon-shopping-cart bg-c-red feed-icon"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">New order received <span class="text-muted float-right f-13">Just Now</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#!" class="b-b-primary text-primary">View all Feeds</a>
                        </div>
                    </div>
                </div>
                <div class="card feed-card">
                    <div class="card-header">
                        <h5>Upcoming Deadlines</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-b-25">
                            <div class="col-auto p-r-0">
                                <img src="assets/images/widget/dashborad-1.jpg" alt="" class="img-fluid wid-50">
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">New able - Redesign</h6>
                                </a>
                                <p class="text-c-red m-b-0">2 Days Remaining</p>
                            </div>
                        </div>
                        <div class="row m-b-25">
                            <div class="col-auto p-r-0">
                                <img src="assets/images/widget/dashborad-2.jpg" alt="" class="img-fluid wid-50">
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">New Admin Dashboard</h6>
                                </a>
                                <p class="text-c-red m-b-0">Proposal in 6 Days</p>
                            </div>
                        </div>
                        <div class="row m-b-25">
                            <div class="col-auto p-r-0">
                                <img src="assets/images/widget/dashborad-3.jpg" alt="" class="img-fluid wid-50">
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">Logo Design</h6>
                                </a>
                                <p class="text-c-green m-b-0">10 Days Remaining</p>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="#!" class="b-b-primary text-primary">View all Feeds</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Latest Activity, Feeds, Upcoming Deadlines end -->
            <!-- Client Map Start -->
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="icon feather icon-users f-30 text-c-red"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Happy Customers</h6>
                                <h2 class="m-b-0">5984</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ">
                    <div class="card-body ">
                        <h2 class="text-center f-w-400 ">8,421</h2>
                        <p class="text-center text-muted ">Unique Visitors</p>
                        <div id="monthlyprofit-3"></div>
                        <div class="m-t-20">
                            <div class="row ">
                                <div class="col-6 text-center ">
                                    <h6 class="f-20 f-w-400">2,849</h6>
                                    <p class="text-muted f-14 m-b-0">Today</p>
                                </div>
                                <div class="col-6 text-center ">
                                    <h6 class="f-20 f-w-400">3,587</h6>
                                    <p class="text-muted f-14 m-b-0">Yesterday</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card client-map">
                    <div class="card-body">
                        <div class="client-detail">
                            <div class="client-profile">
                                <img src="assets/images/user/avatar-2.jpg" alt="">
                            </div>
                            <div class="client-contain">
                                <h5>Gregory Johnes</h5>
                                <a href="#!" class="text-muted">gregory@demo.com</a>
                                <p class="text-muted m-0 p-t-10">Product Manager</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="client-card-box">
                                <div class="row">
                                    <div class="col-6 text-center client-border p-10">
                                        <p class="text-muted m-0">Invites</p>
                                        <span class="text-c-blue f-20 f-w-600">345</span>
                                    </div>
                                    <div class="col-6 text-center p-10">
                                        <p class="text-muted m-0">Pending</p>
                                        <span class="text-c-blue f-20 f-w-600">12</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 client-border-card p-t-10">
                                    <p>Overall Activity</p>
                                </div>
                                <div id="client-map-1" style="height:70px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card client-map">
                    <div class="card-body">
                        <div class="client-detail">
                            <div class="client-profile">
                                <img src="assets/images/user/avatar-3.jpg" alt="">
                            </div>
                            <div class="client-contain">
                                <h5>Gregory Johnes</h5>
                                <a href="#!" class="text-muted">gregory@demo.com</a>
                                <p class="text-muted m-0 p-t-10">Product Manager</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="client-card-box">
                                <div class="row">
                                    <div class="col-6 text-center client-border p-10">
                                        <p class="text-muted m-0">Invites</p>
                                        <span class="text-c-green f-20 f-w-600">812</span>
                                    </div>
                                    <div class="col-6 text-center p-10">
                                        <p class="text-muted m-0">Pending</p>
                                        <span class="text-c-green f-20 f-w-600">00</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 client-border-card p-t-10">
                                    <p>Overall Activity</p>
                                </div>
                                <div id="client-map-3" style="height:70px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Client Map end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</div>
<!-- [ Main Content ] end -->

@stop