<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class regiterController extends Controller
{
    public function showRegister()
    {
        $title = 'Trang đăng ký';
        return view('Home.sign', compact('title'));
    }
    public function regiterPost(UserRequest $request)
    {
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
