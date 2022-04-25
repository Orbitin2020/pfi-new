@extends('layouts_user.master')
@section('content')
<div class="page-content bg-white">
		
    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url(assets_user/images/bnr/bnr1.jpg);">
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
    
    <section class="content-inner-1" style="background-image:url('assets_user/images/background/bg9.jpg');background-size: cover;background-position: top;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-head style-1">
                        <h3 class="title m-b30">We Have a Wonderfull Team We'll Walk You Through</h3>
                        <div class="exp-row">
                            <h2 class="year">19</h2>
                            <p>YEARS OF <span>EXPRIENCE</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 m-b30">
                    <p class="m-b30" align="justify">Since its establishment in 2003 PT Proven Force Indonesia converted opportunities into success story. Our clients praised PT Proven Force Indonesia Team for being able to work well with their organizations and deliver the result. Testimonies from Hitachi, Medco Group, Nippon Indosari Corporindo, Frisian Flag, Bentoel Prima,Yupi Indo jelly gum, among other, proved that the result show in their performance. After few years of serving industries, PT Proven Force Indonesia has proven itself a worthy partner for companies who are looking toward continuous improvement. </p>
                    <a href="{{route('user.contact')}}" class="btn btn-primary btn-border btn-border m-r10 m-b10">Contact Us</a>
                </div>
            </div>

            <div class="swiper-container content-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="content-box2">
                            <div class="dz-info">
                                <h3 class="title">Industrial Construction</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            </div>
                            <div class="dz-media m-b30">
                                <img src="{{asset('assets_user/images/services/pic1.jpg')}}" alt="">
                            </div>
                            <div class="dz-bottom">
                                <a href="services.html" class="btn-link">READ MORE<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content-box2">
                            <div class="dz-info">
                                <h3 class="title">Industrial Engineering</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            </div>
                            <div class="dz-media m-b30">
                                <img src="{{asset('assets_user/images/services/pic2.jpg')}}" alt="">
                            </div>
                            <div class="dz-bottom">
                                <a href="services.html" class="btn-link">READ MORE<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content-box2">
                            <div class="dz-info">
                                <h3 class="title">Industrial Automation</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            </div>
                            <div class="dz-media m-b30">
                                <img src="{{asset('assets_user/images/services/pic3.jpg')}}" alt="">
                            </div>
                            <div class="dz-bottom">
                                <a href="services.html" class="btn-link">READ MORE<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination-content m-t30 swiper-pagination text-center"></div>
            </div>				
        </div>
    </section>
    <section class="content-inner-1">
        <div class="container">
            <div class="section-head text-center" >
                <h2 class="title m-b10">Company History</h2>
                <p class="m-b0">We help our clients renew their business</p>
            </div>
            <div class="history-wrapper">
                <div class="history-wrapper-bx">	
                    <div class="year">2022</div>
                    <div class="history-box">	
                        <div class="inner-content">
                            <span>SEP 5th</span>
                            <h4>Founded In 2010</h4>
                            <p class="mb-0">Nullam lacinia mauris orci, ac auctor nulla eleifend sit amet. Ut in tempor ipsum. Sed aliquam diam massa, ac ullamcorper odio pretium at. Donec eu elit nisl.</p>
                        </div>
                    </div>
                    <div class="history-box">	
                        <div class="inner-content">
                            <span>SEP 5th</span>
                            <h4>First 10 Year Anniversary</h4>
                            <p class="mb-0">Nullam lacinia mauris orci, ac auctor nulla eleifend sit amet. Ut in tempor ipsum. Sed aliquam diam massa, ac ullamcorper odio pretium at. Donec eu elit nisl.</p>
                        </div>
                    </div>
                    <div class="history-box">	
                        <div class="inner-content">
                            <span>SEP 5th</span>
                            <h4>Founded In 2010</h4>
                            <p class="mb-0">Nullam lacinia mauris orci, ac auctor nulla eleifend sit amet. Ut in tempor ipsum. Sed aliquam diam massa, ac ullamcorper odio pretium at. Donec eu elit nisl.</p>
                        </div>
                    </div>
                    <div class="history-box">	
                        <div class="inner-content">
                            <span>SEP 5th</span>
                            <h4 class="m-b30">First Product Launch</h4>
                            <img src="images/about/about35.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="history-wrapper-bx">
                    <div class="year">2020</div>
                    <div class="history-box">	
                        <div class="inner-content">
                            <span>SEP 5th</span>
                            <h4>Founded In 2022</h4>
                            <p class="mb-0">Nullam lacinia mauris orci, ac auctor nulla eleifend sit amet. Ut in tempor ipsum. Sed aliquam diam massa, ac ullamcorper odio pretium at. Donec eu elit nisl.</p>
                        </div>
                    </div>
                    <div class="history-box">	
                        <div class="inner-content">
                            <span>SEP 5th</span>
                            <h4>First 21 Year Anniversary</h4>
                            <p class="mb-0">Nullam lacinia mauris orci, ac auctor nulla eleifend sit amet. Ut in tempor ipsum. Sed aliquam diam massa, ac ullamcorper odio pretium at. Donec eu elit nisl.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="content-inner-4 overlay-black-middle" style="background-image:url('assets_user/images/background/bg8.jpg');background-size: cover;background-position: center;">
        <div class="container">
            <div class="section-head style-1 text-center">
                <h6 class="sub-title text-primary">Our Experts</h6>
                <h2 class="title m-b20 text-white">Everyone Loves Got An Incredible Project Right Now.</h2>
            </div>
            <a href="https://www.youtube.com/watch?v=_FRZVScwggM" class="popup-youtube play-btn2 m-auto"><i class="fa fa-play"></i></a>
        </div>
    </section>
    
    <!-- Progress -->
    <section class="content-inner-2 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 m-b30">
                    <div class="text-center">
                        <svg class="radial-progress m-b20" data-percentage="43" viewBox="0 0 80 80">
                            <circle class="basic-circle" cx="40" cy="40" r="35"></circle>
                            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                            <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">43%</text>
                        </svg>						
                        <h3 class="title m-b0">All Maintenance</h3>
                        <p class="sub-title m-b0">Construction Simulator</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 m-b30">
                    <div class="text-center">
                        <svg class="radial-progress m-b20" data-percentage="73" viewBox="0 0 80 80">
                            <circle class="basic-circle" cx="40" cy="40" r="35"></circle>
                            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                            <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">73%</text>
                        </svg>						
                        <h3 class="title m-b0">Projects Completed</h3>
                        <p class="sub-title m-b0">Construction Simulator</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 m-b30">
                    <div class="text-center">
                        <svg class="radial-progress m-b20" data-percentage="67" viewBox="0 0 80 80">
                            <circle class="basic-circle" cx="40" cy="40" r="35"></circle>
                            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                            <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">67%</text>
                        </svg>						
                        <h3 class="title m-b0">Work Employed</h3>
                        <p class="sub-title m-b0">Construction Simulator</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 m-b30">
                    <div class="text-center">
                        <svg class="radial-progress m-b20" data-percentage="95" viewBox="0 0 80 80">
                            <circle class="basic-circle" cx="40" cy="40" r="35"></circle>
                            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                            <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">95%</text>
                        </svg>						
                        <h3 class="title m-b0">Work facilities</h3>
                        <p class="sub-title m-b0">Construction Simulator</p>
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
                <div class="swiper-container team-slider ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="dz-team style-1 text-center m-b10">
                                <div class="dz-media">
                                    <img src="{{asset('assets_user/images/team/pic1.jpg')}}" alt="">
                                    <ul class="team-social">
                                        <li><a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://in.pinterest.com/" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                                <div class="dz-content">
                                    <h3 class="dz-name">Mike Dooley</h3>
                                    <h6 class="dz-position text-primary">Contractor</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-team style-1 text-center m-b10">
                                <div class="dz-media">
                                    <img src="{{asset('assets_user/images/team/pic2.jpg')}}" alt="">
                                    <ul class="team-social">
                                        <li><a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://in.pinterest.com/" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                                <div class="dz-content">
                                    <h3 class="dz-name">Daniel Orson</h3>
                                    <h6 class="dz-position text-primary">Contractor</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-team style-1 text-center m-b10">
                                <div class="dz-media">
                                    <img src="{{asset('assets_user/images/team/pic3.jpg')}}" alt="">
                                    <ul class="team-social">
                                        <li><a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://in.pinterest.com/" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                                <div class="dz-content">
                                    <h3 class="dz-name">Colin Jameson</h3>
                                    <h6 class="dz-position text-primary">Contractor</h6>
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
    <section class="section-full content-inner-5">
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
    </section>
    
   
</div>
@endsection
