@extends('layouts_user.master')
@section('content')
<div class="page-content bg-white">
		
    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url(images/bnr/bnr1.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Gallery Masonry</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->
    
    <section class="content-inner">
        <div class="container">
            <div class="site-filters style-1 clearfix center mb-5">
                <ul class="filters" data-bs-toggle="buttons">
                    <li class="btn active">
                        <input type="radio">
                        <a href="javascript:void(0);">All Pictures</a> 
                    </li>
                    <li data-filter=".chemical" class="btn">
                        <input type="radio">
                        <a href="javascript:void(0);">Chemical</a> 
                    </li>
                    <li data-filter=".mechanical" class="btn">
                        <input type="radio">
                        <a href="javascript:void(0);">Mechanical</a> 
                    </li>
                    <li data-filter=".plants" class="btn">
                        <input type="radio">
                        <a href="javascript:void(0);">Plants</a> 
                    </li>
                    <li data-filter=".power-energy" class="btn">
                        <input type="radio">
                        <a href="javascript:void(0);">Power Energy</a> 
                    </li>
                </ul>
            </div>
            
            <div class="row lightgallery sp15" id="masonry">
                <div class="col-lg-4 col-md-6 card-container chemical">
                    <div class="dz-box style-4 m-b15">
                        <div class="dz-media">
                            <img src="{{asset('assets_user/images/gallery/pic1.jpg')}}" alt="">
                        </div>
                        <span data-exthumbimage="{{asset('assets_user/images/gallery/pic1.jpg')}}" data-src="{{asset('assets_user/images/gallery/pic1.jpg')}}" class="view-btn lightimg" title=""><i class="fas fa-plus"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 card-container mechanical">
                    <div class="dz-box style-4 m-b15">
                        <div class="dz-media">
                            <img src="{{asset('assets_user/images/gallery/pic10.jpg')}}" alt="">
                        </div>
                        <span data-exthumbimage="{{asset('assets_user/images/gallery/pic10.jpg')}}" data-src="{{asset('assets_user/images/gallery/pic10.jpg')}}" class="view-btn lightimg" title=""><i class="fas fa-plus"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 card-container chemical">
                    <div class="dz-box style-4 m-b15">
                        <div class="dz-media">
                            <img src="{{asset('assets_user/images/gallery/pic5.jpg')}}" alt="">
                        </div>
                        <span data-exthumbimage="{{asset('assets_user/images/gallery/pic5.jpg')}}" data-src="{{asset('assets_user/images/gallery/pic5.jpg')}}" class="view-btn lightimg" title=""><i class="fas fa-plus"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 card-container power-energy">
                    <div class="dz-box style-4 m-b15">
                        <div class="dz-media">
                            <img src="{{asset('assets_user/images/gallery/pic12.jpg')}}" alt="">
                        </div>
                        <span data-exthumbimage="{{asset('assets_user/images/gallery/pic12.jpg')}}" data-src="{{asset('assets_user/images/gallery/pic12.jpg')}}" class="view-btn lightimg" title=""><i class="fas fa-plus"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 card-container mechanical">
                    <div class="dz-box style-4 m-b15">
                        <div class="dz-media">
                            <img src="{{asset('assets_user/images/gallery/pic13.jpg')}}" alt="">
                        </div>
                        <span data-exthumbimage="{{asset('assets_user/images/gallery/pic13.jpg')}}" data-src="{{asset('assets_user/images/gallery/pic13.jpg')}}" class="view-btn lightimg" title=""><i class="fas fa-plus"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 card-container power-energy">
                    <div class="dz-box style-4 m-b15">
                        <div class="dz-media">
                            <img src="{{asset('assets_user/images/gallery/pic14.jpg')}}" alt="">
                        </div>
                        <span data-exthumbimage="{{asset('assets_user/images/gallery/pic14.jpg')}}" data-src="{{asset('assets_user/images/gallery/pic14.jpg')}}" class="view-btn lightimg" title=""><i class="fas fa-plus"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 card-container plants">
                    <div class="dz-box style-4 m-b15">
                        <div class="dz-media">
                            <img src="{{asset('assets_user/images/gallery/pic15.jpg')}}" alt="">
                        </div>
                        <span data-exthumbimage="{{asset('assets_user/images/gallery/pic15.jpg')}}" data-src="{{asset('assets_user/images/gallery/pic15.jpg')}}" class="view-btn lightimg" title=""><i class="fas fa-plus"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 card-container chemical">
                    <div class="dz-box style-4 m-b15">
                        <div class="dz-media">
                            <img src="{{asset('assets_user/images/gallery/pic4.jpg')}}" alt="">
                        </div>
                        <span data-exthumbimage="{{asset('assets_user/images/gallery/pic4.jpg')}}" data-src="{{asset('assets_user/images/gallery/pic4.jpg')}}" class="view-btn lightimg" title=""><i class="fas fa-plus"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 card-container plants">
                    <div class="dz-box style-4 m-b15">
                        <div class="dz-media">
                            <img src="{{asset('assets_user/images/gallery/pic16.jpg')}}" alt="">
                        </div>
                        <span data-exthumbimage="{{asset('assets_user/images/gallery/pic16.jpg')}}" data-src="{{asset('assets_user/images/gallery/pic16.jpg')}}" class="view-btn lightimg" title=""><i class="fas fa-plus"></i></span>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    
  
    
</div>
@endsection
