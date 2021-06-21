<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front_end\Phuc_registerLogin;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'Front_end\Generate_link@login');



//Route của front_end của Phuc
Route::get('users/login_user', 'Front_end\Phuc_registerLogin@login');
//Route backend của Phuc
Route::post('register', 'Front_end\Phuc_registerLogin@Register');

