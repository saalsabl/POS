<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($id,$nama){
        return 'ID User : '.$id. '<br> Nama : '. $nama;
    }
}
