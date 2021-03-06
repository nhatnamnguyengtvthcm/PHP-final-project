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
Route::get('/', function () {
    return view('users/main');
});
//Route front_end của Xuyen
// Route::get('reserve-seat','BookSeatController@bookSeat');
Route::post('reserve-seat','BookSeatController@bookSeat')->name('postBookSeat');
Route::prefix('admin')->name('admin')->middleware('checkAdmin')->group(function(){
    Route::get('/adminDashboard', 'Front_end\Generate_link@dashboard');
});
Route::get('users/login_resgister', "Front_end\Generate_link@login");
//Route backend của Phuc
Route::post('users/register', "Front_end\Phuc_registerLogin@Register");
Route::post('payment/payment-ticket','BookSeatController@newBookTicket');
Route::get('cenimainfo','CinemaController@CenimaInFor');
//Route của front_end của Phuc

