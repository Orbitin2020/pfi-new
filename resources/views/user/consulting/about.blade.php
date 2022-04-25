@extends('layouts_user.master')
@section('content')
<div class="page-content bg-white">
		
    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url(assets_user/images/bnr/bnr1.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>About Consulting Service</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active" aria-current="page">About Me</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->
    
    <!-- About -->
    <section class="content-inner" style="background-image:url('assets_user/images/background/bg4.png');background-size:cover;background-position:bottom;">
        <div class="container">
            <div class="row about-style14">
                <div class="col-lg-6 m-b30">
                    <div class="dz-media">	
                        <img src="{{asset('assets_user/images/about/about22.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 m-b30 align-self-center">
                    <div class="about-content">
                        <div class="section-head style-1">
                            <h2 class="title m-b20">Consulting Service</h2>
                        </div>
                        <div class="info">
                            <p class="m-b30" align="justify">Since its establishment in 2003 PT Proven Force Indonesia converted opportunities into success story. Our clients praised PT Proven Force Indonesia Team for being able to work well with their organizations and deliver the result. Testimonies from Hitachi, Medco Group, Nippon Indosari Corporindo, Frisian Flag, Bentoel Prima, among other, proved that the result show in their performance. After few years of serving industries, PT Proven Force Indonesia has proven itself a worthy partner for companies who are looking toward continuous improvement.</p>
                            <a href="{{route('user.contact')}}" class="btn btn-primary btn-border m-r10 m-b10">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- Iconbox  -->
    <section class="content-inner">
        <div class="container">
            <div class="section-head text-center style-1">
                <h2 class="title">What We Do?</h2>
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed deiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p> --}}
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-bx-wraper left style-7 m-b30">
                        <div class="icon-lg text-primary m-b20"> 
                            <span class="icon-cell">
                                <i class="flaticon-conveyor"></i>
                            </span> 
                        </div>
                        <div class="icon-content">
                            <h4 class="dz-title m-b10"><a href="{{route('user.consulting.organizational')}}"> Organizational Enhancement Program </a></h4>
                            <p>{!! Str::limit('The Program will facilitate the behavioral improvement and productivity management control system program which would involve in the development, agreement, installation and follow up of the said Management Control Systems.', 66, ' ...') !!} </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-bx-wraper left style-7 m-b30">
                        <div class="icon-lg text-primary m-b20"> 
                            <span class="icon-cell">
                                <i class="flaticon-engineer-1"></i>
                            </span>
                        </div>
                        <div class="icon-content">
                            <h4 class="dz-title m-b10"><a href="{{route('user.consulting.performance')}}"> Performance Management</a></h4>
                            <p>{!! Str::limit('Working with your supervisory level, PFI productivity specialist will facilitate in the formulation of specific and measurable key performance indicators (KPI) and objective key result (OKR), which in turn will be used as a basis for providing your organization with a simple and structured reporting mechanism.', 66, ' ...') !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-bx-wraper left style-7 m-b30">
                        <div class="icon-lg text-primary m-b20"> 
                            <span class="icon-cell">
                                <i class="flaticon-tanker"></i>
                            </span>
                        </div>
                        <div class="icon-content">
                            <h4 class="dz-title m-b10"><a href="{{route('user.consulting.management')}}">Management Control System Development</a></h4>
                            <p>{!! Str::limit('Working with your supervisory level, PFI productivity specialist will design and develop integrated management control system to facilitate the documentation of related job components and responsibilities of work areas within the organization. Their relationship to the operation as a whole will also be examined and evaluated.', 66, ' ...') !!} </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-bx-wraper left style-7 m-b30">
                        <div class="icon-lg text-primary m-b20"> 
                            <span class="icon-cell">
                                <i class="flaticon-engineer-1"></i>
                            </span>
                        </div>
                        <div class="icon-content">
                            <h4 class="dz-title m-b10"><a href="{{route('user.consulting.lean')}}">Lean Process Development</a></h4>
                            <p>{!! Str::limit('PFI productivity specialist will design and develop lean process approach. 
                                Based upon current and/or expected operational activity levels, we will conduct studies to establish the workload for each work area in which the system is implemented.', 66, ' ...') !!} </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-bx-wraper left style-7 m-b30">
                        <div class="icon-lg text-primary m-b20"> 
                            <span class="icon-cell">
                                <i class="flaticon-cart"></i>
                            </span>
                        </div>
                        <div class="icon-content">
                            <h4 class="dz-title m-b10"><a href="{{route('user.consulting.digital')}}">Digital Transformation Program</a></h4>
                            <p>Organizational Enhancement Program with digital tools facilitation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>
@endsection
