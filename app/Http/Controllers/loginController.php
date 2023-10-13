<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function showLogin()
    {
        return view('Home.login');
    }
    public function loginPost(Request $request)
    {
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            if (isset($request['remember']) && !empty($request['remember'])) {
                setcookie('name', $request['remember'], time() + 3600);
                setcookie('password', $request['remember'], time() + 3600);
            } else {
                setcookie('name', '');
                setcookie('password', '');
            }
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
