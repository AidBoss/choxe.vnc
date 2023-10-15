<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;

class loginController extends Controller
{
    public function showLogin()
    {
        $title = 'Trang đăng nhập';
        return view('Home.login', compact('title'));
    }
    public function loginPost(Request $request)
    {

        $credentials = $request->only('name', 'password');
        $remember = $request->has('remember') ? true : false;
        if (Auth::attempt($credentials, $remember)) {
            if (isset($remember) && !empty($remember)) {
                setcookie('name', $request['name'], time() + 3600);
                setcookie('password', $request['password'], time() + 3600);
            } else {
                setcookie('name', '');
                setcookie('password', '');
            }
            $check = auth()->user()->level;
            if ($check == '1') {
                return redirect()->route('showListAcc');
            };
            return redirect()->route('userIndex');
        }
        return back()->with('fail', 'Tài khoản hoặc mật khẩu sai');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('showLogin');
    }
}