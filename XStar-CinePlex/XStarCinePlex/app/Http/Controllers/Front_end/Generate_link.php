<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Generate_link extends Controller
{
    //click login
    public function login() {
        return view('layout.master');
    }
}
