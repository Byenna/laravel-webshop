<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function welcome(){
        return view('frontend.home');
    }

    public function about(){
        return view('about');
    }

    public function machines(){
        return view('frontend.machines');
    }

    public function beans(){
        return view('frontend.beans');
    }

    public function cups(){
        return view('frontend.cups');
    }
}
