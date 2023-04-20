<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function login()
    {

        return view('login');
    }

    public function loginAccount(Request $request)
    {
        $credentials = $request->only('name', 'password');

        $user = DB::table('users')
            ->where('name', $credentials['name'])
            ->where('password', $credentials['password'])
            ->first();

        if ($user) {

            Session::put('name', $user->name);
            Session::put('realname', $user->realname);

            return redirect()->intended('/contact');
        } else {
            return view('login', ['err' => "帳號密碼輸入錯誤"]);
        }

    }

}
