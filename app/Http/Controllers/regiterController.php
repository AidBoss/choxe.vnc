<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class regiterController extends Controller
{
    public function showRegister()
    {
        return view('Home.sign');
    }
    public function regiterPost(Request $request)
    {
        $request->validate([
            'name' => 'required|min:6|max:255',
            'phone' => 'required|numeric|digits:10',
            'email' => 'required|email',
            'password' => 'required|min:6|max:255',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->level = 0;
        $res = $user->save();
        if ($res) {
            return redirect()->route('showLogin')->with('success', 'Bạn đã đăng ký thành công');
        } else {
            return redirect()->route('showRegister')->with('fail', 'Có một vài lỗi!');
        }
    }
}
