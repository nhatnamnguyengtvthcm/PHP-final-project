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
Route::get('reserve-seat','BookSeatController@bookSeat');
//Route của front_end của Phuc
Route::get('users/login_resgister', "Front_end\Generate_link@login");
//Route backend của Phuc
Route::post('users/register', "Front_end\Phuc_registerLogin@Register");
// Hoang backend admin
route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout', 'AdminController@logout');
//  Hoang Danh muc films
Route::get('/add-film','FilmsController@add_film');
