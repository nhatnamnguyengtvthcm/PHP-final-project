<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookSeatController extends Controller
{
    public function bookSeat(Request $request){
       

        $info = [
            'email' => $request->input('email'),
            'movietitle' => $request->input('movietitle'),
            'theatre' => $request->input('theatre'),
            'hour' => $request->input('hour'),
            'date' => $request->input('date')
        ];

        // DD($info);

        $occupiedSeatCollection =  DB::table('booktiket')->select('Seat')->where([
            ['MovieTitle', '=', $info['movietitle']],
            ['AddressCinema', '=', $info['theatre']],
            ['TimeMovie', '=', $info['hour']],
            ['DateMovie', '=', $info['date']]
        ])->get();
        
        // DD($occupiedSeatCollection);
        
        $occupiedSeatNames = [];

        foreach ($occupiedSeatCollection as $stdObj) {
            $divideSeat = explode(',', $stdObj->Seat);
            // DD($divideSeat);
            array_push($occupiedSeatNames, ...$divideSeat);
        }

        return view('bookSeat.bookSeat',[
            'occupiedSeat' => $occupiedSeatNames,
            'basicInfo' => $info
        ]);

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
         DB::table('booktiket')->insert([
            'Email'=>$email,
            'MovieTitle'=>$movietitle,
            'Seat'=>$seat,
            'ComboFood'=>$moreproduct,
            'TimeMovie'=>$hour,
            'AddressCinema'=>$theatre,
            'DateMovie'=>$date,
            'TotalPrice'=>$totalPrice,
            'active'=>true,
        ]);
        $bt = DB::table('booktiket')->where(['Email'=> $email])->first();
        return view('payment.payseat')->with(['bt'=>$bt]);
    }
}
