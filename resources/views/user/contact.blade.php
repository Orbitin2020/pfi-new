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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.159315046212!2d106.84278481540119!3d-6.2427242628683555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3b9259615c5%3A0x1fa5a36bd5f609ec!2sSOHO%20Pancoran!5e0!3m2!1sid!2sid!4v1650854604758!5m2!1sid!2sid" style="border:0; width:100%; min-height:100%; margin-bottom: -8px;" allowfullscreen></iframe>
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
                        <form class="dz-form dzForm" id="frm_contact">
                            {{ csrf_field() }}
                            <input type="hidden" name="_captcha" value="false">
                            <input type="hidden" name="_template" value="box">
                            {{-- <input type="hidden" name="_next" value="http://localhost:8000/contact"> --}}
                            
                            <div class="dzFormMsg"></div>		
                            <div class="input-group">
                                <input type="text" class="form-control" name="nama" placeholder="Full Name">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" placeholder="Email Adress">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="no_hp" placeholder="Phone No.">
                            </div>
                            <div class="input-group">
                                <textarea name="message" rows="5" class="form-control">Message</textarea>
                            </div>
                            <div>
                                <button onclick="contact()" name="submit" type="submit" value="submit" class="btn w-100 btn-primary btn-border">CONTACT US</button>
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
    
</div>
@endsection
@push('scripts')
<script>
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
</script>
@endpush