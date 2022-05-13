@extends('layouts_user.master')
@section('content')
<div class="page-content bg-white">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center"
        style="background-image: url(assets_user/images/bnr/bnr1.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>About Training & Development Service</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Services</li>
                        <li class="breadcrumb-item active" aria-current="page">About Training & Development</li>
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
                            <h2 class="title m-b20">Training & Development Service</h2>
                        </div> --}}
                        <div class="info">
                            <h2 class="title m-b20">Training & Development Service</h2>
                            <p class="m-b30" align="justify">
                                Creating and delivering training programs have a high degree of difficulty, especially
                                if a client expects the best result from each experience.
                                Nevertheless, Proven Force Indonesia Training teams are successfully to deliver
                                efficient and effective training programs. How do we do it? By implementing the right
                                method from the start.
                                PFI training methods begins with a deep assessment on the challenges and opportunities
                                encountered by the client and then works with clients to identify the root causes and
                                appropriate solutions.
                                We create training materials with an emphasis on the effectiveness of the program and
                                how the program will help participants acquire the competencies they need For productive
                                work results. method from the start.
                                Training method begins with a deep excavation on the problems encountered by the client,
                                with an emphasis on the effectiveness of the program and how the program will help
                                participants acquire the competencies they need for their work.

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
                                <i class="flaticon-home"></i>
                            </span>
                        </div>
                        <div class="icon-content">
                            <h4 class="dz-title m-b10"><a href="{{route('user.manpower.outsourcing')}}"> In House
                                    Training Program </a></h4>
                            <p>{!! Str::limit('Is a training program held at the clients place with material that is
                                "cutomized" in which PT. Proven Force Indonesia provides training materials as required
                                by customers.', 66, ' ...') !!} </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-bx-wraper left style-7 m-b30">
                        <div class="icon-lg text-primary m-b20">
                            <span class="icon-cell">
                                <i class="flaticon-users"></i>
                            </span>
                        </div>
                        <div class="icon-content">
                            <h4 class="dz-title m-b10"><a href="{{route('user.manpower.outsourcing')}}"> Productivity
                                    Talent Management </a></h4>
                            <p>{!! Str::limit('It is a comprehensive human resource development program consisting of
                                several training materials that are delivered together. ', 66, ' ...') !!} </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-bx-wraper left style-7 m-b30">
                        <div class="icon-lg text-primary m-b20">
                            <span class="icon-cell">
                                <i class="flaticon-conveyor"></i>
                            </span>
                        </div>
                        <div class="icon-content">
                            <h4 class="dz-title m-b10"><a href="{{route('user.manpower.outsourcing')}}">Outbound
                                    Training </a></h4>
                            <p>{!! Str::limit('Outbound Training is a training activity that is held not only indoors
                                but also outdoors. ', 66, ' ...') !!} </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-bx-wraper left style-7 m-b30">
                        <div class="icon-lg text-primary m-b20">
                            <span class="icon-cell">
                                <i class="flaticon-conveyor"></i>
                            </span>
                        </div>
                        <div class="icon-content">
                            <h4 class="dz-title m-b10"><a href="{{route('user.manpower.outsourcing')}}">Public Training
                                </a></h4>
                            <p>{!! Str::limit('Public Training is a training event held by PT. Proven Force Indonesia
                                with the aim of improving the quality of existing human resources in a company.', 66, '
                                ...') !!} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection