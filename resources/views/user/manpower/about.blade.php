@extends('layouts_user.master')
@section('content')
<div class="page-content bg-white">

    <!-- Banner  -->
    {{-- assets_user/images/bnr/bnr1.jpg --}}
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center"
        style="background-image: url(assets_user/images/bnr/manpower2.png);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>About Manpower Service</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Services</li>
                        <li class="breadcrumb-item active" aria-current="page">About Manpower</li>
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
                        <img src="{{asset('assets_user/images/about/productivity.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 m-b30 align-self-center">
                    <div class="about-content">
                        {{-- <div class="section-head style-1">

                        </div> --}}
                        <div class="info">
                            <h2 class="title m-b20">Manpower Service</h2>
                            <p class="m-b30" align="justify">
                                Proven Force Indonesia always strives hard to maintain the balance between company
                                recruitment and the needs of its employees.
                                Taking into account the PFI way of thinking and its intention to assist companies and
                                employees to maintain their business activities and reposition the function of out
                                sourcing to its original purpose to improve company productivity.
                                PFI, as an independent intermediary, fully understands the importance of professional
                                mediation.
                                The experienced skill sets of PR team has attracted a growing number of companies to
                                entrust their outsourcing requirements to Proven Force Indonesia.
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