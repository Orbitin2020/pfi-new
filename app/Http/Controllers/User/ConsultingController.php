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
}
