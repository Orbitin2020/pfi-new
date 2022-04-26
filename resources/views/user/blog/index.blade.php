@extends('layouts_user.master')
@section('content')

<div class="page-content bg-white">
		
    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm my-paroller overlay-black-middle text-center" id="my-element" data-paroller-factor="-0.5" data-paroller-direction="horizontal" style="background-image: url(assets_user/images/bnr/bnr1.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Blog</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Articles</li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
                    @foreach ($blog as $d)
                    <div class="dz-card style-1 shadow m-b30">
                        <div class="dz-media">
                            <a href="{{route('user.blog.detail',$d->slug)}}"><img src="{{asset('image/artikel/'.$d->gambar)}}" alt=""></a>
                        </div>
                        <div class="dz-info">
                            <div class="dz-meta">
                                <ul>
                                    <li class="post-date">{{date('d M Y', strtotime($d->created_at))}}</li>
                                </ul>
                            </div>
                            <h3 class="dz-title"><a href="{{route('user.blog.detail',$d->slug)}}">{{($d->judul)}}</a></h3>
                            <p>{{Str::limit(strip_tags($d->detail), 150)}}</p>
                        </div>
                    </div>
                    @endforeach
                   
                    <nav aria-label="Blog Pagination">
                        @if ($blog->hasPages())
                            <ul class="pagination text-center m-b30 m-t50 m-lg-t10">
                                {{-- @if ($blog->onFirstPage())
                                    
                                @else
                                    <li class="page-item"><a class="page-link prev" href="{{ $blog->previousPageUrl() }}"><i class="fas fa-chevron-left"></i></a></li>
                                @endif --}}
                                {{ $blog->links() }}
                                {{-- @if ($blog->hasMorePages())
                                    <li class="page-item"><a class="page-link next" href="{{ $blog->nextPageUrl() }}"><i class="fas fa-chevron-right"></i></a></li>
                                    
                                @else
                                    <li class="page-item disabled"><a class="page-link next" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
                                @endif --}}
                                
                            </ul>
                        @endif 
                    </nav>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <aside class="side-bar sticky-top right">
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
                                <h4 class="title">Newest Post</h4>
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
                                        <h6 class="title"><a href="{{route('user.blog.detail',$d->slug)}}">Aliqua sodales vestibulum risus nterdum malesuad</a></h6>
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