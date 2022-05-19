<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Galery;

class NewsController extends Controller
{
    public function index()
    {
        $artikel = Artikel::where('kategori','news')->paginate(5);
        $newPost = Artikel::where('kategori', 'news')->orderBy('id', 'ASC')->limit(1)->first();
        $galery = Galery::orderBy('id', 'DESC')->limit(3)->get();
        debugbar()->info($galery);
        // dd($artikel->links());
        return view('user.news.index',compact('artikel', 'newPost', 'galery'));
    }

    public function blog()
    {
        $blog = Artikel::where('kategori','blog')->paginate(5);
        $galery = Galery::orderBy('id', 'DESC')->limit(3)->get();
        // debugbar()->info($blog);
        return view('user.blog.index',compact('blog', 'galery'));
    }

    public function detail($slug)
    {
        $artikel = Artikel::where('slug',$slug)->where('kategori','news')->first();
        $limit = Artikel::where('kategori','news')->limit(3)->get();
        return view('user.news.detail',compact('artikel','limit'));
       
    }

    public function blog_detail($slug)
    {
        $artikel = Artikel::where('slug',$slug)->where('kategori','blog')->first();
        $limit = Artikel::where('kategori','blog')->limit(3)->get();
        return view('user.blog.detail',compact('artikel','limit'));
       
    }
}
