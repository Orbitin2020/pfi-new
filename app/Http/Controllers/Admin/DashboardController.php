<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Galery;
use App\Models\User;
use Auth;
use Validator;

class DashboardController extends Controller
{
    public function index() 
    {
        $news = Artikel::where('kategori', 'news')->count();
        $blog = Artikel::where('kategori', 'blog')->count();
        $artikel = Artikel::count();
        $galery = Galery::count();
        $user = User::count();

        // debugbar()->info($blog);

        return view('admin.dashboard.index', compact('news', 'blog', 'artikel', 'galery', 'user'));
    }
}
