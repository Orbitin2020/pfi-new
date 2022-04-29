<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        return view('user.training.about');
    }
    public function inhouse()
    {
        return view('user.training.house_training');
    }
    public function productivity()
    {
        return view('user.training.productivity');
    }
    public function outbound()
    {
        return view('user.training.outbound');
    }
    public function public_training()
    {
        return view('user.training.public');
    }
}
