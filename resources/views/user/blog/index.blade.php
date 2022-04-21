@extends('layouts_user.master')
@section('content')

<div class="page-content bg-white">
		
    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm my-paroller overlay-black-middle text-center" id="my-element" data-paroller-factor="-0.5" data-paroller-direction="horizontal" style="background-image: url(images/bnr/bnr1.jpg);">
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
                <div class="col-xl-12 col-lg-12 m-b40">
                    <div class="dz-card style-1 shadow m-b30">
                        <div class="dz-media">
                            <a href="blog-details.html"><img src="{{asset('assets_user/images/blog/large/pic1.jpg')}}" alt=""></a>
                        </div>
                        <div class="dz-info">
                            <div class="dz-meta">
                                <ul>
                                    <li class="post-date">August 30, 2019</li>
                                </ul>
                            </div>
                            <h3 class="dz-title"><a href="blog-details.html">Agency Doesn't Have To Be Hard. Read These 9 Tricks Go Get A Head Start.</a></h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent eget aliquet nibh. Integer tincidunt odio enim, quis tempor sapien tristique consequat. Maecenas consequat tempor ipsum, quis tempus orci mattis et. Praesent mollis scelerisque mattis.</p>
                        </div>
                    </div>
                    <div class="dz-card style-1 shadow m-b30">
                        <div class="dz-media">
                            <a href="blog-details.html"><img src="{{asset('assets_user/images/blog/large/pic2.jpg')}}" alt=""></a>
                        </div>
                        <div class="dz-info">
                            <div class="dz-meta">
                                <ul>
                                    <li class="post-date">August 30, 2019</li>
                                </ul>
                            </div>
                            <h3 class="dz-title"><a href="blog-details.html">The Most Common Agency Debate Isn't As Simple As You May Think</a></h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent eget aliquet nibh. Integer tincidunt odio enim, quis tempor sapien tristique consequat. Maecenas consequat tempor ipsum, quis tempus orci mattis et. Praesent mollis scelerisque mattis.</p>
                        </div>
                    </div>
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