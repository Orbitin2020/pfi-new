@extends('layouts_user.master')
@section('content')

<div class="page-content bg-white">
		
    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm my-paroller overlay-black-middle text-center" id="my-element" data-paroller-factor="-0.5" data-paroller-direction="horizontal" style="background-image: url(assets_user/images/bnr/bnr1.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>News</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Articles</li>
                        <li class="breadcrumb-item active" aria-current="page">News</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->
    
    <section class="content-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 m-b40">
                    @foreach ($artikel as $d)
                    <div class="dz-card style-1 shadow m-b30">
                        <div class="dz-media">
                            <a href="blog-details.html"><img src="{{asset('image/artikel/'.$d->gambar)}}" alt=""></a>
                        </div>
                        <div class="dz-info">
                            <div class="dz-meta">
                                <ul>
                                    <li class="post-date">August 30, 2019</li>
                                </ul>
                            </div>
                            <h3 class="dz-title"><a href="blog-details.html">{{($d->judul)}}</a></h3>
                            <p>{{Str::limit(strip_tags($d->detail), 150)}}</p>
                        </div>
                    </div>
                    @endforeach
                   
                    <nav aria-label="Blog Pagination">
                        <ul class="pagination text-center m-b30 m-t50 m-lg-t10">
                            <li class="page-item"><a class="page-link prev" href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
                            <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                            <li class="page-item"><a class="page-link next" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <aside class="side-bar sticky-top right">
                        <div class="widget style-1 widget_categories">
                            <div class="widget-title">
                                <h4 class="title">Category</h4>
                            </div>
                            <ul>
                                <li class="cat-item"><a href="javascript:void(0);">Software</a></li>                                         
                                <li class="cat-item"><a href="javascript:void(0);">Analysis</a></li>                                         
                                <li class="cat-item"><a href="javascript:void(0);">Cryptocurrency</a></li>                                         
                                <li class="cat-item"><a href="javascript:void(0);">Technology</a></li>                                         
                                <li class="cat-item"><a href="javascript:void(0);">Mobile App</a></li> 
                                <li class="cat-item"><a href="javascript:void(0);">Development</a></li> 
                            </ul>
                        </div>
                        
                        <div class="widget style-1 widget_gallery gallery-grid-3">
                            <div class="widget-title">
                                <h4 class="title">Gallery</h4>
                            </div>
                            <ul id="lightgallery" class="lightgallery">
                                <li>
                                    <div class="dlab-post-thum dlab-img-effect">
                                        <span data-exthumbimage="{{asset('assets_user/images/gallery/small/pic1.jpg')}}" data-src="{{asset('assets_user/images/gallery/small/pic1.jpg')}}" class="lightimg" title="Image 1 Title will come here">		
                                            <img src="{{asset('assets_user/images/gallery/small/pic1.jpg')}}" alt=""> 
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="widget style-1 recent-posts-entry">
                            <div class="widget-title">
                                <h4 class="title">Recent Post</h4>
                            </div>
                            <div class="widget-post-bx">
                                <div class="widget-post clearfix">
                                    <div class="dz-media"> 
                                        <img src="{{asset('assets_user/images/blog/recent-blog/pic1.jpg')}}" alt="">
                                    </div>
                                    <div class="dz-info">
                                        <div class="dz-meta">
                                            <ul>
                                                <li class="post-date"> 7 March, 2022</li>
                                            </ul>
                                        </div>
                                        <h6 class="title"><a href="blog-details.html">Aliqua sodales vestibulum risus nterdum malesuad</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection