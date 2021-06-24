<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    function show_dashboard()
    {
        return view ('admin.dashboard');
    }
    public function logout()
    {
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return redirect::to('/trang-chu');
    }
}
