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
        $tahun = date('Y');

        $jan = Artikel::select(\DB::raw("COUNT(*) as count"))->whereMonth('created_at', '01')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $feb = Artikel::select(\DB::raw("COUNT(*) as count"))->whereMonth('created_at', '02')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $mar = Artikel::select(\DB::raw("COUNT(*) as count"))->whereMonth('created_at', '03')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $apr = Artikel::select(\DB::raw("COUNT(*) as count"))->whereMonth('created_at', '04')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $mei = Artikel::select(\DB::raw("COUNT(*) as count"))->whereMonth('created_at', '05')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $jun = Artikel::select(\DB::raw("COUNT(*) as count"))->whereMonth('created_at', '06')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $jul = Artikel::select(\DB::raw("COUNT(*) as count"))->whereMonth('created_at', '07')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $aug = Artikel::select(\DB::raw("COUNT(*) as count"))->whereMonth('created_at', '08')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $sep = Artikel::select(\DB::raw("COUNT(*) as count"))->whereMonth('created_at', '09')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $okt = Artikel::select(\DB::raw("COUNT(*) as count"))->whereMonth('created_at', '10')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $nov = Artikel::select(\DB::raw("COUNT(*) as count"))->whereMonth('created_at', '11')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $des = Artikel::select(\DB::raw("COUNT(*) as count"))->whereMonth('created_at', '12')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');

        // debugbar()->info($jan);
        // debugbar()->info($feb);
        // debugbar()->info($mar);
        // debugbar()->info($apr);
        return view('admin.dashboard.index', compact('news', 'blog', 'artikel', 'galery', 'user', 'tahun', 'jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'des'));
    }
}
