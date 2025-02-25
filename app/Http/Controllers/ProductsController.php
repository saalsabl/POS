<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function foodb(){
        return view('pos.foodb');
    }

    public function beautyh(){
        return view('pos.beautyh');
    }

    public function homecare(){
        return view('pos.homecare');
    }

    public function babykid(){
        return view('pos.babykid');
    }
}
