@extends('layouts_user.master')
@section('content')

<div class="page-content bg-white">
		
    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm my-paroller overlay-black-middle text-center" id="my-element" data-paroller-factor="-0.5" data-paroller-direction="horizontal" style="background-image: url(/assets_user/images/bnr/bnr1.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Blog Details</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Blog</li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
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
                    <div class="dz-card style-1 blog-single">
                        <div class="dz-media">
                            <img src="{{asset('image/artikel/'.$artikel->gambar)}}" alt="">
                        </div>
                        <div class="dz-info">
                            <div class="dz-meta">
                                <ul>
                                    <li class="post-date"><i class="las la-calendar"></i> {{date('d M Y', strtotime($artikel->created_at))}}</li>
                                    {{-- <li class="post-author"><a href="javascript:void(0);"><i class="las la-user"></i> By {{date('d M Y', strtotime($artikel->user))}}</a></li> --}}
                                </ul>
                            </div>
                            <h2 class="dz-title">{{$artikel->judul}}</h2>
                            <p>{!!$artikel->detail !!} </p>
                           
                        </div>
                        <div class="dz-share-post">
                            <div class="dz-social-icon">
                                <h6 class="title">Share:</h6>
                                <ul>
                                    <li><a class="fab fa-facebook-f" href="javascript:void(0);"></a></li>
                                    <li><a class="fab fa-instagram" href="javascript:void(0);"></a></li>
                                    <li><a class="fab fa-twitter" href="javascript:void(0);"></a></li>
                                </ul>
                            </div>
                            {{-- <div class="post-tags">
                                <a href="javascript:void(0);">#Mobile</a>
                                <a href="javascript:void(0);">#Software</a>
                                <a href="javascript:void(0);">#Technology</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <aside class="side-bar sticky-top right">
                        <div class="widget style-1 recent-posts-entry">
                            <div class="widget-title">
                                <h4 class="title">Newest Post</h4>
                            </div>
                            <div class="widget-post-bx">
                                @foreach ($limit as $d)
                                <div class="widget-post clearfix">
                                    <div class="dz-media"> 
                                        <img src="{{asset('image/artikel/'.$d->gambar)}}" alt="">
                                    </div>
                                    <div class="dz-info">
                                        <div class="dz-meta">
                                            <ul>
                                                <li class="post-date"> {{date('d M Y', strtotime($d->created_at))}}</li>
                                            </ul>
                                        </div>
                                        <h6 class="title"><a href="{{route('user.blog.detail',$d->slug)}}">{{($d->judul)}}</a></h6>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection