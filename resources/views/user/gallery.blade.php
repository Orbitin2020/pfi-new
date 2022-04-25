@extends('layouts_user.master')
@section('content')
<div class="page-content bg-white">
		
    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url(assets_user/images/bnr/bnr1.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Proven Gallery</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                    @foreach ($kategori as $d)
                    <li data-filter=".{{$d->id}}" class="btn">
                        <input type="radio">
                        <a href="javascript:void(0);">{{$d->nama}}</a> 
                    </li>
                    @endforeach
                </ul>
            </div>
            
            <div class="row lightgallery sp15" id="masonry">
                @foreach ($galery as $g)
                <div class="col-lg-4 col-md-6 card-container {{$g->category->id}}">
                    <div class="dz-box style-4 m-b15">
                        <div class="dz-media">
                            <img src="{{asset('image/galeri/'.$g->gambar)}}" alt="">
                        </div>
                        <span data-exthumbimage="{{asset('image/galeri/'.$g->gambar)}}" data-src="{{asset('image/galeri/'.$g->gambar)}}" class="view-btn lightimg" title=""><i class="fas fa-plus"></i></span>
                    </div>
                </div>
                @endforeach
               
            </div>
            
        </div>
    </section>
    
  
    
</div>
@endsection
