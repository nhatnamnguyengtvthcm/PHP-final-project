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
//Route general link
Route::get('/', 'Front_end\Generate_link@login');
Route::get('Logout', 'Front_end\Phuc_registerLogin@logOut');
Route::post('user/register', 'Front_end\Phuc_registerLogin@Register');
Route::post('user/login', 'Front_end\Phuc_registerLogin@checkLogin');
Route::get('user/login_user', 'Front_end\Phuc_registerLogin@login');



//Route của front_end của Phuc
Route::prefix('user')->name('user')->middleware('chekLogin')->group(function(){

});


//Route backend admin cua Phuc
Route::prefix('admin')->name('admin')->middleware('checkAdmin')->group(function(){
    Route::get('/adminDashboard', 'Front_end\Generate_link@dashboard');
});


