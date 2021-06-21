<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class Phuc_registerLogin extends Controller
{
    //
    public function Register(Request $request) {
        $val = Validator::make($request->all(),[
            "textName" => 'required',
            'textPhone' => 'required|numeric',
            'textEmail' => 'required|email',
            'textPassword' => 'required',
            'textBirth' => 'required'
        ]);

        if($val->fails()) {
            return response()->json(['status'=> 0, 'error'=>$val->errors()->toArray()]);
        } else {
            $value = [
                "textName" => $request->textName,
                'textPhone' => $request->textPhone,
                'textEmail' => $request->textEmail,
                'textPassword' => $request->textPassword,
                'textBirth' => $request->textBirth
            ];
            $querry = DB::table('account')->insert($value);
            if($querry) {
                return response()->json(['status'=> 1, 'msg'=>'Your account has been success']);
            }
        }

    }
}
