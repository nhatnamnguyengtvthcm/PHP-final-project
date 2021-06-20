<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class Phuc_registerLogin extends Controller
{
    //
     //click login
     public function login() {
        return view('users.login_resgiter');
    }

    public function Register(Request $request) {
        $role = 2;
        $validator = Validator::make($request->all(),[
            "textName" => 'required',
            'textPhone' => 'required|unique:Phone',
            'textEmail' => 'required|email|unique:Email',
            'textPassword' => 'required',
            'textBirth' => 'required',
            'gender'  => 'required'
        ]);
        $name =  $request->input('textName');
        $phone = $request->input('textPhone');
        $email =  $request->input('textEmail');
        $password = $request->input('textPassword');
        $birth = $request->input('textBirth');
        $gender = $request->input('gender');
        $prefer = $request->input('textPrefer');
        $querry = DB::table('account')->insert([
            'Name'=> $name,
            'Email' => $email,
            'password' => $password,
            'Phone' => $phone,
            'Date_Birth' => $birth,
            'Gender'=> $gender,
            'Prefer_site'=>$prefer,
            'role'=> $role,
            'active'=>$role
        ]);
        $arr = array('msg'=> 'Something goes to wrong. Please try agin later', 'status' => false);
        if($querry) {
            $arr = array('msg' => 'Successfull register account', 'status' => true);
        }
        return Response()->json($arr);
    }
}
