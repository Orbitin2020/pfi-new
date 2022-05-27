@extends('layouts_user.master')
@section('content')
<div class="page-content bg-white">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center"
        style="background-image: url(assets_user/images/background/bannerAboutUs.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>About Us</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <section class="content-inner-1"
        style="background-image:url('assets_user/images/background/bg7.png');background-size: cover;background-position: top;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-head style-1">
                        <h3 class="title">Proven Force Indonesia</h3>

                        <p class="m-b30" align="justify">Since its establishment in 2003 PT Proven Force Indonesia
                            converted
                            opportunities into success story. Our clients praised PT Proven Force Indonesia Team for
                            being
                            able to work well with their organizations and deliver the result. Testimonies from Hitachi,
                            Medco Group, Nippon Indosari Corporindo, Frisian Flag, Bentoel Prima,Yupi Indo jelly gum,
                            among
                            other, proved that the result show in their performance. After few years of serving
                            industries,
                            PT Proven Force Indonesia has proven itself a worthy partner for companies who are looking
                            toward continuous improvement. </p>
                        <div class="exp-row m-b30">
                            <h2 class="year">19</h2>
                            <p>YEARS OF <span>EXPERIENCE</span></p>
                        </div>
                        <a href="{{route('user.contact')}}"
                            class="btn btn-primary btn-border btn-border m-r10 m-b10">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6 m-b30 mt-2">
                    <h3 class="title">VISION</h3>
                    <p class="text-dark"><strong>Become the leader in the facilitation of profitability
                            improvement and performance enhancement for all types of organizations.</strong></p>
                    <h3 class="title">MISSION</h3>
                    <p class="text-dark"><strong>Facilitating organizations to run their operations more
                            efficiently and effectively through improved management capability.</strong></p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-inner-1">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title m-b10">Company History</h2>
                <p class="m-b0">We help our clients renew their business</p>
            </div>
            <div class="history-wrapper">
                <div class="history-wrapper-bx">
                    <div class="year"><strong>2003</strong></div>
                    <div class="history-box">
                        <div class="inner-content">
                            <p class="mb-0">Proven Force Indonesia (PFI) was established as the consulting arm of
                                President University Foundation with the support
                                of Jababeka Group.</p>
                        </div>
                    </div>
                    <div class="history-box">
                        <div class="inner-content">
                            <p class="mb-0">PFI started its operations in Productivity Consulting.</p>
                        </div>
                    </div>
                </div>
                <div class="history-wrapper-bx">
                    <div class="year"><strong>2005</strong></div>
                    <div class="history-box">
                        <div class="inner-content">
                            <p class="mb-0">PFI established its own office in Cikarang, West Java.</p>
                        </div>
                    </div>
                </div>
                <div class="history-wrapper-bx">
                    <div class="year"><strong>2006</strong></div>
                    <div class="history-box">
                        <div class="inner-content">
                            <p class="mb-0">PT. Proven Force Indonesia was established as the new entity of the
                                organization.</p>
                        </div>
                    </div>
                </div>
                <div class="history-wrapper-bx">
                    <div class="year"><strong>2007</strong></div>
                    <div class="history-box">
                        <div class="inner-content">
                            <p class="mb-0">Operations transitioned from under President University Foundation to PT.
                                Proven Force Indonesia.</p>
                        </div>
                    </div>
                </div>
                <div class="history-wrapper-bx">
                    <div class="year"><strong>2008</strong></div>
                    <div class="history-box">
                        <div class="inner-content">
                            <p class="mb-0">PFI started its operations in Manpower Outsourcing, and set up a branch in
                                Bandung.</p>
                        </div>
                    </div>
                </div>
                <div class="history-wrapper-bx">
                    <div class="year"><strong>2009</strong></div>
                    <div class="history-box">
                        <div class="inner-content">
                            <p class="mb-0">PFI set up a branch office in Lampung.</p>
                        </div>
                    </div>
                </div>
                <div class="history-wrapper-bx">
                    <div class="year"><strong>2012</strong></div>
                    <div class="history-box">
                        <div class="inner-content">
                            <p class="mb-0">PT. PFI Global Manpower was established as a subsidiary of PFI.</p>
                        </div>
                    </div>
                </div>
                <div class="history-wrapper-bx">
                    <div class="year"><strong>2014</strong></div>
                    <div class="history-box">
                        <div class="inner-content">
                            <p class="mb-0">PFI established its operations in Energy Efficiency.</p>
                        </div>
                    </div>
                    <div class="history-box">
                        <div class="inner-content">
                            <p class="mb-0">PFI set up a branch office in Gunung Putri, West Java.</p>
                        </div>
                    </div>
                </div>
                <div class="history-wrapper-bx">
                    <div class="year"><strong>2016</strong></div>
                    <div class="history-box">
                        <div class="inner-content">
                            <p class="mb-0">PFI set up a branch office in Sentul and Sukabumi, West Java.</p>
                        </div>
                    </div>
                </div>
                <div class="history-wrapper-bx">
                    <div class="year"><strong>2017</strong></div>
                    <div class="history-box">
                        <div class="inner-content">
                            <p class="mb-0">PFI moved its head office to SOHO Building, Jakarta.</p>
                        </div>
                    </div>
                </div>
                <div class="history-wrapper-bx">
                    <div class="year"><strong>2019</strong></div>
                    <div class="history-box">
                        <div class="inner-content">
                            <p class="mb-0">PT. Jimmy Gani Korpora was established, as the future holding company of
                                PFI.</p>
                        </div>
                    </div>
                </div>
                <div class="history-wrapper-bx">
                    <div class="year"><strong>2020</strong></div>
                    <div class="history-box">
                        <div class="inner-content">
                            <p class="mb-0">PT. Orbitin Kebanggaan Indonesia was established by PT. Jimmy Gani Korpora
                                as a joint venture with PT. Info Media
                                Digital (PT. Tempo Inti Media Tbk. Group).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-inner-4 overlay-black-middle"
        style="background-image:url('assets_user/images/background/imageAbout.jpg');background-size: cover;background-position: center;">
        <div class="container">
            <div class="section-head style-1 text-center">
                <h6 class="sub-title text-primary">Our Experts</h6>
                <h2 class="title m-b20 text-white">Everyone Loves Got An Incredible Project Right Now.</h2>
            </div>
            <a href="https://www.youtube.com/watch?v=Dr4HGz1yjYw" class="popup-youtube play-btn2 m-auto"><i
                    class="fa fa-play"></i></a>
        </div>
    </section>

    <!-- Progress -->
    <section class="content-inner-2 bg-white">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 m-b30">
                    <div class="text-center">
                        <svg class="radial-progress m-b20" data-percentage="100" viewBox="0 0 80 80">
                            <circle class="basic-circle" cx="40" cy="40" r="35"></circle>
                            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                            <circle class="complete" cx="40" cy="40" r="35"
                                style="stroke-dashoffset: 39.58406743523136;"></circle>
                            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">250+</text>
                        </svg>
                        <h3 class="title m-b0">Clients</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-b30">
                    <div class="text-center">
                        <svg class="radial-progress m-b20" data-percentage="100" viewBox="0 0 80 80">
                            <circle class="basic-circle" cx="40" cy="40" r="35"></circle>
                            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                            <circle class="complete" cx="40" cy="40" r="35"
                                style="stroke-dashoffset: 39.58406743523136;"></circle>
                            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">500+</text>
                        </svg>
                        <h3 class="title m-b0">Projects Completed</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-b30">
                    <div class="text-center">
                        <svg class="radial-progress m-b20" data-percentage="100" viewBox="0 0 80 80">
                            <circle class="basic-circle" cx="40" cy="40" r="35"></circle>
                            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                            <circle class="complete" cx="40" cy="40" r="35"
                                style="stroke-dashoffset: 39.58406743523136;"></circle>
                            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">3000+</text>
                        </svg>
                        <h3 class="title m-b0">Employee</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-inner-2">
        <div class="container">
            <div class="section-head style-1 text-center">
                <h6 class="sub-title text-primary">Our Experts</h6>
                <h2 class="title m-b20">Team & Advisory board</h2>
            </div>
            <div class="team-swiper-1 btn-center-lr">
                <div class="swiper-container team-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="dz-team style-1 text-center m-b10 aos-item" data-aos="fade-up"
                                data-aos-duration="800" data-aos-delay="400">
                                <div class="dz-media">
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
                                        <li>
                                            <a href="https://twitter.com/" class="twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/" class="facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://in.pinterest.com/" class="pinterest">
                                                <i class="fab fa-pinterest-p"></i>
                                            </a>
                                        </li>
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
                                        <li>
                                            <a href="https://twitter.com/" class="twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/" class="facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://in.pinterest.com/" class="pinterest">
                                                <i class="fab fa-pinterest-p"></i>
                                            </a>
                                        </li>
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

    <!-- Clients Swiper -->
    {{-- <section class="section-full content-inner-5">
        <div class="container">
            <div class="swiper-container clients-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('assets_user/images/logo/logo1.jpg')}}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets_user/images/logo/logo2.jpg')}}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets_user/images/logo/logo3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


</div>
@endsection