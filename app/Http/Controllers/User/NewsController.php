<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class NewsController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();

        return view('user.news.index',compact('artikel'));
    }

    public function blog()
    {
        return view('user.blog.index');
    }
}
