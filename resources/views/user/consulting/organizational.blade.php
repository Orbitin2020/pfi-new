@extends('layouts_user.master')
@section('content')
<div class="page-content bg-white">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center"
        style="background-image: url(/assets_user/images/bnr/bnr1.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Organizational Enhancement </h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Services</a></li>
                        <li class="breadcrumb-item">Consulting</li>
                        <li class="breadcrumb-item active" aria-current="page">Organizational Enhancement</li>
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
            <div class="row about-style13">
                <div class="col-lg-6 m-b30">
                    <div class="dz-media">
                        <img class="main-img" src="{{asset('assets_user/images/about/about20.jpg')}}" alt="">
                        <div class="bg-img overlay-black-middle">
                            <img src="{{asset('assets_user/images/about/about21.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 m-b30 align-self-center">
                    <div class="about-content">
                        <div class="section-head style-1">
                            <h5 class="sub-title text-primary">Organizational Enhancement</h5>
                            <h3 class="title m-b20">We Are Here to Increase Your Knowledge With Experience</h3>
                            <p align="justify">
                                Organizational Enhancement Program is a transformation of total management culture and
                                operation system, which will produce measurable result in productivity improvement by
                                enchancing the managerial ability of corporations, management, replace entrenched and
                                counterproductive methods with productive and profitable techniques and install a system
                                that gives front line supervisors control at the point of execution.
                                <br>
                                The Program will facilitate the behavioral improvement and productivity management
                                control system program which would involve in the development, agreement, installation
                                and follow up of the said Management Control Systems.

                            </p>
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
                            <h2 class="title m-b20">Full Range of High Services Solution Worldwide</h2>
                            <p align="justify">
                                Working with your supervisory level, PFI productivity specialist will design and develop
                                lean process approach. Based upon current and/or expected operational activity levels,
                                we will conduct studies to establish the workload for each work area in which the system
                                is implemented so that staffing requirements can be coordinated with volume, quality and
                                service requirements.
                                <br>
                                PFI behavior specialist will conduct managerial development and behavior skills
                                training. Managerial behavior skills development program tailored to your particular
                                requirements. It is anticipated that this will encompass a Communications Strategies
                                Program to train supervisors and managers in quality and process behavioral techniques
                                applicable to your existing system. Conducted by our behavior specialist, this program
                                consists of both formal workshop sessions and on-the-job application techniques.
                            </p>
                        </div>
                        <div class="row m-b30">
                            <h5 class="sub-title text-primary">Benefit : </h5>
                            <div class="col-sm-6">
                                <ul class="list-circle gray">
                                    <li>Enhanced your management</li>
                                    <li>Return of investment (ROI) between 100% - 250% annually</li>

                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-circle gray">
                                    <li>Guarantee and expected improvement to the project</li>
                                    <li>Long term relationship </li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{route('user.contact')}}" class="btn btn-primary btn-border m-r10 m-b10">Contact
                            Us</a>
                    </div>
                </div>
                <div class="col-lg-7 m-b30">
                    <div class="dz-media">
                        <img src="{{asset('assets_user/images/about/about19.jpg')}}" alt="">
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