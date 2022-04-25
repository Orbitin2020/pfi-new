<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class NewsController extends Controller
{
    public function index()
    {
        $artikel = Artikel::where('kategori','news')->paginate(5);
        // dd($artikel->links());
        return view('user.news.index',compact('artikel'));
    }

    public function blog()
    {
        return view('user.blog.index');
    }

    public function detail($slug)
    {
        $artikel = Artikel::where('slug',$slug)->where('kategori','news')->first();
        $limit = Artikel::limit(3)->get();
        return view('user.news.detail',compact('artikel','limit'));
       
    }
}
