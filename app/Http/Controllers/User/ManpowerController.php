<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManpowerController extends Controller
{
    public function index()
    {
        return view('user.manpower.about');
    }

    public function outsourcing()
    {
        return view('user.manpower.outsource');
    }
}
