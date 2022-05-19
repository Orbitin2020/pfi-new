@extends('layouts_user.master')
@section('content')
<div class="page-content bg-white">

    <!-- Banner  -->
    {{-- /assets_user/images/bnr/bnr1.jpg --}}
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center"
        style="background-image: url(../assets_user/images/background/bgAbout.png);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Performance Management </h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Services</a></li>
                        <li class="breadcrumb-item">Consulting</li>
                        <li class="breadcrumb-item active" aria-current="page">Performance Management</li>
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
                            <h5 class="sub-title text-primary">Performance Management</h5>
                            <h3 class="title m-b20">We Are Here to Increase Your Knowledge With Experience</h3>
                            <p align="justify">
                                Working with your supervisory level, PFI productivity specialist will facilitate in the
                                formulation of specific and measurable key performance indicators (KPI) and objective
                                key result (OKR), which in turn will be used as a basis for providing your organization
                                with a simple and structured reporting mechanism.

                            </p>
                        </div>
                        <div class="row m-b30">
                            <h5 class="sub-title text-primary">Benefit : </h5>
                            <ul class="list-circle gray">
                                <li>Enhanced your management</li>
                                <li>Expected improvement to the project</li>
                                <li>Long term relationship</li>
                            </ul>
                        </div>
                        <a href="{{route('user.contact')}}" class="btn btn-primary btn-border m-r10 m-b10">Contact
                            Us</a>
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