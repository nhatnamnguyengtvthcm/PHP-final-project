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

Route::get('/', function () {
    return view('users/main');
});
//Route front_end của Xuyen
Route::get('reserve-seat','BookSeatController@bookSeat');
Route::post('payment/payment-ticket','BookSeatController@newBookTicket');
//Route của front_end của Phuc
Route::get('users/login_resgister', "Front_end\Generate_link@login");
//Route backend của Phuc
Route::post('users/register', "Front_end\Phuc_registerLogin@Register");

