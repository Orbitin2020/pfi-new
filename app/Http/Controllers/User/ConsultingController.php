<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultingController extends Controller
{
    public function index()
    {
        return view('user.consulting.about');
    }
    public function organizational()
    {
        return view('user.consulting.organizational');
    }
    public function performance()
    {
        return view('user.consulting.performance');
    }
    public function management()
    {
        return view('user.consulting.management');
    }
    public function lean()
    {
        return view('user.consulting.lean');
    }
    public function digital()
    {
        return view('user.consulting.digital');
    }
}
