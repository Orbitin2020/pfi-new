@extends('layouts_user.master')
@section('content')
<div class="page-content bg-white">

    {{-- Carousel --}}
    <div class="main-slider2">
        <div class="swiper-container main-slider-2 banner-inner">
            <div class="swiper-wrapper">
                {{-- Ukuran Image 1920px - 1080 --}}
                <div class="swiper-slide"
                    style="background-image: url(assets_user/banner/bannerss.jpg); background-size: cover;">
                    <div class="banner-content container">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4 class="title text-white" data-swiper-parallax="-500">PFI
                                    Delivers <br> Outstanding
                                    Results
                                </h4>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <p class="text-white" data-swiper-parallax="-1000" align="justify">
                                            Since its establishment in 2003 PT Proven Force Indonesia converted
                                            opportunities
                                            into success story. Our clients praised PT Proven Force Indonesia Team for
                                            being
                                            able to work well with their organizations and deliver the result.
                                        </p>
                                    </div>
                                </div>
                                <a data-swiper-parallax=" -1500" href="{{route('user.about')}}"
                                    class="btn btn-primary">READ MORE <i
                                        class="fas fa-long-arrow-alt-right m-l15"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"
                    style="background-image: url(assets_user/banner/bannerConsulting.jpg); background-size: cover;">
                    <div class="banner-content container">
                        <div class="row">
                            <div class="col-lg-9">
                                <h1 class="title text-white" data-swiper-parallax="-500">Consulting <br> Services</h1>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <p class="text-white" data-swiper-parallax="-1000" align="justify">
                                            Transformation of total management culture and operation system, which will
                                            produce
                                            measurable result in productivity improvement by enchancing the managerial
                                            ability
                                            of corporations, management, replace entrenched and counterproductive
                                            methods with
                                            productive and profitable techniques and install a system that gives front
                                            line
                                            supervisors control at the point of execution.
                                        </p>
                                    </div>
                                </div>
                                <a data-swiper-parallax="-1500" href="{{route('user.consulting')}}"
                                    class="btn btn-primary">READ MORE <i
                                        class="fas fa-long-arrow-alt-right m-l15"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"
                    style="background-image: url(assets_user/banner/manpowerBanner.jpg); background-size: cover;">
                    <div class="banner-content container">
                        <div class="row">
                            <div class="col-lg-9">
                                <h1 class="title text-white" data-swiper-parallax="-500">Manpower <br> Outsourcing</h1>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <p class="text-white" data-swiper-parallax="-1000" align="justify">Proven Force
                                            Indonesia always
                                            strives
                                            hard to maintain the balance between company recruitment and the needs of
                                            its
                                            employees. Taking into account the PFI way of thinking and its intention to
                                            assist
                                            companies and employees to maintain
                                            their business activities and reposition the function of out sourcing to its
                                            original purpose to improve company
                                            productivity. </p>
                                    </div>
                                </div>
                                <a data-swiper-parallax="-1500" href="{{ route('user.manpower') }}"
                                    class="btn btn-primary">READ MORE <i
                                        class="fas fa-long-arrow-alt-right m-l15"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"
                    style="background-image: url(assets_user/banner/bannerTraining.jpg); background-size: cover;">
                    <div class="banner-content container">
                        <div class="row">
                            <div class="col-lg-9">
                                <h1 class="title text-white" data-swiper-parallax="-500">Training & Development</h1>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <p class="text-white" data-swiper-parallax="-1000" align="justify">Human
                                            resources have a very
                                            large
                                            role
                                            in increasing productivity and maintaining the company's survival on an
                                            ongoing
                                            basis. Good human resources will be able to run the company as optimally as
                                            possible
                                            so that the company can continue to
                                            grow and develop to strengthen the existing business. Reliable human
                                            resources will
                                            be the driving force for a company
                                            by optimizing all existing resources, including human resources related to
                                            technology.</p>
                                    </div>
                                </div>
                                <a data-swiper-parallax="-1500" href="{{ route('user.training') }}"
                                    class="btn btn-primary">READ MORE <i
                                        class="fas fa-long-arrow-alt-right m-l15"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"
                    style="background-image: url(assets_user/banner/energyBanner.jpg); background-size: cover;">
                    <div class="banner-content container">
                        <div class="row">
                            <div class="col-lg-9">
                                <h1 class="title text-white" data-swiper-parallax="-500">Energy Efficiency</h1>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <p class="text-white" data-swiper-parallax="-1000" align="justify">With the
                                            recent focus on
                                            Energy
                                            Efficiency (EE) as a means to minimize the consumption of the power and
                                            reduce both
                                            operational costs and environmental damage, such as pollution and climate
                                            change, PH
                                            is committed to expanding it's
                                            proven methodology to deliver productivity and savings improvements through
                                            projects
                                            designed to impact the use and
                                            consumption of energy, water and carbon.
                                        </p>
                                    </div>
                                </div>
                                <a data-swiper-parallax="-1500" href="{{ route('user.energy') }}"
                                    class="btn btn-primary">READ MORE <i
                                        class="fas fa-long-arrow-alt-right m-l15"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button">
                <div class="swiper-button-prev"><i class="las la-angle-left"></i></div>
                <div class="swiper-button-next"><i class="las la-angle-right"></i></div>
            </div>
        </div>
    </div>
    {{-- End Carousel --}}

    <section class="content-inner bg-white">
        <div class="container">
            <div class="row about-style2 align-items-center">
                <div class="col-lg-6 m-b30">
                    <div class="about-content aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                        <div class="section-head style-1">
                            <h6 class="sub-title text-primary">Welcome to Proven Force Indonesia.</h6>

                            <h3 class="title m-b20">WHY CHOOSE US?</h3>
                            <p class="text-dark">
                                Extensive experienced in the training industry for 19 years, A variety of methods not
                                offered by other providers, Customized training materials to suit the client needs,
                                Equipped with a consultancy division to optimize added value for the company recipient.
                            </p>
                        </div>
                        <a href="" class="btn btn-primary">READ MORE <i
                                class="fas fa-long-arrow-alt-right m-l15"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 m-b30">
                    <div class="row align-items-end aos-item" data-aos="fade-up" data-aos-duration="800"
                        data-aos-delay="200">
                        <div class="col-sm-8 m-b30">
                            <div class="about-thumb">
                                <div class="split-box">
                                    <div>
                                        <img class="w-100" src="{{asset('assets_user/images/about/thumbnail.jpg')}}"
                                            alt="">
                                    </div>
                                </div>
                                <a href="https://www.youtube.com/watch?v=Dr4HGz1yjYw"
                                    class="popup-youtube play-btn3">Play Video</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter-style-1 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800"
                                data-aos-delay="400">
                                <div class="counter-num text-primary">
                                    <h2 class="counter text-primary">250</h2>
                                    <small>+</small>
                                </div>
                                <h5 class="counter-text">Clients</h5>
                            </div>
                            <div class="counter-style-1 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800"
                                data-aos-delay="400">
                                <div class="counter-num text-primary">
                                    <h2 class="counter text-primary">500</h2>
                                    <small>+</small>
                                </div>
                                <h5 class="counter-text">Projects Completed</h5>
                            </div>
                            <div class="counter-style-1 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800"
                                data-aos-delay="600">
                                <div class="counter-num text-primary">
                                    <h2 class="counter text-primary">3000</h2>
                                    <small>+</small>
                                </div>
                                <h5 class="counter-text">Employee</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-inner-2 service-wrapper-2 overlay-black-dark"
        style="background-image:url(assets_user/images/about/ourService.png);background-size: cover;">
        <div class="container">
            <div class="section-head style-1 text-center aos-item" data-aos="fade-up" data-aos-duration="800"
                data-aos-delay="200">
                <h6 class="sub-title text-primary">Our Services</h6>
                <h2 class="title m-b20 text-white">High Performance Services For Multiple Industries!</h2>
            </div>
            <div class="btn-center-lr">
                <div class="swiper-container service-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="content-box overlay-shine aos-item" data-aos="fade-up" data-aos-duration="800"
                                data-aos-delay="400">
                                <div class="dz-media">
                                    {{-- <img src="{{asset('assets_user/images/services/pic1.jpg')}}" alt=""> --}}
                                    <img src="{{ asset('assets_user/banner/bannerConsulting.jpg') }}" alt="">
                                </div>
                                <div class="dz-info" data-num="01">
                                    <div class="icon-lg m-b20 text-primary">
                                        <i class="flaticon-cogwheel"></i>
                                    </div>
                                    <h4 class="dz-title"><a href="{{route('user.consulting')}}">Consulting Services</a>
                                    </h4>
                                    <p class="m-b0">Since its establishment in 2003 PT Proven Force Indonesia converted
                                        opportunities into success story</p>
                                </div>
                                <div class="dz-bottom">
                                    <a class="btn btn-primary d-block" href="{{route('user.consulting')}}">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-box overlay-shine aos-item" data-aos="fade-up" data-aos-duration="800"
                                data-aos-delay="600">
                                <div class="dz-media">
                                    <img src="{{ asset('assets_user/banner/bannerss.jpg') }}" alt="">
                                    {{-- <img src="{{asset('assets_user/images/services/pic2.jpg')}}" alt=""> --}}
                                </div>
                                <div class="dz-info" data-num="02">
                                    <div class="icon-lg m-b20 text-primary">
                                        <i class="flaticon-engineer-1"></i>
                                    </div>

                                    <h4 class="dz-title"><a href="{{route('user.manpower')}}">Manpower Outsourcing</a>
                                    </h4>
                                    <p class="m-b0">Proven Force Indonesia always strives hard to maintain the balance
                                        between company recruitment and the needs of its
                                        employees.</p>
                                </div>
                                <div class="dz-bottom">
                                    <a class="btn btn-primary d-block" href="{{route('user.manpower')}}">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-box overlay-shine aos-item" data-aos="fade-up" data-aos-duration="800"
                                data-aos-delay="800">
                                <div class="dz-media">
                                    <img src="{{ asset('assets_user/banner/bannerTraining.jpg') }}" alt="">
                                    {{-- <img src="{{asset('assets_user/images/services/pic3.jpg')}}" alt=""> --}}
                                </div>
                                <div class="dz-info" data-num="03">
                                    <div class="icon-lg m-b20 text-primary">
                                        <i class="flaticon-robot-arm"></i>
                                    </div>

                                    <h4 class="dz-title"><a href="{{route('user.training')}}">Training & Development</a>
                                    </h4>
                                    <p class="m-b0">Creating and delivering training programs have a high degree of
                                        difficulty, especially if a client expects the best
                                        result from each experience.</p>
                                </div>
                                <div class="dz-bottom">
                                    <a class="btn btn-primary d-block" href="{{route('user.training')}}">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-box overlay-shine aos-item" data-aos="fade-up" data-aos-duration="800"
                                data-aos-delay="800">
                                <div class="dz-media">
                                    <img src="{{ asset('assets_user/banner/energyBanner.jpg') }}" alt="">
                                    {{-- <img src="{{asset('assets_user/images/services/pic3.jpg')}}" alt=""> --}}
                                </div>
                                <div class="dz-info" data-num="04">
                                    <div class="icon-lg m-b20 text-primary">
                                        <i class="flaticon-robot-arm"></i>
                                    </div>

                                    <h4 class="dz-title"><a href="{{route('user.energy')}}">Energy Efficiency</a></h4>
                                    <p class="m-b0">Energy Efficiency (EE) as a means to minimize power consumption and
                                        reduce operational costs and environmental damage..</p>
                                </div>
                                <div class="dz-bottom">
                                    <a class="btn btn-primary d-block" href="{{route('user.energy')}}">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button">
                    <div class="btn-prev swiper-button-prev-service"><i class="las la-angle-left"></i></div>
                    <div class="btn-next swiper-button-next-service"><i class="las la-angle-right"></i></div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="content-inner-1">
        <div class="container">
            <div class="swiper-container testimonial-swiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-2 aos-item" data-aos="fade-up" data-aos-duration="800"
                            data-aos-delay="200">
                            <div class="testimonial-pic">
                                <img src="{{asset('assets_user/images/testimonials/large/testimonial.png')}}" alt="">
                            </div>
                            <div class="testimonial-info">
                                <div class="info">
                                    <h5 class="testimonial-name">Kusuma Widjaja</h5>
                                    <span class="testimonial-position">Director, Bentoel Prima</span>
                                </div>
                                <div class="testimonial-text">
                                    <p>“We are focused towards achieving your goals,
                                        Our supervisors have better understand¬ing of their roles and
                                        responsibilities.
                                        As a result of these behavior changes. we have achieved :
                                        Improvement in waste,We reduce the waste level around 15% of their prior
                                        achievment improvement in machinery,We achieve about 18% improvement in
                                        productivity of the machines
                                        ”.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-2 aos-item" data-aos="fade-up" data-aos-duration="800"
                            data-aos-delay="400">
                            <div class="testimonial-pic">
                                <img src="{{asset('assets_user/images/testimonials/large/testimonial.png')}}" alt="">
                            </div>
                            <div class="testimonial-info">
                                <div class="info">

                                    <h5 class="testimonial-name">Herry Hernawan</h5>
                                    <span class="testimonial-position">President Director, Temprint</span>
                                </div>
                                <div class="testimonial-text">
                                    <p>“The savings and productivity improve¬ment factors above greatly
                                        affect the overall performance and profit¬ability of PT Temprint.
                                        In the end we were able to record profits in the last four months.
                                        ”.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-2 aos-item" data-aos="fade-up" data-aos-duration="800"
                            data-aos-delay="600">
                            <div class="testimonial-pic">
                                <img src="{{asset('assets_user/images/testimonials/large/testimonial.png')}}" alt="">
                            </div>
                            <div class="testimonial-info">
                                <div class="info">

                                    <h5 class="testimonial-name">Sardar Ahmed</h5>
                                    <span class="testimonial-position">Operations Director, Frisian Flag
                                        Indonesia</span>
                                </div>
                                <div class="testimonial-text">
                                    <p>“The main objective of this project was meant to be a behavior
                                        change program and through the above has resulted in : Improvement in machine
                                        productivity by 18%,Reduction in raw material losses by 14%,Reduction in failure
                                        by manufacturing by 52%.
                                        I am pleased to inform you that the proj-ect is successful and
                                        meets our expectation
                                        ”.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="content-inner-2">
        <div class="container-fluid">
            <div class="section-head style-1 text-center aos-item" data-aos="fade-up" data-aos-duration="800"
                data-aos-delay="200">
                <h6 class="sub-title text-primary">Explore Recent Work</h6>
                <h2 class="title m-b20">We've Done Lot's Projects Let's Check Some Here</h2>
            </div>
            <div class="row sp15 aos-item" data-aos="fade-in" data-aos-duration="800" data-aos-delay="400">
                <div class="col-xl-6 col-md-6 m-b15">
                    {{-- image-tooltip-effect --}}
                    <div class="dz-box style-2">
                        {{-- {{asset('assets_user/directImage/1.jpg')}} assets_user/images/work/work-2/pic1.jpg --}}
                        <a href="#" class="dz-media height-md"
                            style="background-image:url('assets_user/portfolio/port2.jpg');"></a>
                        {{-- <div class="dz-info">
                            <h4 class="title m-b10">Flexible Manufacturing</h4>
                            <h6 class="sub-title text-primary m-b0">150 projects</h6>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 m-b15">
                    <div class="dz-box style-2">
                        <a href="#" class="dz-media height-md"
                            style="background-image:url('assets_user/portfolio/port1.jpg');"></a>
                        {{-- <div class="dz-info">
                            <h4 class="title m-b10">Power & Energy</h4>
                            <h6 class="sub-title text-primary m-b0">100 projects</h6>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 m-b15">
                    <div class="dz-box style-2">
                        <a href="#" class="dz-media height-md"
                            style="background-image:url('assets_user/portfolio/port3.jpg');"></a>
                        {{-- <div class="dz-info">
                            <h4 class="title m-b10">Gathering Balai Kartini</h4>
                            <h6 class="sub-title text-primary m-b0">120 projects</h6>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 m-b15">
                    <div class="dz-box style-2">
                        <a href="#" class="dz-media height-md"
                            style="background-image:url('assets_user/portfolio/port1.jpg');"></a>
                        {{-- <div class="dz-info">
                            <h4 class="title m-b10">Gathering Balai Kartini</h4>
                            <h6 class="sub-title text-primary m-b0">50 projects</h6>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-inner-1">
        <div class="container">
            <div class="section-head style-1 text-center aos-item" data-aos="fade-up" data-aos-duration="800"
                data-aos-delay="200">
                <h6 class="sub-title text-primary">Our Experts</h6>
                <h2 class="title m-b20">Team & Advisory Board</h2>
            </div>
            <div class="team-swiper-1 btn-center-lr">
                <div class="swiper-container team-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="dz-team style-1 text-center m-b10 aos-item" data-aos="fade-up"
                                data-aos-duration="800" data-aos-delay="400">
                                <div class="dz-media">
                                    {{-- assets_user/images/team/pic1.jpg --}}
                                    <img src="{{asset('assets_user/directImage/pakjimmy.jpg')}}" alt="">
                                    <ul class="team-social">
                                        <li><a href="https://twitter.com/" class="twitter"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/" class="facebook"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://in.pinterest.com/" class="pinterest"><i
                                                    class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                                <div class="dz-content">
                                    <h3 class="dz-name">Jimmy Gani</h3>
                                    <h6 class="dz-position text-primary">Founder & Chairman</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-team style-1 text-center m-b10 aos-item" data-aos="fade-up"
                                data-aos-duration="800" data-aos-delay="600">
                                <div class="dz-media">
                                    <img src="{{asset('assets_user/directImage/tri.jpg')}}" alt="">
                                    <ul class="team-social">
                                        <li><a href="https://twitter.com/" class="twitter"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/" class="facebook"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://in.pinterest.com/" class="pinterest"><i
                                                    class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                                <div class="dz-content">
                                    <h3 class="dz-name">Triharto Bintama</h3>
                                    <h6 class="dz-position text-primary">Director of Manpower</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-team style-1 text-center m-b10 aos-item" data-aos="fade-up"
                                data-aos-duration="800" data-aos-delay="800">
                                <div class="dz-media">
                                    <img src="{{asset('assets_user/directImage/baihaki.jpg')}}" alt="">
                                    <ul class="team-social">
                                        <li><a href="https://twitter.com/" class="twitter"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/" class="facebook"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://in.pinterest.com/" class="pinterest"><i
                                                    class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                                <div class="dz-content">
                                    <h3 class="dz-name">Baihaki Fauzi</h3>
                                    <h6 class="dz-position text-primary">Director of Consulting</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-team style-1 text-center m-b10 aos-item" data-aos="fade-up"
                                data-aos-duration="800" data-aos-delay="800">
                                <div class="dz-media">
                                    <img src="{{asset('assets_user/directImage/ervin.jpg')}}" alt="">
                                    <ul class="team-social">
                                        <li><a href="https://twitter.com/" class="twitter"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/" class="facebook"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://in.pinterest.com/" class="pinterest"><i
                                                    class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                                <div class="dz-content">
                                    <h3 class="dz-name">Ervin Priambodo</h3>
                                    <h6 class="dz-position text-primary">Director of Training</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-team style-1 text-center m-b10 aos-item" data-aos="fade-up"
                                data-aos-duration="800" data-aos-delay="800">
                                <div class="dz-media">
                                    <img src="{{asset('assets_user/directImage/setiyo.jpg')}}" alt="">
                                    <ul class="team-social">
                                        <li><a href="https://twitter.com/" class="twitter"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/" class="facebook"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://in.pinterest.com/" class="pinterest"><i
                                                    class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                                <div class="dz-content">
                                    <h3 class="dz-name">Setiyo Widodo</h3>
                                    <h6 class="dz-position text-primary">Associate Director of Consulting</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-team style-1 text-center m-b10 aos-item" data-aos="fade-up"
                                data-aos-duration="800" data-aos-delay="800">
                                <div class="dz-media">
                                    <img src="{{asset('assets_user/directImage/hendradi.jpg')}}" alt="">
                                    <ul class="team-social">
                                        <li><a href="https://twitter.com/" class="twitter"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/" class="facebook"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://in.pinterest.com/" class="pinterest"><i
                                                    class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                                <div class="dz-content">
                                    <h3 class="dz-name">Hendradi Aspari</h3>
                                    <h6 class="dz-position text-primary">Associate Director of Business Development</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-team style-1 text-center m-b10 aos-item" data-aos="fade-up"
                                data-aos-duration="800" data-aos-delay="800">
                                <div class="dz-media">
                                    <img src="{{asset('assets_user/directImage/david.jpg')}}" alt="">
                                    <ul class="team-social">
                                        <li><a href="https://twitter.com/" class="twitter"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/" class="facebook"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://in.pinterest.com/" class="pinterest"><i
                                                    class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                                <div class="dz-content">
                                    <h3 class="dz-name">David Finneren</h3>
                                    <h6 class="dz-position text-primary">Director of Energy Efficiency</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button">
                    <div class="btn-prev swiper-button-prev-team"><i class="las la-angle-left"></i></div>
                    <div class="btn-next swiper-button-next-team"><i class="las la-angle-right"></i></div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-inner" style="background-image:url('assets_user/images/background/bg7.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-b30">
                    <div class="contact-area1 m-r20 m-md-r0 aos-item" data-aos="fade-up" data-aos-duration="800"
                        data-aos-delay="200">
                        <div class="section-head style-1">
                            <h6 class="sub-title text-primary">CONTACT US</h6>
                            <h3 class="title m-b20">Request A Quote</h3>
                        </div>
                        <form class="dz-form dzForm" id="frm_contact">
                            {{ csrf_field() }}

                            <input type="hidden" name="_captcha" value="false">
                            <input type="hidden" name="_template" value="box">
                            <div class="dzFormMsg"></div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="nama" placeholder="Full Name">
                            </div>
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" placeholder="Email Adress">
                            </div>
                            <div class="input-group">
                                <input type="number" class="form-control" name="telepon" placeholder="Phone No.">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="subjek" placeholder="Subjek">
                            </div>
                            <div class="input-group">
                                <textarea name="pesan" rows="5" class="form-control">Message</textarea>
                            </div>
                            {{-- <div class="input-group">
                                <div class="g-recaptcha" data-sitekey="<!-- Put Your reCaptcha Secret Key -->"
                                    data-callback="verifyRecaptchaCallback"
                                    data-expired-callback="expiredRecaptchaCallback"></div>
                                <input class="form-control d-none" style="display:none;" data-recaptcha="true" required
                                    data-error="Please complete the Captcha">
                            </div> --}}
                            <div>
                                <button id="btnSubmit" class="btn btn-primary">SUBSCRIBE
                                    NOW</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 m-b30 align-self-center">
                    <div class="section-head style-1 aos-item" data-aos="fade-up" data-aos-duration="800"
                        data-aos-delay="400">
                        <h3 class="title m-b20">We Are Always Best For Industrial Solution</h3>
                    </div>
                    <ul class="list-check primary m-b40 aos-item" data-aos="fade-up" data-aos-duration="800"
                        data-aos-delay="600">
                        <li>Think Positive, Think Always</li>
                        <li>Everyone Loves Got An Incredible</li>
                        <li>Our Professional Team Works</li>
                        <li>We Are Laregest Independent</li>
                    </ul>
                    <div class="split-box">
                        {{-- assets_user/images/about/about28.jpg --}}
                        <img src="{{asset('image/homeContact.png')}}" alt="" class="aos-item" data-aos="fade-up"
                            data-aos-duration="800" data-aos-delay="800">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@push('scripts')
<script>
    $('#btnSubmit').on('click', function(e) {
        e.preventDefault();
        let token = $('input[name="_token"]').val();

        $.ajax({
            url: "{{ route('user.sendContact') }}",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': token
            },
            method: 'POST',
            data: $('#frm_contact').serialize(),
            beforeSend: function() {
                Swal.fire({
                    title: 'Please Wait...',
                    text: 'Your data is being processed!',
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
            },
            success: function(data) {

                if(data.status == 200) {
                    Swal.fire(
                        'Successfully!',
                        data.message,
                        'success'
                    );
                    $('#frm_contact').trigger("reset");
                } else {
                    var values = '';
                    jQuery.each(data.message, function(key, value) {
                        values += value
                    });
                    Swal.fire(
                        'Failed!',
                        values,
                        'error'
                    );
                    $('#frm_contact').trigger("reset");
                }
            },
            error: function(err) {
                Swal.fire(
                    'Gagal!',
                    err.message,
                    'error'
                );
            }
        })
    })

    function contact() {
        $.ajax({
            // headers : {
            //     'X-CSRF-TOKEN' : "{{csrf_token()}}"
            // },
            method: 'POST',
            url: 'https://formsubmit.co/ajax/info@provenforceindonesia.com',
            data: $('#frm_contact').serialize(),
            beforeSend: function() {
                Swal.fire({
                    title: 'Please Wait...',
                    text: 'Your data is being processed!',
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
            },
            success: function(res) {
                $('#frm_contact').trigger("reset");
                Swal.fire({
                    title: 'Action Success!',
                    icon: 'success',
                    text: 'Your Message Has Been Sent',
                    showConfirmButton: true
                })
                // $("#heading").text("Action Success")
                // $("#body").text("New product successfully created")
                // setInterval(() => {
                //   $('#loading-modal').modal('hide')
                // }, 2000)
            },
            error: function(xhr, ajaxOptions, thrownError) {
                $('#frm_contact').trigger("reset");
                Swal.fire({
                    title: 'Whoopsss....',
                    icon: 'error',
                    text: 'Your Message Has Not Been Sent',
                    showConfirmButton: true
                })
            }
        });
    }

    function contactUs() {
        let token = $('input[name="_token"]').val();
        $.ajax({
            url: "{{ route('user.sendContact') }}",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': token
            },
            method: 'POST',
            data: $('#frm_contact').serialize(),
            beforeSend: function() {
                Swal.fire({
                    title: 'Please Wait...',
                    text: 'Your data is being processed!',
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
            },
            success: function(data) {
                console.log(data);
            },
            error: function(err) {
                console.log(err);
            }
        })
    }
</script>
@endpush