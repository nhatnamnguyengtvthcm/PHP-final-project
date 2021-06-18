<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookSeatController extends Controller
{
    public function bookSeat(){
        return view('bookSeat.bookSeat');
    }
}
