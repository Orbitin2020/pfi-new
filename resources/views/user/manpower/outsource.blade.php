@extends('layouts_user.master')
@section('content')
<div class="page-content bg-white">

    <!-- Banner  -->
    {{-- /assets_user/images/bnr/bnr1.jpg --}}
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center"
        style="background-image: url(../assets_user/images/background/bgAbout.png);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Outsourcing Service </h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Services</a></li>
                        <li class="breadcrumb-item">Manpower</li>
                        <li class="breadcrumb-item active" aria-current="page">Outsourcing Service</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- About -->
    <section class="content-inner">
        <div class="container">
            <div class="row about-style12">
                <div class="col-lg-6 m-b30">
                    <div class="dz-media">
                        <img src="{{asset('assets_user/service/pict1.png')}}" alt="">
                    </div>
                    {{-- <div class="dz-media">
                        <img class="main-img" src="{{asset('assets_user/service/pict1.png')}}" alt="">
                        <div class="bg-img overlay-black-middle">
                            <img src="{{asset('assets_user/images/about/about21.jpg')}}" alt="">
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-6 m-b30 align-self-center">
                    <div class="about-content">
                        <div class="section-head style-1">
                            <h5 class="sub-title text-primary">Outsourcing Service</h5>
                            <h3 class="title m-b20">We Are Here to Increase Your Knowledge With Experience</h3>
                            <p align="justify">
                                PT Proven Force Indonesia will always strive hard to maintain the balance between
                                company's requirements and the needs of it employees.
                                Taking into account PT Proven Force Indonesia's way of thinking and intention to assist
                                companies and employees in maintaining their business activities and positioning the
                                function of outsourcing to its original purposes, that of improving company
                                productivity. PT Proven Force Indonesia as an intermediary fully comprehends the
                                ramifications of a non-professionally conducted mediation.
                                The inherent professionalism of the people at PT Proven Force Indonesia has attracted
                                companies to entrust their outsourcing activities to PT Proven Force Indonesia.
                                Companies that outsource their activities.
                            </p>
                        </div>
                        <div class="row m-b30">
                            <div class="col-sm-4">
                                <h5>Transparent</h5>
                                <p>Our process is very transparent in building your dream team. All steps involve you
                                    from start to finish.
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <h5>You Control Everything</h5>
                                <p>Cooperate with us in all things to build your management team. We are
                                    the right
                                    partner for your business.
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <h5>Customised To Your Needs</h5>
                                <p>We provide solutions for small companies as well as large companies looking to expand
                                    quickly.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="content-inner">
        <div class="container">
            <div class="row about-style12">
                <div class="col-lg-5 m-b30 align-self-center">
                    <div class="about-content">
                        <div class="section-head style-1">
                            <h5 class="sub-title text-primary">What We do </h5>
                            <h4 class="title m-b20">Benefits To Have Us As Your Outsourcing Partner:
                            </h4>
                            <div class="row m-b30">
                                <div class="col-sm-6">
                                    <ul class="list-circle gray">
                                        <li>Increase company focus</li>
                                        <li>Internal Resources can be utilized for other activities
                                        </li>
                                        <li>Obtain resources not readily available internally</li>

                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-circle gray">
                                        <li>Obtain resources not readily available internally</li>
                                        <li>Better Industrial Relations handling
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h4 class="sub-title text-primary">Types of Jobs That Can Be Outsourced:</h4>
                        <div class="row m-b30">
                            <div class="col-sm-6">
                                <ul class="list-circle gray">
                                    <li>Top Management Executives (Interim Program)</li>
                                    <li>Middle Management Executives</li>
                                    <li>Admin Staffs, Receptionists, Secretaries</li>

                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-circle gray">
                                    <li>Core Business Workers</li>
                                    <li>Non-Core Business Workers </li>
                                    <li>Others (Based OnYour Needs) </li>
                                </ul>
                            </div>
                        </div>

                        <a href="{{route('user.contact')}}" class="btn btn-primary btn-border m-r10 m-b10">Contact
                            Us</a>
                    </div>
                </div>
                <div class="col-lg-7 m-b30">
                    <div class="dz-media">
                        <img src="{{asset('assets_user/service/pict1.png')}}" alt="">
                        {{-- <ul class="list-arrow-right-circle white">
                            <li>
                                <h5 class="sub-title text-primary">Benefits </h5>
                            </li>
                            <li>Enhanced your management</li>
                            <li>Return of investment (ROI) between 100% - 250% annually</li>
                            <li>Guarantee and expected improvement to the project</li>
                            <li>Long term relationship </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter -->
    <section class="content-inner bg-img-fix overlay-primary-dark"
        style="background-image: url(/assets_user/images/background/bg1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-style-3 m-b30">
                        <div class="icon-bx icon-md text-white">
                            <i class="flaticon-engineer-2"></i>
                        </div>
                        <div class="counter-info">
                            <div class="counter-num">
                                <h2 class="counter text-white">2374</h2>
                            </div>
                            <h5 class="counter-text text-white">Expert Exployee</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-style-3 m-b30">
                        <div class="icon-bx icon-md text-white">
                            <i class="flaticon-list"></i>
                        </div>
                        <div class="counter-info">
                            <div class="counter-num">
                                <h2 class="counter text-white">4563</h2>
                            </div>
                            <h5 class="counter-text text-white">Project Complited</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-style-3 m-b30">
                        <div class="icon-bx icon-md text-white">
                            <i class="flaticon-trophy"></i>
                        </div>
                        <div class="counter-info">
                            <div class="counter-num">
                                <h2 class="counter text-white">1475</h2>
                            </div>
                            <h5 class="counter-text text-white">Award Winning</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-style-3 m-b30">
                        <div class="icon-bx icon-md text-white">
                            <i class="flaticon-users"></i>
                        </div>
                        <div class="counter-info">
                            <div class="counter-num">
                                <h2 class="counter text-white">1024</h2>
                            </div>
                            <h5 class="counter-text text-white">Happy Client</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="content-inner-4 overlay-black-middle"
        style="background-image:url('/assets_user/images/background/bg8.jpg');background-size: cover;background-position: center;">
        <div class="container">
            <div class="section-head text-center">
                <h6 class="sub-title text-white">Explore Recent Work</h6>
                <h2 class="title m-b20 m-t15 text-white">We've Done Lot's Projects Let's Check Some Here</h2>
            </div>
            <a href="https://www.youtube.com/watch?v=_FRZVScwggM" class="popup-youtube play-btn6 m-auto"><i
                    class="fa fa-play"></i></a>
        </div>
    </section> --}}
</div>
@endsection