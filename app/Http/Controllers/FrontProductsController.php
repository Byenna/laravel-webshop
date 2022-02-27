<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontProductsController extends Controller
{

    public function machines(){
        return view('/machines');
    }

    public function beans(){
        return view('/beans');
    }

    public function cups(){
        return view('/cups');
    }
}
