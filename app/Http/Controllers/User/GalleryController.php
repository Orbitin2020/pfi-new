<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galery;
use App\Models\Galery_categories;

class GalleryController extends Controller
{
    public function index()
    {
        $kategori = Galery_categories::all();
        $galery = Galery::all();
        return view('user.gallery',compact('kategori','galery'));
    }
    
}
