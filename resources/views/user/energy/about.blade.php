@extends('layouts_user.master')
@section('content')
<div class="page-content bg-white">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center"
        style="background-image: url(assets_user/images/bnr/bnr1.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>About Energy Efficiency Service</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Services</li>
                        <li class="breadcrumb-item active" aria-current="page">About Energy Efficiency</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- About -->
    <section class="content-inner"
        style="background-image:url('assets_user/images/background/bg4.png');background-size:cover;background-position:bottom;">
        <div class="container">
            <div class="row about-style14">
                <div class="col-lg-6 m-b30">
                    <div class="dz-media">
                        <img src="{{asset('assets_user/images/about/productivity.png')}} " alt="">
                    </div>
                </div>
                <div class="col-lg-6 m-b30 align-self-center">
                    <div class="about-content">
                        {{-- <div class="section-head style-1">
                            <h2 class="title m-b20">Energy Efficiency Service</h2>
                        </div> --}}
                        <div class="info">
                            <h2 class="title m-b20">Energy Efficiency Service</h2>
                            <p class="m-b30" align="justify">
                                With the recent focus on Energy Efficiency (EE) as a means to minimize the consumption
                                of the power and reduce both operational costs and environmental damage, such as
                                pollution and climate change, PH is committed to expanding it's proven methodology to
                                deliver productivity and savings improvements through projects designed to impact the
                                use and consumption of energy, water and carbon.
                                The PFI Energy Efficiency {EE} Program begins with a highly specialized audit and
                                analysis of the management culture and operation system associated with energy, water
                                and carbon use throughout a company operation to produce measureable and significant
                                results in productivity and savings by enhancing the ability of management of supervisor
                                as well as improving the performance of existing processes and equipment_ The program is
                                a combination of addressing traditional and counterproductive methods, systems and
                                machinery with productive techniques, efficient systems and leading-edge equipment that
                                deliver quantifiable results with the participation and support of front line
                                supervisors at the point of execution.
                                through project esigned to impact the use and consumption of energy.
                            </p>
                            <a href="{{route('user.contact')}}" class="btn btn-primary btn-border m-r10 m-b10">Contact
                                Us</a>
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
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed deiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p> --}}
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
                            <h4 class="dz-title m-b10"><a href="{{route('user.manpower.outsourcing')}}"> Outsourcing
                                </a></h4>
                            <p>{!! Str::limit('PT Proven Force Indonesia will always strive hard to maintain the balance
                                between companys requirements and the needs of it employees. Taking into account PT
                                Proven Force Indonesias way of thinking and intention to assist companies and employees
                                in maintaining their business activities and positioning the function of outsourcing to
                                its original purposes, that of improving company productivity. ', 66, ' ...') !!} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection