<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookSeatController extends Controller
{
    public function bookSeat(){
        return view('bookSeat.bookSeat');
    }
    public function newBookTicket(Request $request){
        $email = $request->input('email');
        $movietitle = $request->input('movietitle');
        $seat = $request->input('seat');
        $theatre = $request->input('theatre');
        $hour = $request->input('hour');
        $date = $request->input('date');
        $moreproduct = $request->input('moreproduct');
        $totalPrice = $request->input('totalPrice');
        $booktiket = DB::table('booktiket')->insert([
            'UserId'=>$email,
            'MovieTitle'=>$movietitle,
            'SeatName'=>$seat,
            'MoreProduct'=>$moreproduct,
            'TimeMovie'=>$hour,
            'AddressCinema'=>$theatre,
            'DateMovie'=>$date,
            'TotalPrice'=>$totalPrice,
            'active'=>true,

        ]);
        return view('payment.payseat')->with([
            'booktiket'=>$booktiket
        ]);
    }
}
