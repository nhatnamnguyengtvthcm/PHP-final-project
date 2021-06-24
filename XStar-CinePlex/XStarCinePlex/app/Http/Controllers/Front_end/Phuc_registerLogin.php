<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\account;
use Illuminate\Support\Facades\Hash;

class Phuc_registerLogin extends Controller
{

     //click login
     public function login() {
        return view('users.login_user');
    }

    public function Register(Request $request) {
        $role = 2;
        request()->validate([
            'textName'=> 'required',
            'textEmail' => 'required|email|unique:accounts,email',
            'textPassword' => 'required',
            'textPhone' => 'required',
            'textBirth' => 'required',
        ]);
        $data = $request->except(['_token']);
        $account = new account;
        $account->fullname = $data['textName'];
        $account->email = $data['textEmail'];
        $account->phone = $data['textPhone'];
        $account->password = $data['textPassword'];
        $account->gender = $data['gender'];
        $account->birth = $data['textBirth'];
        $account->preferSite = $data['textPrefer'];
        $account->active = $role;
        $account->role = $role;
        $check = $account->save();
       /*  $arr = array('msg'=> 'Something goes to wrong.', 'status' => false); */

        if($check) {
            $arr = array('msg' => 'Successfull register account', 'status' => true);
             return  response()->json($arr);  }
                 return response()->json();

    }
    public function checkLogin(Request $request) {
        $admin = 1;
        $role = 2;
        $request->validate([
            'loginEmail'=>'required|email',
            'loginPassword' => 'required|min:6'
        ]);

        $userAccount = account::where('email', '=', $request->loginEmail)->first();
        $email = $request->input('loginEmail');
        $password = $request->input('loginPassword');
        if(!$userAccount) {
            return back()->with('fail', 'This account does not exsit');
        } else {
            if ($password == $userAccount->password && $role == $userAccount->role ) {
                $request->session()->put('userLog', $userAccount->Account_Id);
                return redirect('/');
            } else {
                if ($password == $userAccount->password && $admin == $userAccount->role ) {
                    $request->session()->put('adminLog', $userAccount->Account_Id);
                    return redirect('admin/adminDashboard');
                } else {
                    return back()->with('fail', 'Incorret Password');
                }

            }

        }
    }

    public function logOut() {
        if (session()->has('userLog')) {
            session()->pull('userLog');
            return redirect('user/login_user');
        }
        if (session()->has('adminLog')) {
            session()->pull('adminLog');
            return redirect('user/login_user');
        }
    }
}

