@extends('layouts_user.master')
@section('content')
<div class="page-content bg-white">
		
    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url(assets_user/images/bnr/bnr1.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Contact Us</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->
    
    <section class="content-inner-2 pt-0">
        <div class="map-iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219" style="border:0; width:100%; min-height:100%; margin-bottom: -8px;" allowfullscreen></iframe>
        </div>
    </section>
    
    <section class="contact-wraper1" style="background-image: url(assets_user/images/background/bg18.jpg);">	
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <div class="section-head text-white style-1">
                            <h3 class="title text-white">Get In Touch</h3>
                            <p>If you are interested in working with us, please get in touch.</p>
                        </div>
                        <ul class="no-margin">
                            <li class="icon-bx-wraper text-white left m-b30">
                                <div class="icon-md">
                                    <span class="icon-cell">
                                        <i class="flaticon-placeholder-1"></i>
                                    </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class=" dz-tilte text-white">Our Address</h4>
                                    <p class="font-18">1247/Plot No. 39, 15th Phase, Huab Colony, Kukatpally, Hyderabad</p>
                                </div>
                            </li>
                            <li class="icon-bx-wraper text-white left m-b30">
                                <div class="icon-md">
                                    <span class="icon-cell">
                                        <i class="flaticon-message"></i>
                                    </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dz-tilte text-white">Our Email</h4>
                                    <p class="font-18">info@gmail<br>services@gmail.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 m-b40">
                    <div class="contact-area1 m-r20 m-md-r0">
                        <div class="section-head style-1">
                            <h6 class="sub-title text-primary">CONTACT US</h6>
                            <h3 class="title m-b20">Get In Touch With Us</h3>
                        </div>
                        <form class="dz-form dzForm" method="POST" action="script/contact.php">
                            <input type="hidden" class="form-control" name="dzToDo" value="Contact">
                            <div class="dzFormMsg"></div>		
                            <div class="input-group">
                                <input type="text" class="form-control" name="dzOther[first_name]" placeholder="Full Name">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="dzEmail" placeholder="Email Adress">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="dzOther[phone_number]" placeholder="Phone No.">
                            </div>
                            <div class="input-group">
                                <textarea name="dzMessage" rows="5" class="form-control">Message</textarea>
                            </div>
                            <div>
                                <button name="submit" type="submit" value="submit" class="btn w-100 btn-primary btn-border">CONTACT US</button>
                            </div>
                        </form>
                    </div>
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
                </div>
            </div>
        </div>
    </section>
    
    <!-- Subscribe -->
    <section class="section-full dz-subscribe style-1">
        <div class="container">
            <div class="subscribe-inner row align-items-center">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="title-head">
                        <i class="fas fa-envelope-open-text"></i>
                        <h3 class="title text-white">SIGN UP TO GET LATEST UPDATES</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="dzSubscribe" action="script/mailchamp.php" method="post">
                        <div class="dzSubscribeMsg"></div>
                        <div class="form-group">
                            <div class="input-group">
                                <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Email Address...">
                                <div class="input-group-addon">
                                    <button name="submit" value="Submit" type="submit" class="btn btn-primary"><i class="fas fa-envelope"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection