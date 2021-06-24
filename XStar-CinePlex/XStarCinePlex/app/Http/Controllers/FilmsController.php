<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class FilmsController extends Controller
{
    function add_film()
    {
        return view('admin.add_films');
    }
}
