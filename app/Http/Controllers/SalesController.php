<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class SalesController extends Controller
{
    public function transaksi(){
        return view('pos.sales');
    }
}
